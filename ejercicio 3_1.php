<!--  
    *** Tarea Unidad 4 DWES ***
       *** 3. Ejercicio 1 ***
    Alumna: Tropin Tropina Yulia, 2ºDAW Distancia 2021/2022 
    Tarea: Crea una clase llamada Punto con dos propiedades/atributos 
        denominados x e y, con constructor y con cuatro métodos (getter y setter), 
        uno para obtener x, otro para obtener y, otro para modificar x y otro método 
        para modificar y. Crea 3 instancias/objetos de la clase Punto y ejecuta en 
        ellos los cuatro métodos creados.      -->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
        <title>Tarea Unidad 4. ejercicio 3_1.</title>
        <meta name="description" content="">
    </head>
    <body>
        <?php

        class Punto{
            public $x;
            public $y;
            function __construct($x, $y){ //constructos de la clase
                $this->x = $x;
                $this->y = $y;
            }
            //setter para propiedad x
            function set_x($x){
                $this->x = $x;
            }
            //getter para propiedad x
            function get_x(){
                return $this->x;
            }
             //setter para propiedad y
             function set_y($y){
                $this->y = $y;
            }
            //getter para propiedad y
            function get_y(){
                return $this->y;
            }
        } //fin de clase Punto

        //creamos tres objetos de clase Punto

        $newPunto1 = new Punto(2,4);
        $newPunto2 = new Punto(55,8);

        echo "x1 = ".$newPunto1->get_x().", y1 = ".$newPunto1->get_y(). "<br>";
            //modificamos valores de las propiedades x, y
        $newPunto1->set_x(3);
        $newPunto1->set_y(5);
        $newPunto3 = new Punto(46,153);
        
        //accedemos a los valores con getters
        echo "Modificado x1 = ".$newPunto1->get_x().", y1 = ".$newPunto1->get_y(). "<br><br>";

        
        echo "x2 = ".$newPunto2->get_x().", y2 = ".$newPunto2->get_y(). "<br>";
            //modificamos valores de las propiedades x, y
        $newPunto2->set_x(30);
        $newPunto2->set_y(50);
        //accedemos a los valores con getters
        echo "Modificado x2 = ".$newPunto2->get_x()." , y2 = ".$newPunto2->get_y(). "<br><br>";

        
        echo "x3 = ".$newPunto3->get_x().", y2 = ".$newPunto3->get_y(). "<br>";
            //modificamos valores de las propiedades x, y
        $newPunto3->set_x(20);
        $newPunto3->set_y(25);
        //accedemos a los valores con getters
        echo "Modificado x2 = ".$newPunto3->get_x()." , y2 = ".$newPunto3->get_y(). "<br><br>";

        ?>
        
    </body>

</html>


