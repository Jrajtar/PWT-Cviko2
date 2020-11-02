<form method="GET" action="{{action('CarController@showInsertForm')}}">
    <input type="submit" value="Add user"/>
</form>

<table>
    @foreach($cars as $car)
        <tr>
            <td>{{$car -> vyrobca}}</td>
            <td>{{$car -> typ}}</td>
            <td>{{$car -> obsah}}</td>
            <td>{{$car -> hmotnost}}</td>
            <td>|</td>
            <td><a href="{{action('CarController@showUpdateForm', ['id' => $car -> id])}}">Update</a></td>
            <td>|</td>
            <td><a href="{{action('CarController@delete', ['id' => $car -> id])}}">Delete</a></td>
            <td>|</td>
        </tr>
    @endforeach
</table>