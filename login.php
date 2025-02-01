<?php

/**
 *  This file is part of Hospital Manager
 *  @author     Nicolò Tarter <nicolo.tarter@gmail.com>
 *  @copyright  (C) 2025 Nicolò Tarter
 *  @license    GPL-3.0+ <https://www.gnu.org/licenses/gpl-3.0.html>
 */

    if (!$_SESSION["logged"]) {
        header("Location: index.php");
    }

?>

<!DOCTYPE html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="bootstrap-italia/css/bootstrap-italia.min.css" />
    <script src="bootstrap-italia/js/bootstrap-italia.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="my-5 text-center">Login now</h1>
    </div>
    <div class="container" style="width: 30%;">
        <form>
            <div class="row">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" required>
                </div>
            </div>
            <div class="row mt-4">
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Accedi</button>
                </div>
            </div>
        </form>
    </div>
</body>