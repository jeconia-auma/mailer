<?php
  require_once('includes/session_checker.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>NewsLetter</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/package/dist/chart.umd.js"></script>
    </head>
    <body>
        <div class="sidenav">
            <div class="card">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item"><a href="/">Dashboard</a></li>
                  <li class="list-group-item"><a href="users.php">Users</a></li>
                  <li class="list-group-item"><a href="subscribers.php">Subscribers</a></li>
                  <li class="list-group-item"><a href="groups.php">Groups</a></li>
                  <li class="list-group-item"><a href="emails.php">Emails</a></li>
                </ul>
            </div>
        </div>

        <div class="container">
            <header>
                <nav class="navbar">
                    <div class="container-fluid">
                      <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                      </form>
                    </div>
                  </nav>
            </header>