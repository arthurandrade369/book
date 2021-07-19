<?php
require_once("./publication.php");
require_once("./people.php");
class Book implements Publication
{
    private $title;
    private $author;
    private $totalPages;
    private $actualPage;
    private $isOpen;
    private $reader;

    public function details()
    {
        echo $this->getTitle() . "<br>";
        echo $this->getAuthor() . "<br>";
    }

    function __construct($title, $author, $totalPages, $reader)
    {
        $this->title = $title;
        $this->author = $author;
        $this->totalPages = $totalPages;
        $this->reader = $reader;
        $this->actualPage = 1;
    }

    private function getTitle()
    {
        return $this->title;
    }

    private function setTitle($title)
    {
        $this->title = $title;
    }

    private function getAuthor()
    {
        return $this->author;
    }

    private function setAuthor($author)
    {
        $this->author = $author;
    }

    private function getTotalPages()
    {
        return $this->totalPages;
    }

    private function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;
    }

    private function getActualPages()
    {
        return $this->actualPage;
    }

    private function setActualPages($actualPage)
    {
        $this->actualPage = $actualPage;
    }

    private function getIsOpen()
    {
        return $this->isOpen;
    }

    private function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;
    }

    private function getReader()
    {
        return $this->reader;
    }

    private function setReader($reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        $this->isOpen = true;
    }

    public function close()
    {
        $this->isOpen = false;
    }

    public function browse($pages)
    {
        $this->setActualPages($this->getActualPages() + $pages);
    }

    public function nextPage()
    {
        $this->actualPage++;
    }

    public function returnPage()
    {
        $this->actualPage--;
    }
}
