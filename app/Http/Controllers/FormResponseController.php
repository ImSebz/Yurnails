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
            'phone' => 'required|string|max:20',
            'skills_interested' => 'required|string',
            'specializations_interested' => 'required|string',
            'course_certification_importance' => 'required|string',
            'course_format_preference' => 'required|string',
            'support_mentorship_expectation' => 'required|string',
            'course_budget' => 'required|string',
            'long_term_goals' => 'required|string',
            'prior_experience' => 'required|string',
        ]);

        FormResponse::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'skills_interested' => $request->skills_interested,
            'specializations_interested' => $request->specializations_interested,
            'course_certification_importance' => $request->course_certification_importance,
            'course_format_preference' => $request->course_format_preference,
            'support_mentorship_expectation' => $request->support_mentorship_expectation,
            'course_budget' => $request->course_budget,
            'long_term_goals' => $request->long_term_goals,
            'prior_experience' => $request->prior_experience,
        ]);

        return redirect('/')->with('success', 'Formulario enviado exitosamente');
    }
}