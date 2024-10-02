@csrf
<label for="title">Judul:</label>
<input type="text" id="title" name="title" value="{{ old('title', isset($task) ? $task->title : '') }}" required>

<label for="description">Deskripsi:</label>
<textarea id="description" name="description" required>{{ old('description', isset($task) ? $task->description : '') }}</textarea>

<label for="due_date">Tanggal Jatuh Tempo:</label>
<input type="date" id="due_date" name="due_date" value="{{ old('due_date', isset($task) ? $task->due_date : '') }}" required>

<button type="submit">{{ isset($task) ? 'Perbarui' : 'Simpan' }}</button>
