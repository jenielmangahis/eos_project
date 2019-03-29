<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zones;
use App\Houses;
use Auth;
use Khill\Lavacharts\Lavacharts;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userId = Auth::id();
        $houses = Houses::where('user_id',$userId)->orderBy('id', 'desc')->get();
        $zones  = Zones::where('user_id','=',$userId)->orderBy('id', 'desc')->get();
        return view('home',compact('houses','userId','zones'));
    }

    public function chart(){

        $lava = new Lavacharts; // See note below for Laravel

        $population = $lava->DataTable();
        
        $population->addDateColumn('Year')
                   ->addNumberColumn('Number of People')
                   ->addRow(['2006', 623452])
                   ->addRow(['2007', 685034])
                   ->addRow(['2008', 716845])
                   ->addRow(['2009', 757254])
                   ->addRow(['2010', 778034])
                   ->addRow(['2011', 792353])
                   ->addRow(['2012', 839657])
                   ->addRow(['2013', 842367])
                   ->addRow(['2014', 873490]);
        
        $lava->AreaChart('Population', $population, [
            'title' => 'Population Growth',
            'legend' => [
                'position' => 'in'
            ]
        ]);
        $userId = Auth::id();

        return view('chart',compact('houses','userId','lava'));
    }
}
