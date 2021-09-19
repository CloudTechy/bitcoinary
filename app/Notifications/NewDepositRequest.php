<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewDepositRequest extends Notification implements ShouldQueue {
    use Queueable;
    protected $subscription, $dashboardPath;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($subscription) {
        $this->subscription = $subscription;
        $this->dashboardPath = config('frontend.url').'/admin/dashboard/subscriptions?username='.$subscription->user->username;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        $subscription = $this->subscription;
        return (new MailMessage)
            ->greeting('Dear ' . $notifiable->username . ',')
            ->subject('Subscription Request')
            ->line('A subscription request just occured ')
            ->line('This is to notify you that the user '.$subscription->user->username.' has indicated interest in '. $subscription->package->name . ' Plan and has claimed deposit of $' . $subscription->amount) 
            ->line('kindly review this occurence as soon as possible')
            ->action('Review', url($this->dashboardPath));

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
            'model' => 'subscription',
            'message' => $this->subscription->user->username . ' invested $' .$this->subscription->amount .' in ' . $this->subscription->package->name . ', kindly review.',
            'path' => $this->dashboardPath,
            'type' => 'notification',
        ];
    }
}
