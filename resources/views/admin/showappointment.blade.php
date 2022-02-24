
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
                <h3 class="page-title"> All Appointments </h3>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Appointments</li>
                    <li class="breadcrumb-item active" aria-current="page">All Appointments</li>
                  </ol>
                </nav>
              </div>
              <div class="row">
                <div class="col-lg-12 stretch-card">
                  <div class="card">
                    <div class="card-body">
                      <h4 class="card-title">List of Normal users and Admin users</h4>
                      {{-- <p class="card-description"> Add class <code>.table-{color}</code> --}}
                      </p>
                      <div class="table-responsive">
                        <table class="table table-bordered table-contextual">
                          <thead>
                            <tr>
                              <th>Cust.Name</th>
                              <th>Email</th>
                              <th>Phone</th>
                              <th>Dr.Name</th>
                              <th>Date</th>
                              <th>Message</th>
                              <th>Status</th>
                              <th>Approve</th>
                              <th>Cancel</th>
                              <th>Send Mail</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $appoint)
                                <tr class="table-info">
                                  <td>{{ $appoint->name }}</td>
                                  <td>{{ $appoint->email }}</td>
                                  <td>{{ $appoint->phone }}</td>
                                  <td>{{ $appoint->doctor }}</td>
                                  <td>{{ $appoint->date }}</td>
                                  <td>{{ $appoint->message }}</td>
                                  <td>{{ $appoint->status }}</td>
                                  <td>
                                      <a class="btn btn-success" href="{{ url('approved',$appoint->id) }}">Approved</a>
                                  </td>
                                  <td>
                                      <a class="btn btn-danger" href="{{ url('cancelled',$appoint->id) }}">Cancelled</a>
                                  </td>
                                  <td>
                                      <a class="btn btn-primary" href="{{ url('emailview',$appoint->id) }}">Send Mail</a>
                                  </td>
                                </tr>   
                            @endforeach
                            
                            {{-- <tr class="table-warning">
                              <td> 2 </td>
                              <td> Messsy Adam </td>
                              <td> Flash </td>
                              <td> $245.30 </td>
                              <td> July 1, 2015 </td>
                            </tr> --}}
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