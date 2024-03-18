<?php

namespace YdcTableCreator;

use YdcTableCreator\interfaces\CreateTable;

class CreateTableBootstrap implements CreateTable
{
    public function draw(TableData $tableData){
        echo '<table class="table" border="1">';

        // Render headers
        echo '<tr>';
        foreach ($tableData->headers as $header) {
            echo '<th>' . $header . '</th>';
        }
        echo '</tr>';

        // Render data
        foreach ($tableData->data as $row) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    }
}