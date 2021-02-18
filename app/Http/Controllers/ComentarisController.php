<?php

namespace App\Http\Controllers;

use App\Comentari;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ComentarisController extends Controller
{
    public function getAll()
    {
        $comentari = Comentari::all();
        return $comentari;
    }

    public function get($id)
    {
        $comentari = Comentari::find($id);
        return $comentari;
    }

    public function add(Request $request)
    {
        $comentari = Comentari::Create($request->all());
        return $comentari;
    }

    public function update($id, Request $request)
    {
        $comentari = $this->get($id);
        $comentari->update($request->all());
        return $comentari;
    }

    public function delete($id)
    {
        $comentari = $this->get($id);
        $comentari->delete();
        return $comentari;
    }

    public function videojocComents($videojoc_id)
    {
        $comentaris=Comentari::query()
            ->select()
            ->where('videojoc_id', $videojoc_id)->get();

        return $comentaris;
    }

    public function autorComents(Request $request)
    {
        $comentaris=Comentari::query()
            ->select()
            ->where('autor', $request->autor)->get();

        return $comentaris;
    }
}
