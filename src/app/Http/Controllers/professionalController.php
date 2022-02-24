<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfessionalServices;

class professionalController extends Controller
{
    private $professionalServices;

    public function __contructor(
        ProfessionalServices $professionalServices
    ){
        $this->professionalServices = $professionalServices;
    }

    public function index(){
        $professional = $this->professionalServices->index();

        if(count($professional)){
            return false;
        }

        return view('panel.professional')->with(compact('professional'));
    }
}
