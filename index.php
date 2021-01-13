<?php

$dsn = "pgsql:host=n-pgsql;dbname=abc;port=5432;user=postgres;password=password";

try {
    $conn = new PDO($dsn);

    // $sqlNewTable = 'CREATE TABLE IF NOT EXISTS test (id serial PRIMARY KEY, name character varying(20) NOT NULL)';
    // $conn->exec($sqlList);

    // for ($i = 1; $i <= 10; $i++) {
    //    $sql = 'INSERT INTO test(name) VALUES(:name)';
    //    $stmt = $conn->prepare($sql);
    //    $stmt->bindValue(':name', 'Anh ' . $i);
    //    $stmt->execute();
    //    echo $conn->lastInsertId('test_id_seq') . '/';
    // }

    $sql = $conn->query('SELECT name FROM test WHERE id = 1');
    $result = $sql->fetch();
    echo $result['name'];
} catch (PDOException $e){
    echo $e->getMessage();
}