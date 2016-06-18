@extends('layouts.master')
@section('content')
    @include('includes.slider')
    <div>
        <div class="col-md-4 table-bordered well well-sm " style="text-align:center;">
            <h2 class="text-muted ">Random movie</h2>
            <li style="float:left;margin-left:20px;">
                <div style="border:1px solid #333;width:200px;height:250px">
            </li>
        </div>
        
        <div class="col-md-8 table-bordered well well-sm">
            <h2 class="text-muted"><span class="text-danger">Most viewed</span> movies</h2>
            <ul style="display: flex;justify-content: space-between;flex-wrap: wrap;padding:0">
                @for ($i = 0; $i < 6; $i++)
                
                    <li >
                        <div style="border:1px solid #333;width:200px;height:150px">
                    </li>
                
                    
                @endfor
            </ul>
        </div>
    </div>
@stop
