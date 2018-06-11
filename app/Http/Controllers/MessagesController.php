<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class MessagesController extends Controller
{
    public function submit(Request $req){
    	$this->validate($req,[
    		'name' => 'required',
    		'email' => 'required'
    	]);
    	
    	//create a new messages
    	$message = new Message;
    	$message->name = $req->input('name');
    	$message->email = $req->input('email');
    	$message->message = $req->input('message');
    	$message->save();

    	//Redirect
    	return redirect('/')->with('success','Message Sent');  		
    }

    public function getMessages(){
    	$messages = Message::all();
    	return view('messages')->with('messages',$messages);
    }
}
?>
