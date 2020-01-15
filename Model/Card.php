<?php


class Card
{
    protected $id;
    protected $name;
    protected $description;
    protected $userId;
    protected $statusId;
    protected $dayId;

    public function __construct($name,$userId,$statusId,$dayId)
    {
        $this->name = $name;
        $this->userId = $userId;
        $this->statusId = $statusId;
        $this->dayId = $dayId;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getDayId()
    {
        return $this->dayId;
    }

    /**
     * @return mixed
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->userId;
    }

}