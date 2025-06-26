<h1>MY FRUIT-LIST</h1>

<ol>
    @foreach ($fruits as $fruit)
    <li>
        {{$fruit}}
    </li>
    @endforeach
</ol>