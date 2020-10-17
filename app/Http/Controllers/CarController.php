<?php


namespace App\Http\Controllers;


use App\Models\Car;
use Illuminate\Support\Str;

class CarController extends  Controller
{

    public function show($id) {
        $auto = Car::find($id);

        echo "Vyrobca: " . $auto->vyrobca . "<br>" .
            "Typ: " . $auto->typ . "<br>" .
            "Obsah: " . $auto->obsah . "<br>" .
            "Hmotnosť: "  . $auto->hmotnost . "<br>" . "<br>" ;

    }

    public function insert() {
        $auto = new Car();
        $auto ->vyrobca = Str::random(10);
        $auto ->typ = Str::random(6);
        $auto ->obsah = mt_rand(1000,3000);
        $auto ->hmotnost = mt_rand(800,2000);
        $auto ->save();
    }

    public function update() {
        $auto = Car::where("id","=",mt_rand(1,4))->first();
        $auto ->update(["hmotnost" =>mt_rand(1,100)]);
    }

    public function delete($id) {
        $auto = Car::find($id);
        $auto ->delete();

    }

    public function showAll() {
        $auta = Car::all();
        foreach ($auta as $auto) {
            echo "Vyrobca: " . $auto->vyrobca . "<br>" .
                "Typ: " . $auto->typ . "<br>" .
                "Obsah: " . $auto->obsah . "<br>" .
                "Hmotnosť: "  . $auto->hmotnost . "<br>" . "<br>" ;
        }

    }

}