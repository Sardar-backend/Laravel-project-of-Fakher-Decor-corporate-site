<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

use function PHPUnit\Framework\isNull;

class admin_user extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        // $users = User::paginate(20);
        $users = User::query();
        if ($keyword=request('search')) {
            $users=$users->where('name', 'LIKE', "%{$keyword}%")->orWhere('email', 'LIKE', "%{$keyword}%")->orWhere('id', 'LIKE', "%{$keyword}%");
        }

        $users=$users->latest()->paginate(20);


        return view('admin.componnets.index3',compact('users'));

    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.componnets.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->validate([
            'name' => ['required', 'string', 'unique:users', 'max:255'],
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'name.required' => 'لطفاً نام  خود را وارد کنید.',
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'name.unique' => 'این نام  قبلاً ثبت‌نام شده است.',
            'email.required' => 'لطفاً آدرس ایمیل خود را وارد کنید.',
            'email.email' => 'لطفاً یک آدرس ایمیل معتبر وارد کنید.',
            'email.unique' => 'این آدرس ایمیل قبلاً ثبت‌نام شده است.',
            'password.required' => 'لطفاً رمز عبور خود را وارد کنید.',
            'password.min' => 'رمز عبور حداقل باید 8 کاراکتر باشد.',
            'password.confirmed' => 'رمز عبور با تأییدیه مطابقت ندارد.',
        ]);
        // dd($data);

        // $f=Storage::disk('public')->putFile( 'ProfilePhoto', request()->file('image'));
        // $data['image']=$f;
        // dd($data);
        // $f =$data['image'];
        // $x= preg_split('/<p><img alt="" src="|" style="height:.*/',$f);
        // $data['image']= $x[1];
        User::create($data);
        return redirect()->route('admin');
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

        $user= User::find($id);
        return view('admin.componnets.edit',compact('user'));
    }


     public function edituser (Request $request,string $id )
     {
        $user= User::find($id);
        $data=$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required',  'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'name.required' => 'لطفاً نام  خود را وارد کنید.',
            'email' => ['required', 'email', 'unique:users', 'max:255'],
            'email.required' => 'لطفاً آدرس ایمیل خود را وارد کنید.',
            'email.email' => 'لطفاً یک آدرس ایمیل معتبر وارد کنید.',
            'password.required' => 'لطفاً رمز عبور خود را وارد کنید.',
            'password.min' => 'رمز عبور حداقل باید 8 کاراکتر باشد.',
            'password.confirmed' => 'رمز عبور با تأییدیه مطابقت ندارد.',
        ]);
        // $f =$data['image'];
        // $x= preg_split('/<p><img alt="" src="|" style="height:.*/',$f);
        // $data['image']= $x[1];
        // $f=Storage::disk('public')->putFile( 'ProfilePhoto', request()->file('image'));
        // $data['image']=$f;

        // dd($data);
        // if (!isNull($request->password)) {
        //     $request->validate(['password' => ['required', 'string', 'min:8', 'confirmed']]);

        //     $data['password']=$request->password;
        // }
        $user->update($data);

        return redirect()->route('admin');
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
    public function destroy(string $id)
    {
        User::find($id)->delete();
        return redirect()->route('admin');
    }
}
