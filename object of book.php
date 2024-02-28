<?php
$book = new book();
$book1 = new Book('1234567890', 'The Catcher in the Rye', 'J.D. Salinger');
echo $book1->getIsbn(); // Output: 1234567890
echo $book1->getTitle(); // Output: The Catcher in the Rye
echo $book1->getAuthor(); // Output: J.D. Salinger
echo $book1->isBorrowed(); // Output: false

$book1->borrow();
echo $book1->isBorrowed(); // Output: true

$book1->returnBook();
echo $book1->isBorrowed(); // Output: false
?>