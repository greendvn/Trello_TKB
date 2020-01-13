<?php


class NoteTypeDB
{
    private $conn;

    public function __construct()
    {
        $db = new DBConnect();
        $this->conn = $db->connect();
    }

    public function getListType()
    {
        $sql = "SELECT * FROM note_type";
        $stmt = $this->conn->query($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $this->returnNoteTypeList($result);
    }

    /**
     * @param $item
     * @return NoteType
     */
    public function createNoteTypeFromResult($item)
    {
        $noteType = new NoteType($item['name'], $item['description']);
        $noteType->setId($item['id']);
        return $noteType;
    }

    /**
     * @param array $result
     * @return array
     */
    public function returnNoteTypeList($result)
    {
        $arr = [];
        foreach ($result as $item) {
            $noteType = $this->createNoteTypeFromResult($item);
            array_push($arr, $noteType);
        }
        return $arr;
    }
}