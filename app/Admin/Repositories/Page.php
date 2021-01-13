<?php

namespace App\Admin\Repositories;

use App\Models\Pages as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Page extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
