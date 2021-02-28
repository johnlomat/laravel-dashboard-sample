@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="max-w-5xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-gray-900">
                Personal Information
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                Personal details and application.
                </p>
            </div>
            <div class="border-t border-gray-200">
                <form action="{{ route('account-settings') }}" method="POST">
                    @csrf

                    <dl>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                            Full name
                            </dt>
                            <dd class="name-field--container mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 sm:flex justify-between">
                                <p class="name-item sm:mb-0 mb-2"><span class="first-name">{{ $user->first_name }}</span> <span class="last-name">{{ $user->last_name }}</span></p>

                                <div class="name-field--wrapper sm:flex">
                                    <div class="name--field hidden sm:w-6/12 sm:mr-2 sm:mt-0 w-full mt-2">
                                        <label for="first-name" class="sr-only">{{ __('Password') }}</label>
                                        <input id="first-name" name="first_name" type="text" autocomplete="given-name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="First name" value="{{ $user->first_name }}">
                                        @error('first_name')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror
                                    </div>

                                    <div class="name--field hidden sm:w-6/12 sm:ml-2 sm:mt-0 w-full mt-4">
                                        <label for="last-name" class="sr-only">{{ __('Confirm password') }}</label>
                                        <input id="last-name" name="last_name" type="text" autocomplete="family-name" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="Last name" value="{{ $user->last_name }}">
                                        @error('last_name')
                                            <p class="text-red-500 text-xs italic mt-4">
                                                {{ $message }}
                                            </p>
                                        @enderror                            
                                    </div>
                                </div>
                                
                                <span class="edit-list-item font-medium text-right text-indigo-600 cursor-pointer select-none hover:underline">Edit</span>                            
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                            Email address
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $user->email }}
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class="text-sm font-medium text-gray-500">
                            Password
                            </dt>
                            <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 sm:flex">
                                <a href="{{ route('account-change-password') }}" class="font-medium text-indigo-600 hover:underline">Change Password</a>
                            </dd>
                        </div>
                    </dl>
                    <div class="bg-white">
                        <div class="w-full px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button id="submit-button" type="submit" class="cursor-not-allowed inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" disabled>
                            Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection