<?php

namespace App\Http\Controllers\Frontend\Api;

use App\Category;
use App\Http\Resources\Frontend\Api\CountryMenuCategoryResources;
use App\Http\Resources\Frontend\Api\MenuSingleCategoryResources;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MenuCategoryApiController extends Controller
{
    //

    public function getMenuCategories(){
        $getMenuCategories = \App\Country::with('Category')->get();
       //dd($getMenuCategories);
           // $getMenuCategories = Category::where('status','Active')->where('category_type','Menu')->orderBy('title','ASC')->get();
           return CountryMenuCategoryResources::collection($getMenuCategories);
    }
    public function getMenuItems($country_id,$category_id){
        $getMenuItems = Category::where('status','Active')->where('category_type','Menu')->where('country_id',$country_id)->where('id',$category_id)->orderBy('title','ASC')->with('MenuItem','Countries')->get();
      //  dd($getMenuItems); 
        return MenuSingleCategoryResources::collection($getMenuItems);
    }

    public function getFirstCat(){
            $getFirstData = \App\Country::with('Category')->get();
            return CountryMenuCategoryResources::collection($getFirstData)->first(); 
    }
}
