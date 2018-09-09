<?php

class WorkerPool implements \Countable
{
    private $occupieWorkers=[];

    private $freeWorkers=[];

    public function get(): StringReverseWorker
    {
        if (count($this->freeWorkers) == 0) {
            $worker = new StringReverseWorker();
        } else {
            $worker = array_pop($this->freeWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)];

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_has($worker);

        if (isset($this->occupieWorkers[$key])) {
            unset($this->occupieWorkers[$worker[$key]]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count():int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}
