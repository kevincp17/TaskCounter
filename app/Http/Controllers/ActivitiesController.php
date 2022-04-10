<?php

namespace App\Http\Controllers;

use App\Models\Activities;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivitiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $acts = DB::table('activities')->get();

        $counter = DB::table('activities')
            ->select(DB::raw('SUM(time * rating) AS point'))
            ->first();

        $bonus_career= DB::table('activities')
            ->select(DB::raw('COUNT(type)*25 AS point'))
            ->where('type', "Career")
            ->first();

        $bonus_else= DB::table('activities')
            ->select(DB::raw('COUNT(type)*15 AS point'))
            ->where('type','!=',"Career")
            ->where('type','!=',"Other")
            ->first();

        $bonus_other= DB::table('activities')
            ->select(DB::raw('COUNT(type)*5 AS point'))
            ->where('type', "Other")
            ->first();

        $allPoints=$counter->point+$bonus_career->point+$bonus_else->point+$bonus_other->point;

        if($allPoints<1000){
            $request->session()->put('quote', "You're just started, let's go!");
        }else if($allPoints<2000){
            $request->session()->put('quote', "Not bad, for a newbie!");
        }else if($allPoints<4000){
            $request->session()->put('quote', "Nice, keep it up!");
        }else if($allPoints<8000){
            $request->session()->put('quote', "You're pretty good, don't get cocky though!");
        }else if($allPoints<16000){
            $request->session()->put('quote', "Great job, what a chad!");
        }else if($allPoints<32000){
            $request->session()->put('quote', "Excellent, your highness!");
        }else if($allPoints>=100000){
            $request->session()->put('quote', "You're a God!");
        }

        $request->session()->put('point', $allPoints);
        return view('activities',['acts'=>$acts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dt = new DateTime();
        echo $dt->format('d m Y');

        $activity = new Activities;
        $activity->activity = $request->act;
        $activity->type = $request->actType;
        $activity->rating = $request->rating;
        $activity->time = $request->time;
        $activity->date = $dt;
        $activity->save();

        $request->session()->flash('alert-success', 'You succesfully add the activity!');

        return redirect('/activity');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
