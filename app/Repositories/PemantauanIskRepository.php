<?php

namespace App\Repositories;

use App\Models\PemantauanIsk;
use InfyOm\Generator\Common\BaseRepository;

class PemantauanIskRepository extends BaseRepository
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
        return PemantauanIsk::class;
    }
}
