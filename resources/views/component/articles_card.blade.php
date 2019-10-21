	<div class="row blue">
		<div class="container">
			<h2 class="headerarticle">Did You Know?</h2>
			<div class="row">
				@foreach ($articles as $article)
				<div class="col">
					<div class="card bg-light mt-5" style="max-width: 19rem;">
						<div class="card-header">{{$article -> title}}</div>
						<div class="card-body">
							<p class="card-text">{{$article -> content}}</p>
						</div>
					</div>
				</div>	
				@endforeach
			</div>

		</div>
	</div>
