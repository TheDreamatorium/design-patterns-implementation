<?php
class Mp3Collection implements Mp3CollectionIterable {

    private $files = [];

    public function createIterator(): Mp3IteratorInterface
    {
        return new Mp3ListViewIterator($this);
    }

    public function getFiles(): array 
    {
        return $this->files;
    }

    public function addFile(string $name) 
    {
        $this->files[] = $name;
    }
}
