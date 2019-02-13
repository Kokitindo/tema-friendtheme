	<script type="text/javascript" src="https://www.belanjabekas.com/bima-themes/sitampan/vendors/slick/slick.min.js"></script>


	<script type="text/javascript">
	$(function () {
		$('[data-toggle="tooltip"]').tooltip();


		$('.share_copy').on('click', function() {
			swal("Copied!", 'Url Berhasil di Copy', "success")
		});



	})

	function open_filter(){
		$('.box-sidebar-filter').show();
		$('.mobi-filter').hide();
		$('body').css({
			'position':'fixed',
			'width':'100%',
			'height':'100%',
			'overflow':'hidden'
		});
	}

	function close_filter(){
		$('.box-sidebar-filter').hide();
		$('.mobi-filter').show();
		$('body').removeAttr('style');
	}

		function readURLUtama(input, thisElem) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {
	               	//thisElem.parent().parent().children('.bb-img-new-product-utama').children('img').attr("src", e.target.result);
	            }

	            reader.readAsDataURL(input.files[0]);

							var blobOrFile=input.files[0];

							loadImage.parseMetaData(blobOrFile, function(data) {
							    //default image orientation
							    var orientation = 0;
							    //if exif data available, update orientation
							    if (data.exif) {
							        orientation = data.exif.get('Orientation');
							    }
							    var loadingImage = loadImage(
							        blobOrFile,
							        function(canvas) {
							            //here's the base64 data result
							            var base64data = canvas.toDataURL('image/jpeg');
							            //here's example to show it as on imae preview
							            var img_src = base64data.replace(/^data\:image\/\w+\;base64\,/, '');
							            thisElem.parent().parent().children('.bb-img-new-product-utama').children('img').attr('src', base64data);
							        }, {
							            //should be set to canvas : true to activate auto fix orientation
							            canvas: true,
							            orientation: orientation
							        }
							    );
							});

	        }
	    }

	    $("#bb-img-file-utama").change(function(){
	        readURLUtama(this, $(this));
	    });

			function readURL(input, thisElem) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {
								//thisElem.parent().css("background-image", "url("+e.target.result+")");
	               	thisElem.parent().addClass('bb-files-uploaded');
	               	thisElem.parent().parent().children('.btn').show();
	            }

	            reader.readAsDataURL(input.files[0]);

							var blobOrFile=input.files[0];

							loadImage.parseMetaData(blobOrFile, function(data) {
									//default image orientation
									var orientation = 0;
									//if exif data available, update orientation
									if (data.exif) {
											orientation = data.exif.get('Orientation');
									}
									var loadingImage = loadImage(
											blobOrFile,
											function(canvas) {
													//here's the base64 data result
													var base64data = canvas.toDataURL('image/jpeg');
													//here's example to show it as on imae preview
													var img_src = base64data.replace(/^data\:image\/\w+\;base64\,/, '');
													//thisElem.parent().parent().children('.bb-img-new-product-utama').children('img').attr('src', base64data);

													thisElem.parent().css("background-image", "url("+base64data+")");

											}, {
													//should be set to canvas : true to activate auto fix orientation
													canvas: true,
													orientation: orientation
											}
									);
							});



	        }
	    }

			function readURLonEDIT(input, thisElem) {
	        if (input.files && input.files[0]) {
	            var reader = new FileReader();

	            reader.onload = function (e) {
	            	thisElem.parent().parent().children('.thedisplay').css("background-image", "url("+e.target.result+")");
	               	thisElem.parent().hide();
									thisElem.parent().parent().children('.thedisplay').show();
	               	thisElem.parent().parent().children('.btn').show();
	            }

	            reader.readAsDataURL(input.files[0]);
	        }
	    }

			$(".new-product-form .bb-img-file").change(function(){
	        readURL(this, $(this));
	    });

			$(".edit-product-form .bb-img-file").change(function(){
	        readURLonEDIT(this, $(this));
	    });

	    $(".new-product-form .bb-remove-img-file").click(function() {
	    	var thisElem = $(this);
	    	thisElem.parent().children('.bb-files-container-2').css("background-image", "url()");
	        thisElem.parent().children('.bb-files-container-2').removeClass('bb-files-uploaded');
	        thisElem.hide();
	    });

			function delete_image_item(idselector){
				$('.display-item-image-'+idselector).css("background-image", "url()");
				$('.display-item-image-'+idselector).hide();
				$('.btn-img-'+idselector).hide();
				$('.form-item-image-'+idselector).show();
				$('.last_photo_list_'+idselector).attr('name','deleted_photo_list[]');
				$('.form-item-image-'+idselector+' input').val('');

	    }

		function openlogin(){
			$('.box-black-layer').show();
			$('.box-black-layer>.container .box-login').show();
			$('.thebtnlogin').attr('onclick',"closelogin()");
		}

		function closelogin(){
			$('.box-black-layer').hide();
			$('.box-black-layer>.container .box-login').hide();
			$('.thebtnlogin').attr('onclick',"openlogin()");
		}

		function opencart(){

		}


		function get_postage(origin,destination,courier,weight,courier_type,container=''){
			console.log(origin+'-'+destination+'-'+courier+'-'+weight+'-'+courier_type);

			var qt=parseInt($('.quantity').val());
			weight=qt*parseInt(weight);

			if(parseInt(courier_type)===0){
				$(container+' '+'.courier_type').html('<option value="" disabled selected>Load..</option>');
			}
			$(container+' '+'.estimation').html("-");
			$(container+' '+'.postage').html("-");

			jQuery.get('/get_postage?origin='+origin+'&originType=subdistrict&destination='+destination+'&destinationType=subdistrict&weight='+weight+'&courier='+courier, function(data) {
				console.log(data);

				$.each(data.rajaongkir.results, function (key, val) {
					var HTMLcourier_type='<option value="" selected disabled>Pilih:</option>';
					$.each(val.costs, function (k, type) {
						HTMLcourier_type+='<option value="'+type.service+'">'+type.service+'</option>';
						console.log(type);

						if(courier_type==type.service){

							$.each(type.cost, function (kk, data_post) {
									console.log(data_post);


									var shipping_free=parseInt($(container+' '+'.shipping_free').val());
									var qt=parseInt($(container+' '+'.quantity').val());
									var price=parseInt($(container+' '+'.price_item').val());
									var total_price=qt*price;
									var postage=data_post.value;

									if(shipping_free==1){
										postage="0 (Free Ongkir)";
									}

									var total_payment=total_price+parseInt(postage);


									if(courier=="pos"){
										$(container+' '+'.estimation_type').hide();
									}else{
										$(container+' '+'.estimation_type').show();
									}
									$(container+' '+'.estimation').html(data_post.etd);
									$(container+' '+'.postage').html(rupiah(postage));
									$(container+' '+'.total_payment').html(rupiah(total_payment));


							});

						}


					});

					if(parseInt(courier_type)===0){
						$(container+' '+'.courier_type').html(HTMLcourier_type);
					}

				});
			});

		}



		function get_postage_selltous(origin,destination,courier,weight,courier_type,container='',courier_type_redisplay=0){

			if(weight==0){
				alert('anda harus isi berat badan');
			}


			console.log(origin+'-'+destination+'-'+courier+'-'+weight+'-'+courier_type);

			var qt=parseInt($('.quantity').val());
			weight=qt*parseInt(weight);

			if(parseInt(courier_type)===0){
				$(container).html('Load..');
			}
			$('.estimation').html("-");
			$('.postage').html("-");

			jQuery.get('/get_postage?origin='+origin+'&originType=subdistrict&destination='+destination+'&destinationType=subdistrict&weight='+weight+'&courier='+courier, function(data) {
				console.log(data);

				$.each(data.rajaongkir.results, function (key, val) {
					var HTMLcourier_type='<ul class="list-group">';
					$.each(val.costs, function (k, type) {
						var is_checked='';
						if(type.service==courier_type){
							is_checked='checked';
						}
						HTMLcourier_type+='<li class="list-group-item"> <label style="display: block; cursor: pointer; margin: -10px -15px; padding: 10px 15px; width: auto; max-width: none;"><input type="radio" name="kurir_type" onchange="postage_kurir_type($(this).val())" value="'+type.service+'" '+is_checked+' /> &nbsp;'+type.service+'</label> </li>';
						console.log(type);

						if(courier_type==type.service){

							$.each(type.cost, function (kk, data_post) {
									console.log(data_post);


									var shipping_free=parseInt($( '.shipping_free').val());
									var qt=parseInt($( '.quantity').val());
									//var price=parseInt($( '.price_item').val());
									//var total_price=qt*price;
									var postage=data_post.value;

									if(shipping_free==1){
										postage="0 (Free Ongkir)";
									}

									//var total_payment=total_price+parseInt(postage);


									if(courier=="pos"){
										$( '.estimation_type').hide();
									}else{
										$( '.estimation_type').show();
									}
									$( '.estimation').html(data_post.etd);
									$( '.postage').html(rupiah(postage));
									//$( '.total_payment').html(total_payment);


							});

						}


					});
					HTMLcourier_type+='</ul>';

					if(parseInt(courier_type)===0||parseInt(courier_type_redisplay)==1){
						$(container).html(HTMLcourier_type);
					}

				});
			});

		}





		function select_address(id_address,thelink,container=''){
			$(container+' '+'.box-area-display-address').show();
			$(container+' '+'.box-alert-display-address').hide();
console.log(container+' '+'.box-area-display-address');
			var teksori=$(thelink).html();
			$(container+' '+thelink).html('Sedang memuat data..');
			$(container+' .link_list_address').css('font-weight','normal');

			if(id_address=="profile"){
				var url_target='/transaction/ajax_my_profile_address/';
			}else{
				var url_target='/transaction/ajax_my_address_shipping/'+id_address;
			}

			jQuery.get(url_target, function(data) {
				$.each(data, function (key, val) {
					$(container+' '+'.address_title').html(val.title);
					$(container+' '+'.address_name_of_person').html(val.name_of_person);
					$(container+' '+'.address_phone_of_person').html(val.phone_of_person);
					$(container+' '+'.address_address').html(val.address);

					var village_name=val.village_name;
					var district_name=val.district_name;
					var city_name=val.city_name;
					var province_name=val.province_name;

					$(container+' '+'.address_village').html(village_name.toLowerCase() );
					$(container+' '+'.address_district').html(district_name.toLowerCase() );
					$(container+' '+'.address_city').html(city_name.toLowerCase() );
					$(container+' '+'.address_province').html(province_name.toLowerCase() );
					$(container+' '+'.address_postal_code').html(val.postal_code);

					$(container+' '+'.form_name_of_person').val(val.name_of_person);
					$(container+' '+'.form_phone_of_person').val(val.phone_of_person);
					$(container+' '+'.form_address').val(val.address);
					$(container+' '+'.form_village').val(val.village);
					$(container+' '+'.form_district').val(val.district);
					$(container+' '+'.form_district_alias_id').val(val.district_alias_id);
					$(container+' '+'.form_city').val(val.city);
					$(container+' '+'.form_province').val(val.province);
					$(container+' '+'.form_postal_code').val(val.postal_code);
					$(container+' '+'.form_district_name').val(val.district_name);
					$(container+' '+'.form_city_name').val(val.city_name);
					$(container+' '+'.form_province_name').val(val.province_name);

					var origin=$(container+' '+'.origin_district_alias_id').val();
					var courier=$(container+' '+'.courier').val();
					var weight=$(container+' '+'.weight').val();

					get_postage(origin,val.district_alias_id,courier,weight,0,container);

					$(container+' '+thelink).html(teksori);
					$(container+' '+thelink).css('font-weight','bold');


				})

			});

			if($("#id_alamat_baru").length){
				$("#id_alamat_baru").val(id_address);
			}


		}


		function order_now(){

				jQuery.get('/transaction/ajax_my_address_shipping', function(data) {
					var list_address ='';
					$.each(data, function (key, val) {
						list_address+='<li><a href="javascript:;" class="link_list_address order_now_'+val.id+'" onclick="select_address('+val.id+',\'.order_now_'+val.id+'\');">'+val.title+'</a></li>';
					})
					$('.form-add-to-cart .list_my_address_shipping').html(list_address);
				});

				$('.form-add-to-cart').fadeIn();
				$('.bb-overlay').fadeIn('fast');
				$('body').addClass('bb-dialog-open');
				 $('.bb-dialog-close, .bb-dialog-open .bb-overlay').on('click', function() {
					$('.bb-overlay').fadeOut('fast');
					$('.form-add-to-cart').fadeOut();
					$('body').removeClass('bb-dialog-open');
				});
		}

		function load_address(container,parentcontainer){

				jQuery.get('/transaction/ajax_my_address_shipping', function(data) {
					var list_address ='';
					$.each(data, function (key, val) {
						list_address+='<li><a href="javascript:;" class="link_list_address order_now_'+val.id+'" onclick="select_address('+val.id+',\'.order_now_'+val.id+'\',\''+parentcontainer+'\');">'+val.title+'</a></li>';
					})
					$(container).html(list_address);
				});

		}


		function nego_now(){
			/*
				jQuery.get('/transaction/ajax_my_address_shipping', function(data) {
					var list_address ='';
					$.each(data, function (key, val) {
					    list_address+='<li><a href="javascript:;" class="link_list_address nego_now_'+val.id+'" onclick="select_address('+val.id+',\'.nego_now_'+val.id+'\');">'+val.title+'</a></li>';
					})
					$('.form-add-to-negotiation .list_my_address_shipping').html(list_address);
				});
*/
				$('.form-add-to-negotiation').fadeIn();
				$('.bb-overlay').fadeIn('fast');
				$('body').addClass('bb-dialog-open');
				 $('.bb-dialog-close, .bb-dialog-open .bb-overlay').on('click', function() {
					$('.bb-overlay').fadeOut('fast');
					$('.form-add-to-negotiation').fadeOut();
					$('body').removeClass('bb-dialog-open');
				});




		}


		function bid_now(){
			$('.form-add-to-bid').fadeIn();
			$('.bb-overlay').fadeIn('fast');
			$('body').addClass('bb-dialog-open');
			$('.bb-dialog-close, .bb-dialog-open .bb-overlay').on('click', function() {
				$('.bb-overlay').fadeOut('fast');
				$('.form-add-to-bid').fadeOut();
				$('body').removeClass('bb-dialog-open');
			});
		}
		



		$(document).ready(function () {

			$('img').bind('error', function(event) {
				$(this).attr('src','/bima-themes/sitampan/assets/img/noimageuser.png');
			})

			$('.bb-slider, .bb-top-items, .bb-other-items, .bb-single-picture-wrapper').show();

			$(window).scroll(function() {
			    if ($(this).scrollTop() >= 50) {
			        $('#bb-btn-scroll-up').fadeIn(200);
			    } else {
			        $('#bb-btn-scroll-up').fadeOut(200);
			    }
			});
			$('#bb-btn-scroll-up').click(function() {
			    $('body,html').animate({
			        scrollTop : 0
			    }, 500);
			});

			$('.the-black').click(function(){
				$('.box-black-layer').hide();
				$('.box-black-layer>.container>div').hide();
				$('.thebtnlogin').attr('onclick',"openlogin()");
				$('.thebtncart').attr('onclick',"opencart()");
			});


			$('.navbar-toggle').click(function() {
				$('.bb-panel').addClass('open');
				$('.bb-panel-overlay').addClass('open');
			})

			$('.bb-panel-overlay').on('click',function() {
				$('.bb-panel').removeClass('open');
				$('.bb-panel-overlay').removeClass('open');
			})

			//$('.menu-link').bigSlide();

			$('#bb-list-category').hover(function(ev) {
		        $(this).children().addClass('active');
		        $('.bb-overlay').fadeIn('fast');
		    }, function(ev) {
		        $(this).children().removeClass('active');
		        $('.bb-overlay').fadeOut('fast');
		    });

		    $('#bb-list-notif, #bb-logged-in').hover(function(ev) {
		        $(this).addClass('active');
		        $('.bb-overlay').fadeIn('fast');
		    }, function(ev) {
		        $(this).removeClass('active');
		        $('.bb-overlay').fadeOut('fast');
		    });







			$('.bb-slider').slick({
				arrows: false,
				dots:true,
				autoplay: true,
			  	autoplaySpeed: 5000,
			});


			$bb_top_items = $('.bb-top-items');
			bb_top_settings = {
					slidesToShow: 5,
					slidesToScroll: 1,
					autoplay: true,
					arrows: true,
					dots: false,
					autoplaySpeed: 4000,
					infinite: true,
					responsive: [
						{

							breakpoint: 1200,
							settings: {
								slidesToShow: 6
							}

						},{

							breakpoint: 991,
							settings: "unslick"

						},
					],
					refresh:true
			}



			$bb_other_items = $('.bb-other-items');
			bb_other_settings = {
				slidesToShow: 6,
				slidesToScroll: 1,
				autoplay: false,
				autoplaySpeed: 2000,
				infinite: true,
				arrows: true,
				responsive: [{

					breakpoint: 991,
					settings: "unslick"

				}]
			}
			$bb_top_items.slick(bb_top_settings);
			$bb_other_items.slick(bb_other_settings);

			  // reslick only if it's not slick()
			  $(window).on('resize', function() {

					if (!$bb_other_items.hasClass('slick-initialized')) {
			      return $bb_other_items.slick(bb_other_settings);
			    }
					if (!$bb_top_items.hasClass('slick-initialized')) {
			      return $bb_top_items.slick(bb_top_settings);
			    }
			  });




			$('.bb-single-items').slick({
			  	slidesToShow: 5,
			  	slidesToScroll: 1,
			  	autoplay: false,
			  	infinite: false,
			  	swipe: false,
			  	arrows: false,
			  	responsive: [{
			  		breakpoint: 992,
			      	settings: {
			        	slidesToShow: 3,
			        	arrows: true,
				      	swipe: true,
				      	infinite: true,
			      	}

			    }, {
			   		breakpoint: 768,
			      	settings: {
			        	slidesToShow: 2,
			        	arrows: true,
				      	swipe: true,
				      	infinite: true,
			      	}
			    },{
			   		breakpoint: 500,
			      	settings: {
			        	slidesToShow: 1,
			        	arrows: true,
				      	swipe: true,
				      	infinite: true,
			      	}
			    }]
			});

			$('.bb-single-picture-wrapper').slick({
				slidesToShow: 1,
			  	slidesToScroll: 1,
			  	arrows: false,
			  	dots: false,
			  	fade: true,
			  	asNavFor: '.bb-single',
			  	autoplay: false,
			  	responsive: [{
			   		breakpoint: 768,
			      	settings: {
			        	asNavFor: '',
			  			dots: false,
			  			autoplay: false,
			      	}
			    }]
			});

			/*$('.bb-single-picture-wrapper').slickLightbox({
				background:'rgba(0,0,0,.5)'
			}).on({
			    'show.slickLightbox': function(){
			    	console.log($(this));
			    }
			});*/

			$('.bb-single-picture-wrapper').magnificPopup({delegate: 'a', type:'image',gallery:{
				enabled:true,
				arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"><i class="fa fa-arrow-right"></i><i class="fa fa-arrow-left"></i></button>'

			}});




			$('.bb-single').slick({
				slidesToShow: 5,
			  	slidesToScroll: 1,
			  	autoplay: false,
			  	arrows: true,
			  	dots: false,
			  	// centerMode: true,
  				focusOnSelect: true,
			  	infinite: true,
			  	asNavFor: '.bb-single-picture-wrapper',
			});

			$('.bb-rating').rating();

			// $('.rrssb-buttons').rrssb({
			// 	    // required:
			// 	title: 'This is the email subject and/or tweet text',
			// 	    url: 'http://rrssb.ml/',

			// 	    // optional:
			// 	    description: 'Longer description used with some providers',
			// 	    emailBody: 'Usually email body is just the description + url, but you can customize it if you want'
			// });

			// This button will increment the value
		    $('.qtyplus').click(function(e){
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        fieldName = $(this).attr('field');
		        // Get its current value
		        var currentVal = parseInt($('input[name='+fieldName+']').val());
		        // If is not undefined
		        if (!isNaN(currentVal)) {
		            // Increment
		            $('input[name='+fieldName+']').val(currentVal + 1);
		        } else {
		            // Otherwise put a 0 there
		            $('input[name='+fieldName+']').val(0);
		        }
		    });
		    // This button will decrement the value till 0
		    $(".qtyminus").click(function(e) {
		        // Stop acting like a button
		        e.preventDefault();
		        // Get the field name
		        fieldName = $(this).attr('field');
		        // Get its current value
		        var currentVal = parseInt($('input[name='+fieldName+']').val());
		        // If it isn't undefined or its greater than 0
		        if (!isNaN(currentVal) && currentVal > 0) {
		            // Decrement one
		            $('input[name='+fieldName+']').val(currentVal - 1);
		        } else {
		            // Otherwise put a 0 there
		            $('input[name='+fieldName+']').val(0);
		        }
		    });

			var didScroll;
			  var lastScrollTop = 0;
			  var delta = 5;
			  var navbarHeight = $('header').outerHeight();

			  $(window).scroll(function(event){
			      didScroll = true;
			  });

			  setInterval(function() {
			      if (didScroll) {
			          hasScrolled();
			          didScroll = false;
			      }
			  }, 250);

			  function hasScrolled() {
			      var st = $(this).scrollTop();

			      // Make sure they scroll more than delta
			      if(Math.abs(lastScrollTop - st) <= delta)
			          return;

			      // If they scrolled down and are past the navbar, add class .nav-up.
			      // This is necessary so you never see what is "behind" the navbar.
			      if (st > lastScrollTop && st > navbarHeight){
			          // Scroll Down
			          $('header').removeClass('nav-down').addClass('nav-up');
			      } else {
			          // Scroll Up
			          if(st + $(window).height() < $(document).height()) {
			              $('header').removeClass('nav-up').addClass('nav-down');
			          }
			      }

			      lastScrollTop = st;
			  }
		})
	</script>
	<!--Start of Zendesk Chat Script-->
<!-- // disable zendesk
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5FXVdzOpPDnyFOkDfI14KTcA7wbrGcXg";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
-->
<!--End of Zendesk Chat Script-->