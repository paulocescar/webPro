<?php

namespace App\Services;
use App\Repositories\ProfessionalRepository;

class ProfessionalServices extends ProfessionalServicesInterfaces
{
    private $professionalRepository;

    public function __contructor(
        ProfessionalRepository $professionalRepository
    ){
        $this->professionalRepository = $professionalRepository;
    }

    public function index(){
        $professionals = $this->professionalRepository->get();

        return $professionals;
    }
    
}