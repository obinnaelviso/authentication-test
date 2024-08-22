<?php

namespace App\Http\Controllers\Auth;

use App\Data\RegisterData;
use App\Http\Controllers\Controller;
use App\Http\Services\AuthService;
use Illuminate\Http\RedirectResponse;
use Inertia\Inertia;
use Inertia\Response;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): Response
    {
        return Inertia::render('Auth/Register');
    }

    /**
     * Handle an incoming registration request.
     *
     */
    public function store(RegisterData $data, AuthService $authService): RedirectResponse
    {
        $authService->register($data);
        return redirect(route('dashboard', absolute: false));
    }
}
