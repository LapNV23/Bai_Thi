<?php


namespace App\Http\Controllers;


use App\Models\Web;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('index');
    }
    public function store(Request $request){
        $request ->validate([
            'product_code'=>'required',
            'name'=>'required',
            'price'=>'required',
            'avatar'=>'required',

        ]);
        Web::create($request->all());
        return redirect()->route('index')
            ->with('success','Done!');
    }
    public function getDashboard()
    {
        $posts = Web::all();
        return view('index', compact('posts'));
    }


}
