<?php

namespace App\Repositories;

use App\Models\PemantauanIloRj;
use InfyOm\Generator\Common\BaseRepository;

class PemantauanIloRjRepository extends BaseRepository
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
        return PemantauanIloRj::class;
    }
}
