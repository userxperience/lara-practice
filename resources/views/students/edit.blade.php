<form method ="POST" action="/articles/ {{$students->id}}">
    @csrf
    @method('PUT')
    <label for="name">name:</label><br>
    <input type="text" name="name" value=""><br><br>
    <label for="cohort">cohort</label><br>
    <input type="text" name="cohort" value=""><br><br>
    <label for="img_url">image URL:</label><br>
    <input type="text" name="img_url" value=""><br><br>
    <label for="id">ID:</label><br>
    <input type="text" name="id" value=""><br><br>
    <input type="submit" value="Submit">


</form>
<br><br><br><br>
<h1>DELETE THIS STUDENT</h1>
<form method="POST" action="/students/{{ $students->id }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>

</form>
