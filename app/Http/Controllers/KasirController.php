<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KasirController extends Controller
{
    function Dashboard()
    {
        return view('dashboard.kasir.Kasir');
    }

    //pemesanan
    function KelolaPemesanan()
    {
        return view('dashboard.kasir.Pemesanan.KelolaPemesanan');
    }
    function TambahPemesanan(Request $request)
    {
    }
    function HapusPemesanan(int $id)
    {
    }
    function EditPemesanan(int $id)
    {
    }

    //invoice
    function KelolaInvoice()
    {
        return view('dashboard.kasir.Invoice.KelolaInvoice');
    }
    function TambahInvoice(Request $request)
    {
    }
    function HapusInvoice(int $id)
    {
    }
    function EditInvoice(int $id)
    {
    }

    //Laporan
    function KelolaLaporan()
    {
        return view('dashboard.kasir.Laporan.KelolaLaporan');
    }
    function TambahLaporan(Request $request)
    {
    }
    function HapusLaporan(int $id)
    {
    }
    function EditLaporan(int $id)
    {
    }
}
