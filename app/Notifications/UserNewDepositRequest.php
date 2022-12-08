<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserNewDepositRequest extends Notification implements ShouldQueue {
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
        
        $transaction = $this->transaction;
        $line1 = 'We have acknowledged your deposit request of <b>$' . $transaction->amount . '</b> via <b>'. $transaction->payment_method . '</b>';
        return (new MailMessage)
            ->greeting('Dear ' . $notifiable->names . ',')
            ->subject('Deposit Notification')
            ->line(new \Illuminate\Support\HtmlString($line1))
            ->line(new \Illuminate\Support\HtmlString('Transaction ID: <b>' . $transaction->id . '</b>'))
            ->line('Your request will be approved automatically upon confirmation of payment');

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
            'message' => $this->transaction->user->names . ' claimed deposit of $' .$this->transaction->amount .' through ' . $this->transaction->payment_method . ', kindly review.',
            'path' => $this->dashboardPath,
            'type' => 'notification',
        ];
    }
}
