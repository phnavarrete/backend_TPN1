<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TRABAJO PRACTICO Nª1</title>
  </head>
  <body>

    <h1> EJERCICIO 1 </h1>
      <h2 style="color:ORANGE">
      Hola mundo
      </h2>
<hr>
    <h1> EJERCICIO 2 </h1>
      <h2 style="color:BROWN">
      <?php
      $algoparaimprimir="Hola mundo";
      echo "$algoparaimprimir";
      ?>
    </h2>
<hr>
    <h1> EJERCICIO 3 </h1>
      <h2 style="color:BLUE">
      VARIABLES:<br>
      <?php
      $VARINT1=5;
      $VARINT2=2;
      echo "$VARINT1<br>";
      echo "$VARINT2<br>";
      ?>
      OPERACIONES:<br>
      <?php
      $SUMA=$VARINT1+$VARINT2;
      $RESTA=$VARINT1-$VARINT2;
      $MULTIPLICACION=$VARINT1*$VARINT2;
      $DIVISION=$VARINT1/$VARINT2;
      $DIVISIONRESTO=$VARINT1%$VARINT2;
      echo "$SUMA<br>";
      echo "$RESTA<br>";
      echo "$MULTIPLICACION<br>";
      echo "$DIVISION<br>";
      echo "$DIVISIONRESTO<br>";
      ?>
    </h3>
<hr>
    <h1> EJERCICIO 4 </h1>
      <h2 style="color:GREEN">
        TEMPERATURA Celsius:<br>
      <?php
      $tempcel=20;

      echo "$tempcel<br>";
      ?>

      TEMPERATURA Fahrenheit:<br>

      <?php
      $tempfar=($tempcel*9/5)+32;
      echo "$tempfar<br>";
      ?>
      </h2>
<hr>
    <h1> EJERCICIO 5 </h1>
    <h2> INCISO A </h2>
    <h3 style="color:red">
      DATOS del rectangulo:<br>
    Base:
    <?php
    $B=18;
    echo "$B<br>";
    ?>
    Altura:
      <?php
      $H=12;
      echo "$H<br>";
      ?>

    AREA Y PERIMETRO:<br>

    <?php
    $AREA=$H*$B;
    echo "$AREA","cm^2<br>";
    $PER=2*($H+$B);
    echo "$PER","cm<br>";
    ?>
    </h3>
    <h2> INCISO B </h2>
    <h3 style="color:red">
      DATOS del circulo:<br>
      Diametro:
    <?php
    $D=20;
    echo "$D<br>";
    ?>

    AREA Y PERIMETRO:<br>

    <?php
    $AREACIR=PI()*($D/2)^2;
    echo "$AREACIR","cm^2<br>";
    $PERCIR=PI()*$D;
    echo "$PERCIR","cm<br>";
    ?>
    </h3>
<hr>
  </body>
</html>
