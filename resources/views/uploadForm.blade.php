<form action="{{route("uploadPost")}}" method="post" enctype="multipart/form-data">
<input type="file" name="myFile">
<input type="submit" name="submit">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>