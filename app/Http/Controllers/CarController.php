<?php


namespace App\Http\Controllers;


use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CarController extends  Controller
{

    public function showInsertForm(){
        return view('addcar');
    }

    public function showUpdateForm($id){
        $car = Car::find($id);
        return view('updatecar',['car'=>$car]);
    }

    public function show($id) {
        $car = Car::find($id);

        echo "Vyrobca: " . $car->vyrobca . "<br>" .
            "Typ: " . $car->typ . "<br>" .
            "Obsah: " . $car->obsah . "<br>" .
            "Hmotnosť: "  . $car->hmotnost . "<br>" . "<br>" ;

    }

    public function insert(Request $request) {
        $car = new Car();
        $car ->vyrobca = $request ->input('vyrobca');
        $car ->typ = $request ->input('typ');
        $car ->obsah = $request ->input('obsah');
        $car ->hmotnost = $request ->input('hmotnost');
        $car ->save();

        return response()->view('addcar');
    }

    public function update($id,Request $request) {
        $car = Car::find($id);
        $car ->vyrobca = $request ->input('vyrobca');
        $car ->typ = $request ->input('typ');
        $car ->obsah = $request ->input('obsah');
        $car ->hmotnost = $request ->input('hmotnost');

        $car ->update();

        return redirect()->action('CarController@showAll');
    }

    public function delete($id) {
        $car = Car::find($id);
        $car ->delete();

        return redirect()->action('CarController@showAll');
    }

    public function showAll() {
        $cars = Car::all();
//        foreach ($auta as $car) {
//            echo "Vyrobca: " . $car->vyrobca . "<br>" .
//                "Typ: " . $car->typ . "<br>" .
//                "Obsah: " . $car->obsah . "<br>" .
//                "Hmotnosť: "  . $car->hmotnost . "<br>" . "<br>" ;
//        }
        return view('showAllCars',['cars'=> $cars]);
    }

}