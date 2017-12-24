@extends ('block.index')
@section('content')
    <div id="main">
        <div class="name">
            <img src={{ asset('page_movie/images/title.png') }}>
            <h3>{{ $movie->name }}</h3>
        </div>
        <div class=section>
            <div class="image">
                <img src={{asset('images/'.$movie->image)}}>
            </div>
            <div class="information">
                <p class="duration">
                    <img src="{{ asset('page_movie/images/time.png') }}" style="float:left;">
                <p style="padding-left: 34px; padding-top: 2px;">{{ $movie->duration }}</p>
                </p>
                <div class="country">
                    <p style="font-weight: bold;">{{ $movie->country->country }}</p>
                </div>
                <div class="genres">
                    <p style="font-weight: bold;">{{ $movie->category->category }} </p>
                </div>
                <p class="quality">
                   {{ $movie->quality }}
                </p>
                <p class="actor">
                    @foreach($movie->actor as $at)
                        {{ $at->name}}
                    @endforeach
                </p>
                <p class="year">
                    {{ $movie->year }}
                </p>
                <p class="view">
                    Views: 888
                </p>
                <div class="share">
                    Share:
                    <a href="#" class="face-share"><img src={{ asset('page_movie/images/facebook-share.png') }}></a>
                    <a href="#" class="tt-share"><img src={{ asset('page_movie/images/twitter-share.png') }}></a>
                </div>
            </div>
            <div class="watch">
                <a href="https://www.youtube.com/watch?v=a7orCRRHkzU"><button class="btn see">Watch Movie</button></a>
                <button class="btn trailer">Trailer</button>
            </div>
            <div class="detail">
                <h2>Nội dung phim</h2>
                <p>{{ $movie->detail }}</p>
            </div>
            @if(\Illuminate\Support\Facades\Auth::User())
            <div class="comment">
                <div class="box1">
                    <h3>Bình luận phim</h3>
                    <form action="comment/{{$movie->id }}" method="post">
                        {{ csrf_field() }}
                        <div class="text">
                            <textarea rows="6" cols="100" name="txtComment" placeholder="Add your comment here"></textarea>
                        </div>
                        <div class="addcomment">
                            <button class="btn add" type="submit">Add comment</button>
                        </div>
                    </form>


            @endif
                @foreach( $movie->comments as $comment)
                <div class="content1">
                    <div class="frame">
                        <img src="{{ asset('page_movie/images/user.png') }}" alt="">
                        <p class="name-user">{{ $comment->User->name }}</p>
                        <small>{{ $comment->created_at }}</small>
                    </div>
                    <div class="info">
                        <p class="content-comment">{{ $comment->content }}</p>
                    </div>
                </div>
                    @endforeach

            </div>
        </div>




                <!--End comment-->
        </div> <!--End main-->
@endsection

