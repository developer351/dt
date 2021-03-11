<?php

namespace App\Http\Controllers;

use App\Contracts\ProjectContract;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    protected $service;

    public function __construct(ProjectContract $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        return view('project.index');
    }

    public function show($id)
    {
        return $this->service->show($id);
    }

    public function update(Request $request, $id)
    {
        return $this->service->update($request, $id);
    }

    public function store(Request $request)
    {
        return $this->service->store($request);
    }

    public function destroy($id)
    {
        return $this->service->delete($id);
    }
}
