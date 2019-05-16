@extends('layouts.app')

@section('content')
<div class="card">
    <h5 class="card-header">
        <div class="row" >

            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form method="POST" action="level6" >
                @csrf
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="flag" name="flag" placeholder="FLAG : XXXXXXXXX" required>
                            <input type="hidden"  id="level" name="level" value="5" >
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
    <div class="row" >
        <img src="QR_Code_My_Social_Media_Page.png" style="margin-left:300px" width="500" height="500"  alt="Look Closer">
    </div>
</div>
@endsection
