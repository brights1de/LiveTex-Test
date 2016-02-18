@extends('default')
@section('content')
    @include('people\tree-helper', ['trees' => $trees])
    <?php
    echo '<pre>';
    print_r($trees);
    echo '</pre>';
    ?>
@stop