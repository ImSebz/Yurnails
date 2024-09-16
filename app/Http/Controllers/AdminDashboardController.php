<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormResponse;


class AdminDashboardController extends Controller
{
    public function index()
    {
        $formResponses = FormResponse::paginate(10)->onEachSide(1);
        return view('admin.dashboard', compact('formResponses'));
    }
}
