<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferenceRequest;
use App\Models\Conference;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ConferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index():View
    {
        $conference = new Conference();
        return view('conference.index', ['conferences' => $conference->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create():View
    {
        return view('conference.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreConferenceRequest $request): Redirectresponse
    {
        $validated = $request->validated();

        $conference = new Conference();
        $conference->title = $validated['title'];
        $conference->description = $validated['description'];
        $conference->dateOfConference = $validated['date'];
        $conference->address = $validated['address'];
        $conference->save();

        return redirect()->route('conferences.show', ['conference' => $conference['id']]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id):View
    {
        return view('conference.show', ['conference' => Conference::findOrFail($id)]);
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
