<form action="{{ route('foods.update', ['food' => $food->id]) }}" method="POST">
    @csrf
    @method('PUT')
    Name: <input type="text" name="name" value="{{ $food->name }}" /><br />
    Major: <input type="text" name="major" value="{{ $food->major }}" /><br />
    Calori: <input type="number" name="calori" value="{{ $food->calori }}" /><br />
    <input type="submit" value="UPDATE" />
</form>