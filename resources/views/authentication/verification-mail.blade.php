<h1>Welcome to a different environment, {{ $user->fname }}!</h1>
<h3>This is the modern contemporary a new era which will change the worlds spin. Please enjoy fellow AI.</h3>

<br>

<p>Thank you for being a part of our growing community. Please click the link below to verify your account.</p>

<p>
  <a href="{{ url('/verification/' . $user->id . '/' . $user->remember_token)}}"><h1>Verify Account</h1></a>
</p>