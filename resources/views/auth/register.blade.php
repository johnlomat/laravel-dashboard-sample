@extends('layouts.app')

@section('content')
<main>
    <div class="mt-0 h-screen flex justify-center items-center bg-gray-50">
        <div class="md:grid md:grid-cols-1 md:gap-6 p-8">
            <div class="mt-5 md:mt-0 md:col-span-2 rounded-md shadow-lg">
                <form action="{{ route('register') }}" method="POST" class="m-0">
                    @csrf

                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="mb-8">
                                <img class="mx-auto h-12 w-auto" src="{{ asset('images/workflow-mark-indigo-600.svg') }}" alt="Workflow">
                                <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">
                                  Register an account
                                </h2>
                            </div>
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="first-name" class="block text-sm font-medium text-gray-700 mb-1 @error('first_name') border-red-500 @enderror">{{ __('First name') }}</label>
                                    <input type="text" name="first_name" id="first-name" autocomplete="given-name" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('first_name') }}">
                                    @error('first_name')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>
                
                                <div class="col-span-6 sm:col-span-3">
                                    <label for="last-name" class="block text-sm font-medium text-gray-700 mb-1 @error('last_name') border-red-500 @enderror">{{ __('Last name') }}</label>
                                    <input type="text" name="last_name" id="last-name" autocomplete="family-name" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('last_name') }}">
                                    @error('last_name')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror                               
                                </div>
                
                                <div class="col-span-6 sm:col-span-6">
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1 @error('email') border-red-500 @enderror">{{ __('E-Mail address') }}</label>
                                    <input type="text" name="email" id="email" autocomplete="email" class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" value="{{ old('email') }}">
                                    @error('email')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="password" class="block text-sm font-medium text-gray-700 mb-1 @error('password') border-red-500 @enderror">{{ __('Password') }}</label>
                                    <input id="password" name="password" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                    @error('password')
                                        <p class="text-red-500 text-xs italic mt-4">
                                            {{ $message }}
                                        </p>
                                    @enderror
                                </div>

                                <div class="col-span-6 sm:col-span-3">
                                    <label for="password-confirm" class="block text-sm font-medium text-gray-700 mb-1">{{ __('Confirm password') }}</label>
                                    <input id="password-confirm" name="password_confirmation" type="password" autocomplete="new-password" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm">
                                </div>
                            </div>
                        </div>
                        <div class="px-4 py-6 bg-gray-50 text-right sm:px-6">
                            <button type="submit" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                {{ __('Register') }}
                            </button>

                            <p class="w-full text-xs text-center text-gray-700 mt-5 sm:text-sm">
                                {{ __('Already have an account?') }}
                                <a class="text-blue-500 hover:text-blue-700 no-underline hover:underline" href="{{ route('login') }}">
                                    {{ __('Login') }}
                                </a>
                            </p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection