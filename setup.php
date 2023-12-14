<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dyb";

        $conn = new mysqli($servername, $username, $password);

        if ($conn->connect_error)    {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "create database if not exists `$dbname`";
        if  ($conn->query($sql) === TRUE)   {
        } else {
            echo "There is an error creating database: " . $conn->error;
        }

        $conn->select_db($dbname);

        $sql_users = "CREATE TABLE IF NOT EXISTS Users (
            UserID INT AUTO_INCREMENT PRIMARY KEY,
            Username VARCHAR(50) NOT NULL,
            Password VARCHAR(50) NOT NULL,
            Email VARCHAR(50) NOT NULL
        )";
        $conn->query($sql_users);

        $sql_student = "CREATE TABLE IF NOT EXISTS Student (
            StudentID INT AUTO_INCREMENT PRIMARY KEY,
            FirstName VARCHAR(50) NOT NULL,
            LastName VARCHAR(50) NOT NULL,
            Birthdate DATE NOT NULL,
            Email VARCHAR(50) NOT NULL
        )";
        $conn->query($sql_student);

        $sql_course = "CREATE TABLE IF NOT EXISTS Course (
            CourseID INT AUTO_INCREMENT PRIMARY KEY,
            CourseName VARCHAR(50) NOT NULL,
            Credits INT NOT NULL
        )";
        $conn->query($sql_course);

        $sql_instructor = "CREATE TABLE IF NOT EXISTS Instructor (
            InstructorID INT AUTO_INCREMENT PRIMARY KEY,
            FirstName VARCHAR(50) NOT NULL,
            LastName VARCHAR(50) NOT NULL,
            Email VARCHAR(50) NOT NULL
        )";
        $conn->query($sql_instructor);

        $sql_enrollment = "CREATE TABLE IF NOT EXISTS Enrollment (
            EnrollmentID INT AUTO_INCREMENT PRIMARY KEY,
            StudentID INT,
            CourseID INT,
            FOREIGN KEY (StudentID) REFERENCES Student(StudentID),
            FOREIGN KEY (CourseID) REFERENCES Course(CourseID)
        )";
        $conn->query($sql_enrollment);
        ?>