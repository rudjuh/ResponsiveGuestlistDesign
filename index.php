<?php
 include 'header.php';
?>
<div class="row player hidden-xs">
	<div id="account-wrapper" class="account-container-wrapper">
		<div class="account-container">
			<div class="col-md-3 col-xs-3">
				<div class="account-menu">
					<div class="account-information">
						<img src="images/dog.jpg" class="img-circle" height="100px"/>
						<p>Rudolf Wardanjan</p>
						<p style="font-size: 12px" >London, UK</p>
						
						<ul>
							<li class="selected" >ALL EVENTS</li>
							<li>YOUR EVENTS</li>
							<li>PROFILE</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-9 col-xs-9">
				<div class="gl-events-top">
					<span>Guest listed events</span>
				</div>
					<span class="arrow-left" ></span>
				
				<span class="arrow-right" ></span>
				<div class="gl-events-wrapper">
					<div class="gl-events">
					
						<div class="gl-events-box">
													<div class="gl-event">
								<img class="account-event-img" src="http://4.static.newspaper.guestlistmedia.net/uploads/events/16/624_medium.jpg" alt="read news" width="100%" height="100%" style="opacity: 1;">
								<div class="gl-event-content">
									<h2>Sunscape Festival</h2>
									<h3>Ramla Bay, Gozo</h3>
								</div>
							</div>
							<div class="gl-event">
								<img class="account-event-img" src="http://4.static.newspaper.guestlistmedia.net/uploads/events/16/624_medium.jpg" alt="read news" width="100%" height="100%" style="opacity: 1;">
								<div class="gl-event-content">
									<h2>Sunscape Festival</h2>
									<h3>Ramla Bay, Gozo</h3>
								</div>
							</div>
													<div class="gl-event">
								<img class="account-event-img" src="http://4.static.newspaper.guestlistmedia.net/uploads/events/16/624_medium.jpg" alt="read news" width="100%" height="100%" style="opacity: 1;">
								<div class="gl-event-content">
									<h2>Sunscape Festival</h2>
									<h3>Ramla Bay, Gozo</h3>
								</div>
							</div>
													<div class="gl-event">
								<img class="account-event-img" src="http://4.static.newspaper.guestlistmedia.net/uploads/events/16/624_medium.jpg" alt="read news" width="100%" height="100%" style="opacity: 1;">
								<div class="gl-event-content">
									<h2>Sunscape Festival</h2>
									<h3>Ramla Bay, Gozo</h3>
								</div>
							</div>
													<div class="gl-event">
								<img class="account-event-img" src="http://4.static.newspaper.guestlistmedia.net/uploads/events/16/624_medium.jpg" alt="read news" width="100%" height="100%" style="opacity: 1;">
								<div class="gl-event-content">
									<h2>Sunscape Festival</h2>
									<h3>Ramla Bay, Gozo</h3>
								</div>
							</div>
							<br class="clr" />
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="row content-container">
	<div class="col-md-8 col-xs-12">
		<div class="news-menu">
			<ul>
				<li class="active"><a href="/news"><span>News</span></a></li>
				<li><a href="/fashion"><span class="">Fashion</span></a></li>
				<li><a href="/festivals"><span class="">Festivals</span></a></li>
				<li><a href="/film"><span class="">Film</span></a></li>
				<li><a href="/travel"><span class="">Travel</span></a></li>
			</ul>
		</div>
		<div class="loading-section">
			<div class="loading"></div>
		</div>

		<div id="articles" class="news-mainsection">
			<ul id="articleListIndex">
				<div class="news-mainsection1">
					<div class="musicevents"><!--READ NEWS Table starts-->
						<div class="readNewsTable">
							<ul class="readNewsRow">
								<li class="readNewsCellLeft">
									<div>
										<a href="" alt="read news"/><img src="http://guestlist.net/uploads/articles/2015/05/87699.png" /></a>
									</div>
									<h3><a href="">ShowMango sorts out your summer</a></h3>
										<p class='article-author'>By 
											<a href=''>	
												Christina Dean -  
											</a>
											<a class='article-date'>12 May, 2015 </a>
										</p>
									<p>The "Birthplace of British cinema" has been restored to its former glory.</p>
								</li><!--readNewsCellLeft-->
								
								<li class="readNewsCellRight">
									<ul>
										<li class="readNewsBox">
											<div style="overflow:hidden;width:135px;margin-left:20px;">
												<a href="" alt="" width="135"><img src="http://guestlist.net/uploads/articles/2015/05/87747.png" /></a>
											</div>
											<div class="articles-content">
												<p><a href="">ShowMango sorts out your summer</a></p>
												<!--<img src="/images/news/facebook.jpg" alt="facebook" width="22" height="21">
												<img class="twitterLogo" src="/images/news/twitter.jpg" alt="twitter" width="22" height="21">-->
												<p class='article-author'>
													By <a href=''>
													Christina Dean -  
													</a>
													<a class='article-date'>12 May, 2015 </a>
												</p>
												 
												<p>The "Birthplace of British cinema" has been restored to its former glory.</p>
											</div>
										</li>
									</ul>
								</li><!--readNewsCellRight-->
							</ul><!--readNewsRow-->
						</div><!--readNewsTable-->    
					</div><!--musicevents-->
				</div>
			</ul>
			<ul id="articleListIndexTemp"> </ul>

			<div id="paging">
			</div>
		</div>
		
	</div>
	
	<div class="col-md-4 col-xs-12">
		<div style="min-height:400px;">
			<div class="news-menu-right-title">
				<h3>
					<a href="javascript:void(0)" class="active-news-title featured-title">FEATURED</a>
						&nbsp;/&nbsp; <a href="javascript:void(0)" class="popular-title">HOT</a>  &nbsp;/&nbsp; <a href="javascript:void(0)" class="new-title">NEW</a>
				</h3>
				<br class="clr" />
			</div>
			<div class="news-menu-right-options">
				<ul>
					<li class="articleItemListElement easeInOutAll200">
						<figure>
							<a class="clearfix" href="">
								<div class="articleItemListElementImgContainer">
									<img src="http://0.static.newspaper.guestlistmedia.net/uploads/articles/11/750_smallsquare.jpg" alt=""  class="imgb" width="100%" height="100%" />
								</div>
								<figcaption class="easeInOutAll200 ">
									<h4 class="articleItemListElementContent">'They could stop the...</h4>
									<a class="articleItemListElementContentText">The man that many claim invented...</a>
								</figcaption>
								<br class="clr" />
							</a>
						</figure>
					</li>
				</ul>
			</div>
		</div>
		
	</div>

</div>

<?php
include 'footer.php';
?>