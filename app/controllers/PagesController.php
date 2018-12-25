<?php

namespace App\Controllers;

use App\Models\Reservation;

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
        return view('blog');
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