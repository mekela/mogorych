<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="viewport" content="width=1024">
	<title>АППАРАТЫ "МАГАРЫЧ" МАШКОВСКОГО</title>
	<!--Favicon-->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<!--End Favicon-->
	<!-- CSS -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&amp;subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/jquery.fancybox.css" media="screen" >
	<link rel="stylesheet" href="css/jquery.bxslider.css" media="screen" >
	<link href="css/animate.css" rel="stylesheet" media="screen">
	<link href="css/screen.css" rel="stylesheet" media="screen">
	<link href="css/style.css" rel="stylesheet" media="screen">
	<!-- END OF CSS -->
	<!--SCRIPT -->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.fancybox.pack.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="http://api-maps.yandex.ru/2.0/?load=package.full&amp;lang=ru-RU" type="text/javascript"></script>
	<script src="js/count.js"></script>
	<script src="js/common.js"></script>
	<script src="js/wow.min.js"></script>
      <script>
      
      </script>
	<!--[if IE]>  
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>  
	<![endif]--> 
	<!-- END OF SCRIPT -->
</head>
<body>
<div class="wrapper">
<!--header-->
<header class="header">
	<div class="fixed_header">
		<div class="container">
			<a href="/" class="logo"><img src="img/logo.png" alt=""></a>
			<div class="header_phone">
				<a href="tel:+74997046741" class="tel">+7 (499) 704-67-41</a>
				<small>с  8.00 до 20.00 (Мск)</small>
			</div>
			<nav class="header_nav">
				<ul>
					<li><a href="#aparat">Устройство аппарата</a></li>
					<li><a href="#buy">Купить</a></li>
					<li><a href="#recipes">рецепты</a></li>
					<li><a href="#sert">сертификаты</a></li>
				</ul>
			</nav>
		</div>
	</div>			
	<div class="container">
		<div class="slogan">
			<h6>АППАРАТЫ "МАГАРЫЧ" МАШКОВСКОГО <span>С БЕСПЛАТНОЙ ДОСТАВКОЙ ПО МОСКВЕ И МО</span></h6>
			<div class="button">Делайте душистый и экологичный напиток своими руками</div>
		</div>
		<div class="main_form main_form_top">
			<img src="img/form_items.png" class="form_img" alt="">
			<form id="form1" onsubmit='return false' autocomplete="off" >
				<h5>Оставьте заявку</h5>
				<p>ПОЛУЧИТЕ САМЫЙ ПОЛНЫЙ КОМПЛЕКТ К КАЖДОМУ АППАРАТУ
					до <span class="time">
							<?php
							
							echo rus_date("j F", strtotime("tomorrow"));
							?>

							<?php
							function rus_date() {
								$translate = array(
								"am" => "дп",
								"pm" => "пп",
								"AM" => "ДП",
								"PM" => "ПП",
								"Monday" => "Понедельник",
								"Mon" => "Пн",
								"Tuesday" => "Вторник",
								"Tue" => "Вт",
								"Wednesday" => "Среда",
								"Wed" => "Ср",
								"Thursday" => "Четверг",
								"Thu" => "Чт",
								"Friday" => "Пятница",
								"Fri" => "Пт",
								"Saturday" => "Суббота",
								"Sat" => "Сб",
								"Sunday" => "Воскресенье",
								"Sun" => "Вс",
								"January" => "Января",
								"Jan" => "Янв",
								"February" => "Февраля",
								"Feb" => "Фев",
								"March" => "Марта",
								"Mar" => "Мар",
								"April" => "Апреля",
								"Apr" => "Апр",
								"May" => "Мая",
								"May" => "Мая",
								"June" => "Июня",
								"Jun" => "Июн",
								"July" => "Июля",
								"Jul" => "Июл",
								"August" => "Августа",
								"Aug" => "Авг",
								"September" => "Сентября",
								"Sep" => "Сен",
								"October" => "Октября",
								"Oct" => "Окт",
								"November" => "Ноября",
								"Nov" => "Ноя",
								"December" => "Декабря",
								"Dec" => "Дек",
								"st" => "ое",
								"nd" => "ое",
								"rd" => "е",
								"th" => "ое"
								);
								
								if (func_num_args() > 1) {
									$timestamp = func_get_arg(1);
									return strtr(date(func_get_arg(0), $timestamp), $translate);
								} else {
									return strtr(date(func_get_arg(0)), $translate);
								}
							}
							?>
						</span>
				</p>
				
				<div class="timer timer_top">
					<div id="timer"></div>
					<nav>
						<span>дней</span>
						<span>часов</span>
						<span>минут</span>
						<span>секунд</span>
					</nav>
				</div>
	 			<label>Введите Имя</label>
	 			<input type="text" name="uname" class="validate" placeholder="Иван Иван Иванович" >
	 			<label>Введите Телефон</label>
	 			<div class="input_phone">
		            <input type="text" name="phone1" value="+7" >
		            <input type="text" name="phone2" class="validate" placeholder="123" >
		            <input type="text" name="phone3" class="validate" placeholder="4567890" >
		        </div>    
	           	<button  class="button send_button"  rel='form1' >Оставить заявку</button>

	            <input class="form_name" type="hidden" name="form_name" value="Заявка"/>
	            <input type="hidden" name="action" value='send_form'/>
	            <input type="hidden" name="action_type" value='form_feedback'/>
	        </form>
	    </div>    
    </div>    
</header>
<!--end-header-->
<!--main-->
<div class="main">
	<!--statistic-->
	<div class="container statistic_wrap">
		<section class="statistic_block wow bounceInLeft">
			<h6><span>65,5%</span></h6>
			<p>Продаваемых напитков в 2014 г. было произведено нелегально. Эти крепкие алкогольные напитки были изготовлены на подпольных предприятиях.</p>
			<p>Это значит, что 2 из 3 бутылок, которые вы употребляете, содержат в себе суррогат, который убивает Ваш организм стремительными темпами.</p>
		</section>
		<section class="statistic_block wow bounceInRight">
			<h6><span>В 5 раз</span></h6>
			<p>Выше вероятность получить тяжелое заболевание или повреждение жизненно-важных органов человека при употреблении "палёных" напитков.</p>
			<p>Некачественным и фальсифицированным является напиток, произведенный из «Экстры» и содержащий:</p>
			<p>Альдегиды в количестве около 6 мг/л (ГОСТ – 3 мг/л),
			сивушное масло 6–10 мг/л (ГОСТ – 3 мг/л),
			метанол 0,05% (ГОСТ – 0,03%)</p>
		</section>
	</div>
	<!--end statistic-->
	<!--request-->
	<div class="leave_request_wrap">
		<div class="container">
			<div class="main_form">
				<img src="img/form_items.png" class="form_img" alt="">
				<form id="form2" onsubmit='return false' autocomplete="off" >
					<h5>Оставьте заявку</h5>
					<p>ПОЛУЧИТЕ САМЫЙ ПОЛНЫЙ КОМПЛЕКТ К КАЖДОМУ АППАРАТУ</p>
		 			<label>Введите Имя</label>
		 			<input type="text" name="uname" class="validate" placeholder="Иван Иван Иванович" >
		 			<label>Введите Телефон</label>
		 			<div class="input_phone">
			            <input type="text" name="phone1" value="+7" >
			            <input type="text" name="phone2" class="validate" placeholder="123" >
			            <input type="text" name="phone3" class="validate" placeholder="4567890" >
			        </div>    
		           	<button  class="button send_button"  rel='form2' >Оставить заявку</button>

		            <input class="form_name" type="hidden" name="form_name" value="Заявка"/>
		            <input type="hidden" name="action" value='send_form'/>
		            <input type="hidden" name="action_type" value='form_feedback'/>
		        </form>
		    </div> 
		</div>
	</div>
	<!--end request-->

	<!--tags-->
	<div class="tags_wrap" id="recipes">
		<div class="container">
			<div class="title">простой рецепт напитка с аппаратом машковского</div>
			<div class="tags_block">
				<figure>
					<img src="img/tag1.jpg" alt="">
					<figcaption>Берем готовую брагу</figcaption>
				</figure>
				<figure>
					<img src="img/tag2.jpg" alt="">
					<figcaption>Переливаем в перегонный куб</figcaption>
				</figure>
				<figure>
					<img src="img/tag3.jpg" alt="">
					<figcaption>Кладем две половинки лимона в верхний сухопарник</figcaption>
				</figure>
				<figure>
					<img src="img/tag4.jpg" alt="">
					<figcaption>Дожидаемся, когда закипит</figcaption>
				</figure>
				<figure>
					<img src="img/tag5.jpg" alt="">
					<figcaption>Получаем по капельке ароматный напиток</figcaption>
				</figure>
			</div>
		</div>
	</div>
	<!--end tags-->

	<!--specifications-->
	<div class="specifications_wrap">
		<div class="container">
			<div class="title">Технические характеристики</div>
			<article class="specifications_block">
				<section class="specifications_item">
					<img src="img/specifications1.jpg" alt="" class="wow swing">
					<section>
						<p>Основное преимущество аппарата - высокая производительность и только у <b>Магарыч Машковского ЭКСПОРТ</b> возможность модификации до ректификационной колонны.</p>
					</section>
				</section>
				<section class="specifications_item">
					<img src="img/specifications2.jpg" alt=""  class="wow swing">
					<section>
						<p>Используемая при изготовлении аппарата пищевая сталь – <b>нержавейка</b>. Она <b>гигиенична, гипоалергенна</b> и никак не взаимодействует с жидкостью
						внутри в отличие от многих представленных на рынке аппаратов.</p>
					</section>
				</section>
				<section class="specifications_item">
					<img src="img/specifications3.jpg" alt=""  class="wow swing">
					<section>
						<p>Благодаря наличию 2-х <b>последовательно расположенных сухопарников</b> на выходе получается продукт высочайшего качества с максимальной степенью очистки от сивушных масел.
						Практически <b>единственный аппарат</b> на рынке заводского производства с <b>разборным сухопарником</b>, с помощью которого можно делать ароматизированный напиток: во второй сухопарник можно положить цедру, фрукты или другие ароматизаторы.</p>
					</section>
				</section>
				<section class="specifications_item">
					<img src="img/specifications4.jpg" alt=""  class="wow swing">
					<section>
						<p>Очень важно содержать аппарат в чистоте. А <b>широкая горловина</b> перегонного бака позволяет легко и качественно вымыть аппарат внутри прямо рукой, не мучаясь с ершиком.</p>
					</section>
				</section>
			</article>
		</div>
	</div>
	<!--end specifications-->

	<div class="aparat_wrap" id="aparat">
		<div class="container">
			<div class="title">Устройство аппарата</div>
			<div class="aparat_img">
				<img src="img/aparat.jpg" alt="">
			</div>
		</div>
	</div>

	<!--developer-->
	<div class="developer_wrap">
		<div class="container">
			<div class="title">Кто и как придумал такой простой, <br>но гениальный аппарат?</div>
			<article>
				<figure>
					<img src="img/man.png" alt="">
					<figcaption>Александр Машковский</figcaption>
				</figure>
				<section>
					<p>Аппарат МАГАРЫЧ Машковского (производство Челябинского Завода Бытовых Товаров) впервые был представлен на презентации 17-ой Международной Выставки в ВЦ «Крокус ЭКСПО» г. Москва.
					Это новая запатентованная технология, сделавшая революцию в бытовых аппаратах для производства напитков в домашних условиях.
					</p>
					<p><b>Дистиллятор Машковского представлен в трех вариантах:</b>
					</p>
					<p><strong>Магарыч Машковского 12 и 20 л.</strong></p>
					<p>
						<b>Преимущества: </b>
					</p>
						<ul>
							<li> Пищевая нержавеющая сталь AISI 304 толщиной 1 мм</li>
							<li> Аргоновая сварка</li>
							<li> Конструкция, защищенная патентом Российской Федерации</li>
							<li> Заводская сборка</li>
						</ul>
					
					<p><strong>Магарыч Машковского ЭКСПОРТ </strong></p>
					<p>
						<b>Преимущества: </b>
					</p>	
						<ul>
							<li> Высокая производительность и возможность модификации до ректификационной колонны.</li>
						</ul>
					
					<p><strong>Магарыч Машковского ЭКСПОРТ с ТЭН 21 и 36л </strong>
					</p>
					<p>
						<b>Преимущества: </b>
					</p>	
						<ul>
							<li> Модификация с трубчатым электронагревателем. Работает от электросети.</li>
							<li> 21л. – мощность 2 ТЭНа, 36л – мощность 3 ТЭНа (не требуется плита).</li>
						</ul>
					
					<p><b>Особенное внимание следует обратить на конструкцию аппарата:</b>
						он состоит из двух вертикально расположенных сухопарников, соединенных последовательно. Верхний сухопарник – разборный,  него можно положить пряности, фрукты или добавить ароматизаторы, получив тем самым непревзойденный и вкусный напиток в домашних условиях. Данная конструкция - личное изобретение Александра Машковского (директора ООО "ЧЗБТ"), подтвержденное патентом РФ.
						</p>
				</section>
			</article>
		</div>	
	</div>
	<!--end developer-->

	<!--sertificate-->
	<div class="sert_wrap" id="sert">
		<div class="container">
			<div class="sert_title">
				Аппарат <br> Машковского <br>
				<span>сертифицирован <br>
				и запатентован</span>
			</div>
			<a href="img/sert.png" data-fancybox-group="group1" class="fancybox"><img src="img/sert.png" alt=""></a>
			<a href="img/sert.png" data-fancybox-group="group1" class="fancybox"><img src="img/sert.png" alt=""></a>
		</div>
	</div>
	<!--end sertificate-->

	<!--news-->
	<div class="news_wrap">
		<div class="container">
			<div class="news_video">
				<div class="news_video_block">
					<iframe width="427" height="305" src="https://www.youtube.com/embed/BuzFw68X2K8"  allowfullscreen></iframe>
					<a href="#">Россияне переходят на «домашний» алкоголь</a>
				</div>
				<div class="news_video_block">
					<iframe width="427" height="305" src="https://www.youtube.com/embed/lsucUyNoIrc" frameborder="0" allowfullscreen></iframe>
					<a href="#">В России выросли продажи самогонных аппаратов</a>
				</div>
			</div>
			<div class="news_txt">
				<div class="news_txt_block">
					<img src="img/news_img1.jpg" alt="">
					<dl>
						<dt>В России резко вырос спрос на самогонные аппараты - СМИ</dt>
						<dd>Эксперты полагают, что таким образом россияне пытаются сэкономить на покупке фабричного спиртного</dd>
					</dl>
					<div class="read_article">
						<a target="_blank" href="http://www.aif.ru/money/market/1453436">Читать статью</a>
					</div>
				</div>
				<div class="news_txt_block">
					<img src="img/news_img2.jpg" alt="">
					<dl>
						<dt>В России резко вырос спрос на самогонные аппараты - СМИ</dt>
						<dd>Эксперты полагают, что таким образом россияне пытаются сэкономить на покупке фабричного спиртного</dd>
					</dl>
					<div class="read_article">
						<a target="_blank" href="http://echo.msk.ru/news/1499258-echo.html">Читать статью</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end news-->

	<!--questions-->
	<div class="questions_wrap">
		<div class="container">
			<div class="title">Часто задаваемые вопросы</div>
			<div class="questions_inner">
				<div class="qestions_block">
				<div class="questions_title">Вопрос</div>
				<div class="questions_title">Ответ</div>
					<dl>
						<dt>Законно ли варение на дому?</dt>
						<dd>Закон разрешает гражданам заниматься варением
						только в том случае, если весь произведенный домашний напиток не будет использоваться для продажи или иного извлечения прибыли.</dd>
						<dt>Какая высота аппарата в собранном виде?</dt>
						<dd>Высота около 62 см. в сборе.</dd>
						<dt>Сколько весит аппарат?</dt>
						<dd>Вес аппарата составляет примерно 4 кг.</dd>
						<dt>Как крепится крышка аппарата, не сорвет ли её от избыточного давления?</dt>
						<dd>Крышка аппаратов на резьбе.
						А давление, которое способно сорвать крышку, в аппарате не возникает.</dd>
						<dt>А не поведет ли стенки аппарата при сильном нагреве?</dt>
						<dd>Толщины дна и стенок хватает с избытком для эксплуатации на любых плитах, в том числе газовых.</dd>
						<dt>Сколько термометров?</dt>
						<dd>На аппаратах устанавливается по одному термометру.
						На аппарате Машковского экспорт электронный термометр.</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<!--end-questions-->

	<!--buy_aparat-->
	<div class="buy_aparat_wrap" id="buy">
		<div class="container">
			<div class="title">
				Купить аппарат Машковского
			</div>
			<ul class="buy_aparat_inner">
				<li class="buy_aparat_block">
					<div class="buy_aparat_title">Аппарат Машковского 12 и 20 л.</div>
					<div class="buy_aparat_img">
						<img src="img/apparatus-1.jpg" alt="">
					</div>
					<div class="buy_aparat_footer">
						<div class="buy_aparat_price">Цена: 7600р <span>\</span> 8600р</div>
						<a href="#modal_product" class="fancybox button">Подробнее</a>
					</div>
				</li>
				<li class="buy_aparat_block">
					<div class="buy_aparat_title">Аппарат Машковского 12 и 20 л.</div>
					<div class="buy_aparat_img">
						<img src="img/apparatus-2.jpg" alt="">
					</div>
					<div class="buy_aparat_footer">
						<div class="buy_aparat_price">Цена: 7990р <span>\</span> 8990р</div>
						<a href="#modal_product2" class="fancybox button">Подробнее</a>
					</div>
				</li>
				<li class="buy_aparat_block">
					<div class="buy_aparat_title">Аппарат Машковского Экспорт с ТЭН 21 и 36 л.</div>
					<div class="buy_aparat_img">
						<img src="img/apparatus-3.jpg" alt="">
					</div>
					<div class="buy_aparat_footer">
						<div class="buy_aparat_price">Цена: 14750р <span>\</span> 16750р</div>
						<a href="#modal_product3" class="fancybox button">Подробнее</a>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!--end-buy_aparat-->

	<!--action-->
	<div class="action_wrap">
		<div class="container">
			<div class="action_inner">
				<img src="img/bottle.png" alt="" class="bottle">
				<div class="action_title">Акция!</div>
				<div class="action_description">
					Каждому покупателю <b>качественный бутыль</b>
					емкостью <b>1 литр - в подарок!</b>
				</div>
				<div class="timer">
					<div id="timer"></div>
					<nav>
						<span>дней</span>
						<span>часов</span>
						<span>минут</span>
						<span>секунд</span>
					</nav>
				</div>
				<a href="#modal_request" class="fancybox button">Оставить заявку</a>
			</div>
		</div>
	</div>
	<!--end-action-->

	<!--delivery-->
	<div class="container">
		<ul class="delivery_wrap">
			<li class="delivery_inner">
				<div class="delivery_icon">
					<img src="img/truck.png" alt="" class="wow bounceInLeft">
				</div>
				<div class="delivery_block">
					<div class="delivery_item">
						<strong>Доставка по Москве:</strong> завтра, бесплатно
					</div>
					<div class="delivery_item">
						<strong>Доставка по России:</strong> 2-7 дней, 300 руб.
					</div>
				</div>
			</li>
			<li class="delivery_inner">
				<div class="delivery_icon">
					<img src="img/guarantee.png" alt="" class="wow pulse">
				</div>
				<div class="delivery_block">
					<div class="delivery_item font-size_larger">
						<strong>Гарантия 1 год</strong>
					</div>
				</div>
			</li>
			<li class="delivery_inner">
				<div class="delivery_icon">
					<img src="img/purchase-returns.png" alt="" class="wow bounceInUp">
				</div>
				<div class="delivery_block">
					<div class="delivery_item font-size_larger">
						<strong>Возврат товара:</strong> 14 дней
					</div>
				</div>	
			</li>
		</ul>
	</div>
	<!--end-delivery-->
</div>
<!--end-main-->
<!--footer-->
<footer class="footer">
	<div class="contacts_wrapper">
		<div class="container">
			<div class="contacts_inner">
				<div class="contacts_title">Наш адрес:</div>
				<address class="contacts_block address-ico">
					<strong>г.Москва,</strong> 
					ул. Новочеремушкинская, 23, <br>
					корп.2 
				</address>
				<div class="contacts_block time-ico">
					<strong>Режим работы:</strong> с 8-00 до 20-00
				</div>
				<div class="contacts_phone">+7 (499) 704-67-41</div>
			</div>
		</div>
		<div class="map_shadow"></div>
		<div id="map"></div>
	</div>
	<div class="copyright_wrapper">
		<div class="copyright_inner">&copy; 2012 - 2015.</div>
		<div class="copyright_inner">ИП Снигур И.Н. ОГРН: 309503030100041 ИНН: 503012819107
			<br>
			<a href="http://grey-fox.ru/?utm_source=customer_lp&utm_campaign=customer&utm_term=mogorych.ru">Создание сайта grey-fox.ru</a>
		</div>
	</div>
</footer>
<!--end-footer-->
</div>
<!--end-wrapper-->

<!--modals-->
<div class="modal modal_request" id="modal_request">
	<div class="modal_inner">
		<div class="modal_title">Отправить заявку</div>
		<div class="main_form">
			<form id="form3" onsubmit='return false' autocomplete="off" >
	 			<label>Введите Имя</label>
	 			<input type="text" name="uname" class="validate" placeholder="Иван Иван Иванович" >
	 			<label>Введите Телефон</label>
	 			<div class="input_phone">
		            <input type="text" name="phone1" value="+7" >
		            <input type="text" name="phone2" class="validate" placeholder="123" >
		            <input type="text" name="phone3" class="validate" placeholder="4567890" >
		        </div>    
	           	<button  class="button send_button"  rel='form3' >Отправить заявку</button>
				<small>Ваши данные не будут переданы третьим лицам или <br> использованы в спам рассылках</small>
	            <input class="form_name" type="hidden" name="form_name" value="Заявка"/>
	            <input type="hidden" name="action" value='send_form'/>
	            <input type="hidden" name="action_type" value='form_feedback'/>
	        </form>
	    </div>    
	</div>
</div>

<!--modal product-->
<div class="modal modal_product" id="modal_product">
	<div class="modal_inner">
		<div class="modal_title">Аппарат Машковского 12 и 20 литров</div>
		<div class="modal_product_block">
			<div class="modal_product_img">
				<ul id="modal_product_slider1">
					<li><img src="img/modal_slider_img.png" alt=""></li>
					<li><img src="img/modal_slider_img.png" alt=""></li>
					<li><img src="img/modal_slider_img.png" alt=""></li>
				</ul>
				<div class="text_center">
					<div id="modal_product_left1" class="modal_product_left"></div>
					<div id="modal_product_right1" class="modal_product_right"></div>
				</div>	
			</div>
			<div class="modal_product_txt">
				<div class="modal_product_txt_imgs">
					<a href="#"><img src="img/modal_img1.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img2.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img3.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img4.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img5.jpg" alt=""></a>
				</div>
				<div class="modal_product_txt_inner">
					<div class="modal_product_txt_table">
						<strong>Характеристики:</strong>
						<table>
							<tr>
								<td>Объем перегонного куба</td>
								<td>12 л</td>
							</tr>
							<tr>
								<td>Тип охладителя</td>
								<td>проточный</td>
							</tr>
							<tr>
								<td>Производительность</td>
								<td>2л/ч</td>
							</tr>
							<tr>
								<td>Термометр</td>
								<td>есть</td>
							</tr>
							<tr>
								<td>Сухопарник</td>
								<td>есть</td>
							</tr>
							<tr>
								<td>Материал</td>
								<td>пищевая нержавейка</td>
							</tr>
							<tr>
								<td>Гарантия</td>
								<td>1 год</td>
							</tr>
						</table>
					</div>
					<div class="main_form">
						<form id="form4" onsubmit='return false' autocomplete="off" >
				 			<label>Введите Имя</label>
				 			<input type="text" name="uname" class="validate" placeholder="Иван Иван Иванович" >
				 			<label>Введите Телефон</label>
				 			<div class="input_phone">
					            <input type="text" name="phone1" value="+7" >
					            <input type="text" name="phone2" class="validate" placeholder="123" >
					            <input type="text" name="phone3" class="validate" placeholder="4567890" >
					        </div>    
				           	<button  class="button send_button"  rel='form4' >Купить аппарат</button>
				            <input class="form_name" type="hidden" name="form_name" value="АППАРАТ МАШКОВСКОГО 12 И 20 ЛИТРОВ"/>
				            <input type="hidden" name="action" value='send_form'/>
				            <input type="hidden" name="action_type" value='form_feedback'/>
				        </form>
				    </div>  
				</div>
			</div>
		</div>  
		<article>
			Самогонный аппарат "Магарыч Премиум" - это не просто дистиллятор, это лучший из лучших в своей серии. Идеальный подарок как другу, так и руководителю. Отличный внешний вид, лаконичная форма и отражающая поверхность придает и без того качественному аппарату дополнительный шарм. Дистиллятор доставляется в защитной упаковке и красивой стильной подарочной коробке - уже готовый подарок!
		</article>
	</div>
</div>

<div class="modal modal_product" id="modal_product2">
	<div class="modal_inner">
		<div class="modal_title">Аппарат Машковского 12 и 20 литров</div>
		<div class="modal_product_block">
			<div class="modal_product_img">
				<ul  id="modal_product_slider2">
					<li><img src="img/apparatus-2.jpg" alt=""></li>
					<li><img src="img/apparatus-2.jpg" alt=""></li>
					<li><img src="img/apparatus-2.jpg" alt=""></li>
				</ul>
				<div class="text_center">
					<div id="modal_product_left2" class="modal_product_left"></div>
					<div id="modal_product_right2" class="modal_product_right"></div>
				</div>	
			</div>
			<div class="modal_product_txt">
				<div class="modal_product_txt_imgs">
					<a href="#"><img src="img/modal_img1.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img2.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img3.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img4.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img5.jpg" alt=""></a>
				</div>
				<div class="modal_product_txt_inner">
					<div class="modal_product_txt_table">
						<strong>Характеристики:</strong>
						<table>
							<tr>
								<td>Объем перегонного куба</td>
								<td>12 л</td>
							</tr>
							<tr>
								<td>Тип охладителя</td>
								<td>проточный</td>
							</tr>
							<tr>
								<td>Производительность</td>
								<td>2л/ч</td>
							</tr>
							<tr>
								<td>Термометр</td>
								<td>есть</td>
							</tr>
							<tr>
								<td>Сухопарник</td>
								<td>есть</td>
							</tr>
							<tr>
								<td>Материал</td>
								<td>пищевая нержавейка</td>
							</tr>
							<tr>
								<td>Гарантия</td>
								<td>1 год</td>
							</tr>
						</table>
					</div>
					<div class="main_form">
						<form id="form5" onsubmit='return false' autocomplete="off" >
				 			<label>Введите Имя</label>
				 			<input type="text" name="uname" class="validate" placeholder="Иван Иван Иванович" >
				 			<label>Введите Телефон</label>
				 			<div class="input_phone">
					            <input type="text" name="phone1" value="+7" >
					            <input type="text" name="phone2" class="validate" placeholder="123" >
					            <input type="text" name="phone3" class="validate" placeholder="4567890" >
					        </div>    
				           	<button  class="button send_button"  rel='form5' >Купить аппарат</button>
				            <input class="form_name" type="hidden" name="form_name" value="АППАРАТ МАШКОВСКОГО 12 И 20 ЛИТРОВ"/>
				            <input type="hidden" name="action" value='send_form'/>
				            <input type="hidden" name="action_type" value='form_feedback'/>
				        </form>
				    </div>  
				</div>
			</div>
		</div>  
		<article>
			Самогонный аппарат "Магарыч Премиум" - это не просто дистиллятор, это лучший из лучших в своей серии. Идеальный подарок как другу, так и руководителю. Отличный внешний вид, лаконичная форма и отражающая поверхность придает и без того качественному аппарату дополнительный шарм. Дистиллятор доставляется в защитной упаковке и красивой стильной подарочной коробке - уже готовый подарок!
		</article>
	</div>
</div>

<div class="modal modal_product" id="modal_product3">
	<div class="modal_inner">
		<div class="modal_title">Аппарат Машковского Экспорт с ТЭН 21 и 36 л.</div>
		<div class="modal_product_block">
			<div class="modal_product_img">
				<ul id="modal_product_slider3">
					<li><img src="img/apparatus-3.jpg" alt=""></li>
					<li><img src="img/apparatus-3.jpg" alt=""></li>
					<li><img src="img/apparatus-3.jpg" alt=""></li>
				</ul>
				<div class="text_center">
					<div id="modal_product_left3" class="modal_product_left"></div>
					<div id="modal_product_right3" class="modal_product_right"></div>
				</div>	
			</div>
			<div class="modal_product_txt">
				<div class="modal_product_txt_imgs">
					<a href="#"><img src="img/modal_img1.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img2.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img3.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img4.jpg" alt=""></a>
					<a href="#"><img src="img/modal_img5.jpg" alt=""></a>
				</div>
				<div class="modal_product_txt_inner">
					<div class="modal_product_txt_table">
						<strong>Характеристики:</strong>
						<table>
							<tr>
								<td>Объем перегонного куба</td>
								<td>12 л</td>
							</tr>
							<tr>
								<td>Тип охладителя</td>
								<td>проточный</td>
							</tr>
							<tr>
								<td>Производительность</td>
								<td>2л/ч</td>
							</tr>
							<tr>
								<td>Термометр</td>
								<td>есть</td>
							</tr>
							<tr>
								<td>Сухопарник</td>
								<td>есть</td>
							</tr>
							<tr>
								<td>Материал</td>
								<td>пищевая нержавейка</td>
							</tr>
							<tr>
								<td>Гарантия</td>
								<td>1 год</td>
							</tr>
						</table>
					</div>
					<div class="main_form">
						<form id="form6" onsubmit='return false' autocomplete="off" >
				 			<label>Введите Имя</label>
				 			<input type="text" name="uname" class="validate" placeholder="Иван Иван Иванович" >
				 			<label>Введите Телефон</label>
				 			<div class="input_phone">
					            <input type="text" name="phone1" value="+7" >
					            <input type="text" name="phone2" class="validate" placeholder="123" >
					            <input type="text" name="phone3" class="validate" placeholder="4567890" >
					        </div>    
				           	<button  class="button send_button"  rel='form6' >Купить аппарат</button>
				            <input class="form_name" type="hidden" name="form_name" value="Аппарат Машковского Экспорт с ТЭН 21 и 36 л."/>
				            <input type="hidden" name="action" value='send_form'/>
				            <input type="hidden" name="action_type" value='form_feedback'/>
				        </form>
				    </div>  
				</div>
			</div>
		</div>  
		<article>
			Самогонный аппарат "Магарыч Премиум" - это не просто дистиллятор, это лучший из лучших в своей серии. Идеальный подарок как другу, так и руководителю. Отличный внешний вид, лаконичная форма и отражающая поверхность придает и без того качественному аппарату дополнительный шарм. Дистиллятор доставляется в защитной упаковке и красивой стильной подарочной коробке - уже готовый подарок!
		</article>
	</div>
</div>
<!--end modal product-->

<div id="thanks" class="thanks modal">
	<div class="thanks_inner">
		<figure>
			<img src="img/thanks.png" alt="">
		</figure>
		<section>
			<h5>СПАСИБО!</h5>
			<h6>Ваша заявка принята</h6>
			<p>Наш менеджер свяжется с Вами в ближайшее время</p>
		</section>
	</div>
</div>
<!--end modals-->

</body>
</html>