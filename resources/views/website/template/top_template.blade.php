<div class="services w3l wow fadeInDown"  data-wow-duration=".8s" data-wow-delay=".2s">
		<div class="container">
			<div class="grid_3 grid_5">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true">DIETAS</a></li>
						<li role="presentation" class=""><a href="#safari" role="tab" id="safari-tab" data-toggle="tab" aria-controls="safari">SUPLEMENTOS</a></li>
						<li role="presentation" class=""><a href="#trekking" role="tab" id="trekking-tab" data-toggle="tab" aria-controls="trekking">TREINOS</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade" id="expeditions" aria-labelledby="expeditions-tab">
							
							@foreach($dietas as $dieta)
							<div class="col-md-4 col-sm-5 tab-image">
								<a href="{{ '/dieta/'.str_slug($exercicio->titulo) }}">
								<img src="{{ asset('images/artigos/'.$dieta->figura) }}" class="img-responsive" alt="Wanderer">
								</a>
							</div>
							@endforeach
							<div class="clearfix"></div>
						</div>
						
						
						<div role="tabpanel" class="tab-pane fade" id="safari" aria-labelledby="safari-tab">
							@foreach($suplementos as $suplemento)
							<div class="col-md-4 col-sm-5 tab-image">
								<a href="{{ '/suplemento/'.str_slug($exercicio->titulo) }}">
								<img src="{{ asset('images/artigos/'.$suplemento->figura) }}" class="img-responsive" alt="Wanderer">
								</a>
							</div>
							@endforeach
							<div class="clearfix"></div>
						</div>
						<div role="tabpanel" class="tab-pane fade active in" id="trekking" aria-labelledby="trekking-tab">
							@foreach($exercicios as $exercicio)
							<div class="col-md-4 col-sm-5 tab-image">
								<a href="{{ '/treino/'.str_slug($exercicio->titulo) }}">
								<img src="{{ asset('images/artigos/'.$exercicio->figura) }}" class="img-responsive" alt="Wanderer">
								</a>
							</div>
							@endforeach
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>