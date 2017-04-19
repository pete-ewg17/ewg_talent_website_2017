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

    $('#contact-form').validator();

    $('#contact-form').on('submit', function (e) {
        if (!e.isDefaultPrevented()) {
            var url = "technology/contact.php";
            var f = $(this).serializeArray();
            $("#loading_div").css('display', 'block');
            $("#submitButton").css('display', 'none');
            $.post(url, {
                fields:f
            }, function (result) {
                $("#loading_div").css('display', 'none');
                $("#submitButton").css('display', 'block');
                $("form").trigger("reset"); 
                $("#myModal").modal('hide');
                $("#contact-form").reset();
                    alert("Thank you");
                
            });

            return false;
        }
    })
});

/*===========
  Counter 
=============*/
$(document).ready(function () {
	$('.counter-num').counterUp({
		delay: 10,
		time: 1000
	});
});

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
  update_ans();
});

$("body").on('click','.disabled',function(e) {
	 e.preventDefault();
});

function update_ans() {
 var output = "";
    $(".selected_btn").each(function(i,item) {
    	if($(this).prop('checked')) {
      	output = output+$(this).val()+",";
      }
    });
     $("#answer").html(output);
}

