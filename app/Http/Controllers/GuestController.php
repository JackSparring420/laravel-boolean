<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Postcard;
class GuestController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function createPostcard() {

        return view('pages.create-postcard');
    }

    public function store(Request $request) {

        $data = $request -> validate([
            'sender' => 'required|string',
            'addres' => 'required|string',
            'text' => 'required|string',
            'image' => 'required|image',
        ]);

        // $imageFile = $request -> file('image');

        $imageFile = $data['image']; 

        $imageName = rand(100000, 999999) . '-' . time() . '-' . $imageFile -> getClientOriginalName();
        $imageFile -> storeAs('/postcards/', $imageName, 'public');

        $data['image'] = $imageName;

        $postcard = Postcard::create($data);

      
        return redirect() -> route('home');
    }
}
