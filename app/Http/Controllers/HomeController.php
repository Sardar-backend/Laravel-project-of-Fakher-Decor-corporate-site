<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blogcategory;
use App\Models\contact;
use App\Models\project;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){
        $projects=project::all();
        $blogs=blog::orderBy('count_view')->limit(4)->get();

        return view('index' ,compact('projects','blogs'));
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
        $blogs=blog::paginate(1);
        return view('blog',compact('blogs'));
    }
    public function blog_single(int $id){
        $blog=blog::findOrFail($id);
        $count_view=$blog->count_view + 1;
        $blog->update(['count_view'=>$count_view]);
        $PopularBlogs=blog::orderBy('count_view')->limit(4)->get();
        $categories = blogcategory::where('parent',0)->get();
        //$categories = blogcategory::all();
        // dd($PopularBlogs);
        return view( 'single-blog', compact('blog','PopularBlogs','categories'));
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
        Auth::loginUsingId(1);

        return view('about-us');
    }

    public function contact(){
        Auth::logout();
        return view('contact-us');
    }

    public function login(){
        if (auth()->check()) {
            return redirect()->route('index'); // هدایت به صفحه اصلی اگر کاربر وارد شده باشد
        }
        return view('login');
    }

    public function login_post(Request $request){
        $data=$request->validate([
            'name' => ['required'],
            'password' => ['required','string','min:8'],
        ],[
            'password.required' => 'لطفاً رمز عبور خود را وارد کنید.',
            'password.min' => 'رمز عبور حداقل باید 8 کاراکتر باشد.',
            'name.required' => 'لطفاً نام کاربری خود را وارد کنید.',

        ]);
        if (auth()->attempt(['name' => $data['name'], 'password' => $data['password']])) {
            // ورود موفقیت‌آمیز
            Alert::success('ورود موفقیت آمیز بود','با موفقیت وارد وبسایت ما شدید');
            return redirect()->route('index')->with('success', 'با موفقیت وارد شدید');
        }

        Alert::error('ورود موفقیت آمیز نبود','لطفا دوباره تلاش کنید');
        return back();
        // Alert::error('ورود ناموفق','نام کاربری یا
    }

    public function register(){
        if (auth()->check()) {
            return redirect()->route('index'); // هدایت به صفحه اصلی اگر کاربر وارد شده باشد
        }
        return view('register');
    }
    public function register_post(Request $request){

        $data = $request->validate([
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

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        auth()->login($user);
        Alert::success('عضویت موفقیت آمیز بود','با موفقیت عضو وبسایت ما شدید');
        return redirect('/');

    }


    public function logout(){
        auth()->logout();
        return redirect()->route('home');
    }

}
