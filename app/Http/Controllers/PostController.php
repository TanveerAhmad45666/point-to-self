<?php
namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  //show alll post
    {
         $posts = Post::all();
    //    dd ($posts = Post::all());

        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()   //create new post
    {
        return view('posts.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //save
    {
        $this->validate($request,[  
            // its not  working
         'title' => 'required|max:4'
         
         ]);


        // return $request->all();    //its working
        // return $request->get('title');
        // return $request->title;
        // Post::create($request->all());   //its working
        // $input = $request->all();
        // $input['title']=$request->title;
        // $input['body']=$request->body;
        //  Post::create($request->all()); //its working     
         $post =new Post;
         $post->title =$request->title;
         $post->body =$request->body;
         $post->save();

        // Post::create($request->all()); //its working
        // return redirect('/posts'); top index return view for it line 
        return redirect()->route('posts.index')

        ->with('success','Post created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)  ///show only one post
    {
        return view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)  //updata
    {
        return view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $post =Post::findOrFail($id);
        $post->update($request->all());
        return redirect('/posts');
        // $request->validate([
        // 'title' => 'required',
        // 'body' => 'required',
        // ]);
        //   return $request->all();
        // $post->update($request->all());

        // return redirect()->route('posts.index')->with('success','Post updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post =Post::whereId($id)->delete();
        return redirect('/posts');
        // return redirect()->route('posts.index')

        //->with('success','Post deleted successfully');

    }
}