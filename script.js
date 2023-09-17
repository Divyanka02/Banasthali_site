  //preloader
        setTimeout(function(){
            $('#preloader').fadeToggle();
        }, 4000);



        //main navbar
        $(document).ready(function(){
			$(".navigation .navbar .logo-toggle-container .toggle-box").click(function(){
				$(".navigation .menu").stop().slideToggle();
			});
		});



        //second navbar
        function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}