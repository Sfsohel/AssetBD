<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Image;
use Illuminate\Support\Facades\Storage;


class UserController extends Controller
{
    public function index()
    {
        return view('admin.dash');
    }

    //property 
    public function propertyList()
    {
        $properties = DB::table('products')
            ->get();
        return view('admin.property-list')
            ->with('properties', $properties); 
    }
    public function messageList()
    {
        $messages = DB::table('contacts')
            ->get();
        return view('admin.contact-list')
            ->with('messages', $messages); 
    }

    public function viewAddProp()
    {
        return view('admin.add-property');
    }

    public function addPropPost(Request $request)
    {
        $images = "";
        foreach ($request->file('photo') as $file) {
            if ($file->isValid()) {
                           
                $image = Image::make($request->photo)->resize(413, 513)->save(public_path('/properties/' .getClientOriginalName() ));

                $images .= $file->getClientOriginalName() . ";";           
            }
            else {
                
            }
            
        }

        DB::table('products')->insert(
            ['product_name' => $request->prop_name,
                'slug_name' => Str::slug($request->prop_name),
                'property_type' => $request->property_type,
                'year_built' => $request->year_built,
                'sqr_ft' => $request->lot_area,
                'bed' => $request->bed,
                'bath' => $request->bath,
                'location' => $request->location,
                'property_status' => $request->property_status,
                'price_per_sqft' => $request->price_per_sqft,
                'total_price' => $request->total_price,
                'phone' => $request->phone,
                'email' => $request->email,
                'more_info' => $request->more_info,
                'image_gallery' => $images,
            ]
        );

        return redirect()->route('admin-dash');
    }

    public function editProp(Request $request){
        
        $products= DB::table('products')->find($request->id);
       
        return view('admin.edit-property')->with('products', $products);
    }

    public function editPropPost(Request $request)
    {
        $images = "";
        foreach ($request->file('photo') as $file) {
            if ($file->isValid()) {
                $images .= $file->store('properties') . ";";
            } else {

            }
        }

        DB::table('products') ->where($request->id)->update(
           ['product_name' => $request->prop_name,
                'slug_name' => Str::slug($request->prop_name),
                'property_type' => $request->property_type,
                'year_built' => $request->year_built,
                'sqr_ft' => $request->lot_area,
                'bed' => $request->bed,
                'bath' => $request->bath,
                'location' => $request->location,
                'property_status' => $request->property_status,
                'price_per_sqft' => $request->price_per_sqft,
                'total_price' => $request->total_price,
                'phone' => $request->phone,
                'email' => $request->email,
                'more_info' => $request->more_info,
                'image_gallery' => $images,
            ]
        );
        return redirect()->route('admin-dash');
    }

     public function deleteProp(Request $request)
    {
        DB::table('products')->where('id', '=', $request->id)->delete();

        return redirect()->route('admin-prop-list');
    } 

    //blog
    public function blogList()
    {
        $blogs = DB::table('blogs')
            ->get();
        return view('admin.blog-list')
            ->with('blogs', $blogs);
    }

    public function viewAddBlog()
    {
        return view('admin.add-blog');
    }

    public function addBlogPost(Request $request)
    {
        if ($request->file('photo')->isValid()) {
            $images = $request->file('photo')->store('blogs');
        } else {

        }


        DB::table('blogs')->insert(
            [
                'headline' => $request->blog_headline,
                'short_details' => $request->short_details,
                'picture' => $images,
                'date' => date('d-M-Y'),
            ]
        );
        return redirect()->route('admin-blog-list');
    }

   /* public function editBlog($editid){
        //$acc = Crud::find($addid);
        $user = DB::table('blogs')->find($editid);
        //return view('login.edit')->with('data', $acc);
        return view('admin.edit-blog')->with('data', $user);
    } */

    public function editBlog(Request $request){
        
        $blogs= DB::table('blogs')->find($request->id);
       
        return view('admin.edit-blog')->with('blogs', $blogs);
    }

    public function editBlogPost(Request $request)
    {
        if ($request->file('photo')->isValid()) {
            $images = $request->file('photo')->store('blogs');
        } else {

        }


        DB::table('blogs') ->where($request->id)->update(
            [
                'headline' => $request->blog_headline,
                'short_details' => $request->short_details,
                'picture' => $images,
                'date' => date('d-M-Y'),
            ]
        );

        return redirect()->route('admin-blog-list');
    }

    public function deleteBlog(Request $request)
    {
        DB::table('blogs')->where('id', '=', $request->id)->delete();

        return redirect()->route('admin-blog-list');
    } 
}
