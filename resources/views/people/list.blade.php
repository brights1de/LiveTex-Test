@extends('default')
@section('content')
<div>
    <h1>All peoples</h1>
    <table>
        <thead>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>surname</th>
            <th>age</th>
            <th>gender</th>
        </tr>
        </thead>
        <tbody>
        @for ($i = 0; $i < count($peoples); $i++)
            <tr>
                <td>{{$peoples[$i]['id']}}</td>
                <td>{{$peoples[$i]['name']}}</td>
                <td>{{$peoples[$i]['surname']}}</td>
                <td>{{$peoples[$i]['age']}}</td>
                <td>{{$peoples[$i]['gender']}}</td>
            </tr>
        @endfor
        </tbody>
    </table>
</div>
@stop