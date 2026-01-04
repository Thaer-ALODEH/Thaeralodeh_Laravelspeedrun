<form action="{{ route('meals.store') }}" method="POST">
    @csrf
    Customer:
    <select name="customer_id">
        @foreach($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }} {{ $customer->surname }}</option>
        @endforeach
    </select><br />

    Food:
    <select name="food_id">
        @foreach($foods as $food)
            <option value="{{ $food->id }}">{{ $food->name }}</option>
        @endforeach
    </select><br />

    Mealtime: <input type="text" name="mealtime" /><br />
    Like: <input type="text" name="like" /><br />
    <input type="submit" value="SAVE" />
</form>