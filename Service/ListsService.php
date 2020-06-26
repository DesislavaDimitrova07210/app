<?php


namespace Service;

use DTO\Book;
use DTO\Favorite;
use Repository\BookRep;

class ListsService
{
    private $book_repository;

    /**
     * ListsService constructor.
     * @param $book_repository
     */

    public function __construct(BookRep $book_repository)
    {
        $this->book_repository = $book_repository;
    }

    public function getList(){
        return $this->book_repository->getAll();
    }


    public function delete($id){
        $this->book_repository->delete($id);
    }

    public function insert(Book $book)
    {

        /** @var Book $book */

        return $this->book_repository->insert($book);
    }
    public function favorite(Favorite $fav)
    {

        /** @var Favorite $fav */

        return $this->book_repository->favorite($fav);
    }

}