<?php



Route::get('/', 'PageController@home'); // Əsas səhifə
Route::get('pages/about', 'PageController@about'); // haqqında 
Route::get('pages/advertising', 'PageController@advertising'); // reklam
Route::get('vacancies/new', 'PageController@addVac'); // cv əlavə et
Route::get('resumes/new', 'PageController@addCv'); // vacansiya əlavə et
Route::get('vacancies', 'PageController@showAllVac'); // hamısını göstər vakansiyalar
Route::get('resumes', 'PageController@showAllCv'); // hamısını göstər cvlər

//Formlar
