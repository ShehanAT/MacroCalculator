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

                         $("#slider-5" ).slider({
                                                  });
                        $("#slider-1").slider({

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
        .title{
            color: red;
        }
        </style>

    </head>
    
    <body>

        <div class="container-fluid">
        <div align="center" ><h1 class="title"><strong >Macro Calculator</strong></h1></div>
        <div class="container">
            <div class="row">
                <div class="col-sm">
                <div class="userInfoSection">
                    <h3 class="measuringSystemSection">I use:</h3>
                    <select>
                        <option value="Select system" selected="selected" disabled hidden>Select Measuring System</option>
                        <option value="Imperial">Imperial</option>
                        <option value="Metric">Metric</option>
                    </select>

                    <h3 class="heightSection">My Height:</h3>
                    <input type="text" id="heightResult" style="border:0; color:#b9cd6d; font-weight:bold;">
                    <div id="slider-1" class="heightSlider"></div>

                    <h3 class="weightSection">My Weight:</h3>
                    <input type="text" id="weightResult" style="border:0; color:#b9cd6d; font-weight:bold;">
                    <div id="slider-1" class="weightSlider"></div>

                    <h3 class="">Liftin</h3>


                </div>
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
                                <label for="carbOutput">Carbs %:</label>
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
                        <button  name="search" id="submitFood" onclick="searchFood()">Add Food</button>

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

