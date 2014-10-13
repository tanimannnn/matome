<?php



$rssUrl = 'http://www.les2.net/feed';                  // レッツ芸能ニュース   NG
$rssUrl = 'http://keywordjiten.seesaa.net/index20.rdf'; // 芸能界の裏の顔 NG
$rssContents = simplexml_load_file($rssUrl, null, LIBXML_NOCDATA);
// var_dump($rssContents);

$name = $rssContents->getNamespaces(true);

var_dump($name);
foreach ($rssContents->channel->item as $item) {
    
    //$dc = $item->children('http://purl.org/dc/elements/1.1/');
    //var_dump($dc);
    
    // $atom = $item->children('http://www.w3.org/2005/Atom');
    // var_dump($atom);

     var_dump($item);
    //$item->description;
}
// $item = $rssContents->channel->item;
//$name->children($name['g']);

/*
foreach( $rssContents as $content) {
    //var_dump($content->channel);
    //var_dump($content->channel->title); 
    //var_dump($content->channel->item);

    //$item = $content->channel->item;
    //var_dump($item);
    //$dc = $item->children('http://purl.org/dc/elements/1.1/');
    //var_dump($dc);
    //echo $item->title;
}
*/
