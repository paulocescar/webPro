<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ProfessionalService;

class ProfessionalController extends Controller
{
    private $professionalService;

    public function __construct(
        ProfessionalService $professionalService
    ){
        $this->professionalService = $professionalService;
    }

    public function index(){
        $professionals = $this->professionalService->index();

        return view('panel.professional')->with(compact(['professionals']));
    }
}
