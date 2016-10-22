<?php

//Səhifələr
Route::get('/', 'PageController@home'); // Əsas səhifə
Route::get('layout', 'PageController@layout');
Route::get('/categories/resumes', 'PageController@resumesHome'); // Index-de cvlər səhifəsi
Route::get('pages/about', 'PageController@about'); // haqqında
Route::get('pages/advertising', 'PageController@advertising'); // reklam
Route::get('admin', 'PageController@admin'); //admin
//Cvler
Route::get('/resumes', 'CvController@index'); // hamısını göstər cv
Route::get('/resumes/new', 'CvController@create'); // yeni cv yarat (
Route::get('/resumes/{id}', 'CvController@show'); // id yə görə cv göstərmə
//Vakansiyalar
Route::get('/vacancies', 'VacController@index'); // hamısını göstər cv
Route::get('/vacancies/new', 'VacController@create'); // yeni cv yarat
Route::get('/vacancies/{id}', 'VacController@show'); // id yə görə cv göstərmə
//Cv və Vakansiya əlavə etmə
Route::post('resumes', 'CvController@store'); // cv yarat
Route::post('vacancies', 'VacController@store'); // vacansiya elave etme
Route::get('vacancies', 'VacController@index');
