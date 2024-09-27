<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index($id)
    {
        // ভেরিয়েবল ডিক্লেয়ার করা
        $name = "Donal Trump";
        $age = "75";

        // ডেটা অ্যাসোসিয়েটিভ অ্যারেতে সংরক্ষণ করা
        $data = [
            'id' => $id,
            'name' => $name,
            'age' => $age,
        ];

        // কুকি তৈরি করা
        $cookie = cookie(
            'access_token',
            '123-XYZ',
            1,
            '/',
            $_SERVER['SERVER_NAME'],
            false,
            true
        );

        // JSON রেসপন্স প্রদান করা
        return response()->json($data, 200);
    }
}
