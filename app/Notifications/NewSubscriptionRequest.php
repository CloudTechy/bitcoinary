<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class NewSubscriptionRequest extends Notification implements ShouldQueue {
    use Queueable;
    protected $subscription, $dashboardPath;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($subscription) {
        $this->subscription = $subscription;
        $this->dashboardPath = config('frontend.url').'/admin/subscription/details/'.$subscription->id;
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
            ->line(new \Illuminate\Support\HtmlString('<br> User: <b>' . $subscription->user->names . '</b>'))
            ->line(new \Illuminate\Support\HtmlString('Plan: <b>' . $subscription->package->name . ' </b>'))
            ->line(new \Illuminate\Support\HtmlString('Amount: <b>$' . $subscription->amount . '</b><br><br>'))
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
