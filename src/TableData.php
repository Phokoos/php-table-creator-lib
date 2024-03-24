<?php

namespace YdcTableCreator;

class TableData
{
    public $headers;
    public $data;
    public $pagination = true;
    public $itemsPerPage = 10;
    public $totalItems = 100;
    public $currentPage = 1;

    public function __construct($headers, $data, $pagination = false, $itemsPerPage = 20, $totalItems = 100, $currentPage = 2)
    {
        $this->headers = $headers;
        $this->data = $data;
        $this->pagination = $pagination;
        $this->itemsPerPage = $itemsPerPage;
        $this->totalItems = $totalItems;
        $this->currentPage = $currentPage;
    }

}