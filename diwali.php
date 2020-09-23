<!doctype html>
<html lang="en">
  <head>

  <link href="jquerysctipttop.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="jquery.fireworks.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/css/bootstrap.min.css" integrity="sha384-VCmXjywReHh4PwowAiWNagnWcLhlEJLA5buUprzK8rxFgeH0kww/aWY76TfkUoSX" crossorigin="anonymous">

    <title>happy diwali!</title>
    <style>
#fomtext{
    position:absolute;
    top:100px;
    left:200px;
    color:white;
    animation:anim 5s infinite;
}

@keyframes anim{
    0%{ color:aqua;}
    25%{ color:red; transform: scale(1.5);}
    50%{ color:yellow; transform: scale(0.8);}
   75%{ color:green; transform: scale(1.5);}
    100%{ color:pink; transform: scale(1);}
}



        </style>
  </head>
   <!--<body background="images/bg.jpg" style="background-size:1366px 680px; COLOR:AQUA;">-->

  <body>
    <div id="imgs">
      <img width="1350"  height="700" src="images/bg.jpg">
      <div class="content-msg">
      <h1 id ="fomtext"> WE WISH YOU A VERY HAPPY AND SAFE DIWALI THIS YEAR
      From ... <?php echo $_GET['name'];?>    </h1>

       </div>
    </div>
</body> 
  
 
       
  
  

    <!--<script type="text/javascript" src="crackers.js">-->
    <script type="text/javascript">
$(document).ready(function(){
    setTimeout(function() {
        $('#imgs').fireworks();
    });
});
</script>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
  </body>
</html>