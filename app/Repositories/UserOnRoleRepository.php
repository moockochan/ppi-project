<?php

namespace App\Repositories;

use App\Models\UserOnRole;
use InfyOm\Generator\Common\BaseRepository;

class UserOnRoleRepository extends BaseRepository
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
        return UserOnRole::class;
    }
}
