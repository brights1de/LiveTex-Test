@extends('default')
@section('content')
    {{-- on completion... --}}
    {{--@include('people\tree-helper', ['trees' => $trees])--}}
    {{----}}
    <?php
    echo '<pre>';
    print_r($trees);
    echo '</pre>';
    ?>
@stop