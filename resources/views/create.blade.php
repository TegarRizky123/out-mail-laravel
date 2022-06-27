@extends('main')

@section('content')
<div class="card mt-5 shadow">
            <div class="card-body ">
                
                        <div class="card-title ">
                                <h5><b>Create Mail</b></h5>
                                <h6 class="text-muted">Manage your profile information to control, protect and secure your account</h6>
                                <hr>
                        </div>
                       
                        <div class="form-group mt-2">
                            <p>Number of mail</p>
                             @csrf
                            <input type="text" class="form-control" id ="number_mail" name ="number_mail" placeholder="Enter mail number . . . ." required>
                        </div>
                        <div class="form-group mt-2">
                            <p for="nama">Date</p>
                            <input type="date" class="form-control" id ="date" name ="date" placeholder="Enter date ...." required>
                        </div>
                        <div class="form-group mt-2">
                            <p for="prodi">Title</p>
                            <input type="text" class="form-control" id ="title" name ="title" placeholder="Enter mail title . . . ." required>
                        </div>

                        <div class="text-center mt-5">
                            <Button id ="submit" name="submit" class="btn" style="background-color: #00dbde; color: aliceblue;" onclick="return confirm('Are you sure ?')">Save</Button>
                        </div>
                        @include('ajax/setup')
                        
                    </div>
                   
            </div>
          </div>
@endsection