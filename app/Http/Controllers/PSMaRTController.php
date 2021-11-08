<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;



class PSMaRTController extends Controller
{
  public function login1(){
     return view("login1");
  }
  public function officialssignup(){
     return view("officialssignup");
  }
  public function schoolsignup(){
    return view("schoolsignup");
 }


 public function registerUser(Request $request){

    $user = $request->validate([
       'full_name'=>'required',
       'gender'=>'required',
       'school_name'=>'required',
       'contact'=>'required',
       'email'=>'required|email|unique:users',
       'district'=>'required',
       'password'=>'required|min:5|max:12'
    ]);
    $user=new User();
    $user->full_name = $request->full_name;
    $user->gender = $request->gender;
    $user->school_name = $request->school_name;
    $user->email = $request->email;
    $user->contact = $request->contact;
    $user->district = $request->district;
    $user->password = Hash::make($request->password);
    $res = $user->save();
    if($res){
       return back()->with('success','You have registered successfully');
    }else{
       return back()->with('fail','Something wrong');
    }
  }
  public function loginUser(Request $request){
   $request->validate([
      'email'=>'required|email',
      'password'=>'required|min:5|max:12'
   ]);
   $user = User::where('email','=',$request->email)->first();
   if($user){
      if(Hash::check($request->password,$user->password)) {
         $request->session()->put('loginid',$user->id);
         return redirect('dashboard');
      }else{
         return back()->with('fail','Incorrect password');
      }
   } else{
      return back()->with('fail','This email is not registered');
   }
  }
  public function dashboard()
  {

          return view('dashboard');

     // return redirect("login1")->withSuccess('You are not allowed to access');
  }


  public function logout() {
    //   Session::flush();
      Auth::logout();

      return Redirect('login1');
  }
//   public function dashboard(){
//      $data = array();
//      if(Session::has('loginid')){
//         $data = User::where('id','=',Session::get('loginId'))->first();
//      }
//    return view('dashboard', compact('data'));
//   }
//   public function logout(){
//      if(Session::has('loginId')){
//         Session::pull('loginId');
//         return redirect('login1');
//      }
//   }


 public function student()
  {
          return view('student');
  }
  public function teacher()
  {
          return view('teacher');
  }
  public function class()
  {
          return view('class');
  }
  public function attendance()
  {
          return view('attendance');
  }
  public function report()
  {
          return view('report');
  }
  public function library()
  {
          return view('library');
  }
}
