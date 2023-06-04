<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidoController extends Controller
{
    public function index()
    {
        $slides = [
            [
                'title' => 'Inscripciones',
                'image' => (asset('images/jpg/Inscripciones-IUD-banner.jpg'))
            ],
            [
                'title' => 'Beneficios Egresados',
                'image' => (asset('images/jpg/Egresado_Consejo_Directivo.jpg'))

            ],
            [
                'title' => 'Beneficios Egresados',
                'image' => (asset('images/jpg/Egresado_Consejo_Academico.jpg'))

            ],
            [
                'title' => 'Informe Gestion',
                'image' => (asset('images/png/Banner-informe-de-gestión-IUD.png'))

            ],
            [
                'title' => 'Renovaciones',
                'image' => (asset('images/png/renovaciones.png'))

            ],
            // Agrega más elementos de slide según sea necesario
        ];

        return view('bienvenido', compact('slides'));
    }
}
