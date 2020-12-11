<?php include('header.php');
//Get videos from channel by YouTube Data API
$API_key    = 'AIzaSyCuW5JNW1dInXhlXwWxslKt_AoEBKIZM7w';
$channelID  = 'UCi8e0iOVk1fEOogdfu4YgfA';
$maxResults = 30;

$videoList = json_decode(file_get_contents('https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.$channelID.'&maxResults='.$maxResults.'&key='.$API_key.''));

?>
  <main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Movies</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Movies</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

      
      
    <section class="inner-page mt-4">
      <div class="container">
          <div class="row">
              
    <?php          
        foreach($videoList->items as $item){
            //Embed video
            if(isset($item->id->videoId)){
                echo '<div class="col-lg-4 box">
                        <iframe width="280" height="150" src="https://www.youtube.com/embed/'.$item->id->videoId.'" frameborder="0" allowfullscreen></iframe>
                        <p>'. $item->snippet->title .'</p>
                    </div>';
            }
        } 
              ?>
              
              
    <?php 
    $key = "fad5dbaff93f1e8c94b260170125973e";
    $imdb_id = $movie['imdb'];
    $json = file_get_contents("https://api.themoviedb.org/3/movie/$imdb_id?api_key=$key");
    $result = json_decode($json, true);

    $poster_path = $result["poster_path"];
    $title = $result["title"];
    $runtime = $result["runtime"];
    $overview = $result["overview"];
    $release_date = $result["release_date"];
    $revenue = $result["revenue"];
    $vote_average = $result["vote_average"];
    $vote_count = $result["vote_count"];

    echo "<p>$overview</p>";
    echo "<p>$$revenue</p>";
    echo "<p>$vote_count</p>";
?>
              
              
              
              
            <?php
                $api_key = '29ebc7b6';
                $imdb_movie_id = 'tt12749596';
                if(empty($api_key))
                {
                    echo 'Get API key from http://www.omdbapi.com/';
                    die();
                }
                $data = json_decode(file_get_contents('http://www.omdbapi.com/?i='.$imdb_movie_id.'&plot=full&apikey='.$api_key.''), true);
                //Remove the below comment to see all possible data
                //print_r($data);
                echo '
                <img src="'.$data['Poster'].'"/>
                <hr/>
                Title: <strong>'.$data['Title'].'</strong><br/>
                Year: '.$data['Year'].'<br/>
                Genre: '.$data['Genre'].'<br/>
                Actors : '.$data['Actors'].'<br/>
                Director : '.$data['Director'].'<br/>
                Plot: '.$data['Plot'].'<br/>
                IMDB Rating: <strong>'.$data['imdbRating'].'</strong> / Votes ('.$data['imdbVotes'].')<br/>
                ';
            ?>
      </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include('footer.php');?>