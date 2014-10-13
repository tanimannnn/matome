<?php

namespace Fuel\Tasks;

class Sample
{
    public function run() {
        echo "start";
        $_articleInfo = \Model_Articleinfo::find('all', array(
                    'select'    => array('article_id'),
                    'order_by'  => array('date' => 'desc'),
                    'limit'    => 10000,
                    ));
        var_dump($_articleInfo);
        echo count($_articleInfo);
        echo "end";

    }   
}
