<?php
    namespace App;

    use PDO;
    use PDOException;

    class Connection{

        // static não precisa criar um objeto da classe Connection para usar o
        // método getDb(), nesse caso podemos importar a classe com "use" e usar
        // o nome da classe seguido de dois ponto
        // ex: Connection::getDb()
        public static function getDb(){
            #informações sobre o banco de dados
            $host       =   "localhost";
            $db_name    =   "mvc_48";
            $user       =   "root";
            $pass       =   "";
            $port       =   3306;
            $charset    =   "utf8";
            $db_driver  =   "mysql";

            #informações do sistema
            $sis_name   =   "MVC M48";
            $sis_email  =   "felipereno2005@gmail.com";

            try {
                $conn = new PDO(
                    $db_driver.
                    ':host='.$host.
                    ';dbname='.$db_name.
                    ';charset='.$charset.
                    $user,
                    $pass
                );

                return $conn;
            } catch(PDOException $error){
                die("Erro de Conexão: ".$error->getMessage());
            }
        }
    }
?>