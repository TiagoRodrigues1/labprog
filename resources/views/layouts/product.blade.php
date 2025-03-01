<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="mainpage.css">
    <title>@yield('title','Mainpage | Online Store')</title>
</head>

<div class="container">
    @include('includes.header')
    <form class="form-inline" style="background-color:#2e4057" method="get">
        @csrf
        <label class="my-1 mr-2" for="inlineFormCustomSelectPref" style="color:white">&nbsp;Order By: </label>
        <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref" name="select" >
            <option value="HighToLow">Price (High > Low)</option>
            <option value="LowToHigh">Price (Low > High)</option>
            <option value="NewestToOldest">Newest > Oldest</option>
            <option value="OldestToNewest">Oldest > Newest</option>
        </select>
        <input type="submit" class="btn btn-outline-light">
    </form>
    <div class="row">
        <div class="col-12">
            <table class="table table-image" style="background-color:white">
                <thead>
                    <tr>
                        <th scope="col">Picture</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Add To Cart</th>
                    </tr>
                </thead>
                @yield('content')
                @include ('includes.footer')
        </div>