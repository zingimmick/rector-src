@extends('layout')

<?php
// Some code to trigger rector to write the file
echo $value ?? 10;
?>

@section('content')
    The value is <?= $something ?>
@endsection
