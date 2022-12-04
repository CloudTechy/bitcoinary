<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\KYC;

class KYCRequest extends Notification implements ShouldQueue
{
    use Queueable;
    protected $kyc, $path;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(Kyc $kyc)
    {
        $this->kyc = $kyc;
        $this->path = config('frontend.url').'/admin/kyc/details/'.$kyc->id;
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
        $kyc = $this->kyc;
        return (new MailMessage)
            ->greeting('Dear ' . $notifiable->username . ',')
            ->subject('KYC Verification Request')
            ->line('A KYC verification request just occured ')
            ->line(new \Illuminate\Support\HtmlString('<br> User: <b>' . $kyc->user->names . '</b>'))
            ->line(new \Illuminate\Support\HtmlString('Identification Method: <b>' . $kyc->type . ' </b><br> '))
            ->line('kindly review this occurence as soon as possible')
            ->action('Review', url($this->path));

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
            'model' => 'kyc',
            'message' => $this->kyc->user->username . ' has submitted request for kyc verification with ' .$this->kyc->type .', kindly review.',
            'path' => $this->path,
            'type' => 'notification',
        ];
    }
}
