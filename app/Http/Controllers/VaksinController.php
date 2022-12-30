<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vaksin;
use RealRashid\SweetAlert\Facades\Alert;

class VaksinController extends Controller
{
    public function index($nik_anak)
    {
        return view('entry.vaksin.index',[
            "nik_anak" => $nik_anak
        ]);
    }

        public function store(Request $request)
        {
            $this->validate($request, [
                'jenis_vaksin'=>'required',
                'tgl_vaksin'=>'required',
            ]);
    
            $vaksins = Vaksin::create([
                'nik_anak'=>$request->nik_anak,
                'jenis_vaksin'=>$request->jenis_vaksin,
                'tgl_vaksin'=>$request->tgl_vaksin,
            ]);
            
            return redirect('/entry/InputImunisasi')->with('success', 'Data Vaksin Berhasil Ditambahkan!');
    
        }
    }

