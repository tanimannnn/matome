<?php


require 'reader.php';

// コンテンツ取得リスト        
$rssUrlList = array(
        'http://b.hatena.ne.jp/hotentry?mode=rss',      // はてな
        //'http://anonews.livedoor.biz/index.rdf',        // あのにゅーす
        //'http://blog.livedoor.jp/idolover/index.rdf',   // アイドル画像速報
        //'http://nya-su.doorblog.jp/index.rdf',          // 芸スポニャース
       // 'http://wan2o.com/feed',                        // わんわんお！ NG
       // 'http://akb48matome.com/index.rdf',             // AKB48まとめんばー    
# 'http://geitsuboo.blog.fc2.com/?xml',           // げいのーの壷
#       'http://urageispo.com/index.rdf',               // 芸スポ裏ジャーナル
#       'http://enmari2222.xsrv.jp/feed/',              // 芸能情報の裏側視点
#       'http://spon.me/index.rdf',                     // スポン！
#       'http://hadaare-bihada.seesaa.net/index.rdf',   // 最新芸能ニュースだZ
#       'http://geinounewssss.seesaa.net/index20.rdf',  // 
        );

$obj = new \Fuel\Tasks\Reader();
$obj->run();
