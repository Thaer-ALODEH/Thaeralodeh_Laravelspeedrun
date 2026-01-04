<form action="{{ route('activities.store') }}" method="POST">
    @csrf
    Customer:
    <select name="customer_id">
        @foreach($customers as $customer)
            <option value="{{ $customer->id }}">{{ $customer->name }} {{ $customer->surname }}</option>
        @endforeach
    </select><br />

    Exercise:
    <select name="exercise_id">
        @foreach($exercises as $exercise)
            <option value="{{ $exercise->id }}">{{ $exercise->name }}</option>
        @endforeach
    </select><br />

    Repetition: <input type="number" name="repetition" /><br />
    Calori: <input type="number" name="calori" /><br />
    Like: <input type="text" name="like" /><br />
    Duration: <input type="number" name="duration" /><br />
    <input type="submit" value="SAVE" />
</form>