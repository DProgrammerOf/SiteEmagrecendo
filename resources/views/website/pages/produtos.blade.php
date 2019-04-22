@extends('website.template.simple_template')

@section('titulo')
	{{ $titulo }}
@endsection

@section('head')
<link rel="stylesheet" type="text/css" href="{{ asset('css/ebooks.css') }}">
@endsection

@section('conteudo')
<div>
	<div class="container">
		<div id="procurar-ebooks">
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

	<div class="col-md-4 ebook-left">
		<div class="categorias">
			<h3>Categorias</h3>

		  <ul>
		  	<li><a href="#">Dicas</a></li>
		  	<li><a href="#">Receitas</a></li>
		  	<li><a href="#">Treinos</a></li>
		  	<li><a href="#">Produtos</a></li>
		  </ul>	
		</div>
	</div>

	<div class="col-md-4 ebook-right">
	  <div id="ebooks" class="row">

	    <div class="col-xs-6 col-md-4">
	    	<figure>
	    		<figcaption><a href="#">XTreme 21</a></figcaption>
		    	<a href="#">
		    	<img src="https://api-thumbor.hotmart.com/0-d9IC1-gTjWNSmR1N68cA-1EQU=/filters:background_color(white)/hotmart/product_pictures/c4ceafc3-800e-4498-a9f2-6f56a87ede90/xtreme21hotmart.png" width=50% alt="Xtreme 21">
		    	</a>
	   		</figure>
	   		<p class="descricao">
				O programa de treinamento Xtreme 21 é completamente desenvolvido para a queima de gordura.<br>Todos os exercícios são realizados em curto espaço de tempo e com alta intensidade, levando o corpo ao esforço máximo, o que faz com que o organismo queime gordura até muitas horas depois da prática.
				</p>
			<div class="row ebook-footer">
				<div class="col-xs-6 col-md-9 center" style="background-color:#20c65c; color: #ffffff;">
					<p class="vtotal">R$409,53</p>
					<p class="vparcelado">parcelado em até 12x de R$39,90.</p>
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: #ffa500; color: #ffffff; font-weight: bold;">
					<p class="vver"><a href="#">VER</a></p>
				</div>
			</div>
	    </div>
  		<div class="col-xs-6 col-md-4">
  			<figure>
  				<figcaption><a href="#">Dieta de 21 dias</a></figcaption>
  				<a href="#">
		    	<img src="https://api-thumbor.hotmart.com/-u-B5kNmbEml3XxzRLnF7Dl3iCM=/filters:background_color(white)/hotmart/product_pictures/eb168ed0-1867-41d5-94bc-6bf8ba491a06/logodietade21diashotmart.jpg" width=50% alt="Dieta de 21 dias">
		    	</a>
	   		</figure>
	   		<p class="descricao">
				A Dieta de 21 dias tem um diferencial que outros produtos não podem entregar (rápida perda de peso - apenas 21 dias), e fornece grande valor ao cliente através de nossos 4 Manuais e 2 Bônus Incríveis.<br>
				Além do Desafio de 21 dias que todos os clientes poderão participar.<br> &nbsp;
				</p>
				<div class="row ebook-footer">
				<div class="col-xs-6 col-md-9 center" style="background-color:#20c65c; color: #ffffff;">
					<p class="vtotal">R$187,00</p>
					<p class="vparcelado">parcelado em até 12x de R$31,16.</p>
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: #ffa500; color: #ffffff; font-weight: bold;">
					<p class="vver"><a href="#">VER</a></p>
				</div>
			</div>
	   	</div>
  		<div class="col-xs-6 col-md-4">
  			<figure>
  				<figcaption><a href="#">Low Carb. Receitas</a></figcaption>
  				<a href="#">
		    	<img src="https://api-thumbor.hotmart.com/vLuuxgASXIHPdqFef3k8bBOxeD4=/filters:background_color(white)/hotmart/product_pictures/f4b6f160-c3db-49ef-8265-4c8f5dd6ea5b/capaparaoprodutonohotmart.png" width=50% alt="Low Carb Receitas - Masb">
		    	</a>
	   		</figure>
	   		<p class="descricao">
				O Low Carb Receitas tem como objetivo, potencializar a queima de Gordura por meio de receitas Low Carb práticas e deliciosas. <br>Contém receitas para todos os tipos refeições, visando todos os cuidados necessários para o emagrecimento e qualidade de Vida.
				<br> &nbsp;</p>
				<div class="row ebook-footer">
				<div class="col-xs-6 col-md-9 center" style="background-color:#20c65c; color: #ffffff;">
					<p class="vtotal">R$67,90</p>
					<p class="vparcelado">parcelado em até 12x de R$5,65.</p>
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: #ffa500; color: #ffffff; font-weight: bold;">
					<p class="vver"><a href="#">VER</a></p>
				</div>
			</div>
  		</div>
	  </div>


	  <div id="ebooks" class="row">

	    <div class="col-xs-6 col-md-4">
	    	<figure>
	    		<figcaption><a href="#">XTreme 21</a></figcaption>
		    	<a href="#">
		    	<img src="https://api-thumbor.hotmart.com/0-d9IC1-gTjWNSmR1N68cA-1EQU=/filters:background_color(white)/hotmart/product_pictures/c4ceafc3-800e-4498-a9f2-6f56a87ede90/xtreme21hotmart.png" width=50% alt="Xtreme 21">
		    	</a>
	   		</figure>
	   		<p class="descricao">
				O programa de treinamento Xtreme 21 é completamente desenvolvido para a queima de gordura.<br>Todos os exercícios são realizados em curto espaço de tempo e com alta intensidade, levando o corpo ao esforço máximo, o que faz com que o organismo queime gordura até muitas horas depois da prática.
				</p>
			<div class="row ebook-footer">
				<div class="col-xs-6 col-md-9 center" style="background-color:#20c65c; color: #ffffff;">
					<p class="vtotal">R$409,53</p>
					<p class="vparcelado">parcelado em até 12x de R$39,90.</p>
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: #ffa500; color: #ffffff; font-weight: bold;">
					<p class="vver"><a href="#">VER</a></p>
				</div>
			</div>
	    </div>
  		<div class="col-xs-6 col-md-4">
  			<figure>
  				<figcaption><a href="#">Dieta de 21 dias</a></figcaption>
  				<a href="#">
		    	<img src="https://api-thumbor.hotmart.com/-u-B5kNmbEml3XxzRLnF7Dl3iCM=/filters:background_color(white)/hotmart/product_pictures/eb168ed0-1867-41d5-94bc-6bf8ba491a06/logodietade21diashotmart.jpg" width=50% alt="Dieta de 21 dias">
		    	</a>
	   		</figure>
	   		<p class="descricao">
				A Dieta de 21 dias tem um diferencial que outros produtos não podem entregar (rápida perda de peso - apenas 21 dias), e fornece grande valor ao cliente através de nossos 4 Manuais e 2 Bônus Incríveis.<br>
				Além do Desafio de 21 dias que todos os clientes poderão participar.<br> &nbsp;
				</p>
				<div class="row ebook-footer">
				<div class="col-xs-6 col-md-9 center" style="background-color:#20c65c; color: #ffffff;">
					<p class="vtotal">R$187,00</p>
					<p class="vparcelado">parcelado em até 12x de R$31,16.</p>
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: #ffa500; color: #ffffff; font-weight: bold;">
					<p class="vver"><a href="#">VER</a></p>
				</div>
			</div>
	   	</div>
  		<div class="col-xs-6 col-md-4">
  			<figure>
  				<figcaption><a href="#">Low Carb. Receitas</a></figcaption>
  				<a href="#">
		    	<img src="https://api-thumbor.hotmart.com/vLuuxgASXIHPdqFef3k8bBOxeD4=/filters:background_color(white)/hotmart/product_pictures/f4b6f160-c3db-49ef-8265-4c8f5dd6ea5b/capaparaoprodutonohotmart.png" width=50% alt="Low Carb Receitas - Masb">
		    	</a>
	   		</figure>
	   		<p class="descricao">
				O Low Carb Receitas tem como objetivo, potencializar a queima de Gordura por meio de receitas Low Carb práticas e deliciosas. <br>Contém receitas para todos os tipos refeições, visando todos os cuidados necessários para o emagrecimento e qualidade de Vida.
				<br> &nbsp;</p>
				<div class="row ebook-footer">
				<div class="col-xs-6 col-md-9 center" style="background-color:#20c65c; color: #ffffff;">
					<p class="vtotal">R$67,90</p>
					<p class="vparcelado">parcelado em até 12x de R$5,65.</p>
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: #ffa500; color: #ffffff; font-weight: bold;">
					<p class="vver"><a href="#">VER</a></p>
				</div>
			</div>
  		</div>
	  </div>

	  <div id="ebooks" class="row">

	    <div class="col-xs-6 col-md-4">
	    	<figure>
	    		<figcaption><a href="#">XTreme 21</a></figcaption>
		    	<a href="#">
		    	<img src="https://api-thumbor.hotmart.com/0-d9IC1-gTjWNSmR1N68cA-1EQU=/filters:background_color(white)/hotmart/product_pictures/c4ceafc3-800e-4498-a9f2-6f56a87ede90/xtreme21hotmart.png" width=50% alt="Xtreme 21">
		    	</a>
	   		</figure>
	   		<p class="descricao">
				O programa de treinamento Xtreme 21 é completamente desenvolvido para a queima de gordura.<br>Todos os exercícios são realizados em curto espaço de tempo e com alta intensidade, levando o corpo ao esforço máximo, o que faz com que o organismo queime gordura até muitas horas depois da prática.
				</p>
			<div class="row ebook-footer">
				<div class="col-xs-6 col-md-9 center" style="background-color:#20c65c; color: #ffffff;">
					<p class="vtotal">R$409,53</p>
					<p class="vparcelado">parcelado em até 12x de R$39,90.</p>
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: #ffa500; color: #ffffff; font-weight: bold;">
					<p class="vver"><a href="#">VER</a></p>
				</div>
			</div>
	    </div>
  		<div class="col-xs-6 col-md-4">
  			<figure>
  				<figcaption><a href="#">Dieta de 21 dias</a></figcaption>
  				<a href="#">
		    	<img src="https://api-thumbor.hotmart.com/-u-B5kNmbEml3XxzRLnF7Dl3iCM=/filters:background_color(white)/hotmart/product_pictures/eb168ed0-1867-41d5-94bc-6bf8ba491a06/logodietade21diashotmart.jpg" width=50% alt="Dieta de 21 dias">
		    	</a>
	   		</figure>
	   		<p class="descricao">
				A Dieta de 21 dias tem um diferencial que outros produtos não podem entregar (rápida perda de peso - apenas 21 dias), e fornece grande valor ao cliente através de nossos 4 Manuais e 2 Bônus Incríveis.<br>
				Além do Desafio de 21 dias que todos os clientes poderão participar.<br> &nbsp;
				</p>
				<div class="row ebook-footer">
				<div class="col-xs-6 col-md-9 center" style="background-color:#20c65c; color: #ffffff;">
					<p class="vtotal">R$187,00</p>
					<p class="vparcelado">parcelado em até 12x de R$31,16.</p>
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: #ffa500; color: #ffffff; font-weight: bold;">
					<p class="vver"><a href="#">VER</a></p>
				</div>
			</div>
	   	</div>
  		<div class="col-xs-6 col-md-4">
  			<figure>
  				<figcaption><a href="#">Low Carb. Receitas</a></figcaption>
  				<a href="#">
		    	<img src="https://api-thumbor.hotmart.com/vLuuxgASXIHPdqFef3k8bBOxeD4=/filters:background_color(white)/hotmart/product_pictures/f4b6f160-c3db-49ef-8265-4c8f5dd6ea5b/capaparaoprodutonohotmart.png" width=50% alt="Low Carb Receitas - Masb">
		    	</a>
	   		</figure>
	   		<p class="descricao">
				O Low Carb Receitas tem como objetivo, potencializar a queima de Gordura por meio de receitas Low Carb práticas e deliciosas. <br>Contém receitas para todos os tipos refeições, visando todos os cuidados necessários para o emagrecimento e qualidade de Vida.
				<br> &nbsp;</p>
				<div class="row ebook-footer">
				<div class="col-xs-6 col-md-9 center" style="background-color:#20c65c; color: #ffffff;">
					<p class="vtotal">R$67,90</p>
					<p class="vparcelado">parcelado em até 12x de R$5,65.</p>
				</div>
				<div class="col-xs-6 col-md-3" style="background-color: #ffa500; color: #ffffff; font-weight: bold;">
					<p class="vver"><a href="#">VER</a></p>
				</div>
			</div>
  		</div>
	  </div>

	

	  


</div>

</div>
@endsection