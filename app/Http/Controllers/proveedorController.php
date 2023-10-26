<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproveedorRequest;
use App\Http\Requests\UpdateproveedorRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\proveedorRepository;
use Illuminate\Http\Request;
use Flash;

class proveedorController extends AppBaseController
{
    /** @var proveedorRepository $proveedorRepository*/
    private $proveedorRepository;

    public function __construct(proveedorRepository $proveedorRepo)
    {
        $this->proveedorRepository = $proveedorRepo;
    }

    /**
     * Display a listing of the proveedor.
     */
    public function index(Request $request)
    {
        $proveedors = $this->proveedorRepository->paginate(10);

        return view('proveedors.index')
            ->with('proveedors', $proveedors);
    }

    /**
     * Show the form for creating a new proveedor.
     */
    public function create()
    {
        return view('proveedors.create');
    }

    /**
     * Store a newly created proveedor in storage.
     */
    public function store(CreateproveedorRequest $request)
    {
        $input = $request->all();

        $proveedor = $this->proveedorRepository->create($input);

        Flash::success('Proveedor saved successfully.');

        return redirect(route('proveedors.index'));
    }

    /**
     * Display the specified proveedor.
     */
    public function show($id)
    {
        $proveedor = $this->proveedorRepository->find($id);

        if (empty($proveedor)) {
            Flash::error('Proveedor not found');

            return redirect(route('proveedors.index'));
        }

        return view('proveedors.show')->with('proveedor', $proveedor);
    }

    /**
     * Show the form for editing the specified proveedor.
     */
    public function edit($id)
    {
        $proveedor = $this->proveedorRepository->find($id);

        if (empty($proveedor)) {
            Flash::error('Proveedor not found');

            return redirect(route('proveedors.index'));
        }

        return view('proveedors.edit')->with('proveedor', $proveedor);
    }

    /**
     * Update the specified proveedor in storage.
     */
    public function update($id, UpdateproveedorRequest $request)
    {
        $proveedor = $this->proveedorRepository->find($id);

        if (empty($proveedor)) {
            Flash::error('Proveedor not found');

            return redirect(route('proveedors.index'));
        }

        $proveedor = $this->proveedorRepository->update($request->all(), $id);

        Flash::success('Proveedor updated successfully.');

        return redirect(route('proveedors.index'));
    }

    /**
     * Remove the specified proveedor from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $proveedor = $this->proveedorRepository->find($id);

        if (empty($proveedor)) {
            Flash::error('Proveedor not found');

            return redirect(route('proveedors.index'));
        }

        $this->proveedorRepository->delete($id);

        Flash::success('Proveedor deleted successfully.');

        return redirect(route('proveedors.index'));
    }
}
