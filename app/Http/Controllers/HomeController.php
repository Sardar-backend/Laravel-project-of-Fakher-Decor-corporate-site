<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\contact;
use App\Models\project;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function Services(){
        return view('services');
    }
    public function projects()
    {
        $projects=project::all();
        return view('project',compact('projects'));
    }
    public function faq(){
        return view('faq');
    }
    public function blog_list(){
        $blogs=blog::paginate(8);
        return view('blog',compact('blogs'));
    }
    public function blog_single(int $id){
        $blog=blog::findOrFail($id);
        $count_view=$blog->count_view + 1;
        $blog->update(['count_view'=>$count_view]);
        $PopularBlogs=blog::orderBy('count_view')->limit(4)->get();
        // dd($PopularBlogs);
        return view( 'single-blog', compact('blog','PopularBlogs'));
    }
    public function project_single(int $id){
        $project=project::findOrFail($id)->first();
        return view( 'single-project',compact('project'));
    }

    public function contact_post(Request $request){
        $data=$request->validate([
            'email' => ['required','email'],
            'content' => ['required','string'],
            'subject' => ['required','string','max:100'],
        ],[
            'subject.required' => 'لطفاً موضوع پیام خود را وارد کنید.',
            'content.required' => 'لطفاً متن پیام خود را وارد کنید.',
            'subject.max' => 'موضوع نباید بیشتر از 100 کاراکتر باشد.',
            'email.required' => 'لطفاً ایمیل خود را وارد کنید.',
            'email.email' => 'ایمیل وارد شده معتبر نیست.',
        ]);
        contact::create($data);


        //Alert::success('your message has been sent successfully')
        Alert::success('پیام شما ارسال شد','پیام شما  با موفقیت ارسال شد' );
        return redirect()->back();


    }
    public function about(){
        return view('about-us');
    }

    public function contact(){
        return view('contact-us');
    }
}
