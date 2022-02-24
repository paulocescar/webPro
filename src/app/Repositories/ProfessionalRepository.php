<?php

namespace App\Repositories;

use JasonGuru\LaravelMakeRepository\Repository\BaseRepository;
use App\Models\Professional;

/**
 * Class ProfessionalRepository.
 */
class ProfessionalRepository extends BaseRepository
{
    /**
     * @return string
     *  Return the model
     */
    public function model()
    {
        return Professional::class;
    }

    public function index()
    {
        $professional = Professional::orderBy('id','DESC');

        return $professional->paginate(50);
    }
}
