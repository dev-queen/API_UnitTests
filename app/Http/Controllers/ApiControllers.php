<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

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
        Cache::put('ke2y', '123nono', now()->addMinutes(10));
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
        $entity = $this->model::find($entityId);

        if (!$entity) {
            return $this->sendError('Not Found', 404);
        }

        $entity->update($request->validated());

        return $this->sendResponse($this->model::find($entityId), 'Updated', 201);
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

        return $this->sendResponse('', 'Deleted', 204);
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request): mixed
    {
        return $this->sendResponse($this->model::create($request->validated()), 'Created', 201);
    }


}
