<?php

namespace App\Repositories;

use App\Models\PemantauanVentilator;
use InfyOm\Generator\Common\BaseRepository;

class PemantauanVentilatorRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return PemantauanVentilator::class;
    }
}
