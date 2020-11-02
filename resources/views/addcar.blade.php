<form method="get" action="{{action('CarController@showAll')}}">
    <input type="submit" value="Show All"/>
</form>

<form method="post" action="{{ action('CarController@insert') }}">
    Vyrobca:<br>
    <input type="text" name="vyrobca" placeholder="Vyrobca" value="" required autofocus/><br>

    Typ:<br>
    <input type="text" name="typ" placeholder="Typ" value="" required/><br>

    Obsah:<br>
    <input type="number" name="obsah" placeholder="Obsah" value="" required/><br>

    Hmotnosť:<br>
    <input type="number" name="hmotnost" placeholder="Hmotnosť" value="" required/><br><br>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="submit" value="Submit"/>
</form>