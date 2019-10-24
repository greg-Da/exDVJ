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
				<div class="carousel-item active">

					<div class="row">
						@for ($i =0; $i <= 2; $i++)
						<div class="col-md-4">
							<a href="{{route('movie.show', $movie[$i]->id)}}">
								<div class="card mb-2 carouselmovie">
									<img class="card-img-top imgsld" src="assets/{{$movie[$i]->avatar}}"
									alt="Card image cap">
									<div class="card-body bg-dark">
										<h5 class="card-title movies-slider">{{$movie[$i]->title}}</h5>
										<p class="card-text movies-slider">{{$movie[$i]->year}}</p>
									</div>
								</div>
							</a>
						</div>
						@endfor
					</div>
				</div>


				<!--/.First slide-->

				<!--Second slide-->
				<div class="carousel-item">

					<div class="row">
						@for ($i =3; $i <= 5; $i++)
						<div class="col-md-4">
							<a href="{{route('movie.show', $movie[$i]->id)}}">
								<div class="card mb-2 carouselmovie">
									<img class="card-img-top imgsld" src="assets/{{$movie[$i]->avatar}}"
									alt="Card image cap">
									<div class="card-body bg-dark">
										<h5 class="card-title movies-slider">{{$movie[$i]->title}}</h5>
										<p class="card-text movies-slider">{{$movie[$i]->year}}</p>
									</div>
								</div>
							</a>
						</div>
						@endfor
					</div>
				</div>
				<!--/.Second slide-->

				<!--Third slide-->
				<div class="carousel-item">

					<div class="row">
						@for ($i =6; $i <= 8; $i++)
						<div class="col-md-4">
							<a href="{{route('movie.show', $movie[$i]->id)}}">
								<div class="card mb-2 carouselmovie">
									<img class="card-img-top imgsld" src="assets/{{$movie[$i]->avatar}}"
									alt="Card image cap">
									<div class="card-body bg-dark">
										<h5 class="card-title movies-slider">{{$movie[$i]->title}}</h5>
										<p class="card-text movies-slider">{{$movie[$i]->year}}</p>
									</div>
								</div>
							</a>
						</div>
						@endfor
					</div>
				</div>
				<!--/.Third slide-->

			</div>
			<!--/.Slides-->

		</div>
		<!--/.Carousel Wrapper-->
	</div>
</div>