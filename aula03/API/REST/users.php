<?php

class User
{
	private $con;

	public function __construct()
	{
		$this->con = new PDO("pgsql:host=localhost;dbname=novaaula","will","123");
	}

	public function list()
	{
		$stmt = $this->con->query('SELECT * FROM users');
		$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
		return $users;
	}

	public function find(int $id)
	{
		$stmt = $this->con->query('SELECT * FROM users WHERE id={$id}');
		$users = $stmt->fetch(PDO::FETCH_ASSOC);
		return $users;
	}

	public function insert($data)
	{
		$sql = "INSERT INTO users (name,email,pass) VALUES (:name,:email,:pass)";
		$stmt = $this->con->prepare($sql);
		$stmt->bindValue(':name',$data['name']);
		$stmt->bindValue(':email',$data['email']);
		$stmt->bindValue(':pass',$data['pass']);
		return $stmt->execute();
	}
}

// NOTAS:
/**
{
"method" : "insert",
"params" : {
    "name" : "Novo Nome",
    "email" : "email@mail.com",
    "pass" : "senha"
  },
"id" : "1"
}
*/