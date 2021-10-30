<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inventory
{
    private static $data_inventory = //inisialisasikan data inventory
    [
        [
            "judul"     => "Meja",
            "link"      => "post-meja",
            "deskripsi" => "Meja adalah ...."
        ],
        [
            "judul"     => "Kursi",
            "link"      => "post-kursi",
            "deskripsi" => "Kursi adalah ...."
        ]
    ];
    public static function all()
    {
        return collect(self::$data_inventory); //panggil variabel data inventory kedelam function all
    }

    public static function find($link) //memanggil 1 data berdasarkan parameter link
    {
        $post = static::all();
        return $post->firstWhere('link', $link);
    }
}

