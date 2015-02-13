<?php namespace L5\Support\Contracts\Listener;

interface ResourceCreator
{   
    /**
     * Display resource create form
     * 
     * @param  array  $data
     * @return mixed
     */
    public function showResourceForm(array $data);

    /**
     * Successfully created a new resource
     * 
     * @return mixed
     */
    public function resourceHasBeenCreated();

    /**
     * Successfully updated an existing resource
     * 
     * @return mixed
     */
    public function resourceHasBeenUpdated();

    /**
     * Successfully deleted an existing resource
     * 
     * @return mixed
     */
    public function resourceHasBeenDeleted();

    /**
     * Process has failed validation
     * 
     * @return mixed
     */
    public function resourceHasFailedValidation();
}