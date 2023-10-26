<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateinventarioRequest;
use App\Http\Requests\UpdateinventarioRequest;
use App\Http\Controllers\AppBaseController;
use App\Models\producto;
use App\Models\proveedor;
use App\Repositories\inventarioRepository;
use Illuminate\Http\Request;
use Flash;

class inventarioController extends AppBaseController
{
    /** @var inventarioRepository $inventarioRepository*/
    private $inventarioRepository;

    public function __construct(inventarioRepository $inventarioRepo)
    {
        $this->inventarioRepository = $inventarioRepo;
    }

    /**
     * Display a listing of the inventario.
     */
    public function index(Request $request)
    {
        $inventarios = $this->inventarioRepository->paginate(10);

        return view('inventarios.index')
            ->with('inventarios', $inventarios);
    }

    /**
     * Show the form for creating a new inventario.
     */
    public function create()
    {
        $proveedores = proveedor::all();
        $productos = producto::all();
        return view('inventarios.create',compact('proveedores','productos'));
    }

    /**
     * Store a newly created inventario in storage.
     */
    public function store(CreateinventarioRequest $request)
    {
        $input = $request->all();

        $inventario = $this->inventarioRepository->create($input);

        Flash::success('Inventario saved successfully.');

        return redirect(route('inventarios.index'));
    }

    /**
     * Display the specified inventario.
     */
    public function show($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        return view('inventarios.show')->with('inventario', $inventario);
    }

    /**
     * Show the form for editing the specified inventario.
     */
    public function edit($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        $productos = producto::all();
        $proveedores = proveedor::all();
        return view('inventarios.edit',compact('productos','proveedores'))->with('inventario', $inventario);
    }

    /**
     * Update the specified inventario in storage.
     */
    public function update($id, UpdateinventarioRequest $request)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        $inventario = $this->inventarioRepository->update($request->all(), $id);

        Flash::success('Inventario updated successfully.');

        return redirect(route('inventarios.index'));
    }

    /**
     * Remove the specified inventario from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $inventario = $this->inventarioRepository->find($id);

        if (empty($inventario)) {
            Flash::error('Inventario not found');

            return redirect(route('inventarios.index'));
        }

        $this->inventarioRepository->delete($id);

        Flash::success('Inventario deleted successfully.');

        return redirect(route('inventarios.index'));
    }
}
