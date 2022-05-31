@extends("admin.layout.header")
@section("title","Update Photo of Must Do And See")
@section("content")
<div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white p-font">Must Do And See Photo Setting</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white p-font">Home</a></li>
                                <li class="p-font"> Must Do And See</li>
                                
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
                                    <div> <h6 class="p-font text-white"><b>Update Must Do And See</b></h6></div>
                                 
                                   
                                </div>
                                <div class="card-body">
                                    <form method="post" action="/admin/must-do-and-see/edit-image-data" enctype="multipart/form-data">
                                        @csrf
                                       <input type="hidden" name="id" value="{{$data['id']}}">
                                        <div class="form-group">
                                            <label class="p-font">Photo (You can select multiple)</label>
                                            <input type="file" name="image" class="form-control shadow-none" required="">
                                            <img src="{{url('')}}/Must-do-and-see/images/{{$data['image']}}" width="100">
                                        </div>
                                       
                                        <div class="form-group">
                                            <button class="btn-custom shadow-none">Update Must Do And See Photo</button>
                                        </div>
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