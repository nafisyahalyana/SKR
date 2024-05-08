<?php

namespace App\Http\Controllers;
use App\Models\Ruangan;
use Illuminate\Http\Request;

class RuanganController extends Controller
{
    public function index()
    {
        $data = Ruangan::get();
        return view('ruangan', compact('data'));
    }
}
