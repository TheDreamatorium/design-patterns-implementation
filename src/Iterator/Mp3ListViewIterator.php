<?php
class Mp3ListViewIterator implements Mp3IteratorInterface
{
    private Mp3Collection $collection;

    private int $current = 0;

    public function __construct(Mp3Collection $collection)
    {
        $this->collection = $collection;
    }

    public function getCollection(): Mp3Collection 
    {
        return $this->collection;
    }

    public function getCurrentPosition(): int
    {
        return $this->current;
    }

    public function hasNext(): bool
    {
        return $this->current < count($this->collection->getFiles());   
    }

    public function hasPrevious(): bool
    {
        return $this->current > 0;   
    }

    public function next()
    {
        if ($this->hasNext()) {
            $this->current++;
        }
    }

    public function previous()
    {
        if ($this->hasPrevious()) {
            $this->current--;
        }
    }

    public function getCurrentMp3()
    {
        return $this->collection->getfiles()[$this->current];
    }
}
