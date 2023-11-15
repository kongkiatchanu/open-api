var YogaCare = function(){
	
	var BASE_URI ='https://open-api.cmuccdc.org/';
	var screenWidth = $( window ).width();
	
	var handleSidebarCollapse = function(){
		if(jQuery('#sidebarCollapse').length > 0){
			$('#sidebarCollapse').on('click', function () {
				$('#nevbarleft').toggleClass('active');
				$('#content').toggleClass('active');
				$(this).toggleClass('active');
				
				$('#mobileCloseBtn').on('click', function () {
					$('#nevbarleft').removeClass('active');
				});
			});
		}		
	}
	
	var handleScrollTop = function (){
		
		var scrollTop = jQuery(".scroltop");
		/* page scroll top on click function */	
		scrollTop.on('click',function() {
			jQuery("html, body").animate({
				scrollTop: 0
			}, 1000);
			return false;
		})

		jQuery(window).bind("scroll", function() {
			var scroll = jQuery(window).scrollTop();
			if (scroll > 900) {
				jQuery(".scroltop").fadeIn(1000);
			} else {
				jQuery(".scroltop").fadeOut(1000);
			}
		});
		/* page scroll top on click function end*/
	}
	
	var handleNavbarNav = function(){
		
		if(jQuery('.navbar-nav').length > 0){
			$(".navbar-nav a").on('click', function(event) {
				
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
					});
					} // End if
			});
		}
	}
	
	var handleDeznavScroll = function(){
		if(jQuery('.deznav-scroll').length > 0){
			const qs = new PerfectScrollbar('.deznav-scroll');
			qs.isRtl = false;
		}
	}

	var handleRegister = function(){
		if(jQuery('#frm_register').length > 0){
			console.log('frm_register');
			var container= $("div.containerz");

			$("#frm_register").validate({
				errorContainer: container,
				errorLabelContainer: $("ol", container),
				wrapper: "li",
				meta: "validate",
				rules: {
					access_email: {
							remote: {
								type: "GET",
								url: BASE_URI+"main/checkEmail",
								data: {
									access_email: function() {
										return $("#access_email").val();
									}
								}
							}
					},
					access_password : {
						minlength : 6
					},
					access_password_c : {
						minlength : 6,
						equalTo : "#access_password"
					}
				},
				messages: {
					access_email :{
						remote:'อีเมล์นี้ลงใช้ลงทะเบียนไปแล้ว กรุณาตรวจสอบข้อมูลอีกครั้ง'
					},
					access_password : {
						minlength : 'กรุณากรอกรหัสผ่านอย่างน้อย 6 ตัว'
					},
					access_password_c : {
						minlength : 'กรุณากรอกรหัสผ่านอย่างน้อย 6 ตัว',
						equalTo : "ยืนยันรหัสผ่านไม่ถูกต้อง"
					}
				},
				submitHandler: function( form ) { form.submit(); }
			});
		}
	}
	
	/* Function ============ */
	return {
		init:function(){
			handleSidebarCollapse();
			handleScrollTop();
			handleNavbarNav();
			handleDeznavScroll();
			handleRegister();
		},

		load:function(){
			
		},
		
		resize:function(){
			
		}
	}

}();

jQuery(document).ready(function() {
    'use strict';
	
	YogaCare.init();
	
});