<!DOCTYPE html>
<html>
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="CSS/style.css">
</head>
<!-- Header -->
<div class="header">
    <div>
      <h1>Real Estate</h1>
    </div>
    <div></div>

    <div class="btn">
        <div>
            <button class="signup-button">
            SIGN UP
            </button> 
        </div>
        <div>
            <a class="active" href="login.php">LOG IN</a>
           
        </div>
    </div>

<body>
  
</div>

<!-- Navigation Bar -->
<div class="navbar">
  <a href="#">BUY</a>
  <a href="#">SELL</a>
  <a href="#">RENT</a>
  <a href="#">MORTAGE</a>
  <a href="#">FIND AN AGENT</a>
  <a href="#">TOOLS</a>
  <a href="#">ABOUT</a>
  <a href="#">BLOG</a>
  <a href="#">CONTACT</a>
  <input class="search-box" type="text" placeholder="Search">
</div>
<?php
include("header.php");
include ("connect-db.php");
$connection = db_connect();

if ($connection->connect_errno > 0) {
	die ('Unable to connect to database [' . $connection->connect_error . ']');
}	
$sql = "select * from property";
$result = $connection->query($sql);
?>
<div class="row">
  <div class="leftcolumn">
        <div class="col-lg-12">

          <div class="row">

			<?php 
			while ($product = $result->fetch_array()) { ?>
				<div class="col-lg-4 col-md-6 mb-4">
				  <div class="card h-100">
					<img class="card-img-top" src="<?php echo $product['Images']; ?>">
					<div class="card-body">
					  <h4 class="card-title">
						<?php echo $product['type']; ?>
						<?php echo $product['Price']; ?>
					  </h4>
					  <p class="card-text">
					  <?php echo $product['Description']; ?></p>
					</div>
				  </div>
				</div>
			<?php 
			}
			$result->free();
			?>
			
          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->
  </div>


<!-- The flexible grid (content) -->
<div class="row">
  <div class="side">
    <h2>Prestigious Villas</h2>
    <div><img src="images/picture1.jfif" style="height: 300px;"></div>
    <p>NSW Sotheby's International is delighted to introduce to the market 'Yattarna', perched majestically on 4 acres of manicured gardens. Yattarna boasts unparalleled jetliner views stretching out to the Pacific Ocean and located just a brief 1.2-hour drive from Sydney, and a mere 5 minutes to both Avoca Beach and Terrigal. This enviable position stands out not just for its views, but also its strategic proximity to key locales. It boasts six spacious bedrooms and six bathrooms that cater to both family and guests with utmost sophistication. Outdoor living features a resort-style pool that invites relaxation and the alfresco entertainment areas have been expertly designed to maximize privacy, ensuring that every moment spent outdoors is one of sheer pleasure. With it's coveted north-east aspect it stands as a testament to quality and refinement positioned perfectly with the best the coast has to offer. The property is designed to embrace you in an unparalleled lifestyle and will undoubtedly leave a lasting impression. Yattarna is an epitome of excellence that will surely not disappoint.
   </p>

  </div>
  <div class="main">
    <h2>Luxury Detached House</h2>
    <div><img src="images/picture2.jpg" style="height: 300px;"></div>    
    <p>Welcome to Wategos, an epitome of luxury nestled in the serene ambiance of Byron Bay. This exceptional beachfront property, just steps from the renowned Wategos Beach, embodies a seamless blend of sophistication and relaxation. Offering a bespoke sanctuary with a modern and expansive floor plan, it encompasses four plush bedrooms, five high-end bathrooms, a captivating pool, and a casual entertainment space, all enveloped in lush tropical gardens.
   </p>
    <br>
  </div>
</div>

<div class="main2">
    <p1>LET YOUR DREAMS COME TRUE</p>
    <p2>BULDING HAPPY HOMES,CREATING HEALTHY LIVING SPACES</p>
    <p3>All the Lorem generators on the internet tend to repeat all the Lorem generators on the internet tend to repeat all the Lorem generators on the internet tend to repeat</p>
    <a class="active" href="registation.php">SEE OUR STORY</a>
</div>
<!-- Footer -->
<div class="footer">
  <h2>Tuan Kiet Vu</h2>
</div>

</body>
</html>






