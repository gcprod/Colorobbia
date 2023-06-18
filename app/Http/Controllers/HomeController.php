<?php

namespace App\Http\Controllers;

use App\Models\Citizendatas;
use App\Models\Qrcitizendatas;
use App\Models\Qritizendatas;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function store(Request $request)
    {
        // var_dump($request->all()); exit;

        Citizendatas::create($request->all());

        return redirect('citizendata');
    }
    public function qrstore(Request $request)
    {
        // var_dump($request->all()); exit;

        Qrcitizendatas::create($request->all());

        return redirect('qrcitizendata');
    }
    public function input()
    {
        return view('inputqrdata');
    }
}
