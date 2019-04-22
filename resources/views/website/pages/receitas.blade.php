@extends('website.template.simple_template')

@section('titulo')
	{{ $titulo }}
@endsection

@section('head')
<style type="text/css">

	#main-slide{
		width: 100%;
		height: 100%;
		clear: both;
		padding-bottom: 10%;
	}

	#slider {
		position: relative;
	    display: block;
	    width: 100%;
	    padding-left: 11%;
	    padding-bottom: 30%;
	    padding-top: 3%;
	}

	/*#slider-1 {
		height: 350px;
	}

	#slider-2,#slider-3,#slider-4,#slider-5 {
		display: none;
		height: 350px;
	}*/

	.slider-receitas {
		display: none;
		height: 350px;
	}

	#slider-left, #slider-right {	
		margin: auto;
		float: left;
		height: 350px;
		background-color: rgba(32, 198, 92, 0.8);

	}

	div#slider-left:hover,  div#slider-right:hover{
		background-color: rgba(32, 198, 92, 0.7);
	}

	#slider-left > span, #slider-right > span {
		margin: 160px 12px auto 12px;
		font-size: 200%;
	}

	#slider-center {
		float: left;
	}

	.slider-foto img {
		height: 100%;
	}

	.slider-desc h2{
		margin: 5% 1% 5% 5%;
		font-size: 120%;
	}

	.icons-desc {
		width: 40%;
	}

	#desc-icones > figure {
		float: left;
		width: 20%;
		text-align: center;
		margin-left: 10%;
		margin-top: 15%;
	}

	.slider-receitas > div > div > p {
		margin: 5% !important;
	}
</style>
@endsection

@section('conteudo')
<div>
	<div class="container">
		<div id="main-slide">
				<div id='slider'>
					<a class="slider-left-a" href="#1" onclick="plusDivs(-1)">
						<div id='slider-left'>
						<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
						</div>
					</a>				

					<div id="slider-center" style="background: #000;">
						<div id='slider-1' class="slider-receitas">
							<div class="slider-foto" style="float: left;"><img src="{{ asset('images/receitas/1.jpg') }}" alt="Receita 1" /></div>
							<div style="float: left; background: #fff; height: 350px; width: 30em;">
							<div class="slider-desc">
								<h2>Polpetone assado e recheado</h2>
								<p style="font-size: 11px;">
								Polpetone é uma preparação da culinária popular em muitos países de várias regiões do mundo e consiste em carne moída, muitas vezes aproveitando restos de pratos de carne anteriormente preparados, misturada com ovos ou algum farináceo que permita transformar a mistura na forma de um rolo, que normalmente é assado no forno</p>
									<div id="desc-icones" style="padding: 10% 10% 10% 5%;">
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/clock.png')}}">
										<figcaption>50 MIN.</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/porcao.png')}}">
										<figcaption>4 PORÇÕES</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/heart.png')}}">
										<figcaption>9.877</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>


						<div id='slider-2' class="slider-receitas">
							<div class="slider-foto" style="float: left;"><img src="{{ asset('images/receitas/2.jpg') }}" alt="Receita 2" /></div>
							<div style="float: left; background: #fff; height: 350px; width: 30em;">
							<div class="slider-desc">
								<h2>Polpetone assado e recheado</h2>
								<p style="font-size: 11px;">
								Polpetone é uma preparação da culinária popular em muitos países de várias regiões do mundo e consiste em carne moída, muitas vezes aproveitando restos de pratos de carne anteriormente preparados, misturada com ovos ou algum farináceo que permita transformar a mistura na forma de um rolo, que normalmente é assado no forno</p>
									<div id="desc-icones" style="padding: 10% 10% 10% 5%;">
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/clock.png')}}">
										<figcaption>50 MIN.</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/porcao.png')}}">
										<figcaption>4 PORÇÕES</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/heart.png')}}">
										<figcaption>9.877</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>


						<div id='slider-3' class="slider-receitas">
							<div class="slider-foto" style="float: left;"><img src="{{ asset('images/receitas/3.jpg') }}" alt="Receita 3" /></div>
							<div style="float: left; background: #fff; height: 350px; width: 30em;">
							<div class="slider-desc">
								<h2>Polpetone assado e recheado</h2>
								<p style="font-size: 11px;">
								Polpetone é uma preparação da culinária popular em muitos países de várias regiões do mundo e consiste em carne moída, muitas vezes aproveitando restos de pratos de carne anteriormente preparados, misturada com ovos ou algum farináceo que permita transformar a mistura na forma de um rolo, que normalmente é assado no forno</p>
									<div id="desc-icones" style="padding: 10% 10% 10% 5%;">
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/clock.png')}}">
										<figcaption>50 MIN.</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/porcao.png')}}">
										<figcaption>4 PORÇÕES</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/heart.png')}}">
										<figcaption>9.877</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>


						<div id='slider-4' class="slider-receitas">
							<div class="slider-foto" style="float: left;"><img src="{{ asset('images/receitas/4.jpg') }}" alt="Receita 4" /></div>
							<div style="float: left; background: #fff; height: 350px; width: 30em;">
							<div class="slider-desc">
								<h2>Polpetone assado e recheado</h2>
								<p style="font-size: 11px;">
								Polpetone é uma preparação da culinária popular em muitos países de várias regiões do mundo e consiste em carne moída, muitas vezes aproveitando restos de pratos de carne anteriormente preparados, misturada com ovos ou algum farináceo que permita transformar a mistura na forma de um rolo, que normalmente é assado no forno</p>
									<div id="desc-icones" style="padding: 10% 10% 10% 5%;">
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/clock.png')}}">
										<figcaption>50 MIN.</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/porcao.png')}}">
										<figcaption>4 PORÇÕES</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/heart.png')}}">
										<figcaption>9.877</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>


						<div id='slider-5' class="slider-receitas">
							<div class="slider-foto" style="float: left;"><img src="{{ asset('images/receitas/5.jpg') }}" alt="Receita 5" /></div>
							<div style="float: left; background: #fff; height: 350px; width: 30em;">
							<div class="slider-desc">
								<h2>Polpetone assado e recheado</h2>
								<p style="font-size: 11px;">
								Polpetone é uma preparação da culinária popular em muitos países de várias regiões do mundo e consiste em carne moída, muitas vezes aproveitando restos de pratos de carne anteriormente preparados, misturada com ovos ou algum farináceo que permita transformar a mistura na forma de um rolo, que normalmente é assado no forno</p>
									<div id="desc-icones" style="padding: 10% 10% 10% 5%;">
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/clock.png')}}">
										<figcaption>50 MIN.</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/porcao.png')}}">
										<figcaption>4 PORÇÕES</figcaption>
										</figure>
										<figure>
										<img class="icons-desc" src="{{ asset('images/receitas/icones/heart.png')}}">
										<figcaption>9.877</figcaption>
										</figure>
									</div>
								</div>
							</div>
						</div>
					</div>

					<a class="slider-right-a" href="#1" onclick="plusDivs(+1)">
						<div id='slider-right'>
						<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
						</div>
					</a>
				</div>
		</div>
		<div id="procurar-ebooks" style="clear: both;">
			<div class="row">
				<div class="col-md-4">
					<input type="text" name="ebook" placeholder="Procure o nome de um e-book..." size="35" />
					<span class="search-icon-ebook"><a href="#"><img src="{{ asset('images/lupa.png') }}" alt="Search"></a></span>
				</div>
				<div class="col-md-7 filtro-ebook">
					<strong>9</strong> E-Books disponíveis para você adquirir.
		      	
					<select class="form-control" id="preflistagem">
			        <option>Mais relevantes</option>
			        <option>Menor preço</option>
			        <option>Maior preço</option>
			      	</select>
		      	</div>
	  		</div>
	  	</div>
	</div>
</div>

<script type="text/javascript">
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("slider-receitas");
    if (n > x.length) {slideIndex = 1} 
    if (n < 1) {slideIndex = x.length} ;
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none"; 
    }
    x[slideIndex-1].style.display = "block"; 
}
</script>
@endsection