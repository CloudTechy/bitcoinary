<?php

namespace App\Notifications;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class MailResetPasswordNotification extends ResetPassword {
	use Queueable;
	/**
	 * Create a new notification instance.
	 *
	 * @return void
	 */
	public $token;
	public function __construct($token) {
		$this->token = $token;
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
		$link = url(config('frontend.url') . "/reset_password?token=" . $this->token);
		return (new MailMessage)
			->subject('Reset Password Notification')
			->greeting('Hello! ' . $notifiable->username . ',')
			->line("You are receiving this email because we received a password reset request for your account.")
			->action('Reset Password', $link)
			->line("This password reset link will expire in " . config('auth.passwords.users.expire') . " minutes")
			->line("If you did not request a password reset, no further action is required.");
	}

	/**
	 * Get the array representation of the notification.
	 *
	 * @param  mixed  $notifiable
	 * @return array
	 */
	public function toArray($notifiable)
    {
        return [
            //
        ];
    }
    public function toDatabase($notifiable)
    {
        return [
            'model' => 'mail_request',
            'message' => 'A password reset link was sent to your email',
            'type' => 'notification',
        ];
    }
}
