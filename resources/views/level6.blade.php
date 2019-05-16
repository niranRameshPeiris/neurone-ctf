@extends('layouts.app')

@section('content')
<div class="card">
    <h5 class="card-header">
        <div class="row" >

            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form method="POST" action="level7" >
                @csrf
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="flag" name="flag" placeholder="FLAG : XXXXXXXXX" required>
                            <input type="hidden"  id="level" name="level" value="6" >
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
        <p style="color:white;font-size:27px;" >Nothing and no one is perfect. It just takes a good eye to find those hidden imperfections.</p>
        <!-- aHR0cHM6Ly9kcml2ZS5nb29nbGUuY29tL29wZW4/aWQ9MUlXeExtcGtGRHJ1Xy14a2tJc0psRGFOSmhFbnlYRTVu -->
    </div>
</div>
@endsection
