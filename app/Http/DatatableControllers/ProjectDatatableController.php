<?php

namespace App\Http\DatatableControllers;

use App\Http\Controllers\Controller;
use App\Repository\ProjectRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class ProjectDatatableController extends Controller
{

    protected $repository;

    protected $request;

    public function __construct(Request $request, ProjectRepository $projectRepository)
    {
        parent::__construct([]);
        $this->request    = $request;
        $this->repository = $projectRepository;
    }

    /**
     * Process dataTables ajax request.
     *
     * @return JsonResponse
     * @throws \Exception
     */
    public function all()
    {

        return Datatables::of($this->repository->getEntries($this->request))
                         ->addColumn('id', function ($data) {
                             return $data->id;
                         })
                         ->addColumn('name', function ($data) {
                             return $data->name ?? null;
                         })
                         ->addColumn('email', function ($data) {
                             return $data->email ?? null;
                         })
                         ->make(true);
    }
}
