@extends('layouts.app')
<x-guest-layout>
<div class="login md:flex">
    <div class="absolute z-10 top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
            <hr>
            <a href="/login" class="block w-full px-5 py-3 text-center font-medium text-indigo-600 bg-gray-50 hover:bg-gray-100"> Se connecter </a>
        </div>
    </div>

    <div class="login-div1 relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-blue-800 to-purple-700 i justify-around items-center hidden">
        <div>
        <h1 class="text-white font-bold text-4xl font-sans">Connectez-vous</h1>
        <p class="text-white mt-1">Rejoignez une communauté de dev en France🇫🇷 au tours d'une passion commun</p>
            <a style="margin: 15px" class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                <button type="submit" class="block w-28 bg-white text-indigo-800 mt-4 py-2 rounded-2xl font-bold mb-2"> {{ __('Se connecter ') }}</button>
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

        <form  class="register-form" method="POST" action="{{ route('register') }}">
            @csrf

            <h1 class="login_bonjour text-gray-800 font-bold ">Bienvenue ! 😎</h1>
            <p class="text-sm font-normal text-gray-600 mb-7"> Partagez vos codes avec nous 😁</p>

            <!-- Name -->
            <div class="flex items-center border-2 py-2 px-3 mb-4">
                <input id="name" class="login-div-username-input border-none" type="text" name="name" :value="old('name')" required autofocus  placeholder="@Username"  />
            </div>

            <!-- Email Address -->
            <div class="login-div-email-input-div flex items-center border-2 py-2 px-3 mb-4">
                <input id="email" name="email"  class="login-div-email-input border-none" type="email" name="email" :value="old('email')" required placeholder="Adresse e-mail" />
            </div>

            <!-- Password -->
            <div class="flex items-center border-2 py-2 px-3 mb-4">
                <input id="password" type="password" name="password" required autocomplete="new-password"  class="login-div-password-input pl-2 outline-none border-none" placeholder="Mot de passe" />
            </div>

            <!-- Confirm Password -->
            <div class="flex items-center border-2 py-2 px-3 mb-4">
                <input id="password_confirmation" type="password" name="password_confirmation" required  class="login-div-password-input pl-2 outline-none border-none" placeholder="Confirmer mot de passe" />
            </div>

            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Vous avez déjà un compte ?') }}
            </a>

            <button id="azerty"> {{ __('S\'inscrire') }}</button>

        </form>
    </div>
</div>
</x-guest-layout>