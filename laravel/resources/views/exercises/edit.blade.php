<form action="{{ route('exercises.update', ['exercise' => $exercise->id]) }}" method="POST">
    @csrf
    @method('PUT')
    Name: <input type="text" name="name" value="{{ $exercise->name }}" /><br />
    Type: <input type="text" name="type" value="{{ $exercise->type }}" /><br />
    Unit: <input type="text" name="unit" value="{{ $exercise->unit }}" /><br />
    Calori: <input type="number" name="calori" value="{{ $exercise->calori }}" /><br />
    <input type="submit" value="UPDATE" />
</form>