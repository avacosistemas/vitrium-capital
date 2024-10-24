<script>
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
		} 
		
        $('.tipo_de_depto').text(titulo);
		$('.numerodepto').text(" "+ nivel + mostrar);

        // mostrar = ".tipologia" + tipologia;
        var img_url = `assets/images/proyectos/01_libertador/tipologia/tipologia_uf_${nivel}${mostrar}.png`;
		
        $('.d_item img').prop('src', img_url);
        console.log({nivel, tipologia, mostrar, titulo, img_url});
        mostrar = '.carousel_deptos';

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
            responsive: [{
                breakpoint: 768,
                settings: {
                    centerMode: false,
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
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
</script>