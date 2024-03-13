<?php

namespace YourNamespace;

class TableData
{
    public $headers;
    public $data;
    public $type;
}

interface CreateTable
{
    public function draw(TableData $tableData);
}

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

class CreateTableBasic implements CreateTable
{
    public function draw(TableData $tableData){
        echo 'Draw basic' . $tableData->data;
    }
}

class CreateTableBootstrap implements CreateTable
{
    public function draw(TableData $tableData){
        echo 'Draw bootstrap' . $tableData->data;
    }
}

$tableDataOne = new TableData();
$tableDataOne->data = 'data';
$tableDataOne->headers = 'headers';
$tableDataOne->type = 'type';

$creator = new TableCreator(new CreateTableBasic);
$creator->create($tableDataOne);

$tableDataSecond = new TableData();
$tableDataSecond->data = 'data-2';
$tableDataSecond->headers = 'headers-2';
$tableDataSecond->type = 'type-2';

$creator = new TableCreator(new CreateTableBootstrap);
$creator->create($tableDataSecond);

//class TableCreator
//{
//    private $headers;
//    private $data;
//
//    public function __construct($headers, $data) {
//        $this->headers = $headers;
//        $this->data = $data;
//    }
//
//    public function renderTable() {
//        echo '<table class="table" border="1">';
//
//        // Render headers
//        echo '<tr>';
//        foreach ($this->headers as $header) {
//            echo '<th>' . $header . '</th>';
//        }
//        echo '</tr>';
//
//        // Render data
//        foreach ($this->data as $row) {
//            echo '<tr>';
//            foreach ($row as $value) {
//                echo '<td>' . $value . '</td>';
//            }
//            echo '</tr>';
//        }
//
//        echo '</table>';
//    }
//}