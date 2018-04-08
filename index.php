<?php 
  session_start();
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Shop</title>
      <link rel="stylesheet" href="style.css">
</head>
<body>

  <header class="top-nav">
  <div class="row">
    <p>
        <?php include ('reg/whoami.php'); ?>
    </p>
    
    <nav class="col">
      <ul>
        <form action="reg/find_data.php" name="reg/find_data.php" method="POST">
            Bookname: <input type="text" name="bookname" value="" />
            <input type="submit" name="submit" value="OK" />
        </form>
        <?php if ($_SESSION && $_SESSION['loggued_on_user']) { ?>
            <li><a href="reg/change_pw_form.html">Change Passsword</a></li>
            <li><a href="reg/logout.php">Logout</a></li>
            <?php if ($_SESSION['root'] == 'adm') { ?>
                <li><a href="add_data_form.php">Add Product</a></li>
                <li><a href="./reg/account_delete.php">Account Manegemant</a></li>
            <?php } ?>
        <?php } else { ?>
            <li><a href="reg/registration_form.php">Sign-Up</a></li>
            <li><a href="reg/login_form.php">Login</a></li>
        <?php } ?>
      </ul>
    </nav>
  </div>
</header>
<section class="hero">
  <article>
    <h1>Some Texr</h1>
  </article>
</section>
<main>
  <section class="blog row border-top border-bottom">
    <article class="content">
      <h2>Genres</h2>
        <div class="science-fiction genre"><a href="reg/display_product.php?genre=science_fiction"><h3>Science Fiction</h3></a></div>
        <div class="genre science"><a  href="reg/display_product.php?genre=science"><h3>Science</h3></a></div>
        <div class="genre fiction"><a  href="reg/display_product.php?genre=fiction"><h3>Fiction</h3></a></div>
        <div class="genre horror"><a  href="reg/display_product.php?genre=horror"><h3>Mysticism and Horror</h3></a></div>
        <div class="genre fantasy"><a  href="reg/display_product.php?genre=fantasy"><h3>Fantasy</h3></a></div>
    </article>
<!--
    <div class="sidebar col-4 border-left border-right">
      <article>
        <h2>Sidebar Title</h2>
        <p>          Ukraine (Ukrainian: Україна, translit. Ukraina; Ukrainian pronunciation: [ukrɑˈjinɑ]), sometimes called the Ukraine,[9] is a sovereign state in Eastern Europe,[10] bordered by Russia to the east and northeast; Belarus to the northwest; Poland, Hungary, and Slovakia to the west; Romania and Moldova to the southwest; and the Black Sea and Sea of Azov to the south and southeast, respectively. Ukraine is currently in a territorial dispute with Russia over the Crimean Peninsula, which Russia annexed in 2014[11] but which Ukraine and most of the international community recognise as Ukrainian. Including Crimea, Ukraine has an area of 603,628 km2 (233,062 sq mi),[12] making it the largest country entirely within Europe and the 46th largest country in the world. Excluding Crimea, Ukraine has a population of about 42.5 million, making it the 32nd most populous country in the world.[13]</p>
      </article>

      <article>
        <h2>Sidebar Title</h2>
        <p>          Ukraine (Ukrainian: Україна, translit. Ukraina; Ukrainian pronunciation: [ukrɑˈjinɑ]), sometimes called the Ukraine,[9] is a sovereign state in Eastern Europe,[10] bordered by Russia to the east and northeast; Belarus to the northwest; Poland, Hungary, and Slovakia to the west; Romania and Moldova to the southwest; and the Black Sea and Sea of Azov to the south and southeast, respectively. Ukraine is currently in a territorial dispute with Russia over the Crimean Peninsula, which Russia annexed in 2014[11] but which Ukraine and most of the international community recognise as Ukrainian. Including Crimea, Ukraine has an area of 603,628 km2 (233,062 sq mi),[12] making it the largest country entirely within Europe and the 46th largest country in the world. Excluding Crimea, Ukraine has a population of about 42.5 million, making it the 32nd most populous country in the world.[13]</p>
      </article>

      <article>
        <h2>Sidebar Title</h2>
        <p>          Ukraine (Ukrainian: Україна, translit. Ukraina; Ukrainian pronunciation: [ukrɑˈjinɑ]), sometimes called the Ukraine,[9] is a sovereign state in Eastern Europe,[10] bordered by Russia to the east and northeast; Belarus to the northwest; Poland, Hungary, and Slovakia to the west; Romania and Moldova to the southwest; and the Black Sea and Sea of Azov to the south and southeast, respectively. Ukraine is currently in a territorial dispute with Russia over the Crimean Peninsula, which Russia annexed in 2014[11] but which Ukraine and most of the international community recognise as Ukrainian. Including Crimea, Ukraine has an area of 603,628 km2 (233,062 sq mi),[12] making it the largest country entirely within Europe and the 46th largest country in the world. Excluding Crimea, Ukraine has a population of about 42.5 million, making it the 32nd most populous country in the world.[13]</p>
      </article>
    </div>
-->
</main>
  
  

</body>

</html>
