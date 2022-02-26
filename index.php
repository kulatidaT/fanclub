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
        html,body{
                height:100%;
                /* margin:0px;
                padding:0px; */
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
    <h1 class="mt-5">Activity</h1>
    <a href="insert.php" class="btn btn-success">Go to Insert</a>
    <hr>
    <nav class="navbar navbar-light bg-light">
  <form class="form-inline">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
  </form>
</nav>
    <table id="mytable" class="table table-bordered table-striped">
        <thead>
            <th>#</th>
            <th>EventName</th>
            <th>ArtistNAme</th>
            <th>place</th>
            <th>image</th>
            <th>EventType</th>
            <th>promotestatus</th>
            <!--<th>Posting Date</th>-->
            <th>Edit</th>
            <th>Delete</th>
            <th>Promote</th>
        </thead>

        <tbody>
            <?php 

                include_once('functions.php');
                $fetchdata = new DB_con();
                $sql = $fetchdata->fetchdata();
                while($row = mysqli_fetch_array($sql)) {

            ?>

                <tr>
                    <td><?php echo $row['Event_ID']; ?></td>
                    <td><?php echo $row['eventName']; ?></td>
                    <td><?php echo $row['artistName']; ?></td>
                    <td><?php echo $row['place']; ?></td>
                    <td><?php echo '<img src="data:image/png;base64,'. base64_encode($row['image']).'"alt="Img" style="width: 100px; hight:100px">'; ?></td>
                    <td><?php echo $row['eventType']; ?></td>
                    <td><?php echo $row['promotestatus']; ?></td>
                   
                    <td><a href="update.php?id=<?php echo $row['Event_ID']; ?>" class="btn btn-primary">Edit</a></td>
                    <td><a href="delete.php?del=<?php echo $row['Event_ID']; ?>" class="btn btn-danger">Delete</a></td>
                    <td><a href="promote.php?pid=<?php echo $row['Event_ID'];?> and <?php echo $row['promotestatus']; ?>" class="btn btn-info">Promote</a></td>
                    
                </tr>
                   
            <?php 

                }
            ?>
        </tbody>
    </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>