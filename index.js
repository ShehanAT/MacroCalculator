


  var foodAdded = [];
  function addFood(){



  }
  function searchFood(){
    var foodSearch = $("#foodName").val();
    var foodDetails = "";
    $.ajax({
      type:'POST',
      url:"searchDatabase.php",
      data:{'foodName':foodSearch},
      success:function(result){
          var foodId = result;
          console.log(foodId);
          $.ajax({
            type:'POST',
            url:"getFoodDetails.php",
            data:{'foodId': foodId},
            success:function(result){
              foodDetails = result;
              $.ajax({
                type:'POST',
                url:"searchDatabase.php",
                data:{'foodName2': foodSearch, 'foodDetails':foodDetails},
                success:function(result){
                  console.log(foodName);
                  $(".addedFoods").after(result).html();
              }});
            }
          });
      }
    });

  }
$(function(){

  var maxRange = 100;
  $(".heightSlider").slider({
        value: 50,
        min: 0,
        max:100,
        slide:function(event, ui){
          $("#heightResult").val((ui.value).toString());

        }
  });
  $(".weightSlider").slider({
      value:50,
      min:0,
      max:100,
      slide:function(event, ui){
        $("#weightResult").val((ui.value).toString());
      }
  });
  $("")
  $("#heightResult").val($(".heightSlider").slider("value"));
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
