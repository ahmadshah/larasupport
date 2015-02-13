<?php namespace L5\Support\Contracts\Command;

use L5\Support\Contracts\Listener\ResourceCreator;
use L5\Support\Contracts\Listener\ResourceRetriever;

interface Resource
{
    /**
     * [index description]
     * @param  ResourceRetriever $listener [description]
     * @param  array             $data     [description]
     * @return [type]                      [description]
     */
    public function index(ResourceRetriever $listener, array $data = []);

    /**
     * [show description]
     * @param  ResourceRetriever $listener   [description]
     * @param  [type]            $resourceId [description]
     * @return [type]                        [description]
     */
    public function show(ResourceRetriever $listener, $resourceId);

    /**
     * [create description]
     * @param  ResourceCreator $listener [description]
     * @return [type]                    [description]
     */
    public function create(ResourceCreator $listener);

    /**
     * [store description]
     * @param  ResourceCreator $listener [description]
     * @param  array           $inputs   [description]
     * @return [type]                    [description]
     */
    public function store(ResourceCreator $listener, array $inputs);

    /**
     * [edit description]
     * @param  ResourceCreator $listener   [description]
     * @param  [type]          $resourceId [description]
     * @return [type]                      [description]
     */
    public function edit(ResourceCreator $listener, $resourceId);

    /**
     * [update description]
     * @param  ResourceCreator $listener   [description]
     * @param  [type]          $resourceId [description]
     * @param  array           $inputs     [description]
     * @return [type]                      [description]
     */
    public function update(ResourceCreator $listener, $resourceId, array $inputs);

    /**
     * [destroy description]
     * @param  ResourceCreator $listener   [description]
     * @param  [type]          $resourceId [description]
     * @return [type]                      [description]
     */
    public function destroy(ResourceCreator $listener, $resourceId);
}