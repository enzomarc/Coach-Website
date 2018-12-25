<?php

namespace App\Controllers;

use App\Models\Database;

class NewsletterController
{

    public function addMail()
    {
        $email = input('email');
        $query = Database::GetDB()->prepare("SELECT * FROM newsletter WHERE email = ?");
        $query->execute([$email]);
        $results = $query->fetchAll();

        if (!count($results) > 0) {
            $query = Database::GetDB()->prepare("INSERT INTO newsletter(email, date) VALUES (?, ?)");
            $query->execute([$email, date("Y-m-d")]);
        }

        return redirect('home');
    }

    public function addMessage()
    {
        $datas = input();
        $datas['date'] = date("Y-m-d");
        $query = Database::GetDB()->prepare("INSERT INTO messages(messages.from, messages.message, messages.date) VALUES (:email, :message, :date)");
        $query->bindValue(':email', $datas['email']);
        $query->bindValue(':message', $datas['message']);
        $query->bindValue(':date', $datas['date']);
        $query->execute();

        return redirect('contact');
    }

}