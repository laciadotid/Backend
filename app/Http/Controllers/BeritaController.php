<?php

namespace App\Http\Controllers;


use Auth;
use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Post::where('post_author', Auth::user()->id)->get();
        return view('berita.index', compact('berita'));
        // return view('berita.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        return view('berita.create', compact('category'));
        // return view('berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|max:255',
            'slug' => 'required|max:255',
            'metaDescription' => 'required|max:255',
            'featuredImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'date' => 'required|max:255',
            'content' => 'required|longText',
            'post_author' => 'required|integer|between:0,18446744073709551615',
            'post_category' => 'required|integer|between:0,18446744073709551615',
        ]);

        $berita = new Post();
        $berita->title = $request->title;
        $berita->slug = $request->slug;
        $berita->metaDescription = $request->metaDescription;
        $berita->date = $request->date;
        $berita->content = $request->content;
        $berita->post_category = $request->post_category;
        $berita->post_author = Auth::user()->id;

        if ($request->hasFile('featuredImage')) {
            // $image = $request->file('featuredImage');
            // $imageName = time() . '_' . $image->getClientOriginalName();
            // $image->move(public_path('images'), $imageName);
            // $berita->featuredImage = $imageName;

            $request->file('featuredImage')->move('fotoberita/',$request->file('featuredImage')->getClientOriginalName());
            $berita->featuredImage = $request->file('featuredImage')->getClientOriginalName();
        }

        $berita->save();
        return redirect()->route('berita.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Post::find($id);
        $category = Category::join('post', 'category.id', '=', 'post.post_category')
        ->select('category.*')
        ->groupBy('category.id')
        ->orderBy('category.title', 'asc')
        ->get();


        return view('berita.edit', compact('berita','category'));
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
    $berita = Post::findOrFail($id);
    $berita->title = $request->title;
    $berita->slug = $request->slug;
    $berita->metaDescription = $request->metaDescription;
    $berita->date = $request->date;
    $berita->content = $request->content;
    $berita->post_category = $request->post_category;
    // $berita->post_author = Auth::user()->id;

    if ($request->hasFile('featuredImage')) {

        $destination = 'fotoberita/'.$berita->featuredImage;
        if(File::exists($destination)){
            File::delete($destination);
        }

        $image = $request->file('featuredImage');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move('fotoberita/', $imageName);
        $berita->featuredImage = $imageName;
    }
    $berita->update();
    return redirect()->route('berita.index');
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
