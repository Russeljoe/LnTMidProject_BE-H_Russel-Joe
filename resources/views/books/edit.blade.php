@extends('layouts/app')

@section('judul', 'Editting Page')

@section('konten')
    <div class="container">
        <div class="col-md-8 table-wrapper">
        <h3>Edit Archive</h3>
        <h6>Fill the form to edit the book's data from our archive</h6>
        <hr>
        <form action="{{ url('/library/' . $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label class="form-label">Book's Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" placeholder="Please input the book's title here" name="title" value="{{ $book->title }}">
            @error('title') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Author's Name</label>
            <input type="text" class="form-control @error('writer') is-invalid @enderror" placeholder="Please input the author's name here" name="writer" value="{{ $book->writer }}">
            @error('writer') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Total of Pages</label>
            <input type="number" class="form-control @error('pages') is-invalid @enderror" placeholder="Please input the total of book pages here" name="pages" value="{{ $book->pages }}">
            @error('pages') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Publication Year</label>
            <input type="number" class="form-control @error('year') is-invalid @enderror" placeholder="Please input the book's publication year here" name="year" value="{{ $book->year }}">
            @error('year') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>
@endsection