<?php

namespace App\Http\Controllers\Auth;

use DB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // ToDO email address validaiton
        $username = $request->username;
        $msg = ['invalid' => 'You entered an invalid email address.', 'not-exists' => "This user doesn't exists"];
        $request->validate(
            ['username' => ['required', 'string', 'exist:users, username, email']],
            [
                'username.exist' => Str::contains($username, '@') ?
                    (!filter_var($username, FILTER_VALIDATE_EMAIL) ?
                        $msg['invalid'] : $msg['not-exists'])  : $msg['not-exists']
            ]
        );

        $email = ['email' => Str::contains($username, '@') ? $username : User::select('email')->where('username', $username)->get()];

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $status = Password::sendResetLink(
            $email
        );

        return $status == Password::RESET_LINK_SENT
            ? back()->with('status', __($status))
            : back()->withInput($request->only('email'))
            ->withErrors(['email' => __($status)]);
    }
}
