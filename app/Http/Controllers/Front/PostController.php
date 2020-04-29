<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

use App\Post;
use App\Category;




class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cats =Category::all();
        $items= Post::paginate(12);
        return view('posts.index', compact('items','cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats =Category::all();
        return view('posts.create',compact('cats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //--- Validation Section
        $rules = [
            
          ];

        

        $request->validate([
            'name'=> 'required',
            'contact_number'=> 'required',
            'item'=> 'required',
            'description'=> 'required',
            'location'=> 'required',
            // 'date'=>'required',
            "category_id" => "required|required:categories,id",
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $input = $request->all();
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('assets/images/items'), $imageName);

        $input['image'] = $imageName;

        $item = Post::create($input);

        $msg = 'New Art Added Successfully';

        return redirect()->route('items')->with('success' , $msg);



    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Post::findOrFail($id);
        $status = $item->status;
        return view('Posts.show',compact('item', 'status'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Post::findOrFail($id);
      
        $item->delete();
    }



    
}
