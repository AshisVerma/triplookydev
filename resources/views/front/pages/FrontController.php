<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FAQ;
use App\Models\Privacy;
use App\Models\About;
use App\Models\Contact;
use App\Models\CopyRight;
use App\Models\Term;
use App\Models\CookiePolicy;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\Admin;
use App\Models\TravelLookingPartner as Partner;
use Illuminate\Support\Facades\DB;
use App\Models\ThingToDo;
use App\Models\ThingToDoGalleryImage as gallery;
use App\Models\Category;
use App\Models\Language;
use App\Models\WhyUseTriplooky as Triplooky;
use App\Models\HowToVideo;
use App\Models\Map;

use App\Models\City;
use App\Models\TourAndActivity;
use App\Models\FoodDrink;
use App\Models\DiscoverMorocco;
use App\Models\CityImage;
use App\Models\MustDoAndSee;
use App\Models\MustDoAndSeeImage;
use App\Models\TourAndActivityImage;
use App\Models\CMS\CMSAccomodation;
use App\Models\Accomodation;
use Session;
use App\Models\CurrencyConverter;
use App\Models\Currency;
use App\Models\Transportation;










class FrontController extends Controller
{

    public function index(){
       
    
        $banner=Banner::where("status","1")->orderBy("order_by","asc")->get();
         $partner=Partner::all();
         $touractivity=TourAndActivity::where("status",1)->take(9)->latest()->get();
         $why_use_triplooky=Triplooky::where("status",1)->take(4)->latest()->get();
         $how_to_video=HowToVideo::take(1)->where("status",1)->first();
         $city=City::latest()->where("status",1)->get();
         
        
        
            if(!session()->has('currency_name')){
               session()->put("currency_name","USD");

            }
             if(!session()->has('change_price')){
               session()->put("change_price",1);

            }
             if(!session()->has('currency_sign')){
                session()->put("currency_sign","$");

            }


        return view("index",['banner'=>$banner, 'partner'=>$partner,'tour_and_activity'=>$touractivity,'triplooky'=>$why_use_triplooky,'how_to_video'=>$how_to_video,'city'=>$city]);
    }
    public function thing_to_do(){
      
        $data=ThingToDo::latest()->where("status",1)->get();
       
        return view("front.pages.thing_to_do",['data'=>$data]);
    }

    public function stay(){
        $city=City::latest()->where("status",1)->select("id","city_name","image")->get()->toArray();
       

        
        return view("front.pages.stay",['city'=>$city]);
    }
   
   public function faq(){
       $ad_id = '1';
        $check_admin = DB::table('admins')->find($ad_id);
        $logo_image = $check_admin->admin_image;
    $faq=FAQ::get();
    return view("front.pages.faq",['data'=>$faq, 'logo_image'=>$logo_image]);
   }
    
    public function activity(){
        $data=Activity::paginate(6);
        $category=Category::all();
        return view("front.pages.activity",['data'=>$data,'category'=>$category]);
    }


   public function cookie_policy(){
       $ad_id = '1';
        $check_admin = DB::table('admins')->find($ad_id);
        $logo_image = $check_admin->admin_image;
    $data=CookiePolicy::get();
    return view("front.pages.cookie_policy",['data'=>$data, 'logo_image'=>$logo_image]);
   }


    public function terms(){
        $ad_id = '1';
        $check_admin = DB::table('admins')->find($ad_id);
        $logo_image = $check_admin->admin_image;
    $data=Term::get();
    return view("front.pages.term_and_use",['data'=>$data, 'logo_image'=>$logo_image]);
   }


 public function copyright(){
     $ad_id = '1';
        $check_admin = DB::table('admins')->find($ad_id);
        $logo_image = $check_admin->admin_image;
    $data=CopyRight::get();
    return view("front.pages.copyright",['data'=>$data, 'logo_image'=>$logo_image]);
   }


    public function privacy(){
        $ad_id = '1';
        $check_admin = DB::table('admins')->find($ad_id);
        $logo_image = $check_admin->admin_image;
    $data=Privacy::get();
    return view("front.pages.privacy",['data'=>$data, 'logo_image'=>$logo_image]);
   }



    public function about(){
        $ad_id = '1';
        $check_admin = DB::table('admins')->find($ad_id);
        $logo_image = $check_admin->admin_image;
    $data=About::get();
    return view("front.pages.about_us",['data'=>$data, 'logo_image'=>$logo_image]);
   }

   public function pick_city(){
    $city=City::orderBy("order_by","asc")->get();
    return view("front.pages.pick_city")->with("data",$city);
   }

   public function trip_start(){
    return view("front.pages.trip_start");
   }

   public function accomodation(){
       $maxprice=Accomodation::where("status",1)->max("price");
       $minprice=Accomodation::where("status",1)->min("price");
       $data=CMSAccomodation::where("status",1)->get()->toArray();
    return view("front.pages.accomodation",['data'=>$data,"minprice"=>$minprice,"maxprice"=>$maxprice]);
   }
   public function mytrip_plan(){
    return view("front.pages.mytrip_plan");
   }

   public function preferable_activities(){
     
    $activity=TourAndActivity::latest()->where("status",1)->max("price");
    print_r($activity);
    die;

    
    return view("front.pages.preferable_activities",['data'=>$activity]);
   }

   public function tour_excursion(){ 
    return view("front.pages.tour_excursions");
   }
    public function transport(){
    return view("front.pages.transport");
   }

   public function trip_summary(){
    return view("front.pages.trip_summary");
   }

   public function login(){
    return view("front.pages.login");
   }

   public function register(){
    return view("front.pages.signup");
   }

   public function forgetpass(){
    return view("front.pages.forgetpass");
   }



   public function contact(){
       $ad_id = '1';
        $check_admin = DB::table('admins')->find($ad_id);
        $logo_image = $check_admin->admin_image;
    $data=Contact::get();
    $map=Map::where("status",1)->get();
   return view("front.pages.contact",['data'=>$data, 'logo_image'=>$logo_image,'map'=>$map]);
   }


     public function tour_and_activity(Request $request,$name){
    $tour=TourAndActivity::where("name",$name)->first();
   

    return view("front.pages.tour_details",['data'=>$tour]);
   }
   
    public function tour(Request $request){
        $data=Activity::take(6)->orderBy("id","desc")->get();
    return view("front.pages.find_tour_and_activity",['data'=>$data]);
   }


   public function tour_search_city(Request $request){
    $data=ThingToDo::where("city_name",'like','%'.$request->city.'%')->orWhere("region_name",'like','%'.$request->city.'%')->orWhere("heading",'like','%'.$request->city.'%')->get();

    return response()->json(['message'=>"success",'data'=>$data]);
   }

    public function search_activity(Request $request){
    $data=Activity::where("city_name",'like','%'.$request->city.'%')->orWhere("region_name",'like','%'.$request->city.'%')->orWhere("activity_name",'like','%'.$request->city.'%')->where("activity_status",1)->get();

    return response()->json(['message'=>"success",'data'=>$data]);
   }


  public function tour_list(Request $request,$name){
  $category=Category::all();
    $data=ThingToDo::where("city_name",$name)->get();
    $lang=Language::all();

   
     if(!$request->ajax()){
        return view("front.pages.tour_list",['data'=>$data,'category'=>$category,'lang'=>$lang,'city'=>$name]);
     }
  

    if($request->ajax()){
      return response()->json(['message'=>"success","data"=>$data]);
    }

   }

   public function find_activity_list(Request $request,$activity_name){
     $category=Category::all();
    $data=Activity::where("city_name",$activity_name)->where("activity_status",1)->get();
    $lang=Language::all();
    return view("front.pages.find_activity_list",['data'=>$data,'category'=>$category,'lang'=>$lang,'city'=>$activity_name]);
   }
    


   public function tour_about(Request $request,$city,$head){
    $data=ThingToDo::where("heading",$head)->first();
    return view("front.pages.tour_details_about",['data'=>$data]);
   }

   public function activity_details_by_search(Request $request,$city,$activity_name){
    $data=Activity::where("activity_name",$activity_name)->where("activity_status",1)->first();
    return view("front.pages.find_activity_details",['data'=>$data]);
   }


   public function category_filter_tour(Request $request,$city,$id){
       $data=ThingToDo::where("category_id",$id)->get();
       return response()->json(['message'=>"success",'data'=>$data]);

   }

   public function lang_fliter(Request $request,$city,$lang_id){
      $data=ThingToDo::where("lang_id",$lang_id)->get();
      return response()->json(['message'=>"success","data"=>$data]);
   }


   public function price_filter_thing_to_do(Request $request,$city,$type){
      if($type==1){
        $data=ThingToDo::where("city_name",$city)->orderBy("price","ASC")->get();
        return response()->json(['message'=>"success","data"=>$data]);
      }
      if($type==0){
        $data=ThingToDo::where("city_name",$city)->orderBy("price","desc")->get();
        return response()->json(['message'=>"success","data"=>$data]);
      }
   }

   public function natureDetails(){
    return view("front.pages.nature_details");
   }


   public function cityTopDestination(Request $request,$cityname){
    $city=City::select("id")->where("city_name",$cityname)->first()->toArray();
    $data=DiscoverMorocco::where("city",$city['id'])->get()->toArray();
    $cityimage=CityImage::select("image")->where("city_id",$city['id'])->get()->toArray();

    return view("front.pages.nature_details",['data'=>$data,"city"=>$cityimage,'city_name'=>$cityname]);
   }

   public function cityDiscoverMorocco(Request $request,$type,$cityname){
    try{
         $city=City::select("id")->where("city_name",$cityname)->first()->toArray();
    $data=DiscoverMorocco::where("city",$city['id'])->where("type",$type)->get()->toArray();
    $cityimage=CityImage::select("image")->where("city_id",$city['id'])->get()->toArray();

    return view("front.pages.nature_details_discover",['data'=>$data,"city"=>$cityimage,'city_name'=>$cityname]);

    }
    catch(\Exception $e){
        return redirect()->back();
    }
   }

   public function CityMustToDo(Request $request,$cityname){
     $city=City::select("id")->where("city_name",$cityname)->first()->toArray();
    $data=MustDoAndSee::where("city",$city['id'])->where("status",1)->get()->toArray();
    $cityimage=CityImage::select("image")->where("city_id",$city['id'])->where("status",1)->get()->toArray();

    return view("front.pages.must-do_details",['data'=>$data,"city"=>$cityimage,'city_name'=>$cityname]);
   }


   public function specificMustDoAndSee(Request $request,$cityname,$must_do_name){
    try{
    $data=MustDoAndSee::where("city_name",$cityname)->first()->toArray();
      $imagedata=MustDoAndSeeImage::where("must_do_and_see_id",$data['id'])->get()->toArray();
      $related_data=MustDoAndSee::select("name","city_name","image")->where("name","!=",$data['name'])->inRandomOrder()->take(12)->get()->toArray();
      
      return view("front.pages.specific_must_do",['data'=>$data,'imagedata'=>$imagedata,'related_data'=>$related_data]);
    }
    catch(\Exception $e){
        return redirect()->back();

    }
   }


   public function tourAndActivity(Request $request,$name){
    
    $data=TourAndActivity::where("name",$name)->first()->toArray();
    $imagedata=TourAndActivityImage::where("tour_and_activity_id",$data['id'])->get()->toArray();
      $related_data=TourAndActivity::select("name","city","image")->where("name","!=",$data['name'])->inRandomOrder()->take(12)->get()->toArray();
    return view("front.pages.tourAndActivity",['data'=>$data,"imagedata"=>$imagedata,"related_data"=>$related_data]);
     
   
   
   }



   public function goodFor(Request $request,$cityname,$must_do_and_see_type){
       $city=City::select("id")->where("city_name",$cityname)->first()->toArray();
    $data=MustDoAndSee::where("city",$city['id'])->where("status",1)->where("type",$must_do_and_see_type)->get()->toArray();
    $cityimage=CityImage::select("image")->where("city_id",$city['id'])->where("status",1)->get()->toArray();
        $type=$must_do_and_see_type;
        

        return view("front.pages.good_for_tour_and_activity",['data'=>$data,"city"=>$cityimage,'city_name'=>$cityname]);
     
   }

   // travel data store one by one
   public function travel_data(Request $request){
   session()->put("travel",$request->data);
    session()->forget("city");
    session()->forget("all_city_details");
     session()->forget("accomodation");
      session()->forget("activity");
       session()->forget("fooddrink");
        session()->forget("transportation");
   return response("success");

   }


   public function city_data(Request $request){
    session()->put("city",$request->city);
    session()->put("all_city_details",$request->all_city_details);
    return response("success");
   }

    public function accomodation_data(Request $request){
    session()->put("accomodation",$request->accomodation);
   
    return response("success");
   }
    public function activity_data(Request $request){
    session()->put("activity",$request->data);
   
    return response("success");
   }

   public function fooddrink_data(Request $request){
    session()->put("fooddrink",$request->fooddrink);
   
    return response("success");
   }

   public function transportation_data(Request $request){
    session()->put("transportation",$request->data);
   
    return response("success");
   }
   //end travel data store one by one



   //currency convert after user select currency
   public function convertCurrency(Request $request){
       $data=CurrencyConverter::where("currency_from","USD")->where("currency_to",$request->currency)->first()->toArray();
       $currency=Currency::where("currency_name",$data['currency_to'])->first()->toArray();
       session()->put("change_price",$data['price_to']);
       session()->put("currency_sign",$currency['symbol']);
       session()->put("currency_name",$data['currency_to']);
       return response("success");
   }

   public function goodForSpecific(Request $request,$city,$type,$name){
    $data=MustDoAndSee::where("name",$name)->first()->toArray();
     $image=MustDoAndSeeImage::where("must_do_and_see_id",$data['id'])->get()->toArray();
     return view("front.pages.specificGoodFor",compact('data','image'));
   }


   public function tripDone(Request $request){
   
   
   session()->put("accomodation_data",$request->accomodation);
   session()->put("tour_and_activity_data",$request->tour_and_activity);
   session()->put("transportation_data",$request->transportation);
   session()->put("fooddrink_data",$request->fooddrink);
   return response()->json(['status'=>1]);
   }


   public function myTripPlan(){
    $accomodation=session()->get('accomodation_data');
    $tour=session()->get('tour_and_activity_data');
    $fooddrink=session()->get("fooddrink_data");
    $transportation=session()->get('transportation_data');

    $accomodation_data=[];
   for($i=0;$i<count($accomodation);$i++){
     $accomodation_data[$i]=Accomodation::select("image","name","link","price",'type',"id")->where("id",$accomodation[$i]['accomodation'])->first()->toArray();
   }

   $tour_data=[];
   for($i=0;$i<count($tour);$i++){
    $tour_data[$i]=TourAndActivity::select("image","name","link","price",'type',"id")->where("id",$tour[$i]['tour'])->first()->toArray();
   }

    $fooddrink_data=[];
   for($i=0;$i<count($fooddrink);$i++){
    $fooddrink_data[$i]=FoodDrink::select("image","name","link","price",'type',"id")->where("id",$fooddrink[$i]['fooddrink'])->first()->toArray();
   }

    $transportation_data=[];
   for($i=0;$i<count($transportation);$i++){
    $transportation_data[$i]=Transportation::select("image","name","link","price",'type',"id")->where("id",$transportation[$i]['transportation'])->first()->toArray();
   }
      $city=session()->get("city");
      $city_data=[];
      foreach($city as $key=>$city_list){
        $city_data[$key]=City::select("city_name")->where("id",$city_list)->first()->toArray();
      }

    return view('front/pages/mytrip_plan',compact('accomodation','accomodation_data','tour_data','fooddrink_data','transportation_data','transportation','fooddrink','tour','city_data'));
   }
}
