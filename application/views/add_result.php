<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result Club</title>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/addResult.css">
</head>
<body>
<nav class="navbar navbar-inverse">
      <p class="navbar-brand">Result Club</p>
        <p class="navbar-brand navbar-left">Login as Wanniarachchi WACJ <a href="#">Log Out</a></p>
</nav>
    <h1 style="text-align:center;font-weight:bold;">Upload Board Confirmed Exam Result</h1>
    <form action="" method="post" class="">
        <div class="row showRadio form-group">
            <span>Examination for</span>
            <div class="radioValue">
                <input type="radio" name="examinationName" id="examination1Y" value="1y">
                <label for="examination1Y">1<sup>st</sup> Year</label>
            </div>
            <br>
            <div class="radioValue">
                <input type="radio" name="examinationName" id="examination2Y" value="2y">
                <label for="examination2Y">2<sup>st</sup> Year</label>
            </div>
            <br>
            <div class="radioValue">
                <input type="radio" name="examinationName" id="examination3Y" value="3y">
                <label for="examination3Y">3<sup>st</sup> Year</label>
            </div>
            <br>
            <div class="radioValue">
                <input type="radio" name="examinationName" id="examination4Y" value="4y">
                <label for="examination4Y">4<sup>st</sup> Year</label>
            </div>
        </div>
        <div class="row showRadio form-group">
            <span>Semester</span>
            <div class="radioValue">
                <input type="radio" name="semester" id="semester1" value="1">
                <label for="semester1">1<sup>st</sup> Semester</label>
            </div>
            <br>
            <div class="radioValue">
                <input type="radio" name="semester" id="semester2" value="2">
                <label for="semester2">2<sup>nd</sup> Semester</label>
            </div>
            <br>
        </div>
        <div class="row showRadio form-group">
            <span>Attempt</span>
            <div class="radioValue">
                <input type="radio" name="attempt" id="attemptOne" value="F">
                <label for="attemptOne">1<sup>st</sup> Attempt</label>
            </div>
            <br>
            <div class="radioValue">
                <input type="radio" name="attempt" id="attemptRep" value="R">
                <label for="attemptRep">Repeated Attempt<sup></sup></label>
            </div>
        </div>
        <br>
        <div class="row showRest form-group">
            <span>Subject</span>
            <select name="subject" id="subject">
            </select>
        </div>
        <div class="row showRest">
            <span>Examination Year</span>
            <select name="examinationYear" id="examinationYear">
            </select>
        </div>
        <div class="row showRest">
            <span>Batch</span>
            <select name="batch" id="batch">
            </select>
        </div>
        <br>
        <div class="form-group">
            <span>CSV formatted result dataset</span>
            <label for="resultFile" class="fileLabel btn btn-info form-control" id="resultFileLabel">Upload Result Data File</label>
            <input type="file" name="resultFile" id="resultFile" class="">
        </div>
        <br>
        <div class="form-group form-inline" id="actionSection">
            <input type="submit" value="Submit for Review" name="submit" id="submit" class="btn btn-success form-control">
            <input type="reset" value="Cancel" name="cancel" id="cancel" class="btn btn-danger form-control">
        </div>
    </form> 
    </div>
    <div class="footer text-center py-3">Developed By:
    <a href="https://www.linkedin.com/in/chathura-janaranjana-wanniarachchi/">Chathura Wanniarachchi</a>
  </div>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/addResult.js"></script>
</body>
</html>