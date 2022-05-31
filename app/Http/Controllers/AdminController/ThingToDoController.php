<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Models\ThingToDo;
use App\Models\ActivityGallery;
use App\Models\Activity;
use App\Models\ThingToDoGalleryImage;
use Illuminate\Support\Facades\DB;
use App\Models\Language;
use App\Models\Category;

class ThingToDoController extends Controller
{
    private $message;
   public function index(){
    $region=DB::table("morocco_region")->get();
    $lang=Language::all();
    $category=Category::all();
    return view("admin.page.thing-to-do.thing_to_do",['region'=>$region,'lang'=>$lang,'category'=>$category]);
   }
   

       public function fetch_city(Request $request){
    $city=DB::table("morocco_cities")->where("region",$request->id)->get();
    return response()->json(['message'=>"success","data"=>$city]);

   }

   public function create(Request $request){
 
  

  
 if(trim($request->region)==0){
        
          $region_name=0;
         $region_id=0;   
           
   
    }
    else{
        
      $region=DB::table("morocco_region")->where("id",$request->region)->first();
           $region_name=($region->region);
           $region_id=$region->id;
          
    }
       
       if($request->city!=0){
        $city=DB::table("morocco_cities")->where("id",$request->city)->first();
      $city_name= ($city->ville);
      $city_id=$city->id;
       }
       else{
        $city_name=0;
        $city_id=0;

       }

       if($request->is_new=="Select is new"){
        $new=0;
       }
       else{
        $new= $request->is_new;
       }
     if($request->lang_id!=0){
                 $language=Language::where("id",$request->lang_id)->first();
                 $language_name=$language->lang_name;
                 $language_id=$language->id;
              }
              else{
                $language_name="";
                $language_id=0;

              }
    $category=Category::where("category_name",$request->category)->first();
   
     
  $file=$request->file("thing_to_do_image");
 
   $file_name=$file->getClientOriginalName(); 
   $file_name=date('mdYHis').$file_name;
  

   $data=array(
        "heading"=>$request->heading,
        "image"=>$file_name,
        
        "status"=>0,
        "city_id"=>$city_id,
         "region_id"=>$region_id,
         "city_name"=>$city_name,
         "region_name"=>$region_name,
         "phone_facility"=>$request->phone_facility,
         "hotel_pickup"=>$request->hotal_pickup,
         "fare_cancel"=>$request->fare,
         "duration"=>$request->duration,
         "language"=>$language_name,
         "lang_id"=>$language_id,
         "departure_time"=>$request->departure_time,
         "departure_details"=>$request->departure_details,
         "cancel_policy"=>$request->cancel_policy,
         "return_details"=>$request->return_detail,
         "higlight"=>$request->highlight,
         "inclusion"=>$request->inclusion,
         "exclusion"=>$request->exclusion,
         "additional_info"=>$request->add_info,
         "category_name"=>$request->category,
         "category_id"=>$category->id,
         "know_more"=>$request->know_more,
         "overview"=>$request->description,
         "price"=>(int)$request->price,
         "mrp"=>(int)$request->mrp,
           "is_new"=>$new,
         

    );

  
  

    if(!File::exists("thing-to-do/".$file_name)){
        if($file->move("thing-to-do/",$file_name)){
           
            if(ThingToDo::create($data)){
                return response()->json(['message'=>"success"]);
            }
            else{
                return response()->json(['message'=>"Failed"]);
            }
        }
    else{
         return response()->json(['message'=>"Image Not move"]);

    }

    }
    else{
        return response()->json(['message'=>"Image is Already exist"]);
    }

   }

   public function view(){
    $data=ThingToDo::select("heading","image","id","status")->orderBy("id","desc")->get();
    return view("admin.page.thing-to-do.view",['data'=>$data]);
   }

   public function delete(Request $request,$id){
    $id=base64_decode(($id));
   $data=ThingToDo::where("id",$id)->get();
   if(File::exists("thing-to-do/".$data[0]->image)){
      if(File::delete("thing-to-do/".$data[0]->image)){
        if(ThingToDo::where("id",$id)->delete()){
            return redirect()->back()->with("message_success","Thing to do Deleted successfully");
        }
      }
      else{
         return redirect()->back()->with("message","Something is wrong");
      }
   }
   else{
     return redirect()->back()->with("message","SomeThing is wrong");
   }

   }

   public function status(Request $request,$id){

    $id=base64_decode($id);
     $data=ThingToDo::where("id",$id)->first();
     
     
    if($data->status==0){
        $check=ThingToDo::where("id",$data->id)->update(['status'=>1]);
        if($check){
            return redirect()->back()->with("success","Status has been changed successfully");
        }
        else{
            return redirect()->back()->with("failed","Something is wrong try again");
        }
    }
    else{
         $check=ThingToDo::where("id",$data->id)->update(['status'=>0]);
         if($check){
            return redirect()->back()->with("success","Status has been changed successfully");
        }
        else{
            return redirect()->back()->with("failed","Something is wrong try again");
        }
    }

   }

   public function edit_thing(Request $request,$id){
     $id=base64_decode($id);
   
      $region=DB::table("morocco_region")->get();
     
   
   
    $data=ThingToDo::where("id",$id)->first();
    $category=Category::all();
    $city=DB::table("morocco_cities")->where("region",$data->region_id)->get();
    $language=Language::all();
    return view("admin.page.thing-to-do.edit",['data'=>$data,"region"=>$region,'category'=>$category,"lang"=>$language,'city'=>$city]);
   }

   public function edit_data(Request $request){


     if(trim($request->region)==0){
        
          $region_name=0;
         $region_id=0;   
           
   
    }
    else{
        
      $region=DB::table("morocco_region")->where("id",$request->region)->first();
           $region_name=($region->region);
           $region_id=$region->id;
          
    }
       
       if($request->city!=0){
        $city=DB::table("morocco_cities")->where("id",$request->city)->first();
      $city_name= ($city->ville);
      $city_id=$city->id;
       }
       else{
        $city_name=0;
        $city_id=0;

       }

       if($request->is_new=="Select is new"){
        $new=0;
       }
       else{
        $new= $request->is_new;
       }

     if($request->lang_id!=0){
                 $language=Language::where("id",$request->lang_id)->first();
                 $language_name=$language->lang_name;
                 $language_id=$language->id;
              }
              else{
                $language_name="";
                $language_id=0;

              }
     
     
      $category=Category::where("category_name",$request->category)->first();
      
    if($request->hasfile("image")){
          $file=$request->file("image");
       $filename=date('mdYHis').$file->getClientOriginalName();
      
       $data=ThingToDo::where("id",$request->id)->get();
       
           
            $updatedata=array(
        "heading"=>$request->heading,
        "image"=>$filename,
        
        "status"=>0,
        "city_id"=>$city_id,
         "region_id"=>$region_id,
         "city_name"=>$city_name,
         "region_name"=>$region_name,
         "phone_facility"=>$request->phone_facility,
         "hotel_pickup"=>$request->hotal_pickup,
         "fare_cancel"=>$request->fare,
         "duration"=>$request->duration,
         "language"=>$language_name,
         "lang_id"=>$language_id,
         "departure_time"=>$request->departure_time,
         "departure_details"=>$request->departure_details,
         "cancel_policy"=>$request->cancel_policy,
         "return_details"=>$request->return_detail,
         "higlight"=>$request->highlight,
         "inclusion"=>$request->inclusion,
         "exclusion"=>$request->exclusion,
         "additional_info"=>$request->add_info,
         "category_name"=>$request->category,
         "category_id"=>$category->id,
         "know_more"=>$request->know_more,
         "overview"=>$request->description,
         "price"=>(int)$request->price,
         "mrp"=>(int)$request->mrp,
           "is_new"=>$new,
         

    );


 
         
           
           
            
       if(1){
        if(File::delete("thing-to-do/".$data[0]->image)){
  

            if(1){
                if($file->move("thing-to-do",$filename)){
                   
                    $check=ThingToDo::where("id",$request->id)->update($updatedata);
                    if($check){
                        return response("success");
                    }
                    else{
                        return response("Failed");
                    }
                }
                else{
                     return response("Failed");
                }

            }
            else{
                return response("File already exists");
            }
        }
        else{
             return response("Failed");
        }
       }
       else{
        return response("Failed");
       }

    }
    else{
        $updatedata=array(
        "heading"=>$request->heading,
      
        "status"=>0,
        "city_id"=>$city_id,
         "region_id"=>$region_id,
         "city_name"=>$city_name,
         "region_name"=>$region_name,
         "phone_facility"=>$request->phone_facility,
         "hotel_pickup"=>$request->hotal_pickup,
         "fare_cancel"=>$request->fare,
         "duration"=>$request->duration,
         "language"=>$language_name,
         "lang_id"=>$language_id,
         "departure_time"=>$request->departure_time,
         "departure_details"=>$request->departure_details,
         "cancel_policy"=>$request->cancel_policy,
         "return_details"=>$request->return_detail,
         "higlight"=>$request->highlight,
         "inclusion"=>$request->inclusion,
         "exclusion"=>$request->exclusion,
         "additional_info"=>$request->add_info,
         "category_name"=>$request->category,
         "category_id"=>$category->id,
         "know_more"=>$request->know_more,
         "overview"=>$request->description,
         "price"=>(int)$request->price,
         "mrp"=>(int)$request->mrp,
           "is_new"=>$new,
         

    );
        

        $check=ThingToDo::where("id",$request->id)->update($updatedata);
        if($check){
            return response("success");
        }
        else{
            return response("Failed");
        }
    }
   }

   public function details(Request $request ,$id){
    $id=base64_decode($id);
    $data=ThingToDo::where("id",$id)->get();
    return view("admin.page.thing-to-do.details",['data'=>$data]);

   }



   public function gallery(){
    $this->data=ThingToDo::select("heading","id")->get();
    return view("admin.page.thing-to-do.add_gallery_activity",['data'=>$this->data]);
   }



  public function gallery_data(Request $request){
  if($request->hasfile("thing_to_do_image")){
     $heading_data=ThingToDo::find($request->heading);
    $allfile=($request->file("thing_to_do_image"));

    for($i=0;$i<count($allfile);$i++){
        $filename=$allfile[$i]->getClientOriginalName();
       $data=array(
           "image"=>$filename,
           "thing_id"=>(int)$request->heading,
           "status"=>1,

       );

          if(!File::exists("Thing-to-do-gallery/".$heading_data->heading."/".$filename)){
            if($allfile[$i]->move("Thing-to-do-gallery/".$heading_data->heading,$filename)){
               

               if(ThingToDoGalleryImage::create($data)){

                $this->message="success";
               }
               else{
                 $this->message="failed";
               }
            }
          }
          else{
             $this->message="file already exists";
          }
    }
     

      return response($this->message);
  }
   }


   public function view_gallery(){
    $this->data=ThingToDo::get();
    return view("admin.page.thing-to-do.view_thing_gallery",['data'=>$this->data]);
   }

   public function show_gallery_list(Request $request){
   $thing=ThingToDo::find($request->heading_id);
   $data=ThingToDoGalleryImage::where("thing_id",$request->heading_id)->get();
   return response()->json(['message'=>"success","data"=>$data,"heading_name"=>$thing->heading]);

   }


   public function change_activity_gallery_status(Request $request){
    $check=ThingToDoGalleryImage::where("id",$request->id)->update(['status'=>$request->status]);
    if($check){
        return response()->json(['message'=>"success"]);
    }
    else
    {
         return response()->json(['message'=>"Failed"]);
    }

   }

   public function delete_thing_gallery(Request $request){

    $check=ThingToDoGalleryImage::where("id",$request->id)->delete();
    if($check){
        return response()->json(['message'=>"success"]);
    }
    else{
        return response()->json(['message'=>"Failed"]);
    }

   }


   public function edit_thing_gallery(Request $request,$id){

    $data=ThingToDoGalleryImage::find($id);
    $activity_name=ThingToDo::where("id",$data->thing_id)->first();
    $activity=ThingToDo::get();
    return view("admin.page.activity.edit_activity_gallery",['data'=>$data,'activity'=>$activity,'activity_name'=>$activity_name]);
   }


   public function updated_thing_gallery_data(Request $request){
      if($request->hasfile("thing_image")){
          $data=ThingToDoGalleryImage::find($request->id);
       
          $activity=ThingToDo::where("id",$data->thing_id)->first();
         
          if(File::delete("Thing-to-do-gallery/".$activity->heading."/".$data->image)){
            $file=$request->file("thing_image");
            if($file->move("Thing-to-do-gallery/".$activity->heading,$file->getClientOriginalName())){
                if(ThingToDoGalleryImage::where("id",$request->id)->update(['image'=>$file->getClientOriginalName()])){
                    return response()->json(['message'=>"success"]);
                }
                else{
                     return response()->json(['message'=>"Faield"]);
                }
            }
            else{
                return response()->json(['message'=>"Faield"]);
            }
          }
          else{
            return response()->json(['message'=>"Failed11"]);
          }
      }
      else{
        return redirect("/admin/view-gallery-photo");
      }
   }



  public function region(){
    $data=DB::table("morocco_region")->get();
    return view("admin.page.thing-to-do.region_list",['data'=>$data]);
   }

   public function viewcity(){
     $data=DB::table("morocco_region")->get();
    return view("admin.page.thing-to-do.city.view_city",['data'=>$data]);

   }

   public function city_list(Request $request){
     $region=DB::table("morocco_cities")->where("region",$request->id)->get();
     return response()->json(["message"=>"success",'data'=>$region]);
   }
}
