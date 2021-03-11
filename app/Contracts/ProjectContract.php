<?php

namespace App\Contracts;

use Illuminate\Http\Request;

interface ProjectContract
{

    /**
     * @param \Illuminate\Http\Request $request
     * @param int                      $id
     *
     * @return mixed
     */
    public function update(Request $request, int $id);

    /**
     * @param \Illuminate\Http\Request $request
     *
     * @return mixed
     */
    public function store(Request $request);

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function delete(int $id);

    /**
     * @param int $id
     *
     * @return mixed
     */
    public function show(int $id);

}
