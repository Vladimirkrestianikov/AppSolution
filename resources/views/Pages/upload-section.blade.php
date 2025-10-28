{{-- resources/views/your-view.blade.php --}}

<section class="upload-section">
    <div class="container">
        <h2>Загрузка файлов</h2>

        <form id="uploadForm" enctype="multipart/form-data">
            @csrf
            <div class="upload-box">
                <input type="file" id="fileUpload" name="files[]" class="file-input" multiple>
                <label for="fileUpload" class="upload-label">Выбрать файлы</label>
            </div>
            <button type="submit" class="btn btn-primary mt-3" id="uploadBtn">Загрузить файлы</button>
        </form>

        <div id="uploadStatus" class="mt-3"></div>

        <div class="uploaded-list mt-4" id="uploadedList">
            <h4>Ваши файлы:</h4>
            <div id="filesList">
                <!-- Файлы будут загружаться здесь через JavaScript -->
            </div>
        </div>
    </div>
</section>

<style>
    .upload-box {
        border: 2px dashed #ccc;
        padding: 2rem;
        text-align: center;
        border-radius: 8px;
        margin: 1rem 0;
    }

    .file-input {
        display: none;
    }

    .upload-label {
        cursor: pointer;
        background: #007bff;
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 4px;
        display: inline-block;
    }

    .uploaded-item {
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        padding: 0.75rem;
        margin: 0.5rem 0;
        border-radius: 4px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .delete-btn {
        background: #dc3545;
        color: white;
        border: none;
        padding: 0.25rem 0.5rem;
        border-radius: 3px;
        cursor: pointer;
    }
</style>
