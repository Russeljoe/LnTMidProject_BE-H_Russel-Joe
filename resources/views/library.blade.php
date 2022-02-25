@extends('layouts/app')

@section('judul', 'Library Page')

@section('konten')
    <div class="container">
        <h3>Our Books</h3>
        <hr>
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-4">
                    <div class="col-md-12 bg-info book-konten mt-4">
                        <h1 class="judul">{{ $book->title }}</h1>
                        <span class="penulis badge bg-dark">{{ $book->writer }}</span><br>
                        <span class="halaman">Total Pages : {{ $book->pages }}</span><br>
                        <span class="tahun">Publication Year : {{ $book->year }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection