<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class ProdukController extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Daftar Produk | Comprof'
        ];
        return view('admin/produk/index', $data);
    }
}
