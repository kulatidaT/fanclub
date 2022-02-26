<?php 

    include_once('functions.php');
    $selectdata = new DB_con();
    if (isset($_POST['home'])) {

        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
  header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 30px 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  z-index: 10000;
}




header .logo {
  color: #fff;
  font-weight: 700;
  text-decoration: none;
  font-size: 2em;
  text-transform: uppercase;
  letter-spacing: 2px;
}

header ul {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 150px;
}

header ul li {
  list-style: none;
  margin-left: 80px;
}

header ul li a {
  text-decoration: none;
  padding: 6px 15px;
  color: #fff;
  border-radius: 20px;
}

header ul li a:hover,
header ul li a.active {
  background: #fff;
  color: #e45;
}



section img#clouds {
  position: absolute;
  top: 0;
  left: 0;
 
  width: 100%;
  height: 160%;
  object-fit: cover;
  z-index:-1;
  margin-top : 0px;
  padding: 0px 0px;
  
}

.bar a {
    position:absolute;
    top:-60px;
}
.bar a img {
    z-index:-1;
    position:absolute;
    top:0;
    transition:all .5s ease-in-out;
}
        body{
                
                background: linear-gradient(
                    180deg, rgba(109, 18, 157, 0.72)
                     0%, rgba(255, 151, 135, 0.83) 100%);
                /* background-color: #f1e0ff ; */
            }
    </style>
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Index Page</title>

<title>Activity</title>

<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> -->
</head>

<body>
<header>
            <center><a href="#" class="logo">FANCLUB</a></center>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Artist</a></li>
                <li><a href="#" class="active" >Event</a></li>
                <li><a href="#" >Profile</a></li>
            </ul>
            
        </header>
      
        <section>
            <div>
                <img src="https://bit.ly/3tb7807" id="clouds">
            </div>
        </section>
<div class="container">
    <h1 class="mt-5">Promote Event</h1>
    <hr>
  
    <?php 

        
    if (isset($_GET['pid'])) {
        //echo  $_GET['pid'];
        
     } 
        $Event_ID = $_GET['pid'];
        $updateuser = new DB_con();
        $sql = $updateuser->fetchonerecord($Event_ID);
        //$sql = $updateuser->activity($Event_ID)
        while($row = mysqli_fetch_array($sql)) {
            
    ?>
</form> 

   

<?php } ?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
             <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          
            </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img class="d-block w-100" src="https://i0.wp.com/www.korseries.com/wp-content/uploads/2019/04/2019-world-tour-blackpink-in-your-area-bangkok-encore.jpg?fit=1000%2C596&ssl=1" alt="First slide">
    </div>
    <div class="carousel-item">
    <img class="d-block w-100" src="https://www.popcornfor2.com/upload/110/news-full-109848.jpg" alt="First slide">
    
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
  <div class="btn-group mr-2" role="group" aria-label="First group">
    <button type="button" class="btn btn-secondary">1</button>
    <button type="button" class="btn btn-secondary">2</button>
    <button type="button" class="btn btn-secondary">3</button>
    <button type="button" class="btn btn-secondary">4</button>
  </div>
  <div class="btn-group mr-2" role="group" aria-label="Second group">
    <button type="button" class="btn btn-secondary">5</button>
    <button type="button" class="btn btn-secondary">6</button>
    <button type="button" class="btn btn-secondary">7</button>
  </div>
  <div class="btn-group" role="group" aria-label="Third group">
    <button type="button" class="btn btn-secondary">8</button>
  </div>
</div>
<?php
       
if (isset($_GET['pid'])) {
    //echo  $_GET['pid'];
    
 } 
    
    $updateuser = new DB_con();
    $sql = $updateuser->fetchdata();
    while($row = mysqli_fetch_array($sql)) {
        
?>


  <div class="card-group">
  <div class="card">
  <img class="card-img-top" <?php echo '<img src="data:image/jpg;base64,'. base64_encode($row['image']).'alt="Img" style="width: 400; hight: 200">';?>
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['eventName']; ?></h5>
      <p class="card-text">  <?php echo $row['artistName']; ?><br> <?php echo $row['place']; ?><br><?php echo $row['eventType']; ?><br> <?php echo $row['eventDate']; ?><br>
    <?php echo $row['TimeEvent']; ?><br></p>
    </div>
    <a href="#" class="btn btn-primary">see more</a>
    
  </div>
  
</div>

  
<?php }?>

    

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</h5>
</body>
</html>