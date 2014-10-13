<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <?php echo Asset::css('matome.css'); ?>
    <title><?php echo '芸スポ まとめ！'; ?></title>
  </head>
  <body>
  <div id='container'>
  <div id='branding'>
    <h1>
      <a href='/'>芸スポまとめ！ - oh まとめ</a>
    </h1>
  </div>
  <div id='main'>
  <?php
    $i = 0;
    echo "<div class='box-wrap'>";
    echo "<div class='box1_1'>";
    foreach($data as $recode) {
        extract($recode);
        //var_dump($recode);
        if ($i % 4 == 0) {
            echo "<ul class='entry-vertical-4'>";
        }
          echo "<li class='entry-unit'>";
            echo "<ul class='users'>";
              echo "<li>";
                echo "USER";
              echo "</li>";
            echo "</ul>";
            echo "<div class='entry-contents'>";
              echo "<h3>";
                echo "<a target='_blank' href='$url' title='$title'>$title</a>";
                //echo "<a href='$site_url'>$site_title</a> <a href='$url' title='$title'>$title</a>";
              echo "</h3>";
              echo "<ul class='entry-data'>";
                echo "<li class='description'>";
                  //echo "<blockquote><p>$description</p></blockquote>";
                echo "</li>";
                echo "<li class='category'>category</li>";
                echo "<li class='date'>$date</li>";
              echo "</ul>";
            echo "</div>";
            echo "<ul class='entry-meta'>";
             echo "<a href='$site_url'>$site_title</a>";
            echo "</ul>";
          echo "</li>";
        $i++;
        if ($i % 4 == 0) {
            echo "</ul>";
        }
        //var_dump($recode);
    }
    echo "</div>";
    echo "</div>";
  ?>
  </div>
  </div>
  </body>
</html>
