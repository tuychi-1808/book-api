<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\JournalStoreRequest;
use App\Http\Resources\AuthorResource;
use App\Http\Resources\JournalResource;
use App\Models\Author;
use App\Models\Journal;
use http\Env\Response;
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
        return JournalResource::collection(Journal::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(JournalStoreRequest $request)
    {
        $created_journal = Journal::create($request->validated());

        return new JournalResource($created_journal);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Journal $journal)
    {
        return new JournalResource($journal);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(JournalStoreRequest $request, Journal $journal)
    {
        $journal->update($request->validated());

        return $journal;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Journal $journal)
    {
        $journal->delete();

        return response(null,Response::CONTENT_ENCODING_NONE);
    }
}
