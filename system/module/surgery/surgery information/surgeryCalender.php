
<html>
<head>
    <title>Automation of Plastic Surgery Unit at Lady Ridgeway Hospital</title>
    <link rel="icon" href="../../../images/title.png"/>
    <link rel="stylesheet" type="text/css"
          href="../../../bootstrap/css/bootstrap.min.css"/>
<!--    <link rel="stylesheet" type="text/css" href="../../../css/mainlayout.css"/>-->

    <link href='../../../css/fullcalendar.min.css' rel='stylesheet' />
    <link href='../../../css/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='../../../js/moment.min.js'></script>
    <script src='../../../js/jquery.min.js'></script>
    <script src='../../../js/fullcalendar.min.js'></script>

</head>
<body>
<div id="main">
    <div id="header">
       <h1>PLASTIC SURGERY UNIT</h1>
    </div>
    <div>
        <ol class="breadcrumb">
            <li>
                <a href="../../login/dashboard.php">
                    Dashboard </a></li>
            <li><a href="../../surgery/surgery.php">Surgery</a></li>

            <li class="active"><font color="#096dac">Surgery Calender</font></li>
        </ol>
        <h3 align="center">Surgery Calendar</h3>

    </div>
    <HR/>
    <div id='calendar'></div>

</body>

<?php
?>

<script>

    $(document).ready(function() {

        $('#calendar').fullCalendar({
            defaultDate: '2017-11-12',
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events: [
                {
                    title: 'All Day Event',
                    start: '2017-11-01'
                },
                {
                    title: 'Long Event',
                    start: '2017-11-07',
                    end: '2017-11-10'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-11-09T16:00:00'
                },
                {
                    id: 999,
                    title: 'Repeating Event',
                    start: '2017-11-16T16:00:00'
                },
                {
                    title: 'Conference',
                    start: '2017-11-11',
                    end: '2017-11-13'
                },
                {
                    title: 'Meeting',
                    start: '2017-11-12T10:30:00',
                    end: '2017-11-12T12:30:00'
                },
                {
                    title: 'Lunch',
                    start: '2017-11-12T12:00:00'
                },
                {
                    title: 'Meeting',
                    start: '2017-11-12T14:30:00'
                },
                {
                    title: 'Happy Hour',
                    start: '2017-11-12T17:30:00'
                },
                {
                    title: 'Dinner',
                    start: '2017-11-12T20:00:00'
                },
                {
                    title: 'Birthday Party',
                    start: '2017-11-13T07:00:00'
                },

            ]
        });

    });

</script>

