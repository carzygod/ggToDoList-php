<?php

namespace App\Admin\Repositories;

use App\Models\Role as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Role extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
