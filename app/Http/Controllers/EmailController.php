<?php

namespace App\Http\Controllers;

use App\Notifications\SendNotification;
use App\Notifications\PartNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class EmailController extends Controller
{
    public function envoyer_email(Request $req)
    {
        $liste_emails = ['Atesma@gmail.com'];
        // Additional data you want to send with the notification
        $additionalData = [
            'subject' => 'Buy a certification',
            'form_data' => [
                'title' => $req->input('title'),
                'Nom' => $req->input('Nom'),
                'Prenom' => $req->input('Prenom'),
                'Email' => $req->input('Email'),
                'pays' => $req->input('pays'),
                'message' => $req->input('message'),
            ],
        ];

        try {
            Notification::route('mail', $liste_emails)
                ->notify(new SendNotification($additionalData));
    
            return redirect()->back()->with('success', 'Email envoyé avec succès! nous vous contacterons dès que possible');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Échec de l\'envoi de l\'e-mail. Veuillez réessayer plus tard.');
        }
    }


    public function partenaire_email(Request $req)
    {
        $liste_emails = ['Atesma@gmail.com'];
        // Additional data you want to send with the notification
        $additionalData = [
            'subject' => 'Request of partnership',
            'form_data' => [
                'Prenom' => $req->input('Prenom'),
                'Nom' => $req->input('Nom'),
                'Email' => $req->input('Email'),
                'Fonction' => $req->input('Fonction'),     
                'raison' => $req->input('raison'),
                'siteWeb' => $req->input('siteWeb'),
                'phone' => $req->input('phone'),
            ],
        ];

        try {
            Notification::route('mail', $liste_emails)
                ->notify(new PartNotification($additionalData));
    
            return redirect()->back()->with('success', 'Email envoyé avec succès! nous vous contacterons dès que possible');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Échec de l\'envoi de l\'e-mail. Veuillez réessayer plus tard.');
        }
    }

}
