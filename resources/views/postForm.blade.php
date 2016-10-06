Day la post form gui du lieu <br>
<form action="{{route('postForm')}}" method="post">
	<input type="text" name="HoTen">
	<input type="submit">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
</form>