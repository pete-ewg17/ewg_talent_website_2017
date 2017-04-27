/*===========
  BACK TO TOP 
=============*/
$(document).ready(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#back-to-top').fadeIn();
		} else {
			$('#back-to-top').fadeOut();
		}
	});
	// scroll body to 0px on click
	$('#back-to-top').click(function () {
		$('#back-to-top').tooltip('hide');
		$('body,html').animate({
			scrollTop: 0
		}, 800);
		return false;
	});
});

/*===========
  BACK TO TOP 
=============*/

$(document).ready(function () {
	$(window).scroll(function () {
		if ($(this).scrollTop() > 100) {
			$('#register').fadeIn();
		} else {
			$('#register').fadeOut();
		}
	});
});



/*=================
  SMOOTH SCROLL
=================*/
$(document).ready(function () {
	// Add smooth scrolling to all links
	$("a").on('click', function (event) {

		// Make sure this.hash has a value before overriding default behavior
		if (this.hash !== "") {
			// Prevent default anchor click behavior
			event.preventDefault();

			// Store hash
			var hash = this.hash;

			// Using jQuery's animate() method to add smooth page scroll
			// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function () {

				// Add hash (#) to URL when done scrolling (default click behavior)
				window.location.hash = hash;
			});
		} // End if
	});
});

/*=================
  ANIMATE ON SCROLL
=================*/
AOS.init({
	duration: 1200
});
AOS.init({
	disable: 'mobile'
});

/*===========
  FORM 
=============*/

$(function () {
	  $('#final_ans').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "../technology/contact.php";
            var f = $(this).serializeArray();
            $("#loading_div").css('display', 'block');
            $("#next").css('display', 'none');
            $.post(url, {
                fields:f
            }, function (result) {
            $("#final_ans").html("<div class='row'><h2 class='col-md-8 col-md-offset-2'>Thanks for registering! It's great to have you on board.<br/></br>Check your inbox to get things started.</h2></div>");
                $("#loading_div").css('display', 'none');
                $("#next").css('display', 'block');    
            });
            return false;
        }
    });
   
});

/*===========
  Counter 
=============*/

 var searchBox;
$(document).ready(function () {
	if($(".counter-num").length > 0) {
	$('.counter-num').counterUp({
		delay: 10,
		time: 1000
	});
	}
	 if($("#address").length > 0) {
    	 var input =document.getElementById('address');
    	  searchBox = new google.maps.places.Autocomplete((input),{types: ['geocode']});
    	searchBox.addListener('place_changed', fillInAddress);
    }
});

  function fillInAddress() {
    var place = searchBox.getPlace();
        // Get each component of the address from the place details
        // and fill the corresponding field on the form.
        for (var i = 0; i < place.address_components.length; i++) {
          var addressType = place.address_components[i].types[0];
          var str = $("#"+addressType).data('st');
          if($("#"+addressType).length > 0){
            var val = place.address_components[i][str];
            document.getElementById(addressType).value = val;
            }
        }
  }

/*===========
  Client Logo Carousel 
=============*/
$(document).ready(function () {
	$('.customer-logos').slick({
		slidesToShow: 4,
		slidesToScroll: 2,
		autoplay: true,
		autoplaySpeed: 1000,
		arrows: false,
		dots: false,
		pauseOnHover: true,
		responsive: [{
			breakpoint: 768,
			settings: {
				slidesToShow: 3
			}
        }, {
			breakpoint: 520,
			settings: {
				slidesToShow: 2
			}
        }]
	});
});

/*===========
  GET STARTED 
=============*/

$(".btn").click(function() {
  var selected = $(this).data('ref');
	if($(this).hasClass('selected')) {
  	$(this).removeClass('selected');
    $("#"+selected).prop('checked',false);
    if(!$("#next").hasClass('disabled')) {
    	$("#next").addClass('disabled');
    }
  } else {
    $(this).addClass('selected');
    $("#"+selected).prop('checked',true);
    if($(".selected").length > 0) {
    	$("#next").removeClass('disabled');
    } else {
    	$("#next").addClass('disabled');
    }
  }
});

$("body").on('click','.disabled',function(e) {
	 e.preventDefault();
	;
});

$("#next").click(function() {
	if(!$(this).hasClass('disabled')) {
		$(".wizard_form").submit();
	} else {
	 alert("You must choose an option")
	}
});

function check_ans2() {
	if($("#number").val() != "") {
		$("#next").removeClass('disabled');
    } else {
    if(!$("#next").hasClass("disabled")) {
    	$("#next").addClass('disabled');
    	}	
	}
}

$("#number").keyup(function() {
	check_ans2();
});	
$("#number").change(function() {
	check_ans2();
});	

$(".mandatory").change(function() {
	var comp = check_ans3();
	if(comp) {
		$("#next").removeClass('disabled');
	} else {
	 if(!$("#next").hasClass("disabled")) {
    	$("#next").addClass('disabled');
    	}
	}
});

function check_ans3() {
var comp = true;
	$.each($(".mandatory"),function(i,item) {
		if($(item).val() == '') {
			comp = false;
		}
	});	
	return comp;
}
