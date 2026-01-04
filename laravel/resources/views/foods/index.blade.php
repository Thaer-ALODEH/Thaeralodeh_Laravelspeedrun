<a href="{{ route('foods.create') }}">NEW FOOD</a>
<br /><br /><br />
@foreach ($foods as $food)
    <a href="{{ route('foods.show', ['food'=> $food->id]) }}">{{ $food->name }} ({{ $food->id }})</a>
    <a href="{{ route('foods.edit',['food' => $food->id]) }}">(Düzenle)</a>

    <form action="{{ route('foods.destroy', ['food' => $food->id]) }}" method="POST" style="display:inline;">
        @csrf
        <input type="hidden" name="_method" value="DELETE" />
        <input type="submit" name="submit" value="SİL" />
    </form>
    <br />
@endforeach