<?php

class studentCont extends DB
{
    protected function getLevels()
    {
        $stmt = $this->Connection()->query("select * from levels");
        $data = $stmt->fetchAll();
        return $data;
    }
}