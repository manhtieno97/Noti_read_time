<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\Events\MessageEvent;
use App\Events\SendNoti;
class RedisController extends Controller
{
    //
    public function home(){
    	$messages=Messages::orderBy('id','desc')->paginate(5);
    	return view('showNotification',compact('messages'));
    }
    public function getSendNoti(){
        $messages=Messages::orderBy('id','desc')->paginate(5);
        return view('form_noti',compact('messages'));
    }
    public function postSendNoti(Request $request){
        $messages=Messages::create($request->all());
        event(
            $e = new SendNoti($messages)
        );
        return redirect()->back();
    }
    public function index(){
        $messages=Messages::all();
        return view('mesages',compact('messages'));
    }
    public function postSendMessage(Request $request){
    	$messages=Messages::create($request->all());
    	event(
    		$e = new MessageEvent($messages)
    	);
    	return redirect()->back();
    }
}
