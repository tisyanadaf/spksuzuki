<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Karyawan;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/dashboard';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    private $karyawan_model;

    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
        $this->karyawan_model = new Karyawan;
    }

    public function index()
    {
        return view('login.index');
    }

    public function login(Request $request)
    {
        $credentials = array(
            'username' => $request->username,
            'password' => $request->password,
        );

        if (Auth::guard('web')->attempt($credentials)) {
            return redirect('dashboard');
        } else {
            print_r('Ga');
            $request->session()->flash('error_login', 'Login Gagal, Cek Kembali Username dan Password');
            return redirect('login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
