<?php
switch ($_POST["newProduct"]) {
    case 1:
        peticion1();
        break;
    case 2:
        peticion2();
        break;
    case 3:
        peticion3();
        break;
}

function peticion1()
{
    $conn = new mysqli("localhost", "root", "");
    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    }
    echo "Connected sucessfully";
    $conn->close();
}

function peticion2()
{
    $conn = new mysqli("localhost", "root", "");
    if ($conn->connect_error) {
        die("Connection failed" . $conn->connect_error);
    }
    // echo "Connected sucessfully";

    //
    $conn->close();
    $sql = "CREATE DATABASE info BMX";
    if ($conn->query($sql) === TRUE) {
        echo "Create database \"info BMX\"";
    } else {
        echo "Error: create database \"info BMX\" " . $conn->error;
    }

    //
    $conn->close();
}

function peticion3()
{
    $conn = new mysqli("localhost", "root", "");
    $sql = "DROP DATABASE IF EXISTS info BMX";
    if ($conn->query($sql) === TRUE) {
        echo "Create database \"info BMX\"";
    } else {
        echo "Error: create database \"info BMX\" " . $conn->error;
    }
}
