<?php

namespace Marcincook\Gastro;

class Gastro
{

    public array $tables;

    /**
     * @param array $tables
     * @return Gastro
     */
    public function setTables(array $tables): Gastro
    {
        $this->tables = $tables;
        return $this;
    }

}
