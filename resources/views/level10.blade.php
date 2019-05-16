@extends('layouts.app')

@section('content')
<div class="card">
    <h5 class="card-header">
        <div class="row" >

            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form method="POST" action="level11" >
                @csrf
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="flag" name="flag" placeholder="flag:XXXXXXXXX" required>
                            <input type="hidden"  id="level" name="level" value="10" >
                        </div>
                        <div class="col-sm-4">
                            <button type="submit" class="btn btn-success btn-block mb-2">Next Level</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-sm-3"></div>
        </div>
    </h5>
</div>

<br>

<div class="container-fluid" >
    <div class="row  justify-content-center" >
        <a href="data.zip" class="btn btn-warning">Download the file</a>
    </div>
    <br>
    <div class="row  justify-content-center" >
        <p style="color:white;font-size:27px;" >Hint 01 : OpenSSL ????</p>
    </div>
    <div class="row  justify-content-center" >
        <p style="color:white;font-size:27px;" >Hint 02 : KEY|5A96F####2509CCF </p>
    </div>
</div>
@endsection
