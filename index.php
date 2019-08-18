<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Basics</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

    <header>
      <div class="container section">
        <h1 class="text-center">Welcome To PHP Basics</h1>
      </div>
    </header>

    <div class="container">
      <div class="row">
        <div class="col-12">

        <div class="section mt-5 mb-5">
        <h2 class="text-center">Swicth Use</h2>
        <blockquote>
          Tenemos un Ejemplo Sencillo de el uso del siwtch en caso de que tengas que hacer multiples comparaciones
          de esta manera evitando la mala practica del uso excesivo de <strong>if</strong> and <strong>else</strong>.
        </blockquote>
      
        <code>
          $lenguaje = "PHP"; <br>

            switch($lenguaje) { <br>
            case 'PHP': <br>
              echo "Backend Lenguage"; <br>
              break; <br>
            case 'JavaScipt': <br>
              echo "Frontend & Backend"; <br>
              break; <br>
            case 'HTML':
              echo "Mark up Lenguage"; <br>
              break;<br>
            default: <br>
              echo 'No Selected Lenguage';<br>
              break;                <br>
            }
        </code>
        </div>
    
        <section class="section mt-5 mb-5">
        <h2 class="text-center">Indexed Array</h2>
          <blockquote>
            En esta Seccion podemos saber que es un <strong>Arreglo Indexado</strong> a este podemos acceder a un valor del mismo
            con el uso de su indice de la posicion donde se almacena en memoria. estos empiezan desde la posicion <strong>0</strong> 
          </blockquote>

          <code>
            <p><strong>asi es como se construlle un arreglo</strong> </p>
            $miarreglo = ['PHP', 'Python', 'Ruby']; <br><br>

            <p><strong>De Esta forma se realizaba la consulta de una arreglo en versions anteriores de PHP</strong></p>

            echo $miarreglo[0]; <br>
            echo $miarreglo[1]; <br>
            echo $miarreglo[2]; <br>

            $arreglo_nuevo = array('CSS', 'jQuery', 'PHP'); <br>
            echo $arreglo_nuevo[2]; <br>
          </code>
        </section>

        <section class="section mt-t5 mb-5">
        <h2 class="text-center">Anadir un Elemento a un Arreglo</h2>
        <blockquote>Aqui tenemos un Ejemplo de como anadir un elemento a un arreglo.</blockquote>

        <code>
          <p><strong>Nuestro Arreglo Inicial</strong></p>
          $arreglo = ['Elemento 1', 'Elemento2']; <br><br>
          <strong>Agregamos un Nuevo Elemento</strong> <br> <br>
          <p><strong>Metodo 1</strong></p>
          $arreglo[] = 'Elemento 3'; <br>

          <p><strong>Metodo 2</strong></p>
          $arreglo = ['Elemento1', 'Elemento2']; <br><br>
          array_push($arreglo, 'Elemento 3');
          print_r ($arreglo);
        </code>
        </section>



        <section class="section mt-t5 mb-5"> 
          <h2 class="text-center">Elimnar Elementos de un Arreglo</h2>
          <blockquote>Ejemplo de Elimar Elemento</blockquote>
          <code>
            <p><strong>Eliminar Ultimo Elemento de un Arreglo.</strong></p>
            <p><strong>Metodo 1</strong></p>
            $arreglo = [1,2,3,5]; <br>
            $eliminar_elemento = array_pop($arreglo); <br> <br>

            <p><strong>Elimnar Elemento de un arreglo por posicion</strong></p>
            <p><strong>Metodo 2</strong></p>
            $arreglo = [1,2,3,5]; <br>
            $eliminar_elemento_por_posicion = unset($arreglo[2]); <br> <br>

            <p><strong>Remover el primero elemento y asignalo a una variable</strong></p>
            <p><strong>Metodo 3</strong></p>
            $arreglo = [1,2,3,5]; <br>
            $eliminar_elemento = array_shift($arreglo); <br> <br>

            <p><strong>Remover elementos y agregar otros</strong></p>
            <p><strong>Metodo 3</strong></p>
            $arreglo = [1,2,3,5]; <br>
            $eliminar_elemento = array_splice($arreglo, 1,3, array(2,4,5)); <br> <br>

          </code>

        </section>


        <section class="section mt-5 mb-5">
          <h2 class="text-center">Arreglos Asociativos</h2>
          <blockquote>
          los arreglos asociativos se conocen asi por que puedes acceder a uno de los 
          elementos por medio de su llave o valor
          </blockquote>
          <code>
          <p><strong>Ejemplo de un arreglo asociativo</strong></p>
          $arreglo = array( <br>
            'persona1' = 'Juan', <br>
            'persona2' = 'Raul', <br>
            'persona3' = 'Jose' <br>
          );
          <br> <br>
          <p><strong>Accesanos a estos de la siguiente manera.</strong></p>

          echo $arreglo['persona1'];

          <p><strong>Si quieres mostar las llaves de este seria asi.</strong></p>

          $resutado = array_values($arreglo); <br>
          $resutado = array_keys($arreglo); <br>

          </code>
        </section>


        <section class="section mt-5 mb-5">

        </section>

        <section class="section mt-5 mb-5"></section>
        
      
        </div> <!-- Column End-->
      </div> <!-- Row End -->
    </div> <!-- Container End -->

    <!-- -->
    <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
    <div class="grid-item"></div>
    <div class="grid-item"></div>
      ...
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/app.js"></script>
</body>
</html>