<?php

//Database Connection(DBserver,Username,Password,DatabaseName)
$conn = mysqli_connect("localhost", "root", "root", "psc") or
die("DataBase Server error " . mysqli_connect_error());