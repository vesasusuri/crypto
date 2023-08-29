<!DOCTYPE html>
<html lang="en">
  <head>
  @include("user.links")
  </head>
  <body>
    <div class="container-scroller">
        @include("user.sidebar")
        @include("user.navbar")
        <div class="container-fluid px-4">
        <div class="main-body">
            <br><br><br><br><br><br>
            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">    
                            <img src="admin/assets/images/faces/face3.jpg" alt="Admin" class="rounded-circle" width="150">
                                <div class="mt-3">
                                    Vesa Susuri                                     
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                <div class="card mb-3">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <h6 class="mb-0">Full Name</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            vesa susuri                        
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Email</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                        vesasusuri@gmail.com
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Status</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Active
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Country</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Kosova
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Address</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Prizren
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Hash</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            1234
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                        <h6 class="mb-0">Bank</h6>
                        </div>
                        <div class="col-sm-9 text-secondary">
                            Bkt
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-12">
                        <a class="btn btn-info " target="__blank" >Edit</a>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>

            </div>
        </div>

        @include("user.scripts")
    </div>
  </body>
</html>