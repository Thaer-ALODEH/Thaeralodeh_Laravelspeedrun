Customer:<br />

Name: {{ $customer->name }}<br />
Surname: {{ $customer->surname }}<br />
Gender: {{ $customer->gender }}<br />
BirthYear: {{ $customer->birthYear }}<br />

<a href="{{ route('customers.index') }}">All Customers</a>