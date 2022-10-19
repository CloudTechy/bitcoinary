<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class AdminNewDepositRequest extends Notification implements ShouldQueue {
    use Queueable;
    protected $transaction, $dashboardPath;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($transaction) {
        $this->transaction = $transaction;
        $this->dashboardPath = config('frontend.url').'/admin/deposit/details/'.$transaction->id;
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
        $transaction = $this->transaction;
        return (new MailMessage)
            ->greeting('Dear ' . $notifiable->username . ',')
            ->subject('Deposit Request from '. $notifiable->username)
            ->line('A deposit request just occured ')
            ->line('This is to notify you that the user '.$transaction->user->username.' has requested to deposit $'. $transaction->amount . ' and has claimed deposit through '.  $transaction->payment_method) 
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
            'model' => 'transaction',
            'message' => $this->transaction->user->username . ' claimed deposit of $' .$this->transaction->amount .' through ' . $this->transaction->payment_method . ', kindly review.',
            'path' => $this->dashboardPath,
            'type' => 'notification',
        ];
    }
}
