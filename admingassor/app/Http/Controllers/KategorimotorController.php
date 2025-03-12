<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KategorimotorController extends Controller
{
    public function index()
    {
        $motors = [
            [
                'name' => 'Yamaha Soul GT',
                'image' => 'images/966d4328-5e60-4f37-9e65-8a067e455606-2-2.png',
                'feature' => 'Termasuk Helm',
                'price' => 65000,
            ],
            [
                'name' => 'Honda Vario',
                'image' => 'images/da063636-8fc8-49c2-9076-bba0d721f846-1-2.png',
                'feature' => 'Termasuk Helm',
                'price' => 80000,
            ],
            // Add more motor data as needed
        ];

        return view('kategorimotor', compact('motors'));
    }
}
