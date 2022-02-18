<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        
    <title>Corpus</title>
        <link href="style.scss" type="text/css" rel="stylesheet">
    </head>
    <body>
        <div class="content">

            <form method="post" action="">
                <input type="text" name="feedurl" placeholder="Kérem az URL címet..">&nbsp;<input type="submit" value="Keresés" name="submit">
            </form>
    <?php

        $url = "http://makitweb.com/feed/";
        if(isset($_POST['submit'])){
            if($_POST['feedurl'] != ''){
                $url = $_POST['feedurl'];
            }
        }

        $invalidurl = false;
        if(@simplexml_load_file($url)){
            $feeds = simplexml_load_file($url);
        }else{
            $invalidurl = true;
            echo "<h2>Érvénytelen URL cím.</h2>";
        }


        $i=0;
        if(!empty($feeds)){


            $site = $feeds->channel->title;
            $sitelink = $feeds->channel->link;

            echo "<h1>".$site."</h1>";
            foreach ($feeds->channel->item as $item) {

                $title = $item->title;
                $link = $item->link;
                $description = $item->description;
                $postDate = $item->pubDate;
                $pubDate = date('D, d M Y',strtotime($postDate));


                if($i>=10) break;
        ?>
                <div class="post">
                    <div class="post-head">
                        <h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
                        <span><?php echo $pubDate; ?></span>
                    </div>
                    <div class="post-content">
                        <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a href="<?php echo $link; ?>">Még több infó</a>
                    </div>
                </div>

                <?php
                $i++;
            }
        }else{
            if(!$invalidurl){
                echo "<h2>Nem találtunk adatot!</h2>";
            }
        }
    ?>
        </div>
    </body>
</html>

