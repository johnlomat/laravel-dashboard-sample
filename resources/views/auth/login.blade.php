@extends('layouts.app')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full space-y-8 p-8 bg-white rounded-md shadow-lg">
      <div>
        <img class="mx-auto h-12 w-auto" src="{{ asset('images/workflow-mark-indigo-600.svg') }}" alt="Workflow">
        <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
          Sign in to your account
        </h2>
      </div>
      <form class="mt-8 space-y-6" action="{{ route('login') }}" method="POST">
        @csrf

        <input type="hidden" name="remember" value="true">
        <div class="rounded-md -space-y-px">
          <div>
            <label for="email-address" class="sr-only">{{ __('E-Mail Address') }}:</label>
            <input id="email-address" name="email" type="email" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('email') border-red-500 @enderror" placeholder="Email address" value="{{ old('email') }}">
            @error('email')
              <p class="text-red-500 text-xs italic my-4">
                  {{ $message }}
              </p>
            @enderror
          </div>
          <div>
            <label for="password" class="sr-only">{{ __('Password') }}:</label>
            <input id="password" name="password" type="password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm @error('password') border-red-500 @enderror" placeholder="Password">
            @error('password')
              <p class="text-red-500 text-xs italic mt-4">
                  {{ $message }}
              </p>
            @enderror
          </div>
        </div>
  
        <div class="flex items-center justify-between">
          <div class="flex items-center">
            <input id="remember" name="remember" type="checkbox" class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember_me" class="ml-2 block text-sm text-gray-900">
              {{ __('Remember Me') }}
            </label>
          </div>
  
          @if (Route::has('password.request'))
            <div class="text-sm">
              <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500">
                {{ __('Forgot Your Password?') }}
              </a>
            </div>
          @endif
        </div>
  
        <div>
          <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            <span class="absolute left-0 inset-y-0 flex items-center pl-3">
              <!-- Heroicon name: solid/lock-closed -->
              <svg class="h-5 w-5 text-indigo-500 group-hover:text-indigo-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
              </svg>
            </span>
            {{ __('Login') }}
          </button>

          @if (Route::has('register'))
            <p class="w-full text-xs text-center text-gray-700 my-6 sm:text-sm sm:my-8">
                {{ __("Don't have an account?") }}
                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('register') }}">
                    {{ __('Register') }}
                </a>
            </p>
          @endif
        </div>
      </form>
    </div>
</div>
@endsection