<?php
$library = new Library();

$book1 = new Book('1234567890', 'The Catcher in the Rye', 'J.D. Salinger');
$book2 = new Book('0987654321', 'To Kill a Mockingbird', 'Harper Lee');

$library->addBook($book1);
$library->addBook($book2);

echo $library->getNumberOfBooks(); // Output: 2

$library->borrowBook(0);
echo $library->getBook(0)->isBorrowed(); // Output: true

$library->returnBook(0);
echo $library->getBook(0)->isBorrowed(); // Output: false

$availableBooks = $library->getAvailableBooks();
foreach ($availableBooks as $book) {
    echo $book->getTitle() . " is available.\n";
}
?>