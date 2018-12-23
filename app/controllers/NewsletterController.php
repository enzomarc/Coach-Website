<?php

namespace App\Controllers;

use App\Models\Database;

class NewsletterController
{

    public static function addMail(): void
    {
        $email = input('email');
        $query = Database::GetDB()->prepare("SELECT * FROM newsletter WHERE email = ?");
        $query->execute([$email]);
        $results = $query->fetchAll();

        if (!count($results) > 0) {
            $query = Database::GetDB()->prepare("INSERT INTO newsletter(email, date) VALUES (?, ?)");
            $query->execute([$email, date("Y-m-d")]);
        }

        redirect('home');
    }

}