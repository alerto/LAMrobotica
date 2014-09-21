var sLang, sURL;

$(document).on("ready", function() {	    
//    var vector = {
//        first: "this is the first",
//        second: "this is the second"
//    };
//    var chars = object.keys(vector);
//    alert(chars[1]);
    
        $("#language").change(setLanguage);
}); 

function setLanguage() {
	sLang = $(this).find("option:selected").html().substr(0, 2).toLowerCase();
	$("[data-localize]").localize("js/vendor/locales/header", {
		language : sLang
	});
}

/*function setURL() {
	var resource = $(this).attr("href");
	$.ajax({
		type : "GET",
		dataType : "html",
		url : resource,
		success : function(respuesta) {
			$("#ajaxContent").hide("slide", {
				direction : "left"
			}, 5000);
		}
	});
	return false;
}*/