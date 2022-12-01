@extends('layout')

@section('title', 'Page Title')

@section('content')
    <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-md dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                Laravel QR-Code Generator
            </h5>
        </a>
        <div class="mt-5 mb-5">
            <a href="{{ route('login') }}"
               class="inline-flex items-center px-3 py-2
                        text-sm font-medium text-center
                        text-white bg-purple-500 rounded-lg
                        hover:bg-purple-800 focus:ring-4
                        focus:outline-none
                        focus:ring-blue-300
                        dark:bg-blue-600
                        dark:hover:bg-blue-700
                        dark:focus:ring-blue-800"
            >
                Login
            </a>
            <a href="{{ route('register') }}"
               class="inline-flex items-center px-3 py-2
                        text-sm font-medium text-center text-white bg-red-500
                        rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none
                        focus:ring-blue-300 dark:bg-blue-600
                        dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            >
                Register
            </a>
        </div>
    </div>
    <div class="clearfix"></div>
{{--    <div class="flex justify-center items-center h-screen border-1">--}}
{{--        <h1 class="text-3xl text-purple-600 font-medium">--}}
{{--            Laravel 9 QR-Code Example--}}
{{--        </h1>--}}
{{--        <div class="mt-10 clearfix w-full">--}}
{{--            <button type="button" class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900">Login</button>--}}
{{--            <button type="button" class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Register</button>--}}
{{--        </div>--}}
{{--    </div>--}}
@stop
