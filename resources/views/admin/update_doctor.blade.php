<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
      <style>
          label{
              display: inline-block;
              width: 120px;
          }
      </style>
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
                @if(session()->has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">x</button>
                    {{ session()->get('message') }}
                </div>
                @endif
               <form action="{{ url('editdoctor',$data->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                   <div style="padding: 15px">
                       <label for="">Doctor's Name</label>
                       <input type="text" name="name" style="color: black" value="{{ $data->name }}">
                   </div>
                    <div style="padding: 15px">
                        <label for="">Phone</label>
                        <input type="number" name="number" style="color: black" value="{{ $data->phone }}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">Room</label>
                        <input type="number" name="room" style="color: black" value="{{ $data->room }}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">Specialty</label>
                        <input type="text" name="specialty" style="color: black" value="{{ $data->specialty }}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">Old Image</label>
                        <img height="150" width="150" src="doctorimage/{{ $data->image }}">
                    </div>
                    <div style="padding: 15px">
                        <label for="">Change Image</label>
                        <input type="file" name="file">
                    </div>
                    <div style="padding: 15px">
                        <input type="submit" class="btn btn-primary">
                    </div>
               </form>
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