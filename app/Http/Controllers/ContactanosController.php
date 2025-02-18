<?php

namespace App\Http\Controllers;

use App\Mail\contactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactanosController extends Controller
{

    public function index() {

        return view('contactanos.index');

    }

    public function store(Request $request) {

        Mail::to('rubencg3005@gmail.com')
        ->send(new contactanosMailable($request->all()));

        return 'mensaje enviado con éxito! Gracias por contactarnos.  :D';

    }


}
