<form action="{{ route('foods.store') }}" method="POST">
    @csrf
    Name: <input type="text" name="name" /><br />
    Major: <input type="text" name="major" /><br />
    Calori: <input type="number" name="calori" /><br />
    <input type="submit" value="SAVE" />
</form>