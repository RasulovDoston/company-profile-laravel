<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index()
    {
        return view('dashboard.pengumuman.index');
    }

    public function create()
    {
        return view('dashboard.pengumuman.create');
    }

    public function save(Request $request)
    {
       $this->validate($request, [
        'judul' => 'required',
        'konten' => 'required',
       ] );

       try {
        $data = new Pengumuman;
        $data->judul = $request->judul;
        $data->konten = $request->kontenerror;
        $data->save();

        Session()->flash('alert-success', 'Pengumuman berhasil ditambahkan.');
        return redirect('dashboard/pengumuman/'.$data->id);
       } catch (\Exception $e) {
        Session()->flash('alert-success', $e->getMessage());
        return redirect('dashboard/pengumuman-create')->withInput();
       }


    }

    public function show()
    {
        
    }

    public function update()
    {
        
    }

    public function delete()
    {
        
    }
}
