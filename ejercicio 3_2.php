<!--  
    *** Tarea Unidad 4 DWES ***
    *** 3. Ejercicio 2      ***
    Alumna: Tropin Tropina Yulia, 2ºDAW Distancia 2021/2022 

    Tarea:  Crea una clase llamada Linea con cuatro propiedades/atributos 
    denominados x1, x2, y1 e y2, con constructor y con un método que obtenga 
    el punto medio del segmento usando dichas propiedades/atributos. Crea 3 
    instancias/objetos de la clase Linea y ejecuta en ellos el método creado.      -->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
        <title>Tarea Unidad 4. Ejercicio 3_2.</title>   
    </head>
    <body>
        <?php

        class Linea{
            public $x1;
            public $y1;
            public $x2;
            public $y2;

            function  __construct($x1, $y1, $x2, $y2){ //constructos de la clase Linea
                $this->x1 = $x1;
                $this->y1 = $y1;
                $this->x2 = $x2;
                $this->y2 = $y2;
            }
            //setter para propiedad x1
            function set_x1($x1){
                $this->x1 = $x1;
            }
            //getter para propiedad x1
            function get_x1(){
                return $this->x1;
            }
             //setter para propiedad y1
             function set_y1($y1){
                $this->y = $y1;
            }
            //getter para propiedad y1
            function get_y1(){
                return $this->y1;
            }
            //setter para propiedad x2
            function set_x2($x2){
                $this->x1 = $x1;
            }
            //getter para propiedad x2
            function get_x2(){
                return $this->x2;
            }
             //setter para propiedad y2
             function set_y2($y2){
                $this->y2 = $y2;
            }
            //getter para propiedad y2
            function get_y2(){
                return $this->y2;
            }
        //metodo para obtener medio del segmento
            public static function obtenerMedio($linea){
                $medioX = ($linea->get_x1()+$linea->get_x2())/2;
                $medioY =($linea->get_y1()+$linea->get_y2())/2;
                echo "Segmento de punto1 (".$linea->get_x1().", ".$linea->get_y1().") y punto2(".$linea->get_x2()." ,".$linea->get_y2().")<br>";
                echo "Punto medio del segmento: (".$medioX.", ".$medioY.")<br><br>";
            }
        } //fin de clase Linea

        //creamos tres objetos de clase Linea
        $linea1 = new Linea(1,1,2,2);
        $linea2 = new Linea(10,-5,7,6);
        $linea3 = new Linea(5,16,225,178);
        Linea::obtenerMedio($linea1); //ejecutamos el metodo estativo obtenerMedio para primera linea
        Linea::obtenerMedio($linea2); //ejecutamos el metodo estatico obtenerMedio para segunda linea
        Linea::obtenerMedio($linea3); //ejecutamos el metodo estatico obtenerMedio para tercera linea   
        ?>
        
    </body>

</html>


