<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Actu;

// use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class AdminActuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $actus = Actu::all();
        return view('admin.home', compact('actus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.addActu');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required|string|max:255',
            'resume' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpg,png,jpeg|max:5048',
        ]);

        // $result = $request->image->storeOnCloudinary();
        // dd($result);

        $newImageName  = time() . '-' . $request->name . '.' .
        $request ->image->extension();

        $request->image->move(public_path('imgs'), $newImageName);


        $actu = Actu::create([
            'title' => $request->input('title'),
            'resume' => $request->input('resume'),
            'content' => $request->input('content'),
            'image' => $newImageName,

            // 'img_url' => $result->getSecurePath(),
            // 'img_id' => $result->getPublicId(),
        ]);


        return redirect('admin')->with('success', 'L actualité à été àjouté avec succés');

        /*
        
                $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $newImageName  = time() . '-' . $request->name . '.' .
        $request ->image->extension();

        $request->image->move(public_path('imgs'), $newImageName);

        $actu = Actu::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
            'image' => $newImageName
        ]);

        return redirect('admin/actus')->with('success', 'L actualité à été àjouté avec succés');

        */
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function show(Actu $actu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function edit(Actu $actu)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Actu $actu)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Actu  $actu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Actu $actu)
    {
        //
    }
}
