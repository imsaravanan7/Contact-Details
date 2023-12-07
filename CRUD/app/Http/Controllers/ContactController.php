<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class ContactController extends Controller
{
    public function insert(){
        return view('InsertForm');
    }
    
    public function show(){
        $info=contact::get();
        return view('ShowContact',compact('info')); 
    }
    public function select(Request $req){
        $contactData=new contact();
        $contactData->Name=$req->name;
        $contactData->Phone=$req->phone;
        $contactData->Email=$req->email;
        $contactData->Address=$req->address;
        $contactData->save();
        return redirect('/ShowForm');
    }
    public function deletes($id){
        $deleteData=contact::find($id);
        $deleteData->delete();
        return redirect('/ShowForm');
    }
    public function updates($id){
        $updateData=contact::find($id);
        // return $updateData;
        return view('UpdateForm',compact('updateData'));
    }
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
