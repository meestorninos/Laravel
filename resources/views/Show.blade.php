@extends('Home')

@section('content')

<table class='table table-bordered'>
    <tr>
        <td>name</td>
        <td>number</td>
        <td>address</td>
    </tr>
    @foreach($Data as $File)
    <tr>
    
        <td>{{$File->name }}</td>
        <td>{{$File->number }}</td>
        <td>{{$File->address }}</td>
</tr>
    @endforeach

</table>
    @endsection