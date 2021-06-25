<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<title>Student Management System</title>
</head>
<body>

@include("navbar")

<div class="row header-container justify-content-center">
    <div class="header">
    <h1>Student Management System</h1>
    </div>
</div>

    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-12">
                @include("studentslist")
                </section>

                <section class="col-5">
                </section>
            </div>
        </div>
    
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-7">
                    @include("studentslist")
                </section>
                <section class="col-5">

                <div class="card">
                    <div class="card-body">
                        <img style="height: 300px; width:600px" src="https://image.shutterstock.com/z/stock-photo-adorable-cute-girl-reading-storytelling-concept-515409898.jpg" alt="Card image cap">
                    </div>
                    <h5 class="card-title">Enter Student Information.</h5>
                    <form action="{{route('store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>CNE</label>
                            <input type="text" name="cne" class="form-control" placeholder="Enter CNE">
                        </div>
                        <div class="form-group">
                            <label>Firest Name</label>
                            <input type="text" name="firstName" class="form-control" placeholder="Enter First Name">
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input type="text" name="lastName" class="form-control" placeholder="Enter Last Name">
                        </div>
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control" placeholder="Enter Age">
                        </div>
                        <div class="form-group">
                            <label>Speciality</label>
                            <input type="text" name="speciality" class="form-control" placeholder="Enter Speciality">
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" class="form-control" placeholder="Enter Image">
                        </div>
                        <input type="submit" class="btn btn-info" value="Save">
                    </form>
                </div>
                        
                   
                </section>
            </div>
        </div>
    
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                @include("studentslist")
                </section>
                <section class="col-md-5"></section>
            </div>
        </div>
    
    @elseif($layout == 'edit')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-7">
                @include("studentslist")
                </section>
                <section class="col-5">
                <div class="card">
                    <img style="height: 300px; width:600px" src="https://image.shutterstock.com/z/stock-photo-adorable-cute-girl-reading-storytelling-concept-515409898.jpg" alt="Card image cap">
                    <h5 class="card-title">Update Student Information.</h5>
                    <div class="card-body">
                        <form action="{{route('update',$student->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>CNE</label>
                                <input type="text" name="cne" value="{{$student->cne}}"class="form-control" placeholder="Enter CNE">
                            </div>
                            <div class="form-group">
                                <label>Firest Name</label>
                                <input type="text" name="firstName" value="{{$student->firstName}}" class="form-control" placeholder="Enter First Name">
                            </div>
                            <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" name="lastName" value="{{$student->lastName}}" class="form-control" placeholder="Enter Last Name">
                            </div>
                            <div class="form-group">
                                <label>Age</label>
                                <input type="text" name="age" value="{{$student->age}}" class="form-control" placeholder="Enter Age">
                            </div>
                            <div class="form-group">
                                <label>Speciality</label>
                                <input type="text" name="speciality" value="{{$student->speciality}}" class="form-control" placeholder="Enter Speciality">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" value="{{$student->image}}" class="form-control" placeholder="Enter Image">
                            </div>
                            <input type="submit" class="btn btn-info" value="Update">
                        </form>
                    </div>
                </div>
                </section>
            </div>
        </div>

        
    
    @endif
<footer>

</footer>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>