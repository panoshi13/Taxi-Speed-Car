<?php 
    class validarDNI{
        public static function validar(){
            $dni = $_POST['dni'];
            $consulta = file_get_contents("https://dniruc.apisperu.com/api/v1/dni/".$dni."?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJlbWFpbCI6Imhhcm9sZDEzXzk4QGhvdG1haWwuY29tIn0.T1-9XWsoDJNQLAgfj4HyOQvS8LJ4sH4ot42G5gBknaY",false);
            echo $consulta;
        }
    
        
    }
    
    validarDNI::validar();
?>
    

