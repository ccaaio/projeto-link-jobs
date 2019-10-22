<?php

namespace App\Models;

use App\Lib\DB;
use App\Lib\Util;

class Usuario
{
    public static function logar($data)
    {
        $db = new DB();

        $email    = $data['email'];
        $senha      = Util::hash($data['senha']);

        try {
            $query = $db->query(
                "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'"
            );
            return $query->fetch();
        }catch (Exception $e){
            echo $e->getMessage();
        }

    }

    public static function salvar($data)
    {
        try {

            $db = new DB();

            $nome = $data['titulo'];
            $senha      = Util::hash($data['senha']);
            $email    = $data['email'];
            $data_nascimento = $data['data_nascimento'];
            $inicio_trabalho = $data['inicio_trabalho'];
            $cidade = $data['cidade'];
            $salario = $data['salario'];
            $estado = $data['estado'];
            $profissao = $data['profissao'];
            $tipo = $data['tipo'];
            $numero_cartao = $data['numero_cartao'];
            $nome_cartao = $data['nome_cartao'];
            $data_validade_cartao = $data['data_validade_cartao'];
            $cvc_cartao = $data['cvc_cartao'];
            $nivel_instrucao = $data['nivel_instrucao'];

            $db->insert('usuario',
                        "titulo,senha,email,data_nascimento,inicio_trabalho,cidade,salario,estado,profissao,tipo,numero_cartao,nome_cartao,data_validade_cartao,cvc_cartao,nivel_instrucao",
                        "'".$nome."','".$senha."', '".$email."', '".$data_nascimento."', '".$inicio_trabalho."', '".$cidade."', '".$salario."', '".$estado."', '".$profissao."', '".$tipo."', '".$numero_cartao."', '".$nome_cartao."', '".$data_validade_cartao."', '".$cvc_cartao."', '".$nivel_instrucao."'"
            );

            $query = $db->query(
                "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'"
            );

            return $query->fetch();

        }catch (\Exception $e){
            echo $e->getMessage();

        }

    }

    public static function listar($id=null)
    {
        $db = new DB();

        try {

            if($id) {
                // Faz a consulta
                $query = $db->query(
                    "SELECT * FROM usuario WHERE id = $id"
                );

                return $query->fetch();
            }else{
                // Faz a consulta
                $query = $db->query(
                    'SELECT * FROM usuario ORDER BY usuario'
                );

                return $query->fetchAll();

            }
        }catch (Exception $e){
            echo $e->getMessage();
        }

    }

    public static function atualizar($data)
    {
        try {
            $db = new DB();

            $id = $data['id'];

            $data['senha'] = base64_encode($data['senha']);

            $db->update('usuario',
                "usuario = '".$data['usuario']."',senha = '".$data['senha']."',
                 perfil = '".$data['perfil']."' 
                 WHERE id = $id");

        }catch (Exception $e){
            echo $e->getMessage();

        }

    }

    public static function excluir($id)
    {
        try {
            $db = new DB();

            $db->delete('usuario',"id = $id");

        }catch (Exception $e){
            exit($e->getMessage());

        }

    }
}