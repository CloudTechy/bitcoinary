<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\User;
use Carbon\Carbon;

class ReferralResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $user = User::find($this['id']);
        $packages = $user->activePackages;
        $totalCommission = 0;
        $totalAmount = 0;
        $totalInterest = 0;
        for ($i=0; $i < count($packages); $i++) { 
            $package = $packages[$i];
            $commission =  $this['referral_level'] == 1 ? $package->first_level_ref_commission :  $package->second_level_ref_commission;
            $amount =  $package->subscription->amount;
            $interest = ($commission / 100) * $amount;
            $totalCommission += $commission;
            $totalAmount += $amount;
            $totalInterest += $interest;
        }
        return [
            'id' => $user->id,
            'username' => $user->username,
            'referral_level' => $this['referral_level'],
            'active' => empty($user->activeTransactions) ? false : true,
            'cumulativeRate' => $totalCommission,
            'cumulativeInvestment' => $totalAmount,
            'cumulativeCommission' => $totalInterest,
            'totalCommission' => $user->confirmedTransactions->where('reference', 'BM first tier commission')->sum('amount') + $user->confirmedTransactions->where('reference', 'BM second tier commission')->sum('amount'),
            'date' => Carbon::createFromTimeStamp(strtotime($user->created_at))->toFormattedDateString(),
            'created_at' => $user->created_at->format('Y-m-d H:i:s'),

        ];
    }
}
