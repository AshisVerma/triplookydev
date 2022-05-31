if(sessionStorage.getItem("city_details")!=null){
       		sessionStorage.removeItem("city_details");
       		var all_select_city=$("label.active");
       		alert(all_select_city.length);
       	}
       	else{
       		var all_select_city=$("label.active");
       		alert(all_select_city.length);

       	}

       	return false;
       
       	var data=JSON.parse(sessionStorage.getItem("tour"));
		
	   $.ajax({
	   	type:"POST",
	   	url:"/user/city",
	   	data:{
	   		_token:$("body").attr("data"),
	   		all_city_details:all_city_details,
	   		city:data.city,
	   	},
	   	success:function(response){
	   		if(response=="success"){
	   			sessionStorage.setItem("tour",JSON.stringify(data));

       	 window.location.href="/trip-start";
	   		}
	   		
	   	}
	   });