<?php namespace L5\Support\Traits;

use League\Fractal\Resource\Item;
use League\Fractal\Resource\Collection;
use League\Fractal\TransformerAbstract;

trait FractalResponseTrait
{
    /**
     * HTTP response code
     * 
     * @var integer
     */
    protected $statusCode = 200;

    protected function getStatusCode()
    {
        return $this->statusCode;
    }

    protected function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    protected function respondInJson(array $response)
    {
        return response()->json($response, $this->getStatusCode());
    }

    /**
     * Create fractal collection response
     * 
     * @param  mixed $resources
     * @param  \League\Fractal\TransformerAbstract $transformer
     * @return mixed
     */
    protected function respondWithCollection($resources, TransformerAbstract $transformer)
    {
        $collection = new Collection($resources, $transformer);
        $response = app('league.fractal')->createData($collection)->toArray();

        return $this->respondInJson($response);
    }

    /**
     * Create fractal single item response
     * 
     * @param  mixed $resource
     * @param  \League\Fractal\TransformerAbstract $transformer
     * @return mixed
     */
    protected function respondWithItem($resource, TransformerAbstract $transformer)
    {
        $item = new Item($resource, $transformer);
        $response = app('league.fractal')->createData($item)->toArray();

        return $this->respondInJson($response);
    }

    /**
     * [respondWithError description]
     * @param  [type] $message [description]
     * @return [type]          [description]
     */
    protected function respondWithError($message)
    {
        return $this->toJsonResponse([
            'error' => [
                'http_code' => $this->getStatusCode(),
                'message' => $message
            ]
        ]);
    }

    /**
     * [throwResourceNotFoundError description]
     * @param  string $message [description]
     * @return [type]          [description]
     */
    protected function throwResourceNotFoundError($message = 'Resource not found')
    {
        return $this->setStatusCode(404)->respondWithError($message);
    }

    /**
     * [throwBadRequestError description]
     * @param  string $message [description]
     * @return [type]          [description]
     */
    protected function throwBadRequestError($message = 'Invalid arguments')
    {
        return $this->setStatusCode(400)->respondWithError($message);
    }

    /**
     * [throwForbiddenError description]
     * @param  string $message [description]
     * @return [type]          [description]
     */
    protected function throwForbiddenError($message = 'Forbidden')
    {
        return $this->setStatusCode(403)->respondWithError($message);
    }

    /**
     * [throwNotAuthorizeError description]
     * @param  string $message [description]
     * @return [type]          [description]
     */
    protected function throwNotAuthorizeError($message = 'Not authorize')
    {
        return $this->setStatusCode(401)->respondWithError($message);
    }

    /**
     * [throwInternalServerError description]
     * @param  string $message [description]
     * @return [type]          [description]
     */
    protected function throwInternalServerError($message = 'Internal server error')
    {
        return $this->setStatusCode(500)->respondWithError($message);
    }
}