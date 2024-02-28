<?php
class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function borrowBook(string $isbn) {
        foreach ($this->books as $book) {
            if ($book->getIsbn() == $isbn && !$book->isBorrowed()) {
                $book->borrow();
                return $book;
            }
        }
        return null;
    }

    public function returnBook(string $isbn) {
        foreach ($this->books as $book) {
            if ($book->getIsbn() == $isbn) {
                $book->returnBook();
                return;
            }
        }
    }

    public function getAvailableBooks() {
        $availableBooks = [];
        foreach ($this->books as $book) {
            if (!$book->isBorrowed()) {
                $availableBooks[] = $book;
            }
        }
        return $availableBooks;
    }
}
?>