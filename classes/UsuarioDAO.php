<?php

require_once('Connection.php');
class UsuarioDAO {
    private $_connection;

    public function UsuarioDAO(){
        $this->_connection = Connection::getInstance();
    }

    public function insertUsuario($nome, $email, $cpf, $rg, $bairro, $endereco, $numero, $telefone, $celular){

        try{

            $insert = "INSERT INTO usuarios (nome, email, cpf, rg, bairro, endereco, numero, telefone, celular) VALUES (:nome, :email, :cpf, :rg, :bairro, :endereco, :numero, :telefone, :celular)";

            $stmt = $this->_connection->prepare($insert);

            $stmt->bindValue(":nome", $nome);
            $stmt->bindValue(":email", $email);
            $stmt->bindValue(":cpf", $cpf);
            $stmt->bindValue(":rg", $rg);
            $stmt->bindValue(":bairro", $bairro);
            $stmt->bindValue(":endereco", $endereco);
            $stmt->bindValue(":numero", $numero);
            $stmt->bindValue(":telefone", $telefone);
            $stmt->bindValue(":celular", $celular);

            return $stmt->execute();

        }catch(Exception $e){
            echo 'ERROR: ' . $e->getMessage();
        }



    }
} 