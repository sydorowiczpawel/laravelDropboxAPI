<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showElements()
    {
        $sItems = new DropboxController();
        $sItems->show();

        return view('layouts.show');
    }
}
