<?php

Route::get('contact-form', [\MAAK\ContactForm\Http\Controllers\IndexController::class,'index'])->middleware('web');
Route::post('contact-form', [\MAAK\ContactForm\Http\Controllers\IndexController::class,'send'])->name('maak.contactForm.send');
