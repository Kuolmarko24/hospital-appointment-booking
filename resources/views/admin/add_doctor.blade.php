<!DOCTYPE html>
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
                
                        <input type="submit" class="btn btn-success" name="file">
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
</html>