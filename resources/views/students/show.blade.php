@section('content')

<ul style="font-size : 20px">
<li> student name = {!! $id->name !!}</li>
<li> cohort = {!! $id->cohort !!}</li>
<li> id= {!! $id->id !!}</li>
<img src="{!! $id->img_url !!}" style="height: 100px">
    </ul>
@endsection
