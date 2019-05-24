


  var foodAdded = [];
  function addFood(){
    var foodName = $(".foodName").val();
    $(".foodName").remove();
    $("#addFood").remove();
    $.ajax({
      type:'POST',
      url:"foodDatabase.php",
      data:{'foodName2': foodName},
      success:function(result){
        console.log(foodName);
        $(".addedFoods").after(result).html();
    }});
  }
  function searchFood(){
    var foodSearch = $("#foodName").val();
    $.ajax({
      type:'POST',
      url:"searchDatabase.php",
      data:{'foodName':foodSearch},
      success:function(result){
          console.log(result);
          $("#calculateMacros").after(result).html();
      }
    })

  }
$(function(){

  var maxRange = 100;

  function addFood(){
    var foodName = $(".foodName").val();
    $.ajax({
      type:'POST',
      url:"foodDatabase.php",
      data:foodName,
      success:function(result){
        console.log(foodName);
    }});
  }

  $( ".proteinSlider" ).slider({
         orientation:"vertical",
         value:0,
         min:0,
         max:100,
         slide: function( event, ui ) {
           var val = (ui.value).toString();
            $( "#proteinOutput" ).val(val);
            $("#totalOutput").val(parseInt($("#proteinOutput").val()) + parseInt($("#carbOutput").val()) + parseInt($("#fatOutput").val()));
          //  $("#proteinOutput").val(ui.values[0]);
          //  $("#carbOutput").val(ui.values[1]);
         }

      });
      $("#proteinOutput").val($(".proteinSlider").slider("value").toFixed(1));

      $(".carbSlider").slider({
        orientation:"vertical",
        value:0,
        min:0,
        max:100,
        slide: function( event, ui ) {
          var val = (ui.value).toString();
           $( "#carbOutput" ).val(val);
           $("#totalOutput").val(parseInt($("#proteinOutput").val()) + parseInt($("#carbOutput").val()) + parseInt($("#fatOutput").val()));
        }
      });
      $("#carbOutput").val($(".carbSlider").slider("value").toFixed(1));

      $(".fatSlider").slider({
        orientation:"vertical",
        value:0,
        min:0,
        max:100,
        slide: function( event, ui ) {
          var val = (ui.value).toString();
           $( "#fatOutput" ).val(val);
           $("#totalOutput").val(parseInt($("#proteinOutput").val()) + parseInt($("#carbOutput").val()) + parseInt($("#fatOutput").val()));
        }
      });
        $("#fatOutput").val($(".fatSlider").slider("value").toFixed(1));

        $("#calculateMacros").click(function(){
          if((parseInt($("#proteinOutput").val()) + parseInt($("#carbOutput").val()) + parseInt($("#fatOutput").val())) == 100){
            console.log("Valid macro distribution");
          }else{
            console.log("Invalid macro distribution");
          }

        })
        $(".proteinSlider").change(function(){
                    console.log("passing");

        })
        $("#addFood").click(function(){
          console.log($(".foodName").val());
          console.log("<li><span class='food'>"+$(".foodName").val()+"</span></li>");
          foodAdded.push($(".foodName").val());
        // //  $("#AddedFood #addedFoods").append("<li><span class='food'>"+$("#foodName").val()+"</span></li>");
        $(".AddedFood ul").append("<li><span class='food'>" + $('.foodName').val() + "</span><button class='btn btn-danger'>Remove Food</button></li>");
      //  $(".AddedFood ul").append("<li><span class='food'>"+ "new food" +"</span></li>");
        });

	});
