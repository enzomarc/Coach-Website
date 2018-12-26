<?php

namespace App\Controllers;

use App\Models\Database;
use App\Models\Post;
use App\Models\Reservation;
use App\Flash;

class PagesController
{

    public function index()
    {
        redirect('services');
    }

    public function services()
    {
        return view('services');
    }

    public function products()
    {
        return view('products');
    }

    public function contact()
    {
        return view('contact');
    }

    public function blog()
    {
        return view('blog.post');
    }

    public function author()
    {
        if (session_get('logged_in') == true) {
            $author = session_get('author');
            $posts = Post::find('author', $author->id);
            return view('blog.author.index', ['author' => $author, 'posts' => $posts]);
        }
        else
            return view('blog.author.login');
    }

    public function write()
    {
        if (session_get('logged_in') == true) {
            $author = session_get('author');
            return view('blog.author.write', ['author' => $author]);
        }
    }

    public function authorLogin()
    {
        $datas = input();
        $datas['password'] = sha1($datas['password']);
        $query = Database::GetDB()->prepare("SELECT * FROM authors WHERE username = :username AND password = :password");
        $query->bindValue(':username', $datas['username']);
        $query->bindValue(':password', $datas['password']);

        $query->execute();

        $author = $query->fetch(\PDO::FETCH_OBJ);

        if ($author != false)
        {
            session_set('logged_in', true);
            session_set('author', $author);
        } else {
            Flash::set("Nom d'utilisateur ou mot de passe incorrect !");
        }

        redirect('author');
    }

    public function reservation($slug)
    {
        redirect('reservation.page', compact($slug));
    }

    public function sendReservation()
    {
        $reservation = new Reservation(input());
        $reservation->save();
        return redirect('reservation.student');
    }

    public function reservationStudent()
    {
        return view('reservation', ['slug' => 'student']);
    }

}