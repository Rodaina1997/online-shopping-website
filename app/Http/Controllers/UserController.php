<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Order;

class UserController extends Controller
{
    public function ResetDBOrders (){
        $AllOrders = DB::table('orders');
        $AllOrders= $AllOrders->truncate();
        return view('home');
    }
    
    public function breakfast (){
        $breakfasts = DB::table('products')->where('Cat_id', '1');
        $breakfasts = $breakfasts->get();
        return view ('breakfast',['breakfasts'=>$breakfasts]);
    }

    public function lunch (){
        $lunchs = DB::table('products')->where('Cat_id', '2');
        $lunchs = $lunchs->get();
        return view ('lunch',['lunchs'=>$lunchs]);
    }

    public function dinner (){
        $dinners = DB::table('products')->where('Cat_id', '3');
        $dinners = $dinners->get();
        return view ('dinner',['dinners'=>$dinners]);
    }

    public function dessert (){
        $desserts = DB::table('products')->where('Cat_id', '4');
        $desserts = $desserts->get();
        return view ('dessert',['desserts'=>$desserts]);
    }

    public function juice (){
        $juices = DB::table('products')->where('Cat_id', '5');
        $juices = $juices->get();
        return view ('juice',['juices'=>$juices]);
    }

    public function fruit (){
        $fruits = DB::table('products')->where('Cat_id', '6');
        $fruits = $fruits->get();
        return view ('fruit',['fruits'=>$fruits]);
    }

    public function snack (){
        $snacks = DB::table('products')->where('Cat_id', '7');
        $snacks = $snacks->get();
        return view ('snack',['snacks'=>$snacks]);
    }

    public function AllProducts (){
        $AllProducts = DB::table('products');
        $AllProducts= $AllProducts->get();
        return view ('shop',['allProducts'=>$AllProducts]);
    }

    public function UpdatePrice ($id){
        $New_Price=DB::table('orders')->where('Order_Id', $id)->increment('Order_Quantity');
        $updated_Quantity= DB::table('orders')->where('Order_Id', $id)->first();
        $calculatedPrice = $updated_Quantity->Order_Quantity * $updated_Quantity->Order_Price;
        $Updated_Total= DB::table('orders')->where('Order_Id', $id)->update(['Order_Total' => $calculatedPrice]);
        return redirect()->back();
    }

    public function Orders (){
        $AllOrders = DB::table('orders');
        $AllOrders= $AllOrders->get();
        return view ('cart',['orders'=>$AllOrders,'total' => $AllOrders->sum('Order_Total')]);
    }

    public function CheckOutOrders (){
        $AllOrders = DB::table('orders');
        $AllOrders= $AllOrders->get();
        return view ('checkout',['orders'=>$AllOrders,'total' => $AllOrders->sum('Order_Total')]);
    }
    public function DeleteOrder ($id){
        $Order = DB::table('orders');
        $Order= $Order->where('Order_Id', $id)->delete();
        return redirect()->back();
    }

    public function ShoppingCart($id)
    {
        $selectedProduct=DB::table('products')->where('Product_Id', $id)->first(); //this will select the row with the given id 

        //now save the data in the variables;

        $name=$selectedProduct->Product_Name;
        $price=$selectedProduct->Product_Price;  
        $img=$selectedProduct->Product_Image_Path;

        $neworder = new Order;
        $neworder->Prod_id = $id;
        $neworder->Order_Img = $img;
        $neworder->Order_Name = $name;
        $neworder->Order_Price = $price;
        $neworder->Order_Quantity = '1';
        $neworder->Order_Total = $price;
        $neworder->save();

        //then return to your view or whatever you want to do
        return redirect()->back();
    }

    
}
