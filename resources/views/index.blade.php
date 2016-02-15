@extends('default')
@section('content')

<div class="main">
    <h1>Simple Test</h1>
    <ul>
        <li>
            <a href="{{ URL::route('showPeopleForm') }}"> Add people</a>
        </li>
        <li>
            <a href="{{ URL::route('allPeoples') }}"> All peoples</a>
        </li>
    </ul>
</div>
@stop