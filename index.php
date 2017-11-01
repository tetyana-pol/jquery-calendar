<?php
require_once 'config.php';
require_once 'function.php'; 
$events=get_events(); 
$events=get_json($events); 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<link rel="stylesheet" href="css/eventCalendar.css">
	<link rel="stylesheet" href="css/eventCalendar_theme_responsive.css">


</head>
<body>
<div id="eventCalendar" style="width: 300px; margin: 50px auto"></div>
<script src="https://code.jquery.com/jquery.min.js" type="text/javascript"></script>

<script src="js/moment.js"></script>
<script src="js/jquery.eventCalendar.js"></script>
<script>
$(function(){
	var data=<?php echo $events; ?>;
	$('#eventCalendar').eventCalendar({
	jsonData: data,
	jsonDateFormat: 'human',
	startWeekOnMonday: false,
	openEventInNewWindow: true,
	dateFormat: 'dddd DD-MM-YYYY',
	showDescription: false,
  locales: {
    locale: "ru",
	
	txt_noEvents: "Немає запланованих подій",
	txt_SpecificEvents_prev: "",
	txt_SpecificEvents_after: "Події:",
	
	txt_NextEvents: "Слідуючі події:",
	txt_GoToEventUrl: "Дивитись",
	moment: {
        "months" : [ "Січень", "Лютий", "Березень", "Квітень", "Травень", "Червень",
                "Липень", "Серпень", "Вересень", "Жовтень", "Листопад", "Грудень" ],
        "monthsShort" : [ "Січ", "Лют", "Бер", "Квіт", "Трав", "Черв",
                "Лип", "Серп", "Вер", "Жовт", "Лист", "Груд" ],
        "weekdays" : [ "Неділя","Понеділок","Вівторок","Середа",
                "Четвер","Пятниця","Субота" ],
        "weekdaysShort" : [ "Нд","Пн","Вт","Ср",
                "Чт","Пт","Сб" ],
        "weekdaysMin" : [ "Нд","Пн","Вт","Ср",
                "Чт","Пт","Сб" ],
        "longDateFormat" : {
            "LT" : "H:mm",
            "LTS" : "LT:ss",
            "L" : "DD/MM/YYYY",
            "LL" : "D [  ] MMMM [  ] YYYY",
            "LLL" : "D [  ] MMMM [  ] YYYY LT",
            "LLLL" : "dddd, D [  ] MMMM [  ] YYYY LT"
        },
        "week" : {
            "dow" : 1,
            "doy" : 4
        }
    }
  }
}); });
</script>
</body>



</html>
