<?php

class RssReader {
    // RSS　URL一覧
    private $rssUrlList = array(
            'http://b.hatena.ne.jp/hotentry?mode=rss',      // はてな
            'http://anonews.livedoor.biz/index.rdf',        // あのにゅーす
#            'http://blog.livedoor.jp/idolover/index.rdf',   // アイドル画像速報
#            'http://nya-su.doorblog.jp/index.rdf',          // 芸スポニャース
#            'http://wan2o.com/feed',                        // わんわんお！ NG
#            'http://akb48matome.com/index.rdf',             // AKB48まとめんばー    
#            'http://geitsuboo.blog.fc2.com/?xml',           // げいのーの壷
#            'http://urageispo.com/index.rdf',               // 芸スポ裏ジャーナル
            // 'http://www.les2.net/feed',                  // レッツ芸能ニュース   NG
#            'http://enmari2222.xsrv.jp/feed/',              // 芸能情報の裏側視点
#            'http://spon.me/index.rdf',                     // スポン！
            // 'http://keywordjiten.seesaa.net/index20.rdf',// 芸能界の裏の顔 NG
#            'http://hadaare-bihada.seesaa.net/index.rdf',   // 最新芸能ニュースだZ
            );

    private $rssContents = array();

    /**
     *
     */
    public function getContents() {
        foreach ( $this->rssUrlList as $rssUrl ){
            $this->rssContents[] = simplexml_load_file($rssUrl, null, LIBXML_NOCDATA);
        }
        return $this->rssContents;
    }  

    /**
     *
     */
    public function parseRdfContents($rdfContents) {
        $parseContents = array();

        foreach($rdfContents as $rss) {
            $pageTitle = $rss->channel->title;
            //var_dump($rss);

            //echo "<h1>{$rss->channel->title}</h1>";
            //var_dump($rss);
            $article = array();
            foreach ($rss->item as $item) {
                //var_dump($item);
                
                $article['site']    = $pageTitle;
                $article['articleId'] = md5($pageTitle) . md5($item->link);
                $article['link']    = $item->link;
                $article['title']   = $item->title;
                $article['desc']    = $item->description;
                
                $dc = $item->children('http://purl.org/dc/elements/1.1/');
                $article['date']    = $dc->date;
                $article['subject'] = $dc->subject;
                $article['creator'] = $dc->creator;

                $content = $item->children('http://purl.org/rss/1.0/modules/content/');
                $article['encoded'] = $content->encoded;
                //$article['encoded'] = $item->children('content', true)->encoded; 
                
                /*
                $tmp = array(
                        'link'      => $item->link,
                        'title'     => $item->title,
                        'desc'      => $item->description,
                        );     
                 */
                //echo "<li><a href=\"$link\" title=\"$title\">$title</a>$date<p>$desc</p></li>\n";
                $this->pullImageUrl($article['encoded']);
                array_push($parseContents, $article);
            }
        }

        return $parseContents;
    }

    public function pullImageUrl($text)
    {

        $arr = explode(" ", $text);
        
        foreach($arr as $row) {
            if(preg_match('/http/', $row, $matches)) {
                $tmp = explode('"', $row);
                if(preg_match('/jpg|png|gif/', $row, $matches)) {
                    if(!preg_match('/ce046dc3.jpg/', $row)) {
                        var_dump($tmp[1]);
                    }
                }
            }
        }

    }


}
$obj = new RssReader();
$data = $obj->getContents();
$parseData = $obj->parseRdfContents($data);
//var_dump($parseData);

