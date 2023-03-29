{{ env('APP_NAME') }}
<form action="{{route('env.store')}}" method="POST">
    @csrf
    <input type="text" name="old_app_name" value="{{env('APP_NAME')}}" disabled>
    <input type= "text" name= "app_name">
    <input type= "submit" value= "Submit">
</form>