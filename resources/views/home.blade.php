<!-- @include('common.header')
@include('common.inner', ['page' => 'this is home page']) -->

<x-message-banner message="Welcome to the Home Page!" />
<x-message-banner message="We're glad you're here!" />

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
</style>