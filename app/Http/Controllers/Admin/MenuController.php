<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\MenuItem;
use App\MenuItemExtraMeal;
use App\MenuItemPrice;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DataTables;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $menuItemData = MenuItem::with('category','MenuItemPrice')->paginate(15);
  //  $menuCategory = Category::where('status','Active')->where('category_type','Menu')->with('Countries')->get();
        return view('admin.menus.index',compact('menuCategory','menuItemData'));
    }

    public function getAjaxMenuItem(){
        $menuItemData = MenuItem::with('category','MenuItemPrice')->orderBy('item_name','ASC')->get();
        return DataTables::of($menuItemData)
        ->addColumn('item_status',function($menuItemData){
            if($menuItemData->item_status==1){
                    return '<label class="badge badge-success">Active</label>';
            }else{
                return '<label class="badge badge-danger">Inactive</label>';
            }
            
        })
        ->addColumn('Image',function($menuItemData){
            if(  $menuItemData->item_image_name!=null){
                return '<img src="'.url('frontend/images/item_images/370x370').'/'.$menuItemData->item_image_name.'" alt="'.$menuItemData->item_id.'" class="img-sm rounded-circle">';
   
               
            }
            else{
                return 'Image not found!';
                       }
            
        })
        ->addColumn('category',function($menuItemData){
            return $menuItemData->category->countries->nationality .' > ' .$menuItemData->category->title;
            
        })
        ->addColumn('spice',function($menuItemData){
            if(  $menuItemData->item_spice!=null){
                return $menuItemData->item_spice;
   
               
            }
            else{
                return 'Not found!';
                       }
        })
        ->addColumn('action',function($menuItemData){
            return '<a href="'.url('/ktm-admin/menu/edit').'/'.$menuItemData->item_id.'"><i class="fa fa-edit"  style="font-size: 20px;color:#000"></i></a>
            <a href="'.url('/ktm-admin/menu/single').'/'.$menuItemData->item_id.'"><i class="fa fa-eye"  style="font-size: 20px"></i></a>
            <a href="'.url('/ktm-admin/menu/delete').'/'.$menuItemData->item_id.'"><i class="fa fa-trash"  style="font-size: 20px;color:red"></i></a>
           ';
        })
        ->escapeColumns([])
        ->make(true);
    }

    public function singleMenu($item_id){

        $menuItemData = MenuItem::with('category','MenuItemPrice')->where('item_id',$item_id)->get()->last();

        return view('admin.menus.singlemenulist',compact('menuItemData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $menuCategory = \App\Country::with('Category')->get();
        //print($menuCategory);
       // die();
        //dd($menuCategory);
        return view('admin.menus.addnewmenulist',compact('menuCategory'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // dd($request->all());

        $request->validate(
            [
                'menu_category_id'=>'required',
                'item_name'=>'required|max:60|unique:menu_items,item_name,NULL,NULL,category_id,'.$request->menu_category_id,
                'menu_item_price'=>'required|numeric',
            ]
        );
        $menuItemId = 'M_'.date('ymdHis');
        $imageName ='';
        $menuItemData = new MenuItem();
        $menuItemPriceData = new MenuItemPrice();
        if ($request->hasFile('item_image_name')) {
            if($request->file('item_image_name')->isValid()) {
                $imageFile1 = $request->file('item_image_name');
                $imageName = $menuItemId. '.' . $imageFile1->getClientOriginalExtension();

                $request->file('item_image_name')->move("frontend/images/item_images/370x370/", $imageName);
            }
        }
        $menuItemData->item_id = $menuItemId;
        $menuItemData->category_id = $request->menu_category_id;
        $menuItemData->item_name = $request->item_name;
        $menuItemData->item_description= $request->description;
        $menuItemData->item_image_name= $imageName;
        $menuItemData->item_flavors= $request->item_flavors;
        $menuItemData->item_soda= $request->item_soda;
        $menuItemData->item_spice= $request->item_spice==null?null:'Mild,Medium,Hot';
        $menuItemData->item_meta_keywords= $request->item_meta_keywords;
        $menuItemData->item_status = $request->item_status;
        $menuItemPriceData->item_id = $menuItemId;
        $menuItemPriceData->menu_item_price = $request->menu_item_price;
        if($menuItemData->save()){
           if( $menuItemPriceData->save()){
            return redirect('/ktm-admin/menus')->withSuccess('Item Id: '.$menuItemId.'has been successfully added');
           }
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($itemId)
    {
        //
        $menuCategory = Category::where('status','Active')->where('category_type','Menu')->get();
       $menuItemData =  MenuItem::with('category','MenuItemPrice')->where('item_id',$itemId)->get()->last();
       return view('admin.menus.editmenuitem',compact('menuItemData','menuCategory'));



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $itemId)
    {
      
        $menuItemData = MenuItem::where('item_id',$itemId)->firstOrFail();
        $menuItemData->category_id = $request->menu_category_id;
        $menuItemData->item_name = str_replace(' ','-',$request->item_name);
        $menuItemData->item_description= $request->description;
        $menuItemData->item_flavors= $request->item_flavors;
        $menuItemData->item_soda= $request->item_soda;
        $menuItemData->item_spice= $request->item_spice==null?null:'Hot,asd,asdasd';
        $menuItemData->item_meta_keywords= $request->item_meta_keywords;
        $menuItemData->item_status = $request->item_status;


        $menuItemData->save();






        //dd($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($itemId)
    {
        //
        $menuItemData = MenuItem::where('item_id',$itemId)->get()->last();
        if($menuItemData->delete())
        {
            return redirect('/ktm-admin/menus')->withSuccess('Item Id: '.$itemId.'has been successfully deleted');
        }
    }
}
