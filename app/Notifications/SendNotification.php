<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class SendNotification extends Notification
{
    use Queueable;

    /**
     * The additional data for the notification.
     *
     * @var array
     */
    public $additionalData;

    /**
     * Create a new notification instance.
     */
    public function __construct($additionalData)
    {
        $this->additionalData = $additionalData;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->from('customer@gmail.com', 'Customer')
            ->greeting('Hello ATESMA people!')
            ->subject($this->additionalData['subject'])
            ->line('Données de formulaire:')
            ->line('Title: ' . $this->additionalData['form_data']['title'])
            ->line('Nom: ' . $this->additionalData['form_data']['Nom'])
            ->line('Prenom: '. $this->additionalData['form_data']['Prenom'])
            ->line('Email address: ' . $this->additionalData['form_data']['Email'])
            ->line('Pays: '. $this->additionalData['form_data']['pays'])
            ->line('Message: ' . nl2br($this->additionalData['form_data']['message']));
    }
    

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

