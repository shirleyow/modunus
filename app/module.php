<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="./style2.css">
    <link href="https://fonts.googleapis.com/css?family=B612|Karla:700|Muli|Nunito|Open+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa|Maven+Pro&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', 'Open Sans', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Helvetica Neue', sans-serif;
            padding-top: 50px;
        }

        .star {
            font-size: 15px;
        }

        .navbar {
            background-color: rgb(243, 241, 241);
            background-image: none;
            border: none;
        }

        .navbar .navbar-brand {
            color: lightseagreen;
        }

        .navbar .navbar-brand:hover {
            color: rgb(5, 156, 156);
        }

        #myBtn:hover,
        #myBtn2:hover {
            color: lightslategray;
            cursor: pointer;
        }

        .header3 {
            font-size: 24px;
        }

        #refreshbtn {
            cursor: pointer;
        }

        #details,
        #statistics,
        #review {
            padding-top: 4rem;
            margin-top: -4rem;
        }

        #reviews {
            padding-top: 5rem;
            margin-top: -5rem;
        }

        .emojiParts {
            font-size: 14px;
        }

        .descAndLink {
            font-size: 15px;
        }

        .header {
            font-size: 30px;
        }

        @media screen and (max-width: 1207px) {

            body,
            .star {
                font-size: 25px;
            }

            .fa.fa-chevron-left.controls,
            .fa.fa-chevron-right.controls {
                font-size: 30px;
            }

            .fa.fa-chevron-left.controls {
                margin-right: 10px;
            }

            .col-xs-6.col-md-4.well {
                width: 50%;
                margin-bottom: 0;
            }

            #review {
                margin-top: 380px;
            }

            .emojiParts {
                font-size: 18px;
            }

            .depSem {
                font-size: 20px;
            }

            .descAndLink {
                font-size: 25px;
            }

            .header {
                font-size: 35px;
            }

            .header3,
            h3 {
                font-size: 34px;
            }

            h5,
            .fac {
                font-size: 23px;
            }

            li a {
                font-size: 18px;
            }

            .headers {
                font-size: 20px;
            }
        }
    </style>
</head>

<body data-spy="scroll" data-target=".navbar">
    <nav class='navbar navbar-inverse navbar-fixed-top'>
        <a class='navbar-brand' href='index.php'><span style="font-family: 'Maven Pro', 'Comfortaa'; font-size: 25px">moduNUS</a>
        <ul class="nav navbar-nav">
            <li><a id="myBtn" data-toggle="modal" data-target="#myModal">About</a></li>
            <li><a id="myBtn2" data-toggle="modal" data-target="#modalContactForm">Report Bug</a></li>
            <li><a id="navd" href="#details">Details</a></li>
            <li><a id="navstats" href="#statistics">Statistics</a></li>
            <li><a id="navrev" href="#review">Review</a></li>
        </ul>
    </nav>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">About</h4>
                </div>
                <div class="modal-body">
                    <p><b>Hello, welcome to moduNUS!</b> <i class="far fa-smile-wink"></i></p>
                    <p>moduNUS aims to help NUS students decide on which General Education Modules (GEMs) to take by providing
                        additional information such as the availability of webcasts for each module. On top of that, moduNUS
                        provides
                        statistics for each module
                        based on reviews given by users on our website, to help other students planning to take the module gain a
                        deeper
                        understanding of what
                        they are in for.</p>
                    <p>However, the details that we found for each module (such as the presence of webcasts/group projects) might
                        not
                        always
                        be accurate as they are based on past year iterations of the module, and such details might change overtime.
                        In
                        addition, some GE modules
                        are new this year, and hence we are unable to tell if the module would include group projects in their
                        grading
                        scheme. For these GEMs, they
                        are marked by default to not include group projects. These, however, are in the minority of the modules we
                        present here.</p>
                    <p>If you would like to contribute to moduNUS to help fellow NUS students, you can leave an anonymous review
                        under
                        a module you've taken before, or report any errors
                        using the tab in the navigation bar should you spot any.</p>
                    <p>Thank you and we hope this will be helpful! :)</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="mailto:modunusadm@gmail.com" method="post" enctype="text/plain">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Write to us</h4>
                    </div>
                    <div class="modal-body mx-3">
                        <div class="md-form mb-5">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="form34" name="Name" class="form-control validate" required data-bv-notempty-message="Required">
                            <label data-error="wrong" data-success="right" for="form34">Your name</label>
                        </div>

                        <div class="md-form mb-5">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="email" id="form29" name="Email Address" class="form-control validate" required data-bv-notempty-message="Required">
                            <label data-error="wrong" data-success="right" for="form29">Your email</label>
                        </div>

                        <div class="md-form mb-5">
                            <i class="fas fa-tag prefix grey-text"></i>
                            <input type="text" id="form32" name="Subject" class="form-control validate" required data-bv-notempty-message="Required">
                            <label data-error="wrong" data-success="right" for="form32">Your subject</label>
                        </div>

                        <div class="md-form">
                            <i class="fa fa-pencil-alt prefix grey-text"></i>
                            <textarea type="text" id="form8" name="Message" class="md-textarea form-control" rows="4" required data-bv-notempty-message="Required"></textarea>
                            <label data-error="wrong" data-success="right" for="form8">Your message</label>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-center">
                        <button class="btn btn-unique" type="submit">Send <i class="fa fa-paper-plane"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="details">
        <?php
        function booleanFunc($val)
        {
            if ($val == 'true') {
                return " <i class = 'fa fa-check'></i>";
            }
            return " <i class = 'fa fa-times'></i>";
        }
        if (isset($_GET["code"]) && isset($_GET["desc"]) && isset($_GET["title"]) && isset($_GET["exams"]) && isset($_GET["tutorials"]) && isset($_GET["semester"]) && isset($_GET["su"]) && isset($_GET["projects"]) && isset($_GET["webcasts"])) {
            echo  '<title>' . $_GET["code"] . ' - ' . $_GET["title"] . '</title>';
            echo '<div style="color:orangered; margin-left: 20px; margin-top:20px" class = "header">' . '<b>' . $_GET["code"] . ' - ' . $_GET["title"] . '</b>';
            echo '<button class="button" style = "float: right; margin-right: 20px" onclick="window.location.href = &quot;index.php&quot;">' . "<span>Back To All Modules</span></button></div>";
            echo '<div style="color: rgb(104, 104, 104); margin-left: 20px" class = "depSem">' . $_GET["depmt"] . " | Semester " . $_GET["semester"] . '</div>';
            echo '<br><div style = "margin-left: 20px;" class = "emojiParts">' . "<span style = 'border-radius: 25px; background: lightgreen; padding: 10px; display: inline-block'>" . "	<i class = 'fa fa-video'></i> Webcasts " .  booleanFunc($_GET["webcasts"]) . "</span>";
            echo "<span style = 'border-radius: 25px; background: lightblue; padding: 10px; display: inline-block'>" . "   <i class = 'fa fa-book'></i> Exams " .  booleanFunc($_GET["exams"]) . "</span>";
            echo "<span style = 'border-radius: 25px; background: lightsalmon; padding: 10px; display: inline-block'>" . "   <i class = 'fa fa-comments'></i> Tutorials " . booleanFunc($_GET["tutorials"]) . "</span>";
            echo "<span style = 'border-radius: 25px; background: lightpink; padding: 10px; display: inline-block'>" . "   <i class = 'fa fa-users'></i> Group Projects " . booleanFunc($_GET["projects"]) . "</span>";
            echo "<span style = 'border-radius: 25px; background: palegoldenrod; padding: 10px; display: inline-block'>" . "   <i class = 'far fa-smile'></i> Pass/Fail Option " . booleanFunc($_GET["su"]) . '</span></div>';
            echo '<br><div style = "margin-left: 20px; margin-right:20px;" class = "descAndLink">' . $_GET["desc"] . '</div>';
            echo '<br><div style = "margin-left: 20px; margin-right:20px;" class = "descAndLink">' . '<a href="https://nusmods.com/modules/' . $_GET['code'] . '/' . $_GET["title"] . '"' . 'target="_blank">NUSMods</a> /
        <a href="https://ivle.nus.edu.sg/v1/lms/public/list_course_public.aspx?code=' . $_GET['code'] . '&title=&lecName=&acadyear=&semester=&ModTitleExact=Y&LecNameExact=N"
          target="_blank">IVLE</a> / <a href="https://www.google.com/search?q=' . $_GET["code"] . '"' .
                'target="_blank">Google</a>' . '</div>';
        }
        ?>

    </div>
    <div id="statistics">
        <hr />
        <span class="header3" style="color: navy; text-align: left; padding-left: 10px;">Key Statistics </span><i class="fa fa-sync-alt" id="refreshbtn" title="Please refresh to see updated statistics."></i><span id="updated"></span>
        <div id="container" style="width:100%; height: 350px;">
            <?php
            $host = "localhost";
            $dbusername = "root";
            $dbpassword = "";
            $dbname = "nus";
            $modCode = $_GET["code"];
            $index = 1;

            // Create connection
            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
            $query1 = "SELECT faculty, count(*) as Count FROM data WHERE module ='$modCode' GROUP BY faculty";
            $result1 = mysqli_query($conn, $query1);
            ?>
            <div class="col-xs-6 well" id="left" style="height: 100%; margin-bottom: 0;">

                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart1);

                    var chart1;

                    function drawChart1() {
                        var data1 = google.visualization.arrayToDataTable([
                            ['faculty', 'Count'],
                            <?php
                            while ($row = mysqli_fetch_array($result1)) {
                                echo "['" . $row["faculty"] . "', " . $row["Count"] . "],";
                            }
                            ?>
                        ]);
                        var options1 = {
                            // is3D:true,  
                            width: $(left).width(),
                            height: $(left).height(),
                            backgroundColor: {
                                fill: 'transparent'
                            }
                        };
                        chart1 = new google.visualization.PieChart(document.getElementById('piechart'));
                        chart1.draw(data1, options1);
                    }
                </script>
                <h5 class="headers" style="color: black; text-align: center">Percentage of Students by Faculty</h5>
                <div id="piechart"></div>
            </div>

            <div class="col-xs-6 well" id="right" style="height: 100%; margin-bottom: 0">
                <?php
                // Create connection
                $query2 = "SELECT expected_grade, count(*) as Count FROM data WHERE module ='$modCode' GROUP BY expected_grade";
                $result2 = mysqli_query($conn, $query2);
                ?>

                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['corechart']
                    });
                    google.charts.setOnLoadCallback(drawChart2);

                    var chart2;

                    function drawChart2() {
                        var data2 = google.visualization.arrayToDataTable([
                            ['expected_grade', 'Count'],
                            <?php
                            while ($row = mysqli_fetch_array($result2)) {
                                echo "['" . $row["expected_grade"] . "', " . $row["Count"] . "],";
                            }
                            ?>
                        ]);
                        var options2 = {
                            // is3D:true,  
                            colors: ['#DD4477', '#32CD32'],
                            width: $(left).width(),
                            height: $(left).height(),
                            backgroundColor: {
                                fill: 'transparent'
                            }

                        };
                        chart2 = new google.visualization.PieChart(document.getElementById('piechart1'));
                        chart2.draw(data2, options2);
                    }
                </script>
                <h5 class="headers" style="color: black; text-align:center">Percentage of Students who S/U-ed this module</h5>
                <div id="piechart1"></div>
            </div>
        </div>
        <div id="container2" style="margin-top: 0; width:100%; height: 300px">
            <div class="col-xs-6 col-md-4 well" id="left2">
                <?php
                $query3 = "SELECT counting.count as manageable, count(t1.manageable) as Count FROM 
        counting 
            LEFT JOIN 
        (SELECT * FROM data WHERE module ='$modCode') AS t1 ON counting.Count=t1.manageable
            GROUP BY counting.count";
                $result3 = mysqli_query($conn, $query3);
                ?>

                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['bar']
                    });
                    google.charts.setOnLoadCallback(drawStuff);

                    var chart3;

                    function drawStuff() {
                        var data3 = new google.visualization.arrayToDataTable([
                            ['manageable', 'Count'],
                            <?php
                            $sum = 0;
                            $count = 0;
                            while ($row = mysqli_fetch_array($result3)) {
                                $sum += ($row["manageable"] * $row["Count"]);
                                $count += $row["Count"];
                                echo "['" . $row["manageable"] . "', " . $row["Count"] . "],";
                            }
                            if ($sum != 0 && $count != 0) {
                                $average = $sum / $count;
                            }
                            ?>
                        ]);

                        var options3 = {
                            width: $(left2).width(),
                            height: $(container2).height(),
                            backgroundColor: {
                                fill: 'transparent'
                            },
                            sliceVisibilityThreshold: 0,
                            legend: {
                                position: 'none'
                            },
                            colors: ['#008080'],
                            axes: {
                                x: {
                                    0: {
                                        side: 'Count',
                                        label: '1 - Not manageable at all ; 5 - Very manageable',
                                        fontsize: 15
                                    } // Top x-axis.
                                }
                            },
                            bar: {
                                groupWidth: "90%"
                            }
                        };

                        chart3 = new google.charts.Bar(document.getElementById('top_x_div'));
                        // Convert the Classic options to Material options.
                        chart3.draw(data3, google.charts.Bar.convertOptions(options3));
                    };
                </script>
                <h5 class="headers" style="color: black; text-align: center">Is the workload manageable?</h5>
                <div id="top_x_div"></div>
                <br>
                <span id="chart3avg">Average: <span style="color: maroon"><?php echo (isset($average) ? round($average, 2) : "NIL"); ?></span> out of 5</span>
            </div>

            <div class="col-xs-6 col-md-4 well" id="middle">
                <?php
                $query4 = "SELECT counting.count as easy, count(t1.easy) as Count FROM 
        counting 
            LEFT JOIN 
        (SELECT * FROM data WHERE module ='$modCode') AS t1 ON counting.Count=t1.easy
            GROUP BY counting.count";
                $result4 = mysqli_query($conn, $query4);
                ?>

                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['bar']
                    });
                    google.charts.setOnLoadCallback(drawStuff1);

                    var chart4;

                    function drawStuff1() {
                        var data4 = new google.visualization.arrayToDataTable([
                            ['easy', 'Count'],
                            <?php
                            $sum = 0;
                            $count = 0;
                            while ($row = mysqli_fetch_array($result4)) {
                                $sum += ($row["easy"] * $row["Count"]);
                                $count += $row["Count"];
                                echo "['" . $row["easy"] . "', " . $row["Count"] . "],";
                            }
                            if ($sum != 0 && $count != 0) {
                                $average = $sum / $count;
                            }
                            ?>
                        ]);

                        var options4 = {
                            width: $(left2).width(),
                            height: $(container2).height(),
                            backgroundColor: {
                                fill: 'transparent'
                            },
                            sliceVisibilityThreshold: 0,
                            legend: {
                                position: 'none'
                            },
                            colors: ['#D2691E'],
                            axes: {
                                x: {
                                    0: {
                                        side: 'Count',
                                        label: '1 - Very difficult ; 5 - Very easy'
                                    } // Top x-axis.
                                }
                            },
                            bar: {
                                groupWidth: "90%"
                            }
                        };

                        chart4 = new google.charts.Bar(document.getElementById('top_x_div1'));
                        // Convert the Classic options to Material options.
                        chart4.draw(data4, google.charts.Bar.convertOptions(options4));
                    };
                </script>
                <h5 class="headers" style="color: black; text-align:center">Is the module's content easy?</h5>
                <div id="top_x_div1"></div>
                <br>
                <span id="chart4avg">Average: <span style="color: maroon"><?php echo (isset($average) ? round($average, 2) : "NIL"); ?></span> out of 5</span>
            </div>

            <div class="col-xs-6 col-md-4 well" id="right">
                <?php
                $query5 = "SELECT counting.count as recommend, count(t1.recommend) as Count FROM 
        counting 
            LEFT JOIN 
        (SELECT * FROM data WHERE module ='$modCode') AS t1 ON counting.Count=t1.recommend
            GROUP BY counting.count";
                // will show 0 count in the table as well 
                $result5 = mysqli_query($conn, $query5);
                ?>
                <script type="text/javascript">
                    google.charts.load('current', {
                        'packages': ['bar']
                    });
                    google.charts.setOnLoadCallback(drawStuff2);

                    var chart5;

                    function drawStuff2() {
                        var data5 = new google.visualization.arrayToDataTable([
                            ['recommend', 'Count'],
                            <?php
                            $sum = 0;
                            $count = 0;
                            while ($row = mysqli_fetch_array($result5)) {
                                $sum += ($row["recommend"] * $row["Count"]);
                                $count += $row["Count"];
                                echo "['" . $row["recommend"] . "', " . $row["Count"] . "],";
                            }
                            if ($sum != 0 && $count != 0) {
                                $average = $sum / $count;
                            }
                            ?>
                        ]);

                        var options5 = {
                            width: $(left2).width(),
                            height: $(container2).height(),
                            backgroundColor: {
                                fill: 'transparent'
                            },
                            sliceVisibilityThreshold: 0,
                            legend: {
                                position: 'none'
                            },
                            colors: ['#A52A2A'],
                            axes: {
                                x: {
                                    0: {
                                        side: 'bottom',
                                        label: '1 - Will not recommend ; 5 - Will definitely recommend!'
                                    } // Top x-axis.
                                }
                            },
                            bar: {
                                groupWidth: "90%"
                            }
                        };

                        chart5 = new google.charts.Bar(document.getElementById('top_x_div2'));
                        // Convert the Classic options to Material options.
                        chart5.draw(data5, google.charts.Bar.convertOptions(options5));
                    };
                </script>
                <h5 class="headers" style="color: black; text-align:center">Will you recommend this module to your friends?</h5>
                <div id="top_x_div2"></div>
                <br>
                <span id="chart5avg">Average: <span style="color: maroon"><?php echo (isset($average) ? round($average, 2) : "NIL"); ?></span> out of 5</span>
            </div>
        </div>
        <br><br><br><br><br><br>
    </div>
    <div id="review">
        <hr>
        <?php
        function getUserIpAddr()
        {
            if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                //ip from share internet
                $ip = $_SERVER['HTTP_CLIENT_IP'];
            } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                //ip pass from proxy
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
            } else {
                $ip = $_SERVER['REMOTE_ADDR'];
            }
            return $ip;
        }

        $query = "SELECT COUNT(*) FROM data WHERE ip_add = '" . getUserIpAddr() . "' AND `module` ='" . $modCode . "'";
        $res = mysqli_query($conn, $query);
        $new = false;
        while ($row = mysqli_fetch_row($res)) {
            if ($row[0] > 0) {
                $new = true;
            }
        }
        ?>
        <div id="editF" style="display: none">
            <?php
            if (isset($_POST['faculty']) && isset($_POST['manageable']) && isset($_POST['easy']) && isset($_POST['recommend']) && isset($_POST['expected_grade'])) {
                $fac = $_POST['faculty'];
                $man = $_POST['manageable'];
                $eas = $_POST['easy'];
                $rec = $_POST['recommend'];
                $exp = $_POST['expected_grade'];
                $com = $_POST['comments'];
            }

            $query = "SELECT * FROM data WHERE ip_add = '" . getUserIpAddr() . "' AND `module` ='" . $modCode . "'";
            $res = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_row($res)) {
                $fac = $row[4];
                $man = $row[5];
                $eas = $row[6];
                $rec = $row[7];
                $exp = $row[8];
                $com = $row[9];
            }

            if (isset($_POST['efaculty']) && isset($_POST['emanageable']) && isset($_POST['eeasy']) && isset($_POST['erecommend']) && isset($_POST['eexpected_grade'])) {
                $fac = $_POST['efaculty'];
                $man = $_POST['emanageable'];
                $eas = $_POST['eeasy'];
                $rec = $_POST['erecommend'];
                $exp = $_POST['eexpected_grade'];
                $com = $_POST['ecomments'];
            }

            ?>
            <h3 style="color: navy; text-align: left; padding-left: 10px;">Edit Your Review</h3>
            <form method="post">
                <div class="tab" style="text-align: center">
                    <h3 style="color: green;"><i class='fa fa-school' style="color: black"></i> What faculty are you in?<span style="color:red"> *</span></h3>
                    <?php
                    echo '<label> Faculty : </label>
                <select name="efaculty">
                    <option>---Please select an option---</option>
                    <option value="Arts and Social Sciences" ' . ($fac == 'Arts and Social Sciences' ? 'selected' : '') . '>Arts and Social Sciences</option>
                    <option value="Business" ' . ($fac == 'Business' ? 'selected' : '') . '>Business</option>
                    <option value="Computing" ' . ($fac == 'Computing' ? 'selected' : '') . '>Computing</option>
                    <option value="Design and Environment" ' . ($fac == 'Design and Environment' ? 'selected' : '') . '>Design and Environment</option>
                    <option value="Engineering" ' . ($fac == 'Engineering' ? 'selected' : '') . '>Engineering</option>
                    <option value="Music" ' . ($fac == 'Music' ? 'selected' : '') . '>Music</option>
                    <option value="Nursing" ' . ($fac == 'Nursing' ? 'selected' : '') . '>Nursing</option>
                    <option value="Science" ' . ($fac == 'Science' ? 'selected' : '') . '>Science</option>
                </select>'
                    ?>
                </div>

                <div class="tab" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-book-open' style="color: black"></i> Is the workload manageable?<span style="color:red"> *</span></h3>
                    <h5>1 - Not manageable at all ; 5 - Very manageable</h5>
                    <?php
                    echo '<label> Please select an option : </label>
                <label class="radio-inline">
                    <input type="radio" value="1" name="emanageable" ' . ($man == '1' ? 'checked' : '') . '> 1
                </label>
                <label class="radio-inline">
                    <input type="radio" value="2" name="emanageable" ' . ($man == '2' ? 'checked' : '') . '> 2
                </label>
                <label class="radio-inline">
                    <input type="radio" value="3" name="emanageable" ' . ($man == '3' ? 'checked' : '') . '> 3
                </label>
                <label class="radio-inline">
                    <input type="radio" value="4" name="emanageable" ' . ($man == '4' ? 'checked' : '') . '> 4
                </label>
                <label class="radio-inline">
                    <input type="radio" value="5" name="emanageable" ' . ($man == '5' ? 'checked' : '') . '> 5
                </label>'
                    ?>
                </div>

                <div class="tab" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-lightbulb' style="color: black"></i> Is the module's content easy?<span style="color:red"> *</span></h3>
                    <h5>1 - Very difficult ; 5 - Very easy</h5>
                    <?php
                    echo '<label> Please select an option : </label>
                <label class="radio-inline">
                    <input type="radio" value="1" name="eeasy" ' . ($eas == '1' ? 'checked' : '') . '> 1
                </label>
                <label class="radio-inline">
                    <input type="radio" value="2" name="eeasy" ' . ($eas == '2' ? 'checked' : '') . '> 2
                </label>
                <label class="radio-inline">
                    <input type="radio" value="3" name="eeasy" ' . ($eas == '3' ? 'checked' : '') . '> 3
                </label>
                <label class="radio-inline">
                    <input type="radio" value="4" name="eeasy" ' . ($eas == '4' ? 'checked' : '') . '> 4
                </label>
                <label class="radio-inline">
                    <input type="radio" value="5" name="eeasy" ' . ($eas == '5' ? 'checked' : '') . '> 5
                </label>'
                    ?>
                </div>

                <div class="tab" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-thumbs-up' style="color: black"></i> Will you recommend this module to your friends?<span style="color:red"> *</span></h3>
                    <h5>1 - Will not recommend ; 5 - Will definitely recommend!</h5>
                    <?php
                    echo '<label> Please select an option : </label>
                <label class="radio-inline">
                    <input type="radio" value="1" name="erecommend" ' . ($rec == '1' ? 'checked' : '') . '> 1
                </label>
                <label class="radio-inline">
                    <input type="radio" value="2" name="erecommend" ' . ($rec == '2' ? 'checked' : '') . '> 2
                </label>
                <label class="radio-inline">
                    <input type="radio" value="3" name="erecommend" ' . ($rec == '3' ? 'checked' : '') . '> 3
                </label>
                <label class="radio-inline">
                    <input type="radio" value="4" name="erecommend" ' . ($rec == '4' ? 'checked' : '') . '> 4
                </label>
                <label class="radio-inline">
                    <input type="radio" value="5" name="erecommend" ' . ($rec == '5' ? 'checked' : '') . '> 5
                </label>'
                    ?>
                </div>

                <div class="tab" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-poll' style="color: black"></i> Did you S/U this module?<span style="color:red"> *</span></h3>
                    <?php
                    echo '<label> Please select an option : </label>
                <select name="eexpected_grade">
                    <option>---Please select an option---</option>
                    <option value="Yes" ' . ($exp == 'Yes' ? 'selected' : '') . '>Yes</option>
                    <option value="No" ' . ($exp == 'No' ? 'selected' : '') . '>No</option>
                </select>'
                    ?>
                </div>

                <div class="tab" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-comment' style="color: black"></i> Comments</h3>
                    <br>
                    <?php
                    echo '<textarea class="form-control" rows="5" name="ecomments" placeholder="Write something here... You can include the name of your lecturer/tutor and the sem that you took this module in.">' . $com . '</textarea>' ?><br>
                    <button type="submit" name="edit" style="margin-bottom: 30px;">Update</button>
                </div>
                <br>
                <div style="overflow:auto;">
                    <div style="text-align: center;">
                        <i class="fa fa-chevron-left controls" id="prevBtn" onclick="nextPrev(-1)" title="Previous"></i>
                        <i class="fa fa-chevron-right controls" style="margin-left: 10px;" id="nextBtn" onclick="nextPrev(1)" title="Next"></i>
                    </div>
                </div>

                <div style="text-align:center;margin-top:40px;">
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                    <span class="step"></span>
                </div>
            </form>
        </div>
        <?php
        if (isset($_POST['edit'])) {
            $fac = $_POST['efaculty'];
            $man = $_POST['emanageable'];
            $eas = $_POST['eeasy'];
            $rec = $_POST['erecommend'];
            $exp = $_POST['eexpected_grade'];
            $com = addslashes($_POST['ecomments']);
            date_default_timezone_set('Asia/Singapore');
            $pd = $postingDate = date("Y-m-d");
            $pt = date("H:i:s");
            $query = "UPDATE data SET faculty = '" . $fac . "', manageable = " . $man . ", easy = " . $eas . ", recommend = " . $rec . ", expected_grade = '" . $exp . "' ,comments = '" . $com . "' , postingDate = '" . $pd . "' , postingTime = '" . $pt . "' WHERE ip_add = '" . getUserIpAddr() . "' AND `module` ='" . $modCode . "'";
            if ($conn->query($query)) {
                echo "<script>window.setTimeout(function () {document.getElementById('refreshbtn').click();}, 3000); alert('Your review has been updated.');</script>";
            } else {
                echo "Error: " . $query . " 
            " . $conn->error;
            }
        }
        ?>

        <div id="revF">
            <h3 style="color: navy; text-align: left; padding-left: 10px;">Review This Module</h3>
            <form method="post">
                <div class="tab1" style="text-align: center">
                    <h3 style="color: green;"><i class='fa fa-school' style="color: black"></i> What faculty are you in?<span style="color:red"> *</span></h3>
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
                </div>

                <div class="tab1" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-book-open' style="color: black"></i> Is the workload manageable?<span style="color:red"> *</span></h3>
                    <h5>1 - Not manageable at all ; 5 - Very manageable</h5>
                    <label> Please select an option : </label>
                    <label class="radio-inline">
                        <input type="radio" value="1" name="manageable"> 1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="2" name="manageable"> 2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value='3' name="manageable"> 3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value='4' name="manageable"> 4
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value='5' name="manageable"> 5
                    </label>
                </div>

                <div class="tab1" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-lightbulb' style="color: black"></i> Is the module's content easy?<span style="color:red"> *</span></h3>
                    <h5>1 - Very difficult ; 5 - Very easy</h5>
                    <label> Please select an option : </label>
                    <label class="radio-inline">
                        <input type="radio" value="1" name="easy"> 1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="2" name="easy"> 2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value='3' name="easy"> 3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value='4' name="easy"> 4
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value='5' name="easy"> 5
                    </label>
                </div>

                <div class="tab1" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-thumbs-up' style="color: black"></i> Will you recommend this module to your friends?<span style="color:red"> *</span></h3>
                    <h5>1 - Will not recommend ; 5 - Will definitely recommend!</h5>
                    <label> Please select an option : </label>
                    <label class="radio-inline">
                        <input type="radio" value="1" name="recommend"> 1
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="2" name="recommend"> 2
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value='3' name="recommend"> 3
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value='4' name="recommend"> 4
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value='5' name="recommend"> 5
                    </label>
                </div>

                <div class="tab1" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-poll' style="color: black"></i> Did you S/U this module?<span style="color:red"> *</span></h3>
                    <label> Please select an option : </label>
                    <select name="expected_grade">
                        <option>---Please select an option---</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                    </select>
                </div>

                <div class="tab1" style="text-align: center">
                    <h3 style="color: green"><i class='fa fa-comment' style="color: black"></i> Comments</h3>
                    <br>
                    <textarea class="form-control" rows="5" name="comments" placeholder="Write something here... You can include the name of your lecturer/tutor and the sem that you took this module in."></textarea><br>
                    <button type="submit" name="submit" style="margin-bottom: 30px;">Submit</button>
                </div>
                <br>
                <div style="overflow:auto;">
                    <div style="text-align: center;">
                        <i class="fa fa-chevron-left controls1" id="prevBtn1" onclick="nextPrev1(-1)" title="Previous"></i>
                        <i class="fa fa-chevron-right controls1" style="margin-left: 10px;" id="nextBtn1" onclick="nextPrev1(1)" title="Next"></i>
                    </div>
                </div>

                <div style="text-align:center;margin-top:40px;">
                    <span class="step1"></span>
                    <span class="step1"></span>
                    <span class="step1"></span>
                    <span class="step1"></span>
                    <span class="step1"></span>
                    <span class="step1"></span>
                </div>
            </form>
        </div>
        <script>
            var isNew = <?php echo json_encode($new); ?>;
            document.getElementById("revF").style.display = !isNew ? "block" : "none";
            document.getElementById("editF").style.display = isNew ? "block" : "none";
        </script>
        <hr>
        <?php
        if (isset($_POST['submit'])) {
            if (mysqli_connect_error()) {
                die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
            } else {
                if ($_POST['faculty'] == "---Please select an option---" || !isset($_POST['manageable']) || !isset($_POST['easy']) || !isset($_POST['recommend']) || $_POST['expected_grade'] == "---Please select an option---") {
                    echo "<script> alert('Please fill in all required fields.'); </script>";
                } else {
                    $ip_address = getUserIpAddr();
                    $faculty = $_POST['faculty'];
                    $manageable = $_POST['manageable'];
                    $easy = $_POST['easy'];
                    $recommend = $_POST['recommend'];
                    $expected_grade = $_POST['expected_grade'];
                    date_default_timezone_set('Asia/Singapore');
                    $postingDate = date("Y-m-d");
                    $postingTime = date("H:i:s");
                    $comments = addslashes($_POST['comments']); //addslashes helps to add escape backslashes to single quotes/double quotes/NULL/backslash itself in the comments
                    $sql = "INSERT INTO data (ip_add, module, postingDate, postingTime, faculty, manageable, easy, recommend, expected_grade, comments) 
                    VALUES ('$ip_address','$modCode', '$postingDate', '$postingTime', '$faculty','$manageable','$easy','$recommend','$expected_grade','$comments')";
                    if ($conn->query($sql)) {
                        echo "<script>document.getElementById('revF').style.display = 'none'; window.setTimeout(function () {document.getElementById('refreshbtn').click();}, 3000); document.getElementById('editF').style.display = 'block'; alert('Thank you for your comment!');</script>";
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

        echo '<h3 id = "reviews" style="color: navy; text-align: left; padding-left: 10px">' . mysqli_num_rows($result) . ' Review(s)</h3>
        <br>';

        if (mysqli_num_rows($result) == 0) {
            echo "<div style = 'text-align: center'><span style = 'display: inline-block'>Be the first to review (above)!</span></div>";
        }

        $arr = array();
        $string = "";

        while ($row = mysqli_fetch_array($result)) {
            $string .= "<div class = 'well' style = 'margin-left: 20px; margin-right: 20px; padding-bottom: 5px;'>";
            $string .= "<h5>" . "Review " . $index . ": Posted on " . $row['postingDate'] . "</h5>";
            $string .= "<div>";
            $string .= "<div class = 'fac'>" . '<span style = "color: navy;">Faculty: </span>' . $row['faculty'] . "</div>";
            $string .= "<div>" . '<h5 style = "color: navy;">Is the workload manageable? </h5>';
            $string .= "<span style = 'color: gold;' class = 'star'>" . str_repeat("<i class = 'fa fa-star'></i>", $row['manageable']) . "</span>" . "<span style = 'color: lightgrey;' class = 'star'>" . str_repeat("<i class = 'fa fa-star'></i>", 5 - $row['manageable']) . "</span></div>";
            $string .= "<div>" . '<h5 style = "color: navy;">Is the module\'s content easy? </h5>';
            $string .= "<span style = 'color: gold;' class = 'star'>" . str_repeat("<i class = 'fa fa-star'></i>", $row['easy']) . "</span>" . "<span style = 'color: lightgrey;' class = 'star'>" .  str_repeat("<i class = 'fa fa-star'></i>", 5 - $row['easy']) . "</span></div>";
            $string .= "<div>" . '<h5 style = "color: navy;">Will you recommend this module to your friends? </h5>';
            $string .= "<span style = 'color: gold;' class = 'star'>" . str_repeat("<i class = 'fa fa-star'></i>", $row['recommend']) . "</span>" . "<span style = 'color: lightgrey;' class = 'star'>" .  str_repeat("<i class = 'fa fa-star'></i>", 5 - $row['recommend']) . "</span></div>";
            $string .= "<div style = 'padding-top: 10px' class = 'fac'>" . '<span style = "color: navy;">Did you S/U this module? </span>';
            $string .= ($row['expected_grade'] == "Yes" ? "<i class = 'fa fa-check-circle'></i>" : "<i class = 'fa fa-times-circle'></i>") . "</div>";
            $string .= ($row['comments'] != "" ? "<br><div class = 'well' style = 'margin-bottom: 0'>" . '<h5 style = "color: navy;">' . "Comments:" . '</h5>' . "<span style = 'white-space: pre-wrap;'>" . $row['comments'] . "</span>" .  "</div>" : "");
            $string .= "</div><br>";
            //echo '<button name = "' . $row['module'] . '"' . 'class="btn btn-secondary upvote" data-toggle="tooltip" data-placement="bottom" title="Upvote" style = "border:none; color: green;padding-top: 3px;" id = "' . $index . '"' .  'value = "' . $row['module'] . '"' . '><i class = "fa fa-chevron-up"></i></button>';
            //echo " " . "<span id = 'votecount'>" . $row['voteCount'] . "</span>" . " "  . '<button name = "' . $row['module'] . '"' . 'class="btn btn-secondary downvote" data-toggle="tooltip" data-placement="bottom" title="Downvote" style = "border:none; color: red;padding-top: 3px;" id = "' . $index . '"' .  ' value = "' . $row['postingTime'] . '"' . '><i class = "fa fa-chevron-down"></i></button>';
            $string .= "</div>";
            array_push($arr, $string);
            $index++;
            $string = "";
        }

        $conn->close();
        ?>
    </div>
    <script>
        $(document).ready(function() {
            <?php
            // Create connection
            $conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
            $result1 = mysqli_query($conn, $query1);
            $result2 = mysqli_query($conn, $query2);
            $result3 = mysqli_query($conn, $query3);
            $result4 = mysqli_query($conn, $query4);
            $result5 = mysqli_query($conn, $query5);
            ?>

            //On button click, load new data
            $("#refreshbtn").click(function() {
                var data1 = google.visualization.arrayToDataTable([
                    ['faculty', 'Count'],
                    <?php
                    while ($row = mysqli_fetch_array($result1)) {
                        echo "['" . $row["faculty"] . "', " . $row["Count"] . "],";
                    }
                    ?>
                ]);

                var options1 = {
                    // is3D:true,  
                    width: $(left).width(),
                    height: $(left).height(),
                    backgroundColor: {
                        fill: 'transparent'
                    }
                };
                chart1.draw(data1, options1);

                var data2 = google.visualization.arrayToDataTable([
                    ['expected_grade', 'Count'],
                    <?php
                    while ($row = mysqli_fetch_array($result2)) {
                        echo "['" . $row["expected_grade"] . "', " . $row["Count"] . "],";
                    }
                    ?>
                ]);
                var options2 = {
                    // is3D:true,  
                    colors: ['#DD4477', '#32CD32'],
                    width: $(left).width(),
                    height: $(left).height(),
                    backgroundColor: {
                        fill: 'transparent'
                    }
                };
                chart2.draw(data2, options2);

                var data3 = new google.visualization.arrayToDataTable([
                    ['manageable', 'Count'],
                    <?php
                    $sum = 0;
                    $count = 0;
                    while ($row = mysqli_fetch_array($result3)) {
                        $sum += ($row["manageable"] * $row["Count"]);
                        $count += $row["Count"];
                        echo "['" . $row["manageable"] . "', " . $row["Count"] . "],";
                    }
                    if ($sum != 0 && $count != 0) {
                        $average = $sum / $count;
                    }
                    ?>
                ]);

                var options3 = {
                    width: $(left2).width(),
                    height: $(container2).height(),
                    backgroundColor: {
                        fill: 'transparent'
                    },
                    sliceVisibilityThreshold: 0,
                    legend: {
                        position: 'none'
                    },
                    colors: ['#008080'],
                    axes: {
                        x: {
                            0: {
                                side: 'Count',
                                label: '1 - Not manageable at all ; 5 - Very manageable'
                            } // Top x-axis.
                        }
                    },
                    bar: {
                        groupWidth: "90%"
                    }
                };
                chart3.draw(data3, google.charts.Bar.convertOptions(options3));
                document.getElementById("chart3avg").innerHTML = 'Average: <span style="color: maroon"><?php echo (isset($average) ? round($average, 2) : "NIL"); ?></span> out of 5';

                var data4 = new google.visualization.arrayToDataTable([
                    ['easy', 'Count'],
                    <?php
                    $sum = 0;
                    $count = 0;
                    while ($row = mysqli_fetch_array($result4)) {
                        $sum += ($row["easy"] * $row["Count"]);
                        $count += $row["Count"];
                        echo "['" . $row["easy"] . "', " . $row["Count"] . "],";
                    }
                    if ($sum != 0 && $count != 0) {
                        $average = $sum / $count;
                    }
                    ?>
                ]);

                var options4 = {
                    width: $(left2).width(),
                    height: $(container2).height(),
                    backgroundColor: {
                        fill: 'transparent'
                    },
                    sliceVisibilityThreshold: 0,
                    legend: {
                        position: 'none'
                    },
                    colors: ['#D2691E'],
                    axes: {
                        x: {
                            0: {
                                side: 'Count',
                                label: '1 - Very difficult ; 5 - Very easy'
                            } // Top x-axis.
                        }
                    },
                    bar: {
                        groupWidth: "90%"
                    }
                };
                chart4.draw(data4, google.charts.Bar.convertOptions(options4));
                document.getElementById("chart4avg").innerHTML = 'Average: <span style="color: maroon"><?php echo (isset($average) ? round($average, 2) : "NIL"); ?></span> out of 5';

                var data5 = new google.visualization.arrayToDataTable([
                    ['recommend', 'Count'],
                    <?php
                    $sum = 0;
                    $count = 0;
                    while ($row = mysqli_fetch_array($result5)) {
                        $sum += ($row["recommend"] * $row["Count"]);
                        $count += $row["Count"];
                        echo "['" . $row["recommend"] . "', " . $row["Count"] . "],";
                    }
                    if ($sum != 0 && $count != 0) {
                        $average = $sum / $count;
                    }
                    ?>
                ]);

                var options5 = {
                    width: $(left2).width(),
                    height: $(container2).height(),
                    backgroundColor: {
                        fill: 'transparent'
                    },
                    sliceVisibilityThreshold: 0,
                    legend: {
                        position: 'none'
                    },
                    colors: ['#A52A2A'],
                    axes: {
                        x: {
                            0: {
                                side: 'bottom',
                                label: '1 - Will not recommend ; 5 - Will definitely recommend!'
                            } // Top x-axis.
                        }
                    },
                    bar: {
                        groupWidth: "90%"
                    }
                };
                chart5.draw(data5, google.charts.Bar.convertOptions(options5));
                document.getElementById("chart5avg").innerHTML = 'Average: <span style="color: maroon"><?php echo (isset($average) ? round($average, 2) : "NIL"); ?></span> out of 5';

                var today = new Date();
                var date = (today.getDate() < 10 ? '0' : '') + today.getDate() + '/' + (today.getMonth() + 1 < 10 ? '0' : '') + (today.getMonth() + 1) + '/' + today.getFullYear();
                var time = today.getHours() + ':' + (today.getMinutes() < 10 ? '0' : '') + today.getMinutes() + ':' + (today.getSeconds() < 10 ? '0' : '') + today.getSeconds();
                document.getElementById('updated').innerHTML = " Updated at " + time + " on " + date;
            });
        });
    </script>
    <script>
        var obj = <?php echo json_encode($arr); ?>;
    </script>
    <div id="data-container"></div>
    <div style="text-align: center">
        <div style="display:inline-block" class='paginationjs' id="pagination-container"></div>
    </div>
    <br>
</body>
<script src="https://pagination.js.org/dist/2.1.4/pagination.js" type="text/javascript"></script>
<link rel="stylesheet" href="./pagination.css">
<script src="./script2.js"></script>

</html>
