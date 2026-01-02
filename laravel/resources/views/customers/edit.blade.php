<form action="{{ route('customers.update', ['customer'=> $customer->id]) }}" method="POST"> 
    // It is important to focus on that first one sould be post
    <input type="hidden" name="_method" value="PUT" />
    @csrf
    Name: <input type="text" name="name" value="{{ $customer->name }}" /><br />
    Surname: <input type="text" name="surname" value="{{ $customer->surname }}" /><br />
    Gender: <input type="text" name="gender" value="{{ $customer->gender }}" /><br />
    Birth Year: <input type="text" name="birthYear" value="{{ $customer->birthYear }}" /><br /><br />
    <input type="submit" name="submit" value="GÜNCELLE" />
</form>