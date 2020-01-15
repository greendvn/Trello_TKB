<?php


class Status
{
    protected $id;
    protected $cardStatus;

    public function __construct($cardStatus)
    {
        $this->cardStatus = $cardStatus;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCardStatus()
    {
        return $this->cardStatus;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

}