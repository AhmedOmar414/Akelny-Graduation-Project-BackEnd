<?php

namespace App\Http\Controllers;

use App\Http\Middleware\User;
use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Support\Str;
class BannerController extends Controller
{

    public function index()
    {
        $banner=Banner::orderBy('id','DESC')->paginate(10);
        if (auth()->user()->role == 'res'){
            $banner=Banner::where('user_id',auth()->user()->id)->orderBy('id','DESC')->paginate(10);
        }
        return view('backend.banner.index')->with('banners',$banner);
    }

    public function testProductSearch()
    {
        // Create some products
        $products = factory(Product::class, 5)->create();

        // Search for a product
        $response = $this->get('/search?q=' . $products[0]->name);

        // Check that the response is successful
        $response->assertStatus(200);

        // Check that the correct product is in the search results
        $response->assertSee($products[0]->name);
        $response->assertDontSee($products[1]->name);
        $response->assertDontSee($products[2]->name);
        $response->assertDontSee($products[3]->name);
        $response->assertDontSee($products[4]->name);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $this->validate($request,[
            'title'=>'string|required|max:50',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        if (auth()->user()->role == 'res'){
            $data['user_id']=auth()->user()->id;
        }

        $slug=Str::slug($request->title);
        $count=Banner::where('slug',$slug)->count();
        if($count>0){
            $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        }
        $data['slug']=$slug;
        // return $slug;
        $status=Banner::create($data);
        if($status){
            request()->session()->flash('success','Banner successfully added');
        }
        else{
            request()->session()->flash('error','Error occurred while adding banner');
        }
        return redirect()->route('banner.index');
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
        $banner=Banner::findOrFail($id);
        return view('backend.banner.edit')->with('banner',$banner);
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
        $banner=Banner::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required|max:50',
            'description'=>'string|nullable',
            'photo'=>'string|required',
            'status'=>'required|in:active,inactive',
        ]);
        $data=$request->all();
        if (auth()->user()->role == 'res'){
            $data['user_id']=auth()->user()->id;
        }
        // $slug=Str::slug($request->title);
        // $count=Banner::where('slug',$slug)->count();
        // if($count>0){
        //     $slug=$slug.'-'.date('ymdis').'-'.rand(0,999);
        // }
        // $data['slug']=$slug;
        // return $slug;
        $status=$banner->fill($data)->save();
        if($status){
            request()->session()->flash('success','Banner successfully updated');
        }
        else{
            request()->session()->flash('error','Error occurred while updating banner');
        }
        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $banner=Banner::findOrFail($id);
        $status=$banner->delete();
        if($status){
            request()->session()->flash('success','Banner successfully deleted');
        }
        else{
            request()->session()->flash('error','Error occurred while deleting banner');
        }
        return redirect()->route('banner.index');
    }
    public function bannerRestaurants(){
        $res = \App\User::where('role','res')->get();
        return view('backend.banner.restaurants',compact('res'));
    }
    public function restaurantBanners($id){
        $banner=Banner::where('user_id',$id)->orderBy('id','DESC')->paginate(10);
        return view('backend.banner.index')->with('banners',$banner);
    }
}
