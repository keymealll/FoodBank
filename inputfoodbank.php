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
  align-items: center;
  font-weight: bolder;
  
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

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous">
$('.file-upload').file_upload();</script>


<div class="container">
<div class="row">
<div class="col-sm-4 mx-3 mr-4 my-5 ">
  
  <h2>New Foodbank</h2>
  <p>Welcome to FoodKita! please fill in the form below hence anyone can contact you as soon as possible</p>
  <form action="successfoodbank.php" name="sign up" method="post">
    <div class="form-group">
      <label for="foodname">Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="foodname">
    </div><br>
    <div class="form-group">
      <label for="foodphone">Phone Number:</label>
      <input type="text" class="form-control" id="phoneno" placeholder="Enter Phone Number" name="foodphone">
    </div><br>
	    <div class="form-group">
        <label for="foodlocation">Location:</label>
        <input type="text" class="form-control" id="location" placeholder="Enter Location" name="foodlocation">
    </div><br>
	<div class="form-group">
      <label for="foodwebsite">Website:</label>
      <input type="text" class="form-control" id="website" placeholder="Enter Website" name="foodwebsite">
    </div><br>
<div class="mb-4">
  <label for="formFileMultiple" class="form-label">Location Picture</label>
  <input class="form-control" type="file" id="formFileMultiple" name="foodpicture" multiple>
</div><br>
    <div class="d-flex justify-content-center">
    <button type="submit" name="send" id="send" class="btn btn-default">Send</button>
    </div>
  </form>
</div>
<div class="col-sm-7">
  <p><iframe src="https://www.google.com/maps/d/u/0/embed?mid=1v8KkzQtmA7HhFLOjN4dnX9RB3r9k3f_-" width="1112" height="820"></iframe></p>
</div>
</div>
</div>
<a href="https://wa.me/+6281290571467" id="whatsapp">Whatsapp Us!</a>
</body>

</html>
