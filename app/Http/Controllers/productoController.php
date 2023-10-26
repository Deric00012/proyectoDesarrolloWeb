<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductoRequest;
use App\Http\Requests\UpdateproductoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\productoRepository;
use Illuminate\Http\Request;
use Flash;

class productoController extends AppBaseController
{
    /** @var productoRepository $productoRepository*/
    private $productoRepository;

    public function __construct(productoRepository $productoRepo)
    {
        $this->productoRepository = $productoRepo;
    }

    /**
     * Display a listing of the producto.
     */
    public function index(Request $request)
    {
        $productos = $this->productoRepository->paginate(10);

        return view('productos.index')
            ->with('productos', $productos);
    }

    /**
     * Show the form for creating a new producto.
     */
    public function create()
    {
        return view('productos.create');
    }

    /**
     * Store a newly created producto in storage.
     */
    public function store(CreateproductoRequest $request)
    {
        $input = $request->all();

        $producto = $this->productoRepository->create($input);

        Flash::success('Producto saved successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Display the specified producto.
     */
    public function show($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        return view('productos.show')->with('producto', $producto);
    }

    /**
     * Show the form for editing the specified producto.
     */
    public function edit($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        return view('productos.edit')->with('producto', $producto);
    }

    /**
     * Update the specified producto in storage.
     */
    public function update($id, UpdateproductoRequest $request)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $producto = $this->productoRepository->update($request->all(), $id);

        Flash::success('Producto updated successfully.');

        return redirect(route('productos.index'));
    }

    /**
     * Remove the specified producto from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = $this->productoRepository->find($id);

        if (empty($producto)) {
            Flash::error('Producto not found');

            return redirect(route('productos.index'));
        }

        $this->productoRepository->delete($id);

        Flash::success('Producto deleted successfully.');

        return redirect(route('productos.index'));
    }
}
