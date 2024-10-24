<script>
	$(document).ready(function() {

		

	


	});

	//abre
	$('.un_thumb_depto').on('click', function(){

        $('.panel_pop_container').css({'transform': 'translateX(0%)'});
		$('.carousel_deptos' ).hide();
		var mostrar = $(this).data('depto');
		var tipologia =  $(this).data('tipologia');
		var nivel =  $(this).data('nivel');
		var titulo;
		if(tipologia == "monoambiente"){
			titulo = "Monoambiente"; 
		}else if(tipologia == "1dormitorio"){
			titulo = "1 Dormitorio";
		}else if(tipologia == "2dormitorios"){
			titulo = "2 Dormitorios";
		}else if(tipologia == "3dormitorios"){
			titulo = "3 Dormitorios";
		} 
		$('.tipo_de_depto').text(titulo);
		$('.numerodepto').text(" "+ nivel + mostrar);

		

		mostrar = ".tipologia" + tipologia;
		console.log('Mostrar: ' + mostrar);


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