<!-- @include('common.header')
<div>
    <h1>About Us</h1>
    <h3>User Name: {{ $name }}</h3> 
    <h1>{{$rand}}</h1>
     <h3>User Name: {{ $user[2]}}</h3>
      @if($name == 'Devanshi')
        <p>Welcome, Devanshi! You are an admin.</p>
      @elseif($name == 'Raya')
        <p>Welcome, Raya! You are a user.</p>
      @else
        <p>Other user</p>
      @endif
</div> -->
<!-- <div>
    @foreach($user as $username)
    <h4>{{ $username }}</h4>
    @endforeach
</div>  -->
<!-- <div>
    @for($i = 0; $i <= 10; $i++)
        <h4>{{ $i }}</h4>
    @endfor
</div>
<form action="/submit" method="GET">
    @csrf
    <input type="text" name="username" placeholder="Enter your name">
    <button type="submit" onclick="alert('Form submitted!')">Submit</button>
    <button type="reset">Reset</button>
</form>

@include('common.inner', ['page' => 'this is about page']) -->
<x-message-banner message="About Us" />
<h1>About Page </h1>
<style>
    .success{
        background-color: lavender;
        color: purple;
        padding: 10px;
        border-radius: 10px;
        display: inline-block;
        border-radius: 5px;
        margin: 10px 0;
    }
</style>