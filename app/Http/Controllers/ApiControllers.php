<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

abstract class ApiControllers
{
    protected $model;

    public function get(Request $request)
    {
        $limit = (int) $request->get('limit', 100);
        $offset = (int) $request->get('offset', 0);

        $result = $this->model->limit($limit)->offset($offset)->get();

        $this->sendResponse($result, 'OK', 200); //TODO вынести в константу

    }

    public function detail(string $objectName)
    {

    }

    public function update(int $objectId)
    {

    }

    public function delete(int $objectId)
    {

    }

    public function create()
    {

    }

}
