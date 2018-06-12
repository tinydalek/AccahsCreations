@extends('layouts.layoutloggedin')

@section('content')


<h3> Upload An Image For {{ $post->product_name }} </h3>
<br/>
    <form class="form-horizontal" action="{{ URL::to('upload') }}" method="post" enctype="multipart/form-data" >
        
        {{ csrf_field() }}

		<label>Select image to upload:</label>
		<input type="file" name="file" id="file">
		<input type="submit" value="Upload" name="submit">

        <br/>        
        <button id="submit" type="submit" class="btn btn-info btn-lg">Upload Image</button>
        
    </form>


@endsection