<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function Show()
    {
        $data['users']= User::all();
        return view('backend.user.show',$data); 
    }
    public function Create()
    {
        return view('backend.user.create');
    }
    public function Store(Request $request)
    {
        
        
        $validateData = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users'
        ]);

        $data = new User();
        $data->user_type = $request->user_type;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);

        $notification = array(
            'message' => 'User inserted Successfully',
            'alert-type' => 'success'
        );

        $data->save();

        return redirect()->route('user.index')->with($notification);
    }

    public function Edit($id)
    {
        $data = User::find($id);
               
       
        // return view('backend.user.edit')->with($data);
        return view('backend.user.edit',compact('data'));

    }

    public function Update(Request $request, $id)
    {
 
        $validateData = $request->validate([
            'name' => 'required',
        //     'email' => 'required|unique:users'
           
        ]);

        $udata = User::find($id);

        

        $udata->user_type = $request->user_type;
        $udata->name = $request->name;
        $udata->email = $request->email;
        // dd($udata);
        $udata->save();

        $notification = array(
            'message' => 'User Updated Successfully',
            'alert-type' => 'info'
        );

        
        

        return redirect()->route('user.index')->with($notification);
    }

    public function Delete($id)
    {
        $data = User::find($id);
        $data->delete();

        $notification = array(
            'message' => 'User Deleted Successfully',
            'alert-type' => 'info'
        );

        return redirect()->route('user.index')->with($notification);
    }
}
