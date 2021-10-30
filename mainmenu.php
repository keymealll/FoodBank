<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<style>
  body{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    width: 1140px;
    overflow: hidden;
  }
  #cardp{
    text-align: left;
  }
  h2{
    text-align: center;
    font-weight: bolder;
  }
  p{
    text-align: center;
    font-weight:200;
  }
  .form-group{
    border-radius: 32px;
  }
  #send{
    background-color:rgba(0, 0, 0, 1);
  filter:drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
  border-radius:14px;
  color: white;
  font-weight: bolder;
  }
  #donate{
  background-color: #174168;
  filter:drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
  border-radius:14px;
  color: white;
  font-weight: bolder;
  width: 120px;
  }

  #aboutus{
  background-color: #37393A;
  filter:drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
  border-radius:14px;
  color: white;
  font-weight: bolder;
  width: 120px; 
  }

#searchbar{
    display: block;
    margin: 0 auto;
}
#button{
  cursor: pointer;
}
#button:hover{
  transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

#carddetail{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 10px 20px 5px 20px;
  cursor: pointer;
}

#carddetail:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

#whatsapp{
        display: table; 
        font-family: sans-serif; 
        text-decoration: none; 
        margin: 1em auto; 
        color: #fff; 
        font-size: 0.9em; 
        padding: 1em 2em 1em 3.5em; 
        border-radius: 2em; 
        font-weight: bold; 
        background: #25d366 
        url('https://tochat.be/click-to-chat-directory/css/whatsapp.svg') no-repeat 1.5em center; 
        background-size: 1.6em;
        display: block;
        position: absolute;
        bottom: 0;
        right: 0;
        }
  </style>


</head>
<body>

<?php
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "iukl";
   
   // Create connection
   $conn = mysqli_connect($servername, $username, $password, $dbname);
   // Check connection
   if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
   }
   
   $sql = "SELECT * FROM sos WHERE id=(SELECT max(id) FROM sos);";
   $result = mysqli_query($conn, $sql);
   $row= mysqli_fetch_assoc($result);
   
   if (mysqli_query($conn, $sql)) {  
  ?>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
$('.file-upload').file_upload();</script>


<div class="container-fluid">
<div class="row">
<div class="col-sm-4 mx-3 mr-4 my-5 ">
    
    <div class="row" id="searchbar">
        <div class="input-group rounded">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
              aria-describedby="search-addon" />
            <button class="input-group-text border-0" id="search-addon">
              <i class="fas fa-search">search</i>
            </button>
          </div>
          <br>
    </div>

  <div class="row">
    <p>Recent Help</p><br>
    <div class="d-flex justify-content-center mb-5">

    <div class="card" id="carddetail" style="width: 300px; height:auto;">
      <div class="card-body">
      <h5 class="card-title" name="name"><?php echo $row["username"]?></h5>
    <h6 class="card-text" name="location"><?php echo $row["soslocation"]?></h6>
    <p class="card-text" name="request" id="cardp"><?php echo $row["request"]?></p>
    <p class="card-text" name="phoneno" id="cardp"><?php echo $row["phoneno"]?></p>
      </div>
      </div>
<?php
   } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);?>

    </div>
  </div>


    <div class="row">
      <div class="row ml-5 mr-5">
        <p>Find</p> 
        <div class="d-flex justify-content-center">
            <a href="displaysos.php"><img src="sos.png" width="80px" height="100px" id="button" curs></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
            <a href="displayfoodbank.php"><img src="foodbank .png" width="80px" height="100px" id="button"></a>
        </div>
        </div>

        <div class="row">
          <div class="mt-5 mx-1 mr-4">
          <br>
          <p id="ask">Need Help?</p>
          <div class="d-flex justify-content-center">
           <a href="inputsos.php    "> <button type="button" name="send" id="send" class="btn btn-default">Ask For Help</button></a>
            </div>
          </div>  
        </div>
    </div>

    <div class="row">
    <div class="mt-5 mx-1">
    <div class="d-flex justify-content-center">
    <div class="column">
      <a href="http://paypal.me/keymeal"> <button type="button" name="send" id="donate" class="btn btn-default">Donate</button></a>&nbsp;&nbsp;&nbsp;&nbsp;   
    </div>
    <div class="column">
      <a href="paypal.me/keymeal"> <button type="button" name="send" id="aboutus" class="btn btn-default">About Us</button></a> 
    </div>
    </div>
    </div>
    </div>

</div>
<div class="col-sm-7">
  <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1v8KkzQtmA7HhFLOjN4dnX9RB3r9k3f_-" width="1112" height="820"></iframe></p>
</div>
</div>
</div>

<a href="https://wa.me/+6281290571467" id="whatsapp">Whatsapp Us!</a>

</body>

</html>
