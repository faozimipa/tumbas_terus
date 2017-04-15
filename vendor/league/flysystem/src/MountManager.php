<?php

namespace League\Flysystem;

use InvalidArgumentException;
<<<<<<< HEAD
use League\Flysystem\FilesystemNotFoundException;
use League\Flysystem\Plugin\PluggableTrait;
use League\Flysystem\Plugin\PluginNotFoundException;
=======
use League\Flysystem\Plugin\PluggableTrait;
use League\Flysystem\Plugin\PluginNotFoundException;
use LogicException;
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b

/**
 * Class MountManager.
 *
 * Proxies methods to Filesystem (@see __call):
 *
 * @method AdapterInterface getAdapter($prefix)
 * @method Config getConfig($prefix)
 * @method bool has($path)
 * @method bool write($path, $contents, array $config = [])
 * @method bool writeStream($path, $resource, array $config = [])
 * @method bool put($path, $contents, $config = [])
 * @method bool putStream($path, $contents, $config = [])
 * @method string readAndDelete($path)
 * @method bool update($path, $contents, $config = [])
 * @method bool updateStream($path, $resource, $config = [])
 * @method string|false read($path)
 * @method resource|false readStream($path)
 * @method bool rename($path, $newpath)
 * @method bool delete($path)
 * @method bool deleteDir($dirname)
 * @method bool createDir($dirname, $config = [])
 * @method array listFiles($directory = '', $recursive = false)
 * @method array listPaths($directory = '', $recursive = false)
 * @method array getWithMetadata($path, array $metadata)
 * @method string|false getMimetype($path)
 * @method string|false getTimestamp($path)
 * @method string|false getVisibility($path)
 * @method int|false getSize($path);
 * @method bool setVisibility($path, $visibility)
 * @method array|false getMetadata($path)
 * @method Handler get($path, Handler $handler = null)
 * @method Filesystem flushCache()
 * @method void assertPresent($path)
 * @method void assertAbsent($path)
 * @method Filesystem addPlugin(PluginInterface $plugin)
 */
class MountManager
{
    use PluggableTrait;

    /**
<<<<<<< HEAD
     * @var FilesystemInterface[]
=======
     * @var array
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     */
    protected $filesystems = [];

    /**
     * Constructor.
     *
<<<<<<< HEAD
     * @param FilesystemInterface[] $filesystems [:prefix => Filesystem,]
     *
     * @throws InvalidArgumentException
=======
     * @param array $filesystems
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     */
    public function __construct(array $filesystems = [])
    {
        $this->mountFilesystems($filesystems);
    }

    /**
     * Mount filesystems.
     *
<<<<<<< HEAD
     * @param FilesystemInterface[] $filesystems [:prefix => Filesystem,]
     *
     * @throws InvalidArgumentException
=======
     * @param array $filesystems [:prefix => Filesystem,]
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     *
     * @return $this
     */
    public function mountFilesystems(array $filesystems)
    {
        foreach ($filesystems as $prefix => $filesystem) {
            $this->mountFilesystem($prefix, $filesystem);
        }

        return $this;
    }

    /**
     * Mount filesystems.
     *
     * @param string              $prefix
     * @param FilesystemInterface $filesystem
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException
     *
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @return $this
     */
    public function mountFilesystem($prefix, FilesystemInterface $filesystem)
    {
        if ( ! is_string($prefix)) {
            throw new InvalidArgumentException(__METHOD__ . ' expects argument #1 to be a string.');
        }

        $this->filesystems[$prefix] = $filesystem;

        return $this;
    }

    /**
     * Get the filesystem with the corresponding prefix.
     *
     * @param string $prefix
     *
<<<<<<< HEAD
     * @throws FilesystemNotFoundException
=======
     * @throws LogicException
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     *
     * @return FilesystemInterface
     */
    public function getFilesystem($prefix)
    {
        if ( ! isset($this->filesystems[$prefix])) {
<<<<<<< HEAD
            throw new FilesystemNotFoundException('No filesystem mounted with prefix ' . $prefix);
=======
            throw new LogicException('No filesystem mounted with prefix ' . $prefix);
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        }

        return $this->filesystems[$prefix];
    }

    /**
     * Retrieve the prefix from an arguments array.
     *
     * @param array $arguments
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException
     *
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @return array [:prefix, :arguments]
     */
    public function filterPrefix(array $arguments)
    {
        if (empty($arguments)) {
<<<<<<< HEAD
            throw new InvalidArgumentException('At least one argument needed');
=======
            throw new LogicException('At least one argument needed');
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        }

        $path = array_shift($arguments);

        if ( ! is_string($path)) {
            throw new InvalidArgumentException('First argument should be a string');
        }

<<<<<<< HEAD
        list($prefix, $path) = $this->getPrefixAndPath($path);
=======
        if ( ! preg_match('#^.+\:\/\/.*#', $path)) {
            throw new InvalidArgumentException('No prefix detected in path: ' . $path);
        }

        list($prefix, $path) = explode('://', $path, 2);
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        array_unshift($arguments, $path);

        return [$prefix, $arguments];
    }

    /**
     * @param string $directory
     * @param bool   $recursive
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws FilesystemNotFoundException
     *
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @return array
     */
    public function listContents($directory = '', $recursive = false)
    {
<<<<<<< HEAD
        list($prefix, $directory) = $this->getPrefixAndPath($directory);
        $filesystem = $this->getFilesystem($prefix);
=======
        list($prefix, $arguments) = $this->filterPrefix([$directory]);
        $filesystem = $this->getFilesystem($prefix);
        $directory = array_shift($arguments);
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        $result = $filesystem->listContents($directory, $recursive);

        foreach ($result as &$file) {
            $file['filesystem'] = $prefix;
        }

        return $result;
    }

    /**
     * Call forwarder.
     *
     * @param string $method
     * @param array  $arguments
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws FilesystemNotFoundException
     *
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     * @return mixed
     */
    public function __call($method, $arguments)
    {
        list($prefix, $arguments) = $this->filterPrefix($arguments);

        return $this->invokePluginOnFilesystem($method, $arguments, $prefix);
    }

    /**
<<<<<<< HEAD
     * @param string $from
     * @param string $to
     * @param array  $config
     *
     * @throws InvalidArgumentException
     * @throws FilesystemNotFoundException
=======
     * @param $from
     * @param $to
     * @param array $config
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     *
     * @return bool
     */
    public function copy($from, $to, array $config = [])
    {
<<<<<<< HEAD
        list($prefixFrom, $from) = $this->getPrefixAndPath($from);

        $buffer = $this->getFilesystem($prefixFrom)->readStream($from);
=======
        list($prefixFrom, $arguments) = $this->filterPrefix([$from]);

        $fsFrom = $this->getFilesystem($prefixFrom);
        $buffer = call_user_func_array([$fsFrom, 'readStream'], $arguments);
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b

        if ($buffer === false) {
            return false;
        }

<<<<<<< HEAD
        list($prefixTo, $to) = $this->getPrefixAndPath($to);

        $result = $this->getFilesystem($prefixTo)->writeStream($to, $buffer, $config);
=======
        list($prefixTo, $arguments) = $this->filterPrefix([$to]);

        $fsTo = $this->getFilesystem($prefixTo);
        $result =  call_user_func_array([$fsTo, 'writeStream'], array_merge($arguments, [$buffer, $config]));
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b

        if (is_resource($buffer)) {
            fclose($buffer);
        }

        return $result;
    }

    /**
     * List with plugin adapter.
     *
     * @param array  $keys
     * @param string $directory
     * @param bool   $recursive
     *
<<<<<<< HEAD
     * @throws InvalidArgumentException
     * @throws FilesystemNotFoundException
     *
     * @return array
     */
    public function listWith(array $keys = [], $directory = '', $recursive = false)
    {
        list($prefix, $directory) = $this->getPrefixAndPath($directory);
=======
     * @return mixed
     */
    public function listWith(array $keys = [], $directory = '', $recursive = false)
    {
        list($prefix, $arguments) = $this->filterPrefix([$directory]);
        $directory = $arguments[0];
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
        $arguments = [$keys, $directory, $recursive];

        return $this->invokePluginOnFilesystem('listWith', $arguments, $prefix);
    }

    /**
     * Move a file.
     *
<<<<<<< HEAD
     * @param string $from
     * @param string $to
     * @param array  $config
     *
     * @throws InvalidArgumentException
     * @throws FilesystemNotFoundException
=======
     * @param $from
     * @param $to
     * @param array $config
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     *
     * @return bool
     */
    public function move($from, $to, array $config = [])
    {
        $copied = $this->copy($from, $to, $config);

        if ($copied) {
            return $this->delete($from);
        }

        return false;
    }

    /**
     * Invoke a plugin on a filesystem mounted on a given prefix.
     *
<<<<<<< HEAD
     * @param string $method
     * @param array  $arguments
     * @param string $prefix
     *
     * @throws FilesystemNotFoundException
=======
     * @param $method
     * @param $arguments
     * @param $prefix
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
     *
     * @return mixed
     */
    public function invokePluginOnFilesystem($method, $arguments, $prefix)
    {
        $filesystem = $this->getFilesystem($prefix);

        try {
            return $this->invokePlugin($method, $arguments, $filesystem);
        } catch (PluginNotFoundException $e) {
            // Let it pass, it's ok, don't panic.
        }

        $callback = [$filesystem, $method];

        return call_user_func_array($callback, $arguments);
    }
<<<<<<< HEAD

    /**
     * @param string $path
     *
     * @throws InvalidArgumentException
     *
     * @return string[] [:prefix, :path]
     */
    protected function getPrefixAndPath($path)
    {
        if (strpos($path, '://') < 1) {
            throw new InvalidArgumentException('No prefix detected in path: ' . $path);
        }

        return explode('://', $path, 2);
    }
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
}
