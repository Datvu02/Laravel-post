<form method="POST" action="update">
    @csrf
    <input type="hidden" name="_method" value="put">
    <input type="text" name="name" placeholder="Tên user">
    <input type="submit" value="Submit">
</form>