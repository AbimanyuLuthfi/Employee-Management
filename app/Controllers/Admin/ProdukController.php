<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KategoriModel;

class ProdukController extends BaseController
{
    public function index()
    {
        $kategoriModel = new KategoriModel();
        $data = [
            'title' => 'Daftar Produk | Comprof',
            'daftar_produk' => $kategoriModel->findAll()
        ];
        return view('admin/produk/index', $data);
    }
    public function kategori()
    {
        $kategoriModel = new KategoriModel();
        $data = [
            'title' => 'Kategori Produk | Comprof',
            'daftar_kategori' => $kategoriModel->findAll()
        ];
        return view('admin/produk/kategori', $data);
    }
}
