<?php

namespace App\Http\Controllers;

use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index()
{
    $sarans = Saran::all(); // Mengambil semua data saran dari database
    return view('back.saran.index', compact('sarans'));
}
}

