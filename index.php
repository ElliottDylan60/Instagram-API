<html>
    <style>
        #wrapper{
            height: 184px;
            overflow: hidden;
            overflow-x: scroll;
            scrollbar-width: none;
        }
        #mediaContainer{
            width: 2850;
        }
        .media{
            padding-left: 5px;
            padding-right: 5px;
            float: left;
        }

    </style>
    <head>
        <title>88.1 The 'Burg Instagram Feed</title>
    </head>
    <body>
        <div id="wrapper">
        <div id="mediaContainer">
            <?php
                // Get Json form of Instagram API
                $url = "https://graph.facebook.com/v15.0/ID?fields=media%7Bmedia_type%2C%20media_url%7D&access_token=TOKEN";
                $cURL = curl_init();
                curl_setopt($cURL, CURLOPT_URL, $url);
                curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($cURL);
                $json = json_decode($result, true);
                
                foreach($json['media']['data'] as $post){
                    /*Handles Each Type of Media (Image, Video, or Carousel_Album)*/
                    if($post['media_type'] == 'IMAGE'){ // Media is Image
                        echo "<img class='media' src='".$post['media_url']."' alt='Social Post' width='150'>";
                    }else if($post['media_type'] == 'VIDEO'){ // Media is Video
                        echo "<video class='media' width='150' height='150' controls><source src='".$post['media_url']."'></video>";
                    }else{ // Media is Carousel_Album
                        // Do Nothing, fix this later
                    } // End If
                } // End For Each
            ?>
        </div>
        </div>
    </body>
</html>





    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    