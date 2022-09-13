<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

abstract class ApiControllers extends Controller
{
    /**
     * @var Request
     */
    protected Request $request;

    /**
     * @var Model
     */
    protected Model $model;


    public function index(): mixed
    {
        $result = $this->model::all();

        return $this->sendResponse($result, 'OK', 200);
    }

    /**
     * @param int $entityId
     * @return mixed
     */
    public function show(int $entityId): mixed
    {
        $entity = $this->model->find($entityId)->first();

        if (!$entity) {
            return $this->sendError('Not Found', 404);
        }

        return $this->sendResponse($entity, 'OK', 200);
    }

    /**
     * @param int $entityId
     * @param Request $request
     * @return mixed
     */
    public function update(int $entityId, Request $request): mixed
    {
        $entity = $this->model->find($entityId)->first();

        if (!$entity) {
            return $this->sendError('Not Found', 404);
        }

        $data = $request->validated();

        $this->model->fill($data)->push();

        return $this->sendResponse(null, 'Updated', 204);
    }

    /**
     * @param int $entityId
     * @return mixed
     */
    public function delete(int $entityId): mixed
    {
        $entity = $this->model->find($entityId);

        if (!$entity) {
            return $this->sendError('Not Found', 404);
        }

        $entity->delete();

        return $this->sendResponse('Deleted', 'Deleted', 204);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request): mixed
    {
        $data = $request->validated();

        $this->model->fill($data)->push();

        return $this->sendResponse('Created', 'Created', 201);
    }


}
