<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

Route::post('realtime-input/validator', function (Request $request) {
    app()->setLocale($request->lang);
    $validator = Validator::make(
        $request->all(),
        $request->rules,
        [],
        ['inputIndex' =>  __('validation.attributes.'.$request->name)]
    );
    if ($validator->fails()) {
        return response()->json($validator->errors());
    }

    return response()->json(['inputIndex' => '']);
})->name('realtime-input.validator');
