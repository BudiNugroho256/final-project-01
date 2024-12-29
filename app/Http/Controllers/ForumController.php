<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ForumController extends Controller
{
    // Retrieve discussions
    private function getDiscussions()
    {
        return [
            (object) ['id' => 1, 'title' => 'Harga Padi Terkini', 'description' => 'Bagaimana harga padi di daerah Anda saat ini?'],
            (object) ['id' => 2, 'title' => 'Panen Jagung di Jawa', 'description' => 'Diskusi tentang ketersediaan jagung di musim panen ini.']
        ];
    }

    // Retrieve categories
    private function getCategories()
    {
        return [
            (object) ['id' => 1, 'name' => 'Harga Padi'],
            (object) ['id' => 2, 'name' => 'Panen Jagung'],
            (object) ['id' => 3, 'name' => 'Komoditas Sayur'],
            (object) ['id' => 4, 'name' => 'Komoditas Buah']
        ];
    }

    // Retrieve popular discussions
    private function getPopularDiscussions()
    {
        return [
            (object) ['id' => 3, 'title' => 'Tren Harga Cabe Tahun Ini'],
            (object) ['id' => 4, 'title' => 'Krisis Harga Bawang Merah'],
            (object) ['id' => 5, 'title' => 'Strategi Menghadapi Tengkulak']
        ];
    }

    public function index()
    {
        $discussions = $this->getDiscussions();
        $categories = $this->getCategories();
        $popularDiscussions = $this->getPopularDiscussions();

        return view('forum', compact('discussions', 'categories', 'popularDiscussions'));
    }

    public function show($id)
    {
        $discussions = $this->getDiscussions();
        $discussion = null;

        // Find the discussion by its ID
        foreach ($discussions as $d) {
            if ($d->id == $id) {
                $discussion = $d;
                break;
            }
        }

        // If the discussion is not found, return a 404 error
        if (!$discussion) {
            abort(404, 'Discussion not found');
        }

        // Add some example comments for the discussion
        $discussion->comments = [
            (object) ['author' => 'User1', 'text' => 'Saya setuju dengan ini.'],
            (object) ['author' => 'User2', 'text' => 'Saya punya pandangan berbeda.'],
        ];

        return view('discussion-detail', compact('discussion'));
    }

    public function category($id)
    {
        return "Category page for category $id";
    }
}