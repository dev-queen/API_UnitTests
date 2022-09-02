<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

abstract class ApiControllers
{
    protected $model;

    public function get(Request $request)
    {

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

}
