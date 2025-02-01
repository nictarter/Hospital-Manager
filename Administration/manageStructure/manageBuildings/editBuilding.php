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
        <h1 class="my-5 text-center">Edit a building</h1>
        <form>
            <div class="row">
                <div class="form-group col-md-6">
                    <label for="nameBuilding">Name of the building</label>
                    <input type="text" class="form-control" id="nameBuilding" required>
                </div>
                <div class="form-group col-md">
                    <label for="floorsBuilding">Floors of the building</label>
                    <input type="number" class="form-control" id="floorsBuilding" min="1" required>
                </div>
                <div class="form-group col-md">
                    <label for="areaBuilding">Area of the building</label>
                    <input type="number" class="form-control" id="areaBuilding" min="1" required>
                </div>
                <div class="form-group">
                    <div class="select-wrapper">
                        <label for="stateBuilding">Current state of the building</label>
                        <select id="stateBuilding" required>
                            <option value="underConstruction">Under construction</option>
                            <option value="available">Available</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Add new building</button>
                </div>
            </div>
        </form>
    </div>
</body>