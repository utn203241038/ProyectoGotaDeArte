<?php

namespace App\Controllers;

class Principal extends BaseController
{
    public function index(): string
    {
        return view('Principal/index');
    }

    public function miestilo()
    {
        return view('Principal/miestilo');
    }

    public function estilodisenio()
    {
        return view('Principal/estilodisenio');
    }
}
