<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/projects', function () {
    return view('projects', [
        'name1'  => 'Jajaneling',
        'description1' => 'Made with PHP Native, this website is an official landing page of Jajaneling, which is a web that would make the transaction between street vendors and buyers so much easier than before.',

        'name2'  => 'Isekai Store',
        'description2' => 'Made with NextJS, this website is an official landing page of Isekai Store, which is a web marketplace that sells stuff from other world, or known as Isekai.',

        'name3'  => 'Location Management System',
        'description3' => 'Made with PHP Native and ReactJS, this app is a location management system that uses Mapbox API to display the location. This app also has a feature to detect weather.',

        'name4'  => 'Meatball Ingredients Management System',
        'description4' => 'A CRUD system to save the data of meatball ingredients stock. This app using CodeIgniter framework and also has been equipped with a login system.',
    ]);
});
Route::get('/resume', function () {
    return view('resume', [
        'saying' => 'Out of sight, out of mind',
        'link' => 'https://drive.google.com/file/d/1Oib1zfz_TVrx9sFZuv2QcENMnyRhHbff/view?usp=sharing'
    ]);
});
Route::get('/contacts', function () {
    return view('contacts', [
        'telephone' => '+6281361354486',
        'email' => 'ginanjar035@gmail.com',
        'linkedin' => 'https://www.linkedin.com/in/ginanjar-tubagus-gumilar-a4638b1b6/'
    ]);
});