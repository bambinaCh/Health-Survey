<!DOCTYPE html>
<html>

<head>
    <title>Header</title>
    <link rel='stylesheet' type='text/css' media='screen' href='css/main.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>

    <!--  <div class="header">

    <nav class=c>
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
  </ul>
</nav> -->

    <nav class="topnav" id="topnav">
        <a href="homepage.php"><img class="img-responsive" src="/img/logo_w.svg" data-bs-hover-animate="pulse" alt="logo" width="48" height="48"></a>
        <div class="navbar">
            <strong class="surveyItem">
                <?php
                $menuItems = array(
                    array("/index.php", "Survey"),

                );
                foreach ($menuItems as $item) {
                    echo "<a href ='$item[0]'>$item[1]</a> ";
                }
                ?>
            </strong>
        </div>
    </nav>



    <script>
        function myFunction() {
            var x = document.getElementById("topnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }
    </script>



    <!--<div class="searchBar">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path d="M909.6 854.5L649.9 594.8C690.2 542.7 712 479 712 412c0-80.2-31.3-155.4-87.9-212.1-56.6-56.7-132-87.9-212.1-87.9s-155.5 31.3-212.1 87.9C143.2 256.5 112 331.8 112 412c0 80.1 31.3 155.5 87.9 212.1C256.5 680.8 331.8 712 412 712c67 0 130.6-21.8 182.7-62l259.7 259.6a8.2 8.2 0 0 0 11.6 0l43.6-43.5a8.2 8.2 0 0 0 0-11.6zM570.4 570.4C528 612.7 471.8 636 412 636s-116-23.3-158.4-65.6C211.3 528 188 471.8 188 412s23.3-116.1 65.6-158.4C296 211.3 352.2 188 412 188s116.1 23.2 158.4 65.6S636 352.2 636 412s-23.3 116.1-65.6 158.4z"></path>
                    </svg>
            </div> -->

    <!--<a href="/homepage.php">Home</a>
                <a href="/index.php">Form</a>
                <a href="/library.php">Library</a> -->






</body>

</html>