<?php

namespace App\Http\Controllers;

class HomeController extends Controller {


    function showBeranda(){
        return view('Beranda');
    }

    function showProduk(){
        return view('Produk');
    }

    function showKategori(){
        return view('Kategori');
    }

    function showPromo(){
        return view('Promo');
    }

    function showPelanggan(){
        return view('Pelanggan');
    }

    function showSupplier(){
        return view('Supplier');
    }


}
