<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

 $accomodation_min_price=session()->get("accomodation_min_price");
      $accomodation_max_price=session()->get("accomodation_max_price");
      $activity_min_price=session()->get("activity_min_price");
      $activity_max_price=session()->get("activity_max_price");
      $fooddrink_min_price=session()->get("fooddrink_min_price");
      $fooddrink_max_price=session()->get("fooddrink_max_price");
      $transportation_min_price=session()->get("transportation_min_price");
      $transportation_max_price=session()->get("transportation_max_price");

      

     
      foreach(session()->get('city') as $city_list){
         foreach(session('accomodation') as $key=> $accomodation_list){
       $accomodation[$key]=Accomodation::select("id","image","name","price","link","city")->where("type",$accomodation_list)->where("city",$city_list)->whereBetween("price",[$accomodation_min_price,$accomodation_max_price])->get()->toArray();

      }
      }

    
        foreach(session()->get("city") as $city_list){
           foreach (session('transportation') as $key => $transportation_list) {
       $transportation[$key]=Transportation::select("id","image","name","price","link","city")->where("type",$transportation_list)->whereBetween("price",[$transportation_min_price,$transportation_max_price])->get()->toArray();
      
      }
   
        }

       foreach(session()->get('city') as $city_list){
         foreach (session('activity') as $key => $activity_list) {
       $activity[$key]=TourAndActivity::select("id","image","name","price","link","city")->where("type",$activity_list)->where("city",$city_list)->whereBetween("price",[$activity_min_price,$activity_max_price])->get()->toArray();
      }
       }


       foreach(session()->get('city') as $city_list){
        foreach (session('fooddrink') as $key => $fooddrink_list) {
        $fooddrink[$key]=FoodDrink::select("id","image","name","price","link","city")->where("type",$fooddrink_list)->where("city",$city_list)->whereBetween("price",[$fooddrink_min_price,$fooddrink_max_price])->get()->toArray();
      }
       }