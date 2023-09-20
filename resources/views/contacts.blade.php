@extends('layouts/main')

@section('title')
    Home
@endsection

@section('heading')
    Keep in touch with me
@endsection

@section('body')
    <div class="w-full md:w-1/2 text-center font-semibold mx-auto">
        <p class="text-center py-4">
            📧 Email : {{ $email }}
            <br />
            📞 Telephone : {{ $telephone }}
            <br />
            👨‍💼 LinkedIn :
            <a href={{ $linkedin }}>
                Ginanjar Tubagus Gumilar
            </a>
            <br />
        </p>
    </div>
@endsection
