<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg pb-20">
                <div class="p-6 text-gray-900">
                    <h1 class="font-bold">QR-Code Form Parameters</h1>
                </div>
                <div class="mt-10 ml-20 mr-20 flex-row flex">
                    <div class="w-2/3">
                        <form action="#" id="codeForm">
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-6">
                                    <label for="success" class="block mb-2 text-sm font-medium">Content</label>
                                    <input type="text"
                                           name="link"
                                           id="link"
                                           class="border placeholder-gray-700 dark:placeholder-gray-500 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700"
                                           placeholder="QR Code Redirect"
                                    />
                                    <span class="error text-red-300 text-small" id="linkError"></span>
                                </div>
                                <div class="mb-6">
                                    <label for="success" class="block mb-2 text-sm font-medium">Size</label>
                                    <input type="number"
                                           name="size"
                                           id="size"
                                           class="border placeholder-gray-700 dark:placeholder-gray-500 text-sm rounded-lg block w-full p-2.5 dark:bg-gray-700"
                                           placeholder="QR Code Size"
                                    />
                                    <span class="error text-red-300 text-small" id="linkSize"></span>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 gap-4">
                                <div class="mb-6">
                                    <label for="success" class="block mb-2 text-sm font-medium">Background</label>
                                    <div class="flex">
                                        <input type="text"
                                               readonly
                                               id="colorBackground"
                                               class="border placeholder-gray-700 dark:placeholder-gray-500 text-sm rounded-lg block w-1/2 p-2.5 dark:bg-gray-700"
                                               placeholder="Color"
                                        />

                                        <toolcool-color-picker
                                            color="#fff"
                                            class="mt-2 ml-2"
                                            id="color-picker-background"
                                        />

                                    </div>
                                </div>
                                <div class="mb-6">
                                    <label for="success" class="block mb-2 text-sm font-medium">Fill</label>
                                    <div class="flex">
                                        <input type="text"
                                               readonly
                                               id="colorFill"
                                               class="border placeholder-gray-700 dark:placeholder-gray-500 text-sm rounded-lg block w-1/2 p-2.5 dark:bg-gray-700"
                                               placeholder="Color"
                                        />

                                        <toolcool-color-picker
                                            color="#000"
                                            class="mt-2 ml-2"
                                            id="color-picker-fill"
                                        />
                                    </div>
                                </div>
                            </div>
                            <a href="javascript:;"
                               id="applyCodeBtn"
                               class="inline-flex items-center px-3 py-2
                                        text-sm font-medium text-center text-white bg-red-500
                                        rounded-lg hover:bg-red-800 focus:ring-4 focus:outline-none
                                        focus:ring-blue-300 dark:bg-blue-600
                                        dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                Apply
                            </a>
                        </form>
                    </div>
                    <div class="w-1/3 ml-20 owerflow">
                        {{--                        <div class="card-body">--}}
                        {{--                            {!! QrCode::size(300)--}}
                        {{--                                    ->backgroundColor(255, 255, 255)--}}
                        {{--                                    ->color(0, 0, 0)--}}
                        {{--                                    ->generate('https://tailwindcss.com/')--}}
                        {{--                            !!}--}}
                        {{--                        </div>--}}
                        <div class="card-body" id="generatedCode">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
