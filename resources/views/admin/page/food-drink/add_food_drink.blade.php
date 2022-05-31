@extends("admin.layout.header")
@section("title","Add New Food And Drink ")
@section("content")
<div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white p-font">Food And Drink Setting</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white p-font">Home</a></li>
                                <li class="p-font"> Food And Drink</li>
                                
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
               
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content mt-5">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                         {!! session()->get('message') !!}
                         
                    </div>
                 
                    <div class="col-lg-12">

                        <div class="form-box">
                            <div class="card" style="border:none;box-shadow: 0px 0px 5px black;border-radius: 2px;">
                                <div class="card-header d-flex justify-content-between align-items-center py-3" style="background: #28e5f3;border-radius: 2px;">
                                    <div> <h6 class="p-font text-white"><b>Add Food And Drink</b></h6></div>
                                   
                                </div>
                                <div class="card-body">
                                     <form action="/admin/food-and-drink/add-food-and-drink-data"    enctype="multipart/form-data" method="post">
                                        @csrf
                                         
                                        <div class="form-group">
                                            <label class="p-font">Food and Drink Name</label>
                                            <input type="text" name="name" class="form-control shadow-none " placeholder="Food and Drink Name" oninput="removeErrorshow(this)" value="{{old('name')}}">
                                            @if($errors->has('name'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('name')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="p-font">Photo </label>
                                            <input type="file" name="image" class="form-control shadow-none " placeholder="Photo" oninput="removeErrorshow(this)" value="{{old('image')}}" accept="image/*" value="{{old('image')}}">
                                             @if($errors->has('image'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('image')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="p-font">Multiple Photo(jpeg,png,jpg) </label>
                                            <input type="file" name="multi_image[]" class="form-control shadow-none " placeholder="Photo" oninput="removeErrorshow(this)" value="{{old('image')}}" accept="image/*" value="{{old('image')}}" multiple="">
                                             @if($errors->has('image'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('image')}}</p>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label class="p-font">Phone No </label>
                                            <input type="number" name="phone" class="form-control shadow-none " placeholder="Phone No" oninput="removeErrorshow(this)" value="{{old('phone')}}" maxlength="10" id="phone">
                                             @if($errors->has('phone'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('phone')}}</p>
                                            @endif
                                        </div>
                                         <div class="form-group">
                                            <label class="p-font">Star </label>
                                            <input type="number" name="star" class="form-control shadow-none " placeholder="Star" oninput="removeErrorshow(this)" value="{{old('star')}}">
                                             @if($errors->has('star'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('star')}}</p>
                                            @endif
                                        </div>

                                         
                                         <div class="form-group">
                                            <label class="p-font">Rating </label>
                                            <input type="text" name="rating" class="form-control shadow-none " placeholder="Rating" oninput="removeErrorshow(this)" value="{{old('rating')}}">
                                             @if($errors->has('rating'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('rating')}}</p>
                                            @endif
                                        </div>
                                        
                                       
                                         <div class="form-group">
                                            <label class="p-font"> Status</label>
                                            <select class="form-control shadow-none" name="status">
                                                <option  value="select-status">Select Status</option>
                                                <option {{old('status')=='1'?"selected":""}} value="1">Active</option>
                                                <option {{old('status')=='0'?"selected":""}} value="0">Deactive</option>
                                            </select>
                                             @if($errors->has('status'))
                                            <p class="text-danger p-font" ><i class="la la-warning"></i> {{$errors->first('status')}}</p>
                                            @endif

                                        </div>
                                        

                                         <div class="form-group">
                                            <label class="p-font">Type</label>
                                          <select class="form-control shadow-none" name="type">
                                              <option>Select Type</option>
                                              <option value="resturant" @if (old('type')=='resturant') selected="selected" @endif>Resturant</option>
                                              <option value="bar" @if (old('type')=='bar') selected="selected" @endif>Bar</option>
                                             
                                              <option value="coffee" @if (old('type')=='coffee') selected="selected" @endif>Coffee</option>
                                              
                                              <option value="nightlife" @if (old('type')=='nightlife') selected="selected" @endif>Nightlife</option>
                                              
                                              
                                          </select>
                                         
                                           @if($errors->has('type'))
                                            <p class="text-danger p-font" ><i class="la la-warning"></i> {{$errors->first('type')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="p-font">Price/Person</label>
                                          <input type="number" name="price" class="form-control shadow-none" placeholder="Price/Person" oninput="removeErrorshow(this)" value="{{old('price')}}">
                                           @if($errors->has('price'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('price')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="p-font">Link </label>
                                          <input type="url" name="link" class="form-control shadow-none" placeholder="Link" oninput="removeErrorshow(this)" value="{{old('link')}}">
                                           @if($errors->has('link'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('link')}}</p>
                                            @endif
                                        </div>
                                       
                                        
                                        <div class="form-group">
                                            <label class="p-font">Map </label>
                                          <input type="text" name="map" class="form-control shadow-none" placeholder="Map" oninput="removeErrorshow(this)" value="{{old('map')}}">
                                           @if($errors->has('map'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('map')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="p-font">Select City</label>
                                            <select class="form-control shadow-none" name="city">
                                                <option>Select City</option>
                                                @foreach($city as $list)
                                                <option value="{{$list->id}}">{{$list->city_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                         <div class="form-group">
                                            <label class="p-font">Address </label>
                                           <textarea class="form-control shadow-none" placeholder="Address" name="address" oninput="removeErrorshow(this)" value="{{old('description')}}">
                                               {{old('address')}}
                                           </textarea>
                                            @if($errors->has('address'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('address')}}</p>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label class="p-font">Description</label>
                                         <textarea class="form-control shadow-none" placeholder=" Description" name="description" oninput="removeErrorshow(this)" value="{{old('description')}}">
                                             {{old('desciption')}}
                                         </textarea>
                                            @if($errors->has('description'))
                                            <p class="text-danger p-font"><i class="la la-warning"></i> {{$errors->first('description')}}</p>
                                            @endif
                                        </div>


                                        
                                        
                                        
                                        
                                        
                                        
                                         
                               
                                <div class="form-group">
                                  <button class="btn-custom p-font">Add Food & Drink</button>
                                </div>
                                <div class="message"></div>
                               </form>
                                </div>
                            </div>
                           
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-12 -->
                   
                     
                
                    
                     <div class="col-lg-3 responsive-column--m">
                        <div class="form-box dashboard-card">




               
              <script type="text/javascript">
                  function removeErrorshow(input){
                    if($(input).next().is("p")){
                        $(input).next("p").remove();
                    }

                  }
              </script>              
                            
@endsection