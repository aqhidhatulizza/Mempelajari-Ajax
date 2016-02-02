<?php
namespace App\Http\Controllers;

use App\buku;
use App\Domain\Repositories\bukuRepository;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class bukuController extends Controller
{
    protected $buku;

    public function __construct(bukuRepository $bukuRepository)
    {
        $this->buku = $bukuRepository;

    }

    public function index($limit = 10)
    {

        return view('partials.buku.index', [
            'buku' => $this->buku->getByPage($limit),
        ]);

//        return $this->buku->getByPage($limit);
    }

    public function store(Request $request)
    {
        return $this->buku->create($request->all());
    }
 public function getData($limit = 10)
 {
     return $this->buku->getData();
 }
    public function show($id)
    {
//        return view('partials.buku.detail', [
//            'data' => $this->buku->find($id),
//
//        ]);
        $this->buku->find($id);
    }
    public function edit($id)
    {
        return view('partials.buku.edit', [
            'data' => $this->buku->find($id),
        ]);
    }


    public function update($id, Request $request)
    {
        return $this->buku->update($id, $request->all());

    }

    public function destroy($id)
    {
        return $this->buku->delete($id);
    }
}