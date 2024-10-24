<script>
	$(document).ready(function() {

		

	


	});

	//abre
	$('.un_thumb_depto').on('click', function(){
		console.log('hice click');
		$('.panel_pop_container').css({'transform': 'translateX(0%)'});
		$('.carousel_deptos' ).hide();
		var mostrar = $(this).data('depto');
		var titulo;
		if(mostrar == "mono1" || mostrar == "mono2"){
			titulo = "Monoambiente";
		}else if( mostrar == "mono3" || mostrar == "mono4" || mostrar == "dorm1"){
			titulo = "1 Dormitorio";
		}else{
			titulo = "2 Dormitorios";
		} 
		$('.tipo_de_depto').text(titulo);

		mostrar = "."+ mostrar;
		console.log(mostrar);


		$(mostrar).show();


		$(mostrar).slick({
	        infinite: true,
	        slidesToShow: 1,
	        slidesToScroll: 1,
	        appendArrows: $('.carousel_deptos_arrows'),
	        prevArrow: '<button type="button" class="slick-prev"></button>',
	        nextArrow: '<button type="button" class="slick-next"></button>',
	      });

		
		
		$('.carousel_imagenes').slick({
	        infinite: true,
	        slidesToShow: 3,
	        slidesToScroll: 1,
	        appendArrows: $('.carousel_imagenes_arrows'),
	        prevArrow: '<button type="button" class="slick-prev"></button>',
	        nextArrow: '<button type="button" class="slick-next"></button>',
	        responsive: [
	        {
	          breakpoint: 768,
	          settings: {
	            centerMode: false,
	            slidesToShow: 1,
	            slidesToScroll: 1
	          }
	        }
	        // You can unslick at a given breakpoint now by adding:
	        // settings: "unslick"
	        // instead of a settings object
	      ]
	    });
	});
	

	
	//cierra
	$('.cerrar_depto').on('click', function(){
		event.stopPropagation();
		$('.panel_pop_container').css({'transform': 'translateX(-100%)'});

		$('.carousel_deptos' ).each(function() {
			if ($(this).hasClass("slick-initialized")){
				$(this).slick('unslick');
			}
		});
		$('.carousel_imagenes').slick('unslick');
	});

	//$('.carousel_deptos').
</script>