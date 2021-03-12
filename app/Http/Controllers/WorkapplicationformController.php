<?php

namespace App\Http\Controllers;

use App\Models\Bloodtype;
use App\Models\Citizenship;
use App\Models\Education;
use App\Models\FamilyStatus;
use App\Models\MaritalStatus;
use App\Models\Position;
use App\Models\Religion;
use App\Models\Sex;
use Illuminate\Http\Request;

class WorkapplicationformController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $positionlist = Position::all();
        $sexlist = Sex::all();
        $bloodlist = Bloodtype::all();
        $citizenshiplist = Citizenship::all();
        $religionlist = Religion::all();
        $maritalstatuslist = MaritalStatus::all();
        $familystatuslist = FamilyStatus::all();
        $educationlist = Education::all();
        return view('applicationform.v_index',
        compact('positionlist',
                'sexlist',
                'bloodlist',
                'citizenshiplist',
                'religionlist',
                'maritalstatuslist',
                'familystatuslist',
                'educationlist'));
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
        dd($request->all());
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
