<?php
class HomeView extends HomeCont
{
    // the part of contact us
    public function sendContact($id, $name, $email, $msg)
    {
        $this->sendContactContr($id, $name, $email, $msg);
    }
}