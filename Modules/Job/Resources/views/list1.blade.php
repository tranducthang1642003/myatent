<!-- resources/views/job/filter_cv.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Filtered CVs for Job: {{ $job->name }}</h1>

    <!-- Hiển thị các CVs phù hợp -->
    @foreach ($filteredCVs as $cv)
        <div>
            <h3>CV: {{ $cv->name }}</h3>
            <p>Phone: {{ $cv->phone }}</p>
            <p>Email: {{ $cv->email }}</p>
            <p>Ngày sinh: {{ $cv->date }}</p>
            <!-- Hiển thị các thông tin khác của CV -->
            <hr>
        </div>
    @endforeach
@endsection
