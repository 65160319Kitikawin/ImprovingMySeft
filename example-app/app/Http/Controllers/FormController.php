<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index() {
        $data['Customers'] = Custormes::all();
        return view('Final Test.final', $data);
    }

}
