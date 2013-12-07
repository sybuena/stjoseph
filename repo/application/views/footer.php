<!-- FOOTER -->	
<div class="jumbotron">
    <div class="row">
        <center><h6>Page footer</h6></center>
    </div>

</div>

</body>

<script type="application/javascript">
  	$(document).ready(function() {
		
		// page is now ready, initialize the calendar...
	
		$('#calendar').fullCalendar({
				theme : true,
			 dayClick: function(date, allDay, jsEvent, view) {

				if (allDay) {
					alert('Clicked on the entire day: ' + date);
				} else{
					alert('Clicked on the slot: ' + date);
				}
		
				
				// change the day's background color just for fun
				//$(this).css('background-color', 'red');
		
			}
		
		})

	});
</script>

</html>