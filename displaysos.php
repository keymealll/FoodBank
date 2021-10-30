<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        #logo{
            display: block;
            margin: 0 auto;
        }

        #carddetail{
    border-radius: 4px;
    background: #fff;
    box-shadow: 0 6px 10px rgba(0,0,0,.08), 0 0 6px rgba(0,0,0,.05);
      transition: .3s transform cubic-bezier(.155,1.105,.295,1.12),.3s box-shadow,.3s -webkit-transform cubic-bezier(.155,1.105,.295,1.12);
  padding: 14px 80px 18px 36px;
  cursor: pointer;
}

#carddetail:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

        body{
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    width: 1200px;
    overflow: hidden;
  } 
  #send{
    background-color:rgba(0, 0, 0, 1);
  filter:drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
  border-radius:14px;
  color: white;
  align-items: center;
  font-weight: bolder;
  }

  #ask{
      font-weight: 200px;
      text-align: center;
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
   
   $sql = "SELECT * FROM sos";
   $result = mysqli_query($conn, $sql);
   
   if (mysqli_query($conn, $sql)) {  
  ?>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <div class="container">
        <div class="row">
        <div class="col-sm-4 ">
            <div class="container">
                <br>
                <img src="sos.png" id="logo" width="80px" height="100px"><br>
                <div class="card" style="width: auto; height: 550px; overflow-y: auto;">
                    <div class="card-body">
                    <?php while ($row= mysqli_fetch_assoc($result)){ ?>
                        <div class="card" id="carddetail" style="width: auto; height:auto;">
                            <div class="card-body">
                              <h5 class="card-title" name="name"><?php echo $row["username"]?></h5>
                              <h6 class="card-text" name="location"><?php echo $row["soslocation"]?></h6>
                              <p class="card-text" name="request"><?php echo $row["request"]?></p>
                              <p class="card-text" name="phoneno"><?php echo $row["phoneno"]?></p>
                            </div>
                          </div>
                          <br>
                    <?php } ?>        
                    </div>
                  </div>
                  <br>
                  <p id="ask">Need Help?</p>
                  <div class="d-flex justify-content-center">
                   <a href="inputsos.php    "> <button type="button" name="send" id="send" class="btn btn-default">Ask For Help</button></a>
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
<?php
   } else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  mysqli_close($conn);
?>
</html>