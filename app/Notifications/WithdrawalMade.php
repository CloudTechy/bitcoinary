<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class WithdrawalMade extends Notification implements ShouldQueue {
	use Queueable;
	protected $withdrawal, $description;

	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct($withdrawal, $description = null) {
		$this->withdrawal = $withdrawal;
		$this->description = $description;
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
		$description = !empty($this->description) ? $this->description  : "No description" ;
		$dashboardPath = $notifiable->isAdmin() == true  ? config('frontend.url').'/admin/dashboard' : config('frontend.url').'/dashboard/withdrawal/details/' . $withdrawal->id;
		return (new MailMessage)
			->greeting('Dear ' . $notifiable->username . ',')
			->subject('Withdrawal Request Approved')
			->line('A withdrawal was made from your account with the following details')
			->line(new \Illuminate\Support\HtmlString('<b>Amount: </b>$' . $withdrawal->amount ))
			->line(new \Illuminate\Support\HtmlString('<b>Description: </b>' . $description . '<br><br>'))
			->action('View', url($dashboardPath))
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
            'model' => 'withdrawal',
            'message' => 'Your $'. $this->withdrawal->amount .' withdrawal request has been approved',
            'path' =>$notifiable->isAdmin() == true  ? config('frontend.url').'/admin/dashboard' : config('frontend.url').'/dashboard/',
            'type' => 'notification',
        ];
    }
}
