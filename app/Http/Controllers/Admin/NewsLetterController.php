<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\NewsLetterSubscribers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsLetterController extends Controller
{

    public function index()
    {
        $newsletterSubList = NewsLetterSubscribers::paginate(20);
        return view('admin.newsletter.index',compact('newsletterSubList'));
    }
    public function newSubscribers(Request $request){
        dd($request->all());
    }

    public function removeSubscriber($id){
        $newLetterSub = NewsLetterSubscribers::findOrFail($id);
        if($newLetterSub->delete())
        {
            return redirect('/admin/newsletter/subscribers')->withSuccess('Successfully Deleted');
        }
    }


}
