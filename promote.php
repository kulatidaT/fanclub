
<?php 

include_once('functions.php');

$updatedata = new DB_con();

if (isset($_POST['promote'])) {

 
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
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
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<title>Promote Page</title>


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
    <h1 class="mt-5">Promote Page</h1>
    <hr>
   
    <?php 

    if (isset($_GET['pid'])) {
       //echo  $_GET['pid'];
       
    } 
        $Event_ID = $_GET['pid'];
        $promotestatus = $_GET['pid'];
        //echo   $Event_ID;
        $updateuser = new DB_con();
        $sql = $updateuser->fetchonerecord($Event_ID);
        $updateuser->promote($Event_ID);
        while($row = mysqli_fetch_array($sql)) {
    ?>
<h5 align="center">  
<?php echo '<img src="data:image/png;base64,'. base64_encode($row['image']).'"alt="Img" style="width: 500px; hight:350px">'; ?>
    <form action="" method="post">
        <div class="mb-3">
        <label for="eventName" class="form-label">eventName:</label>
           <?php echo $row['eventName']; ?>
        </div>
        <div class="mb-3">
            <label for="artistName" class="form-label">artistName:</label>
               <?php echo $row['artistName']; ?>
        </div>
        <div class="mb-3">
            <label for="place">place:</label>         
               <?php echo $row['place']; ?>
        </div>
        <div class="mb-3">
            <label for="eventType">eventType:</label>        
                <?php echo $row['eventType']; ?>
        </div>
        <div class="mb-3">
            <label for="eventDate">eventDate:</label>        
                <?php echo $row['eventDate']; ?>
        </div>
        <div class="mb-3">
            <label for="TimeEvent">TimeEvent:</label>        
                <?php echo $row['TimeEvent']; ?>
        </div> 
        <div class="modal" tabindex="-1" role="dialog">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Promote</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>want to Promote this</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
      </div>
        <button type="button" name="submit" class="badge badge-pill badge-info" ><a href="/fanclub/home.php?pid">promote</button>
        
        <button type="button" name="cancle" class="badge badge-pill badge-danger"><a href="/fanclub/index.php">cancle</button>
        
        <?php } ?>
    </form>
   
</div>
</div>
</div>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</h5>
</body>
</html>