<?php


namespace Repository;


use Database\PDODatabase;
use DTO\Book;
use DTO\Favorite;

class BookRep
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

    public function insert(Book $book) {
        $statement = $this->db->query('INSERT INTO books(name, isbn, description, image) VALUES (:name, :isbn, :description, :image)');
        $statement->execute(['name'=>$book->getName(),
            'isbn'=>$book->getIsbn(),
            'description'=>$book->getDescription(),
            'image'=>$book->getImage()]);
        return $this->db->lastInsertId();
    }

    public function favorite(Favorite $favorite) {
        $statement = $this->db->query('INSERT INTO books_users(book, user) VALUES (:book, :user)');
        $statement->execute($favorite->getAtributes());
        return 1;
    }

    public  function update(Book $book){
        $statement = $this->db->query('UPDATE books (name = :name, isbn = :isbn, description = :description, image =:image WHERE id = :id)');

        $statement->execute($book->getAtributes());
    }

    public function delete($id){
        $statement = $this->db->query('DELETE FROM books WHERE id = :id');
        $statement->execute(['id'=>$id]);
    }

    public function getAll(){
        $statement = $this->db->query('SELECT id, name, isbn, description, image FROM books');
        $result = $statement->execute();

        foreach ($result->fetch(Book::class) as $book){
            yield $book;
        }
        //var_dump($book);
    }





}






























