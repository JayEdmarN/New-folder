<?php
header("Content-type: text/css; charset: UTF-8");
?>

body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
    margin: 0;
    padding: 0;
}

.container {
    width: 300px;
    margin: 100px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
}

h2 {
    margin-top: 0;
    text-align: center;
}

form {
    display: flex;
    flex-direction: column;
}

label {
    margin: 10px 0 5px;
}

input[type="text"],
input[type="password"] {
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 10px;
    background-color: #28a745;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 10px;
}

button:hover {
    background-color: #218838;
}

.alert {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
    padding: 10px;
    border: 1px solid transparent;
    border-radius: 4px;
    text-align: center;
    margin-bottom: 15px;
}

.retry-button {
    background-color: #007bff;
    color: #fff;
    margin-top: 10px;
}

.retry-button:hover {
    background-color: #0056b3;
}
