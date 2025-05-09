<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class AdminUserController extends Controller
{
    //

    public function users() {
        $users = User::get();
        return view('admin.user.users', compact('users'));
    }

    public function user_create()
    {
        return view('admin.user.user_create');
    }

    public function user_create_submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required',
            'country' => 'required',
            'address' => 'required',
            'city' => 'required',
            'zip' => 'required',
            'password' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $final_name = 'user_'.time().'.'.$request->photo->extension();
        $request->photo->move(public_path('uploads'), $final_name);

        $obj = new User();
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->country = $request->country;
        $obj->address = $request->address;
        $obj->city = $request->city;
        $obj->zip = $request->zip;
        $obj->password = bcrypt($request->password);
        $obj->photo = $final_name;
        $obj->status = $request->status;
        $obj->save();

        return redirect()->route('admin_users')->with('success','User is Created Successfully');
    }

    public function user_edit($id)
    {
        $user = User::where('id',$id)->first();
        return view('admin.user.user_edit',compact('user'));
    }
    
    public function user_edit_submit(Request $request, $id)
    {
        $obj = User::where('id',$id)->first();
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            'phone' => 'required',
            'country' => 'required',
            'address' => 'required',
            'state' => 'required',
            'city' => 'required',
            'zip' => 'required',
        ]);

        if($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $final_name = 'user_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }

        if($request->password != '')
        {
            $obj->password = bcrypt($request->password);
        }
        
        $obj->name = $request->name;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->country = $request->country;
        $obj->address = $request->address;
        $obj->state = $request->state;
        $obj->city = $request->city;
        $obj->zip = $request->zip;
        $obj->status = $request->status;
        $obj->save();

        return redirect()->route('admin_users')->with('success','User is Updated Successfully');
    }

    public function user_delete($id)
    {
        $obj = User::where('id', $id)->first();
    
        if ($obj->photo && file_exists(public_path('uploads/' . $obj->photo))) {
            unlink(public_path('uploads/' . $obj->photo));
        }
        
        $obj->delete();

        return redirect()->route('admin_users')->with('success','User is Deleted Successfully');
    }
}
