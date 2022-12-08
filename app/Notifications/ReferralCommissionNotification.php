<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class ReferralCommissionNotification extends Notification
{
    use Queueable;
    protected $transaction, $downline;
    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($transaction, $downline)
    {
        $this->transaction = $transaction;
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
        $downline = $this->downline;
		$dashboardPath = $notifiable->isAdmin() == true ? config('frontend.url').'/admin/deposit/details/'.$transaction->id : config('frontend.url').'/dashboard/transaction/details/'.$transaction->id;
		return (new MailMessage)
			->greeting('Dear ' . $notifiable->username . ',')
			->subject('Referral Commission')
			->line('A credit transaction has occured in your account')

            ->line(new \Illuminate\Support\HtmlString('Downline name: <b>' . $downline->names . '</b>'))
            ->line(new \Illuminate\Support\HtmlString('Downline username: <b>' . $downline->username . '</b>'))
            ->line(new \Illuminate\Support\HtmlString('Downline email: <b>' . $downline->email . '</b>'))
            ->line(new \Illuminate\Support\HtmlString('Commission amount: <b>$' . $transaction->amount . '</b><br><br>'))

			->action('Goto Dashboard', url($dashboardPath))
			->line('Thank you for investing with us');
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
}
