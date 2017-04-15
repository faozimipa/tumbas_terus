<?php

namespace Illuminate\Support\Facades;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;
=======
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
use Illuminate\Support\Testing\Fakes\EventFake;

/**
 * @see \Illuminate\Events\Dispatcher
 */
class Event extends Facade
{
    /**
     * Replace the bound instance with a fake.
     *
     * @return void
     */
    public static function fake()
    {
<<<<<<< HEAD
        static::swap($fake = new EventFake);

        Model::setEventDispatcher($fake);
=======
        static::swap(new EventFake);
>>>>>>> 8dce932f80edbf7a24cd32751d8144be0fd3a02b
    }

    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'events';
    }
}
