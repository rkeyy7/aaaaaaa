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

        $request-> validate([
            'name' => 'required|min:3',
            'correo' => 'required|email',
            'mensaje' => 'required'

        ]);



        Mail::to('rubencg3005@gmail.com')
        ->send(new contactanosMailable($request->all()));


        return redirect()->route ('contactanos.index')
        ->with('info', 'El mensaje se ha enviado correctamente!');


    }


}
