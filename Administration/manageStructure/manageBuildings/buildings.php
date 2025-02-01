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
    <title>Administration</title>
    <link rel="stylesheet" href="../../../bootstrap-italia/css/bootstrap-italia.min.css" />
    <script src="../../../bootstrap-italia/js/bootstrap-italia.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h1 class="my-5 text-center">Hospital Buildings</h1>
        <table class="table table-secondary table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Floors</th>
                    <th>Area</th>
                    <th>Utilities</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                    <td>Test</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>