<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Bootstrap example</title> -->
    <title>
        <?php echo $title; 
        ?>        
    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class = "container"> <!--Container-->
        <div class = "row">
            <div class = "col-sm-4 container-navigation">
                <h2>Yashodha Amarasinghe</h2>                
            </div>
            <div class= "col-sm-8 container-navigation">
                <ul class="nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="ex1.php">Exercise 01</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ex2.php">Exercise 02</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ex3.php">Exercise 03</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="ex4.php">Exercise 04</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Exercise 05</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Exercise 06</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Exercise 07</a>
                    </li>
                  </ul>
            </div>
        </div>