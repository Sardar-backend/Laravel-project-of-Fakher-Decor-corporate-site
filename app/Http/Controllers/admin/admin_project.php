<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Attributes;
use App\Models\project;
use App\Models\projectcategory;
use Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class admin_project extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $users = project::query();
        if ($keyword=request('search')) {
            $users = $users->where('name', 'LIKE', "%{$keyword}%")->orWhere('discription', 'LIKE', "%{$keyword}%")->orWhere('id', 'LIKE', "%{$keyword}%");
        }
        $users=$users->paginate(10);
        return view('admin.componnets.project',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        // $data=$request->validate([
        //     'name' => ['required', 'string', 'max:255'],
        //     'phonenumber' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required', 'string', 'min:8', 'confirmed']
        // ]);

        // project::create($data);
        // return redirect()->route('admin');
        $categories=projectcategory::all();
        return view('admin.componnets.create_p',compact('categories'));


}


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       $data=$request->validate([
            'name' => ['required', 'string', 'max:255', 'unique:projects'],
            'price' => ['required', 'string', 'max:255'],
            'count' => ['required'],
            'discription' => ['required', 'string'],
            'stars' => ['required', 'string', 'max:255'],
            'with' => ['required', 'string', 'max:255'],
            'length' => ['required', 'string', 'max:255'],
            'discust' => ['required', 'string', 'max:255'],
            'Criticism' => ['required', 'string' ],
            'attribute' => ['required', 'array',],
            'categories'=>['required'],
            'garant' => ['required'],
            'Brand' => ['required'],
            'Chosen' => ['nullable'],
            'Special_sale' => ['nullable'],
        ]);

        if (isset($data['Chosen'])) {
            $data['Chosen']=1;}
        else {
            $data['Chosen']=0;
        }

        if (isset($data['Special_sale'])) {
            $data['Special_sale']=1;}
        else {
            $data['Special_sale']=0;
        }
        $g=project::create($data)->get();
        $id=$g->last()->id;
        $t=project::find($id);
        $t->category()->sync($data['categories']);


        $attr = collect($data['attribute']);
        $attr->each(function($item) use($t) {
            if (is_null($item['name']) || is_null($item['value']))return;
                $attre = Attributes::firstOrCreate(
                    ['name' => $item['name']]
                );
                // dd($attre->values()->get());
                $attre_value = $attre->values()->firstOrCreate(
                    ['value' => $item['value']]
                    // ['value' => 'value']
                );
                $t->attribute()->attach($attre->id,['value_id' => $attre_value->id]);
        });
        return redirect()->route('admin_project.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $cat=project::find($id);
        $categories =projectcategory::all();
        return view('admin/componnets/edit_p', compact('cat','categories'));
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
        $user= project::find($id);
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'string', 'max:255'],
            'discription' => ['required', 'string'],
            'Criticism' => ['required', 'string' ],
            'stars' => ['required', 'string', 'max:255'],
            'with' => ['required', 'string', 'max:255'],
            'length' => ['required', 'string', 'max:255'],
            'discust' => ['required', 'string', 'max:255'],
            'categories'=>['required'],
            'attribute' => ['required', 'array','nullable'],
            'Chosen' => ['nullable'],
            'count' => ['required'],
            'garant' => ['required'],
            'Brand' => ['required'],
            'Special_sale' => ['nullable'],
        ]);
        if (isset($data['Chosen'])) {
            $data['Chosen']=1;}
        else {
            $data['Chosen']=0;
        }
        if (isset($data['Special_sale'])) {
            $data['Special_sale']=1;}
        else {
            $data['Special_sale']=0;
        }

        // dd($request->file('cfc'));
        // Storage::putFileAs('file',$request->file('cfc'),$request->file('cfc')->getClientOriginalName());
        // $f =$data['image'];
        // $x= preg_split('/<p><img alt="" src="|" style="height:.*/',$f);
        // $data['image']= $x[1];
        $p = project::where('name' , $data['name'])->get()->first();
        // $t=project::find($id);
        $p->attribute()->detach();
        $attr = collect($data['attribute']);
        $attr->each(function($item) use($p) {
            if (is_null($item['name']) || is_null($item['value']))return;
                $attre = Attributes::firstOrCreate(
                    ['name' => $item['name']]
                );

                $attre_value = $attre->values()->firstOrCreate(
                    ['value' => $item['value']]

                );

                $p->attribute()->attach($attre->id,['value_id' => $attre_value->id]);
        });


        $user->update($data);
        $p->category()->sync($data['categories']);

        return redirect()->route('admin_project.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        project::find($id)->delete();
        // return redirect()->route('admin_project.index');
        return back();
    }
}
