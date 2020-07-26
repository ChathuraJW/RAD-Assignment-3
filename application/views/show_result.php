<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Club</title>
    <link rel="stylesheet" href="assets/css/showResult.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <style>
        .navbar{
            background-color: black;
            color:white;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-inverse">
      <p class="navbar-brand">Result Club</p>
        <p class="navbar-brand navbar-left">Login as Wanniarachchi WACJ <a href="#">Log Out</a></p>
</nav>
    <div class="row">
    <div class="col-lg-6 col-md-5" id="basicInfo">
        <div class="row">
        <div class="col-lg-4" id="infoBlock">
            <span class="basicInfoElement" id="overallGPA">3.619</span><br>
            <label for="overallGPA">Current GPA</label>
        </div>
        <div class="col-lg-4" id="infoBlock">
            <span class="basicInfoElement" id="batchRank">#31</span><br>
            <label for="batchRank">Batch Rank</label>
        </div>
        <div class="col-lg-4" id="infoBlock">
            <span class="basicInfoElement" id="totalCredit">31</span><br>
            <label for="totalCredit">Total Credit</label>
        </div>
        </div>
    </div>
    <div class="col-lg-5 col-md-5" id="degreeClass">
        <span class="degreeClassHeader">Degree Information</span><br>
        <samp class="degreeClassValue">SU</samp><br>
        <span>FC-First Class degree, SU-Second Upper degree, SL-Second Lower degree, NM-Normal degree, -- indicates that your GPA is insufficient to complete the degree.</span>
    </div>
    </div>
    <div class="row">
    <div class="col-lg-7" id="gpaDistribution">
        <span>Batch GPA Distribution</span>
        <canvas id="gpaDistributionCanvas" class="graphCanvas" style="width: 80%"></canvas>
    </div>
    </div>

    <div class="row">
        <div class="col-lg-1"></div>
        <div class="col-lg-5" id="individualGPADistribution">
        <span class="graphHeader">Individual GPA Distribution</span>
        <canvas id="individualGPADistributionCanvas" class="graphCanvas"></canvas>
        </div>
    <div class="col-lg-5" id="gradeContribution">
        <span class="graphHeader">Grade Contribution for GPA</span>
        <canvas id="gradeContributionCanvas" class="graphCanvas"></canvas>
    </div>
    <div class="col-lg-1"></div>
    </div>
    <div class="resultViewer">
        <?php
            $i=1;
            while($i<=8){
                $sem=(round($i%2)==0)?2:1;
                $year=round($i/2);
                echo("
                    <div class='col-lg-3' id='semesterResult'>
                        <span class='semesterResultHeader'>$year st Year $sem st Semester</span>
                        <div class='semesterResultViewer'>
                            <table>
                  ");
                            $j=0;
                            while($j<10){
                                echo("
                                    <tr>
                                        <td>Data Structures and Algorithms <br> <span>SCS1201 / 3 Credits /Examination Year:2019</span></td>
                                        <td class='result'>A-</td>
                                    </tr>
                                ");
                                $j++;
                            }
                echo("      
                            </table>
                        </div>
                    </div>         
                ");
                $i++;
            }
        ?>


    </div>
    <div class="footer text-center py-3">Developed By:
    <a href="https://www.linkedin.com/in/chathura-janaranjana-wanniarachchi/">Chathura Wanniarachchi</a>
  </div>
<script src="assets/js/Chart.js"></script>
<script src="assets/js/viewResult.js"></script>
<script src="assets/js/bootstrap.js"></script>
</body>
</html>