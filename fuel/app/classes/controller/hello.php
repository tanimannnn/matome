<?php

class Controller_Hello extends Controller 
{
    public function action_index()
    {
        //return 'hello world!';
        return View::forge('hello');
    }

}
