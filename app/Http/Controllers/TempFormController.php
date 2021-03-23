<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempForm;
use Redirect;
use Illuminate\Support\Facades\Log;

class TempFormController extends Controller
{
     //
     public function index(){
        return view('form.thankyou');
    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required|max:255',
            'description' => 'required',
            'img' => 'required'
        ]);

        $newImageName = time().'-'.$request->title.'.'.$request->img->extension();

        $request->img->move(public_path('tempimages'), $newImageName);

        $tempForm = TempForm::create(
            ['title'=> $request->title,
            'description'=> $request->description,
            'image_path'=> $newImageName],

        );

        return redirect()->route('preview',['id'=>$tempForm->id]);
        // return view('form.preview');
    }
}
