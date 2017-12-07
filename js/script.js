$(document).ready(function(){

	$('.input').focusout(function(e){


		var day = $(this).attr('day');

		var part = $(this).attr('part');

		var input = $(this).val();

		getResult(day, part, input);


	})

	function getResult(day, part, input)
	{

		    var result = $.post( "days/day"+day+".php", { "input": input, "part": part} )

			    .done(function(data) {

			    $("#day"+day+"-part"+part+"-result").text(data);

		    });

	}

})
