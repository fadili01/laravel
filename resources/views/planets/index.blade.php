<!DOCTYPE html>
<html>
<head>
    <title>Planet Index</title>
</head>
<body>

<h1>List of Planets</h1>
<ul>
    @foreach($planets as $planet)
        <li><a href="{{ url('/planets/'.$planet['name']) }}">{{ $planet['name'] }}</a></li>
    @endforeach
</ul>

</body>
</html>
