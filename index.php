<!DOCTYPE html>
<html>
<head>
    <title>Package Task</title>
    <meta charset="UTF -8">
    <link rel="stylesheet" href="style.css">

<body>
    <form method="post">
        <div id="title">
            <label>Title</label>
            <input type="text" name="title"><br>
        </div>

        <div id="from">
            <label>From</label>
            <input type="text" name="from"><br>
        </div>

        <div id="to">
            <label>To</label>
            <input type="text" name="to"><br>
        </div>

        <div id="description">
            <label>Description</label>
            <input type="text" name="description" placeholder="Optional"><br>
        </div>

        <div id="address">
            <label>Address</label>
            <input type="text" name="address" placeholder="Optional"><br><br>
        </div>

        <input type="submit" id="submit" name="submit" value="submit"><br>

    </form>

</body>



</html>


<?php
require_once "vendor/autoload.php";

use Spatie\CalendarLinks\Link;


// Generate a data URI using arbitrary generator:
//echo $link->formatWith(new \Your\Generator());
$from = DateTime::createFromFormat('Y-m-d H:i', $_POST['from']);
if (isset($_POST['submit'])){

    $from = DateTime::createFromFormat('Y-m-d H:i', $_POST['from']);
    $to = DateTime::createFromFormat('Y-m-d H:i', $_POST['to']);

    $link = Link::create("Title",$from, $to)
        ->description($_POST['description'])
        ->address($_POST['address']);

    echo "<a href='" . $link->google() ."' target='_blank' id='calendarButton'>Go To Calendar</a>";

}




