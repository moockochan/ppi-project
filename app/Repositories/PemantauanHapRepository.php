<?php

namespace App\Repositories;

use App\Models\PemantauanHap;
use InfyOm\Generator\Common\BaseRepository;

class PemantauanHapRepository extends BaseRepository
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
        return PemantauanHap::class;
    }
}
