<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WithdrawalMade extends Notification implements ShouldQueue {
	use Queueable;
	protected $withdrawal;

	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct($withdrawal) {
		$this->withdrawal = $withdrawal;
	}

	/**
	 * Get the notification's delivery channels.
	 *
	 * @param  mixed  $notifiable
	 * @return array
	 */
	public function via($notifiable) {
		return ['mail','database'];
	}

	/**
	 * Get the mail representation of the notification.
	 *
	 * @param  mixed  $notifiable
	 * @return \Illuminate\Notifications\Messages\MailMessage
	 */
	public function toMail($notifiable) {
		$withdrawal = $this->withdrawal;
		$dashboardPath = $notifiable->isAdmin == true  ? config('frontend.url').'/admin/dashboard' : config('frontend.url').'/dashboard/';
		return (new MailMessage)
			->greeting('Dear ' . $notifiable->username . ',')
			->subject('Withdrawal Request Approved')
			->line('A withdrawal was made from your account')
			->line('This is to notify you that your withdrawal request has been approved and that the sum of $' . $withdrawal->amount . ' was debited from your account with us and has been credited into your '.$withdrawal->payment_method.' wallet/account.')
			->action('Goto Dashboard', url($dashboardPath))
			->line('Thank you for investing with us')
			->bcc('conyekelu@yahoo.com','BM notification');
	}

	/**
	 * Get the array representation of the notification.
	 *
	 * @param  mixed  $notifiable
	 * @return array
	 */
	public function toArray($notifiable) {
		return [
			//
		];
	}
	public function toDatabase($notifiable)
    {
        return [
            'model' => 'withdrawal',
            'message' => 'Your $'. $this->withdrawal->amount .' withdrawal request has been approved',
            'path' =>$notifiable->isAdmin == true  ? config('frontend.url').'/admin/dashboard' : config('frontend.url').'/dashboard/',
            'type' => 'notification',
        ];
    }
}
