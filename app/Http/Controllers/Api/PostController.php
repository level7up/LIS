<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Post;
use Validator;

use App\Http\Resources\PostResource as PostResource;

class PostController extends Controller
{
    use ApiResponse;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts= Post::paginate(10);
        if ($posts){
            $items = PostResource::collection($posts);

        }
        // $items = PostResource::collection($posts);

         return $this->apiResponse($items);
        // return view('Posts.index',['items' => $items,]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all() , [
            'item'=> 'required',
            'name'=> 'required|max:255',
            'description'=> 'required',
            'category_id'=> 'required|exists:categories,id',
            'date'=> 'numeric',
            'location'=> 'required',
            // 'state'=> 'required',
            'image'=>'nullable',
            'contact_number'=> 'required|numeric'
          ]);

          if($validator->fails()){
            return $this->apiResponse('' , $validator->errors() , 422);
          }

          $data = $request->all();
          $item = Post::create($data);

          return $this->single_row('PostResource' , $item , 'Created Successfully' , 200);

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
        //
    }
}
