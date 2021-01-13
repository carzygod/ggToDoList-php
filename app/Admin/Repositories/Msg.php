<?php

namespace App\Admin\Repositories;

use App\Models\Msgs as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Msg extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
