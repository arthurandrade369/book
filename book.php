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
        echo "Livro: " . $this->getTitle() . "<br>";
        echo "Escrito por: " . $this->getAuthor() . "<br>";
        echo "Total de paginas : " . $this->getTotalPages() . "<br>";
        echo "Paginas lidas: " . $this->getActualPages() . "<br>";
    }

    function __construct($title, $author, $totalPages, $reader)
    {
        $this->title = $title;
        $this->author = $author;
        $this->totalPages = $totalPages;
        $this->reader = $reader;
        $this->actualPage = 0;
        $this->isOpen = false;
    }

    private function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    private function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    private function getTotalPages()
    {
        return $this->totalPages;
    }

    public function setTotalPages($totalPages)
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

    public function getReader()
    {
        return $this->reader;
    }

    public function setReader($reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        $this->setIsOpen(true);
    }

    public function close()
    {
        $this->isOpen = false;
    }

    public function browse($pages)
    {
        if ($this->getIsOpen()) {
            if ($this->getActualPages() + $pages <= $this->getTotalPages()) {
                $this->setActualPages($this->getActualPages() + $pages);
            } else {
                echo "Impossivel ler mais paginas que o total!<br>";
                return 0;
            }
        } else {
            echo "Abra o livro para iniciar a leitura!<br>";
        }
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
