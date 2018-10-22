<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catagory;

class itemController extends Controller
{
    public function additem()
    {
            return view('admin.item.additem');
    }//
     public function saveItem(Request $request)
    {
            $catagories=new Catagory();
            $catagories->itemname=$request->itemname;
             $catagories->itemdescription=$request->itemdescription;
              $catagories->selectitemtype=$request->selectitemtype;
               $catagories->itemname=$request->itemname;
               $catagories->save();
               return redirect('/add-item')->msg('Item save in database Successfully');

                }//
}
