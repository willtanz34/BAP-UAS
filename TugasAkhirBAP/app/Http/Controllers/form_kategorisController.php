<?php

namespace App\Http\Controllers;

use App\Http\Requests\form_kategorisRequest;
use App\form_kategoris;

class form_kategorisController extends Controller
{
    public function index()
    {
        $form_kategoris = form_kategoris::latest()->get();

        return response()->json($form_kategoris);
    }

    public function store(form_kategorisRequest $request)
    {
        $form_kategoris = form_kategoris::create($request->all());

        return response()->json($form_kategoris, 201);
    }

    public function show($id)
    {
        $form_kategoris = form_kategoris::findOrFail($id);

        return response()->json($form_kategoris);
    }

    public function update(form_kategorisRequest $request, $id)
    {
        $form_kategoris = form_kategoris::findOrFail($id);
        $form_kategoris->update($request->all());

        return response()->json($form_kategoris, 200);
    }

    public function destroy($id)
    {
        form_kategoris::destroy($id);

        return response()->json(null, 204);
    }
}