<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\Auth\AdminLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class AdminAuthSession extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        //return $val = Auth::guard('admin')?'admin guard':'other guard';
        return view("Admin.Auth.login");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AdminLoginRequest $request): RedirectResponse
    {
        //
        $request->adminAuthenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::HOME);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        //
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
