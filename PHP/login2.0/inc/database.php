<?php

class Database
{
    public function query($sql, $params = [])
    {
        try {
            $pdo = new PDO(
                'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS
            );
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $pdo->prepare($sql);
            $stmt->execute($params);

            $result = $stmt->fetchAll(PDO::FETCH_CLASS);
            echo "está funcionando";

            return [
                'status' => 'success',
                'data' => $result
            ];
        } catch (PDOException $err) {
            return [
                'status' => 'error',
                'data' => $err->getMessage()
            ];
            echo 'não está funcionando';
        }
    }
}
