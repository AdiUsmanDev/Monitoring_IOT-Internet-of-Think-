<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class back extends Controller
{
    //
    public function someMethod(Request $request)
    {
        // Lakukan validasi atau aksi lainnya
        $request->validate([
            'field_name' => 'required',
            // Tambahkan aturan validasi lainnya sesuai kebutuhan
        ]);

        // Simpan data atau lakukan aksi lainnya

        // Menambahkan pesan flash dan mengarahkan kembali
        return redirect()->back();
    }
}
