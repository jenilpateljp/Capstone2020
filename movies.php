<?php include('header.php');
$api_key = '29ebc7b6';
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
                $today=date("Y-m-d");
                $qry2=mysqli_query($con,"select * from  tbl_movie ");

            while($m=mysqli_fetch_array($qry2)){ 
                $imdb_id = $m['imdb'];
                $data = json_decode(file_get_contents('http://www.omdbapi.com/?i='.$imdb_id.'&plot=full&apikey='.$api_key.''), true); ?>
                    <div class="col-lg-3 box movie-list-box">
                        <div class="movie-box">
                            <a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $data['Poster']; ?>" alt="<?php echo $data['Title']; ?>" /></a>
                                <h4 class="movie-title"><a href="about.php?id=<?php echo $m['movie_id'];?>"><?php echo $data['Title']; ?></a></h4>
                                <p><Span class="color2 genre"><?php echo $data['Genre']; ?></span></p>
                            <a class="getinn-btn btn-small" href="about.php?id=<?php echo $m['movie_id'];?>">Book Now</a>
                        </div>
                    </div>

                <?php } ?>
      </div>
      </div>
    </section>

  </main><!-- End #main -->

  <?php include('footer.php');?>