<form action="/insert" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button type="submit">Import</button>
</form>
