<?php

namespace App\Http\Controllers;

use App\Models\Userlist;
use Illuminate\Http\Request;

class UserlistController extends Controller
{
    public function index()
    {
        $result['data']=Userlist::all();
        return view('admin/userlists',$result);
    }
    public function show_userlists(Request $request,$id='')
    {

        $arr=userlist::where(['id'=>$id])->get();
        $result['userlists']=$arr['0'];
      //  dd($result);
        return view('admin/show_userlists',$result);
    }

    public function status(Request $request,$status,$id){
        $model=Userlist::find($id);
        $model->status=$status;
        $model->save();
        $request->session()->flash('message','User status updated');
        return redirect('admin/userlists');
    }
}
