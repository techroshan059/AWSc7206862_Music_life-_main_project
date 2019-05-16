<?php

namespace App\Http\Controllers\Admin;

use App\Http\Resources\Admin\categoryUpdate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Category;
use App\Http\Resources\Admin\categorysaveResource;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $categoryData = Category::orderBy('title','ASC')->with('Countries')->get();

        
       // dd($categoryData);
        return view ('admin.category.index',compact('categoryData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getNationality = \App\Http\adminHelper::getCountries();
        return view ('admin.category.addnew',compact('getNationality'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(categorysaveResource $request)
    {
        //
      //  dd($request->all());
       $categoryDataAll = Category::get();
       foreach($categoryDataAll as $cat){

        if($cat->title==$request->title && $cat->country_id==$request->country_id && $cat->category_type==$request->category_type){
            return redirect('ktm-admin/manage/category/addnew')->withErrors('This menu category has been already exists');
        }
       }
        $categoryData = [
            'title'=>str_replace(' ','-',$request->title),
            'country_id'=>$request->country_id,
            'category_type'=>$request->category_type,

            'status'=>$request->status,
            'save_token'=>$request->_token,
        ];
        if(Category::create($categoryData)){
            return redirect('ktm-admin/manage/category')->withSuccess('New category has been successfully added');
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
        //
        $editCategory = Category::findOrFail($id);

        return view ('admin.category.editcategory',compact('editCategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(categoryUpdate $request, $id)
    {
        //
        $editCategory = Category::findOrFail($id);
        $editCategory->title = str_replace(' ','-',$request->title);
        $editCategory->country_id = $request->country_id;
        $editCategory->status = $request->status;
        $editCategory->category_type = $request->category_type;
        if($editCategory->save()){
            return redirect('ktm-admin/manage/category')->withSuccess('Category has been successfully Edited');
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
        //

        $categoryData = Category::findOrFail($id);
        if($categoryData->delete())
        {
            return redirect('/ktm-admin/manage/category')->withSuccess('Successfully Deleted');
        }
    }
}
