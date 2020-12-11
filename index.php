<?php include('header.php');
$api_key = '29ebc7b6';
?>

  <main id="main">

    <section id="clients">
      <div>

        <div class="owl-carousel clients-carousel">
          <img src="assets/img/slide-1.jpg" alt="">
          <img src="assets/img/slide-2.jpg" alt="">
          <img src="assets/img/slide-3.jpg" alt="">
          <img src="assets/img/slide-4.jpg" alt="">
          <img src="assets/img/slide-5.jpg" alt="">
        </div>

      </div>
    </section>
      
    <section class="inner-page mt-4 movie-list-section">
      <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h3 class="site-title">Top rated Movies</h3>
                
                <?php
                $qry2=mysqli_query($con,"select * from  tbl_movie WHERE type='featured' ");
                $i = 1;
                while($m=mysqli_fetch_array($qry2)){
                
                $imdb_id = $m['imdb'];
                $data = json_decode(file_get_contents('http://www.omdbapi.com/?i='.$imdb_id.'&plot=full&apikey='.$api_key.''), true); ?>
                <div class="top-rated-wrapper">
                    <div class="top-rated-image">
                        <a href="about.php?id=<?php echo $m['movie_id'];?>">
                            <img src="<?php echo $data['Poster']; ?>" alt="<?php echo $data['Title']; ?>" />
                        </a>
                    </div>
                    <div class="top-rated-content" style="padding-left: 20px">
                        <p class="top-rated-number"><?php echo $i++; ?>º</p>
                        <a class="top-rated-link" href="about.php?id=<?php echo $m['movie_id'];?>"><?php echo $data['Title']; ?></a>
                        <p class="top-rated-rating"><i class="ion-ios-star"></i> <?php echo $data['imdbRating']; ?><span>/10</span></p>
                    </div>
                </div>

                <?php } ?>
            </div>
            
            
            
            <div class="col-md-9">
            <div>
                <h3 class="site-title">Upcoming Movies</h3>
            </div> 
                <div class="row movie-list-section">
            <?php
            
            $qry2=mysqli_query($con,"select * from  tbl_movie WHERE type='upcoming' ");
            while($m=mysqli_fetch_array($qry2)){ 
                $imdb_id = $m['imdb'];
                $data = json_decode(file_get_contents('http://www.omdbapi.com/?i='.$imdb_id.'&plot=full&apikey='.$api_key.''), true); ?>
                    <div class="col-lg-3 box">
                        <div class="movie-box">
                            <a href="about.php?id=<?php echo $m['movie_id'];?>"><img src="<?php echo $data['Poster']; ?>" alt="<?php echo $data['Title']; ?>" /></a>
                                <h4 class="movie-title"><a href="about.php?id=<?php echo $m['movie_id'];?>"><?php echo $data['Title']; ?></a></h4>
                                <p><Span class="color2 genre"><?php echo $data['Genre']; ?></span></p>
                        </div>
                    </div>

                <?php } ?>

            </div>
            
            <div>
                <h3 class="site-title">Recent Movies</h3>
            </div>   
                <div class="row movie-list-section">
            <?php
            
            $qry2=mysqli_query($con,"select * from  tbl_movie WHERE type='recent' ");
            while($m=mysqli_fetch_array($qry2)){ 
                $imdb_id = $m['imdb'];
                $data = json_decode(file_get_contents('http://www.omdbapi.com/?i='.$imdb_id.'&plot=full&apikey='.$api_key.''), true); ?>
                    <div class="col-lg-3 box">
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
        </div>
        </div>
      </section>
      
      <section class="inner-page mt-4 promotion-section">
      <div class="container">
          <div class="row promotion-inner">
              <div class="col-lg-6 promotion-img">
                <img src="assets/img/woman-shaking-popcorn.jpg" alt="promotion-1">
              </div>
              <div class="col-lg-6 promotion-content">
                <h2>Satisfy Popcorn Cravings with Big Savings</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                  <a class="getinn-btn btn-large" href="#">Book Tickets Now</a>
              </div>
          </div>
          
            <div class="row promotion-inner">
              <div class="col-lg-6 promotion-content">
                <h2>Give the Gift of Movies</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
                  <a class="getinn-btn btn-large" href="#">Book Tickets Now</a>
              </div>
                <div class="col-lg-6 promotion-img">
                <img src="assets/img/child-wearing-3d.jpg" alt="promotion-1">
              </div>
          </div>
          
          
          </div>
      </section>
  </main>
    
<?php include('footer.php');?>