<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateventaRequest;
use App\Http\Requests\UpdateventaRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\cliente;
use App\Models\producto;
use App\Repositories\ventaRepository;
use Illuminate\Http\Request;
use Flash;

class ventaController extends AppBaseController
{
    /** @var ventaRepository $ventaRepository*/
    private $ventaRepository;

    public function __construct(ventaRepository $ventaRepo)
    {
        $this->ventaRepository = $ventaRepo;
    }

    /**
     * Display a listing of the venta.
     */
    public function index(Request $request)
    {
        $ventas = $this->ventaRepository->paginate(10);

        return view('ventas.index')
            ->with('ventas', $ventas);
    }

    /**
     * Show the form for creating a new venta.
     */
    public function create()
    {
        $productos = producto::all();
        $clientes = cliente::all();
        return view('ventas.create',compact('productos','clientes'));
    }

    /**
     * Store a newly created venta in storage.
     */
    public function store(CreateventaRequest $request)
    {
        
        $input = $request->all();

        $venta = $this->ventaRepository->create($input);

        Flash::success('Venta saved successfully.');

        return redirect(route('ventas.index'));
    }

    /**
     * Display the specified venta.
     */
    public function show($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        return view('ventas.show')->with('venta', $venta);
    }

    /**
     * Show the form for editing the specified venta.
     */
    public function edit($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        return view('ventas.edit')->with('venta', $venta);
    }

    /**
     * Update the specified venta in storage.
     */
    public function update($id, UpdateventaRequest $request)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        $venta = $this->ventaRepository->update($request->all(), $id);

        Flash::success('Venta updated successfully.');

        return redirect(route('ventas.index'));
    }

    /**
     * Remove the specified venta from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $venta = $this->ventaRepository->find($id);

        if (empty($venta)) {
            Flash::error('Venta not found');

            return redirect(route('ventas.index'));
        }

        $this->ventaRepository->delete($id);

        Flash::success('Venta deleted successfully.');

        return redirect(route('ventas.index'));
    }
}
