<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\Post;
// use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
use Auth;


class DaftarBeritaController extends Controller
{
    protected $dates=['created_at'];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarberitaview = Post::all();
        $daftarberita = Post::where('status', 0)->get();


        return view('daftarberita.index', compact('daftarberita','daftarberitaview'));
    }

    // pembayaran
    public function pembayaran($id)
    {
        $pembayaran = Post::find($id);
        return view('daftarberita.pembayaran', compact('pembayaran'));

        // return view('daftarberita.pembayaran');
    }

    public function bayar(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'money' => 'required|numeric|min:0',
            'featuredImage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'payment_post' => 'required|integer|between:0,18446744073709551615',
            'payment_admin' => 'required|integer|between:0,18446744073709551615',
        ]);

       

        $pembayaran = new Payment();

        $pembayaran->money = $request->money;

        $pembayaran->payment_post = $request->payment_post;
        $pembayaran->payment_admin = Auth::user()->id;

        $pembayaran['featuredImage'] = $request->hasFile('featuredImage');
        if ($request->hasFile('featuredImage')) {
            $image = $request->file('featuredImage');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('fotostruk'), $imageName);
            $pembayaran->featuredImage = $imageName;
        }

        $pembayaran->save();   
    
        if($pembayaran->save()){
            $post = Post::find($id); // Replace $id with the appropriate ID of the associated post

            if ($post) {
                $post->status = 1;
                $post->save();
            }
        
        }
        

        return redirect()->route('daftarberita.index');
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
        //
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
