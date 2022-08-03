<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

Route::post('validate', function (Request $request) {
    $validator = Validator::make($request->all(), $request->rules);
    if ($validator->fails()) {
        return response()->json($validator->errors() );
    }
    return response()->json(['inputIndex' => '']);
})->name('realtime-input.validator');
