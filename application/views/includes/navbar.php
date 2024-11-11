<body>
		<div class="site-content">
			<header class="site-header">
				<div class="container">
					<a href="<?=base_url();?>" class="branding">
						<img src="<?=base_url();?>design/images/embc.png" alt="" class="logo" width="50">
						<h1 class="site-title">Emmanuel Missionary Baptist Church</h1>
					</a>

					<div class="main-navigation">
						<button class="menu-toggle"><i class="fa fa-bars"></i> Menu</button>
						<ul class="menu">
							<li class="menu-item <?=$home;?>"><a href="<?=base_url();?>">Homepage <small>About Us</small></a></li>							
							<li class="menu-item <?=$pastor;?>"><a href="<?=base_url();?>pastors">Pastors <small>Pastor & Deacons</small></a></li>
							<li class="menu-item <?=$doctrine;?>"><a href="<?=base_url();?>doctrinal_statement">we believe <small>Doctrinal Statement</small></a></li>
							<li class="menu-item <?=$covenant;?>"><a href="<?=base_url();?>church_covenant">we agreed <small>Church Covenant</small></a></li>
							<li class="menu-item <?=$sermon;?>"><a href="<?=base_url();?>sermons">Sermons <small>Radio Programs</small></a></li>
							<li class="menu-item <?=$events;?>"><a href="<?=base_url();?>events">Events <small>Church Activities</small></a></li>
							<li class="menu-item <?=$gallery;?>"><a href="<?=base_url();?>gallery">Gallery <small>Pictures</small></a></li>
							<li class="menu-item <?=$members;?>"><a href="<?=base_url();?>members">Members <small>EMBC MEmbers</small></a></li>
						</ul>
					</div>

					<div class="mobile-navigation"></div>
				</div>
			</header> <!-- .site-header -->