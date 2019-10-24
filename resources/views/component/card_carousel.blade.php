<div class="film-slider">
	<div class="container my-4">

		<!--Carousel Wrapper-->
		<div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">


			<!--Indicators-->
			<ol class="carousel-indicators">
				<li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
				<li data-target="#multi-item-example" data-slide-to="1"></li>
				<li data-target="#multi-item-example" data-slide-to="2"></li>
			</ol>
			<!--/.Indicators-->

			<!--Slides-->
			<div class="carousel-inner" role="listbox">

				<!--First slide-->
				@for ($i = 0; $i = 7 ; $i)

				<div class="carousel-item active">
					<div class="row">
						@for ($j = 0; $j = 3 ; $j++)
						@if (isset($movie[$i]))

						<div class="col-md-4">
							<div class="card mb-2">
								<img class="card-img-top imgsld" src="assets/{{$movie[$i]->avatar}}"
								alt="Card image cap">
								<div class="card-body bg-dark">
									<h4 class="card-title movies-slider">{{$movie[$i]->title}}</h4>
									<p class="card-text movies-slider">{{$movie[$i]->year}}</p>
								</div>
							</div>
						</div>
						{{ $i++ }}

						@endif
						@endfor
					</div>
				</div>
				@endfor


				<!--/.First slide-->

				<!--Second slide-->
				<div class="carousel-item">

					<div class="row">
						@for ($i =3; $i = 5; $i++)
						<div class="col-md-4">
							<div class="card mb-2">
								<img class="card-img-top imgsld" src="assets/{{$movie[$i]->avatar}}"
								alt="Card image cap">
								<div class="card-body bg-dark">
									<h4 class="card-title movies-slider">{{$movie[$i]->title}}</h4>
									<p class="card-text movies-slider">{{$movie[$i]->year}}</p>
								</div>
							</div>
						</div>
						@endfor
					</div>
				</div>
				<!--/.Second slide-->

				<!--Third slide-->
				<div class="carousel-item">

					<div class="row">

						<div class="col-md-4">
							<div class="card mb-2">
								<img class="card-img-top imgsld" src="assets/{{$movie[$i]->avatar}}"
								alt="Card image cap">
								<div class="card-body bg-dark">
									<h4 class="card-title movies-slider">{{$movie[$i]->title}}</h4>
									<p class="card-text movies-slider">{{$movie[$i]->year}}</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/.Third slide-->

			</div>
			<!--/.Slides-->

		</div>
		<!--/.Carousel Wrapper-->
	</div>
</div>