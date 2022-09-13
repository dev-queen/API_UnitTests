<?php

namespace App\Http\Controllers;

use App\Http\Requests\FreelancerRequest;
use App\Models\Freelancer;

class FreelancerController extends ApiControllers
{
    public function __construct(Freelancer $model)
    {
        $this->model = $model;
    }

    /**
     * @param FreelancerRequest $request
     * @return mixed
     */
    public function createFreelancer(FreelancerRequest $request): mixed
    {
        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param FreelancerRequest $request
     * @return mixed
     */
    public function updateFreelancer(int $entityId, FreelancerRequest $request): mixed
    {
        return parent::update($entityId, $request);
    }

}
