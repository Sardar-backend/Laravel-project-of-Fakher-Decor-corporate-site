<?php

namespace App\Http\Controllers;

use App\Models\blog;
use App\Models\blogcategory;
use App\Models\comment;
use App\Models\contact;
use App\Models\newsletter;
use App\Models\project;
use App\Models\User;
// use Egulias\EmailValidator\Warning\Comment;
use Artesaos\SEOTools\SEOTools;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{

    public function index(){
        $this->seo()->setTitle( __('messages.home_page') )
        ->setDescription('به صفحه اصلی سایت خوش آمدید')
        ->opengraph()->setTitle(__('messages.home_page'))
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $projects=project::all();
        $blogs=blog::orderBy('count_view')->limit(4)->get();

        return view('index' ,compact('projects','blogs'));
    }
    public function Services(){
        $this->seo()->setTitle( __('messages.our_services') )
        ->setDescription('خدمات ما ')
        ->opengraph()->setTitle(__('messages.our_services'))
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        return view('services');
    }
    public function projects()
    {
        $this->seo()->setTitle( __('messages.projects') )
        ->setDescription('پروژه ها ')
        ->opengraph()->setTitle(__('messages.projects'))
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $projects=project::all();

        return view('project',compact('projects'));
    }
    public function faq(){
        $this->seo()->setTitle( __('messages.frequently_asked_questions') )
        ->setDescription('پروژه ها ')
        ->opengraph()->setTitle(__('messages.frequently_asked_questions'))
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        return view('faq');
    }
    public function blog_list(){
        $this->seo()->setTitle( __('messages.articles') )
        ->setDescription('پروژه ها ')
        ->opengraph()->setTitle(__('messages.articles'))
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $blogs=blog::paginate(1);
        return view('blog',compact('blogs'));
    }
    public function blog_single(int $id){
        $blog=blog::findOrFail($id);
        $this->seo()->setTitle($blog->title)
        ->setDescription('پروژه ها ')
        ->opengraph()->setTitle($blog->title)
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $count_view=$blog->count_view + 1;
        $blog->update(['count_view'=>$count_view]);
        $PopularBlogs=blog::orderBy('count_view')->limit(4)->get();
        $categories = blogcategory::where('parent',0)->get();
        $comments = comment::where('parent_id',0)->where('status',1)->get();
        //$categories = blogcategory::all();
        // dd($PopularBlogs);
        return view( 'single-blog', compact('blog','PopularBlogs','categories','comments'));
    }
    public function project_single(int $id){
        $project=project::findOrFail($id)->first();
        $this->seo()->setTitle($project->name)
        ->setDescription('پروژه ها ')
        ->opengraph()->setTitle($project->name)
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        $images=$project->gallery()->get();
        return view( 'single-project',compact('project',  'images'));
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
        $this->seo()->setTitle( __('messages.about') )
        ->setDescription('پروژه ما ')
        ->opengraph()->setTitle(__('messages.about'))
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        Auth::loginUsingId(1);

        return view('about-us');
    }

    public function contact(){
        $this->seo()->setTitle( __('messages.about') )
        ->setDescription('پروژه ما ')
        ->opengraph()->setTitle(__('messages.about'))
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        Auth::logout();
        return view('contact-us');
    }

    public function login(){
        $this->seo()->setTitle( __('messages.login') )
        ->setDescription('پروژه ما ')
        ->opengraph()->setTitle(__('messages.login'))
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);
        if (auth()->check()) {
            return redirect()->route('index'); // هدایت به صفحه اصلی اگر کاربر وارد شده باشد
        }
        return view('login');
    }

    public function download_post(){

        $filePath = storage_path('app\public\files\MyResume-314[www.cvbuilder.me].pdf');
        return response()->download($filePath ,'MyResume', [
            'Content-Type' => 'application/pdf', // نوع محتوای فایل
            'Cache-Control' => 'no-cache', // جلوگیری از کش شدن فایل

    ]);

    }

    public function craete_comment(Request $request){
        $data = $request->validate([
            'parent_id' => 'max:255',
            'user_id' => 'required',
            'content' => 'required'

        ]);
        comment::create($data);
        Alert::success('نظر شما ارسال شد','دیدگاه شما پس از تائید نمایش داده خواهد شد');
        return back();
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
        $this->seo()->setTitle( __('messages.register') )
        ->setDescription('پروژه ما ')
        ->opengraph()->setTitle(__('messages.register'))
        ->addImage(asset('img/logo.png'), [
            'height' => 200,
            'width' => 200,
        ]);

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

    public function newsletter(Request $request){
        $data=$request->validate([
            'email' => ['required', 'email','unique:newsletters']
        ]);
        newsletter::create($data);
        Alert::success('ایمیل شما با موفقیت ثبت شد','با موفقیت عضو خبرنامه ما شدید');
        return back();
    }

    public function logout(){
        auth()->logout();
        return redirect()->route('home');
    }

}
