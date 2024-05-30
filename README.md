# Custom Auth

This is a simple laravel, blade and Bootstrap app that implement a custom user authentication without needing starter kit like laravel Breeze.

## Key Feature

-   Authentication
-   Redirects
-   Route groups
-   Validation
-   sessions
-   Database Migration

## Technologies

-   [Laravel](https://laravel.com/)
-   [Bootstrap](https://getbootstrap.com/)

## Sample Code

### Product Route

```
Route::get('/', [AuthController::class, 'index'])->name('welcome');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginPost'])->name('login.post');


Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'registerPost'])->name('register.post');

Route::get('logout', [AuthController::class, 'logOut'])->name('logout');


Route::middleware(['auth'])->group(function () {
    Route::get('profile', function () {
        return 'Profile resource';
    })->name('profile');
```

### Auth Controller Resource

```
public function index()
    {
        return View('welcome_to_custom_auth');
    }
    public function login()
    {
        if (Auth::check()) {
            return redirect(route('welcome'));
        }
        return View('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email|',
            'password' => 'required|',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('welcome'))->with('success', 'You are welcome.');
        }

        return redirect(route('login'))->with('error', 'Login details are not valid');
    }


    public function register()
    {
        if (Auth::check()) {
            return redirect(route('welcome'));
        }
        return View('register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data = [
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ];

        $user = User::Create($data);

        if (!$user) {
            return redirect(route('register'))->with('error', 'Sorry Something went wrong!');
        }
        return redirect(route('login'))->with('success', 'welcome!');
    }

    public function logOut()
    {
        Session::flush();
        Auth::logout();

        return redirect(route('login'));
    }

```

## Screen shots

![home](/public/screenshots/localhost_8000_.png)
![Login](/public/screenshots/localhost_8000_login.png)
![Register](/public/screenshots/localhost_8000_register.png)
