<nav class="navbar navbar-default navbar-static-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="<?php echo get_bloginfo('template_url') ?>/assets/img/logo.png"/> <?php bloginfo('name'); ?></a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
				<li><a href="<?php bloginfo('url'); ?>">Anasayfa</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/urun">Ürünler</a></li>
				<li><a href="<?php bloginfo('url'); ?>/category/yazi">Yazılar</a></li>
				<li><a href="<?php bloginfo('url'); ?>/katalog">Katalog</a></li>
				<li><a href="#contact">İletişim</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="social"><a href="https://twitter.com/lretcetera" target="_balnk"><img alt="Twitter" src="<?php echo get_bloginfo('template_url') ?>/assets/img/Twitter.svg"/><span class="visible-xs visible-xs-inline">Twitter'da biz</span></a></li>
				<li class="social"><a href="https://www.instagram.com/724aloevera/" target="_balnk"><img alt="Instagram" src="<?php echo get_bloginfo('template_url') ?>/assets/img/Instagram.svg"/><span class="visible-xs visible-xs-inline">Instagram'da biz</span></a></li>
				<!--li class="active"><a href="#">Türkçe</a></li>
				<li><a href="#">Русский</a></li>
				<li><a href="#">English</a></li-->
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
