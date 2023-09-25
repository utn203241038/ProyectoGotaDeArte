<?php

namespace App\Controllers;

class Dev extends BaseController
{
    public function index(): string{
        return view('Dev/welcome_message');
    }
}
