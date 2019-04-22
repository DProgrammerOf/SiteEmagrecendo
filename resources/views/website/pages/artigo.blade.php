@extends('website.template.simple_template')

@section('titulo')
	{{ $titulo }}
@endsection

@section('conteudo')
	<div>
	<div class="container">
		<div class="col-md-9 technology-left">
		<div class="tech-no">
			<!-- technology-top -->
			
			 <div class="tc-ch wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">

					<h3 style="font-size: 40px;"><a href="#"> {{ mb_strtoupper($artigo->titulo) }} </a></h3>

					
					
					<br>
					<p>
						{!! $artigo->descricao !!}
						{!! $artigo->conteudo !!}
					</p>
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
					<h4 class="wow fadeInDown">Artigos Relacionados </h4>

						@forelse( $artigos as $Artigo )
							<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
								<div class="blog-grid-left">
									<a href="#"><img src="{{ asset('images/artigos/'.$Artigo->figura) }}" class="img-responsive" alt=""></a>
								</div>
								<div class="blog-grid-right">
									
									<h5><a href="#">{{ $Artigo->titulo }}</a> </h5>
								</div>
								<div class="clearfix"> </div>
							</div>
						@empty
							<div class="blog-grids wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
								<div class="blog-grid">
									Nenhum artigo relacionado.
								</div>
								<div class="clearfix"> </div>
							</div>
						@endforelse
						
						<!-- <div class="insta wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
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
					-->
					</div>
					
					
					
				</div>
				
			
		</div>
		<div class="clearfix"></div>
		<!-- technology-right -->
	</div>
</div>
@endsection