<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Customer;
use App\Models\Moderator;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;
use App\Providers\RouteServiceProvider;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'min:2', 'max:16', 'unique:users,username'], //* Rule::unique('users', 'username')
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'phone' => ['required'], //, 'digits:11'],
            'newsletter' => ['nullable', 'in:newsletter'],
        ]);

        $customer_attributes['notifications'] = isset($request->newsletter) ? 1 : 0;
        unset($attributes['newsletter']);

        // Test
        // $user = User::with(['role' => function (MorphTo $morphTo) {
        //     $morphTo->morphWith([Customer::class, Moderator::class]);
        //  }])->create($attributes);
        // dd($user);

        $customer = Customer::create($customer_attributes);
        $user = $customer->user()->create($attributes); //save(new User($attributes));
        event(new Registered($user));
        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
