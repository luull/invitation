<?php

    namespace App\Http\Controllers\frontpage;
    
    use App\Http\Controllers\Controller;
    use App\Providers\RouteServiceProvider;
    use Illuminate\Foundation\Auth\AuthenticatesUsers;
    use Laravel\Socialite\Facades\Socialite; 
    use App\Models\Users; 
    use App\Models\Templates;
    use Illuminate\Support\Facades\Validator;
    use Illuminate\Http\Request; 
    use Illuminate\Support\Facades\Hash;
    
    class AuthController extends Controller
    {
        public function index()
        {
            return view('pages.auth.login');
        }
 
        public function login(Request $request)
        {
            $validate = Validator::make($request->all(),[
                'email' => 'required',
                'password' => 'required',
            ]);
            if ($validate->fails()) {
                return redirect()->back()->with(['message' => 'Form is required', 'color' => 'alert-warning']);

            }else{
                $email = $request->email;
                $pass = $request->password;
                $hsl = Users::where('email', $email)->first();
                if($hsl != null){
                    if($hsl->email == $email){
                        if (Hash::check($pass, $hsl->password)) {
                            $getTheme = Templates::where('id', $hsl->id_templates)->first();
                            session(['dataUser' => $hsl]);
                            session(['themes' => $getTheme]);
                            return redirect('/dashboard')->with(['message' => 'Successfully logged in', 'color' => 'alert-success']);

                        }else{
                            return redirect()->back()->with(['message' => 'Invalid Password', 'color' => 'alert-danger']);
                        }
                    }else{
                        return redirect()->back()->with(['message' => 'Invalid Email', 'color' => 'alert-danger']);
                    }
                }else{
                    return redirect()->back()->with(['message' => 'User not Registered', 'color' => 'alert-warning']);
                }
            }
        }
        public function redirectToProvider()
        {
            return Socialite::driver('google')->redirect();
        }
        public function handleProviderCallback(Request $request)
        {
         
                $user_google    = Socialite::driver('google')->user();
                $user           = Users::where('email', $user_google['email'])->first();                
                if($user != null){
                    $getTheme = Templates::where('id', $user->id_templates)->first();
                    session(['dataUser' => $user]);
                    session(['themes' => $getTheme]);
                    return redirect('/dashboard')->with(['message' => 'Successfully logged in', 'color' => 'alert-success']);
                }else{
                    $create = Users::create([
                        'name'              => $user_google['name'],
                        'email'             => $user_google['email'],
                        'email_verified_at' => now(),
                        'password'          => 0,
                    ]);
                    return redirect()->route('login',compact('create'))->with(['message' => 'Successfully Register', 'color' => 'alert-success']);
                }

        }
        public function redirectToProvider2()
        {
            return Socialite::driver('facebook')->redirect();
        }
        public function handleProviderCallback2(Request $request)
        {
         
                $user_facebook    = Socialite::driver('facebook')->user();
                $user           = Users::where('email', $user_facebook['email'])->first();                
                if($user != null){
                    $getTheme = Templates::where('id', $user->id_templates)->first();
                    session(['dataUser' => $user]);
                    session(['themes' => $getTheme]);
                    return redirect('/dashboard')->with(['message' => 'Successfully logged in', 'color' => 'alert-success']);
                }else{
                    $create = Users::create([
                        'name'              => $user_facebook['name'],
                        'email'             => $user_facebook['email'],
                        'email_verified_at' => now(),
                        'password'          => 0,
                    ]);
                    return redirect()->route('login',compact('create'))->with(['message' => 'Successfully Register', 'color' => 'alert-success']);
                }

        }
        public function regis()
        {
            return view('pages.auth.regis');
        }
        public function register(Request $request)
        {
            $validate = Validator::make($request->all(),[
                'name' => 'required|max:25',
                'email' => 'required',
                'password' => 'required',
            ]);
            if ($validate->fails()) {
                return redirect()->back()->with(['message' => 'Form is required', 'color' => 'alert-warning']);

            }else{
                $name = $request->name;
                $email = $request->email;
                $pass = $request->password;
                $checkemail = Users::where('email', $email)->first();
                $checkuser = Users::where('name', $name)->first();
                if($checkemail != null){
                    return redirect()->back()->with(['message' => 'Email is Already Register', 'color' => 'alert-warning']);
                }elseif($checkuser != null){
                    return redirect()->back()->with(['message' => 'Name is not available', 'color' => 'alert-warning']);
                }else{
                    $user = Users::create([
                        'name' => $name,
                        'email' => $email,
                        'password' => bcrypt($pass),
                        'email_verified_at' => now(),
                    ]);
                    return redirect()->route('login',compact('user'))->with(['message' => 'User is Successfully Register', 'color' => 'alert-success']);
                }
                    
            }
        }
        public function logout(Request $request)
        {
            if ($request->session()->has('dataUser')) {
                $request->session()->flush('dataUser');
                $request->session()->flush('themes');
            }
            return redirect('/dashboard')->with(['message' => 'Successfully Logged Out', 'color' => 'alert-success']);
        }
    }

?>