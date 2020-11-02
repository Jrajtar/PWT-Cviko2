<form method="post" action="{{ action('CarController@update', ['id' => $car->id]) }}">
    Vyrobca:<br>
    <input type="text" name="vyrobca" placeholder="Vyrobca" value="{{$car -> vyrobca}}" required autofocus/><br>

    Typ:<br>
    <input type="text" name="typ" placeholder="Typ" value="{{$car -> typ}}" required/><br>

    Obsah:<br>
    <input type="number" name="obsah" placeholder="Obsah" value="{{$car -> obsah}}" required/><br>

    Hmotnosť:<br>
    <input type="number" name="hmotnost" placeholder="Hmotnosť" value="{{$car -> hmotnost}}" required/><br><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Submit"/>
</form>
