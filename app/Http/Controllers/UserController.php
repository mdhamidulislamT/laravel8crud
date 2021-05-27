<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function login(Request $req){
        $isExist = User::select('*')->where('email', $req->Email)->exists();
        if ($isExist) {
             return redirect('admin/dashboard');
        } else {
            return redirect('showlogin');
        }
        

    }

    //--store data in database--//
   public function store(Request $req)
   {
       $user =new User();
       
       if (!User::where('email', $req->email)->exists() ) {

           //--to upload image in database--//
        $file = time().'.'.$req->file->getClientOriginalExtension();
        $req->file->move(public_path('avatars'), $file);

       $user->username = $req->username;
       $user->fullname = $req->fullname;
       $user->phone = $req->phone;
       $user->email = $req->email;
       $user->gender = $req->gender;
       $user->image = $file;
       $result = $user->save();
       
        $req->session()->flash('status', $req->email." has been added successfully");
        return redirect('userlist');
       } else {
        $req->session()->flash('status', $req->email." exists! please try another!");
        return view('adduser');
       }
   }

   public function getUserList()
   {
       $data = User::paginate(7);
       return view('userlist', ['users'=>$data]);
   }

   public function getData($id)
   {
       $data = User::find($id);
       return view('edit', ['user'=>$data]);
   }

   public function update(Request $req)
   {

        $data = User::find($req->id);

         //--to upload image in database--//
         $file = time().'.'.$req->file->getClientOriginalExtension();
         $req->file->move(public_path('avatars'), $file);
         
       $path = public_path().'/avatars/';
       if ($data->image !='' && $data->image!=null) {
           $file_old = $path.$data->image;
           unlink($file_old);
       } 

       
       $data->username = $req->username;
       $data->fullname = $req->fullname;
       $data->phone = $req->phone;
       $data->email = $req->email;
       $data->gender = $req->gender;
       $data->image = $file;
       $result = $data->save();
       if ($result) {
       
            $req->session()->flash('status', $req->email.' has been updated successfully');
           return redirect('userlist');
       } else {
            $req->session()->flash('status', $req->username.' has not been updated!');
            return redirect('userlist');
       }

   }

   public function show($id)
   {
       $data = User::find($id);
       return view('show', ['user'=>$data]);
   }

   public function delete($id)
   {
       $data = User::find($id);
       $data->delete();
       return redirect('userlist');
   }


}
