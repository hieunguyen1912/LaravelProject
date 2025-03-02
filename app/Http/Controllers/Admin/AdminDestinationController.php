<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Destination;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class AdminDestinationController extends Controller
{
    public function index() {
        $destinations = Destination::get();
        return view('admin.destination.index', compact('destinations'));
    }

    public function create() {
        return view('admin.destination.create');
    }

    public function create_submit(Request $request) {
        $request->validate([
            'name' => 'required|unique:destination',
            'slug' => 'required|alpha_dash|unique:destination',
            'description' => 'required',
            'featured_photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $final_name = 'destination_'.time().'.'.$request->featured_photo->extension();
        $request->featured_photo->move(public_path('uploads'), $final_name);

        $obj = new Destination();
        $obj->name = $request->name;
        $obj->slug = $request->slug;
        $obj->description = $request->description;
        $obj->featured_photo = $final_name;
        $obj->country = $request->country;
        $obj->language = $request->language;
        $obj->currency = $request->currency;
        $obj->area = $request->area;
        $obj->timezone = $request->timezone;
        $obj->visa_requirement = $request->visa_requirement;
        $obj->best_time_to_visit = $request->best_time_to_visit;
        $obj->health_safety = $request->health_safety;
        $obj->map = $request->map;
        $obj->view_count = $request->view_count;
        $obj->save();

        return redirect()->route('admin_destination_index')->with('success','Destination is Created Successfully');
    }

    public function edit($id)
    {
        $categories = Destination::get();
        $post = Destination::where('id',$id)->first();
        return view('admin.post.edit',compact('post', 'categories'));
    }
    
    public function edit_submit(Request $request, $id)
    {
        $obj = Destination::where('id',$id)->first();
        
        $request->validate([
            'title' => 'required',
            'slug' => 'required|alpha_dash|unique:posts,slug,'.$id,
            'description' => 'required',
            'short_description' => 'required',
        ]);

        if($request->hasFile('photo'))
        {
            $request->validate([
                'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            unlink(public_path('uploads/'.$obj->photo));

            $final_name = 'post_'.time().'.'.$request->photo->extension();
            $request->photo->move(public_path('uploads'), $final_name);
            $obj->photo = $final_name;
        }
        
        $obj->blog_category_id = $request->blog_category_id;
        $obj->title = $request->title;
        $obj->slug = $request->slug;
        $obj->description = $request->description;
        $obj->short_description = $request->short_description;
        $obj->save();

        return redirect()->route('admin_post_index')->with('success','Post is Updated Successfully');
    }

    public function delete($id)
    {
        $obj = Destination::where('id',$id)->first();
        unlink(public_path('uploads/'.$obj->photo));
        $obj->delete();
        return redirect()->route('admin_post_index')->with('success','Post is Deleted Successfully');
    }
}

