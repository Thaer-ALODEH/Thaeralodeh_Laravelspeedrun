<form action="{{ route('exercises.store') }}" method="POST">
    @csrf
    Name: <input type="text" name="name" /><br />
    Type: <input type="text" name="type" /><br />
    Unit: <input type="text" name="unit" /><br />
    Calori: <input type="number" name="calori" /><br />
    <input type="submit" value="SAVE" />
</form>