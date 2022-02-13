<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
     
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

        <!-- partial:partials/_navbar.html -->
      @include('admin.navbar')
        <!-- partial -->
              
        <div class="container-fluid page-body-wrapper">
            <div align="center" style="padding: 100px">
                <table>
                    <tr style="background-color: black">
                        <th style="padding: 20px">Doctor's Name</th>
                        <th style="padding: 20px">Phone</th>
                        <th style="padding: 20px">Room No</th>
                        <th style="padding: 20px">Specialty</th>
                        <th style="padding: 20px">Image</th>
                        <th style="padding: 20px">Delete</th>
                        <th style="padding: 20px">Update</th>
                    </tr>
                    @foreach ($data as $doctor)
                        <tr align="center" style="background-color: skyblue;">
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
                </table>
            </div>
        </div>
        
        <!-- main-panel ends -->
      
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>