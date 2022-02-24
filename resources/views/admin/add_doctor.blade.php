{{-- <!DOCTYPE html>
<html lang="en">
  <head>
      <style>
          label{
              display: inline-block;
              width: 200px;
          }
      </style>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            
            <div class="container" style="padding-top: 100px;">
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
                @endif
                <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div style="padding: 15px;">
                        <label for="">Doctor Name</label>
                        <input type="text" name="name" style="color: black" placeholder="Type the name" required>
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Phone</label>
                        <input type="number" style="color: black" name="number" placeholder="Phone number" required>
                    </div>

                    <div style="padding: 15px;">
                        <label for="">Room No</label>
                        <input type="number" style="color: black" name="room" placeholder="Room number" required>
                    </div>
                    <div style="padding: 15px;">
                        <label for="">Specialty</label>
                         <select name="specialty" style="color: black" id="">
                             <option>--Select--</option>
                             <option value="optician">Optician</option>
                             <option value="psychiatrist">Psychiatrist</option>
                             <option value="physician">Physician</option>
                             <option value="dentist">Dentist</option>
                         </select>
                    </div>
                  
                    

                    <div style="padding: 15px;">
                        <label for="">Doctor Image</label>
                        <input type="file" name="file" required>
                    </div>

                    <div style="padding: 15px;">
                
                        <input type="submit" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html> --}}
{{-- modified --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('admin.css')
</head>
<body>
    <x-app-layout>
 
    </x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        @include('admin.css')
      </head>
      <body>
        <div class="container-scroller">
        @include('admin.sidebar')
        @include('admin.navbar')
        <div class="main-panel">
            <div class="content-wrapper">
              <div class="page-header">
                <h3 class="page-title"> All Users </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Users</a></li>
                    <li class="breadcrumb-item active" aria-current="page">All users</li>
                  </ol>
                </nav>
              </div>
              <div class="row">
                
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                      <div class="card-body">
                        <h4 class="card-title">Horizontal Form</h4>
                        <p class="card-description"> Horizontal form layout </p>
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            {{ session()->get('message') }}
                        </div>
                        @endif
                        <form action="{{ url('upload_doctor') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputName1">Doctor Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Doctor">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Phone</label>
                                <input type="number" class="form-control" name="number" placeholder="Phone">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputName1">Room No</label>
                                <input type="number" class="form-control" name="room" placeholder="Room No">
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">Specialty</label>
                                <select class="form-control form-control-sm" name="specialty" id="exampleFormControlSelect3">
                                    <option>--Select--</option>
                                    <option value="optician">Optician</option>
                                    <option value="psychiatrist">Psychiatrist</option>
                                    <option value="physician">Physician</option>
                                    <option value="dentist">Dentist</option>
                                </select>
                              </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="file">
                            </div>
                          <input type="submit" value="Save" class="btn btn-primary me-2"/>
                          {{-- <button type="submit" name="submit" class="btn btn-primary me-2">Submit</button> --}}
                          {{-- <button class="btn btn-dark">Cancel</button> --}}
                        </form>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:../../partials/_footer.html -->
            <footer class="footer">
              <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
              </div>
            </footer>
            <!-- partial -->
          </div>
        </div>
        <!-- container-scroller -->
        @include('admin.script')
      </body>
    </html>
</body>
</html>