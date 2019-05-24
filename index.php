<?php
    include 'foodDatabase.php';
    include 'searchDatabase.php';
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Macro Calculator</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/index.css" rel="stylesheet">
        <script type="text/javascript" src="jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="jquery-ui.min.js"></script>
        <link href = "https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css"
        rel = "stylesheet">
        <script src = "https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src = "https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script type="text/javascript" src="index.js"></script>
        <script src="typeahead.min.js"></script>
        <script type="text/javascript" src="index.js"></script>
        <script>
        $(document).ready(function(){
                          $('#foodName').typeahead({
                                                   name: 'foodName',
                                                   remote: 'search.php?query=%QUERY',
                                                   limit:10
                                                   });
                          
                          });

  $( "#slider-5" ).slider({
                          });

        </script>
        <style>
        h1{
            color:purple;
        }
        h3{
            color:#42d5ce;
        }
        .containingDiv{
            border:1px solid #7c73f6;
            margin-top: 100px;
            border-radius: 15px;
        }
        .typeahead, .tt-query, .tt-hint {
        border: 2px solid #CCCCCC;
            border-radius: 8px;
            font-size: 24px;
        height: 30px;
            line-height: 30px;
        outline: medium none;
        padding: 8px 12px;
        width: 396px;
        }
        .typeahead {
            background-color: #FFFFFF;
        }
        .typeahead:focus {
        border: 2px solid #0097CF;
        }
        .tt-query {
            box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
        }
        .tt-hint {
        color: #999999;
        }
        .tt-dropdown-menu {
            background-color: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            margin-top: 12px;
        padding: 8px 0;
        width: 422px;
        }
        .tt-suggestion {
            font-size: 24px;
            line-height: 24px;
        padding: 3px 20px;
        }
        .tt-suggestion.tt-is-under-cursor {
            background-color: #0097CF;
        color: #FFFFFF;
        }
        .tt-suggestion p {
        margin: 0;
        }
        .slider {
            -webkit-appearance: none;
        width: 100%;
        height: 15px;
            border-radius: 5px;
        background: #d3d3d3;
        outline: none;
        opacity: 0.7;
            -webkit-transition: .2s;
        transition: opacity .2s;
        }

        .slider::-webkit-slider-thumb {
            -webkit-appearance: none;
        appearance: none;
        width: 25px;
        height: 25px;
            border-radius: 50%;
        background: #4CAF50;
        cursor: pointer;
        }

        .slider::-moz-range-thumb {
        width: 25px;
        height: 25px;
            border-radius: 50%;
        background: #4CAF50;
        cursor: pointer;
        }
        </style>

    </head>
    
    <body>

        <div class="container-fluid">
        <div align="center"><h1><strong>Macro Calculator</strong></h1></div>
        <p><strong>Enter All the foods you want to eat(10 Max):</strong></p>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <form class="form-inline">
                    <label class="control-label">1.</label>
                    <select name="food1">
                    <option selected disabled>Choose food</option>
                    <option value="Chicken Breast">Chicken Breast</option>
                    <option value="Peanuts">Peanuts</option>
                    <option value="Spinach">Spinach</option>
                    <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                    <option value="Canned Peaches">Canned Peaches</option>
                    <option value="Brown Beans">Brown Beans</option>
                    <option value="Chicken Fries">Chicken Fries</option>
                    <option value="Rice Cakes">Rice Cakes</option>
                    <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                    <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
                </form>
            <form class="form-inline">
                <label class="control-label">2.</label>
                <select name="food2">
                <option selected disabled>Choose food</option>
                <option value="Chicken Breast">Chicken Breast</option>
                <option value="Peanuts">Peanuts</option>
                <option value="Spinach">Spinach</option>
                <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                <option value="Canned Peaches">Canned Peaches</option>
                <option value="Brown Beans">Brown Beans</option>
                <option value="Chicken Fries">Chicken Fries</option>
                <option value="Rice Cakes">Rice Cakes</option>
                <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
            </form>
            <form class="form-inline">
                <label class="control-label">3.</label>
                <select name="food3">
                <option selected disabled>Choose food</option>
                <option value="Chicken Breast">Chicken Breast</option>
                <option value="Peanuts">Peanuts</option>
                <option value="Spinach">Spinach</option>
                <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                <option value="Canned Peaches">Canned Peaches</option>
                <option value="Brown Beans">Brown Beans</option>
                <option value="Chicken Fries">Chicken Fries</option>
                <option value="Rice Cakes">Rice Cakes</option>
                <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
            </form>
            <form class="form-inline">
                <label class="control-label">4.</label>
                <select name="food4">
                <option selected disabled>Choose food</option>
                <option value="Chicken Breast">Chicken Breast</option>
                <option value="Peanuts">Peanuts</option>
                <option value="Spinach">Spinach</option>
                <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                <option value="Canned Peaches">Canned Peaches</option>
                <option value="Brown Beans">Brown Beans</option>
                <option value="Chicken Fries">Chicken Fries</option>
                <option value="Rice Cakes">Rice Cakes</option>
                <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
            </form>
            <form class="form-inline">
                <label class="control-label">5.</label>
                <select name="food5">
                <option selected disabled>Choose food</option>
                <option value="Chicken Breast">Chicken Breast</option>
                <option value="Peanuts">Peanuts</option>
                <option value="Spinach">Spinach</option>
                <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                <option value="Canned Peaches">Canned Peaches</option>
                <option value="Brown Beans">Brown Beans</option>
                <option value="Chicken Fries">Chicken Fries</option>
                <option value="Rice Cakes">Rice Cakes</option>
                <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
            </form>
            <form class="form-inline">
                <label class="control-label">6.</label>
                <select name="food6">
                <option selected disabled>Choose food</option>
                <option value="Chicken Breast">Chicken Breast</option>
                <option value="Peanuts">Peanuts</option>
                <option value="Spinach">Spinach</option>
                <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                <option value="Canned Peaches">Canned Peaches</option>
                <option value="Brown Beans">Brown Beans</option>
                <option value="Chicken Fries">Chicken Fries</option>
                <option value="Rice Cakes">Rice Cakes</option>
                <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
            </form>
            <form class="form-inline">
                <label class="control-label">7.</label>
                <select name="food7">
                <option selected disabled>Choose food</option>
                <option value="Chicken Breast">Chicken Breast</option>
                <option value="Peanuts">Peanuts</option>
                <option value="Spinach">Spinach</option>
                <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                <option value="Canned Peaches">Canned Peaches</option>
                <option value="Brown Beans">Brown Beans</option>
                <option value="Chicken Fries">Chicken Fries</option>
                <option value="Rice Cakes">Rice Cakes</option>
                <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
            </form>
            <form class="form-inline">
                <label class="control-label">8.</label>
                <select name="food8">
                <option selected disabled>Choose food</option>
                <option value="Chicken Breast">Chicken Breast</option>
                <option value="Peanuts">Peanuts</option>
                <option value="Spinach">Spinach</option>
                <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                <option value="Canned Peaches">Canned Peaches</option>
                <option value="Brown Beans">Brown Beans</option>
                <option value="Chicken Fries">Chicken Fries</option>
                <option value="Rice Cakes">Rice Cakes</option>
                <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
            </form>
            <form class="form-inline">
                <label class="control-label">9.</label>
                <select name="food9">
                <option selected disabled>Choose food</option>
                <option value="Chicken Breast">Chicken Breast</option>
                <option value="Peanuts">Peanuts</option>
                <option value="Spinach">Spinach</option>
                <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                <option value="Canned Peaches">Canned Peaches</option>
                <option value="Brown Beans">Brown Beans</option>
                <option value="Chicken Fries">Chicken Fries</option>
                <option value="Rice Cakes">Rice Cakes</option>
                <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
            </form>
            <form class="form-inline">
                <label class="control-label">10.</label>
                <select name="food10">
                <option selected disabled>Choose food</option>
                <option value="Chicken Breast">Chicken Breast</option>
                <option value="Peanuts">Peanuts</option>
                <option value="Spinach">Spinach</option>
                <option value="Sweat Potatoes Great Value">Sweat Potatoes Great Value</option>
                <option value="Canned Peaches">Canned Peaches</option>
                <option value="Brown Beans">Brown Beans</option>
                <option value="Chicken Fries">Chicken Fries</option>
                <option value="Rice Cakes">Rice Cakes</option>
                <option value="Smooth Kraft PB">Smooth Kraft PB</option>
                <option value="Smuckers Rasberry Jam">Smuckers Rasberry Jam</option>
                </select>
            </form>
            <div class="AddedFood">
                <h3 style="color:black">Added Foods:</h3>
                <ul class="addedFoods">

                </ul>
            </div>
            </div>
                <div class="col-sm">
                    <div class="slidecontainer">
                      <div class="container">
                         <div class="row">
                             <div class="col-sm-3">
                                <p>
                                <label for="proteinOutput">Protein %:</label>
                                <input type="text" id="proteinOutput" style="border:0; color:#b9cd6d; font-weight:bold;">
                                </p>
                                 <div id="slider-5" class="proteinSlider"></div>
                            </div>
                            <div class="col-sm-3">
                                <p>
                                <label for="proteinOutput">Carbs %:</label>
                                <input type="text" id="carbOutput" style="border:0; color:#b9cd6d; font-weight:bold;">
                                </p>
                                <div id="slider-5" class="carbSlider"></div>
                            </div>
                            <div class="col-sm-3">
                                <p>
                                <label for="fatOutput">Fat %:</label>
                                <input type="text" id="fatOutput" style="border:0; color:#b9cd6d; font-weight:bold;">
                                </p>
                                <div id="slider-5" class="fatSlider"></div>
                            </div>
                            <div class="col-sm-3">
                                <p>
                                <label for="totalOutput">Total %:</label>
                                <input type="text" id="totalOutput" style="border:0; color:#b9cd6d; font-weight:bold;">
                                </p>
                            </div>
                          </div>
                        </div>

                    </div>
                    <br>
                    <form>
                        Target Calories: <input type="text" name="calories" id="calories"><br>
                        Target Protien(in g): <p id="protein"></p>
                        Target Carbs(in g): <p id="carbs"/></p>
                        Target Fat(in g): <p id="fat"/></p>
                        Search Food name:<input type="text" class="typeahead tt-query" name="foodName" autocomplete="off" placeholder="type food name" id="foodName"><br><br>
                    </form>
                        <button  name="search" id="submitFood" onclick="searchFood()">Search</button>

                    <button type="button" class="btn btn-primary" id="calculateMacros">Calculate Macros!</button>
                </div>

        </div>
        </div>

    </div>
    </body>
    

<?php
include "footer.php";
?>
</html>

