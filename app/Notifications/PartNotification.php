<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PartNotification extends Notification
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
            ->from('partner@gmail.com', 'Partner')
            ->greeting('Hello ATESMA people!')
            ->subject($this->additionalData['subject'])
            ->line('Données de formulaire:')
            ->line('Prenom: '. $this->additionalData['form_data']['Prenom'])
            ->line('Nom: ' . $this->additionalData['form_data']['Nom'])
            ->line('Email address: ' . $this->additionalData['form_data']['Email'])
            ->line('Fonction: ' . $this->additionalData['form_data']['Fonction'])
            ->line('raison: '. $this->additionalData['form_data']['raison'])
            ->line('Site internet: '. $this->additionalData['form_data']['siteWeb'])
            ->line('phone: '. $this->additionalData['form_data']['phone']);
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

