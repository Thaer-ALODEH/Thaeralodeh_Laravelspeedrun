<form action="{{ route('meals.update', ['meal' => $meal->id]) }}" method="POST">
    @csrf
    @method('PUT')

    Customer:
    <select name="customer_id">
        @foreach($customers as $customer)
            <option value="{{ $customer->id }}" {{ $meal->customer_id == $customer->id ? 'selected' : '' }}>
                {{ $customer->name }} {{ $customer->surname }}
            </option>
        @endforeach
    </select><br />

    Food:
    <select name="food_id">
        @foreach($foods as $food)
            <option value="{{ $food->id }}" {{ $meal->food_id == $food->id ? 'selected' : '' }}>
                {{ $food->name }}
            </option>
        @endforeach
    </select><br />

    Mealtime: <input type="text" name="mealtime" value="{{ $meal->mealtime }}" /><br />
    Like: <input type="text" name="like" value="{{ $meal->like }}" /><br />

    <input type="submit" value="UPDATE" />
</form>