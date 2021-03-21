<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use Session;
use Redirect;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    //
    public function index(){
        return view('form.home');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'img' => 'required'
        ]);

        $newImageName = time().'-'.$request->title.'.'.$request->img->extension();

        $request->img->move(public_path('images'), $newImageName);

        $tempForm = Form::create(
            ['title'=> $request->title,
            'description'=> $request->description,
            'image_path'=> $newImageName],

        );

        return redirect()->route('preview',['id'=>$tempForm->id]);
        // return view('form.preview');
    }
}
