<?php

namespace App\Http\Controllers;

use App\Mail\KontakMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class KontakController extends Controller
{
    public function kirim(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:100',
            'email' => 'required|email',
            'telp' => 'required|string|max:20',
            'judul' => 'required|string|max:150',
            'pesan' => 'required|string|max:1000',
        ]);

        // Kirim email dengan KontakMail (HTML tampilan)
        Mail::to('putrajayasentosa19@gmail.com')->send(
            new KontakMail([
                'nama' => $request->nama,
                'email' => $request->email,
                'telp' => $request->telp,
                'judul' => $request->judul,
                'pesan' => $request->pesan,
            ])
        );

        return back()->with('success', 'Pesan berhasil dikirim!');
    }
}
