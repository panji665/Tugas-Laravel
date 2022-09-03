<?php

namespace App\Http\Controllers;

use App\Models\Consultation;
use App\Models\Society;
use Illuminate\Http\Request;

// use App\Models\Consultation;

class ConsultationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Society::where('login_tokens','=', $_GET['token'])->first();
        if($user){
            $consultation = $user->consultation;
            $consultation->doctor;

            unset($consultation->society_id);
            unset($consultation->doctor_id);
            return(response($consultation,200));
        }else{
            return(response(['message' => 'Unauthorized user'],401));
        }
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
        $user = Society::where('login_tokens','=', $_GET['token'])->first();
        if($user){
            $consultation = new Consultation();
            $consultation->society_id = $user->id;
            $consultation->doctor_id = null;
            $consultation->status = 'pending';
            $consultation->disease_history = $request->disease_history;
            $consultation->current_symptoms = $request->current_symptoms;
            $consultation->doctor_notes = null;
            $consultation->save();
            return(response(['message' => 'Request consultation sent successful'],200));
        }else{
            return(response(['message' => 'Unauthorized user'],401));
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function show(Consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function edit(Consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Consultation  $consultation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Consultation $consultation)
    {
        //
    }
}
