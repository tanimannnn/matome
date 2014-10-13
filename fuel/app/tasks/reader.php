<?php

namespace Fuel\Tasks;

class Reader
{
    public function run() {

        // コンテンツ取得リスト        
        $rssUrlList = array(
                'http://b.hatena.ne.jp/hotentry?mode=rss',      // はてな
# 'http://anonews.livedoor.biz/index.rdf',        // あのにゅーす
#               'http://blog.livedoor.jp/idolover/index.rdf',   // アイドル画像速報
#               'http://nya-su.doorblog.jp/index.rdf',          // 芸スポニャース
#               'http://wan2o.com/feed',                        // わんわんお！ NG
#               'http://akb48matome.com/index.rdf',             // AKB48まとめんばー    
#               'http://geitsuboo.blog.fc2.com/?xml',           // げいのーの壷
#               'http://urageispo.com/index.rdf',               // 芸スポ裏ジャーナル
#               'http://enmari2222.xsrv.jp/feed/',              // 芸能情報の裏側視点
#               'http://spon.me/index.rdf',                     // スポン！
#               'http://hadaare-bihada.seesaa.net/index.rdf',   // 最新芸能ニュースだZ
#               'http://geinounewssss.seesaa.net/index20.rdf',  // 
                );

        // データ取得
        $contents = $this->getContent($rssUrlList);
        //var_dump($contents);

        // データ解析 DBの形式に合わせる
        $parseContents = $this->parseRdfContents($contents);

        // 取得データの保存
        foreach($parseContents as $data) {

            // データの重複チェック
            $ret = \Model_Articleinfo::find('all', array(
                        'where' => array(
                            array('article_id', $data['article_id'])
                            )
                        ));

            // 該当なしなら登録する
            if (empty($ret)) {
                $model = new \Model_Articleinfo();

                $model->article_id  = $data['article_id'];
                $model->site_title  = $data['site_title'];
                $model->site_url    = $data['site_url'];
                $model->title       = $data['title'];
                $model->url         = $data['url'];
                $model->description = $data['description'];
                $model->encoded     = $data['encoded'];
                $model->title       = $data['title'];
                $model->date        = date('Y-m-d H:i:s', $data['date']);
                $model->guid        = '1234';

                $result = $model->save();
            } else {
                \Log::info("データが存在しています: {$data['article_id']}");
            }
        }

        \Log::info(__FILE__ . ' task success');
    }


    public function getContent($urlList) 
    {
        $contents = array();

        foreach ( $urlList as $url ){
            $response = simplexml_load_file($url, null, LIBXML_NOCDATA);
            if ($response === false) {
                //\Log::error("getContent Error! process skip url:[$url]");
                continue;
            }
            $contents[] = $response; 
        }

        return $contents;
    }

    public function parseRdfContents($rdfContents) {
        $parseContents = array();

        foreach($rdfContents as $rss) {
            $pageTitle  = $rss->channel->title;
            $pageUrl    = $rss->channel->link;
            $article    = array();
            foreach ($rss->item as $item) {
                $dc = $item->children('http://purl.org/dc/elements/1.1/');
                $content = $item->children('http://purl.org/rss/1.0/modules/content/');

                $article['site_title']  = $pageTitle;
                $article['site_url']    = $pageUrl;
                $article['article_id']  = $this->getUniqId($pageTitle, $item->link);
                $article['url']         = $item->link;
                $article['title']       = $item->title;
                $article['description'] = $item->description;
                $article['encoded']     = $content->encoded;
                $article['date']        = strtotime($dc->date);
                $article['subject']     = $dc->subject;

                array_push($parseContents, $article);
            }
        }

        return $parseContents;
    }

    public function getUniqId($title, $url) {
        return md5(md5($title) . md5($url));
    }
}

