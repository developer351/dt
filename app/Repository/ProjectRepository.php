<?php

namespace App\Repository;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectRepository
{
    protected $model;

    public function __construct(Project $project)
    {
        $this->model = $project;
    }

    public function getEntries(Request $request)
    {
        ////return something
        /// can use filterByEmail here
        return [];
    }

    public function filterByEmail(string $email)
    {

    }
}
