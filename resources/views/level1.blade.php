@extends('layouts.app')

@section('content')
<div class="card">
    <h5 class="card-header">
        <div class="row" >

            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <form method="POST" action="level2" >
                @csrf
                    <div class="form-group row">
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="flag" name="flag" placeholder="FLAG : XXXXXXXXX" required>
                            <input type="hidden"  id="level" name="level" value="1" >
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

<div class="row justify-content-center">
<div class="col-md-8">
    <div class="card ">
        <div class="card-header" style="text-align:center">Enter the valid keyword to get the flag .... :-) :P</div>

        <div class="card-body " >
            <form class="form-inline" >
                <div class="form-group mx-sm-3 mb-2" style="padding-left:150px">
                    <input type="text" class="form-control" id="keyword" placeholder="Keyword..">
                </div>
                <button type="button" onclick="validateInput()" class="btn btn-primary mb-2">Check Validity</button>
            </form>
        </div>
    </div>
</div>
</div>


<script src="/js/md5.min.js"></script>
<script>
function validateInput()
{
    var keyword = document.getElementById("keyword").value;
    if( md5(keyword) == '6ba893cf83c079e7aa34c5b3e7adb8b0')
    {
        alert('FLAG : '+keyword);
    }
    else
    {
        alert('Wrong Guess, Try again... :-(');
    }
}
</script>
@endsection
