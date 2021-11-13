<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CardEmail extends Notification
{
    use Queueable;
    public $card;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($card)
    {
        return $this->card = $card;
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
        return (new MailMessage)
            ->subject(" Sema Health Saver Card")
            ->greeting("Hi ".$this->card->name)
            ->line('Your Sema Health Card is available for printing')
            ->line('----------------------------------------------------------')
            ->action('Print Card', route('single_card', [$this->card->id,2]));
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
