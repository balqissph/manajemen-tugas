@extends('layouts.main')

@section('content')
<style>
    /* style.css */

    body {
        font-family: 'Arial', sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
        line-height: 1.6;
    }

    .container {
        width: 90%;
        max-width: 600px;
        margin: 40px auto;
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    h1 {
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    /* Form Styling */
    form {
        display: flex;
        flex-direction: column;
    }

    label {
        margin-bottom: 8px;
        font-weight: bold;
        color: #555;
    }

    input[type="text"],
    input[type="date"],
    textarea {
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 15px;
        transition: border-color 0.3s;
        font-size: 16px;
    }

    input[type="text"]:focus,
    input[type="date"]:focus,
    textarea:focus {
        border-color: #007BFF;
        outline: none;
    }

    /* Tombol Simpan */
    button {
        padding: 12px;
        border: none;
        border-radius: 5px;
        background-color: #007BFF;
        color: white;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s;
        margin-top: 10px;
    }

    button:hover {
        background-color: #0056b3;
    }

    /* Tombol Kembali */
    .button-group {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    .btn {
        display: inline-block;
        padding: 12px 20px;
        margin: 0 5px;
        border-radius: 5px;
        text-decoration: none;
        color: white;
        font-size: 16px;
        transition: background-color 0.3s;
    }

    .btn-secondary {
        background-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
    }

    /* Gaya untuk alert messages */
    .alert {
        padding: 15px;
        margin: 20px 0;
        border-radius: 5px;
        font-size: 14px;
    }

    .alert-success {
        background-color: #dff0d8;
        color: #3c763d;
    }

    .alert-danger {
        background-color: #f2dede;
        color: #a94442;
    }
</style>

<div class="container">
    <h1>Tambahkan Tugas</h1>
    
    <!-- Formulir untuk menambahkan tugas baru -->
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="title">Judul</label>
        <input type="text" name="title" required>

        <label for="description">Deskripsi</label>
        <textarea name="description" rows="4" required></textarea>

        <label for="status">Status</label>
        <input type="text" name="status" required>

        <label for="due_date">Tanggal Jatuh Tempo</label>
        <input type="date" name="due_date" required>

        <button type="submit" class="btn btn-primary">Simpan Tugas</button>
    </form>

    <!-- Tombol kembali ke daftar tugas -->
    <div class="button-group">
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Kembali ke Daftar Tugas</a>
    </div>
</div>
@endsection
