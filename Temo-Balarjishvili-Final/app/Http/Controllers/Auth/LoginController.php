<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  

    use AuthenticatesUsers;

    /**
     
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     *     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout (Request $request) {
        if (session()->has('cartProducts')) {
            $user = Auth::user();
            if (empty($user->force_logout)) {
                $cartProductsString = serialize(session()->get('cartProducts'));
                $user->cart = $cartProductsString;
                $user->save();
            }
        }

        Auth::guard('web')->logout();

        return redirect($this->redirectTo);
    }

    protected function authenticated(Request $request, $user)
    {

    }
}
