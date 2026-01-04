<h1>Meal Details</h1>
<p>Customer: {{ $meal->customer->name }} {{ $meal->customer->surname }}</p>
<p>Food: {{ $meal->food->name }}</p>
<p>Mealtime: {{ $meal->mealtime }}</p>
<p>Like: {{ $meal->like }}</p>
<br />
<a href="{{ route('meals.index') }}">Back to list</a>