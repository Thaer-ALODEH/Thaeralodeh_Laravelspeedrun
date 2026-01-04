<form action="{{ route('activities.update', ['activity' => $activity->id]) }}" method="POST">
    @csrf
    @method('PUT')

    Customer:
    <select name="customer_id">
        @foreach($customers as $customer)
            <option value="{{ $customer->id }}" {{ $activity->customer_id == $customer->id ? 'selected' : '' }}>
                {{ $customer->name }} {{ $customer->surname }}
            </option>
        @endforeach
    </select><br />

    Exercise:
    <select name="exercise_id">
        @foreach($exercises as $exercise)
            <option value="{{ $exercise->id }}" {{ $activity->exercise_id == $exercise->id ? 'selected' : '' }}>
                {{ $exercise->name }}
            </option>
        @endforeach
    </select><br />

    Repetition: <input type="number" name="repetition" value="{{ $activity->repetition }}" /><br />
    Calori: <input type="number" name="calori" value="{{ $activity->calori }}" /><br />
    Like: <input type="text" name="like" value="{{ $activity->like }}" /><br />
    Duration: <input type="number" name="duration" value="{{ $activity->duration }}" /><br />

    <input type="submit" value="UPDATE" />
</form>