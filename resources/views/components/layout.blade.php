<!DOCTYPE html>
<html>
<head>
    <title>Book Store</title>

    <style>

    body{
        font-family: Arial;
        margin:0;
    }

    header{
        background:#333;
        color:white;
        padding:15px;
    }

    nav a{
        color:white;
        margin-right:15px;
        text-decoration:none;
    }

    .container{
        padding:20px;
    }

    footer{
        background:#333;
        color:white;
        text-align:center;
        padding:10px;
        margin-top:20px;
    }

    </style>

</head>

<body>

<header>

<h2>Online Book Store</h2>

<nav>

<a href="/books">All Books</a>
<a href="/books/category/Programming">Programming</a>
<a href="/books/category/Finance">Finance</a>
<a href="/books/category/SelfHelp">Self Help</a>

</nav>

</header>

<div class="container">

{{ $slot }}

</div>

<footer>

<p>Laravel Book Store</p>

</footer>

</body>

</html>