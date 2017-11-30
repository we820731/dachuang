<div class="menu">
	{{--menu--}}
	<div class="container-fluid">
		<div class="head-top"></div>
		<div class="col-sm-8 h_menu4">
			<ul class="memenu skyblue">
				<li class=" grid">
					<a  href="/">首頁</a>
				</li>
				<li><a  href="news.html">最新消息</a>
					<div class="mepanel">
						<div class="col1">
							<div class="h_nav">
								<h4>Latest News</h4>
									<ul>
										<li><a href="details.html">免費玩 『飛爪奪寶戰』</a></li>
                                     	<li><a href="details.html">分店開幕訊息</a></li>
									</ul>	
							</div>							
						</div>
					</div>
				</li>
				<li class="grid"><a  href="#">全部商品</a></li>
				<li><a  href="typo.html">店鋪據點</a></li>	
				<li><a class="color6" href="contact.html">合作案例</a></li>
				{{--<li><a class="color6" href="https://www.facebook.com/daisodoll/">Facebook</a></li>--}}
			</ul>
		</div>
		
		{{--search--}}
	
		<div class="col-sm-2 search">		
			<a class="play-icon popup-with-zoom-anim" href="#small-dialog">
				<i class="glyphicon glyphicon-search"> </i> </a>
		</div>
		<!---pop-up-box---->
		<div class="clearfix"> </div>
			
			<script type="text/javascript" src="js/modernizr.custom.min.js"></script>   <link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all"/>
			<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
			<!---//pop-up-box---->
			<div id="small-dialog" class="mfp-hide">
				<div class="search-top">
					<div class="login">
						<input type="submit" value="">
						<input type="text" value="Search..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}">
					</div>
					{{-- <p>	Shopping</p> --}}
				</div>				
			</div>
			<script>
				$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
					});
																				
				});
			</script>			
		<!---->		

</div>