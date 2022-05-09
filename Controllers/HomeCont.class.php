<?php

class HomeCont extends DB
{
    // the part of contact us
    protected function sendContactContr($id, $name, $email, $msg)
    {
        $stmt = $this->Connection()->prepare("insert into contact(id, name, email, msg) values (?, ?, ?, ?)");
        $stmt->execute(array($id, $name, $email, $msg));
    }

}