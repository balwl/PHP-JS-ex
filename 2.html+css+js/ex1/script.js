$('#btn_toggle').on('click', function() {
	$('.catalog li').each(function(i) {
		$(this).toggleClass('list');
	});
	$(this).text(function(i, text) {
		return text == 'Плитка' ? 'Список' : 'Плитка';
	});
});

$('#btn_more').on('click', function() {		
	console.log(111);	
	$.ajax({
		url: 'ajax_more.php', 
		type: 'post',		
		dataType: 'json',		
		success: function(data) {			
			if (data.result == 'success') {
				$('#catalog').append(data.html);						
			}
		}
	});	
});

 