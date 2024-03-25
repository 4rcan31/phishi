<?php


Route::group(function(){

    Route::post("/login", function($request){
       controller("LoginController", "login", $request);
    });


})->prefix("/api/v1");