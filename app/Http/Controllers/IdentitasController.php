<?php
namespace App\Http\Controllers;

use App\identitas;
use App\Domain\Repositories\IdentitasRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IdentitasController extends Controller
{
    protected $identitas;

    public function __construct(IdentitasRepository $IdentitasRepository)
    {
        $this->identitas = $IdentitasRepository;

    }

    public function index($limit = 10)
    {
        return view('partials.identitas.index', [
            'identitas' => $this->identitas->getByPage($limit),
        ]);

//        return $this->identitas->getByPage($limit);
    }

    public function store(Request $request)
    {
        return $this->identitas->create($request->all());
    }
    public function getData($limit = 10)
    {
        return $this->identitas->getData();
    }
    public function show($id)
    {
        return view('partials.identitas.detail', [
            'data' => $this->identitas->find($id),

        ]);
    }
    public function edit($id)
    {
        return view('partials.identitas.edit', [
            'data' => $this->identitas->find($id),
        ]);
    }


    public function update($id, Request $request)
    {
        return $this->identitas->update($id, $request->all());

    }

    public function destroy($id)
    {
        return $this->identitas->delete($id);
    }
}