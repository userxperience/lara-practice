<!DOCTYPE html>
<html lang="en">

@extends('common.master')

@section('content')

<body id=body>

    <main>
        <h1>
            students:
            <ul style="font-size : 20px">
                @foreach($student as $id)
                    <li> student name = {!! $id->name !!}</li>
                    <li> cohort = {!! $id->cohort !!}</li>
                    <li> id= {!! $id->id !!}</li>
                    <img src="{!! $id->img_url !!}" style="height: 100px">
                    <br><br><br><br><br>
                @endforeach
            </ul>
        </h1>
    </main>

@endsection
