<?php
if(empty($_POST['submit']) || (empty($_POST['product']))){
 
        echo"
        <script>
        alert('no data's is available');
        window.location.href='index.php'
        </script>
        ";
        die('Non of the products are selected, so kindly select any products'). mysqli_error();
}
        ?>
        <!doctype html>
        <html lang="en">
        
        <head>
          <title>ARUVI SUPER MARKET</title>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
          <!-- Bootstrap CSS v5.2.1 -->
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        
            <link rel="stylesheet" href="./css/checkb.css">
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="background-color: #e3f2fd;">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">ARUVI SUPER MARKET</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Help</a>
              </li>
              
            </ul>
       
          </div>
        </div>
      </nav>
      <!-- nav end -->
<div class="sivam">
    <form class="" action="mail.php" method="post">
    <label class="sabari">Selected Products:-</label></br><br>
    <?php
  if(isset($_POST['submit']))
{
  // echo "<script>
  // alert('no data's is available');
  // window.location.href='index.php'
  // </script>
  // ";
   $product=$_POST['product'];

   //$prod=implode(',', $product);
   //echo $prod;
   foreach($product as $items){
   
 ?>  
    <input class="" name="product[]" value="<?php echo $items ;?>" placeholder="Recipients" ><br>
<?php
}
}
?>
<hr>
<label>Enter Your email address: </label>
<input type="email" name="email"  required><br>
<label>Enter Your Mobile Number: </label>
        <input  type="text" maxlength="10" minlength="10" name="phno"  required><br>
        <br>
       <button type="submit" class="submit" name="submit" >ORDER THE PRODUCTS</button>          
    </form> 
</div>
          <!-- Bootstrap JavaScript Libraries -->
          <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
          </script>
        
          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
          </script>
        </body>
        
        </html>