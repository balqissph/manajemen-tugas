@extends('layouts.main')

@section('content')
<style>
    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        line-height: 1.6;
    }

    .container {
        width: 80%;
        max-width: 800px;
        margin: 20px auto;
        background: white;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .task-title {
        color: #007BFF;
        font-size: 24px;
        margin-bottom: 10px;
        border-bottom: 2px solid #007BFF;
        padding-bottom: 5px;
    }

    .task-detail {
        background: #f9f9f9;
        padding: 15px;
        border-radius: 5px;
        margin: 10px 0;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .task-detail strong {
        color: #555;
    }

    /* Tombol Styling */
    .btn {
        display: inline-block;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        background-color: #007BFF;
        color: white;
        text-decoration: none;
        font-size: 16px;
        text-align: center;
        transition: background-color 0.3s;
        margin-top: 20px;
    }

    .btn:hover {
        background-color: #0056b3;
    }

    /* Responsive Styles */
    @media (max-width: 600px) {
        .container {
            width: 95%;
        }

        .task-title {
            font-size: 20px;
        }
    }
</style>

<div class="container">
    <h1>Detail Tugas</h1>

    <div class="task-title">{{ $task->title }}</div>
    
    <div class="task-detail">
        <p><strong>Deskripsi:</strong> {{ $task->description }}</p>
        <p><strong>Status:</strong> {{ $task->status }}</p>
        <p><strong>Tanggal Selesai:</strong> {{ $task->due_date }}</p>
    </div>

    <!-- Tombol kembali ke daftar tugas -->
    <a href="{{ route('tasks.index') }}" class="btn">Kembali ke Daftar Tugas</a>
</div>
@endsection
