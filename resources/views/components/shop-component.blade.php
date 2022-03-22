<div>
    <h1>This is a Component</h1>
    <h2>Hello {{$name}}</h2>
    <h3>Fruits Are :</h3>
    <ul>
        @foreach($fruits as $fruit)
          <li>{{$fruit}}</li>
        @endforeach
    </ul>

    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}
    @endfor
</div>