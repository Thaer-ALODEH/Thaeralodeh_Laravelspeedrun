<h1>{{ $food->name }}</h1>
<p>Major: {{ $food->major }}</p>
<p>Calori: {{ $food->calori }}</p>
<br />
<a href="{{ route('foods.index') }}">Back to list</a>