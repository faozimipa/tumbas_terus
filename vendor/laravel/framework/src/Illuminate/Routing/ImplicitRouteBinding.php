<?php

namespace Illuminate\Routing;

use Illuminate\Database\Eloquent\Model;

class ImplicitRouteBinding
{
    /**
     * Resolve the implicit route bindings for the given route.
     *
     * @param  \Illuminate\Container\Container  $container
     * @param  \Illuminate\Routing\Route  $route
     * @return void
     */
    public static function resolveForRoute($container, $route)
    {
        $parameters = $route->parameters();

        foreach ($route->signatureParameters(Model::class) as $parameter) {
<<<<<<< HEAD
            if ($route->parameter($parameter->name) instanceof Model) {
                continue;
            }

            $model = $container->make($parameter->getClass()->name);

            $parameterName = static::checkForParameter($parameter->name, $parameters) ?:
                             static::checkForParameter(snake_case($parameter->name), $parameters);

            if ($parameterName) {
                $route->setParameter($parameterName, $model->where(
                    $model->getRouteKeyName(), $parameters[$parameterName]
                )->firstOrFail());
            }
        }
    }

    /**
     * Return the parameter name if it exists in the given parameters.
     *
     * @param  string  $name
     * @param  array  $parameters
     * @return string|null
     */
    protected static function checkForParameter($name, $parameters)
    {
        return array_key_exists($name, $parameters)
                        ? $name : null;
    }
=======
            $class = $parameter->getClass();

            if (array_key_exists($parameter->name, $parameters) &&
                ! $route->parameter($parameter->name) instanceof Model) {
                $method = $parameter->isDefaultValueAvailable() ? 'first' : 'firstOrFail';

                $model = $container->make($class->name);

                $route->setParameter(
                    $parameter->name, $model->where(
                        $model->getRouteKeyName(), $parameters[$parameter->name]
                    )->{$method}()
                );
            }
        }
    }
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
}
