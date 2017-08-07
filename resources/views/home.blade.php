@extends('layouts.master')

@section('content')
    <my-app>
        <span class="musicbar inline animate" *ngIf="loaded" style="width:70px;height:70px;position: absolute;top: 0px;bottom: 0px;">
            <span class="bar1 a1 bg-primary lter"></span>
            <span class="bar2 a2 bg-info lt"></span>
            <span class="bar3 a3 bg-success"></span>
            <span class="bar4 a4 bg-warning dk"></span>
            <span class="bar5 a5 bg-danger dker"></span>
        </span>
    </my-app>
@endsection
