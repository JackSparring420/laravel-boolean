@extends('layouts.main-layout')
@section('content')
    
<h1>Insert new postcard</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form  action="{{ route('store')}}" method="POST" enctype="multipart/form-data">

    @method('post')
    @csrf

        <label for="sender">sender:</label>
        <input type="text" name="sender"> <br>

        <label for="addres">address:</label>
        <input type="text" name="addres"> <br>

        <label for="text">text:</label>
        <input type="text" name="text"rows="10"> <br>

        <label for="image">image::</label>
        <input type="file" name="image"> <br>
        

        <input type="submit" value="CREATE">
</form>

@endsection