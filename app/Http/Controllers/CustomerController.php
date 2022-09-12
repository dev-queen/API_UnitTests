<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;

class CustomerController extends ApiControllers
{
    public function __construct(Customer $model)
    {
        $this->model = $model;
    }

    /**
     * @param CustomerRequest $request
     * @return mixed
     */
    public function createCustomer(CustomerRequest $request)
    {
        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param CustomerRequest $request
     * @return mixed
     */
    public function updateCustomer(int $entityId, CustomerRequest $request)
    {
        return parent::update($entityId, $request);
    }
}
