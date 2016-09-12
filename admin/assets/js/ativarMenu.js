$(function() {
	if ($("#pagina").val()){
		var p = $("#pagina").val();

		switch (p) {
			case "principal":
				$("#principal").attr("class", "active");
			break;

			case "eventos":
				$("#eventos").attr("class", "active");
			break;

			case "album":
				$("#album").attr("class", "active");
			break;

			case "comentarios":
				$("#comentarios").attr("class", "active");
			break;
		}
	}
});