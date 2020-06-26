$(document).ready(function() 
{
	var input_a = "", input_b ="", input_c = "";
	
	$("#input_A").val("");
	$("#input_B").val("");
	$("#input_C").val("");
	
	$("#input_A").keyup(function()
	{
		this.value = this.value.replace(/[^0-9|-]/g,'');
		input_a = $(this).val();
	});

	$("#input_B").keyup(function()
	{
		this.value = this.value.replace(/[^0-9|-]/g,'');
		input_b = $(this).val();
	});

	$("#input_C").keyup(function()
	{
		this.value = this.value.replace(/[^0-9|-]/g,'');
		input_c = $(this).val();
	});

	$("#clear").click(function(){
		$("#resultado").empty();
		$("#input_A").val("");
		$("#input_B").val("");
		$("#input_C").val("");
		
		input_a = "";
		input_b = "";
		input_c = "";
	});

	$("#submit").click(function(){
		$.post("resuelve.php",
		{
			a:input_a,
			b:input_b,
			c:input_c
		},
		function(data)
		{
			switch(data)
			{
				case '1':
					alert("Llene todos los campos");
				break;
				case '2':
					alert("La ecuación no es cuadratica 'a' no puede ser cero")
				break;
				default:
					$("#resultado").show();
					$("#resultado").empty();
					$("#resultado").append(data);
				break;
			}
		});
	});

	$("#resultado").hide();

});