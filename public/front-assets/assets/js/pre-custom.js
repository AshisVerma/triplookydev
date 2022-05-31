 // function getTripSummaryData(){
   //   var data=(JSON.parse(sessionStorage.getItem("tour")));
   //   var date1 = new Date(data.arrival_date);
   // var date2 = new Date(data.departure_date);
   // var diffDays = date2.getDate() - date1.getDate(); 
   
   //     $.ajax({
   //   type:"POST",
   //   url:"/trip-summary-details-list",
   //   data:{
   //     data:data,
   //     _token:$("body").attr("data"),
   //   },
   //   beforeSend:function(){
   //     $(".loader").removeClass("d-none");
   //   },
   //   success:function(response){
   //     $(".loader").addClass("d-none");
   //     console.log(response);
      
      
      
   
   //     var tour_list={
   //       "hotel":response.hotel,
   //       "appartment":response.appartment,
   //       "ride":response.ride,
   //       "tour":response.tour,
   //       "activity":response.activity,
   //     };
       
   //     sessionStorage.setItem("tour_details",JSON.stringify(tour_list));
     
   //activity list show
       // if(response.activity.length>0){
       //   for(i=0;i<response.activity.length;i++){
       //     for(j=0;j<response.activity[i].length;j++){
       //       var box=`<div class="swiper-slide selct swiper-slide-duplicate wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s" data-swiper-slide-index="2"style="width: 33.3333%;">
       //               <div class="citiesS">
       //               <span class="checkCircle"></span>
       //               <p class="priceTag"><span>Starting from</span> <span class='activity-price-data'>$`+response.activity[i][j].price+`</p>
       //                <a href="javascript:void(0);" class="info-cities activity-info" type="activity" data="`+response.activity[i][j].id+`"><i class="fa-solid fa-circle-info"></i> Details</a>
       //               <img src="{{url('')}}/tour-and-activit-image/images/`+response.activity[i][j].image+`">                    
       //               <h3 class="text-center citiesName">`+response.activity[i][j].name+`</h3>
       //               <a href="`+response.activity[i][j].link+`" class="bookBtn" target="_blank">Book</a>
       //               <a href="javascript:void(0)" class="addTotrip add-tour-and-activity-btn" data="`+response.activity[i][j].id+`">Add to your trip</a>
       //             </div>
                    
       //             </div>`;
                 
   
       //             $(".activity-box").append(box);
                 
                  
       //     }
       //   }
   
       // }
       // else{
       //   alert("No Any data found");
       //   $(".activity-box").text("No Any Activity Found on Your select City");
       // }
   
   //end activity list show
   
   
   //accomodation list show s
   
       // if(response.accomodation.length>0){
       //   for(i=0;i<response.accomodation.length;i++){
       //     for(j=0;j<response.accomodation[i].length;j++){
       //       var box=`<div class="swiper-slide selct swiper-slide-duplicate wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s"  data-swiper-slide-index="2"style="width: 33.3333%;">
                     
       //               <div class="citiesS">
       //               <span class="checkCircle"></span>
       //               <p class="priceTag"><span>Starting from</span><span class='accomodation-price-data'>$`+response.accomodation[i][j].price+`<span></p>
       //                <a href="javascript:void(0);" class="info-cities accomodation-info" data="`+response.accomodation[i][j].id+`" ><i class="fa-solid fa-circle-info"></i> Details</a>
       //               <img src="{{url('')}}/accomodation-image/images/`+response.accomodation[i][j].image+`">
       //               <h3 class="text-center citiesName">`+response.accomodation[i][j].name+`</h3>
       //               <a href="`+response.accomodation[i][j].link+`" class="bookBtn" target="_blank">Book</a>
       //               <a href="javascript:void(0)" class="addTotrip add-accomodation-btn" data="`+response.accomodation[i][j].id+`">Add to your trip</a>
       //             </div>
   
       //             </div>`;
         
         
       //             $(".accomodation-box").append(box);

                    
   
   
       //     }
       //   }
       // }
       // else{
       //   alert("No Any data found");
       //   $(".activity-box").text("No Any Activity Found on Your select City");
       // }
   
   
   //end accomodation list show
   
   
   
   //transportation list show 
   
       // if(response.transportation.length>0){
       //   for(i=0;i<response.transportation.length;i++){
       //     for(j=0;j<response.transportation[i].length;j++){
       //       var box=`<div class="swiper-slide selct swiper-slide-duplicate wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s"  data-swiper-slide-index="2"style="width: 33.3333%;"style="width: 33.3333%;">
                   
   
       //               <div class="citiesS">
       //               <span class="checkCircle"></span>
       //               <p class="priceTag"><span>Starting from</span><span class='transportation-price-data'>$`+response.transportation[i][j].price+`</span></p>
       //                <a href="javascript:void(0);" class="info-cities transportation-info" data="`+response.transportation[i][j].id+`"><i class="fa-solid fa-circle-info"></i> Details</a>
       //               <img src="{{url('')}}/transportation-image/images/`+response.transportation[i][j].image+`">
       //               <h3 class="text-center citiesName">`+response.transportation[i][j].name+`</h3>
       //               <a href="`+response.transportation[i][j].link+`" class="bookBtn" target="_blank">Book</a>
       //               <a href="javascript:void(0)" class="addTotrip add-transportation-btn" data="`+response.transportation[i][j].id+`">Add to your trip</a>
       //             </div>
   
   
       //             </div>`;
         
   
       //             $(".transportation-box").append(box);
   
       //     }
       //   }
       // }
       // else{
         
       //   $(".transport-box").html("No Any transportation Found on Your select City");
       // }
   
   
   //end transportation list show
   
   
   //food and drink list show 
   
       // if(response.fooddrink.length>0){
       //   for(i=0;i<response.fooddrink.length;i++){
       //     for(j=0;j<response.fooddrink[i].length;j++){
       //       var box=`<div class="swiper-slide selct swiper-slide-duplicate wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s"  data-swiper-slide-index="2" style="width: 33.3333%;">
                   
       //               <div class="citiesS">
       //               <span class="checkCircle"></span>
       //               <p class="priceTag"><span>Starting from</span><span class='fooddrink-price-data'>$`+response.fooddrink[i][j].price+`</span></p>
       //                <a href="javascript:void(0);" class="info-cities fooddrink-info" data="`+response.fooddrink[i][j].id+`"><i class="fa-solid fa-circle-info"></i> Details</a>
       //               <img src="{{url('')}}/food-drink-image/images/`+response.fooddrink[i][j].image+`">
       //               <h3 class="text-center citiesName">`+response.fooddrink[i][j].name+`</h3>
       //               <a href="`+response.fooddrink[i][j].link+`" class="bookBtn" target="_blank">Book</a>
       //               <a href="javascript:void(0)" class="addTotrip add-food-and-drink-btn" data="`+response.fooddrink[i][j].id+`">Add to your trip</a>
       //             </div>
       //             </div>`;
   
       //             $(".food-drink-box").append(box);
   
       //     }
       //   }
       // }
       // else{
       //   alert("No Any data found");
       //   $(".activity-box").text("No Any fooddrink Found on Your select City");
       // }
   
   
   //end food and drink list show
   
   
   
   //first city details show
   // var city_box=` <img src="{{url('')}}/city-image/images/`+response.city.image+`" class="imgM first_cty_image"> <b><span class="first_city
   //             _name">`+response.city.city_name+`</span></b>`;
   // $(".first_city_box").append(city_box);
   //end first city details show
   
   
   
   
     
         // $(".citiesS .addTotrip").click(function(){
         //     $(this).parent().toggleClass("selected");
         // });
     
     // activity details fetch and show in activity modal
     // $(".activity-info").each(function(){
     //   $(this).click(function(){
     //    var activity_id=$(this).attr("data");
     //    $.ajax({
     //     type:"GET",
     //     url:"/trip-summary-details/get-activity-details?activity="+activity_id,
     //     success:function(response){
   
     //       $(".activity-carousel-inner-box").html(`<div class="carousel-item active" style="background-image: url({{url('')}}/tour-and-activit-image/images/`+response.data.image+`"></div>`);
     //        $(".tour-and-activity-type").html(response.data.type);
     //        $(".tour-and-activity-name").html(response.data.name);
     //        $(".tour-activity-btn-link").attr("href",response.data.link);
     //        $(".activity-phone").html(response.data.phone);
     //        $(".activity-address").html(response.data.address);
     //        if(response.data.rating>4){
     //         $(".activity-rating").html(response.data.rating+"  Very Good");
     //        }
     //        else{
     //         $(".activity-rating").html(response.data.rating+"  Good");
     //        }
            
     //        $(".activity-price").html("$"+response.data.price);
     //        for(i=0;i<Number(response.data.star);i++){
     //         var star=document.createElement("I");
     //         star.className="fa fa-star text-warning";
     //         $(".activity-star").append(star);
   
     //        }
   
     //        $("#trip_summary_details_show_modal_activity_modal").modal("show");
   
   
     //     }
     //    });
   
        
     //   });
     // });
   
     //end activity details fetch and show in activity modal
   
     //start ajax call accomodation details fecth and show in accomodation modal
   //     $(".accomodation-info").each(function(){
   //     $(this).click(function(){
   //      var accomodation_id=$(this).attr("data");
   
   //      $.ajax({
   //       type:"GET",
   //       url:"/trip-summary-details/get-accomodation-details?accomodation="+accomodation_id,
   //       success:function(response){
   // console.log(response);
   //         $(".accomodation-carousel-inner-box").html(`<div class="carousel-item active" style="background-image: url({{url('')}}/accomodation-image/images/`+response.data.image+`"></div>`);
   //          $(".accomodation-type").html(response.data.type);
   //          $(".accomodation-name").html(response.data.name);
   //          $(".accomodation-btn-link").attr("href",response.data.link);
   //          $(".accomodation-phone").html(response.data.phone);
   //          $(".accomodation-address").html(response.data.address);
   //          if(response.data.rating>4){
   //           $(".accomodation-rating").html(response.data.rating+"  Very Good");
   //          }
   //          else{
   //           $(".accomodation-rating").html(response.data.rating+"  Good");
   //          }
            
   //          $(".accomodation-rating-price").html("$"+response.data.price);
   //          for(i=0;i<Number(response.data.star);i++){
   //           var star=document.createElement("I");
   //           star.className="fa fa-star text-warning";
   //           $(".accomodation-star").append(star);
   
   //          }
   
   //          $("#trip_summary_details_show_modal_accomodation_modal").modal("show");
   
   
   //       }
   //      });
   
        
   //     });
   //   });
   
     //end ajax call accomodation details fetch ans show in accomodation modal
   
   
     //start ajax call food & drink details fecth and show in food & drink modal
   //     $(".fooddrink-info").each(function(){
   //     $(this).click(function(){
   //      var fooddrink_id=$(this).attr("data");
   
   //      $.ajax({
   //       type:"GET",
   //       url:"/trip-summary-details/get-fooddrink-details?fooddrink="+fooddrink_id,
   //       success:function(response){
   // console.log(response);
   //         $(".fooddrink-carousel-inner-box").html(`<div class="carousel-item active" style="background-image: url({{url('')}}/food-drink-image/images/`+response.data.image+`"></div>`);
   //          $(".fooddrink-type").html(response.data.type);
   //          $(".fooddrink-name").html(response.data.name);
   //          $(".fooddrink-btn-link").attr("href",response.data.link);
   //          $(".fooddrink-phone").html(response.data.phone);
   //          $(".fooddrink-address").html(response.data.address);
   //          if(response.data.rating>4){
   //           $(".fooddrink-rating").html(response.data.rating+"  Very Good");
   //          }
   //          else{
   //           $(".fooddrink-rating").html(response.data.rating+"  Good");
   //          }
            
   //          $(".fooddrink-rating-price").html("$"+response.data.price);
   //          for(i=0;i<Number(response.data.star);i++){
   //           var star=document.createElement("I");
   //           star.className="fa fa-star text-warning";
   //           $(".fooddrink-star").append(star);
   
   //          }
   
   //          $("#trip_summary_details_show_modal_food_and_drink_modal").modal("show");
   
   
   //       }
   //      });
   
        
   //     });
   //   });
   
     //end ajax call food & drink details fetch ans show in food & drink modal
   
      //start ajax call transportation details fecth and show in transportation modal
   //     $(".transportation-info").each(function(){
   //     $(this).click(function(){
   //      var transportation_id=$(this).attr("data");
       
   //      $.ajax({
   //       type:"GET",
   //       url:"/trip-summary-details/get-transportation-details?transportation="+transportation_id,
   //       success:function(response){
   // console.log(response);
   //         $(".transportation-carousel-inner-box").html(`<div class="carousel-item active" style="background-image: url({{url('')}}/transportation-image/images/`+response.data.image+`"></div>`);
   //          $(".transportation-type").html(response.data.type);
   //          $(".transportation-name").html(response.data.name);
   //          $(".transportation-btn-link").attr("href",response.data.link);
   //          $(".transportation-phone").html(response.data.phone);
   //          $(".transportation-address").html(response.data.address);
   //          if(response.data.rating>4){
   //           $(".transportation-rating").html(response.data.rating+"  Very Good");
   //          }
   //          else{
   //           $(".transportation-rating").html(response.data.rating+"  Good");
   //          }
            
   //          $(".transportation-price").html("$"+response.data.price);
   //          for(i=0;i<Number(response.data.star);i++){
   //           var star=document.createElement("I");
   //           star.className="fa fa-star text-warning";
   //           $(".transportation-star").append(star);
   
   //          }
   
   //          $("#trip_summary_details_show_modal_transportation_modal").modal("show");
   
   
   //       }
   //      });
   
        
   //     });
   //   });
   
     //end ajax call transportation details fetch ans show in transportation modal
   
      
      //--------------------Add to Trip----------------------------------------------------//
   
    
   //***************************ADD TO TRIP ACCOMODATION *************************************//
   
   //************** ADD TO TRIP TOUR AND ACTIVITY **************************//
   //    $(".add-tour-and-activity-btn").each(function(){
   //   $(this).click(function(){
     
   //     $(this).parent().addClass("selected");
   
   
   //       if(localStorage.getItem("_t_p_")!=null){
          
   
   //           var data=JSON.parse(localStorage.getItem("_t_p_"));
           
             
            
   //           if(data._t_a.indexOf(btoa($(this).attr("data")))==-1){
   //              data._t_a.push(btoa($(this).attr("data")));
   //             localStorage.setItem("_t_p_",JSON.stringify(data));
   //                   var price=parseInt($(this).parent().find("p span.activity-price-data").text().replace("$",""));
   //                var total_price=parseInt($(".activity-total-price").text());
   //                  total_price=total_price+price;

   //                    $(".activity-total-price").text(total_price);
   //                    var total_all_budget=parseInt($(".total-price").text());
   //                    $(".total-price").text(parseInt(total_all_budget+total_price));
                
   //           }
   //           else{
   //               swal({
   //                      title: "Tour & Activity Already Added ?",
   //                      icon: "warning",
                       
   //                      dangerMode: true,
   // });
   //           }
   
   
   
   //       }
   //       else
   //       {
   //          var details={
   //          _a_:[],
   //          _t_a:[],
   //          _f_d_:[],
   //          _t_:[],
   
   
   //          };
   //          details._t_a.push(btoa($(this).attr("data")));
   //            localStorage.setItem("_t_p_",JSON.stringify(details));
           
            
         
   
   
   
   //       }
       
   //   });
   // });
   //***************************ADD TO TRIP TOUR AND ACTIVITY *************************************//
   
   //************** ADD TO TRIP FOOD AND DRINK **************************//
   //    $(".add-food-and-drink-btn").each(function(){
   //   $(this).click(function(){
   //  $(this).parent().addClass("selected");
 
      
   //       if(localStorage.getItem("_t_p_")!=null){
   
   //           var data=JSON.parse(localStorage.getItem("_t_p_"));
           
             
            
   //           if(data._f_d_.indexOf(btoa($(this).attr("data")))==-1){
   //              data._f_d_.push(btoa($(this).attr("data")));
   //             localStorage.setItem("_t_p_",JSON.stringify(data));
   //               var total_price=parseInt($(".food-and-drink-total-price").text());
   //                          var price=parseInt($(this).parent().find("p span.food-and-drink-price-data").text().replace("$",""));
                           
   //                          var total_price=total_price+price;
   //                          $(".food-and-drink-total-price").text(total_price);
   //                            $(this).parent().addClass("selected");
   //                             var total_all_budget=parseInt($(".total-price").text());
   //                              $(".total-price").text(parseInt(total_all_budget+total_price));
                
   //           }
   //           else{
   //               swal({
   //                      title: "Food & Drink Already Added ?",
   //                      icon: "warning",
                       
   //                      dangerMode: true,
   // });
   //           }
   
   
   
   //       }
   //       else
   //       {
   //          var details={
   //          _a_:[],
   //          _t_a:[],
   //          _f_d_:[],
   //          _t_:[],
   
   
   //          };
   //          details._f_d_.push(btoa($(this).attr("data")));
   
   //          localStorage.setItem("_t_p_",JSON.stringify(details));
   //          var data=localStorage.getItem("_t_p_");
   //          var data=data._f_d_.push($(this).attr("data"));
   //          localStorage.setItem("_t_p_",JSON.stringify(data));
   
   
   
   //       }
       
   //   });
   // });
   //***************************ADD TO TRIP FOOD AND DRINK *************************************//
   //************** ADD TO TRIP TRANSPORTATION **************************//
   //    $(".add-transportation-btn").each(function(){
   //   $(this).click(function(){
   // $(this).parent().addClass("selected");
 

      
   //       if(localStorage.getItem("_t_p_")!=null){
   
   //           var data=JSON.parse(localStorage.getItem("_t_p_"));
           
             
            
   //           if(data._t_.indexOf(btoa($(this).attr("data")))==-1){
   //              data._t_.push(btoa($(this).attr("data")));
   //             localStorage.setItem("_t_p_",JSON.stringify(data));
   //               var total_price=parseInt($(".transportation-total-price").text());
   //                          var price=parseInt($(this).parent().find("p span.transportation-price-data").text().replace("$",""));
                           
   //                          var total_price=total_price+price;
   //                          $(".transportation-total-price").text(total_price);
   //                            $(this).parent().addClass("selected");
   //                             var total_all_budget=parseInt($(".total-price").text());
   //                          $(".total-price").text(parseInt(total_all_budget+total_price));
                
   //           }
   //           else{
   //               swal({
   //                      title: "Transportation Already Added ?",
   //                      icon: "warning",
                       
   //                      dangerMode: true,
   // });
   //           }
   
   
   
   //       }
   //       else
   //       {
   //          var details={
   //          _a_:[],
   //          _t_a:[],
   //          _f_d_:[],
   //          _t_:[],
   
   
   //          };
   //          details._t_.push(btoa($(this).attr("data")));
   
   //          localStorage.setItem("_t_p_",JSON.stringify(details));
   //          var data=localStorage.getItem("_t_p_");
   //          var data=data._t_.push($(this).attr("data"));
   //          localStorage.setItem("_t_p_",JSON.stringify(data));
   
   
   
   //       }
       
   //   });
   // });
   //***************************ADD TO TRIP TRANSPORTATION*************************************//
   //--------------------------End Add to Trip-----------------------------------------------//
   
   
        
     
    
   
   
   
   /*date difference how many day travel
   
   var data=JSON.parse(sessionStorage.getItem("tour"));
   
   
   
   var dateString1 = data.arrival_date; // Oct 23
   
   var dateParts1 = dateString1.split("/");
   
   // month is 0-based, that's why we need dataParts[1] - 1
   var date1 = new Date(+dateParts1[2], dateParts1[1] - 1, +dateParts1[0]);
   
   var dateString2 = data.departure_date; // Oct 23
   
   var dateParts2 = dateString2.split("/");
   
   // month is 0-based, that's why we need dataParts[1] - 1
   var date2 = new Date(+dateParts2[2], dateParts2[1] - 1, +dateParts2[0]); 
   var totaldate=date2.getTime()-date1.getTime();
   var difference_day=totaldate/(1000*3600*24);
   $(".editInput").val(difference_day+"  Days Total Travel Trip");
   
   //add more traveller
   var tour_data=JSON.parse(sessionStorage.getItem("tour"));
   var total_traveller=Number(tour_data.kid)+Number(tour_data.teen)+Number(tour_data.adult);
   $(".add-more-traveller-btn:first").click(function(){
   
     if(($(".add-travller-box").children().length+2)>total_traveller){
       swal({
                  title: "Total Traveller is "+total_traveller,
                  text: "Can`t be Add More than "+total_traveller+" Traveller",
                  icon: "error",
                   dangerMode: true,
                    button: {
                    text: "Close",
                 },
   
   
   });
   
     }
     else{
        var newTraveller=` <div class="form-group travller-box">
             <label>Traveller Name</label>
             <div class="input-group"> <input type="text" name="name" class="form-control shadow-none" placeholder="Traveller Name" required>
             <select class='shadow-none' style="width: 130px !important;outline: none;border:1px solid #ccc;text-align: center;">
             <option value='adult'>
             Adult
             </option>
              <option value='teen'>
            Teen
             </option>
              <option value='kid'>
           Kid
             </option>
             </select>
             <div class="input-group-append">
                 <button class="btn btn-danger shadow-none remove-traveller-btn" style="padding: 11.9px 15px;border-top-left-radius: 0px;border-bottom-left-radius: 0px;" type="button"><i class="fa fa-times-circle"></i></button>
             </div>
             </div>
            
           </div>`;
   
           $(".add-travller-box").append(newTraveller);
           $(".remove-traveller-btn").each(function(){
             $(this).click(function(){
               $(this).parent().parent().parent().remove();
   
             });
           });
     }
   
   });
   //end add more traveller
   
   //select date validate by datepicker
   $(function() {
   $( "#select-datepicker").datepicker({
                 minDate: date1,
                 maxDate: date2,
                 dateFormat: "dd/mm/yy",
   });
   //end select date validate by datepicker
   $(".add-accomodation-form").submit((e)=>{
   e.preventDefault();
   var add_trip_accomodation=[];
   if(add_trip_accomodation.indexOf($(".add-accomodation-form").serialize())==-1){
     add_trip_accomodation.push($(this).serialize());
     sessionStorage.setItem("trip-accomodation",JSON.stringify(add_trip_accomodation));
   }
   
   });
   });
   
   */