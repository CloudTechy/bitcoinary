<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class TransactionMade extends Notification implements ShouldQueue{
	use Queueable;
	protected $transaction, $dashboardPath;

	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct($transaction) {
		$this->transaction = $transaction;
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
		$transaction = $this->transaction;
		$dashboardPath = $notifiable->isAdmin() == true ? config('frontend.url').'/admin/deposit/details/'. $transaction->id : config('frontend.url').'/dashboard/transaction/details/'. $transaction->id;
		return (new MailMessage)
			->greeting('Dear ' . $notifiable->username . ',')
			->subject('Account Credited')
			->line('A credit transaction has occured in your account')
			->line('This is to notify you that a sum of $' . $transaction->amount . ' has been credited into your account')
			->action('View Transaction', url($dashboardPath))
			->line('Thank you for investing with us');
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
            'model' => 'transaction',
            'message' => 'Your account has been credited with the sum of $' . $this->transaction->amount . '.',
            'path' =>  $notifiable->isAdmin() == true ? config('frontend.url').'/admin/deposit/details/'.$this->transaction->id : config('frontend.url').'/dashboard/transaction/details/'.$this->transaction->id,
            'type' => 'notification',
        ];
    }
}
