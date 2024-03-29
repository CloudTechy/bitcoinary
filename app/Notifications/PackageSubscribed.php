<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PackageSubscribed extends Notification implements ShouldQueue {
	use Queueable;
	protected $subscription;

	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct($subscription) {
        $this->subscription = $subscription;
        
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
		$subscription = $this->subscription;
		$dashboardPath = $notifiable->isAdmin == true  ? config('frontend.url').'/admin/dashboard' : config('frontend.url').'/dashboard/';
		return (new MailMessage)
			->greeting('Dear ' . $notifiable->username . ',')
			->subject('Successful Package Subscription')
			->line('Your subscription was successful and your active account has been credited with $' . $subscription->amount)
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
            'model' => 'subscription',
            'message' => 'Your $' . $this->subscription->amount . ' investment is now active',
            'path' => $notifiable->isAdmin == true  ? config('frontend.url').'/admin/dashboard' : config('frontend.url').'/dashboard/',
            'type' => 'notification',
        ];
    }
}
