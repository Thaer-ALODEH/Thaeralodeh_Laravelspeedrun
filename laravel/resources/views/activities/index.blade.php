<a href="{{ route('activities.create') }}">NEW ACTIVITY</a>
<br /><br /><br />
@foreach ($activities as $activity)
    <a href="{{ route('activities.show', ['activity'=> $activity->id]) }}">
        {{ $activity->customer->name }} - {{ $activity->exercise->name }}
    </a>
    <a href="{{ route('activities.edit',['activity' => $activity->id]) }}">(Düzenle)</a>

    <form action="{{ route('activities.destroy', ['activity' => $activity->id]) }}" method="POST" style="display:inline;">
        @csrf
        <input type="hidden" name="_method" value="DELETE" />
        <input type="submit" name="submit" value="SİL" />
    </form>
    <br />
@endforeach