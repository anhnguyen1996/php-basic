<?php
namespace Core;

class Data
{
    //set contentview cho view
    private $contentPage;
    
    //dong du lieu tra ve cua cac model tu database
    private $records = [];

    public function __construct(string $contentPage = null, $records = [])    
    {
        $this->contentPage = $contentPage;
        $this->records = $records;
    }

    public function setContentPage(string $contentPage)
    {
        $this->contentPage = $contentPage;
    }

    public function getContentPage(): string
    {
        return $this->contentPage;
    }

    public function setRecords(string $databaseName, $records)
    {
        $this->records[$databaseName] =  $records;
    }

    public function getRecords(): array
    {
        return $this->records;
    }
}