<?php

class Product 
{

    private int $id;

    public static Product $instance;

    private string $label;

    public function __construct(){}

    public static function withData(int $id, string $label)
    {
        $product = new self();
        $product->id = $id;
        $product->label = $label;
        return $product;
    }

    // Singleton
    public static function getInstance() : Product 
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getId() : int 
    {
        return $this->id;
    }

    public function setId(int $id) : void 
    {
        $this->id = $id;
    }

    public function getLabel() : string 
    {
        return $this->label;
    }

    public function setLabel(string $label) : void 
    {
        $this->label = $label;
    }
}
