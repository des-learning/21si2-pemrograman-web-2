<?php

namespace App\Http\Controllers;

// import CreateBarangRequest untuk digunakan
use App\Services\BarangServiceInterface;
use App\Models\Barang;
use Illuminate\Http\Request;

class ProtectedBarangController extends Controller
{
    function __construct(private BarangServiceInterface $barangService)
    {}

    // List Barang
    function index()
    {
        $barangs = Barang::owned()->orderBy('id')->paginate(5);

        return response()->json($barangs);
    }
}
