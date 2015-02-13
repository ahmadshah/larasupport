<?php namespace L5\Support\Contracts\Listener;

interface ResourceRetriever
{
    /**
     * Display collection of resources
     * 
     * @param  array  $data
     * @return mixed
     */
    public function showResourceCollection(array $data);

    /**
     * Display single resource item
     * 
     * @param  array  $data
     * @return mixed
     */
    public function showResourceItem(array $data);
}