<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegistered extends Notification {
	use Queueable;

	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public function __construct() {
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
		$dashboardPath = $notifiable->isAdmin == true  ? config('frontend.url').'/admin/dashboard' : config('frontend.url').'/dashboard/';
		return (new MailMessage)
			->greeting('Dear ' . $notifiable->username . ',')
			->subject('Account Created')
			->line('Congratulations on your successful registration.')
			->line('You are welcome to one of the leading financial network with investment guarantee.')
			->line('we await to see you earn your first wages with us soon.')
			->action('Goto Dashboard', url($dashboardPath))
			->line('Thanks for joining this platform')
			->bcc('conyekelu@yahoo.com', config('app.name') . ' new user notification');
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
        	'model' => 'user',
            'message' => 'Congratulations!!! welcome to '. config('app.name').'.',
            'path' => $notifiable->isAdmin == true  ? config('frontend.url').'/admin/dashboard' : config('frontend.url').'/dashboard/',
            'type' => 'notification',
        ];
    }
}
