<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Termwind\Components\Dd;

class InputController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        $request->validate([
            'app_name'=>'required',
        ]);
        // đổi tên APP_NAME trong file .env thành tên app_name
        $path = base_path('.env');
        // đổi tên APP_NAME trong file .env thành tên app_name
        if (file_exists($path)) {
            file_put_contents($path, str_replace(
                'APP_NAME=' . env('APP_NAME'), 'APP_NAME=' . $request->app_name, file_get_contents($path)
            ));
        }
        return redirect()->back()->with('success', 'Đổi tên thành công');
        
    }
}
