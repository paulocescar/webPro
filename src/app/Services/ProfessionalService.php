<?php

namespace App\Services;
use App\Repositories\ProfessionalRepository;

class ProfessionalService implements ProfessionalServicesInterface
{
    private $professionalRepository;

    public function __construct(
        ProfessionalRepository $professionalRepository
    ){
        $this->professionalRepository = $professionalRepository;
    }

    public function index(){
        $professionals = $this->professionalRepository->index();
        
        return $professionals;
    }
    
}