<?php

  if(session_status() == PHP_SESSION_NONE) {
      session_start();
   }

    session_destroy();
?>

<!<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Glavna strana</title>
    <link rel="stylesheet" href="scss/style.css"
</head>
<body>
     <header>
         <nav>
         <ul>
             <li><a href="index.php">Glavna </a> </li>
             <li><a href="registracija.php">Registruj se</a> </li>

         </nav>
         </ul>
     </header>
     <div id="main_header">

       <?php if( isset($_SESSION['ulogovan']) ) : ?>

           <li><a href="logout.php">Logout</a></li>

       <?php else: ?>

          <li><a href="login.php">Uloguj se</a></li>

     <?php endif; ?>

     </div>
<!-- main-->
  <main>
      <section>
          <h1>Online Shop </h1>
          <h2>Prodaja satova</h2>
          <p>Renomirani brendovi</p>
      </section>
      <section>

      </section>

  </main>
</body>
</html>
