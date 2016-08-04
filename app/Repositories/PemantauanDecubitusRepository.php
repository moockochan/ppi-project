<?php

namespace App\Repositories;

use App\Models\PemantauanDecubitus;
use InfyOm\Generator\Common\BaseRepository;

class PemantauanDecubitusRepository extends BaseRepository
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
        return PemantauanDecubitus::class;
    }
}
