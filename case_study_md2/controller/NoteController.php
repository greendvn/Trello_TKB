<?php


class NoteController
{
    private $noteDB;
    private $noteTypeDB;

    public function __construct()
    {
        $this->noteDB = new NoteDB();
        $this->noteTypeDB = new NoteTypeDB();
    }

    public function index()
    {
        $types = $this->noteTypeDB->getListType();
        $noteList = $this->noteDB->getList();
        include_once "view/note/list.php";
    }

    public function addNote()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $types = $this->noteTypeDB->getListType();
            include_once "view/note/add.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $note = new Note($_POST['title'], $_POST['content'], $_POST['type_id']);
            $this->noteDB->add($note);
            header("location: index.php");
        }
    }

    public function removeNote()
    {
        $note_id = $_GET['id'];
        $this->noteDB->delete($note_id);
        header("location: index.php");
    }

    public function editNote()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            $note = $this->noteDB->getNoteById($_GET['id']);
            $types = $this->noteTypeDB->getListType();
            include_once "view/note/edit.php";
        } elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $note_id = $_GET['id'];
            $note = new Note($_POST['title'], $_POST['content'], $_POST['type_id']);
            $this->noteDB->edit($note_id, $note);
            header("location: index.php");
        }
    }

    public function searchNoteByTitle()
    {
        $keyword = $_GET['keyword'];
        $noteList = $this->noteDB->searchNotes($keyword);
        include_once "view/note/list.php";
    }

    public function noteDetail()
    {
        $note_id = $_GET['id'];
        $note = $this->noteDB->getNoteById($note_id);
        include_once "view/note/details.php";
    }

    public function getNoteByType()
    {
        $type_id = $_GET['type_id'];
        $types = $this->noteTypeDB->getListType();
        $noteList = $this->noteDB->getNoteByType($type_id);
        include_once "view/note/list.php";
    }
}