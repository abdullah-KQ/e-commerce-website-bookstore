<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\session;

class BookController extends Controller
{

  public $Empid1='';

  public function A1(Request $request){
    
      session::put('empid','1');

      return "The Vairable is stored";
  }
  
  public function A2(Request $request){
      $Books=DB::table('users')
      -> where ('id','=', $request->session()->get('empid'))
      ->get();
      dd($Books);
  }


    public function BookType(){

      $Books=DB::table('books')->get();

    
      return view('allBooks',['Books'=>$Books]);
    }

    public function Novels(){

      $Books=DB::table('books')->where('Type','=','novels')->get();

    
      return view('novels',['Books'=>$Books]);
    }

    public function IslamicBook(){

      $Books=DB::table('books')->where('Type','=','Islamic book')->get();

    
      return view('islamicBook',['Books'=>$Books]);
    }

    public function BusinessEconomicsBooks(){

      $Books=DB::table('books')->where('Type','=','Business economics books')->get();

    
      return view('businessEconomicsBooks',['Books'=>$Books]);
    }

    public function ChildrenBooks(){

      $Books=DB::table('books')->where('Type','=','Children book')->get();

    
      return view('childrenBooks',['Books'=>$Books]);
    }

    public function EducationalBooks(){

      $Books=DB::table('books')->where('Type','=','Educational book')->get();

    
      return view('educationalBooks',['Books'=>$Books]);
    }




    public function Checkout($id){
      $id=DB::table('books')->where('id','=',$id)->first();

      return view('checkout',['id'=>$id]);
    }

    public function invoic(Request $request){
      $row=[
        'FullName'=>$request->FullName,
        'Email'=>$request->Email,
        'City'=>$request->City,
        'Address'=>$request->Address,
        'BookName'=>$request->BookName,
        'Total'=>$request->Total,
      ];

      DB::table('invoic')->insert($row); 

      $Books=DB::table('invoic')->where('FullName','=',$request->FullName)->orderBy('created_at', 'desc')->first();
   

      return view('invoic',['row'=>$row,'Books'=>$Books]);
    }
}
