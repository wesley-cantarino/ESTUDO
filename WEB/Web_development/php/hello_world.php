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

    <hr>

    <?php
      $str = "2 patinhos";
      $num = "3";

      $res = 2 + $num;
      echo $res;
    ?>

    <hr>

    <?php
    function factorial($number){
      $fac = 1;
      $cont = $number - 1;

      if($number < 0){
        return "fatorial não pode ser negativo";
      }
      elseif($number == 0){
        return "1";
      }
      else{
        while($cont > 0){
          $fac = $fac * $number * $cont;

          $number = $number - 2;
          $cont = $cont - 2;
        }

        return $fac;
      }
    };

    for($i = 0; $i <= 10; $i++)
      echo "factorial ". $i . " is: " . factorial($i) . "<br>";
    ?>

    <hr>

    <h3>Array</h3>
    <?php
      $cars = array("Volvo", "BMW", "Toyota");
      echo $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    ?>

    <p>
      $cars = array("Volvo", "BMW", "Toyota");<br>
      echo $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
    </p>

    <br>

    <h3>Class</h3>

    <?php
      class ClassName
      {
        var $nome_var;
        function function_name($argument)
        {
          //array
          $this->nome_var[0] = 2;
          return "2";
        }
      }

      $oii = new ClassName;
      $re = $oii->function_name("3");

      echo $re;
    ?>
  </body>
</html>
