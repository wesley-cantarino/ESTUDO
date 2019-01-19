<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv='refresh' content='1'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="main.css">
  </head>

  <body>
    <?php
      echo "<h1> Hello, world</h1>";

      $data_de_hoje = date("d/m/Y h:i:s", time());
    ?>

    <p> Hoje é dia <?php echo $data_de_hoje; ?></p>

    <p>O php fica dentro do html em harmônia :D <br> páginas .html são tratadas como html puro. Já as páginas .php são tratadas como php e tem que rodar no servido</p>

    <hr>

    <?php define ("myname", "wesley");
          define ("peso", 78);

          echo "say my name, php <br>" .myname;
          echo "<br>gooooood. Now, diga meu peso: " .peso;
    ?>

     
  </body>
</html>
