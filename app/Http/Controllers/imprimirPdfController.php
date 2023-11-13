<?php

namespace App\Http\Controllers;

use App\Repositories\productoRepository;
use App\Models\producto;
use App\Repositories\clienteRepository;
use App\Repositories\inventarioRepository;
use App\Repositories\proveedorRepository;
use App\Repositories\ventaRepository;
use Illuminate\Http\Request;
use PDF;


class imprimirPdfController extends Controller
{

    public function imprimir()
    {
        $productoRepository = new productoRepository();
        $productos = $productoRepository->all();

        $pdf = PDF::loadView('productos\table', array('productos' => $productos));
        return $pdf->download('productos.pdf');
    }

    public function imprimirProveedores()
    {
        $proveedorRepository = new proveedorRepository();
        $proveedors = $proveedorRepository->all();

        $pdf = PDF::loadView('proveedors\table', array('proveedors' => $proveedors));
        return $pdf->download('proveedores.pdf');
    }

    public function imprimirClientes()
    {
        $clientesRepository = new clienteRepository();
        $clientes = $clientesRepository->all();

        $pdf = PDF::loadView('clientes\table', array('clientes' => $clientes));
        return $pdf->download('clientes.pdf');
    }

    public function imprimirInventario()
    {
        $inventarioRepository = new inventarioRepository();
        $inventarios = $inventarioRepository->all();

        $pdf = PDF::loadView('inventarios\table', array('inventarios ' => $inventarios));
        return $pdf->download('inventario.pdf');
    }

    public function imprimirVentas()
    {

        $ventasRepository = new ventaRepository();
        $ventas = $ventasRepository->all();

        $pdf = PDF::loadView('ventas\table', array('ventas' => $ventas));
        return $pdf->download('ventas.pdf');
    }
}
