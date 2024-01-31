<?php

namespace App\Repository;

use App\Models\Project;
use App\Repository\BaseRepository;

class ProjectRepository extends BaseRepository
{
    public function __construct(Project $model)
    {
        parent::__construct($model); // Pass the model to the parent constructor
    }

}
?>