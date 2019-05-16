@extends('layouts.app')

@section('content')
<div class="card">
    <h5 class="card-header">
        <div class="row" >

            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form method="POST" action="level10" >
                @csrf
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="flag" name="flag" placeholder="FLAG : XXXXXXXXX" required>
                            <input type="hidden"  id="level" name="level" value="9" >
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
    <div class="row" style="padding-left:150px">
        <img src="out1.jpg" width="400" height="400"  alt="Look Closer">
        &nbsp&nbsp&nbsp
        <img src="out2.jpg" width="400" height="400"  alt="Look Closer">
    </div>
</div>
@endsection
