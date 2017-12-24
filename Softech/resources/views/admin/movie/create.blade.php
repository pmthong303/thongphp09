@extends ('admin.layouts.index')
@section('content')
    <body>
    <div class="container">
    <h2 >Create Movie </h2>
    <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label class="control-label col-sm-2" for="email">Movie Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Enter Movie name" name="name">
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-sm-2" for="sel1">Category</label>
            <div class="col-sm-10">
                <select class="form-control" id="sel1" name="category">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-sm-2" for="sel1">Country</label>
            <div class="col-sm-10">
                <select class="form-control" id="sel1" name="country">
                    @foreach($countries as $country)
                        <option value="{{ $country->id }}">{{ $country->country }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label  class="control-label col-sm-2" for="sel1">Genres</label>
            <div class="col-sm-10">
                <select class="form-control" id="sel1" name="genres">
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->genres }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Detail:</label>
            <div class="col-sm-10">
                <textarea  class="ckeditor" placeholder="Enter Detail" name="detail" ></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Quality:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Enter Quality" name="quality">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Year:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Enter Year" name="year">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Duration:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control"  placeholder="Enter Duration" name="duration">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Image:</label>
            <div class="col-sm-10">
                <input type="file" name="image" >
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

