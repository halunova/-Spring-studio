$.log = function(message){
  var $logger = $("#logger");
  $logger.html($logger.html() + "\n * " + message );
}


$(function(){
        var options = {
          map: "#map",
			 location: "улица Уборевича 64, Минск, Беларусь"
        };
        
        $("#geocomplete").geocomplete(options).bind("geocode:result", function(event, result){
            $.log("Result: " + result.formatted_address);
          })
          .bind("geocode:error", function(event, status){
            $.log("ERROR: " + status);
          })
          .bind("geocode:multiple", function(event, results){
            $.log("Multiple: " + results.length + " results found");
          });
        
        $("#find").click(function(){
          $("#geocomplete").trigger("geocode");
        });
    });