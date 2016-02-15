@extends('default')
@section('content')
    <h1>Family tree </h1>
    <table class="tree-t">
        <tr>
            <td>
                <span>3 generation (grandson, granddaughter)</span>
            </td>
            @for ($i = 0; $i < count($family); $i++)
                @if($family[$i]['generation_id'] == 3)
                    <td>{{$family[$i]['name'].' '.$family[$i]['surname']}}</td>
                @endif
            @endfor
        </tr>
        <tr>
            <td>
                <span>2 generation (son, daughter)</span>
            </td>
            @for ($i = 0; $i < count($family); $i++)
                @if($family[$i]['generation_id'] == 2)
                    <td>{{$family[$i]['name'].' '.$family[$i]['surname']}}</td>
                @endif
            @endfor
        </tr>
        <tr>
            <td>
                <span>1 generation (grandpa, grandma)</span>
            </td>
            @for ($i = 0; $i < count($family); $i++)
                @if($family[$i]['generation_id'] == 1)
                    <td>{{$family[$i]['name'].' '.$family[$i]['surname']}}</td>
                @endif
            @endfor
        </tr>
    </table>
@stop