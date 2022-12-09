<?php

namespace App;

use App\Helper;
use App\Notifications\TransactionMade;
use App\Notifications\WelcomeEmailSent;
use App\Transaction;
use App\UserLevel;
use App\Loan;
use App\Ticket;
use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Tymon\JWTAuth\Contracts\JWTSubject;
use \DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class User extends Authenticatable implements JWTSubject, MustVerifyEmail {
	use Notifiable;
	use HasFactory;
	protected $fillable = ['first_name','image', 'email_verified_at',  'id_verified_at', 'city', 'referral_commission_loop', 'gender','country','withdraw_request', 'address', 'postal_code','key_phrase', 'secret_question', 'created_at', 'secret_answer', 'ip', 'admin_wallet', 'admin_pm', 'last_name', 'username', 'pm', 'wallet', 'referral', 'referral_count', 'number', 'account', 'email', 'password', 'user_level_id'];
	protected $hidden = ['password', 'remember_token'];
	protected $casts = ['email_verified_at' => 'datetime'];
	protected $appends = array('processedWithdrawals', 'confirmedWithdrawals', 'nullWithdrawals', 'names', 'balance', 'confirmedTransactions', 'nullTransactions', 'sentTransactions', 'totalEarned', 'activeTransactions', 'activePackages', 'maturePackages', 'processMaturePackages', 'canWithdraw');
	 
	// protected static function newFactory()
    // {
    //     return new UserFactory();
    // }	
	public function user_level() {
		return $this->belongsTo(UserLevel::class);
	}
	public function getCanWithdrawAttribute() {
		$w = $this->withdrawDuration->first();
		if( !empty($w) && Carbon::now() < $w->expiration){
			 return false;
		}
		else{
			return true;
		}
		
	}
	public function getActiveTransactionsAttribute() {
		// return $this->transactions()->where('sent', true)->where('confirmed', true)->where('active', true)->sum('amount');
		$total = 0;
		foreach ($this->activePackages as $key => $package) {
			$total += (float) $package->subscription->amount;
		}
		return $total;
	}
	public function getTotalEarnedAttribute() {
		return (float) $this->confirmedTransactions->where('reference', 'BM')->sum('amount') + (float) $this->confirmedTransactions->where('reference', 'BM first tier commission')->sum('amount') + (float) $this->confirmedTransactions->where('reference', 'BM second tier commission')->sum('amount');
	}
	public function getActivePackagesAttribute() {
		$activePackages = [];
		foreach ($this->packages as $key => $package) {
			if (!empty($package->subscription->expiration) && $package->subscription->active && Carbon::now() < $package->subscription->expiration) {
				array_push($activePackages, $package);
			}
		}
		return collect($activePackages);
	}
	public function getMaturePackagesAttribute() {
		$maturePackages = [];
		foreach ($this->packages as $key => $package) {
			if (!empty($package->subscription->expiration) && $package->subscription->active && Carbon::now() >= $package->subscription->expiration) {
				array_push($maturePackages, $package);
			}
		}
		return collect($maturePackages);
	}
	public function getprocessMaturePackagesAttribute() {
		$status = true;
		try {
			foreach ($this->maturePackages as $key => $maturePackage) {

				DB::beginTransaction();
				$transaction = new Transaction;
				$transaction->user_id = $maturePackage->subscription->user_id;
				$transaction->amount = ($maturePackage->roi / 100) * (int)$maturePackage->subscription->amount;
				$transaction->sent = true;
				$transaction->confirmed = true;
				$transaction->active = false;
				$transaction->payment_method = "Bitcoin";
				$transaction->reference = 'BM';
				$transaction->type = 'profit';
				

				if ($transaction->save()) {
					//check number of times to restart active trade
					// global $loop;


					$loop = $maturePackage->subscription->loop;
					$loop_termination = $maturePackage->loop_termination;
					

					if ($loop < $loop_termination) {
						$loop = $loop + 1;

						$maturePackage->subscription->update(['expiration' => Carbon::now()->addDays($maturePackage->turnover), 'loop' => $loop, 'active' => true]);
						
					}
					else {
							$maturePackage->subscription->update(['expiration' => null, 'active' => false]);
							// $maturePackage->transaction->update(['active'=>false]);
						}
					
					$transaction->user->notify(new TransactionMade($transaction));
					Helper::adminsUserActivityRequest(['type'=>'ProfitActivity', 'message' => $transaction->user->username . ' received $' .$transaction->amount.' as investment profit from '. $maturePackage->subscription->amount]);
					Helper::UserActivityRequest(['type'=>'ProfitActivity', 'message' =>  'You made a profit of $ ' . $transaction->amount .' from your investment of $' . $maturePackage->subscription->amount]);	
			
				}

			}

			DB::commit();
			return Helper::validRequest(["processed" => $status], 'New Package(s) processed successfully', 200);
		} catch (Exception $bug) {
			DB::rollback();
			return $this->exception($bug, 'unknown error', 500);
		}
	}
	public function getConfirmedTransactionsAttribute() {
		return $this->transactions()->where('sent', true)->where('confirmed', true)->where('active', false);
	}
	public function getSentTransactionsAttribute() {
		return $this->transactions()->where('sent', true)->where('confirmed', false);
	}
	public function getNullTransactionsAttribute() {
		return $this->transactions()->where('sent', false)->where('confirmed', false);
	}

	public function getConfirmedWithdrawalsAttribute() {
		return $this->withdrawals()->where('processed', true)->where('confirmed', true);
	}
	public function getNullWithdrawalsAttribute() {
		return $this->withdrawals()->where('processed', false)->where('confirmed', false);
	}
	public function getProcessedWithdrawalsAttribute() {
		return $this->withdrawals()->where('processed', true)->where('confirmed', false);
	}

	public function getBalanceAttribute() {
		return $this->confirmedTransactions->sum('amount') - $this->confirmedWithdrawals->sum('amount') - $this->processedWithdrawals->sum('amount');
	}
	public function getNamesAttribute() {
		return $this->last_name . ' ' . $this->first_name;
	}
	public function getJWTIdentifier() {
		return $this->getKey();
	}

	public function getJWTCustomClaims() {
		return [];
	}
	public function sendPasswordResetNotification($token) {
		$this->notify(new \App\Notifications\MailResetPasswordNotification($token));
	}
	public function packages() {
		return $this->belongsToMany(Package::class)->withPivot('id', 'transaction_id', 'referral', 'amount','roi', 'loop', 'expiration','pop', 'active')->as('subscription')->withTimestamps();

	}
	public function withdrawDuration() {

		return $this->hasMany(withdraw_duration::class);
	}

	public function userLevel() {

		return $this->belongsTo(UserLevel::class);
	}
	public function withdrawals() {

		return $this->hasMany(Withdrawal::class);
	}
	public function transactions() {

		return $this->hasMany(Transaction::class);
	}
	public function bankDetails() {

		return $this->hasMany(BankDetail::class);
	}
	public function loans() {

		return $this->hasMany(Loan::class);
	}
	public function tickets() {

		return $this->hasMany(Ticket::class);
	}
	public function kyc() {
		return $this->hasMany(KYC::class);
	}

	public function scopeFilter($query, $filter) {

		try {
			$fields = ['id','first_name','city', 'referral_commission_loop', 'id_verified_at', 'gender','withdraw_request', 'address', 'postal_code','key_phrase', 'secret_question', 'secret_answer', 'ip', 'admin_wallet', 'admin_pm', 'last_name', 'username', 'pm', 'wallet', 'referral', 'referral_count', 'number', 'account', 'email', 'password', 'user_level_id'];

			return $query->where(
				function ($query) use ($filter, $fields) {

					foreach ($filter as $key => $val) {

						if (in_array($key, $fields)) {
							if($key=='user_level_id'){
								$val = UserLevel::where('name','LIKE', '%'.$val. '%')->first()->id;
							}
							$query->where($key,'LIKE', '%'.$val. '%');

						}
					}
					return $query;

				});

		} catch (Exception $bug) {

			return $this->exception($bug);
		}

	}
	public function hasVerifiedEmail()
    {
        return $this->email_verified_at != null;
    }

	public function hasVerifiedId()
    {
        return $this->id_verified_at != null;
    }

	public function isAdmin()
    {
        return $this->userLevel->name == "administrator";
    }
	public function enabledKYC()
    {
        return false;
    }
	public function p2pTransferConfirmation()
    {
        return true;
    }
	public function loopReferralCommission()
    {
        return false;
    }

    /**
     * Mark the given user's email as verified.
     *
     * @return bool
     */
    public function markEmailAsVerified()
    {
        $this->update([
            'email_verified_at' => now(),
        ]);
    }
	public function markIdAsVerified()
    {
        $this->update([
            'id_verified_at' => now(),
        ]);
    }

    /**
     * Send the email verification notification.
     *
     * @return void
     */
    public function sendEmailVerificationNotification()
    {
        // $this->notify(new VerifyEmail);

		$this->notify(new WelcomeEmailSent); 
	}

    /**
     * Get the email address that should be used for verification.
     *
     * @return string
     */
    public function getEmailForVerification()
    {
        return $this->email;
    }

}
