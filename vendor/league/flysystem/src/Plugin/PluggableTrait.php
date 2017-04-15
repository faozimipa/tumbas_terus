<?php

namespace League\Flysystem\Plugin;

use BadMethodCallException;
use League\Flysystem\FilesystemInterface;
use League\Flysystem\PluginInterface;
use LogicException;

trait PluggableTrait
{
    /**
     * @var array
     */
    protected $plugins = [];

    /**
     * Register a plugin.
     *
     * @param PluginInterface $plugin
     *
<<<<<<< HEAD
     * @throws LogicException
     *
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @return $this
     */
    public function addPlugin(PluginInterface $plugin)
    {
<<<<<<< HEAD
        if ( ! method_exists($plugin, 'handle')) {
            throw new LogicException(get_class($plugin) . ' does not have a handle method.');
        }

=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        $this->plugins[$plugin->getMethod()] = $plugin;

        return $this;
    }

    /**
     * Find a specific plugin.
     *
     * @param string $method
     *
<<<<<<< HEAD
     * @throws PluginNotFoundException
     *
     * @return PluginInterface
=======
     * @throws LogicException
     *
     * @return PluginInterface $plugin
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     */
    protected function findPlugin($method)
    {
        if ( ! isset($this->plugins[$method])) {
            throw new PluginNotFoundException('Plugin not found for method: ' . $method);
        }

<<<<<<< HEAD
=======
        if ( ! method_exists($this->plugins[$method], 'handle')) {
            throw new LogicException(get_class($this->plugins[$method]) . ' does not have a handle method.');
        }

>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        return $this->plugins[$method];
    }

    /**
     * Invoke a plugin by method name.
     *
<<<<<<< HEAD
     * @param string              $method
     * @param array               $arguments
     * @param FilesystemInterface $filesystem
     *
     * @throws PluginNotFoundException
     *
=======
     * @param string $method
     * @param array  $arguments
     * @param FilesystemInterface $filesystem
     *
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @return mixed
     */
    protected function invokePlugin($method, array $arguments, FilesystemInterface $filesystem)
    {
        $plugin = $this->findPlugin($method);
        $plugin->setFilesystem($filesystem);
        $callback = [$plugin, 'handle'];

        return call_user_func_array($callback, $arguments);
    }

    /**
     * Plugins pass-through.
     *
     * @param string $method
     * @param array  $arguments
     *
     * @throws BadMethodCallException
     *
     * @return mixed
     */
    public function __call($method, array $arguments)
    {
        try {
            return $this->invokePlugin($method, $arguments, $this);
        } catch (PluginNotFoundException $e) {
            throw new BadMethodCallException(
                'Call to undefined method '
                . get_class($this)
                . '::' . $method
            );
        }
    }
}
