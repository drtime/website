<?php

    // Database Information \\
    $db_host = 'localhost';
    $db_user = 'root';
    $db_name = 'escaperoom';
    $db_password = '';

    // Connecting to database \\
    $conn = mysqli_connect($db_host, $db_user, $db_password) or die("Error");

    // Error Messages if database is not connected \\
    if(!$conn)
    {
        echo "Niet geconnect met de server";
    }

    // or not selected \\
    if(!mysqli_select_db($conn, $db_name))
    {
        echo "Database niet geselecteerd";
    }

    // Results of HTML Form input \\
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $telefoon = $_POST['telefoon'];
    $email = $_POST['email'];
    $aantal = $_POST['aantal'];

    // Insert form results into Database \\
    $sql = "INSERT INTO escaperoom (Voornaam, Achternaam, Telefoon, Email, Aantal) VALUES('$voornaam', '$achternaam', '$telefoon', '$email', '$aantal')";

