@extends('Home')

@section('content')

   <center> <span> Welcome Mario </span></center>
@if(isset($message))
    @foreach($message as $key => $items)
        <div class="alert alert-danger">
            {{ $items[0] }}
        </div>
    @endforeach
@endif
    
<form action="/add-employee" method="POST">
    @csrf
    <div class="row">
        <div class="col-12">    
            {{-- @if (isset($message)) @if ($message == 'success')
                <div class="alert alert-success">Add employee success</div>
            @else @foreach ($message as $key => $item)
                <div class="alert alert-danger">{{ $item[0] }}</div>
            @endforeach @endif @endif --}}
        </div>
        <div class="col-12">
            <div class="form-group row">
                <label for="email" class="col-sm-2 text-center text-white col-form-label">Employee Name :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control tinmask" id="employeeName" name="employeeName" placeholder="Employee Name">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 text-center text-white col-form-label">Employee Number :</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control tinmask" id="employeeNumber" name="employeeNumber" placeholder="Employee Number">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 text-center text-white col-form-label">Employere Address:</label>
                <div class="col-sm-8">
                    <input type="text" class="form-control tinmask" id="employeeAddress" name="employeeAddress" placeholder="Employee Address">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-12 text-center mb-3">
                    <button type="submit" class="btn btn-success rounded-0"> ADD EMPLOYEE </button>
                </div>
                <div class="col-sm-12 text-center">
                    <a type="button" href="/show" class="btn btn-success rounded  text-white border-0"> VIEW EMPLOYEE </a>
                </div>
            </div>
        </div>
    </div>
</form>
    @endsection