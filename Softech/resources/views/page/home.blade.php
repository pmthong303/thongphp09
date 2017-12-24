@extends ('block.index')
@section('content')
    <div id="main">
		@foreach($movies as $movie)
			<div class="content">
				<div class="box">
					<div class="movie">
						<div class="movie-image"> <a href={{ url('home/detail/'.$movie->id)}}><img src={{asset('images/'.$movie->image)}} alt="" /></a></div>
						<div class="movie-name">
							<p>{{ $movie->name }}</p>
						</div>
						<div class="genres">
							<p>{{ $movie->category->category }}</p>
						</div>
                    </div>
                </div>
            </div>
		@endforeach
    </div>
@endsection