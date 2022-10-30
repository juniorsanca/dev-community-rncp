@extends('layouts.app')
<x-guest-layout>
<div class="login md:flex">
    <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <hr>
            <a href="/register" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"> Se créer un compte </a>
        </div>
    </div>

    <div class="login-div1 relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
        <div>
        <h1 class="text-white font-bold text-4xl font-sans">Se créer un compte</h1>
        <p class="text-white mt-1">Rejoignez une communauté de dev en France🇫🇷 au tours d'une passion commun</p>
            <a style="margin: 15px" class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2"> {{ __('S\'inscrire ') }}</button>
            </a>
        </div>
        <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
    </div>

    <div class="login-div2" style="">
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf

            <h1 class="login_rebonjour text-gray-800 font-bold ">Rebonjour! 👋</h1>
            <p class="text-sm font-normal text-gray-600 mb-7"> Content de te revoir 😁</p>

                <div class="login-div-email-input-div flex items-center border-2 py-2 px-3 mb-4">
                    <input  id="email" type="email" name="email" :value="old('email')" required autofocus  class="login-div-email-input border-none" placeholder="Adresse e-mail" />
                </div>

                <div class="flex items-center border-2 py-2 px-3">
                    <input id="password" type="password" name="password" required autocomplete="current-password"  class="login-div-password-input pl-2 outline-none border-none" placeholder="Mot de passe" />
                </div>

                <div style="display: flex">
                    <!-- Remember Me -->
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Se souvenir de moi') }}</span>
                        </label>
                    </div>

                    @if (Route::has('password.request'))
                        <a style="margin: 15px" class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Mot de passe oublié ?') }}
                        </a>
                    @endif
                </div>

            <button id="azerty"> {{ __('Se connecter') }}</button>

        </form>
    </div>
</div>
</x-guest-layout>