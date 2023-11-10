<?php

namespace App\Http\Controllers;

use App\Repositories\productoRepository;
use App\Models\producto;
use Illuminate\Http\Request;
use PDF;


class imprimirPdfController extends Controller
{
    private $productoRepository;

    public function __construct(productoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
    }

    public function imprimir()
    {

        $productos = $this->productoRepository->all();

        $pdf = PDF::loadView('productos\table', array('productos' => $productos));
        return $pdf->download('productos.pdf');
    }

    public function imprimirProveedores()
    {

        $productos = $this->productoRepository->all();

        $pdf = PDF::loadView('productos\table', array('productos' => $productos));
        return $pdf->download('productos.pdf');
    }

    public function imprimirClientes()
    {

        $productos = $this->productoRepository->all();

        $pdf = PDF::loadView('productos\table', array('productos' => $productos));
        return $pdf->download('productos.pdf');
    }

    public function imprimirInventario()
    {

        $productos = $this->productoRepository->all();

        $pdf = PDF::loadView('productos\table', array('productos' => $productos));
        return $pdf->download('productos.pdf');
    }

    public function imprimirVentas()
    {

        $productos = $this->productoRepository->all();

        $pdf = PDF::loadView('productos\table', array('productos' => $productos));
        return $pdf->download('productos.pdf');
    }
}
