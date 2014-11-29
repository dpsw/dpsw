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
		<?php echo $this->flash->output(); ?>
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
						<?php echo $this->tag->form(array('user/registration', 'method' => 'post', 'id' => 'login-form')); ?>

		                        <div class="form-group">
								<?php echo $regist_form->render('username', array('type' => 'name', 'placeholder' => 'Ваше имя', 'id' => 'name', 'class' => 'form-control')); ?>		
		                        </div>
		                        <div class="form-group">
								<?php echo $regist_form->render('email', array('type' => 'email', 'placeholder' => 'Email', 'id' => 'email', 'class' => 'form-control')); ?>	
		                        </div>
		                        <div class="form-group">
								<?php echo $regist_form->render('password', array('type' => 'password', 'placeholder' => 'Пароль', 'id' => 'password', 'class' => 'form-control')); ?>	
		                        </div>


                                <?php echo $regist_form->render('csrf', array('value' => $this->security->getSessionToken())); ?>

		                        <button type="submit" id="btn-registration" class="btn btn-custom btn-lg btn-block" >Зарегестрироваться
		                        </button>
		                    </form>
		                    	<div class="more_regist_methods">
		                    		<a href="#" id='more_regist'>Еще можно зарегестрироваться через &#9660;</a>
		                    		<div class='regist_methods'>
										<a href='<?php echo $facebook_url; ?>' class="btn btn-block btn-social btn-facebook">
										    <i class="fa fa-facebook"></i> Facebook
									  	</a>	
										<a href='<?php echo $vk_url; ?>' class="btn btn-block btn-social btn-vk">
										    <i class="fa fa-vk"></i> ВКонтакте
									  	</a>	
		                    		</div>
		                    	</div>
		                    	<div class="after-login-div">
		                    	Уже с нами?
		                    	<input type="submit" id="btn-login" class="btn btn-custom btn-lg " value="Войдите">
		                    	</div>
		        	    </div>
				</div><!-- /col-12 -->
			</div><!-- /row -->

		</div><!-- /container -->
	</div><!-- /slide1 -->
	
	<!-- === Slide 2 === -->
	<div class="slide story" id="slide-2" data-slide="2">
		<div class="container">
			<div class="row title-row">
				<div class="col-12 font-thin">Contrary to popular belief, <span class="font-semibold">Lorem Ipsum</span> is not simply random text.</div>
			</div><!-- /row -->
			<div class="row line-row">
				<div class="hr">&nbsp;</div>
			</div><!-- /row -->
			<div class="row subtitle-row">
				<div class="col-12 font-thin">This is what <span class="font-semibold">we do best</span></div>
			</div><!-- /row -->
			<div class="row content-row">
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-eye-open"></i></p>
					<h2 class="font-thin">Visual <span class="font-semibold">Identity</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-laptop"></i></p>
					<h2 class="font-thin">Web <span class="font-semibold">Design</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-tablet"></i></p>
					<h2 class="font-thin">Mobile <span class="font-semibold">Apps</span></h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-lg-3 col-sm-6">
					<p><i class="icon icon-pencil"></i></p>
					<h2 class="font-semibold">Development</h2>
					<h4 class="font-thin">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h4>
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
					<h2 class="font-thin">Listening to<br><span class="font-semibold" >your needs</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cog"></i></p>
					<h2 class="font-thin">Project<br><span class="font-semibold">discovery</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-cloud"></i></p>
					<h2 class="font-thin">Storming<br><span class="font-semibold">our brains</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-map-marker"></i></p>
					<h2 class="font-thin">Getting<br><span class="font-semibold">there</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
				</div><!-- /col12 -->
				<div class="col-12 col-sm-2">
					<p><i class="icon icon-gift"></i></p>
					<h2 class="font-thin">Delivering<br><span class="font-semibold">the product</span></h2>
					<h4 class="font-thin">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h4>
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


