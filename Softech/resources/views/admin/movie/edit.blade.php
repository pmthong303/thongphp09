@extends ('admin.layouts.index')
@section('content')
    <body>
    <div class="container">
        <h2 >Create Movie </h2>
        <form class="form-horizontal" action="{{ route('updateMovie') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="hidden" name="id" value="{{ $movies->id }}">
            <div class="form-group">
                <label class="control-label col-sm-2" for="email">Movie Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Enter Movie name" name="name" value="{{ $movies->name }}">
                </div>
            </div>
            <div class="form-group">
                <label  class="control-label col-sm-2" for="sel1">Category</label>
                <div class="col-sm-10">
                    <select class="form-control" id="sel1" name="category">
                        @foreach($categories as $category)
                            @if($movies->category->id == $category->id )
                                <option value="{{ $category->id }}" selected>{{ $category->category }}
                            @else
                                <option value="{{ $category->id }}" >{{ $category->category }}
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label  class="control-label col-sm-2" for="sel1">Country</label>
                <div class="col-sm-10">
                    <select class="form-control" id="sel1" name="country">
                        @foreach($countries as $country)
                            @if($movies->country->id == $country->id)
                            <option value="{{ $country->id }}" selected>{{ $country->country }}</option>
                            @else
                                <option value="{{ $country->id }}" >{{ $country->country }}
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label  class="control-label col-sm-2" for="sel1">Genres</label>
                <div class="col-sm-10">
                    <select class="form-control" id="sel1" name="genres">
                        @foreach($genres as $genre)
                            @if($movies->genres->id == $genre->id)
                            <option value="{{ $genre->id }}" selected>{{ $genre->genres }}</option>
                            @else
                                <option value="{{ $genre->id }}" >{{ $genre->genres }}
                            @endif
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Detail:</label>
                <div class="col-sm-10">
                    <textarea  class="ckeditor" placeholder="Enter Detail" name="detail">{{ $movies->detail }}</textarea>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Quality:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Enter Quality" name="quality" value="{{ $movies->quality }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Year:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Enter Year" name="year" value="{{ $movies->year }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Duration:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Enter Duration" name="duration" value="{{ $movies->duration }}">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" for="pwd">Image:</label>
                <div class="col-sm-10">
                    <input type="file" name="image"> <img src={{asset('images/'.$movies->image)}} alt="" width="300px">
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>
    </body>
@endsection

