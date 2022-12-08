<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\User;
use \Illuminate\Support\HtmlString;
use Carbon\Carbon;

class ReferralNotification extends Notification implements ShouldQueue
{
    use Queueable;
    protected $downline;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $downline)
    {
        $this->downline = $downline;
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
        return (new MailMessage)
                    ->greeting('Dear ' . $notifiable->username . ',')
			        ->subject('Referral Notification')
                    ->line('Congrats!! You have a new downline with '. config('app.name', 'Laravel' ) .'.' )
                    ->line(new HtmlString('<p>Name: <b>' . $this->downline->last_name . ' ' . $this->downline->first_name. '</b></p>'))
                    ->line(new HtmlString('<p>Username: <b>' . $this->downline->username . '</b></p>'))
                    ->line(new HtmlString('<p>Email: <b>' . $this->downline->email . '</b></p>'))
                    ->line(new HtmlString('<p>Registered on: <b>' . Carbon::createFromTimeStamp(strtotime($this->downline->created_at))->toFormattedDateString()  . '</b></p>'))
                    ->line('You earn commissions when your downlines invest with us.' )
                    ->line('Do enjoy the rest of your day.' );
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
            'model' => 'user',
            'message' => 'You have a new downline by name' . $this->downline->last_name . ' ' . $this->downline->first_name,
            'type' => 'notification',
        ];
    }
}
