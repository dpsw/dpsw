	<div class="navbar navbar-fixed-top" data-activeslide="1">
		<div class="container">
		
			<!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			
			<div class="nav-collapse collapse navbar-responsive-collapse">
				<ul class="nav row">
					<li data-slide="1" class="col-12 col-sm-2"><a id="menu-link-1" href="#slide-1" title="Next Section"><span class="icon icon-home"></span> <span class="text">Домашняя</span></a></li>
					<li data-slide="2" class="col-12 col-sm-2"><a id="menu-link-2" href="#slide-2" title="Next Section"><span class="icon icon-user"></span> <span class="text">О нас</span></a></li>
					<li data-slide="3" class="col-12 col-sm-2"><a id="menu-link-3" href="#slide-3" title="Next Section"><span class="icon icon-heart"></span> <span class="text">Наше будущее</span></a></li>
					<li data-slide="4" class="col-12 col-sm-2"><a id="menu-link-4" href="#slide-4" title="Next Section"><span class="icon icon-gears"></span> <span class="text">Работа</span></a></li>
					<li data-slide="5" class="col-12 col-sm-2"><a id="menu-link-5" href="#slide-5" title="Next Section"><span class="icon icon-briefcase"></span> <span class="text">Наши клиенты</span></a></li>
					<li data-slide="6" class="col-12 col-sm-2"><a id="menu-link-6" href="#slide-6" title="Next Section"><span class="icon icon-envelope"></span> <span class="text">Контакты</span></a></li>
				</ul>
				<div class="row">
					<div class="col-sm-2 active-menu"></div>
				</div>
			</div><!-- /.nav-collapse -->
		</div><!-- /.container -->
	</div><!-- /.navbar -->
	
	
	<!-- === Arrows === -->
	<div id="arrows">
		<div id="arrow-up" class="disabled"></div>
		<div id="arrow-down"></div>
		<div id="arrow-left" class="disabled visible-lg"></div>
		<div id="arrow-right" class="disabled visible-lg"></div>
	</div><!-- /.arrows -->
	
	
	<!-- === MAIN Background === -->
	<div class="slide story" id="slide-1" data-slide="1">
		{{ this.flash.output() }}
		<div class="container">
			<div id="home-row-1" class="row clearfix">
				<div class="col-6">
					<h1 class="font-semibold">MAGANDI <span class="font-thin">DESIGN</span></h1>
					<h4 class="font-thin">Мы <span class="font-semibold">делаем новый шаг</span> интернет продаж.</h4>
					<br>
					<br>
				</div><!-- /col-12 -->
				<div class="col-5">
					<div class="form-wrap form_login">
						<h4 class="font-thin login-header-align">Вступайте в <span >наш клуб</span></h4>  
						{{ form('user/registration', 'method': 'post', 'id' : 'login-form') }}

		                        <div class="form-group">
								{{ regist_form.render('username', [
										'type': 'name',
										'placeholder': 'Ваше имя',
										'id': 'name',
										'class': 'form-control'
										]) 
									}}		
		                        </div>
		                        <div class="form-group">
								{{ regist_form.render('email', [
										'type': 'email',
										'placeholder': 'Email',
										'id': 'email',
										'class': 'form-control'
										]) 
									}}	
		                        </div>
		                        <div class="form-group">
								{{ regist_form.render('password', [
										'type': 'password',
										'placeholder': 'Пароль',
										'id': 'password',
										'class': 'form-control'
										]) 
									}}	
		                        </div>

{#		                        <input type="hidden" name="<?php echo $this->security->getTokenKey() ?>"
		                                value="<?php echo $this->security->getToken() ?>"/>
		                                #}
                                {{ regist_form.render('csrf', ['value': security.getSessionToken()]) }}

		                        <button type="submit" id="btn-registration" class="btn btn-custom btn-lg btn-block" >Зарегестрироваться
		                        </button>
		                    </form>
		                    	<div class="more_regist_methods">
		                    		<a href="#slide-1" id='more_regist'>Еще можно зарегестрироваться через &#9660;</a>
		                    		<div class='regist_methods'>
										<a href='{{ facebook_url }}' class="btn btn-block btn-social btn-facebook">
										    <i class="fa fa-facebook"></i> Facebook
									  	</a>	
										<a href='{{ vk_url }}' class="btn btn-block btn-social btn-vk">
										    <i class="fa fa-vk"></i> ВКонтакте
									  	</a>	
		                    		</div>
		                    	</div>
		                    	{#
		                    	<div class="after-login-div">
		                    	Уже с нами?
		                    	<input type="submit" id="btn-login" class="btn btn-custom btn-lg " value="Войдите">
		                    	</div>
		                    	#}
		        	    </div>
				</div><!-- /col-12 -->
			</div><!-- /row -->
{#			<!--div id="home-row-2" class="row clearfix">
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="4"><img src="images/s02.png"></div><span>PROFESSIONAL</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="3"><img src="images/s01.png"></div><span>FRIENDLY</span></div>
				<div class="col-12 col-sm-4"><div class="home-hover navigation-slide" data-slide="5"><img src="images/s03.png"></div><span>SUITABLE</span></div>
			</div><!-- /row --> #}
		</div><!-- /container -->
	</div><!-- /slide1 -->
	
	<!-- === Slide 2 === -->
	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Мы создаем, <span class="font-semibold">Magandi</span> что бы упростить ваш поход в магазин.</div>
			</div><!-- /row -->
{#			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-12 font-thin">Это лишь малая часть того, что <span class="font-semibold">мы делаем</span></div>
			</div><!-- /row -->
			#}
			<div class="row content-row">
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-eye-open"></i></p>
					<h2 class="font-thin">Простота <span class="font-semibold">Использования</span></h2>
					<h4 class="font-thin">Интуитивно-понятный интерфейс направит вас на нужный Вам путь.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-laptop"></i></p>
					<h2 class="font-thin">Новый <span class="font-semibold">Дизайн</span></h2>
					<br>
					<h4 class="font-thin">Красота и плавность во всем.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-tablet"></i></p>
					<h2 class="font-thin">Смотри на <span class="font-semibold">Всем</span></h2>
					<br>
					<h4 class="font-thin">Мы создаем Magandi, что бы Вам было удобно смотреть Нас на любом устройтстве.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-pencil"></i></p>
					<h2 class="font-thin">Мы <span class="font-semibold">Меняемся</span></h2>
					<br>
					<h4 class="font-thin">Мы принимаем и учитываем все Ваши пожелания, анализируем их и исполняем.</h4>
				</div><!-- /col12 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide2 -->
	
	<!-- === SLide 3 - Portfolio -->
	<div class="slide story" id="slide-3" data-slide="3">
		<div class="row">
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p01-large.jpg"><img class="thumb" src="images/portfolio/p01-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p02-large.jpg"><img class="thumb" src="images/portfolio/p02-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p09-large.jpg"><img class="thumb" src="images/portfolio/p09-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p010-large.jpg"><img class="thumb" src="images/portfolio/p10-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p05-large.jpg"><img class="thumb" src="images/portfolio/p05-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p06-large.jpg"><img class="thumb" src="images/portfolio/p06-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p07-large.jpg"><img class="thumb" src="images/portfolio/p07-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p08-large.jpg"><img class="thumb" src="images/portfolio/p08-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p03-large.jpg"><img class="thumb" src="images/portfolio/p03-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p04-large.jpg"><img class="thumb" src="images/portfolio/p04-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p11-large.jpg"><img class="thumb" src="images/portfolio/p11-small.jpg" alt=""></a></div>
			<div class="col-12 col-sm-6 col-lg-2"><a data-fancybox-group="portfolio" class="fancybox" href="images/portfolio/p12-large.jpg"><img class="thumb" src="images/portfolio/p12-small.jpg" alt=""></a></div>
		</div><!-- /row -->
	</div><!-- /slide3 -->
	
	<!-- === Slide 4 - Process === -->
	<div class="slide story" id="slide-4" data-slide="4">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Наша <span class="font-semibold">работа</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">Мы создаем инновацию в среде интернет-маркетинга и продаж. Мы не агрегатор. Мы нечто большее.</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-bolt"></i></p>
					<h3 class="font-thin">Мощность<br><span class="font-semibold" >Предложения</span></h3>
					<br>
					<h4 class="font-thin">Уникальная система Предложенных товаров расскажет о Вашем товаре. </h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cog"></i></p>
					<h3 class="font-thin">Мощность<br><span class="font-semibold">Разработки</span></h3>
					<br>
					<h4 class="font-thin">Мы хотим предоставить Вам достаточно мощную и гибкую систему продаж Вашего товара.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cloud"></i></p>
					<h3 class="font-thin">Скорость <br><span class="font-semibold">Работы</span></h3>
					<br>
					<h4 class="font-thin">Скорость работы Нашего сервиса Вас приятно удивит.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-map-marker"></i></p>
					<h3 class="font-thin">Покажите<br><span class="font-semibold">Где</span></h3>
					<br>
					<h4 class="font-thin">Расскажите где можно приобрести Ваш товар на карте и Покупатель узнает о Вас.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-gift"></i></p>
					<h3 class="font-thin">Дарите<br><span class="font-semibold">Подарки</span></h3>
					<br>
					<h4 class="font-thin">Увеличивайте конверсию приятными поощрениями.</h4>
				</div><!-- /col12 -->
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /slide4 -->
	
	<!-- === Slide 5 === -->
	<div class="slide story" id="slide-5" data-slide="5">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin"><span class="font-semibold">Наши</span> клиенты</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">В данный момент мы создаем наше приложение, <br>поэтому клиентов у нас нет... <br><br>Но в ближайшее время мы планируем привлечь большое количество продавцов и покупателей. </div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
{#			<!--div class="row content-row">
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2"><img src="images/client01.png" alt=""></div>
				<div class="col-12 col-sm-2"><img src="images/client02.png" alt=""></div>
				<div class="col-12 col-sm-2"><img src="images/client03.png" alt=""></div>
				<div class="col-12 col-sm-2"><img src="images/client04.png" alt=""></div>
				<div class="col-12 col-sm-2"><img src="images/client05.png" alt=""></div>
				<div class="col-1 col-sm-1 hidden-sm">&nbsp;</div>
			</div--><!-- /row --> #}
		</div><!-- /container -->
	</div><!-- /slide5 -->
	
	<!-- === Slide 6 / Contact === -->
	<div class="slide story" id="slide-6" data-slide="6">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-light">Наши <span class="font-semibold">контакты</span></div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-10 font-light">По всем вопросам и предложеням обращаться:</div>
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
			<div id="contact-row-4" class="row">
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-phone"></i></a></p>
					<span class="hover-text font-light ">+7-988-542-08-43</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-envelope"></i></a></p>
					<span class="hover-text font-light ">admin@<br>magandi.me</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-home"></i></a></p>
					<span class="hover-text font-light ">Таганрог, Россия</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-facebook"></i></a></p>
					<span class="hover-text font-light ">facebook.com/<br>magandi</span></a>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2 with-hover-text">
					<p><a target="_blank" href="#"><i class="icon icon-vk"></i></a></p>
					<span class="hover-text font-light ">vk.com/<br>magandi</span></a>
				</div><!-- /col12 -->
				<div class="col-sm-1 hidden-sm">&nbsp;</div>
			</div><!-- /row -->
		</div><!-- /container -->
	</div><!-- /Slide 6 -->


