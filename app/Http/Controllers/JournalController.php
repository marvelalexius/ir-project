<?php

namespace App\Http\Controllers;

use App\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $journals = Journal::all();

        return view('journals.index', compact('journals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('journals.form', compact('journal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'abstract' => 'required',
            'keywords' => 'required',
            'authors' => 'required'
        ]);

        // $image_upload = $request->file('image')->store('journals', 'public');

        $journal = new Journal;
        // $journal->image = $image_upload;
        $journal->title = $request->title;
        $journal->abstract = $request->abstract;
        $journal->keywords = $request->keywords;
        $journal->authors = $request->authors;
        $journal->save();

        return redirect()->route('journals.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function edit(Journal $journal)
    {
        return view('journals.form', compact('journal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Journal $journal)
    {
        $this->validate($request, [
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'title' => 'required',
            'abstract' => 'required',
            'keywords' => 'required',
            'authors' => 'required'
        ]);

        // $image_upload = $request->file('image')->store('journals', 'public');

        // $journal->image = $image_upload;
        $journal->title = $request->title;
        $journal->abstract = $request->abstract;
        $journal->keywords = $request->keywords;
        $journal->authors = $request->authors;
        $journal->save();

        return redirect()->route('journals.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Journal  $journal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
        // Storage::disk('public')->delete($product->image);
        $journal->delete();

        return redirect()->route('journals.index');
    }
}
