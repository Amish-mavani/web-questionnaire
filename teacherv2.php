<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Selection</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="feedback"></script>
    <style>
        body {
            background-color: #f8f9fa;
        }

        h2{
            font-family: Arial, sans-serif; 
            margin: 20px; 
            line-height: 1.6;
            text-align: center;

        }

        .container {
            margin: 20px auto;
        }

        .circular-image {
      border-radius: 50%;
      overflow: hidden;
    }

        .teacher-card {
            display: flex;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            animation: fadeIn 1.5s ease-in-out;
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
    </style>

</head>
<body>
<img src="https://www.iiitsurat.ac.in/assets/img/IIITS_EHG.png" height="auto" width="100%" /><br>

<?php include 'section.html'; ?>

    <div class="container">
    <a href="questionnaire.php" class="btn btn-primary-back" >back</a>
        
    <h2> -: Select a Teacher :- </h2>
        
        <div class="row">
            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/pkr.png" style="height: 400px;" class="card-img-top circular-image" alt="Teacher 1 Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Pradeep Kumar Roy</h5>
                        <p class="card-text">Head & Assistant Professor<br>PhD (NIT Patna)<br>pradeep.roy@iiitsurat.ac.in</p>
                        <a href="feedback.php?teacher=pkr" class="btn btn-primary">Select pkr</a>
                    </div> 
                </div>
            </div>

            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/rrp.jpg" style="height: 400px;" class="card-img-top circular-image" alt="Teacher 2 Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Reema Patel</h5>
                        <p class="card-text">Assistant Professor<br>PhD (SVNIT, Surat)<br>reema.patel@iiitsurat.ac.in</p>
                        <a href="feedback.php?teacher=rrp" class="btn btn-primary">Select rrp</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/sdp.png" style="height: 400px;" class="card-img-top circular-image" alt="Teacher 3 Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Sachin Patil</h5>
                        <p class="card-text">Assistant Professor<br>PhD (NIT Karnataka, Surathkal)<br>sachindpatil@iiitsurat.ac.in</p>
                        <a href="feedback.php?teacher=sdp" class="btn btn-primary">Select sdp</a>
                    </div>
                </div>
            </div>
            
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/skp.png" style="height: 400px;" class="card-img-top circular-image" alt="Teacher 1 Image">
                    <div class="card-body">
                        <h5 class="card-title">Ms. Shraddha Patel</h5>
                        <p class="card-text">Teaching Assistant (Contractual)<br>M.Tech (Ganpat University)<br> shraddha.patel@iiitsurat.ac.in</p>
                        <a href="feedback.php?teacher=skp" class="btn btn-primary">Select skp</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/rk.jpg" style="height: 400px;" class="card-img-top circular-image" alt="Teacher 2 Image">
                    <div class="card-body">
                        <h5 class="card-title">Dr. Ritesh Kumar</h5>
                        <p class="card-text">Assistant Professor<br>PhD (IIT Dhanbad)<br>riteshkumar@iiitsurat.ac.in</p>
                        <a href="feedback.php?teacher=rk" class="btn btn-primary">Select rk</a>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card teacher-card h-95">
                    <img src="https://iiitsurat.ac.in/assets/img/faculty/rs.png" style="height: 400px;" class="card-img-top circular-image" alt="Teacher 3 Image">
                    <div class="card-body">
                        <h5 class="card-title">Mr. Rishi Sharma</h5>
                        <p class="card-text">Teaching Assistant (Contractual)<br>M.Tech (NIT Patna)<br> rishi_sharma@iiitsurat.ac.in</p>
                        <a href="feedback.php?teacher=rs" class="btn btn-primary">Select rs</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".btn btn-primary").click(function() {
        // Check if the link has already been selected
        if (!$(this).hasClass("selected")) {
          // Add the 'selected' class to indicate it has been selected
          $(this).addClass("selected");
          // Perform the action here (for example, redirect to another page)
          window.location.href = $(this).attr("href");
        }
        // Prevent the default action of the link
        return false;
      });
    });
  </script>
</body>
</html>
