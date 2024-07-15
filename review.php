<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Selection</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        h2{
            color: blue; 
            font-family: Arial, sans-serif; 
            margin: 20px; 
            line-height: 1.6;
            text-align: center;
            font weight: bold;

        }

        .container {
            margin: 20px auto;
        }

        .teacher-card {
            display: flex;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            animation: fadeIn 2s ease-in-out;
        }

        @keyframes fadeIn {
          from {
            opacity: 0;
          }
          to {
            opacity: 1;
          }
        }

        .teacher-card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-title {
            font-size: 1.25rem;
            margin-bottom: 10px;
            color: #333;
        }

        .card-text {
            font-size: 1rem;
            color: #666;
        }

        .teacher-img {
            max-width: 100%;
            height: 400px;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }

        .btn-primary-back {
            background-color: #007bff;
            border-color: #007bff;
            float: right;
        }

        <?php
    
    $servername = "localhost"; 
    $username = "root";
    $password = "Amish@4929";
    $dbname = "feedback"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>

    </style>
</head>
<body>
<img src="https://www.iiitsurat.ac.in/assets/img/IIITS_EHG.png" height="auto" width="100%" /><br>
    <div class="container">
    <a href="questionnaire.php" class="btn btn-primary-back" >back</a>
        
    <h2> review</h2>

        <div class="row">
            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/pkr.png" style="height: 400px;" class="card-img-top teacher-img" alt="Teacher 1 Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Pradeep Kumar Roy</h5>
                        <p class="card-text">Head & Assistant Professor<br>PhD (NIT Patna)<br>pradeep.roy@iiitsurat.ac.in<br></p>
                        <?php
                        $sql = "SELECT * FROM Teacher_Grades where teacher_name = 'pkr'";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $teacher_name = $row["teacher_name"];
                            $grade = $row["grade"];
                        }
                        $result->free();
                        ?>
                        <p><?php echo $grade;?> </p>
                    </div> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/rrp.jpg" style="height: 400px;" class="card-img-top teacher-img" alt="Teacher 2 Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Reema Patel</h5>
                        <p class="card-text">Assistant Professor<br>PhD (SVNIT, Surat)<br>reema.patel@iiitsurat.ac.in</p>
                        <?php
                        $sql = "SELECT * FROM Teacher_Grades where teacher_name = 'rrp'";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $teacher_name = $row["teacher_name"];
                            $grade = $row["grade"];
                        }
                        $result->free();
                        ?>
                        <p><?php echo $grade;?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/sdp.png" style="height: 400px;" class="card-img-top teacher-img" alt="Teacher 3 Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Sachin Patil</h5>
                        <p class="card-text">Assistant Professor<br>PhD (NIT Karnataka, Surathkal)<br>sachindpatil@iiitsurat.ac.in</p>
                        <?php
                        $sql = "SELECT * FROM Teacher_Grades where teacher_name = 'sdp'";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $teacher_name = $row["teacher_name"];
                            $grade = $row["grade"];
                        }
                        $result->free();
                        ?>
                        <p><?php echo $grade;?> </p>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/skp.png" style="height: 400px;" class="card-img-top teacher-img" alt="Teacher 1 Image">
                    <div class="card-body">
                        <h5 class="card-title">Ms. Shraddha Patel</h5>
                        <p class="card-text">Teaching Assistant (Contractual)<br>M.Tech (Ganpat University)<br> shraddha.patel@iiitsurat.ac.in</p>
                        <?php
                        $sql = "SELECT * FROM Teacher_Grades where teacher_name = 'skp'";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $teacher_name = $row["teacher_name"];
                            $grade = $row["grade"];
                        }
                        $result->free();
                        ?>
                        <p><?php echo $grade;?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/rk.jpg" style="height: 400px;" class="card-img-top teacher-img" alt="Teacher 2 Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Ritesh Kumar</h5>
                        <p class="card-text">Assistant Professor<br>PhD (IIT Dhanbad)<br>riteshkumar@iiitsurat.ac.in</p>
                        <?php
                        $sql = "SELECT * FROM Teacher_Grades where teacher_name = 'rk'";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $teacher_name = $row["teacher_name"];
                            $grade = $row["grade"];
                        }
                        $result->free();
                        ?>
                        <p><?php echo $grade;?> </p>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/rs.png" style="height: 400px;" class="card-img-top teacher-img" alt="Teacher 3 Image">
                    <div class="card-body">
                        <h5 class="card-title">Mr. Rishi Sharma</h5>
                        <p class="card-text">Teaching Assistant (Contractual)<br>M.Tech (NIT Patna)<br> rishi_sharma@iiitsurat.ac.in</p>
                        <?php
                        $sql = "SELECT * FROM Teacher_Grades where teacher_name = 'rs'";
                        $result = $conn->query($sql);
                        while ($row = $result->fetch_assoc()) {
                            $teacher_name = $row["teacher_name"];
                            $grade = $row["grade"];
                        }
                        $result->free();
                        ?>
                        <p><?php echo $grade;?> </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>
