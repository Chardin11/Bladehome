<div>
    <h1>Connors Madness</h1>
    <h2>{{ $tag }}</h2>

    <ul>
        @foreach ($conmovie as $movie)
            <li>{{$movie}}</li>
        @endforeach
    </ul>
</div>