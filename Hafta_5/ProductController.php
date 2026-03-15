<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Ödevde istenen: Verileri 10'arlı sayfalar (paginate) olarak döndür
        return Product::paginate(10);
    }
}
