<?php
namespace App\Http\Controllers;

use App\Domain\Repositories\PeminjamanRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PeminjamanController extends Controller
{
    protected $peminjaman;

    public function __construct(PeminjamanRepository $peminjamanRepository)
    {
        $this->peminjaman = $peminjamanRepository;

    }

    public function index($limit = 10)
    {

        return view('partials.peminjaman.index', [
            'peminjaman' => $this->peminjaman->getByPage($limit),
        ]);

//        return $this->peminjaman->getByPage($limit);
    }

    public function store(Request $request)
    {
        return $this->peminjaman->create($request->all());
//        return $request->all();
    }
    public function getData($limit = 10)
    {
        return $this->peminjaman->getData();
    }
    public function show($id)
    {
//        return view('partials.peminjaman.detail', [
//            'data' => $this->peminjaman->find($id),
//
//        ]);
        return $this->peminjaman->find($id);
    }
    public function edit($id)
    {
//        return view('partials.peminjaman.edit', [
//            'data' => $this->peminjaman->find($id),
//        ]);

        return $this->peminjaman->find($id);
    }


    public function update($id, Request $request)
    {
        return $this->peminjaman->update($id, $request->all());

    }

    public function destroy($id)
    {
        return $this->peminjaman->delete($id);
    }
}