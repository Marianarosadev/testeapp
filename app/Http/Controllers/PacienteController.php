<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdatePacienteRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PacienteController extends Controller 
{
    protected $request;
    private $repository;

    public function __construct(Request $request, Paciente $paciente)
    {
        $this->request = $request;
        $this->repository = $paciente;
    }

    public function index()
    {
        $Paciente = Paciente::paginate(5);

        return view('admin.pages.pacientes.index', [
            'Paciente' => $Paciente,    
        ]);
    }

    public function create()
    {
        return view('admin.pages.pacientes.create');
    }

    public function store(StoreUpdatePacienteRequest $request)
    {
        $data = $request->only('Nome', 'Cpf', 'Rg');

        $this->repository->create($data);

        return redirect()->route('paciente.index');
    }

    public function edit($Id)
    {
        if (!$paciente = $this->repository->find($Id))
            return redirect()->back();

        return view('admin.pages.pacientes.edit', compact('paciente'));
    }

    public function update(request $request, $Id)
    {
        if(!$paciente = $this->repository->find($Id))
            return redirect()->back();

        $paciente->update($request->all());        

        return redirect()->route('paciente.index');
    }

    public function destroy($Id)
    {
        $paciente = $this->repository->where('Id', $Id)->first();

        if (!$paciente)
            return redirect()->back();

        $paciente->delete();
        return redirect()->route('paciente.index');
    }
}
