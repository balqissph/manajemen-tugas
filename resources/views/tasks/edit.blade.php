@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Edit Tugas</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Judul</label>
        <input type="text" name="title" value="{{ $task->title }}" required>

        <label for="description">Deskripsi</label>
        <textarea name="description" rows="4" required>{{ $task->description }}</textarea>

        <label for="status">Status</label>
        <input type="text" name="status" value="{{ $task->status }}" required>

        <label for="due_date">Tanggal Jatuh Tempo</label>
        <input type="date" name="due_date" value="{{ $task->due_date }}" required>

        <button type="submit">Perbarui Tugas</button>
    </form>

    <!-- Tombol kembali ke daftar tugas -->
    <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali ke Daftar Tugas</a>
</div>
@endsection
