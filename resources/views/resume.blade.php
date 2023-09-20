@extends('layouts/main')

@section('title')
    Home
@endsection

@section('heading')
    Here is my CV to know more about me
@endsection

@section('body')
    <div class="w-full md:w-1/2 text-center font-semibold mx-auto">
        <p>
            Like the old saying… <br />
            <br />
        <div
            class="shadow-xl w-full md:w-1/2 h-full p-5 bg-white rounded-lg text-lg md:text-2xl font-semibold m-auto text-center">
            <i> &quot; {{ $saying }} &quot;</i>
        </div>
        <br />
        <a href={{ $link }}
            class="font-bold mt-10 inline-flex items-center p-3 text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            Download My CV
        </a>
        </p>
    </div>
@endsection
