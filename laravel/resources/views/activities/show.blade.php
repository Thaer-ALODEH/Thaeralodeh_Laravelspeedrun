<h1>Activity Details</h1>
<p>Customer: {{ $activity->customer->name }} {{ $activity->customer->surname }}</p>
<p>Exercise: {{ $activity->exercise->name }}</p>
<p>Repetition: {{ $activity->repetition }}</p>
<p>Calori: {{ $activity->calori }}</p>
<p>Like: {{ $activity->like }}</p>
<p>Duration: {{ $activity->duration }}</p>
<br />
<a href="{{ route('activities.index') }}">Back to list</a>