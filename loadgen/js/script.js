$(document).ready(function(){
  $("#numbers").submit(function(evt){
    evt.preventDefault();

    var max = $("input[name=number_of_values]").val();
    var attempts = max;

    if(max == 0) return;

    $("#loading_time").html("");

    $("#numbers input").prop("disabled",true);
    $("#attempt_counter").html(attempts);
    $("#checking").show();

    var u = $("#numbers").attr("action") + "?number_of_values=" + max;

    var begin_date = new Date();

    for(var i = 0; i < max; i++){
      $.getJSON(u,function(data){
        $("#results").prepend("<p>"+data.number+" - Hostname:" + data.host + " - CPU: " + data.cpu +  "</p>");

        $("#attempt_counter").html(attempts--);
        if(attempts == 0){
          $("#numbers input").prop("disabled",false);
          $("#checking").hide();

          var end_date = new Date();
          if(end_date < begin_date) end_date.setDate(end_date.getDate() + 1);
          $("#loading_time").html("Loaded "+max+" numbers in "+ (end_date - begin_date)/1000 +" seconds...");
        }
      });
    }
  });

  $("#numbers input[type=reset]").click(function(evt){
    $("#results").html("");
    $("#loading_time").html("");
  });
});
