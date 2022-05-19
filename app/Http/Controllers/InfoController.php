<?php

namespace App\Http\Controllers;

use App\Models\Info;

class InfoController extends Controller
{

    public function index()
    {
        $data = Info::get();
        return View('welcome', ['data' => $data]);
    }
}
