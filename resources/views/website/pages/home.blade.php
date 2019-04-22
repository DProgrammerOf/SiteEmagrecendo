@extends('website.template.master_template')

@section('titulo')
	{{ $titulo }}
@endsection

@section('conteudo')
	<div class="technology">
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="tech-no">
			<!-- technology-top -->
			
			 <div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
				
					<div class="tch-img">
						<a href="#"><img src="{{ asset('images/artigos/'.$artigodestaque->figura) }}" class="img-responsive" alt=""></a>
					</div>
					
					<h3><a href="{{ '/artigo/'.str_slug($artigodestaque->titulo) }}">{{ $artigodestaque->titulo }}</a></h3>
					<h6>BY <a href="#">RENAN </a>JULY 10 2016.</h6>
						<p>{!! $artigodestaque->descricao !!}</p>
						<div class="bht1">
							<a href="{{ '/artigo/'.str_slug($artigodestaque->titulo) }}">Continue Lendo</a>
						</div>
						<div class="soci">
							<ul>
								<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
								<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
								<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
								<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
								<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
							</ul>
						</div>
						<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>
			<!-- technology-top -->
			<!-- technology-top -->
			<div class="w3ls">
				<div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					 <div class="tc-ch">
						<div class="tch-img">
							<a href="#">
							<img src="images/m4.jpg" class="img-responsive" alt=""></a>
						</div>
					
						<h3><a href="#">Lorem Ipsum is simply</a></h3>
						<h6>BY <a href="#">RENAN </a>JULY 10 2016.</h6>
							<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="bht1">
								<a href="#">Saiba mais</a>
							</div>
							<div class="soci">
								<ul>
									<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 w3ls-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					 <div class="tc-ch">
						<div class="tch-img">
							<a href="#"><img src="images/m5.jpg" class="img-responsive" alt=""></a>
						</div>
					
						<h3><a href="#">Lorem Ipsum is simply</a></h3>
						<h6>BY <a href="#">RENAN </a>JULY 10 2016.</h6>
							<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
							<div class="bht1">
								<a href="#">Saiba mais</a>
							</div>
							<div class="soci">
								<ul>
									<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<!-- technology-top -->
			<div class="wthree">
				 <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tch-img">
							<a href="#"><img src="images/f1.jpg" class="img-responsive" alt=""></a>
						</div>
				 </div>
				 <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<h3><a href="#">Lorem Ipsum is simply</a></h3>
						<h6>BY <a href="#">RENAN </a>JULY 10 2016.</h6>
							<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris .</p>
							<div class="bht1">
								<a href="#">Saiba mais</a>
							</div>
							<div class="soci">
								<ul>
									
									<li class="hvr-rectangle-out"><a class="twit" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="pin" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					
				 </div>
					<div class="clearfix"></div>
			</div>
			<div class="wthree">
				 <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tch-img">
							<a href="#"><img src="images/f2.jpg" class="img-responsive" alt=""></a>
						</div>
				 </div>
				 <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<h3><a href="#">Lorem Ipsum is simply</a></h3>
						<h6>BY <a href="#">RENAN </a>JULY 10 2016.</h6>
							<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris .</p>
							<div class="bht1">
								<a href="#">Saiba mais</a>
							</div>
							<div class="soci">
								<ul>
									<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>									
									<li class="hvr-rectangle-out"><a class="fb" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					
				 </div>
					<div class="clearfix"></div>
			</div>
			<div class="wthree">
				 <div class="col-md-6 wthree-left wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<div class="tch-img">
							<a href="#"><img src="images/f3.jpg" class="img-responsive" alt=""></a>
						</div>
				 </div>
				 <div class="col-md-6 wthree-right wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
						<h3><a href="#">Lorem Ipsum is simply</a></h3>
						<h6>BY <a href="#">RENAN </a>JULY 10 2016.</h6>
							<p>Ut enim ad minim veniam, quis nostrud eiusmod tempor incididunt ut labore et dolore magna aliqua exercitation ullamco laboris.</p>
							<div class="bht1">
								<a href="#">Saiba mais</a>
							</div>
							<div class="soci">
								<ul>
									<li class="hvr-rectangle-out"><a class="drib" href="#"></a></li>
									<li class="hvr-rectangle-out"><a class="goog" href="#"></a></li>
								</ul>
							</div>
							<div class="clearfix"></div>
					
				 </div>
					<div class="clearfix"></div>
			</div>
			</div>
		</div>
		<!-- technology-right -->
		<div class="col-md-3 technology-right">
				
				
				<div class="blo-top1">
							
					<div class="tech-btm">
					<div class="search-1 wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
							<form action="#" method="post">
								<input type="search" name="Search" value="O que você procura?" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'O que você procura?';}" required="">
								<input type="submit" value=" ">
							</form>
						</div>
					<h4 class="wow fadeInDown">Artigos Populares </h4>

						@forelse( $artigos as $Artigo )
							<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
								<div class="blog-grid-left">
									<a href="{{ '/artigo/'.str_slug($Artigo->titulo) }}"><img src="images/artigos/{{ $Artigo->figura }}" class="img-responsive" alt=""></a>
								</div>
								<div class="blog-grid-right">
									
									<h5><a href="{{ '/artigo/'.str_slug($Artigo->titulo) }}">{{ $Artigo->titulo }}</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
						@empty
							<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
								<div class="blog-grid">
									Nenhum artigo registrado.
								</div>
								<div class="clearfix"> </div>
							</div>
						@endforelse
						
						<div class="insta wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
					<h4>Instagram</h4>
						<ul>
							
							<li><a href="#"><img src="images/t1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="#"><img src="images/m1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="#"><img src="images/f1.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="#"><img src="images/m2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="#"><img src="images/f2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="#"><img src="images/t2.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="#"><img src="images/f3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="#"><img src="images/t3.jpg" class="img-responsive" alt=""></a></li>
							<li><a href="#"><img src="images/m3.jpg" class="img-responsive" alt=""></a></li>
						</ul>
					</div>
					
					<p>Lorem ipsum ex vix illud nonummy, novum tation et his. At vix scripta patrioque scribentur, at pro</p>
					<div class="twt">
					
						<iframe id="twitter-widget-0" scrolling="no" frameborder="0" allowtransparency="true" class="twitter-hashtag-button twitter-hashtag-button-rendered twitter-tweet-button" title="Twitter Tweet Button" src="https://platform.twitter.com/widgets/tweet_button.b7de008f493a5185d8df1aedd62d77c6.en.html#button_hashtag=TwitterStories&amp;dnt=false&amp;id=twitter-widget-0&amp;lang=en&amp;original_referer=https%3A%2F%2Fp.w3layouts.com%2Fdemos%2Fduplex%2Fweb%2F&amp;size=l&amp;time=1467721486626&amp;type=hashtag" style="position: static; visibility: visible; width: 166px; height: 28px;" data-hashtag="TwitterStories"></iframe>
						<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
					</div>
					</div>
					
					
					
				</div>
				
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
@endsection