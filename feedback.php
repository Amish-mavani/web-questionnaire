<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teaching Feedback Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        form {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        fieldset {
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
        }

        .bol{
            font-weight: bold;
        }


        label {
            /*font-weight: bold;
            */
        }
        input[type="radio"],
        input[type="checkbox"] {
            margin-right: 5px;
        }
        input[type="text"],
        select,
        textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        textarea {
            resize: vertical;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            float: right;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }

        button{
            background-color: #007bff;
            border-color: #007bff;
            float: right;
        }

    </style>
    <img src="https://www.iiitsurat.ac.in/assets/img/IIITS_EHG.png" height="auto" width="100%" />
    <script>
        //alert("hello");
    </script>
</head>
<body>
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost"; 
    $username = "root";
    $password = "";
    $dbname = "feedback"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    function sanitize($data) {
        $data = trim($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    function handleCheckbox($checkboxArray): string {
        if (is_array($checkboxArray)) {
            return implode(", ", $checkboxArray);
        } else {
            return $checkboxArray;
        }
    }

    $teacher = $_GET['teacher'];
    $warnings = [];

    if (!empty($_POST["quality"])) {
        $quality = sanitize($_POST["quality"]);
    }else{
        $quality =0;
        echo "<script> alert('Quality field is required.');</script>";
    }

    if (!empty($_POST["enjoyment"])) {
        $enjoyment = handleCheckbox($_POST["enjoyment"]);
    } else {
        $enjoyment=0;
        echo "<script>alert('Enjoyment field is required.');</script>";
    }
    
    if (!empty($_POST["improvements"])) {
        $improvements = handleCheckbox($_POST["improvements"]);
    } else {
        $improvements = 0;
        echo "<script>alert('Improvements field is required.');</script>";
    }

    if (!empty($_POST["explain_complex"])) {
        $explain_complex = sanitize($_POST["explain_complex"]);
    }else{
        $explain_complex =0;
        echo "<script> alert('explain field is required.');</script>";
    }

    //$enjoyment = handleCheckbox($_POST["enjoyment"]);
    //$improvements = handleCheckbox($_POST["improvements"]);
    //$explain_complex = sanitize($_POST["explain_complex"]);
    $engaging_style = sanitize($_POST["engaging_style"]);
    $teaching_methods = sanitize($_POST["teaching_methods"]);
    $accessibility = sanitize($_POST["accessibility"]);
    $encouragement = sanitize($_POST["encouragement"]);
    $grading_fairness = sanitize($_POST["grading_fairness"]);
    $feedback_helpfulness = sanitize($_POST["feedback_helpfulness"]);
    $expectations_clarity = sanitize($_POST["expectations_clarity"]);
    $time_management = sanitize($_POST["time_management"]);
    $respectfulness = sanitize($_POST["respectfulness"]);
    $inclusiveness = sanitize($_POST["inclusiveness"]);
    $recommendation = sanitize($_POST["recommendation"]);
    $additional_comments = sanitize($_POST["additional_comments"]);

        $sql = "INSERT INTO $teacher (quality, enjoyment, improvements, explain_complex, engaging_style, teaching_methods, accessibility, encouragement, grading_fairness, feedback_helpfulness, expectations_clarity, time_management, respectfulness, inclusiveness, recommendation, additional_comments)
            VALUES ('$quality', '$enjoyment', '$improvements', '$explain_complex', '$engaging_style', '$teaching_methods', '$accessibility', '$encouragement', '$grading_fairness', '$feedback_helpfulness', '$expectations_clarity', '$time_management', '$respectfulness', '$inclusiveness', '$recommendation', '$additional_comments')";

    if ($conn->query($sql) === TRUE) {
        echo "<script> alert(' Feedback submitted successfully');</script>";
        $conn->close();
        header("Location: teacher.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    $conn->close();
    }
    ?>

    
 <button><a href="teacher.php" class="btn-primary-back" >back</a></button>
    <h2>Teaching Feedback Form</h2>
    <form action="" method="post">
        <fieldset>
            <legend>General Feedback</legend><br>
            <label for="quality" class="bol">How would you rate the overall quality of teaching in this course?</label><br><br>
            <input type="radio" id="excellent" name="quality" value="5">
            <label for="excellent">Excellent</label><br>
            <input type="radio" id="good" name="quality" value="4">
            <label for="good">Good</label><br>
            <input type="radio" id="average" name="quality" value="3">
            <label for="average">Average</label><br>
            <input type="radio" id="below_average" name="quality" value="2">
            <label for="below_average">Below average</label><br>
            <input type="radio" id="poor" name="quality" value="1">
            <label for="poor">Poor</label><br><br>

            <label class="bol">What did you enjoy most about the teaching in this course?</label><br><br>
            <label><input type="checkbox" name="enjoyment" value="Teacher's knowledge and expertise"> Teacher's knowledge and expertise</label><br>
            <label><input type="checkbox" name="enjoyment" value="Clear explanations and examples"> Clear explanations and examples</label><br>
            <label><input type="checkbox" name="enjoyment" value="Interactive and engaging teaching style"> Interactive and engaging teaching style</label><br>
            <label><input type="checkbox" name="enjoyment" value="Fair and constructive feedback"> Fair and constructive feedback</label><br>
            <label><input type="checkbox" name="enjoyment" value="Other"> Other (please specify)</label><br>
            <input type="text" name="other_enjoyment" placeholder="Please specify"><br><br>

            <label class="bol">What improvements would you suggest for the teaching in this course?</label><br><br>
            <label><input type="checkbox" name="improvements" value="More engaging teaching methods"> More engaging teaching methods</label><br>
            <label><input type="checkbox" name="improvements" value="Clearer explanations of complex topics"> Clearer explanations of complex topics</label><br>
            <label><input type="checkbox" name="improvements" value="More timely and constructive feedback"> More timely and constructive feedback</label><br>
            <label><input type="checkbox" name="improvements" value="Better organization and pacing"> Better organization and pacing</label><br>
            <label><input type="checkbox" name="improvements" value="Other"> Other (please specify)</label><br>
            <input type="text" name="other_improvements" placeholder="Please specify"><br><br>
        </fieldset>

        <fieldset>
            <legend class="bol">Teaching Style</legend><br>
            <label for="explain_complex" class="bol">How well does the teacher explain complex concepts?</label><br><br>
            <input type="radio" id="very_clearly" name="explain_complex" value="5">
            <label for="very_clearly">Very clearly</label><br>
            <input type="radio" id="clearly" name="explain_complex" value="4">
            <label for="clearly">Clearly</label><br>
            <input type="radio" id="somewhat_clearly" name="explain_complex" value="3">
            <label for="somewhat_clearly">Somewhat clearly</label><br>
            <input type="radio" id="not_clearly" name="explain_complex" value="2">
            <label for="not_clearly">Not clearly</label><br><br>
            
            <label for="engaging_style" class="bol">How engaging is the teacher's teaching style?</label><br><br>
            <input type="radio" id="very_engaging" name="engaging_style" value="5">
            <label for="very_engaging">Very engaging</label><br>
            <input type="radio" id="engaging" name="engaging_style" value="4">
            <label for="engaging">Engaging</label><br>
            <input type="radio" id="somewhat_engaging" name="engaging_style" value="3">
            <label for="somewhat_engaging">Somewhat engaging</label><br>
            <input type="radio" id="not_engaging" name="engaging_style" value="2">
            <label for="not_engaging">Not engaging</label><br><br>
            
            <label for="teaching_methods" class="bol">Does the teacher use a variety of teaching methods (e.g., lectures, group work, hands-on activities)?</label><br><br>
            <input type="radio" id="always" name="teaching_methods" value="5">
            <label for="always">Always</label><br>
            <input type="radio" id="often" name="teaching_methods" value="4">
            <label for="often">Often</label><br>
            <input type="radio" id="sometimes" name="teaching_methods" value="3">
            <label for="sometimes">Sometimes</label><br>
            <input type="radio" id="rarely" name="teaching_methods" value="2">
            <label for="rarely">Rarely</label><br><br>
        </fieldset>

        <!-- Communication and Interaction -->
        <fieldset>
            <legend class="bol">Communication and Interaction</legend><br>
            <label for="accessibility" class="bol">How accessible is the teacher outside of class (e.g., office hours, email)?</label><br><br>
            <input type="radio" id="very_accessible" name="accessibility" value="5">
            <label for="very_accessible">Very accessible</label><br>
            <input type="radio" id="accessible" name="accessibility" value="4">
            <label for="accessible">Accessible</label><br>
            <input type="radio" id="somewhat_accessible" name="accessibility" value="3">
            <label for="somewhat_accessible">Somewhat accessible</label><br>
            <input type="radio" id="not_accessible" name="accessibility" value="2">
            <label for="not_accessible">Not accessible</label><br><br>
            
            <label for="encouragement" class="bol">How well does the teacher encourage questions and discussion during class?</label><br><br>
            <input type="radio" id="very_well" name="encouragement" value="5">
            <label for="very_well">Very well</label><br>
            <input type="radio" id="well" name="encouragement" value="4">
            <label for="well">Well</label><br>
            <input type="radio" id="somewhat_well" name="encouragement" value="3">
            <label for="somewhat_well">Somewhat well</label><br>
            <input type="radio" id="not_well" name="encouragement" value="2">
            <label for="not_well">Not well</label><br><br>
        </fieldset>

        <!-- Assessment and Feedback -->
        <fieldset>
            <legend class="bol">Assessment and Feedback</legend><br>
            <label for="grading_fairness" class="bol">How fair is the teacher's grading?</label><br><br>
            <input type="radio" id="very_fair" name="grading_fairness" value="5">
            <label for="very_fair">Very fair</label><br>
            <input type="radio" id="fair" name="grading_fairness" value="4">
            <label for="fair">Fair</label><br>
            <input type="radio" id="somewhat_fair" name="grading_fairness" value="3">
            <label for="somewhat_fair">Somewhat fair</label><br>
            <input type="radio" id="not_fair" name="grading_fairness" value="2">
            <label for="not_fair">Not fair</label><br><br>
            
            <label for="feedback_helpfulness" class="bol">How helpful is the teacher's feedback on assignments and exams?</label><br><br>
            <input type="radio" id="very_helpful_feedback" name="feedback_helpfulness" value="5">
            <label for="very_helpful_feedback">Very helpful</label><br>
            <input type="radio" id="helpful_feedback" name="feedback_helpfulness" value="4">
            <label for="helpful_feedback">Helpful</label><br>
            <input type="radio" id="somewhat_helpful_feedback" name="feedback_helpfulness" value="3">
            <label for="somewhat_helpful_feedback">Somewhat helpful</label><br>
            <input type="radio" id="not_helpful_feedback" name="feedback_helpfulness" value="2">
            <label for="not_helpful_feedback">Not helpful</label><br><br>
        </fieldset>

        <!-- Course Management -->
        <fieldset>
            <legend class="bol">Course Management</legend><br>
            <label for="expectations_clarity" class="bol">How clear are the teacher's expectations for assignments and exams?</label><br><br>
            <input type="radio" id="very_clear_expectations" name="expectations_clarity" value="5">
            <label for="very_clear_expectations">Very clear</label><br>
            <input type="radio" id="clear_expectations" name="expectations_clarity" value="4">
            <label for="clear_expectations">Clear</label><br>
            <input type="radio" id="somewhat_clear_expectations" name="expectations_clarity" value="3">
            <label for="somewhat_clear_expectations">Somewhat clear</label><br>
            <input type="radio" id="not_clear_expectations" name="expectations_clarity" value="2">
            <label for="not_clear_expectations">Not clear</label><br><br>
            
            <label for="time_management" class="bol">How well does the teacher manage class time and pacing?</label><br><br>
            <input type="radio" id="very_well_time_management" name="time_management" value="5">
            <label for="very_well_time_management">Very well</label><br>
            <input type="radio" id="well_time_management" name="time_management" value="4">
            <label for="well_time_management">Well</label><br>
            <input type="radio" id="somewhat_well_time_management" name="time_management" value="3">
            <label for="somewhat_well_time_management">Somewhat well</label><br>
            <input type="radio" id="not_well_time_management" name="time_management" value="2">
            <label for="not_well_time_management">Not well</label><br><br>
        </fieldset>

        <!-- Classroom Environment -->
        <fieldset>
            <legend class="bol">Classroom Environment</legend><br>
            <label for="respectfulness" class="bol">How respectful is the teacher towards students?</label><br><br>
            <input type="radio" id="very_respectful" name="respectfulness" value="5">
            <label for="very_respectful">Very respectful</label><br>
            <input type="radio" id="respectful" name="respectfulness" value="4">
            <label for="respectful">Respectful</label><br>
            <input type="radio" id="somewhat_respectful" name="respectfulness" value="3">
            <label for="somewhat_respectful">Somewhat respectful</label><br>
            <input type="radio" id="not_respectful" name="respectfulness" value="2">
            <label for="not_respectful">Not respectful</label><br><br>
            
            <label for="inclusiveness" class="bol">How inclusive is the teacher's approach to teaching?</label><br><br>
            <input type="radio" id="very_inclusive" name="inclusiveness" value="5">
            <label for="very_inclusive">Very inclusive</label><br>
            <input type="radio" id="inclusive" name="inclusiveness" value="4">
            <label for="inclusive">Inclusive</label><br>
            <input type="radio" id="somewhat_inclusive" name="inclusiveness" value="3">
            <label for="somewhat_inclusive">Somewhat inclusive</label><br>
            <input type="radio" id="not_inclusive" name="inclusiveness" value="2">
            <label for="not_inclusive">Not inclusive</label><br><br>
        </fieldset>

        <!-- Overall Satisfaction -->
        <fieldset>
            <legend class="bol">Overall Satisfaction</legend><br>
            <label for="recommendation" class="bol">Would you recommend this teacher to other students?</label><br><br>
            <input type="radio" id="definitely_recommend" name="recommendation" value="5">
            <label for="definitely_recommend">Definitely</label><br>
            <input type="radio" id="probably_recommend" name="recommendation" value="4">
            <label for="probably_recommend">Probably</label><br>
            <input type="radio" id="maybe_recommend" name="recommendation" value="3">
            <label for="maybe_recommend">Maybe</label><br>
            <input type="radio" id="probably_not_recommend" name="recommendation" value="2">
            <label for="probably_not_recommend">Probably not</label><br>
            <input type="radio" id="definitely_not_recommend" name="recommendation" value="1">
            <label for="definitely_not_recommend">Definitely not</label><br><br>
        </fieldset>

        <fieldset>
            <legend class="bol">Additional Comments</legend><br> 
            <label for="additional_comments" class="bol">Please provide any additional comments or feedback about the teacher's performance:</label><br><br>
            <textarea id="additional_comments" name="additional_comments" rows="4" placeholder="for student to write in their responses)"></textarea>
        </fieldset>

        <input type="submit" value="Submit">
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>
</html>
