<a href="{{ route('meals.create') }}">NEW MEAL</a>
<br /><br /><br />
@foreach ($meals as $meal)
    <a href="{{ route('meals.show', ['meal'=> $meal->id]) }}">
        {{ $meal->customer->name }} - {{ $meal->food->name }}
    </a>
    <a href="{{ route('meals.edit',['meal' => $meal->id]) }}">(Düzenle)</a>

    <form action="{{ route('meals.destroy', ['meal' => $meal->id]) }}" method="POST" style="display:inline;">
        @csrf
        <input type="hidden" name="_method" value="DELETE" />
        <input type="submit" name="submit" value="SİL" />
    </form>
    <br />
@endforeach