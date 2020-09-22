<?php 

    class User{
        private $id_user;
        private $nombre;
        private $apellidos;
        private $username;
        private $email;
        private $password;
        private $created_at;


        /* function User(){

        }

        function __User($id,$nombre,$apellidos,$username,$email,$password,$created_at)
        {
            $this->id=$id;
            $this->nombre = $nombre;
            $this->apellidos = $apellidos;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->created_at = $created_at;
        } */

        function getIdUser(){
           return $this->id_user;
        }

        function getNombre(){
            return $this->nombre;
        }

        function getApellidos(){
            return $this->apellidos;
        }

        function getUsername(){
            return $this->username;
        }

        function getEmail(){
            return $this->email;
        }

        function getPassword(){
            return $this->password;
        }

        function getCreated(){
            return $this->created_at;
        }

        //Metodos SETTERS

        function setIdUser($id_user){
            $this->id_user=$id_user;
        }
        function setNombre($nombre){
            $this->nombre=$nombre;
        }
        function setApellidos($apellidos){
            $this->apellidos=$apellidos;
        }
        function setUsername($username){
            $this->username=$username;
        }
        function setEmail($email){
            $this->email=$email;
        }
        function setPassword($password){
            $this->password=$password;
        }
        function setCreated($created_at){
            $this->created_at=$created_at;
        }
        
    }
