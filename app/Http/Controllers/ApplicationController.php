<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplicationRequest;
use App\Models\Application;

class ApplicationController extends ApiControllers
{
    /**
     * ApplicationController constructor.
     * @param Application $model
     * @param ApplicationRequest $request
     */
    public function __construct(Application $model)
    {
        $this->model = $model;
    }

    /**
     * @param ApplicationRequest $request
     * @return mixed
     */
    public function createApplication(ApplicationRequest $request)
    {
        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param ApplicationRequest $request
     * @return mixed
     */
    public function updateApplication(int $entityId, ApplicationRequest $request)
    {
        return parent::update($entityId, $request);
    }
}
