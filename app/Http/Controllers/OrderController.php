<?php

namespace App\Http\Controllers;

use App\Http\Requests\OrderRequest;
use App\Models\Order;

class OrderController extends ApiControllers
{
    public function __construct(Order $model)
    {
        $this->model = $model;
    }

    /**
     * @param OrderRequest $request
     * @return mixed
     */
    public function createOrder(OrderRequest $request): mixed
    {
        return $this->create($request);
    }

    /**
     * @param int $entityId
     * @param OrderRequest $request
     * @return mixed
     */
    public function updateOrder(int $entityId, OrderRequest $request): mixed
    {
        return parent::update($entityId, $request);
    }

    public function getFreeOrder(): mixed
    {
        return $this->sendResponse($this->model->all()->where('freelancer_id', null), 'OK', 200);
    }

}
