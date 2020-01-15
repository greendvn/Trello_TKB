<?php


class CardDB
{
    protected $connect;

    public function __construct($connect)
    {
        $this->connect = $connect;
    }
}