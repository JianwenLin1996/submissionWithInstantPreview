<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;

use Session;

class PreviewController extends Controller
{
    //
    public function index(Request $request, $id){
        if ($id == null){
            return view('form.home');
        }
        $displayForm = Form::where('id', $id)->first();

        return view('form.preview', [
            'title'=>$displayForm->title,
            'description'=>$displayForm->description,
            'image_path'=>$displayForm->image_path,
            'id'=>$displayForm->id,
        ]);
    }
}
