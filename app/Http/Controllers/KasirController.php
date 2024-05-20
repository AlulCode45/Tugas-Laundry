<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KasirController extends Controller
{
    function Dashboard()
    {
        return view('dashboard.kasir.Kasir');
    }
    function KelolaPemesanan()
    {
    }
    function HapusPemesanan(int $id)
    {
    }
    function EditPemesanan(int $id)
    {
    }
    function KelolaKasir()
    {
    }
}
