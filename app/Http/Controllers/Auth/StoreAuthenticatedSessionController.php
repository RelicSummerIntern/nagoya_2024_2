<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\StoreLoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class StoreAuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.store-login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(StoreLoginRequest $request): RedirectResponse
    {
        // `web`ガードではなく、`store_user`ガードを使用する
        if (Auth::guard('store_user')->attempt($request->only('email', 'password'), $request->filled('remember'))) {
            $request->session()->regenerate();

            session()->flash('success', 'ログインしました!');

            return redirect()->route('stores_number_form');
        }

        return back()->withErrors([
            'email' => 'ログイン情報が正しくありません。',
        ]);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('store_user')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        session()->flash('success', 'ログアウトしました!');

        return redirect('');
    }
}
