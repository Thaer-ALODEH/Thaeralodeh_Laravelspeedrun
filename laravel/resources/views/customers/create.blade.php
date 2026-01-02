<form action="{{ route('customers.store') }}" method="POST">


/*
@csrf directive. Laravel requires this for all POST forms to prevent 
Cross-Site Request Forgery attacks.
 Without it, your form will likely return a "419 Page Expired" error
*/

    @csrf
    Name: <input type="text" name="name" /><br />
    Surname: <input type="text" name="surname" /><br />
    Gender: <input type="text" name="gender" /><br />
    Birth Year: <input type="text" name="birthYear" /><br /><br />
    <input type="submit" name="submit" value="KAYDET" />
</form>