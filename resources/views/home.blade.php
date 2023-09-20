@extends('layouts/main')

@section('title')
    Home
@endsection

@section('heading')
    Hi There 👋 <br>
    Welcome to my portfolio!
@endsection

@section('body')
    <div class="w-full md:w-1/2 text-center font-semibold mx-auto">
        <p class="py-6">Allow me to introduce myself:</p>
        <img src="img/profile.png" class="w-1/2 md:w-1/4 rounded-2xl mx-auto">
        <p class="py-6 text-justify md:text-center">
            I'm <bold>Ginanjar Tubagus Gumilar</bold>, a web developer with a passion for building new technologies and
            products. I'm skilled in PHP, both native and frameworks, and I love using modern JavaScript libraries and
            frameworks like NextJS to develop innovative products.
        </p>
    </div>
@endsection
