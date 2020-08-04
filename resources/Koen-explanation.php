<?php
/*$statement = $pdo->prepare('INSERT into student (name, age) VALUES (:name, :age)'); // placeholder values - will help the database sanitize your queries - database prepares itself for user input
$statement->bindValue('name', 'Vinnie Schelfhaut');
$statement->bindValue('age', 25);

$statement->execute();

// update query
$statement = $pdo->prepare('update student set name = :name where id = :id');
$statement->bindValue('name', 'Vinnie ');
$statement->bindValue('id', 8);
$statement->execute();

// delete query
$statement = $pdo->prepare('delete from student where id = :id');
$statement->bindValue('id', 8);
$statement->execute();

$statement = $pdo->prepare('select * from student');
$statement->execute();
$students = $statement->fetchAll();

//var_dump($students);

$statement = $pdo->prepare('select from student where name = :name');
$statement->bindValue('name', 'said');
$statement->execute();
$said = $statement->fetch();

var_dump($said);


echo 'this works'; */