$(function() {
	$.ajaxSetup({
		headers: {
			'X-CSRF-Token': $('meta[name="_token"]').attr('content')
		}
	});
});

$('.p_item_add').click(function(event) {
	let id = $(this).parent().attr('data-value');

	$.post('/product_item_add', {id})
		.done(function($data) {
	    	alert("Data Loaded: " + $data);
	  	});

  //   $.ajax({
		// type: "POST",
		// url: "/cart",
		// data: {id},
		// success: function($data){
		// 	$("#results").append($data);
		// }
  //   });
});