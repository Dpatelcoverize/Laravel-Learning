<!-- @include('common.header')
@include('common.inner', ['page' => 'this is home page']) -->

<x-message-banner message="Welcome to the Home Page!" class="success" />
<x-message-banner message="We're glad you're here!" class="success" />

<br>
<br>
<br>

<x-message-banner message="Password not correct please try again." class="error" />

<h1>Home Page </h1>

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
    .error{
        background-color: lightpink;
        color: white;
        padding: 10px;
        border-radius: 10px;
        display: inline-block;
        border-radius: 5px;
        margin: 10px 0;
    }
</style>