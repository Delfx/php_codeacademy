<?php

namespace App\Services\Traits;

trait OpenTraits
{
    public function open(string $action, string $method)
    {
        // <form action="index.php" method="POST">
        return <<<HTML
        <!DOCTYPE html>
        <html>
        <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <div class='container mt-3 col-xxl-6 offset-offset-xxl-3'>
        <form action="{$action}" method="{$method}">
        HTML;
    }


}
