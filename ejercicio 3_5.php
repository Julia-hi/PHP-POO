<!--  
    *** Tarea Unidad 4 DWES ***
    *** 3. Ejercicio 5      ***
    Alumna: Tropin Tropina Yulia, 2ºDAW Distancia 2021/2022 

    Tarea: Crea una clase llamada Estudiante con dos propiedades/atributos 
    denominados nombre y notas (array/lista), con constructor y con métodos 
    que obtenga el nombre, modifique el nombre, obtenga las notas, modifique 
    las notas y, por último, que obtenga la media de esas notas y las muestre. 
    Crea 3 instancias/objetos de la clase Estudiante y ejecuta en ellos el método creado.      -->

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
    <head>
        <title>Tarea Unidad 4. Ejercicio 3_5.</title>   
    </head>
    <body>
        <?php
            class Estudiante{

                function __construct($nombre, array $notas){
                    $this->nombre = $nombre;
                    $this->notas = $notas;
                }

                //metodo setter para nombre
                function set_nombre($nombre){
                    $this->nombre = $nombre;
                }
                //metodo getter para nombre
                function get_nombre(){
                    return $this->nombre;
                }

                //metodo setter para notas
                function set_notas($notas){
                    $this->notas = $notas;
                }
                //metodo getter para notas
                function get_notas(){
                    return $this->notas;
                }

                //metodo para obtener nota media
                public function obtenerNotaMedia(){
                    $suma = 0;
                    foreach($this->notas as $miNota){
                        $suma = $suma+$miNota;
                    }
                    return $suma/(count($this->notas));
                }

            }
            $notasAlumno = array(9,9,9); //array de notas para alumno
            $alumno = new Estudiante ("Jose", $notasAlumno); //instancia del objeto alumno de clase Estudiante
            //imprimimos los datos del alumno
            echo "Estudiante ".$alumno->get_nombre()." tiene notas: ";
            foreach($alumno->get_notas() as $nota){echo $nota." ";}
            echo ", nota media es: ".$alumno->obtenerNotaMedia()."<br>";

            $notasAlumno = array(5,10,9,7); //array de notas para alumno
            $alumno = new Estudiante ("Maria", $notasAlumno); //instancia del objeto alumno de clase Estudiante
            //imprimimos los datos del alumno
            echo "Estudiante ".$alumno->get_nombre()." tiene notas: ";
            foreach($alumno->get_notas() as $nota){echo $nota." ";}
            echo ", nota media es: ".$alumno->obtenerNotaMedia()."<br>";

            $notasAlumno = array(8,10,9,9,6); //array de notas para alumno
            $alumno = new Estudiante ("Maria", $notasAlumno); //instancia del objeto alumno de clase Estudiante
            //imprimimos los datos del alumno
            echo "Estudiante ".$alumno->get_nombre()." tiene notas: ";
            foreach($alumno->get_notas() as $nota){echo $nota." ";}
            echo ", nota media es: ".$alumno->obtenerNotaMedia()."<br>";
        ?>
        
    </body>

</html>


