<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescription;
//use Auth;

class HealthController extends Controller
{
    // Prevent guest from going to dashboard
    public function __construct()
    {
       // $this->middleware('auth');
    }
    public function index()
    {       
	$prescriptions = Prescription::latest()->get();
        return view('health-materials', compact('prescriptions'));
    }
}
