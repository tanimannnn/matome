<?php

class Controller_Sample extends Controller
{

    public function action_index()
    {
        $all = Model_Articleinfo::find('all', array(
                    'order_by' => array('date' => 'desc'),
                    'limit'    => 100,
                    ));
        
        $data = array();
        foreach($all as $recode) {
            //var_dump($recode);
            //var_dump($recode->to_array());
            //$data[] = $recode->to_array();
            array_push($data, $recode->to_array());
        } 
        $vars['data'] = $data;
        //var_dump($data);
        return View::forge('sample/index', $vars);
    }

    public function action_select()
    {
        //$matome = new Model\Articleinfo::find(1);
        $data = Model_Articleinfo::find('all', array(
                    'order_by' => array('date' => 'desc'),
                    'limit'    => 100,
                    ));
        
        return View::forge('sample/index', $data);
    }

    /*
    public function action_insert()
    {   
        $matome = new Model_Articleinfo();
        $matome->article_id = '1234567890';
        $matome->site_title = 'ああなる';
        $matome->site_url   = '';
        $matome->title      = 'あー！';
        $matome->url        = 'http://wwww.yahoo.co.jp';
        $matome->description = 'あいうえお';
        //$matome->date;
        $matome->guid = 11234;

        $ret = $matome->save();
        return $ret;
    } 
  */  
}

