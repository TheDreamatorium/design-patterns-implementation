<?php

class Triangle implements Shapeable
{
    private int $base;

    private int $height;

    public function calculateArea(): int
    {
        return 0.5 * $this->base * $this->height;
    }

    public function setBase(int $base)
    {
        $this->base = $base;
    }

    public function getBase() : int
    {
        return $this->base;
    }

    public function setHeight(int $height)
    {
        $this->height = $height;
    }

    public function getHeight() : int
    {
        return $this->height;
    }
} 
