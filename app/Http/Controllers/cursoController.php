<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatecursoRequest;
use App\Http\Requests\UpdatecursoRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\cursoRepository;
use Illuminate\Http\Request;
use Flash;

class cursoController extends AppBaseController
{
    /** @var cursoRepository $cursoRepository*/
    private $cursoRepository;

    public function __construct(cursoRepository $cursoRepo)
    {
        $this->cursoRepository = $cursoRepo;
    }

    /**
     * Display a listing of the curso.
     */
    public function index(Request $request)
    {
        $cursos = $this->cursoRepository->paginate(10);

        return view('cursos.index')
            ->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new curso.
     */
    public function create()
    {
        return view('cursos.create');
    }

    /**
     * Store a newly created curso in storage.
     */
    public function store(CreatecursoRequest $request)
    {
        $input = $request->all();

        $curso = $this->cursoRepository->create($input);

        Flash::success('Curso saved successfully.');

        return redirect(route('cursos.index'));
    }

    /**
     * Display the specified curso.
     */
    public function show($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.show')->with('curso', $curso);
    }

    /**
     * Show the form for editing the specified curso.
     */
    public function edit($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        return view('cursos.edit')->with('curso', $curso);
    }

    /**
     * Update the specified curso in storage.
     */
    public function update($id, UpdatecursoRequest $request)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        $curso = $this->cursoRepository->update($request->all(), $id);

        Flash::success('Curso updated successfully.');

        return redirect(route('cursos.index'));
    }

    /**
     * Remove the specified curso from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $curso = $this->cursoRepository->find($id);

        if (empty($curso)) {
            Flash::error('Curso not found');

            return redirect(route('cursos.index'));
        }

        $this->cursoRepository->delete($id);

        Flash::success('Curso deleted successfully.');

        return redirect(route('cursos.index'));
    }
}
