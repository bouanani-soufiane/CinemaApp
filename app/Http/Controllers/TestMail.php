<?php

namespace App\Http\Controllers;

use App\Mail\ReservationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail; // Add this line


class TestMail extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $subject = 'hello your reservation is here';
        $body = 'enjoy your watching';
        $reservation = ['test'];
        Mail::to('bouananisfn@gmail.com')->send(new ReservationMail($subject, $body, $reservation));
    }
}
