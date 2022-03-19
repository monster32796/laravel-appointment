<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Prescription;
// For this need to ensure it point to the model for the database
// path to check the model
//C:\Users\monst\OneDrive\Desktop\xampp2\htdocs\ap\app

//use Auth;

class HealthController extends Controller
{
    // Prevent guest from going to dashboard
    public function __construct()
    {
       // $this->middleware('auth');
    }
	
	//Ger prescriptions info from database
    public function index()
    {       
	$prescriptions = Prescription::latest()->get();//if dont want get info from database then remove this
        return view('health-materials', compact('prescriptions'));
										//remove compact if no need data from database.
    }
}