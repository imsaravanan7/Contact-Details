<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    //Form Showing in Frontend Page
    public function insert(){
        return view('InsertForm');
    }
    
    //Collect the data from Form & send to the Model
    public function select(Request $req){
        $contactData=new contact();
        $contactData->Name=$req->name;
        $contactData->Phone=$req->phone;
        $contactData->Email=$req->email;
        $contactData->Address=$req->address;
        $contactData->save();
        return redirect('/ShowForm');
    }

    //Show the Datas in Frontend Page
    public function show(){
        $info=contact::get();
        return view('ShowContact',compact('info')); 
    }

    //Delete the Datas from selected id
    public function deletes($id){
        $deleteData=contact::find($id);
        $deleteData->delete();
        return redirect('/ShowForm');
    }

    //Get the Id from selected id(update Id) 
    public function updates($id){
        $updateData=contact::find($id);
        return view('UpdateForm',compact('updateData'));
    }

    //After changing datas & save the datas to database
    public function updateContact(Request $req,$id){
        $contactUpdate=contact::find($id);
        $contactUpdate->Name=$req->name;
        $contactUpdate->Phone=$req->phone;
        $contactUpdate->Email=$req->email;
        $contactUpdate->Address=$req->address;
        $contactUpdate->save();
        return redirect('/ShowForm');
    }
}
