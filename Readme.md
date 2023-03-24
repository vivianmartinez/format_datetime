### Simple class to format date
<p>
You can use this class when you need to get a date according to the elapsed time between a previous date and the current one, like:
- 8 minutes ago (interval changes)
- 1 Year 5 days 4 hours 2 seconds ago
</p>

#### Example:

    <?php
    	$date_start = new DateTime('2023-03-23 19:51:00');
		$formatted = DateTimeFormat::HowTimeAgo($date_start);
		echo $formatted;  // return Hace 14 horas
    ?>

<p>
I hope this can be usefull for you 😃
</p>