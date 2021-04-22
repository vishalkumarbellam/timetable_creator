<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link  rel="stylesheet"  href="style.css">
    <title>Document</title>
</head>
<div class="main">
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <main>      
        <a class="navbar-brand mb-0 h" href="#">TimeTable Creator </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"  aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </main>
        <div class="navbar-collapse collapse move-me" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <p>              
                      <a class="nav-link" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample">
                    Add Faculty
                  </a>
                </p>
                <div class="collapse" id="collapseExample">
                    <div class="card card-body">
                        <form method="POST" action="faculty.php">
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="fname">FirstName</label>
                                <input type="name" name="firstname" class="form-control" id="firstName" placeholder="FirstName">
                              </div>
                              <div class="form-group col-md-6">
                                <label for="lname">LastName</label>
                                <input type="name" name="lastname" class="form-control" id="lastName" placeholder="LastName">
                              </div>
                            </div>
                            <div class="form-group">
                              <label for="inputAddress">Address</label>
                              <input type="text" name="inputaddress" class="form-control" id="inputAddress" placeholder="1234 Main St">
                            </div>
                            <div class="form-group">
                              <label for="Mno">Mobile No</label>
                              <input type="number" name="Mobile" class="form-control" id="Mobile" placeholder="+919866677790">
                            </div>
                            <div class="form-row">
                              <div class="form-group col-md-6">
                                <label for="mail">Email</label>
                                <input type="email" name="Email" class="form-control" id="Email" placeholder="abc@gmail.com">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                  Check me out
                                </label>
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary" data-toggle="collapse" data-target="#collapseExample" value="Submit">Sign in</button>
                          </form>
                    </div>
                  </div>

               </li>
            <li class="nav-item">
                <p>              
                    <a class="nav-link" data-toggle="collapse" href="#addfaculty"role="button" aria-expanded="false" aria-controls="addfaculty">
                  Add Subject
                </a>
              </p>
              <div class="collapse" id="addfaculty">
                <div class="card card-body">
                  <form method="POST" action="subject.php">
                    <label>Subject Name</label>
                    <input type="text" name="Sname" id="subject"><br><br>
                    <label>Credidt Score</label>
                    <input type="number" name="Score" id="credidtScore">
                    <div class="form-group row">
                     <div class="col-sm-10">
                       <button type="submit" class="btn btn-primary" data-toggle="collapse" data-target="addfaculty">Add Subject</button>
                     </div>
                   </div>
                  </form>
                </div>
            </div>
            </li>
           
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="false">Creat Time Table</a>
            </li>
          </ul>
         
        </div>
      </nav>
    </div>
    <?php
include"database.php";
createdb();
?>


</body>
</html>