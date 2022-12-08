<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class AdminNewP2PTransferRequest extends Notification implements ShouldQueue
{
    use Queueable;
    protected $transaction,$sender, $receiver, $dashboardPath;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($transaction, $sender, $receiver)
    {
        $this->transaction = $transaction;
        $this->sender = $sender;
        $this->receiver = $receiver;
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
         $sender = $this->sender;
         $receiver = $this->receiver;
        return (new MailMessage)
            ->greeting('Dear ' . $notifiable->username . ',')
            ->subject('P2P Transfer Request from '. $sender->username)
            ->line('A peer to peer transfer request just occured ')
            ->line(new \Illuminate\Support\HtmlString('<br><b> **************Sender Details**************</b>'))
            ->line(new \Illuminate\Support\HtmlString('<b> Names: </b>' . $sender->names))
            ->line(new \Illuminate\Support\HtmlString('<b> Username: </b>' . $sender->username .'<br>'))
            ->line(new \Illuminate\Support\HtmlString('<b> Email: </b>' . $sender->email .'<br><br>'))
            ->line(new \Illuminate\Support\HtmlString('<b> **************Receiver Details**************</b>'))
            ->line(new \Illuminate\Support\HtmlString('<b> Names: </b>' . $receiver->names))
            ->line(new \Illuminate\Support\HtmlString('<b> Username: </b>' . $receiver->username .'<br>'))
            ->line(new \Illuminate\Support\HtmlString('<b> Email: </b>' . $receiver->email .'<br><br>'))
            ->line(new \Illuminate\Support\HtmlString('<b> Amount: </b>$' . $transaction->amount .'<br><br>'))
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
            'model' => 'transaction',
            'message' => $this->sender->username . ' transferred $' .$this->transaction->amount .' to ' . $this->receiver->username,
            'path' => $this->dashboardPath,
            'type' => 'notification',
        ];
    }
}
