@extends("front.layout.header")
@section("css")
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
/>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
@endsection
@section("title","Trip Summary")
@section("content")
<style>
   .pad12 {
   padding-left: 15px;
   }
   .imgM {
   max-width: 420px;
   width:100%;
   height: 200px;
   object-fit: cover;
   border-radius: 6px;
   margin-right:16px;
   }
   #mln-7{margin-left:-7px;padding-right:7px;}
   #mln-7 .swiper-button-prev {
   margin-left: 7px;
   }
   .swiper-container {
   width: 100%;
   height: 100%;
   }
   .swiper-slide img{
   width:100%;
   height:200px;
   object-fit:cover;
   border-radius:6px;
   }
   .swiper-slide {
   text-align: center;
   font-size: 18px;
   background: #fff;
   /* Center slide text vertically */
   display: -webkit-box;
   display: -ms-block;
   display: -webkit-block;
   display: block;
   -webkit-box-pack: center;
   -ms-flex-pack: center;
   -webkit-justify-content: center;
   justify-content: center;
   -webkit-box-align: center;
   -ms-flex-align: center;
   -webkit-align-items: center;
   align-items: center;
   }
   .swiper-slide{padding:8px 16px;/*border:1px solid #eeeeee;*/}
   .swiper-button-prev, .swiper-container-rtl .swiper-button-next{
   left: 3px;
   right: auto;
   font-size: 35px;
   transform: rotate(-90deg);
   color:#000000;
   }
   .swiper-button-next, .swiper-container-rtl .swiper-button-prev{
   right: 3px;
   left: auto;
   font-size: 35px;
   transform: rotate(90deg);
   color:#000000;
   }
   .swiper-container{box-shadow:0px 0px 0px;}
   #daysSlider .swiper-slide{border:none;}
   div#daysSlider {
   width: 180px;
   }
   .just-end{justify-content:end;}
   .sTbudget {
   width: 150px;
   text-align:right;
   }
   #hero{min-height: 320px;}
   a.bookBtn {
   position: absolute;
   background: #006994;
   color: #ffffff;
   padding: 4px 10px;
   top: 50%;
   right: 0%;
   transform: translate(-50%, -50%);
   font-size: 14px;
   border-radius: 4px;
   box-shadow: 0px 0px 10px -1px rgb(0 0 0 / 30%);
   cursor: pointer;
   display: inline-block;
   transition:opacity 0.5s ease-in-out;
   opacity:0;
   }
   .selct{cursor:pointer;}
   /*.selct.selected a.bookBtn{display:block;}*/
   /*.selct.selected{background:#14a4be;}*/
   .social-media-container.vertical{z-index:99;}
   .editForm {
   max-width: 450px;
   width: 50%;
   }
   input.editInput {
   border: none;
   width: 60%;
   }
   input.editInput:focus{border:none;outline:none;}
   .swiper-slide h3 {
   font-size:18px;
   color:#ffffff;
   margin-bottom:0;
   }
   a.addTotrip {
   position: absolute;
   background: #fa8128;
   color: #ffffff;
   padding: 4px 10px;
   top: 50%;
   left: 28.5%;
   font-size: 14px;
   transform: translate(-50%, -50%);
   border-radius: 4px;
   box-shadow: 0px 0px 10px -1px rgb(0 0 0 / 30%);
   cursor: pointer;
   display: inline-block;
   transition: opacity 0.5s ease-in-out;
   opacity: 0;
   }
   .selct:hover a.addTotrip, .selct:hover a.bookBtn {
   opacity:1;
   }
   .social-media-container{
   display: none!important;
   }
   .citiesS.selected span.checkCircle:after{
   content: '\2713';
   color: #ffffff;
   background: #006994;
   display: block;
   border-radius: 100%;
   width: 24px;
   height: 24px;
   top: -2px;
   right: -2px;
   position: absolute;
   border: 1px solid #ffffff;
   }
   p.priceTag{
   color: #ffffff;
   font-weight: 700;
   padding: 0px 16px;
   position: absolute;
   bottom: 0;
   right: 0;
   text-align:left;
   }
   .priceTag span {
   display: block;
   text-align: left;
   }
   .citiesS.selected {
   border: 7px solid #006994;
   border-radius: 14px;
   }
   div#dd1 {
   max-width:700px;
   margin: 0;
   }
   @media (min-width: 1400px) and (max-width: 1700px){
   .swiper-slide img{height:180px!important;}
   }
   @media (min-width: 1921px) and (max-width: 3000px){
   a.btn.btn-default:nth-child(1){width: 200px;}
   a.bookBtn, a.addTotrip{font-size: 18px;}
   .swiper-slide img{height: 300px;}
   .swiper-slide,b.ct{font-size:24px;}
   }
   .swal-title{
    font-size: 15px;
     font-family: 'Poppins', sans-serif !important;
      text-shadow: -15px 5px 20px rbga(0,0,0,0.5);
      font-weight: 500 !important;
     color: white !important;
   }
   .swal-icon .swal-icon--error{
    font-size: 20px;
    background: red;
   }
   .swal-modal{
    background: #fa8128;;
    border-radius: 2px !important;
    position: relative !important;
   }
   .swal-button{
    width: fit-content !important;
    height: fit-content !important;
    border-radius: 2px !important;
    padding: 6px 15px !important;
    background: white !important;
    margin: 0px !important;

    color: #006994 !important;
    box-shadow: 0px 0px 5px rgba(0,0,0,0.5) !important;
   }
   
   
  
</style>
<main id="main">
   <div id="banner">
      <div class="container-fluid bodyPad">
         <h2 class="text-center">Trip Summary</h2>
      </div>
   </div>
   <!-- <div class="tripHeaderTop">
      <div class="container-fluid bodyPad">
         <div class="rt ">
            <div class="editForm">
              <input type="text" class="editInput" readonly value=""> <a href="javascript:void(0);" class="editB"><i class="fas fa-edit"></i></a>
            </div>
            <div class="text-center">
              <a href="/transport" class="btn btn-default">Previous</a>
              <a href="javascript:void(0);" class="btn btn-default">Plan it by Triplooky</a>
            </div>            
         </div>
      </div>
      </div> -->
   <section class="form-section mt-3">
      <div class="container-fluid bodyPad">
         <div class="proBar">
            <p class="prSection active">
               <span style="display:block;text-align:center;">Cities to visit</span>
               <span class="brCheck">
               <i class="fas fa-check"></i>
               </span>
            </p>
            <p class="prSection active">
               <span style="display:block;text-align:center;">Trip Calendar</span>
               <span class="brCheck">
               <i class="fas fa-check"></i>
               </span>
            </p>
            <p class="prSection active">
               <span style="display:block;text-align:center;">Accomodation Type</span>
               <span class="brCheck">
               <i class="fas fa-check"></i>
               </span>
            </p>
            <p class="prSection active">
               <span style="display:block;text-align:center;">Tours & Activities</span>
               <span class="brCheck">
               <i class="fas fa-check"></i>
               </span>
            </p>
            <p class="prSection active">
               <span style="display:block;text-align:center;">Food & Drink</span>
               <span class="brCheck">
               <i class="fas fa-check"></i>
               </span>
            </p>
            <p class="prSection active">
               <span style="display:block;text-align:center;">Transportation</span>
               <span class="brCheck">
               <i class="fas fa-check"></i>
               </span>
            </p>
            <!-- <p class="prSection active">
               <span style="display:block;text-align:center;">Trip Summary</span>
               <span class="brCheck">
                 <i class="fas fa-check"></i>
               </span>
               </p>  -->
         </div>
         <br/>
         <form class="trip-summary-form">
            <div class="d-flex align-center justify-bw" id="d-wrap">
               <div class="city_slider" style="overflow: hidden;">
                  <div class="swiper-container" id="dd11">
                     <div class="swiper-wrapper">
                      <div id="city-carousel" class="carousel" data-bs-ride="carousel"  data-bs-interval="false">
                      <div class="carousel-inner">
                         @for($i=0;$i<count($city);$i++)
                        @for($j=0;$j<count($city[$i]);$j++)
                             <div class="carousel-item {{$i==0?"active":""}}" data-bs-interval="false" data="{{$city[$i][$j]['id']}}">
                           <img src="{{url('')}}/city-image/images/{{$city[$i][$j]['image']}}" class="imgM">
                           <div class="carousel-caption d-none d-md-block px-0">
        <h4 style="color: #fa842d;"><b class="ct">{{$city[$i][$j]['city_name']}}</b></h4>
        
      </div> 
                             
                       </div>
   
                      
                        @endfor
                        @endfor
                        
                  
                  
   
  </div>
</div>
                       
                      
                        
                     </div>
                  </div>
               </div>
               <div class="day_slider_s" id="dys">
                  <div class="swiper-container slick total-day-slider">
                     <!-- Additional required wrapper -->
                     <div class="swiper-wrapper total-day">
                        
                     </div>
                     <!-- If we need navigation buttons -->
                     <div class="swiper-button-prev day-prev-btn" id="orange">
                        <i class="fas fa-sort-up"></i>
                     </div>
                     <div class="swiper-button-next day-next-btn" id="orange">
                        <i class="fas fa-sort-up"></i>
                     </div>
                  </div>
               </div>
               <div class="total_budget text-right">
                  <div class="d-flex align-center just-end">
                     <div style="margin-right:16px;">
                        <p class="tbudget">Total Budget</p>
                        <p><b>{{session('currency_sign')}}</b><span class="total-price">0</span></p>
                     </div>
                     <p style="font-size:30px;margin:0;"><i class="fas fa-coins ml-2"></i><span class="total_budget_price"></span></p>
                  </div>
               </div>
            </div>
            <div class="d-flex align-center justify-content mt-2 wow fadeInRight">
               <div class="tT" style="">
                  <b>Accomodation</b>
               </div>
               <div class="swiper-container" id="accomodation_slider">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                 @for($i=0;$i<count($accomodation);$i++)
                 @for($j=0;$j<count($accomodation[$i]);$j++)
                  <div class="swiper-slide selct">
                     <div class="citiesS">
                     <span class="checkCircle"></span>
                     <p class="priceTag"><span>Starting from</span> <span class='accomodation-price-data'><currency-symbol>{{session('currency_sign')}}</currency-symbol><price>{{(int)(session('change_price')*$accomodation[$i][$j]['price'])}}</price></p>
                      <a href="javascript:void(0);" class="info-cities accomodation-info" type="activity" data="{{$accomodation[$i][$j]['id']}}"><i class="fa-solid fa-circle-info"></i> Details</a>
                     <img src="{{url('')}}/accomodation-image/images/{{$accomodation[$i][$j]['image']}}">                    
                     <h3 class="text-center citiesName"></h3>
                     <a href="{{$accomodation[$i][$j]['link']}}" class="bookBtn" target="_blank">Book</a>
                     <a href="javascript:void(0)" class="addTotrip add-accomodation-btn accomodation-btn" data="{{$accomodation[$i][$j]['id']}}" style="z-index: 99999999999" onclick="accomodation(this)">Add to your trip</a>
                   </div>
                  </div>
                 @endfor
                 @endfor
                 <!--  <div class="swiper-slide selct">
                     <div class="citiesS">
                     <span class="checkCircle"></span>
                     <p class="priceTag"><span>Starting from</span> <span class='activity-price-data'>$</p>
                      <a href="javascript:void(0);" class="info-cities activity-info" type="activity" data=""><i class="fa-solid fa-circle-info"></i> Details</a>
                     <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">                    
                     <h3 class="text-center citiesName"></h3>
                     <a href="`+response.activity[i][j].link+`" class="bookBtn" target="_blank">Book</a>
                     <a href="javascript:void(0)" class="addTotrip add-tour-and-activity-btn" data="">Add to your trip</a>
                   </div>
                  </div>
                  <div class="swiper-slide selct">
                     <div class="citiesS">
                     <span class="checkCircle"></span>
                     <p class="priceTag"><span>Starting from</span> <span class='activity-price-data'>$</p>
                      <a href="javascript:void(0);" class="info-cities activity-info" type="activity" data=""><i class="fa-solid fa-circle-info"></i> Details</a>
                     <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">                    
                     <h3 class="text-center citiesName"></h3>
                     <a href="`+response.activity[i][j].link+`" class="bookBtn" target="_blank">Book</a>
                     <a href="javascript:void(0)" class="addTotrip add-tour-and-activity-btn" data="">Add to your trip</a>
                   </div>
                  </div>
                  <div class="swiper-slide selct">
                     <div class="citiesS">
                     <span class="checkCircle"></span>
                     <p class="priceTag"><span>Starting from</span> <span class='activity-price-data'>$</p>
                      <a href="javascript:void(0);" class="info-cities activity-info" type="activity" data=""><i class="fa-solid fa-circle-info"></i> Details</a>
                     <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">                    
                     <h3 class="text-center citiesName"></h3>
                     <a href="`+response.activity[i][j].link+`" class="bookBtn" target="_blank">Book</a>
                     <a href="javascript:void(0)" class="addTotrip add-tour-and-activity-btn" data="">Add to your trip</a>
                   </div>
                  </div>
                  <div class="swiper-slide selct">
                     <div class="citiesS">
                     <span class="checkCircle"></span>
                     <p class="priceTag"><span>Starting from</span> <span class='activity-price-data'>$</p>
                      <a href="javascript:void(0);" class="info-cities activity-info" type="activity" data=""><i class="fa-solid fa-circle-info"></i> Details</a>
                     <img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg">                    
                     <h3 class="text-center citiesName"></h3>
                     <a href="`+response.activity[i][j].link+`" class="bookBtn" target="_blank">Book</a>
                     <a href="javascript:void(0)" class="addTotrip add-tour-and-activity-btn" data="">Add to your trip</a>
                   </div>
                  </div> -->
              </div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev">
                <i class="fas fa-sort-up"></i>
              </div>
              <div class="swiper-button-next">
                <i class="fas fa-sort-up"></i>
              </div>
          </div>
               
               <div class="sTbudget wow fadeInRight" style="">
                  <b>{{session('currency_sign')}}</b><span class="accomodation-total-price price">0</span><span style=""><i class="fas fa-coins ml-2"></i> </span>
               </div>
            </div>
            <div class="d-flex align-center justify-content mt-3 wow fadeInRight">
               <div class="tT" style="">
                  <b>Tours & Activities</b>
               </div>
               <div class="swiper-container activities_slider slick" id="mln-7">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper activity-box">
                      @for($i=0;$i<count($activity);$i++)
                 @for($j=0;$j<count($activity[$i]);$j++)
                  <div class="swiper-slide selct">
                     <div class="citiesS">
                     <span class="checkCircle"></span>
                     <p class="priceTag"><span>Starting from</span> <span class='activity-price-data'><currency-symbol>{{session('currency_sign')}}</currency-symbol><price>{{(int)(session('change_price')*$activity[$i][$j]['price'])}}</price></p>
                      <a href="javascript:void(0);" class="info-cities activity-info" type="activity" data="{{$activity[$i][$j]['id']}}"><i class="fa-solid fa-circle-info"></i> Details</a>
                     <img src="{{url('')}}/tour-and-activit-image/images/{{$activity[$i][$j]['image']}}">                    
                     <h3 class="text-center citiesName"></h3>
                     <a href="{{$activity[$i][$j]['link']}}" class="bookBtn" target="_blank">Book</a>
                     <a href="javascript:void(0)" class="addTotrip add-tour-and-activity-btn" data="{{$activity[$i][$j]['id']}}" onclick="tour_and_activity(this)">Add to your trip</a>
                   </div>
                  </div>
                 @endfor
                 @endfor
                  
                   
                  
                  </div>
                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev" id="ta_sl_prev">
                     <i class="fas fa-sort-up"></i>
                  </div>
                  <div class="swiper-button-next" id="ta_sl_next">
                     <i class="fas fa-sort-up"></i>
                  </div>
               </div>
               <div class="sTbudget wow fadeInRight" style="">
                  <b>{{session('currency_sign')}}</b><span class="activity-total-price price">0</span><span style=""><i class="fas fa-coins ml-2"></i></span>
               </div>
            </div>
            <div class="d-flex align-center justify-content mt-3 wow fadeInRight">
               <div class="tT" style="">
                  <b>Food & Drink</b>
               </div>
               <div class="swiper-container slick" id="food_slider">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper food-drink-box">
                     
                   @for($i=0;$i<count($fooddrink);$i++)
                 @for($j=0;$j<count($fooddrink[$i]);$j++)
                  <div class="swiper-slide selct">
                     <div class="citiesS">
                     <span class="checkCircle"></span>
                     <p class="priceTag"><span>Starting from</span> <span class='fooddrink-price-data'><currency-symbol>{{session('currency_sign')}}</currency-symbol><price>{{(int)(session('change_price')*$fooddrink[$i][$j]['price'])}}</price></span></p>
                      <a href="javascript:void(0);" class="info-cities food-info" type="activity" data="{{$fooddrink[$i][$j]['id']}}"><i class="fa-solid fa-circle-info"></i> Details</a>
                     <img src="{{url('')}}/food-drink-image/images/{{$fooddrink[$i][$j]['image']}}">                    
                     <h3 class="text-center citiesName"></h3>
                     <a href="{{$fooddrink[$i][$j]['link']}}" class="bookBtn" target="_blank">Book</a>
                     <a href="javascript:void(0)" class="addTotrip add-food-and-drink-btn" data="{{$fooddrink[$i][$j]['id']}}" onclick="fooddrink(this)">Add to your trip</a>
                   </div>
                  </div>
                 @endfor
                 @endfor
                   
                  
                  </div>
                  <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev" id="fd_sl_prev">
                     <i class="fas fa-sort-up"></i>
                  </div>
                  <div class="swiper-button-next" id="fd_sl_next">
                     <i class="fas fa-sort-up"></i>
                  </div>
               </div>
               <div class="sTbudget wow fadeInRight" style="">
                  <b>{{session('currency_sign')}}</b><span class="food-and-drink-total-price price">0</span> <span style=""><i class="fas fa-coins ml-2"></i></span>
               </div>
            </div>
            
            <!-- Slick Slider -->
            <div class="d-flex align-center justify-content mt-3 mb-5 wow fadeInRight">
               <div class="tT" style="">
                  <b>Transportations</b>
               </div>
               <div class="swiper-container transportation_sl" id="transportation_slider">
                  <!-- Inside the containing div, add one div for each slide -->
                 <div class="swiper-wrapper transportation-box">
                    
                   @for($i=0;$i<count($transportation);$i++)
                 @for($j=0;$j<count($transportation[$i]);$j++)
                  <div class="swiper-slide selct">
                     <div class="citiesS">
                     <span class="checkCircle"></span>
                     <p class="priceTag"><span>Starting from</span> <span class='transportation-price-data'>
                        <currency-symobol>{{session('currency_sign')}}</currency-symobol>
                        <price>{{(int)(session('change_price')*$transportation[$i][$j]['price'])}}</price>
                     </p>
                      <a href="javascript:void(0);" class="info-cities transport-info" type="activity" data="{{$transportation[$i][$j]['id']}}"><i class="fa-solid fa-circle-info"></i> Details</a>
                     <img src="{{url('')}}/transportation-image/images/{{$transportation[$i][$j]['image']}}">                    
                     <h3 class="text-center citiesName"></h3>
                     <a href="{{$transportation[$i][$j]['link']}}" class="bookBtn" target="_blank">Book</a>
                     <a href="javascript:void(0)" class="addTotrip add-transportation-btn" data="{{$transportation[$i][$j]['id']}}" onclick="transportation(this)">Add to your trip</a>
                   </div>
                  </div>
                 @endfor
                 @endfor
                  
                  
                  

                  </div>
                  
                
                 <!-- If we need navigation buttons -->
                  <div class="swiper-button-prev" id="tr_sl_prev">
                     <i class="fas fa-sort-up"></i>
                  </div>
                  <div class="swiper-button-next" id="tr_sl_next">
                     <i class="fas fa-sort-up"></i>
                  </div>
               
               </div>
               <div class="sTbudget" style="">
                  <b>{{session('currency_sign')}}<span class="transportation-total-price price">0</span></b> <span style=""><i class="fas fa-coins ml-2"></i></span>
               </div>
            </div>
            <!-- Close -->
            <div class="text-center">
               <a href="/transport" class="btn btn-default">Previous</a>
            
               <button class="btn btn-default mt-3 mb-3 form-submit-btn" style="background: #006994;box-shadow: none;" type="submit">Done</button>
            </div>
         </form>
      </div>
   </section>
</main>

<script>
   // Basic initialization is like this:
   // $('.your-class').slick();
   
   // I added some other properties to customize my slider
   // Play around with the numbers and stuff to see
   // how it works.
   $("#acc_sl_prev").click(function(){
     $(".accomodation-box").slick("slickPrev");
   
   });
   $('.accomodation-box').slick({
     infinite: true,
     slidesToShow: 3, // Shows a three slides at a time
     slidesToScroll: 1, // When you click an arrow, it scrolls 1 slide at a time
     arrows: true, // Adds arrows to sides of slider
     dots: false // Adds the dots on the 

   });
</script>
<script type="text/javascript">


// ------------- RESET PRE SELECTED DATA --------------//
if(sessionStorage.getItem("accomodation")!=null){
  sessionStorage.removeItem("accomodation");
}
if(sessionStorage.getItem("transportation")!=null){
  sessionStorage.removeItem("transportation");
}
if(sessionStorage.getItem("fooddrink")!=null){
  sessionStorage.removeItem("fooddrink");
}
if(sessionStorage.getItem("tour_and_activity")!=null){
  sessionStorage.removeItem("tour_and_activity");
}
// -------------- END RESET PRESELECTED DATA------------//

  
  
   var data=JSON.parse(sessionStorage.getItem("tour"));
   if(data==null){
    window.location.href="/";
   
   }else{
      if(data.transportation.length==0){
      window.location.href="/transport";
     }
   }
   $(".edit-tour-btn").click(function(){
   swal({
    title: "Are you sure To Edit Trip ?",
    text: "Your All Selected Trip Data Will Be Losts",
    icon: "warning",
    buttons: true,
    dangerMode: true,
   })
   .then((willDelete) => {
    if (willDelete) {
      sessionStorage.removeItem('tour');
      sessionStorage.removeItem('city_details');
   
      sessionStorage.removeItem('tour_details');
   
      window.location.href="/";
     
    } 
    else {
      swal("Continue On Your Trip ");
    }
   });
   });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
<script>
   

    
   // Swiper: Slider
   // $("#acc_sl_prev").click(function(){

   // });
   $(document).ready(function() {
    
      new Swiper('.total-day-slider', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 0,
        breakpoints: {
            1920: {
                slidesPerView: 1,
                spaceBetween: 0
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        }
    });
// Swiper: Slider
    new Swiper('#accomodation_slider', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 0,
        breakpoints: {
            1920: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        }
    });
     new Swiper('#transportation_slider', {
        loop: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        slidesPerView: 4,
        paginationClickable: true,
        spaceBetween: 0,
        breakpoints: {
            1920: {
                slidesPerView: 3,
                spaceBetween: 0
            },
            1028: {
                slidesPerView: 2,
                spaceBetween: 0
            },
            480: {
                slidesPerView: 1,
                spaceBetween: 0
            }
        }
    });
   
});

     
</script>
<script>
   $(document).ready(function() {
    $('#city-carousel').carousel('pause');
    
   // Swiper: Slider
     new Swiper('.activities_slider', {
         loop: true,
         nextButton: '.swiper-button-next',
         prevButton: '.swiper-button-prev',
         slidesPerView: 4,
         paginationClickable: true,
         spaceBetween: 0,
         breakpoints: {
             1920: {
                 slidesPerView: 3,
                 spaceBetween:0
             },
             1028: {
                 slidesPerView: 2,
                 spaceBetween: 0
             },
             720: {
                 slidesPerView: 1,
                 spaceBetween: 0
             }
         }
     });
   });
   
</script>
<script>
   $(document).ready(function() {
    
   // Swiper: Slider
     new Swiper('#food_slider', {
         loop: true,
         nextButton: '.swiper-button-next',
         prevButton: '.swiper-button-prev',
         slidesPerView: 4,
         paginationClickable: true,
         spaceBetween: 0,
         breakpoints: {
             1920: {
                 slidesPerView: 3,
                 spaceBetween:0
             },
             1028: {
                 slidesPerView: 2,
                 spaceBetween: 0
             },
             720: {
                 slidesPerView: 1,
                 spaceBetween: 0
             }
         }
     });
   });
   
</script>
<script>
   $(document).ready(function() {
    
   // Swiper: Slider
     new Swiper('#transport_slider', {
         loop: true,
         nextButton: '.swiper-button-next',
         prevButton: '.swiper-button-prev',
         slidesPerView: 4,
         paginationClickable: true,
         spaceBetween: 0,
         breakpoints: {
             1920: {
                 slidesPerView: 3,
                 spaceBetween:0
             },
             1028: {
                 slidesPerView: 2,
                 spaceBetween: 0
             },
             720: {
                 slidesPerView: 1,
                 spaceBetween: 0
             }
         }
     });
   });
   
</script>
<script>
   $(document).ready(function() {
   // Swiper: Slider
     new Swiper('.daysSlider', {
         loop: true,
         nextButton: '.swiper-button-next',
         prevButton: '.swiper-button-prev',
         slidesPerView: 1,
         paginationClickable: true,
         spaceBetween: 0,
         breakpoints: {
             1920: {
                 slidesPerView: 1,
                 spaceBetween:0
             },
             1028: {
                 slidesPerView: 1,
                 spaceBetween: 0
             },
             480: {
                 slidesPerView: 1,
                 spaceBetween: 0
             }
         }
     });
   });
   
</script>
<script>
   window.addEventListener("beforeunload", this.onUnload);


onUnload = e => { 
    e.preventDefault();
  // how to stop refresh the page from here and i should not show alert message.

   //it is showing alert message. i no need to show the alert.
    e.returnValue = "sure do you want to reload?";   
    
 }

  
  //end previous check
   //------------- ADD ACCOMODATION -----------//
   //check accomodation exist or not 
   function accomodationExist(date) {
         var arr=sessionStorage.getItem("accomodation");
         arr=JSON.parse(arr);
  return arr.some(function(el) {
    return el.date === date;
  }); 
}
   //end check accomodation 
   //check tour and activity exist or not 
   function tourExist(tour) {
         var arr=sessionStorage.getItem("tour_and_activity");
         arr=JSON.parse(arr);
  return arr.some(function(el) {
    return el.tour === tour;
  }); 
}
   //end check accomodation 

   //food and drink check
    function foodExist(fooddrink) {
         var arr=sessionStorage.getItem("fooddrink");
         arr=JSON.parse(arr);
  return arr.some(function(el) {
    return el.fooddrink === fooddrink;
  }); 
}
   //end food and drink check

   //transportation check
    function transportExist(transportation) {
         var arr=sessionStorage.getItem("transportation");
         arr=JSON.parse(arr);
  return arr.some(function(el) {
    return el.transportation === transportation;
  }); 
}
   //end transportation check

  function accomodation(link){

    if($(link).hasClass("add-accomodation-btn")){
        if(sessionStorage.getItem("accomodation")!=null){
         var pre_selected;
         var data=JSON.parse(sessionStorage.getItem("accomodation"));
         var date=$(".total-day .swiper-slide-active span").attr("date");
      
         var accomodation=$(link).attr("data");
         
      
         if(accomodationExist(date)){
             
              alert("This is already for "+date+" Select other Date");
            

         }
         else{
            $(link).removeClass("add-accomodation-btn");
            $(link).addClass("remove-accomodation-btn");
            var prev_date=date;
            var total_price=Number($(".accomodation-total-price").text());
            data.push({"date":date,"accomodation":(accomodation)});
            sessionStorage.setItem("accomodation",JSON.stringify(data));
            $(link).text("Remove Trip");
             $(link).css("background","green");
            var price=parseInt($(link).parent().find("price").text());
            total_price=total_price+price;
            $(".accomodation-total-price").text(total_price);
              
            $(".total-price").text(total_price);
             total_budget();

          


            

         }
 
         

      }
      else{
         $(link).removeClass("add-accomodation-btn");
            $(link).addClass("remove-accomodation-btn");
          var total_price=Number($(".accomodation-total-price").text());
         var date=$(".total-day .swiper-slide-active span").attr("date");
       
         var accomodation=$(link).attr("data");
         var all_data=[{"date":date,"accomodation":(accomodation)}];
          $(link).text("Remove Trip");
             $(link).css("background","green");
            var price=parseInt($(link).parent().find("price").text());
            total_price=total_price+price;
            $(".accomodation-total-price").text(total_price);
            
            $(".total-price").text(total_price);
             total_budget();
            var a=[date];
         sessionStorage.setItem("a",JSON.stringify(a));
         
         sessionStorage.setItem("accomodation",JSON.stringify(all_data));

      }

      }
      else{
         //remove selected accomodation
       
           var accomodation_id=($(link).attr("data"));
        
          var data=JSON.parse(sessionStorage.getItem("accomodation"));
          var index="";
           const removeIndex = data.findIndex( item => item.accomodation === accomodation_id );
            data.splice(removeIndex,1);
           if(data.length==0){
            data=[];
            sessionStorage.setItem("accomodation",JSON.stringify(data));
            $(link).addClass("add-accomodation-btn");
            $(link).removeClass("remove-accomodation-btn");
            $(link).text("Add to your trip");
            $(link).css("background","#fa8128");
           }
           else{
            sessionStorage.setItem("accomodation",JSON.stringify(data));
             $(link).addClass("add-accomodation-btn");
            $(link).removeClass("remove-accomodation-btn");
            $(link).text("Add to your trip");
            $(link).css("background","#fa8128");

           }
           var total_price=Number($(".accomodation-total-price").text());

             var price=Number($(link).parent().find("price").text());
             total_price=total_price-price;
        $(".accomodation-total-price").text(total_price);
            
            $(".total-price").text(total_price);
             total_budget();
           

          
      
      }
    
    
  }
   //---------- ADD ACCOMODATION -------------------//

   //------------ TOUR AND ACTIVITY -----------------//
      function tour_and_activity(link){
          var date=$(".total-day .swiper-slide-active span").attr("date");
         if($(link).hasClass("add-tour-and-activity-btn")){
             if(sessionStorage.getItem("tour_and_activity")!=null){
               if(tourExist($(link).attr("data"))){
                  alert("This Tour And Activity Already Added");
               }
               else{

                  var data=sessionStorage.getItem("tour_and_activity");
                  data=JSON.parse(data);

                   var object={"date":date,"tour":$(link).attr("data")};
                   data.push(object);
                   
                 sessionStorage.setItem("tour_and_activity",JSON.stringify(data));
                 $(link).removeClass("add-tour-and-activity-btn");
               $(link).addClass("remove-tour-and-activity-btn");
               $(link).text("Remove trip");
                $(link).css("background","green");
                //add price
                 var total_price= Number($(".activity-total-price").text());
              var price=parseInt($(link).parent().find("price").text());
            total_price=total_price+price;
            $(".activity-total-price").text(total_price);
            
    
            
            //total add price
           
                 total_budget();
            //end price
               }

        }
        else{
           var object=[{"date":date,"tour":$(link).attr("data")}];
           sessionStorage.setItem("tour_and_activity",JSON.stringify(object));
             $(link).removeClass("add-tour-and-activity-btn");
            $(link).addClass("remove-tour-and-activity-btn");
            $(link).text("Remove trip");
            $(link).css("background","green");
            //add total price
             var total_price=Number($(".activity-total-price").text());

             var price=Number($(link).parent().find("price").text());
           
            total_price=Number(total_price+price);
            
           Number($(".activity-total-price").text(total_price));
            total_budget();
            //end total price  

        }
         }
         else{
            //remove tour and activity
             //remove selected accomodation
       
           var tour_and_activity_id=($(link).attr("data"));
        
          var data=JSON.parse(sessionStorage.getItem("tour_and_activity"));
          var index="";
           const removeIndex = data.findIndex( item => item.tour === tour_and_activity_id );
            data.splice(removeIndex,1);
           if(data.length==0){
            data=[];
            sessionStorage.setItem("tour_and_activity",JSON.stringify(data));
            $(link).addClass("add-tour-and-activity-btn");
            $(link).removeClass("remove-tour-and-activity-btn");
            $(link).text("Add to your trip");
            $(link).css("background","#fa8128");
           }
           else{
            sessionStorage.setItem("tour_and_activity",JSON.stringify(data));
             $(link).addClass("add-accomodation-btn");
            $(link).removeClass("remove-tour-and-activity-btn");
            $(link).text("Add to your trip");
            $(link).css("background","#fa8128");

           }
          var total_price=Number($(".activity-total-price").text());

             var price=Number($(link).parent().find("price").text());
           
            total_price=Number(total_price-price);
         
           Number($(".activity-total-price").text(total_price));
            total_budget();
            //end remove tour and activity

         }
      }
   // --------------- TOUR AND ACTIVITY --------------//




/// food and drink ///
 
      function fooddrink(link){
          var date=$(".total-day .swiper-slide-active span").attr("date");
         if($(link).hasClass("add-food-and-drink-btn")){
             if(sessionStorage.getItem("fooddrink")!=null){
               if(foodExist($(link).attr("data"))){
                  alert("This Food And Drink Already Added");
               }
               else{

                  var data=sessionStorage.getItem("fooddrink");
                  data=JSON.parse(data);

                   var object={"date":date,"fooddrink":$(link).attr("data")};
                   data.push(object);
                   
                 sessionStorage.setItem("fooddrink",JSON.stringify(data));
                 $(link).removeClass("add-food-and-drink-btn");
               $(link).addClass("remove-food-and-drink-btn");
               $(link).text("Remove trip");
                $(link).css("background","green");
                //add price
                 var total_price= Number($(".food-and-drink-total-price").text());
              var price=parseInt($(link).parent().find("price").text());
            total_price=total_price+price;
            $(".food-and-drink-total-price").text(total_price);
               total_budget();
            
           
               }

        }
        else{
           var object=[{"date":date,"fooddrink":$(link).attr("data")}];
           sessionStorage.setItem("fooddrink",JSON.stringify(object));
             $(link).removeClass("add-food-and-drink-btn");
            $(link).addClass("remove-food-and-drink-btn");
            $(link).text("Remove trip");
            $(link).css("background","green");
            //add total price
             var total_price=Number($(".food-and-drink-total-price").text());

             var price=Number($(link).parent().find("price").text());
           
            total_price=Number(total_price+price);
            
           Number($(".food-and-drink-total-price").text(total_price));
            //end total price  
             total_budget();

        }
         }
         else{
            //remove tour and activity
             //remove selected accomodation
       
           var fooddrink_id=($(link).attr("data"));
        
          var data=JSON.parse(sessionStorage.getItem("fooddrink"));
          var index="";
           const removeIndex = data.findIndex( item => item.fooddrink === fooddrink_id );
            data.splice(removeIndex,1);
           if(data.length==0){
            data=[];
            sessionStorage.setItem("fooddrink",JSON.stringify(data));
            $(link).addClass("add-food-and-drink-btn");
            $(link).removeClass("remove-food-and-drink-btn");
            $(link).text("Add to your trip");
            $(link).css("background","#fa8128");
           }
           else{
            sessionStorage.setItem("fooddrink",JSON.stringify(data));
             $(link).addClass("add-food-and-drink-btn");
            $(link).removeClass("remove-food-and-drink-btn");
            $(link).text("Add to your trip");
            $(link).css("background","#fa8128");

           }
          var total_price=Number($(".food-and-drink-total-price").text());

             var price=Number($(link).parent().find("price").text());
           
            total_price=Number(total_price-price);
         
           Number($(".food-and-drink-total-price").text(total_price));
            total_budget();
            //end remove tour and activity

         }
      }
  



//end food and drink//


//------------------add transportation=------------------//
function transportation(link){
          var date=$(".total-day .swiper-slide-active span").attr("date");
         if($(link).hasClass("add-transportation-btn")){
             if(sessionStorage.getItem("transportation")!=null){
               if(transportExist($(link).attr("data"))){
                  alert("This Transportation Already Added");
               }
               else{

                  var data=sessionStorage.getItem("transportation");
                  data=JSON.parse(data);

                   var object={"date":date,"transportation":$(link).attr("data")};
                   data.push(object);
                   
                 sessionStorage.setItem("transportation",JSON.stringify(data));
                 $(link).removeClass("add-transportation-btn");
               $(link).addClass("remove-transportation-btn");
               $(link).text("Remove trip");
                $(link).css("background","green");
                //add price
                 var total_price= Number($(".transportation-total-price").text());
              var price=parseInt($(link).parent().find("price").text());
            total_price=total_price+price;
            $(".transportation-total-price").text(total_price);
            
            total_budget();

          
               }

        }
        else{
           var object=[{"date":date,"transportation":$(link).attr("data")}];
           sessionStorage.setItem("transportation",JSON.stringify(object));
             $(link).removeClass("add-transportation-btn");
            $(link).addClass("remove-transportation-btn");
            $(link).text("Remove trip");
            $(link).css("background","green");
            //add total price
             var total_price=Number($(".transportation-total-price").text());

             var price=Number($(link).parent().find("price").text());
           
            total_price=Number(total_price+price);
            
           Number($(".transportation-total-price").text(total_price));
            total_budget();
            //end total price  

        }
         }
         else{
            //remove tour and activity
             //remove selected accomodation
       
           var transportation_id=($(link).attr("data"));
        
          var data=JSON.parse(sessionStorage.getItem("transportation"));
          var index="";
           const removeIndex = data.findIndex( item => item.transportation === transportation_id );
            data.splice(removeIndex,1);
           if(data.length==0){
            data=[];
            sessionStorage.setItem("transportation",JSON.stringify(data));
            $(link).addClass("add-transportation-btn");
            $(link).removeClass("remove-transportation-btn");
            $(link).text("Add to your trip");
            $(link).css("background","#fa8128");
           }
           else{
            sessionStorage.setItem("transportation",JSON.stringify(data));
             $(link).addClass("add-transportation-btn");
            $(link).removeClass("remove-transportation-btn");
            $(link).text("Add to your trip");
            $(link).css("background","#fa8128");

           }
          var total_price=Number($(".transportation-total-price").text());

             var price=Number($(link).parent().find("price").text());
           
            total_price=Number(total_price-price);
         
           Number($(".transportation-total-price").text(total_price));
            total_budget();
            //end remove tour and activity

         }
      }
  


///----------------- end transportation ------------------//



















   $('.selct').click(function(){
     $(this).toggleClass('selected');
    
   });
   //get date difference
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
   console.log(difference_day);
   //end date difference

   for(i=1;i<=difference_day;i++){
    var day_date= new Date(date1.getTime()+(i*24*60*60*1000));
    day_date=day_date.toLocaleDateString('pt-PT');
    var box=`<div class="swiper-slide">
                           Day <span class='day-no' date="`+day_date+`">`+i+`</span>
                        </div>`;
                        $(".total-day").append(box);
   }
   
</script>
<script>
   $('.editB').click(function(){
     $('.editInput').removeAttr('readonly');
     $('.editInput').focus();
   });
</script>
<script></script>
<script type="text/javascript">
   //cut open modal
   $(".transportation-modal-cut-btn").click(function(){
     $("#trip_summary_details_show_modal_transportation_modal").modal("hide");
   });
   $(".fooddrink-modal-cut-btn").click(function(){
     $("#trip_summary_details_show_modal_food_and_drink_modal").modal("hide");
   });
   $(".activity-modal-cut").click(function(){
     $("#trip_summary_details_show_modal_activity_modal").modal("hide");
   });
   
   $(".accomodation-cut-btn").click(function(){
     $("#trip_summary_details_show_modal_accomodation_modal").modal("hide");
   });
   
   
   //accomodation details show
   $(".accomodation-info").each(function(){
       $(this).click(function(){
        var accomodation_id=$(this).attr("data");
   
        $.ajax({
         type:"GET",
         url:"/trip-summary-details/get-accomodation-details?accomodation="+accomodation_id,
         success:function(response){
   console.log(response);
           $(".accomodation-carousel-inner-box").html(`<div class="carousel-item active" style="background-image: url({{url('')}}/accomodation-image/images/`+response.data.image+`"></div>`);
            $(".accomodation-type").html(response.data.type);
            $(".accomodation-name").html(response.data.name);
            $(".accomodation-btn-link").attr("href",response.data.link);
            $(".accomodation-phone").html(response.data.phone);
            $(".accomodation-address").html(response.data.address);
            if(response.data.rating>4){
             $(".accomodation-rating").html(response.data.rating+"  Very Good");
            }
            else{
             $(".accomodation-rating").html(response.data.rating+"  Good");
            }
            
            $(".accomodation-rating-price").html("$"+response.data.price);
            for(i=0;i<Number(response.data.star);i++){
             var star=document.createElement("I");
             star.className="fa fa-star text-warning";
             $(".accomodation-star").append(star);
   
            }
   
            $("#trip_summary_details_show_modal_accomodation_modal").modal("show");
   
   
         }
        });
   
        
       });
     });
   //end accomodatiion details show


    //activity details fetch and show in activity modal
     $(".activity-info").each(function(){
       $(this).click(function(){
        var activity_id=$(this).attr("data");
        $.ajax({
         type:"GET",
         url:"/trip-summary-details/get-activity-details?activity="+activity_id,
         success:function(response){
   
           $(".activity-carousel-inner-box").html(`<div class="carousel-item active" style="background-image: url({{url('')}}/tour-and-activit-image/images/`+response.data.image+`"></div>`);
            $(".tour-and-activity-type").html(response.data.type);
            $(".tour-and-activity-name").html(response.data.name);
            $(".tour-activity-btn-link").attr("href",response.data.link);
            $(".activity-phone").html(response.data.phone);
            $(".activity-address").html(response.data.address);
            if(response.data.rating>4){
             $(".activity-rating").html(response.data.rating+"  Very Good");
            }
            else{
             $(".activity-rating").html(response.data.rating+"  Good");
            }
            
            $(".activity-price").html("$"+response.data.price);
            for(i=0;i<Number(response.data.star);i++){
             var star=document.createElement("I");
             star.className="fa fa-star text-warning";
             $(".activity-star").append(star);
   
            }
   
            $("#trip_summary_details_show_modal_activity_modal").modal("show");
   
   
         }
        });
   
        
       });
     });
   
     //end activity details fetch and show in activity modal


     //start ajax call food & drink details fecth and show in food & drink modal
       $(".food-info").each(function(){
       $(this).click(function(){
        var fooddrink_id=$(this).attr("data");
   
        $.ajax({
         type:"GET",
         url:"/trip-summary-details/get-fooddrink-details?fooddrink="+fooddrink_id,
         success:function(response){
   console.log(response);
           $(".fooddrink-carousel-inner-box").html(`<div class="carousel-item active" style="background-image: url({{url('')}}/food-drink-image/images/`+response.data.image+`"></div>`);
            $(".fooddrink-type").html(response.data.type);
            $(".fooddrink-name").html(response.data.name);
            $(".fooddrink-btn-link").attr("href",response.data.link);
            $(".fooddrink-phone").html(response.data.phone);
            $(".fooddrink-address").html(response.data.address);
            if(response.data.rating>4){
             $(".fooddrink-rating").html(response.data.rating+"  Very Good");
            }
            else{
             $(".fooddrink-rating").html(response.data.rating+"  Good");
            }
            
            $(".fooddrink-rating-price").html("$"+response.data.price);
            for(i=0;i<Number(response.data.star);i++){
             var star=document.createElement("I");
             star.className="fa fa-star text-warning";
             $(".fooddrink-star").append(star);
   
            }
   
            $("#trip_summary_details_show_modal_food_and_drink_modal").modal("show");
   
   
         }
        });
   
        
       });
     });
   
     //end ajax call food & drink details fetch ans show in food & drink modal
   

//start ajax call transportation details fecth and show in transportation modal
       $(".transport-info").each(function(){
       $(this).click(function(){
        var transportation_id=$(this).attr("data");
       
        $.ajax({
         type:"GET",
         url:"/trip-summary-details/get-transportation-details?transportation="+transportation_id,
         success:function(response){
   console.log(response);
           $(".transportation-carousel-inner-box").html(`<div class="carousel-item active" style="background-image: url({{url('')}}/transportation-image/images/`+response.data.image+`"></div>`);
            $(".transportation-type").html(response.data.type);
            $(".transportation-name").html(response.data.name);
            $(".transportation-btn-link").attr("href",response.data.link);
            $(".transportation-phone").html(response.data.phone);
            $(".transportation-address").html(response.data.address);
            if(response.data.rating>4){
             $(".transportation-rating").html(response.data.rating+"  Very Good");
            }
            else{
             $(".transportation-rating").html(response.data.rating+"  Good");
            }
            
            $(".transportation-price").html("$"+response.data.price);
            for(i=0;i<Number(response.data.star);i++){
             var star=document.createElement("I");
             star.className="fa fa-star text-warning";
             $(".transportation-star").append(star);
   
            }
   
            $("#trip_summary_details_show_modal_transportation_modal").modal("show");
   
   
         }
        });
   
        
       });
     });
   
     //end ajax call transportation details fetch ans show in transportation modal

// total budget add function call

function total_budget(){
  var total_price=0;
  
  //calculate accomodation price
  $(".price").each(function(){
    total_price+=parseInt($(this).text());

  });
  $(".total-price").text(total_price);
}

//end total budget count 


//----------- TRIP SUMARRY FORM SUBMIT -------------------//

$(".trip-summary-form").submit(function(e){
  e.preventDefault();
    if(sessionStorage.getItem("accomodation")!=null){
    var accomodation=JSON.parse(sessionStorage.getItem("accomodation"));
    if("{{Session::has('user_login')}}"!=""){

       $.ajax({
        type:"POST",
        url:"/trip/done",
        data:{
          accomodation:JSON.parse(sessionStorage.getItem("accomodation")),
          tour_and_activity:JSON.parse(sessionStorage.getItem("tour_and_activity")),
          fooddrink:JSON.parse(sessionStorage.getItem("fooddrink")),
          transportation:JSON.parse(sessionStorage.getItem("transportation")),
          _token:$("body").attr("data"),
        },
        success:function(response){
          console.log(response);
          return false;
          if(response.status){
            window.location.href="/mytrip-plan";

          }
          else{
            swal({
                 title: "Something is wrong try again",
                
                
                  dangerMode: true,
                   animation: "slide-from-top",

                   


});

          }
        }
       });
 

  }
  else{
    $(".login-modal-link").click();
  }
 
   
 
  }
  else{
    $(".swal-button .swal-button--confirm .swal-button--danger").html('<i class="bi bi-x-circle"></i>');
     swal({
                 title: "Select Accomodation,Tour And Activity,Food & Drink and Transportation for all Date",
                
                
                  dangerMode: true,
                   animation: "slide-from-top",

                   


});

  }
  

});





//------------END TRIP SUMARRY PAGE SUBMIT ---------------//




//------------------ PREVENT PAGE RELOAD BY PRESS CTRL AND F5 -------------------------------------//

 window.onload = function () {  
        document.onkeydown = function (e) {  
            return (e.which || e.keyCode) != 116; 

        };  

        $(document).on("keydown", function(e) {
        e = e || window.event;
        if (e.ctrlKey) {
            var c = e.which || e.keyCode;
            if (c == 82) {
                e.preventDefault();
                e.stopPropagation();
            }
        }
    });

        window.onbeforeunload=(e)=>{

     
  return "Write something clever here...";
}
        

    }  

  
   
   //city carousl slide coding start here
   $(".day-prev-btn").click(function(){
    $("#city-carousel").carousel("prev");
   });

    $(".day-next-btn").click(function(){
    $("#city-carousel").carousel("next");
   });

   //end city carousel slide coding start here
   
</script>
@endsection
@section("modal")
<!-- Modal -->
<div class="modal fade" id="trip_summary_details_show_modal_accomodation_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Accomodation Info</h5>
            <button type="button" class="close accomodation-cut-btn"  aria-label="Close" onclick="cutModal()">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p>
               <img src="{{url('')}}/front-assets/assets/img/hotel_icon.png" class="lbImg" width='40px'>
               <b style="margin-right:16px;"><span>Accomodation Type</span></b><span class="accomodation-type"></span>
            </p>
            <div class="d-flex justify-bw align-center">
               <div class="w-50" style="text-align:justify;">
                  <p><b style="margin-right: 16px;">Hotel</b> Shereton</p>
                  <p><b style="margin-right: 16px;">All Inclusive</b> 
                     <span class="accomodation-star"></span>
                  </p>
                  <p><b style="margin-right: 16px;">Phone Number</b> <span class="accomodation-phone"></span></p>
                  <p><b style="margin-right: 16px;">Address</b><span class="accomodation-address"></span></p>
                  <p><b style="margin-right: 16px;">Rating</b> <span class="accomodation-rating"></span></p>
                  <p><b style="margin-right: 16px;">Starting From</b> <span class="accomodation-price"></span> (Per person, Per Night)</p>
                  <a href="javascript:void(0);" class="btn bookBtn accomodation-btn-link" target="_blank">Book</a>
               </div>
               <div class="w-50">
                  <div style="padding-left:16px;">
                     <!-- ======= Hero Section ======= -->
                     <section id="hero">
                        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                           <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                           <div class="carousel-inner accomodation-carousel-inner-box" role="listbox">
                              <!-- Slide 1 -->
                           </div>
                           <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                           <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                           </a>
                           <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                           <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                           </a>
                        </div>
                     </section>
                     <!-- End Hero -->               
                  </div>
               </div>
            </div>
            <div class="mapouter mt-5">
               <div class="gmap_canvas">
                  <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Marrakech&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  <style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}</style>
                  <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style>
               </div>
            </div>
         </div>
         <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->
      </div>
   </div>
</div>
<!--- activity modal ---------------------->
<!-- Modal -->
<div class="modal fade" id="trip_summary_details_show_modal_activity_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="activity-modal-title">Tour & Activity Info</h5>
            <button type="button" class="close activity-modal-cut"  aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p>
               <img src="{{url('')}}/front-assets/assets/img/hotel_icon.png" class="lbImg" width='40px'>
               <b style="margin-right:16px;"><span>Tour & Activity Type</span></b><span class="tour-and-activity-type"></span>
            </p>
            <div class="d-flex justify-bw align-center">
               <div class="w-50" style="text-align:justify;">
                  <p><b style="margin-right: 16px;">Tour & Activity</b> <span class="tour-and-activity-name"></span></p>
                  <p><b style="margin-right: 16px;">All Inclusive</b> 
                     <span class="activity-star">
                     </span>
                  </p>
                  <p><b style="margin-right: 16px;">Phone Number</b> <span class="activity-phone"></span></p>
                  <p><b style="margin-right: 16px;">Address</b><span class="activity-address"></span></p>
                  <p><b style="margin-right: 16px;">Rating</b> <span class="activity-rating"></span></p>
                  <p><b style="margin-right: 16px;">Starting From</b> <span class="activity-price"></span> (Per person, Per Night)</p>
                  <a href="" class="btn bookBtn tour-activity-btn-link" target="_blank">Book</a>
               </div>
               <div class="w-50">
                  <div style="padding-left:16px;">
                     <!-- ======= Hero Section ======= -->
                     <section id="hero">
                        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                           <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                           <div class="carousel-inner activity-carousel-inner-box" role="listbox">
                           </div>
                           <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                           <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                           </a>
                           <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                           <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                           </a>
                        </div>
                     </section>
                     <!-- End Hero -->               
                  </div>
               </div>
            </div>
            <div class="mapouter mt-5">
               <div class="gmap_canvas">
                  <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Marrakech&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  <style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}</style>
                  <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style>
               </div>
            </div>
         </div>
         <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->
      </div>
   </div>
</div>
<!--------end activity modal ------------------>
<!---  food and drink modal show ------------>
<!-- Modal -->
<div class="modal fade" id="trip_summary_details_show_modal_food_and_drink_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Food & Drinks Info</h5>
            <button type="button" class="close fooddrink-modal-cut-btn"  aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p>
               <img src="{{url('')}}/front-assets/assets/img/hotel_icon.png" class="lbImg" width='40px'>
               <b style="margin-right:16px;"><span>Food & Drink Type</span></b> <span class="fooddrink-type"></span>
            </p>
            <div class="d-flex justify-bw align-center">
               <div class="w-50" style="text-align:justify;">
                  <p><b style="margin-right: 16px;">Food & Drink</b> <span class="fooddrink-name"></span></p>
                  <p><b style="margin-right: 16px;">All Inclusive</b> 
                     <span class="fooddrink-star"></span>
                  </p>
                  <p><b style="margin-right: 16px;">Phone Number</b> <span class="fooddrink-phone"></span></p>
                  <p><b style="margin-right: 16px;">Address</b> <span class="fooddrink-address"></span></p>
                  <p><b style="margin-right: 16px;">Rating</b> <span class="fooddrink-rating"></span></p>
                  <p><b style="margin-right: 16px;">Starting From</b> <span class="fooddrink-price"></span> (Per person, Per Night)</p>
                  <a href="" class="btn bookBtn fooddrink-btn-link" target="_blank">Book</a>
               </div>
               <div class="w-50">
                  <div style="padding-left:16px;">
                     <!-- ======= Hero Section ======= -->
                     <section id="hero">
                        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                           <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
                           <div class="carousel-inner fooddrink-carousel-inner-box" role="listbox">
                           </div>
                           <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                           <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                           </a>
                           <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                           <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                           </a>
                        </div>
                     </section>
                     <!-- End Hero -->               
                  </div>
               </div>
            </div>
            <div class="mapouter mt-5">
               <div class="gmap_canvas">
                  <iframe width="100%" height="300" id="gmap_canvas" src="https://maps.google.com/maps?q=Marrakech&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                  <style>.mapouter{position:relative;text-align:right;height:300px;width:100%;}</style>
                  <style>.gmap_canvas {overflow:hidden;background:none!important;height:300px;width:100%;}</style>
               </div>
            </div>
         </div>
         <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->
      </div>
   </div>
</div>
<!---- end food and drink modal show ----------->
<!--  transportation modal show ------------->
<!-- Modal -->
<div class="modal fade" id="trip_summary_details_show_modal_transportation_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-xl" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="modal-title">Transportation info</h5>
            <button type="button" class="close transportation-modal-cut-btn"  aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <p>
               <img src="{{url('')}}/front-assets/assets/img/hotel_icon.png" class="lbImg" width='40px'>
               <b style="margin-right:16px;"><span>Public Transportation Type</span></b><span class="transportation-type"></span> 
            </p>
            <div class="d-flex justify-bw align-center">
               <div class="w-50" style="text-align:justify;">
                  <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  <!-- <p><b style="margin-right: 16px;">Transportation Name</b> <span class="transportation-name"></span></p>
                  <p><b style="margin-right: 16px;">All Inclusive</b> 
                     <span class="transportation-star"></span>
                  </p>
                  <p><b style="margin-right: 16px;">Phone Number</b><span class="transportation-phone"></span></p>
                  <p><b style="margin-right: 16px;">Address</b> <span class="transportation-address"></span></p>
                  <p><b style="margin-right: 16px;">Rating</b> <span class="transportation-rating"></span></p>
                  <p><b style="margin-right: 16px;">Starting From</b> <span class="transportation-price"></span> (Per person, Per Night)</p> -->
                  <a href="" class="btn bookBtn transportation-btn-link" target="_blank">Book</a>
               </div>
               <div class="w-50">
                  <div style="padding-left:16px;">
                     <!-- ======= Hero Section ======= -->
                     <section id="hero">
                        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
                           <ol class="carousel-indicators " id="hero-carousel-indicators"></ol>
                           <div class="carousel-inner transportation-carousel-inner-box" role="listbox">
                           </div>
                           <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                           <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
                           </a>
                           <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                           <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
                           </a>
                        </div>
                     </section>
                     <!-- End Hero -->               
                  </div>
               </div>
            </div>
            <hr/>
            <h4 class=" mt-5">Travelers Comments</h4>
            <div class="d-flex justify-bw align-center">
               <div class="w-50">
                  <div class="com_section">
                     <div class="comments">
                        <div class="d-flex">
                           <div class="user_images mr-5">
                              <img src="http://triplookydev.zobofy.com/user/Car_rentals.jpg">
                           </div>
                           <div class="user_comments">
                              <p class="mb-0">
                                 <span>John</span> 
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                              </p>
                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                              tempor incididunt ut labore et dolore magna aliqua.</p>
                           </div>
                        </div>
                     </div>
                     <div class="comments">
                        <div class="d-flex">
                           <div class="user_images mr-5">
                              <img src="http://triplookydev.zobofy.com/user/Car_rentals.jpg">
                           </div>
                           <div class="user_comments">
                              <p class="mb-0">
                                 <span>John</span> 
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                              </p>
                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
                           </div>
                        </div>
                     </div>
                     <div class="comments">
                        <div class="d-flex">
                           <div class="user_images mr-5">
                              <img src="http://triplookydev.zobofy.com/user/Car_rentals.jpg">
                           </div>
                           <div class="user_comments">
                              <p class="mb-0">
                                 <span>John</span> 
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                                 <i class="fa fa-star yellow"></i>
                              </p>
                              <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="w-50">
                  <div class="fares">
                     <img src="http://triplookydev.zobofy.com/transportation-image/images/71650608182.jfif">
                  </div>
               </div>
            </div>
         </div>
         <!-- <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div> -->
      </div>
   </div>
</div>
<!---end transportation  modal show ----------------->
@endsection