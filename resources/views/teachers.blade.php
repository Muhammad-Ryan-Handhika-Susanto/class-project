@extends('layouts.navbar')

@section('content')
<div class="row">
    <div class="col-1">
        <h1>Aulia Rachman</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quasi reprehenderit, minus eligendi dicta unde aliquam delectus veniam quidem odit pariatur, excepturi esse voluptates modi sint dolores mollitia voluptatibus sed placeat! Doloribus atque temporibus, ab dolore mollitia autem in adipisci dicta necessitatibus amet unde ipsum dolores quo tempore. Asperiores, sit repellendus.</p>
        <button>Next</button>
    </div>
    <div class="col-2">
        <img src="{{ 'assets/img/pak-aulia.png' }}" alt="Pak Aulia Rachman" class="man">
        <div class="shape"></div>
    </div>
</div>
@endsection

<link rel="stylesheet" href="{{ 'assets/css/teachers.css' }}">