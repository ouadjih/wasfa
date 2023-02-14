<h1>{{$heading}}</h1>


@if(count($listings) == 0)
<p>No listnings available</p>
@else
@foreach($listings as $listing)
<h2>
    <a href="/wasfa/server.php/listings/{{$listing['id']}}">{{$listing['title']}}</a>
</h2>
<p>{{$listing['description']}}</p>
@endforeach
@endif