<?php

namespace App\Http\Controllers;


use App\Models\Booking;
use App\Models\BookingStatus;
use App\Models\Transaction;
use App\Models\SportField;
use App\Models\SportsLocation;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    function index() {
        $booking = Booking::get();
        return view('index');
    }

    public function home() {
        $type = 'Badminton';

        $dropdown = SportsLocation::where('sport_types', $type)->get();
        $resources = SportField::get();
        return view('home',
        ['resources'=> $resources],['type'=> 'Badminton']
        )->with('dropdown', $dropdown);
    }


    public function store(Request $request){
        $type = $request->type;
        $resources = SportsField::get();
        Booking::create(array_merge($request->all(), ['status_id' => 2]));
        $dropdown = SportsLocation::where('sport_types', $type)->get();
        // Booking::create($request->all());
        // dd($type);
        return view('home',
            ['message' =>'successfully created'],
            ['resources'=> $resources],
            ['type' => $type]
        )->with('dropdown', $dropdown);
    }

    public function show($id){
        return;
    }

    public function badminton() {
        $dropdown = SportsLocation::where('sport_types', 'Badminton')->get();
        $resources = SportField::where('sport_location_id', 1)->get();
        return view('schedule', ['resources'=> $resources],['type'=> 'Badminton'])->with('dropdown', $dropdown);
    }

    public function futsal() {
        $dropdown = SportsLocation::where('sport_types', 'Futsal')->get();
        $resources = SportField::where('sport_location_id', 1)->get();
        return view('home', ['resources'=> $resources],['type'=> 'Futsal'])->with('dropdown', $dropdown);
    }

    public function scheduleA(Request $request) {
        echo $request->type;
        $type = $request->type;
        $dropdown = SportsLocation::where('sport_types', $type)->get();
        $resources = SportField::where('sport_location_id', $request->id)->get();
        return view('home', ['resources'=> $resources], ['type'=> $type])->with('dropdown', $dropdown);
    }


    public function admin() {
        return view('admin');
    }

}
