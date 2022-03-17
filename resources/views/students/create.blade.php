<form method="POST" action="/students">
    @csrf
    <label for="cohort">cohort:</label><br>
    <textarea type="text" name="cohort"> </textarea><br><br>
    <label for="img_url">image URL</label><br>
    <textarea type="text"  name="img_url"></textarea><br><br>
    <label for="name">name</label><br>
    <textarea type="text"  name="name"></textarea><br><br>
    <label for="id">student id</label><br>
    <textarea type="text"  name="id"></textarea><br><br>
    <input type="submit" value="Submit">
</form>
<p> {{$errors->first('cohort')}}</p>
<p> {{$errors->first('img_url')}}</p>
<p> {{$errors->first('name')}}</p>
<p> {{$errors->first('id')}}</p>
