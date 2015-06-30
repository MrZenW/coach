<?php include VIEWPATH."/header.tpl.php" ?>
<?php include VIEWPATH."/nav.tpl.php"?>


<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<!--
				<img src="<?php echo GWT_ASSET_BASE_URL?>image/home-mac@2x.jpg" class="img-responsive img"/>
			
			<a href="<?php echo GWT_STATIC_BASE_URL?>download/vpnboss_connecter.zip">
				<img src="<?php echo GWT_ASSET_BASE_URL?>image/vpnboss_connecter_ad.png" class="img-responsive img img-rounded"/>
			</a>
			-->

					<div id="carousel-example-generic" class="carousel slide img-rounded" data-ride="carousel">
					  <!-- Indicators -->
					  <ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					  </ol>

					  <!-- Wrapper for slides -->
					  <div class="carousel-inner" role="listbox">
						<div class="item active">
						  <a href="http://www.vpnboss.com/jump?url=<?php echo urlencode(GWT_STATIC_BASE_URL.'download/vpnboss_connecter.zip')?>"><img class="img-rounded" src="<?php echo GWT_ASSET_BASE_URL?>image/vpnboss_connecter_ad.png" alt="客户端点击下载"></a>
						  <div class="carousel-caption">
							

						  </div>
						</div>
						<div class="item">
						  <img class="img-rounded" src="<?php echo GWT_ASSET_BASE_URL?>image/home-mac@2x.jpg" alt="logo">
						  <div class="carousel-caption">
							

						  </div>
						</div>
						
					  </div>

					  <!-- Controls -->
					  <!--
						  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						  </a>
						  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						  </a>
					  -->
					</div>




		</div>
	</div>
	<div class="row" style="height:10px;">
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-2">
			</div>
			<div class="col-md-3"><a type="button" class="btn btn-success btn-lg" href="/user/reg?redirect_url=<?php echo urlencode('/order/new_alipay?price=10') ?>">购买10￥/月套餐</a></div>
			<div class="col-md-3"><a type="button" class="btn btn-success btn-lg" href="/user/reg?redirect_url=<?php echo urlencode('/order/new_alipay?price=100') ?>">购买100￥/年套餐</a></div>
			<div class="col-md-2"><a type="button" class="btn btn-success btn-lg" href="/user/reg">免费注册</a></div>

		</div>
	</div>
	<div class="row">
		<div class="col-md-12 text-center">
			
		</div>
	</div>

	<div class="row" style="height:50px;">
	
	</div>

	<div class="row">
		<div class="col-md-6">

			<h2>为什么需要使用VPN？</h2>
			<ul>
			  <li>可以在使用公共WIFI或公共网络上网时，保护你的网络隐私</li>
			  <li>可以顺畅的使用Dropbox。</li>
			  <li>可以在连接游戏外服时加速你的游戏网络速度和体验</li>
			  <li>可以加速你访问国外网站的速度，减短访问等待时间。</li>
			  <li>可以帮助你加速访问国外电商平台，助您外贸之路。</li>
			  <li>可以还有更多…… :)</li>
			</ul>

		</div>
		<div class="col-md-6">
		    <h2>VPN使用起来方便吗？</h2>

				<p>非常方便，VPN使用的是全球标准协议PPTP和L2TP，只要您的设备支持VPN，就可以使用。</p>
				<p><a href="/help/win7">查看Windows 7如何连接VPN</a></p>
				<p><a href="/help/iphone">查看iPhone、iPad、iPod如何连接VPN</a></p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
		    <a name="product">&nbsp;</a>
			<h2>产品和价格！</h2>
			<ul>
			  <li>一天的免费试用</li>
			  <li>月付：10￥/月，月流量50G，不限速，允许最多2个客户端同时登陆</li>
			  <li>年付：100￥/年，月流量80G，不限速，允许最多5个客户端同时登陆</li>
			</ul>
		</div>
		<div class="col-md-6">
		    <a name="connect">&nbsp;</a>
			<h2>联系我们</h2>
			<ul>
			  <li>Email:kf@vpnboss.com</li>
			  <li>
				<?php if($_SESSION['__UID']):?>
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg">反馈问题</button></li>
				<?php else:?>
				<button type="button" class="btn btn-primary" onclick="location='/user/login'">反馈问题</button>
				<?php endif;?>

			</ul>
		</div>
	</div>






</div>

<?php include VIEWPATH."/footer.tpl.php" ?>