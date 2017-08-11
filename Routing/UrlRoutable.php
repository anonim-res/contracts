<?php

namespace Illuminate\Contracts\Routing;

interface UrlRoutable
{
    /**
     * Get the value of the model's route key.
     *
     * @return mixed
     */
    public function getRouteKey();

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName();

    /**
     * Retrieve model for route model binding.
     *
     * @param  mixed  $routeKey
     * @return null|\Illuminate\Database\Eloquent\Model
     */
    public function resolveRouteBinding($routeKey);
}
