<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>WORKERS PROJECT</title>
    <style type="text/css">
        *{
    box-sizing: border-box;
    margin: 0;
    padding: 0;
    
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
    padding-left: 15px;
  }
}

.container1 img{
    width: 33.3%;
    height: 150px;
    padding: 10px;
    padding-left: 20px;
    object-fit: contain;
    border-style: none;
    background-color: #A6B98E;
}
    </style>
</head>
<body>


<?php include "header.php" ?>

    <div class="head1">
        
     <h1>~Welcome <strong><?php echo $_SESSION['username'] ?></strong>To The Vocational Workers System~</h1>
  </div>  
<div class="container1">
    <img src="handyjob.jpg"><img src="handyjob.jpg"><img src="handyjob.jpg"><br>
</div>

</body>
<footer>
<?php include "footer.php" ?>
</footer>
</html>

 

 