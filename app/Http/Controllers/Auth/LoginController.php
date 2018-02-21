<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Socialite;
use  Illuminate\Contracts\Auth\Authenticatable;
use App\Photo;

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
    protected function authenticated( $user)
    {

        $user = User::all();

        if($user['role_id' == '1']) {
            return redirect('/admin');
        }

        return redirect('/');
    }
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Redirect the user to the GitHub authentication page.
     *
     * @return \Illuminate\Http\Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from GitHub.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        $isUser = User::whereEmail($user->getEmail())->first();

        if (!$isUser) {

            $us['email'] = $user->getEmail();

            $us['name'] = $user->getName();

            $ph['file'] = $user->getAvatar();
            $ph_storage = Photo::create($ph);

            $photos = Photo::all();

            foreach ($photos as $photo) {
                if ($photo->file == $ph_storage->file) {
                    $us['photo_id'] = $photo->id;
                }
            }

            Photo::create($ph);
            User::create($us);

        }

        Auth::login($isUser);

        return redirect('/');





    }


}