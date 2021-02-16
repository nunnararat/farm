<h1>data list</h1>

<ul>
    {{-- @foreach($data['meals'] as $item)
    <li><h3>{{$item['strMeal']}}</h3></li>
    @endforeach --}}

    @foreach($data['book_array'] as $item)
    {{-- <li><h3>{{$item['image']}}</h3></li> --}}
    <img src="{{$item['image']}}">
    </br>
    @endforeach
</ul>

