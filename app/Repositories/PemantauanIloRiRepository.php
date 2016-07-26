<?php

namespace App\Repositories;

use App\Models\PemantauanIloRi;
use InfyOm\Generator\Common\BaseRepository;

class PemantauanIloRiRepository extends BaseRepository
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
        return PemantauanIloRi::class;
    }
}
