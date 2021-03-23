<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempForm;
use App\Models\Form;

class PreviewController extends Controller
{
    //
    public function index(Request $request, $id){
        if ($id == null){
            return view('form.home');
        }
        $displayForm = TempForm::where('id', $id)->first();

        return view('form.preview', [
            'title'=>$displayForm->title,
            'description'=>$displayForm->description,
            'image_path'=>$displayForm->image_path,
            'created_at'=>$displayForm->created_at,
            'id'=>$displayForm->id,
        ]);
    }

    public function store(Request $request, $id){

        $tempForm = TempForm::where('id', $id)->first();

        $newImageName = 'final'.'-'.$tempForm->image_path;

        $tempExt =  substr($tempForm->image_path, strpos($tempForm->image_path, ".") );

        copy('tempimages/'.$tempForm->image_path, 'images/'.$newImageName);

        $form = Form::updateOrCreate(
            ['temp_id' => $id],
            ['temp_id' => $id,
            'title'=> $tempForm->title,
            'description'=> $tempForm->description,
            'image_path'=> $newImageName],

        );

        return redirect()->route('thankyou');
        // return view('form.thankyou');
    }

    public function show(Request $request){
        return view('form.thankyou');
    }
}
