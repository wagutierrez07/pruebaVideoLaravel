@foreach($data as $row)
<video width="320" height="240" autoplay muted>
  <source src="{{asset('upload')}}/{{$row['url_video']}}" type="video/mp4">
</video>
@endforeach