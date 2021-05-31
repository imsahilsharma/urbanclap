<!DOCTYPE html>
<html lang="en">
    
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAINT</title>
</head>
<body style="background-color: rgb(198, 255, 198);">
  <nav class="navbar navbar-expand-lg navbar-light bg-success    ">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php"><b><I>Urban Clap</I></b></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php"><b>About Us</b></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.php">Login/Register</a>
            </li>
            
            </div>
        </div>
      </div>
      
    </nav>
    <div class="container">
      <div class="row">
        <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
          <br>
          <h1>Send Your Query To Us</h1><br>
          <table class="table table-borderless">
            <tr>
              <td>Name </td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td>Email ID</td>
              <td><input type="text" class="form-control"></td>
            </tr>
            <tr>
              <td>Query</td>
              <td><input type="text" class="form-control" style="line-height: 3;"></td>
            </tr>
            <tr>
              <td></td>
              <td><button type="button" class="btn btn-success" data-bs-toggle="modal"
                  data-bs-target="#exampleModal">SUBMIT</button>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Enquiry</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                        Are you sure to Send Query ? If yes, then click SEND otherwise click NO
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">NO</button>
                        <button type="button" class="btn btn-success" data-bs-dismiss="modal">SEND</button>
                      </div>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          </table>
        </div>
        <div class="col col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2"></div>
      
        <div class="col col-12 col-sm-5 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
          <br>
          <h1>Contact Info</h1><br>
          <p>Rajagiri College of Social Sciences (Autonomous),<br>Rajagiri P.O, Kalamassery, Cochin - 683 104,
            Kerala, India.
            <br><br>Email ID : admin@rajagiri.edu (Office)
            <br>Phone : +91 484 - 2911111 / 2911507
            <br>Fax No : +91 484 - 2532862
          </p>
        </div>
      </div>        </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>  
</body>
</html>


