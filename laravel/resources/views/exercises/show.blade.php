<h1>{{ $exercise->name }}</h1>
<p>Type: {{ $exercise->type }}</p>
<p>Unit: {{ $exercise->unit }}</p>
<p>Calori: {{ $exercise->calori }}</p>
<br />
<a href="{{ route('exercises.index') }}">Back to list</a>