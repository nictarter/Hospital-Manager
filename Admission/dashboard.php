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
    <title>Admission</title>
    <link rel="stylesheet" href="../../../bootstrap-italia/css/bootstrap-italia.min.css" />
    <script src="../../../bootstrap-italia/js/bootstrap-italia.bundle.min.js"></script>
</head>
<body style="background-color: lightgrey;">
    <div class="container">
        <h1 class="my-5 text-center">Dashboard</h1>
        <div class="col-12 col-lg-4">
            <div class="card">
                <div class="card-body my-0">
                    <h3 class="card-title h5">New Patient</h3>
                    <p class="card-text font-serif">Add a new patient to be visited</p>
                    <button type="button" class="btn btn-primary my-0">Access</button>
                </div>
            </div>
        </div>
    </div>
</body>