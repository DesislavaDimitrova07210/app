<?php


namespace Repository;


use Database\PDODatabase;
use DTO\User;

class UserRep
{
    /**
     * @var PDODatabase
     */

    private $db;

    /**
     * UserRep constructor.
     * @param PDODatabase $db
     */

    public function __construct(PDODatabase $db)
    {
        $this->db = $db;
    }

    public function insert(User $user){

        $statement = $this->db->query('INSERT INTO users(email, first_name, last_name, password) VALUES (:email, :first_name, :last_name, :password)');
        $statement->execute(['email'=>$user->getEmail(),
                             'password'=>$user->getPassword(),
                             'first_name'=>$user->getFirstName(),
                             'last_name'=>$user->getLastName()]);
        return $this->db->lastInsertId();
    }

    public function checkUser($email){
        $statement = $this->db->query('SELECT id, email, password, active FROM users WHERE email = :email');
        $theUser = $statement -> execute(['email'=>$email]);
        return $theUser->getUser(User::class);
    }

    public function checkActive($email){
        $statement = $this->db->query('SELECT active FROM users WHERE email = :email');
        $theStatus = $statement -> execute(['email'=>$email]);
        return $theStatus ;
    }

    public function getUserId($id){
        $statement = $this->db->query('SELECT id, email, first_name, last_name FROM users WHERE id = :id');
        $theUser = $statement -> execute(['id'=>$id]);
        return $theUser->getUser(User::class);
    }

}