<!--  
    *** Tarea Unidad 4 DWES ***
    *** 3. Ejercicio 3      ***
    Alumna: Tropin Tropina Yulia, 2ºDAW Distancia 2021/2022 

    Tarea:  Crea una clase llamada Rectangulo con dos propiedades/atributos 
    denominados longitud y ancho, con constructor y con un método que calcule 
    el area del rectángulo usando dichas propiedades/atributos. Crea 3 
    instancias/objetos de la clase Rectangulo y ejecuta en ellos el método creado.      -->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
        <title>Tarea Unidad 4. Ejercicio 3_3.</title>   
    </head>
    <body>
        <?php
        class Rectangulo{

            //constructor de la clase Rectangulo
            function __construct($ancho, $longuitud){
            $this->ancho = $ancho;
            $this->longuitud = $longuitud;
            }
            //metodo setter para anchura
            function set_ancho($ancho){
                $this->ancho = $ancho;
            }
            // metodo getter para anchura
            function get_ancho(){
                return $this->ancho;
            }
            //metodo setter para longuitud
            function set_longuitud($longuitud){
                $this->longuitud = $longuitud;
            }
            //metodo getter para longuitud
            function get_longuitud(){
                return $this->longuitud;
            }

            //metodo para calcular area del rectangulo
            function calcArea(){
                $area = $this->ancho*$this->longuitud;
                echo "Area del rectangulo de ancho ".$this->ancho." y longuitud ".$this->longuitud." es: ".$area."<br>";
            }
        } //fin de clase

        $rect = new Rectangulo (30,40); //crea objeto rect con ancho 30 y longuitud 40
        $rect->calcArea(); //realiza metodo calculo de area para rectangulo creado
        $rect = new Rectangulo (25,100); //nueva instancia del objeto rect
        $rect->calcArea();
        $rect = new Rectangulo (46,60); //nueva instancia del objeto rect
        $rect->calcArea();
          
        ?>
        
    </body>

</html>


