<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article; // Pastikan model ini sesuai dengan database Anda

class ForumController extends Controller
{
    public function index()
    {
        // Ambil data dari tabel articles (atau sesuaikan dengan tabel Anda)
        $articles = Article::latest()->get(); // Mengambil semua data artikel secara urut

        // Kirim data ke tampilan
        return view('forum', compact('articles'));
    }
}

