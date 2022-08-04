<?php

$books = [
    [
        "title" => "The Lord of the Rings The Fellowship of the Ring",
        "author" => "J. R. R. Tolkien",
        "year" => 2000,
        "genre" => "Fantasy"
    ],
    [
        "title" => "The Lord of the Rings The Ring Sets Out",
        "author" => "J. R. R. Tolkien",
        "year" => 2004,
        "genre" => "Fantasy"
    ],
    [
        "title" => "The Lord of the RingsThe Ring Goes South",
        "author" => "J. R. R. Tolkien",
        "year" => 2008,
        "genre" => "Fantasy"
    ],
    [
        "title" => "The Lord of the Rings The Treason Of Isengard",
        "author" => "J. R. R. Tolkien",
        "year" => 2020,
        "genre" => "Fantasy"
    ],
];

var_dump($books);

function showAvgYear($books)
{
    $book_year = array_column($books, "year");
    $all_books_year_sum = 0;
    for ($i = 0; $i < count($book_year); $i++) {
        $all_books_year_sum = $all_books_year_sum + $book_year[$i];
    }

    return $all_books_year_sum / count($book_year);
}

echo "<br><br><br><br>";

echo ("Avg book release year: " . showAvgYear($books));
