<?php

namespace App\Http\Controllers;

use App\Models\aluno;
use App\Http\Requests\StorealunoRequest;
use App\Http\Requests\UpdatealunoRequest;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorealunoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(aluno $aluno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(aluno $aluno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatealunoRequest $request, aluno $aluno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(aluno $aluno)
    {
        //
    }
}
