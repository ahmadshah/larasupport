<?php namespace L5\Support\Traits;

use Rhumsaa\Uuid\Uuid;
use Illuminate\Database\Eloquent\Builder;

trait UniqueableTrait
{
    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    public static function boot()
    {
        parent::boot();

        self::creating(function ($model) {
            $model->setAttribute('uuid', Uuid::uuid1());
        });
    }

    /**
     * Scope query using unique Id
     * 
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  string  $uniqueId
     * @return void
     */
    public function scopeUniqueId(Builder $query, $uniqueId)
    {
        $query->where('uuid', $uniqueId);
    }
}