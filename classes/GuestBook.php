<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 026 26.05.18
 * Time: 12:38
 */

class GuestBook extends View
{
    public $way;

    public function  save()
    {
        file_put_contents($this->way, $this->data);
        return $this;

    }
}