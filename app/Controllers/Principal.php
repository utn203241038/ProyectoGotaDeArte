<?php

namespace App\Controllers;

class Principal extends BaseController
{
    public function index(): string
    {
        $dataMenu = [
            'userName' => 'John Doe',
        ];
        $dataContenido = [
            'titulo' => 'Hello, world!',
        ];
        $dataPiePagina = [
            'fecha' => date('Y'),
        ];
        $data = $dataMenu + $dataContenido + $dataPiePagina;
        return view('Principal/index');
    }

    public function miestilo()
    {
        return view('Principal/miestilo');
    }

    public function estilodisenio()
    {
        $dataMenuDisenio = [
            'title' => 'GOTA DE ARTE - Galería de arte | Subasta de cuadros',
            'userName' => 'John Doe',
        ];

        $elementosCarrusel = '<li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>';

        $dataContenido = [
            'titulo' => 'Hello, world!',
            'carruselImagenes' => $elementosCarrusel,
        ];
        $dataPiePagina = [
            'fecha' => date('Y'),
        ];
        $data = $dataMenuDisenio + $dataContenido + $dataPiePagina;
        return view('Principal/estilodisenio',$data);
    }
}
