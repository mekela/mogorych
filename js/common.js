$(document).ready(function() {
	//fancybox
	$('.fancybox').fancybox({
		helpers: {
			overlay: {
				locked: false
			}
		}
	});

	//bxslider
	$('.bxslider').bxSlider({
	  nextSelector: '#slider-next',
	  prevSelector: '#slider-prev',
	  nextText: 'Onward →',
	  prevText: '← Go back'
	});

	/* - - - - - - - - - - - - - -   valid  - - - - - - - - - - - - - - - - */
	$('.send_button').click(function(){
     var parentClass=$(this).attr('rel');
	 var paramsFancy={
	    'scrolling':0,
	    'autoScale': true,
	    'transitionIn': 'elastic',
	    'transitionOut': 'elastic',
	    'speedIn': 500,
	    'speedOut': 300,
	    'autoDimensions': true,
	    'centerOnScroll': true,
	    'href' : '#thanks',
	    'padding' : '0',
	    'height' : 'auto',
	    helpers: {
	            overlay: {
	              locked: false
	            }
	        }
	    };
	    validate=1;
	    validate_msg='';
	    form=$('#'+$(this).attr('rel'));
	     jQuery.each(form.find('.validate'), function(key, value) {
	        if($(this).val()==''){
	        	validate_msg+=$(this).attr('title')+'\n';validate=0;
	            $(this).focus();
	            $(this).addClass('red_input');
	        }else{
	            $(this).removeClass('red_input');
	        }
	    });
	    if(validate==1){
	        $.ajax({
	            url: 'ajax.php',
	            data: 'action=send_form&'+form.serialize(),
	            success: function(data){
	                $.fancybox.open(paramsFancy);
	                $('.validate').val('');
	            }
	        });
	        
	    }else{
	        /*alert(validate_msg);*/
	    } 
	});

// map

ymaps.ready(init); 
        var myMap; 
        function init () { 
            myMap = new ymaps.Map("map", { //див с id="map"
                    center: [55.681433, 37.582480], // тут центр
                    behaviors: ['default', 'scrollZoom'], // скроллинг колесом
                    zoom: 14 // тут масштаб
                });
            myMap.controls // добавим всяких кнопок, в скобках их позиции в блоке
        		.add('zoomControl', { left: 5, top: 5 }) //Масштаб
        		.add('typeSelector') //Список типов карты
        		.add('mapTools', { left: 35, top: 5 }) // Стандартный набор кнопок
        		.add('searchControl'); // Строка с поиском
	        /* Создаем кастомные метки */
	        myPlacemark0 = new ymaps.Placemark([55.681433, 37.582480], { 
	        // Создаем метку с такими координатами 
	                // balloonContent: '<div class="ballon"><img src="img/hh.jpg" class="ll"/><span>Заголовок метки 1</span><br/><p>Немного инфы о том, о сем. Лорем ипсум чото там.</p><img class="close" onclick="myMap.balloon.close()" src="img/close.png"/></div>' // сдесь содержимое балуна в формате html, все стили в css
	            	}, 
	        {
	            	iconImageHref: 'img/icons/map-label.png', // картинка иконки
	            	iconImageSize: [54, 72], // размер иконки
	            	iconImageOffset: [-32, -64], // позиция иконки
	                // balloonContentSize: [270, 99], // размер нашего кастомного балуна в пикселях
	                // balloonLayout: "default#imageWithContent", // указываем что содержимое балуна кастомное
	                // balloonImageHref: 'img/ballon1.png', // Картинка заднего фона балуна
	                // balloonImageOffset: [-65, -89], // смещание балуна, надо подогнать под стрелочку
	                // balloonImageSize: [260, 89], // размер картинки-бэкграунда балуна
	                // balloonShadow: false,
	                // balloonAutoPan: false // для фикса кривого выравнивания
	                });
	        /* Добавляем */
	        myMap.geoObjects
	        	.add(myPlacemark0);

	        /* Фикс кривого выравнивания кастомных балунов */
			// myMap.geoObjects.events.add([
		 //        'balloonopen'
		 //    ], function (e) {
		 //        var geoObject = e.get('target');
		 //        myMap.panTo(geoObject.geometry.getCoordinates(), {
		 //                                    delay: 0
		 //                                });
		 //    });
    }
});