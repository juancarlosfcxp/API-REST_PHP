<?php

namespace App\Http\Controllers;

use App\Videojoc;
use Illuminate\Http\Request;

class VideojocsController extends Controller
{

    public function getAll()
    {
        $videojoc = Videojoc::all();
        return $videojoc;
    }

    public function get($id)
    {
        $videojoc = Videojoc::find($id);
        return $videojoc;
    }

    public function add(Request $request)
    {

//        $videojoc = Videojoc::Create($request->all());

        $videojoc = new Videojoc($request->all());
        $videojoc->save();
        return $videojoc;
    }

    public function update($id, Request $request)
    {
        $videojoc = $this->get($id);
        $videojoc->update($request->all());
        return $videojoc;
    }

    public function delete($id)
    {
        $videojoc = $this->get($id);
        $videojoc->delete();
        return $videojoc;
    }
}
