<h2>Hey, It's me {{ $user->name }}</h2>
<br>

<strong>User details: </strong><br>
<strong>Name: </strong>{{ $user->name }} <br>
<strong>Email: </strong>{{ $user->email }} <br>
<strong>Phone: </strong>{{ $user->user->mobile }} <br>
<strong>Subject: </strong>{{ $user->subject }} <br>
<strong>Message: </strong>{{ $user->message }} <br><br>

Thank you