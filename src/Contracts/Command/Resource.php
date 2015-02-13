<?php namespace L5\Support\Contracts\Command;

use L5\Support\Contracts\Listener\ResourceCreator;
use L5\Support\Contracts\Listener\ResourceRetriever;

interface Resource
{
    /**
     * Process the GET request method to retrieve the collection
     * 
     * @param  \L5\Support\Contracts\Listener\ResourceRetriever $listener
     * @param  array $data     [description]
     * @return mixed
     */
    public function index(ResourceRetriever $listener, array $data = []);

    /**
     * Process the GET request method to retrieve a single item
     * 
     * @param  \L5\Support\Contracts\Listener\ResourceRetriever $listener
     * @param  integer|string $resourceId
     * @return mixed
     */
    public function show(ResourceRetriever $listener, $resourceId);

    /**
     * Process the GET request method to create a new resource
     * 
     * @param  \L5\Support\Contracts\Listener\ResourceCreator $listener
     * @return mixed
     */
    public function create(ResourceCreator $listener);

    /**
     * Process the POST request method to create a new resource
     * 
     * @param  \L5\Support\Contracts\Listener\ResourceCreator $listener
     * @param  array $inputs
     * @return mixed
     */
    public function store(ResourceCreator $listener, array $inputs);

    /**
     * Process the GET request method to update an existing resource
     * 
     * @param  \L5\Support\Contracts\Listener\ResourceCreator $listener
     * @param  integer|string $resourceId
     * @return mixed
     */
    public function edit(ResourceCreator $listener, $resourceId);

    /**
     * Process the PATCH or PUT request method to update an existing resource
     * 
     * @param  \L5\Support\Contracts\Listener\ResourceCreator $listener
     * @param  integer|string $resourceId
     * @param  array $inputs
     * @return mixed
     */
    public function update(ResourceCreator $listener, $resourceId, array $inputs);

    /**
     * Process the DELETE request method to remove an existing resource
     * 
     * @param  \L5\Support\Contracts\Listener\ResourceCreator $listener
     * @param  integer|string $resourceId
     * @return mixed
     */
    public function destroy(ResourceCreator $listener, $resourceId);
}
