var sLang, sURL;

$(document).on("ready", function () {
    $("#language").change(setLanguage);
    $("[data-localize]").localize("js/vendor/locales/header", {
        language: en
    });
});

function setLanguage() {
//    document.write('<script src="js/vendor/jquery.localize.js" type="text/javascript"><\/script>');
    sLang = $(this).find("option:selected").html().substr(0, 2).toLowerCase();
    alert(sLang);  7  
    $("[data-localize]").localize("js/vendor/locales/header", {
        language: sLang
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
 //    var vector = {
 //        first: "this is the first",
 //        second: "this is the second"
 //    };
 //    var chars = object.keys(vector);
 //    alert(chars[1]);       
 
 
 
 var select = $("#pokemon");  
 select[0].selectedIndex = 3;  
 //Squirtleee 
 select.selectmenu('refresh');  
 
 
 
 
 }*/