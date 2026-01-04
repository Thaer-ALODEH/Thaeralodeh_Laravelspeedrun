<a href="{{ route('exercises.create') }}">NEW EXERCISE</a>
<br /><br /><br />
@foreach ($exercises as $exercise)
    <a href="{{ route('exercises.show', ['exercise'=> $exercise->id]) }}">{{ $exercise->name }} ({{ $exercise->type }})</a>
    <a href="{{ route('exercises.edit',['exercise' => $exercise->id]) }}">(Düzenle)</a>

    <form action="{{ route('exercises.destroy', ['exercise' => $exercise->id]) }}" method="POST" style="display:inline;">
        @csrf
        <input type="hidden" name="_method" value="DELETE" />
        <input type="submit" name="submit" value="SİL" />
    </form>
    <br />
@endforeach