<!--  
    *** Tarea Unidad 4 DWES ***
    *** 3. Ejercicio 4      ***
    Alumna: Tropin Tropina Yulia, 2ºDAW Distancia 2021/2022 

    Tarea: Crea una clase llamada Circulo con una propiedad/atributo 
    denominado radio, con constructor y con dos métodos que calculen 
    el area del círculo y la circunferencia del círculo usando dichas 
    propiedades/atributos. Crea 3 instancias/objetos de la clase Circulo 
    y ejecuta en ellos los dos métodos creados.      -->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
        <title>Tarea Unidad 4. Ejercicio 3_4.</title>   
    </head>
    <body>
        <?php

        const PI = 3.14; //constante PI
        //clase Circulo
        class Circulo{
            // metodo consctuctor
            function __construct($radio){
                $this->radio = $radio;
            }

            //metodo setter para radio
            function set_radio($radio){
                $this->radio = $radio;
            }
            //metodo getter para radio
            function get_radio(){
                return $this->radio;
            }
            //metodo para calcular area del circulo
            function calcArea(){
                $area = PI * pow($this->radio,2); // calcula area del circulo
                echo "Area del circulo (radio = ".$this->radio.") es: ".$area."<br>";
            }

            //metodo para calcular circustancia
            function calcCircustancia(){
                $circ = 2*PI*$this->radio;
                echo "Circustancia del circulo (radio = ".$this->radio.") es: ".$circ."<br>";
            }
            
        }

        $miCirculo = new Circulo(4); //instancia del objeto circulo
        $miCirculo->calcArea(); //realiza metodo para calcular area del circulo
        $miCirculo->calcCircustancia(); //realiza metodo para calcular circustancia del circulo

        $miCirculo = new Circulo(25); //instancia del objeto circulo
        $miCirculo->calcArea(); //realiza metodo para calcular area del circulo
        $miCirculo->calcCircustancia(); //realiza metodo para calcular circustancia del circulo

        $miCirculo = new Circulo(10); //instancia del objeto circulo
        $miCirculo->calcArea(); //realiza metodo para calcular area del circulo
        $miCirculo->calcCircustancia(); //realiza metodo para calcular circustancia del circulo
        ?>
        
    </body>

</html>


