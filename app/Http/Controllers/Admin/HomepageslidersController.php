<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\Admin\HomepagesliderUpdate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\homepageslider;
use App\Http\Resources\Admin\Homepageslider as homepagesliderResource;

class HomepageslidersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliderData = homepageslider::orderBy('sort_order','ASC')->paginate(10);
        return view ('admin.homepageslider.index',compact('sliderData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view ('admin.homepageslider.addnewslider');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(homepagesliderResource $request)
    {

       if( $request->hasFile('image')){
           $image = $request->file('image');
           $sliderImageName= str_replace(' ','_',$request->title).rand(0,10000).'.'.$image->getClientOriginalExtension();
           $imageDestinationPath = public_path('/images/upload/homepageslider/');
           $image->move($imageDestinationPath, $sliderImageName);
       }
        $addnewslider = [
                'title'=>$request->title,
                'link'=>$request->link,
                'image'=>$sliderImageName,
                'sort_order'=>$request->sort_order,
                'status'=>$request->status,
                'save_token'=>$request->_token,
        ];

       $save = homepageslider::create($addnewslider);
       if($save){
           return redirect('admin/manage/homepageslider')->withSuccess('New home slider has been succesfully added');
       }

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
        $sliderData = homepageslider::findOrFail($id);
        return view ('admin.homepageslider.editslider',compact('sliderData'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HomepagesliderUpdate $request, $id)
    {



        $updateHomePageSlider = homepageslider::findOrfail($id);
        $sliderImageName = $updateHomePageSlider->image;
        if( $request->hasFile('image')){
           // dd('sss');
            unlink(public_path('images/upload/homepageslider/'.$sliderImageName));
            $image = $request->file('image');
            $sliderImageName= str_replace(' ','_',$request->title).rand(0,10000).'.'.$image->getClientOriginalExtension();
            $imageDestinationPath = public_path('/images/upload/homepageslider/');
            $image->move($imageDestinationPath, $sliderImageName);
        }
        $updateHomePageSlider->title = $request->title;
        $updateHomePageSlider->link = $request->link;
        $updateHomePageSlider->image = $sliderImageName;
        $updateHomePageSlider->status = $request->status;
        $updateHomePageSlider->sort_order = $request->sort_order;
        if($updateHomePageSlider->save()){
            return redirect('admin/manage/homepageslider')->withSuccess('Home slider has been succesfully Edited');
        }


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           //dd('asdasdas');
        $sliderData = homepageslider::findOrFail($id);
        $imageName = $sliderData->image;

        if($sliderData->delete())
        {
            unlink(public_path('images/upload/homepageslider/'.$imageName));
            return redirect('/admin/manage/homepageslider')->withSuccess('Successfully Deleted');
        }

        //
    }
}
