@extends("admin.layout.header")
@section("title","Tour And Activity Photo Gallery")
@section("content")
<div class="row align-items-center" >
                    <div class="col-lg-6">
                        <div class="breadcrumb-content">
                            <div class="section-heading">
                                <h2 class="sec__title font-size-30 text-white p-font">Tour And Activity Photo Setting</h2>
                            </div>
                        </div><!-- end breadcrumb-content -->
                    </div><!-- end col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="breadcrumb-list text-right">
                            <ul class="list-items">
                                <li><a href="index.html" class="text-white p-font">Home</a></li>
                                <li class="p-font">ATour And Activity Photo</li>
                                
                            </ul>
                        </div><!-- end breadcrumb-list -->
                    </div><!-- end col-lg-6 -->
                </div><!-- end row -->
               
            </div>
        </div><!-- end dashboard-bread -->
        <div class="dashboard-main-content mt-2">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        {!! session()->get('message')!!}

                    </div>
                 
                    <div class="col-lg-12">
                        <div class="form-box">
                            <div class="card" style="border:none;box-shadow: 0px 0px 5px black;border-radius: 2px;">
                                <div class="card-header d-flex justify-content-between align-items-center py-3" style="background: #28e5f3;border-radius: 2px;">
                                    <div> <h6 class="text-white p-font"><b>Tour And Activity Photo</b></h6></div>
                                    <div><a href="/admin/tour-and-activity/add-more-image-tour-and-activity/{{base64_encode($data->id)}}"><button class="btn btn-dark shadow-none d-flex justify-content-between align-items-center">
                                        <i class="la la-plus-circle" style="font-size:20px;"></i>
                                    </button></a></div>
                                </div>
                                <div class="card-body">
                                   
                                    <table class="table table-custom view-activity-gallery-table">
                                        <tr>
                                            <th>Sr.No</th>
                                            <th>Tour And Activity Name</th>
                                            <th>Image</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                          @foreach($imagelist as $key=>$list)
                                        <tr>
                                            <td>{{$key+1}}</td>
                                            <td>{{$data->name}}</td>
                                            <td><img src="{{url('')}}/tour-and-activit-image/images/{{$list->image}}" width="100"></td>
                                            <td>
                                                @if($list->status==1)
                                                <a href="/admin/tour-and-activity/tour-and-activity-image-status-change/{{base64_encode($list->id)}}"><button class="btn btn-
                                                    btn-success">Active</button></a>
                                                @else
                                                 <a href="/admin/tour-and-activity/tour-and-activity-image-status-change/{{base64_encode($list->id)}}"><button class="btn btn-danger">Inactive</button></a>
                                                 @endif
                                            </td>
                                            <td> <a href="/admin/tour-and-activity/tour-and-activity-image/edit/{{base64_encode($list->id)}}"><button class="btn btn-success"><i class="la la-edit"></i></button></a>
                                             <a href="/admin/tour-and-activity/tour-and-activity-image/delete/{{base64_encode($list->id)}}" onclick="return confirm('Are you sure to delete')"><button class="btn btn-danger"><i class="la la-trash"></i></button></a></td>
                                        </tr>
                                        @endforeach
                                        
                                        
                                    </table>
                                 

                                 
                                </div>
                            </div>
                           
                        </div><!-- end form-box -->
                    </div><!-- end col-lg-12 -->
                   
                     
                
                    
                     <div class="col-lg-3 responsive-column--m">
                        <div class="form-box dashboard-card">




               
                            
                            
@endsection

@section("modal")
<div class="modal bd-example-modal-sm" id="activity-gallery-delete-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-sm" role="document">
    <div class="modal-content" style="border-radius: 2px;box-shadow: 0px 0px 10px black;">
      
      <div class="modal-body" style="height: 220px;">
     <center><h6 class="p-font"> <b>Are You sure</b></h6></center>
     <hr>
     <center><i class="la la-question-circle text-danger" style="font-size:65px"></i></center>
     <center><div class="d-flex mt-4 justify-content-center align-items-center">
          <button class="btn shadow-none px-4 p-font mr-3 confirm-delete-activity-gallery-btn" style="border-radius:2px !important;background: darkred;color: white;">Yes</button>
      <button class="btn btn-info shadow-none px-4 p-font" data-dismiss="modal" style="border-radius:2px !important;background: darkblue;color: white;">No</button>
     </div></center>
      </div>
     
    </div>
  </div>
</div>
@endsection