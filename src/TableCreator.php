<?php

namespace YourNamespace;

class TableCreator
{
    private $headers;
    private $data;

    public function __construct($headers, $data) {
        $this->headers = $headers;
        $this->data = $data;
    }

    public function renderTable() {
        echo '<table border="1">';

        // Render headers
        echo '<tr>';
        foreach ($this->headers as $header) {
            echo '<th>' . $header . '</th>';
        }
        echo '</tr>';

        // Render data
        foreach ($this->data as $row) {
            echo '<tr>';
            foreach ($row as $value) {
                echo '<td>' . $value . '</td>';
            }
            echo '</tr>';
        }

        echo '</table>';
    }
}