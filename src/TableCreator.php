<?php

namespace YdcTableCreator;

use YdcTableCreator\interfaces\CreateTable;

class TableCreator
{
    private $creator;

    public function __construct(CreateTable $creator)
    {
        $this->creator = $creator;
    }

    public function create(TableData $tableData)
    {
        $this->creator->draw($tableData);
    }
}