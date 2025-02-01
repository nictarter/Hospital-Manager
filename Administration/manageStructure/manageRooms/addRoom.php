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
        <h1 class="my-5 text-center">Add a new room</h1>
        <form>
            <div class="row">
                <div class="form-group col-md">
                    <label for="buildingName">Building name</label>
                    <input type="text" class="form-control" id="buildingName" value="XXXnameXXX" disabled required>
                </div>
                <div class="form-group col-md">
                    <label for="floorNumber">Floor number</label>
                    <input type="number" class="form-control" id="floorNumber" value="9999" disabled required>
                </div>
                <div class="form-group col-md">
                    <div class="select-wrapper">
                        <label for="department">Department</label>
                        <select id="department" required>
                            <option value=""></option>
                            <option value="department1">Department 1</option>
                            <option value="department2">Department 2</option>
                            <option value="department3">Department 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md">
                    <label for="roomNumber">Room number</label>
                    <input type="number" class="form-control" id="roomNumber" required>
                </div>
                <div class="form-group col-md">
                    <label for="bedsNumber">Beds number</label>
                    <input type="number" class="form-control" id="bedsNumber" min="1" required>
                </div>
                <div class="form-group col-md">
                    <label for="areaRoom">Area of the room</label>
                    <input type="number" class="form-control" id="areaRoom" min="1" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary">Add new room</button>
                </div>
            </div>
        </form>
    </div>
</body>