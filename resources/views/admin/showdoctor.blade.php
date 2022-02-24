
{{-- modified --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
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
                <h3 class="page-title"> All Doctors </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Doctors</li>
                    <li class="breadcrumb-item active" aria-current="page">All Doctors</li>
                  </ol>
                </nav>
              </div>
              <div class="row">
                <div class="col-lg-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">List of all doctors</h4>
                      {{-- <p class="card-description"> Add class <code>.table-{color}</code> --}}
                      </p>
                      <div class="table-responsive">
                        <table class="table table-bordered table-contextual">
                          <thead>
                            <tr>
                              <th style="padding: 20px">Doctor's Name</th>
                              <th style="padding: 20px">Phone</th>
                              <th style="padding: 20px">Room No</th>
                              <th style="padding: 20px">Specialty</th>
                              <th style="padding: 20px">Image</th>
                              <th style="padding: 20px">Delete</th>
                              <th style="padding: 20px">Update</th> 
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $doctor)
                                <tr class="table-info">
                                  <td>{{ $doctor->name }}</td>
                                  <td>{{ $doctor->phone }}</</td>
                                  <td>{{ $doctor->room }}</</td>
                                  <td>{{ $doctor->specialty }}</</td>
                                  <td><img height="100" width="100" src="doctorimage/{{ $doctor->image }}"/></</td>
                                  <td>
                                      <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete ethis data?')" href="{{ url('deletedoctor',$doctor->id) }}">Delete</a>
                                  </td>
                                  <td>
                                      <a class="btn btn-primary" href="{{ url('updatedoctor',$doctor->id) }}">Update</a>
                                  </td>
                                </tr>   
                            @endforeach
                          </tbody>
                        </table>
                      </div>
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
