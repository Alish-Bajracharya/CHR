<?php
namespace App\Notifications;

use App\Models\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;


class ContactSubmitted extends Notification
{
    public $contact;

    public function __construct($contact)
    {
        $this->contact = $contact;
    }

    public function via($notifiable)
    {
        return ['database']; // Store notification in the database
    }

    public function toDatabase($notifiable)
    {
        return [
            'message' => "New contact form submission from {$this->contact->first_name}",
        ];
    }
}


