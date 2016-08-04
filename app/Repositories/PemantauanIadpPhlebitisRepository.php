<?php

namespace App\Repositories;

use App\Models\PemantauanIadpPhlebitis;
use InfyOm\Generator\Common\BaseRepository;

class PemantauanIadpPhlebitisRepository extends BaseRepository
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
        return PemantauanIadpPhlebitis::class;
    }
}
