<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormResponse;

class FormResponseController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:form_responses',
            'age' => 'required|integer',
        ]);

        FormResponse::create([
            'name' => $request->name,
            'email' => $request->email,
            'age' => $request->age,
        ]);

        return redirect('/')->with('success', 'Formulario enviado exitosamente');
    }
}