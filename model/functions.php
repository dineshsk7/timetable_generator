<?php
    function getFaculties()
    {
    global $db;
    $query = 'SELECT * FROM staff ORDER BY s_name';
    $faculties = $db->query($query);
    return $faculties;

    }

    function getSubjects()
    {
    global $db;
    $query = 'SELECT name,subject FROM staff';
    $subject = $db->query($query);
    return $subject;

    }

    function getClasses()
    {
    global $db;
    $query = 'SELECT * FROM class';
    $classes = $db->query($query);
    return $classes;

    }

    function addFaculty()
    {

    }

    function addSubject()
    {

    }

    function addClass()
    {

    }
?> 