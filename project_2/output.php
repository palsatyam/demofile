<?php
$fname = $_GET['fname'];
$lname = $_GET['lname'];
$father_name = $_GET['father_name'];
$aadhar_no = $_GET['aadhar_no'];
$phone_no = $_GET['phone_no'];
$school_name = $_GET['school_name'];
$class = $_GET['class'];
$addsubject = $_GET['addsubject'];
 
require_once("db/connection,php");
$sth = $connection->prepare("INSERT INTO `your db table name`(fname, lname, father_name, aadhar_no, phone_no, school_name, class, addsubject)")



?>