@extends('layouts/main')

@section('title')
    Projects
@endsection

@section('heading')
    Here are my recent projects
@endsection

@section('body')
    <div class="grid grid-cols-1 md:grid-cols-2 place-items-center gap-2">
        {{-- jajaneling --}}
        <div
            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $name1 }}<br>
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $description1 }}<br>
            </p>
        </div>
        {{-- isekai --}}
        <div
            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $name2 }}<br>
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $description2 }}<br>
            </p>
        </div>
        {{-- mapbox --}}
        <div
            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $name3 }}<br>
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $description3 }}<br>
            </p>
        </div>
        {{-- meatball --}}
        <div
            class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{ $name4 }}<br>
            </h5>
            <p class="font-normal text-gray-700 dark:text-gray-400">
                {{ $description4 }}<br>
            </p>
        </div>
    </div>
@endsection
