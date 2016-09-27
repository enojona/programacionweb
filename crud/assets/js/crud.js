//alert ("Holajs");
$(
	function (){
		//alert ("hola jquery");
        $ ("body").append(
     	    $("<h1>").text ("hola DOM"),
     	    $("<button>").attr("id","btnHola").text("saluda")
     	);
     	$("#btnHola").on("click",function(){
     		alert ("Hola DOM");

     	});
	} 
);
