@extends('layouts.main')

@section('content')
<div class="container">
    <h1>Daftar Tugas</h1>

    <!-- Tombol untuk membuat tugas baru dan kembali ke daftar tugas -->
    <div class="button-group">
        <a href="{{ route('tasks.create') }}" class="btn btn-primary">Buat Tugas Baru</a>
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Daftar Tugas</a>
    </div>

    <!-- Tabel Daftar Tugas -->
    <table>
        <thead>
            <tr>
                <th>Judul</th>
                <th>Deskripsi</th>
                <th>Status</th>
                <th>Tanggal Jatuh Tempo</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task->title }}</td>
                <td>{{ $task->description }}</td>
                <td>{{ $task->status }}</td>
                <td>{{ $task->due_date }}</td>
                <td>
                    <a href="{{ route('tasks.show', $task->id) }}" class="btn btn-info">Lihat</a>
                    <a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus tugas ini?');">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
