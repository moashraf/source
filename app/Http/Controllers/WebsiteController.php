<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

class WebsiteController extends Controller
 	
{

    //
    private $db ;
    private $db_name  ;

    public function index(){
        
        
        $main_db = "sourceeg_source";
        
        $lang = Session::get('lang', 'en');
        if($lang == "en"){
            $this->db = "mysql2";
            $this->db_name = "sourceeg_source_en";
        }
        else{
			 App()->setLocale('ar');
            $this->db = "mysql3";
            $this->db_name = "sourceeg_source_ar";
        }


        $sliders = DB::table($main_db.'.banner')
        ->where($main_db.'.banner.criteria','0')
        ->whereNull('deleted_at')
        ->leftJoin($this->db_name.'.banner_description',$main_db.'.banner.id','=' , $this->db_name.'.'.'banner_description.'.'banner_id')
        ->get();


        $banners = DB::table($main_db.'.banner')
        ->where($main_db.'.banner.criteria','1')
        ->leftJoin($this->db_name.'.banner_description',$main_db.'.banner.id','=' , $this->db_name.'.'.'banner_description.'.'banner_id')
        ->get();
       

        $categories = DB::table($main_db.'.category')
        ->leftJoin($this->db_name.'.category_description',$main_db.'.category.id','=' , $this->db_name.'.'.'category_description.'.'category_id')
        ->get([$main_db.'.category.id',$main_db.'.category.icon',$this->db_name.'.category_description.'.'name']);

        $products = DB::table($main_db.'.product')
        ->orderBy($main_db.'.product.id', 'desc')
        ->leftJoin($this->db_name.'.product_description',$main_db.'.product.id','=' , $this->db_name.'.'.'product_description.'.'product_id')
        ->take(8)
        ->get([$main_db.'.product.id',$main_db.'.product.image',
        $main_db.'.product.price',$main_db.'.product.code',
        $this->db_name.'.'.'product_description.title',
        $this->db_name.'.'.'product_description.description']);
                // $categories = DB::connection($this->db)->table('banner_description')
        // ->leftJoin($this->db_name,$main_db.'.source_id','=' , $this->db_name.'.banner_id')->get();

        return view('index',compact('banners','sliders','products','categories'));
    }

    public function ar(){
     App()->setLocale('ar');
        Session::put('lang', 'ar');
        return redirect()->action('WebsiteController@index');
    }

    public function en(){
        Session::put('lang', 'en');
        return redirect()->action('WebsiteController@index');
    }

    public function showCategory($id){
       
        
        $main_db = "sourceeg_source";
        
        $lang = Session::get('lang', 'en');
        if($lang == "en"){
            $this->db = "mysql2";
            $this->db_name = "sourceeg_source_en";
        }
        else{
			 App()->setLocale('ar');
            $this->db = "mysql3";
            $this->db_name = "sourceeg_source_ar";
        }


        $categories = DB::table($main_db.'.category')
        ->leftJoin($this->db_name.'.category_description',$main_db.'.category.id','=' , $this->db_name.'.'.'category_description.'.'category_id')
        ->get([$main_db.'.category.id',$main_db.'.category.icon',$this->db_name.'.category_description.'.'name']);

        $category = DB::connection($this->db)->table('category_description')->where('category_id',$id)
        ->get()->first();



        
        
        $products = DB::table($main_db.'.product')
        ->orderBy($main_db.'.product.id', 'desc')
        ->leftJoin($this->db_name.'.product_description',$main_db.'.product.id','=' , $this->db_name.'.'.'product_description.'.'product_id')
        ->where($main_db.'.product.category_id',$id)
        ->get([$main_db.'.product.id',$main_db.'.product.image',
        $main_db.'.product.price',$main_db.'.product.code',
        $this->db_name.'.'.'product_description.title',
        $this->db_name.'.'.'product_description.description']);
        


        return view('category',compact('products','category','categories'));
    }

    public function showProduct($id){
        
        
        $main_db = "sourceeg_source";
        
        $lang = Session::get('lang', 'en');
        if($lang == "en"){
            $this->db = "mysql2";
            $this->db_name = "sourceeg_source_en";
        }
        else{
            $this->db = "mysql3";
            $this->db_name = "sourceeg_source_ar";
        }



        $categories = DB::table($main_db.'.category')
        ->leftJoin($this->db_name.'.category_description',$main_db.'.category.id','=' , $this->db_name.'.'.'category_description.'.'category_id')
        ->get([$main_db.'.category.id',$main_db.'.category.icon',$this->db_name.'.category_description.'.'name']);

        $product = DB::table($main_db.'.product')
        ->orderBy($main_db.'.product.id', 'desc')
        ->leftJoin($this->db_name.'.product_description',$main_db.'.product.id','=' , $this->db_name.'.'.'product_description.'.'product_id')
        ->where($main_db.'.product.id',$id)
        ->get()->first();

        $category = DB::table($main_db.'.category')->where($main_db.'.category.id',$product->category_id)
        ->leftJoin($this->db_name.'.category_description',$main_db.'.category.id','=' , $this->db_name.'.'.'category_description.'.'category_id')
        ->get([$main_db.'.category.id',$main_db.'.category.icon',$this->db_name.'.category_description.'.'name'])->first();
       
        return view('product',compact('category','product','categories'));
    }

	
	
	
	   public function  form(Request $request) 
    {

        $to = "mohamed.be4em@gmail.com  ,  ahmedosama@be4em.com ";
        $subject = " ";
        $neme = $_POST['title'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $body = $_POST['body'];
         $message="<html><head><title>  fgfgfd     </title>
        </head><body><table>
        <tr>
		<th>Firstname</th><th>phone</th><th>email</th><th>body</th></tr>
        <tr> <td>$neme  </td><td>$phone  </td><td> $email  </td><td> $body  </td> </tr>
        </table></body></html> ";
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        $headers .= 'From: <info@scpc-eg.com>' . "\r\n";

           if(isset($_POST['phone'])){
        if(mail($to,$subject,$message,$headers)){
        return redirect()->action('WebsiteController@index');
        }else{  echo "Mail Not Sent"; } }  
        


    }
	
    public function contact(){

        $main_db = "sourceeg_source";
        
        $lang = Session::get('lang', 'en');
        if($lang == "en"){
            $this->db = "mysql2";
            $this->db_name = "sourceeg_source_en";
        }
        else{
            $this->db = "mysql3";
            $this->db_name = "sourceeg_source_ar";
        }

        $categories = DB::table($main_db.'.category')
        ->leftJoin($this->db_name.'.category_description',$main_db.'.category.id','=' ,
         $this->db_name.'.'.'category_description.'.'category_id')
        ->get([$main_db.'.category.id',$main_db.'.category.icon',$this->db_name.'.category_description.'.'name']);

        return view('contact',compact('categories'));
    }
}

          