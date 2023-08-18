<?php

namespace Marcincook\Gastro;

class Gastro
{
    public array $tables;

    public function setTables(array $tables): Gastro
    {
        $this->tables = $tables;

        return $this;
    }
}
