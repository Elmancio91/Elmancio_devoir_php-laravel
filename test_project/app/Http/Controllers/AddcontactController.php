<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddcontactController extends Controller
{
    public function addcontacts(){
        return view('addContact');
    }
}
