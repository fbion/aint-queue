<?php

/*
 * This file is part of the littlesqx/aint-queue.
 *
 * (c) littlesqx <littlesqx@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled.
 */

namespace Littlesqx\AintQueue;

class AbstractQueue implements QueueInterface
{
    /**
     * Push an executable job message into queue.
     *
     * @param $job
     *
     * @return mixed
     */
    public function push($job)
    {
        // TODO: Implement push() method.
    }

    /**
     * Pop an job message from queue.
     *
     * @return mixed
     */
    public function pop()
    {
        // TODO: Implement pop() method.
    }
}