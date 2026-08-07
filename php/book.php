<?php

class Book
{
    // Public properties
    public $title;
    public $author;

    // Constructor
    public function __construct($title, $author)
    {
        $this->title = $title;
        $this->author = $author;
    }

    // Method to return book details
    public function getDetails()
    {
        return "Title: {$this->title}, Author: {$this->author}";
    }
}

// Create two Book objects
$book1 = new Book("The Alchemist", "Paulo Coelho");
$book2 = new Book("Atomic Habits", "James Clear");

// Print the details of both books
echo $book1->getDetails() . "<br>";
echo $book2->getDetails();

?>