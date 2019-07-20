<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./style2.css">
    <link href="https://fonts.googleapis.com/css?family=B612|Karla:700|Muli|Nunito|Open+Sans&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
    </style>
</head>

<body>
    <?php
    function booleanFunc($val)
    {
        if ($val == 'true') {
            return " <i class = 'fa fa-check'></i>";
        }
        return " <i class = 'fa fa-times'></i>";
    }
    if (isset($_GET["code"]) && isset($_GET["desc"]) && isset($_GET["title"]) && isset($_GET["exams"]) && isset($_GET["tutorials"]) && isset($_GET["semester"]) && isset($_GET["su"]) && isset($_GET["projects"]) && isset($_GET["webcasts"])) {
        echo '<title>' . $_GET["code"] . ' - ' . $_GET["title"] . '</title>';
        echo '<div style="font-size: 30px; color:orangered; margin-left: 20px; margin-top:20px" class = "header">' . '<b>' . $_GET["code"] . ' - ' . $_GET["title"] . '</b>' . '</div>';
        echo '<button class="button" style = "float: right; margin-right: 20px" onclick="window.location.href = &quot;index.html&quot;">' . "<span>Back To All Modules</span></button>";
        echo '<div style="color: rgb(104, 104, 104); margin-left: 20px" class = "depSem">' . $_GET["depmt"] . " | Semester " . $_GET["semester"] . '</div>';
        echo '<br><div style = "margin-left: 20px; font-size: 14px" class = "emojiParts">' . "<span style = 'border-radius: 25px; background: lightgreen; padding: 10px'>" . "	<i class = 'fa fa-video'></i> Webcasts " .  booleanFunc($_GET["webcasts"]) . "</span>";
        echo "<span style = 'border-radius: 25px; background: lightblue; padding: 10px'>" . "   <i class = 'fa fa-book'></i> Exams " .  booleanFunc($_GET["exams"]) . "</span>";
        echo "<span style = 'border-radius: 25px; background: lightsalmon; padding: 10px'>" . "   <i class = 'fa fa-comments'></i> Tutorials " . booleanFunc($_GET["tutorials"]) . "</span>";
        echo "<span style = 'border-radius: 25px; background: lightpink; padding: 10px'>" . "   <i class = 'fa fa-users'></i> Group Projects " . booleanFunc($_GET["projects"]) . "</span>";
        echo "<span style = 'border-radius: 25px; background: palegoldenrod; padding: 10px'>" . "   <i class = 'far fa-smile'></i> Pass/Fail Option " . booleanFunc($_GET["su"]) . '</span></div>';
        echo '<br><div style = "margin-left: 20px; margin-right:20px; font-size: 15px;">' . $_GET["desc"] . '</div>';
    }
    ?>
    <form method="post">
        <div style="text-align: center">
            <hr />
            <h3 style="color: navy">What faculty are you in?<span style="color:red"> *</span></h3>
            <label> Faculty : </label>
            <select name="faculty">
                <option>---Please select an option---</option>
                <option value="Arts and Social Sciences">Arts and Social Sciences</option>
                <option value="Business">Business</option>
                <option value="Computing">Computing</option>
                <option value="Design and Environment">Design and Environment</option>
                <option value="Engineering">Engineering</option>
                <option value="Music">Music</option>
                <option value="Nursing">Nursing</option>
                <option value="Science">Science</option>
            </select>
            <hr />
            <h3 style="color: navy">Is the workload manageable?<span style="color:red"> *</span></h3>
            <h5>1 - Not manageable at all ; 5 - Very manageable</h5>
            <label> Please select an option : </label>
            <label class="radio-inline">
                <input type="radio" value="1" name="manageable">1
            </label>
            <label class="radio-inline">
                <input type="radio" value="2" name="manageable">2
            </label>
            <label class="radio-inline">
                <input type="radio" value='3' name="manageable">3
            </label>
            <label class="radio-inline">
                <input type="radio" value='4' name="manageable">4
            </label>
            <label class="radio-inline">
                <input type="radio" value='5' name="manageable">5
            </label>
            <hr />

            <h3 style="color: navy">Is the module's content easy?<span style="color:red"> *</span></h3>
            <h5>1 - Very difficult ; 5 - Very easy</h5>
            <label> Please select an option : </label>
            <label class="radio-inline">
                <input type="radio" value="1" name="easy">1
            </label>
            <label class="radio-inline">
                <input type="radio" value="2" name="easy">2
            </label>
            <label class="radio-inline">
                <input type="radio" value='3' name="easy">3
            </label>
            <label class="radio-inline">
                <input type="radio" value='4' name="easy">4
            </label>
            <label class="radio-inline">
                <input type="radio" value='5' name="easy">5
            </label>
            <hr />

            <h3 style="color: navy">Will you recommend this module to your friends?<span style="color:red"> *</span></h3>
            <h5>1 - Will not recommend ; 5 - Will definitely recommend!</h5>
            <label> Please select an option : </label>
            <label class="radio-inline">
                <input type="radio" value="1" name="recommend">1
            </label>
            <label class="radio-inline">
                <input type="radio" value="2" name="recommend">2
            </label>
            <label class="radio-inline">
                <input type="radio" value='3' name="recommend">3
            </label>
            <label class="radio-inline">
                <input type="radio" value='4' name="recommend">4
            </label>
            <label class="radio-inline">
                <input type="radio" value='5' name="recommend">5
            </label>
            <hr />

            <h3 style="color: navy">Did you achieve your expected grade?<span style="color:red"> *</span></h3>
            <label> Please select an option : </label>
            <select name="expected_grade">
                <option>---Please select an option---</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
            <hr />
            <h3 style="color: navy">Comments</h3>
            <br>
            <textarea class="form-control" rows="5" name="comments" placeholder="Write something here... You can include the name of your lecturer/tutor and the sem that you took this module in."></textarea><br><br>
            <button type="submit" name="submit" style="margin-bottom: 30px;">Submit</button>
        </div>
    </form>
    <?php
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "nus";
    $modCode = $_GET["code"];
    $index = 1;

    // Create connection
    $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

    if (isset($_POST['submit'])) {
        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                . mysqli_connect_error());
        } else {
            if ($_POST['faculty'] == "---Please select an option---" || !isset($_POST['manageable']) || !isset($_POST['easy']) || !isset($_POST['recommend']) || $_POST['expected_grade'] == "---Please select an option---") {
                echo "<script> alert('Please fill in all required fields.'); </script>";
            } else {
                $faculty = $_POST['faculty'];
                $manageable = $_POST['manageable'];
                $easy = $_POST['easy'];
                $recommend = $_POST['recommend'];
                $expected_grade = $_POST['expected_grade'];
                date_default_timezone_set('Asia/Singapore');
                $postingDate = date("Y-m-d");
                $postingTime = date("H:i:s");
                $comments = addslashes($_POST['comments']); //addslashes helps to add escape backslashes to single quotes/double quotes/NULL/backslash itself in the comments
                $sql = "INSERT INTO data (module, upvote, downvote, postingDate, postingTime, faculty, manageable, easy, recommend, expected_grade, comments) 
                    VALUES ('$modCode', 0 , 0, '$postingDate', '$postingTime' , '$faculty','$manageable','$easy','$recommend','$expected_grade','$comments')";
                if ($conn->query($sql)) {
                    echo "<script> alert('Thank you for your comment!'); </script>";
                } else {
                    echo "Error: " . $sql . " 
                    " . $conn->error;
                }
            }
        }
    }

    $result = mysqli_query($conn, "SELECT * FROM `data` WHERE `module` ='" . $modCode . "'");
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class = 'well' style = 'margin-left: 20px; margin-right: 20px;'>";
        echo "<h5>" . "Comment " . $index . ": Posted on " . $row['postingDate'] . "</h5>";
        echo "<div>";
        echo "<div>" . '<span style = "color: navy;">Faculty: </span>' . $row['faculty'] . "</div>";
        echo "<div>" . '<h5 style = "color: navy;">Is the workload manageable? </h5>';
        echo "<span style = 'font-size: 20px;color: gold;'>" . str_repeat("&#9733", $row['manageable']) . "</span>" . "<span style = 'font-size: 20px;color: lightgrey;'>" . str_repeat("&#9733", 5 - $row['manageable']) . "</span></div>";
        echo "<div>" . '<h5 style = "color: navy;">Is the module\'s content easy? </h5>';
        echo "<span style = 'font-size: 20px;color: gold;'>" . str_repeat("&#9733", $row['easy']) . "</span>" . "<span style = 'font-size: 20px;color: lightgrey;'>" .  str_repeat("&#9733", 5 - $row['easy']) . "</span></div>";
        echo "<div>" . '<h5 style = "color: navy;">Will you recommend this module to your friends? </h5>';
        echo "<span style = 'font-size: 20px;color: gold;'>" . str_repeat("&#9733", $row['recommend']) . "</span>" . "<span style = 'font-size: 20px;color: lightgrey;'>" .  str_repeat("&#9733", 5 - $row['recommend']) . "</span></div>";
        echo "<div>" . '<span style = "color: navy;">Did you achieve your expected grade? </span>';
        echo ($row['expected_grade'] == "Yes" ? "&#10003" : "&#10005") . "</div>";
        echo ($row['comments'] != "" ? "<br><div class = 'well'>" . '<h5 style = "color: navy;">' . "Comments:" . '</h5>' . "<span style = 'white-space: pre-wrap;'>" . $row['comments'] . "</span>" . "</pre>" .  "</div>" : "");
        echo "</div><br>";
        echo "<form method = 'POST'>" . $row['upvote'] . ' ' . '<button name = "upvote" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Upvote" style = "border:none; color: green;padding-top: 3px;" id = "upvote" value = "' . $row['module'] . '"' . '><i class = "fa fa-chevron-up"></i></button>';
        echo " " . $row['downvote'] . " "  . '<button class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Downvote" style = "border:none; color: red;padding-top: 3px;" id = "downvote"><i class = "fa fa-chevron-down"></i></button>';
        echo "</div>";
        $index++;
        if (isset($_POST['upvote'])) {
            $sql2 = "UPDATE `data` SET `upvote`= `upvote`+1 WHERE `module` ='" . $_POST['upvote'] . "'";
            if ($conn->query($sql2)) {
                unset($_POST['upvote']);
            } else {
                echo "Error: " . $sql2 . " 
                        " . $conn->error;
            }
        }
    }

    $conn->close();
    ?>
</body>
<!--<script src="./script2.js"></script>
<script src="bundle.js"></script>-->

</html>
