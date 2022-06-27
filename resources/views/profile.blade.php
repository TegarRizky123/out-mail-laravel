@extends('main')

@section('content')
<div class="card mt-5 shadow p-4">
              <div class="card-title ">
                    <h5><b>My Profile</b></h5>
                    <h6 class="text-muted">Manage your profile information to control, protect and secure your account</h6>
                    <hr>
               </div>
               <div class="card-body">
                    <div class="row">
                           <div class="col-12 col-sm-8 col-md-8">
                               <div class="row ">
                                    <div class="col-4 col-md-4 col-sm-4 ">
                                        <label class="text-muted mb-2">Name</label>
                                    </div>
                                    <div class="col-md-8 col-sm-8 col-8">
                                         <input type="text" class="form-control text-muted " id ="nama" name ="nama" value="Tegar Risqy Yulian Santoso" disabled>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <label class="text-muted mb-2">Status</label>
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8">
                                        <input type="text" class="form-control text-muted " id ="nama" name ="nama" value="College student" disabled>
                                    </div>
                                </div>
                               
                                <div class="row mt-3">
                                    <div class="col-4 col-sm-4 col-md-4">
                                        <label class="text-muted mb-2">Universitas</label>
                                    </div>
                                    <div class="col-8 col-sm-8 col-md-8 ">
                                         <input type="text" class="form-control text-muted " id ="nama" name ="nama" value="Politeknik PHB"  disabled>
                                    </div>
                                </div>
                           </div>
                           <div class="image col-md-4 text-center">
                                <img src="images/simpson.jpg" class="img-fluid rounded-circle" width="200px" height="100px" alt="Profile">
                           </div>
                       </div>
                       <div class="card-footer row mt-4">
                         <div class="col-md-3 col-sm-3 col-4">
                           <p class="fs-6 "><p>Follow me on</p></p>
                         </div>
                         <div class="insta col-md-3 col-sm-3 col-4 mt-3">
                            <a href="https://www.instagram.com/tgr_rys" class=" text-decoration-none text-black"><i class="bi bi-instagram ">  Tegar risqy yulian santoso</i></a>
                         </div>
                         <div class="github col-md-3 col-sm-3 col-4 mt-3">
                            <a href="https://github.com/TegarRizky123" class=" text-decoration-none text-black"><i class="bi bi-github "> Tegar risqy yulian santoso</i></a>
                         </div>

                       </div>
               </div>
          </div>
        </div>

@endsection