<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\project;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class gallery extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(project $product)
    {
        $images = $product->gallery()->latest()->paginate(20);
        // dd($images);
        // dd('kir');
        return view('admin.componnets.gallery.all',compact('images','product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(project $product)
    {

        return view('admin.componnets.gallery.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , project $product)
    {
        $data= $request->validate([
            'image' => ['required'],
            'alt' => ['required','string'],
            'product_id'=> ['required']

        ]);
        $f =$data['image'];
        $x= preg_split('/<p><img alt="" src="|" style="height:.*/',$f);
        $data['image']= $x[1];
        $product->gallery()->create($data);
        return redirect(route('product.gallery.index',['product'=>$product->id]));
        //return redirect()->route('product.gallery.index','product'=>$product->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(project $product, gallery $gallery,string $id)
    {
        $d=$product->gallery()->where('id',$id)->delete();
        return back();
    }
}