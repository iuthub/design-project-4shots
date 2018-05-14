jQuery(document).ready(function(){

	"use strict";
	$('.search-icon').click(function(){
		$('.search').slideToggle("slow");
	});
	$('.close').click(function(){
		$('.search').slideUp("slow");
	});


	$(window).scroll(function(){

		var top=$(window).scrollTop();
		if(top>=60)
		{
			$(".full-width-navbar").addClass('secondary');
			$("header ul li a").addClass('first');
			$(".full-width-navbar ul ul li a").addClass('secondary');
			$(".full-width-navbar .brand").addClass('first');
		}
		else if($(".full-width-navbar").hasClass('secondary','first')){

			$(".full-width-navbar").removeClass('secondary');
			$("header ul li a").removeClass('first');
			$(".full-width-navbar ul ul li a").removeClass('secondary');
			$(".full-width-navbar .brand").removeClass('first');
		
		}
	});
	
		$(".recently-carousel").carouFredSel({
		responsive:true,
		width:'100%;',
		circular:true,
		 prev    : {  
        button  : '#recenty-prev',  
        key     : "left"  
    },  
    next    : {  
        button  : 'recently-right',  
        key     : "right"  
    },  
		scroll:
		       {
		       	items:1,
		       	duration:500,
		       	pauseOnHover:true
		       },
		       auto:true,
		       items:
		              {
		              	visible:    
		              			{
		              				min:1,
		              				max:4
		              				},
		              	height:"variable",
		                }
	});


		$('#menu').slicknav({
		label:'',
	});
	
	
	window.onscroll = function() {myFunction()};

   var navbar = document.getElementById("navbar-summerhouse");
    var sticky = navbar.offsetTop;
    function myFunction() {

        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky");
        } else {
            navbar.classList.remove("sticky");
        }
    }





});

