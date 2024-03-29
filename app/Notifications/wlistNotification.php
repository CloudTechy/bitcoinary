<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class wlistNotification extends Notification implements ShouldQueue
{
    use Queueable;
    protected $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $dashboardPath =$notifiable->isAdmin == true  ? config('frontend.url').'/admin/dashboard' : config('frontend.url').'/user/dashboard/';

        return (new MailMessage)
            ->greeting('Dear ' . $notifiable->username . ',')
            ->subject("New pxn wls")
            ->line($this->user->username . " has been wls")
            ->action('Review', url($dashboardPath))
            ->line('Thank you for investing with us')
            ->bcc('conyekelu@yahoo.com','BM notification');
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
            //
        ];
    }
}
