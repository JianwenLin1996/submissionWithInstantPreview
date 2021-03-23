<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempForm;
use Redirect;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    //
    public function index(){
        return view('form.home', [
            'id'=>'',
            'title'=>'',
            'description'=>'',
        ]);
    }

    public function show(Request $request, $id){

        $tempForm = TempForm::where('id', $id)->first();
        return view('form.home', [
            'id'=>$id,
            'title'=>$tempForm->title,
            'description'=>$tempForm->description,
        ]);
    }

}
