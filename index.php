<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online-Shopping-Survey</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="survey.png" type="image/x-icon">
</head>

<body>
    <!-- Survey Header | Discription about Survey -->
    <header class="heading">
        <h1>Online Shopping Survey</h1>
        <p>
            <strong>"You are one of just a few people we are asking, so your answers are very important to us. Please
                be as honest as possible as the result are anonymous. For most, you need only check a box or enter a
                line for your answer. The survey will prompt you to complete all questions. Overall, it will take
                about 10 minutes of your time."
            </strong>
        </p>
    </header>
    <div class="container">
        <form class="form" action="action.php" method="post">
            <!-- question 1 -->
            <div class="que">
                <p>Your Gender: </p>
                <input type="radio" name="gender" value="male" id="male">
                <label for="male">Male</label>
                <input type="radio" name="gender" value="female" id="female">
                <label for="female">Female</label>
                <br><br>
            </div>
            <!-- question 2 -->
            <div class="que">
                <p>Your Age: </p>
                <input type="radio" name="age" value="13-18">
                <label for="13-18">13-18</label>
                <input type="radio" name="age" value="18-30">
                <label for="18-30">18-30</label>
                <br>
                <input type="radio" name="age" value="30-40">
                <label for="30-40">30-40</label>
                <input type="radio" name="age" value="&gt 40">
                <label for="&gt 40">&gt 40</label>
                <br><br>
            </div>
            <!-- Question 3-->
            <div class="que">
                <p>What do you do? (you can choose more than 1)</p>
                <input type="checkbox" value="Student" id="option1" name="profession">
                <label for="option1">Student</label><br>
                <input type="checkbox" value="Frelancer" id="option2" name="profession">
                <label for="option2">Frelancer</label><br>
                <input type="checkbox" id="option3" value="Job Holder" name="profession">
                <label for="option3">Job Holder</label><br>
                <input type="checkbox" id="option4" value="Junior" name="profession">
                <label for="option4">Junior</label><br>
                <input type="checkbox" id="option5" value="Senior" name="profession">
                <label for="option5">Senior</label><br>
                <input type="checkbox" id="option6" value="Businessman/businesswomen" name="profession">
                <label for="option6">Businessman/businesswomen</label><br>
                <input type="checkbox" id="option7" value="other" name="profession">
                <label for="option7">Other</label>
                <br><br>
            </div>
            <!-- Question 4  -->
            <div class="que">
                <p>Do you shop Online </p>
                <input type="radio" name="shopOnline" value="yes"  id="yes">
                <label for="yes">Yes</label>
                <input type="radio" name="shopOnline" value="no" id="no">
                <label for="no">No</label>
                <br><br>
            </div>
            <div class="btn">
                <button type="submit">Save</button>
                <button><a class="page1-btn1" href="page2.html">Next</a></button>
            </div>
        </form>

    </div>
    <script src="script.js"></script>
</body>

</html>