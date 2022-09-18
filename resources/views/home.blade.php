@extends('layouts.nav-teachers')

@section('content')
{{-- image slider start --}}
<div class="slider">
    <div class="slides">
        <input type="radio" name="radio-btn" id="radio1">
        <input type="radio" name="radio-btn" id="radio2">
        <input type="radio" name="radio-btn" id="radio3">
        <input type="radio" name="radio-btn" id="radio4">
        <div class="slide first">
            <img src="{{ 'assets/img/bg1.jpg' }}" alt="gambar 1">
        </div>
        <div class="slide">
            <img src="{{ 'assets/img/bg2.jpg' }}" alt="gambar 2">
        </div>
        <div class="slide">
            <img src="{{ 'assets/img/bg3.jpg' }}" alt="gambar 3">
        </div>
        <div class="slide">
            <img src="{{ 'assets/img/bg3.jpg' }}" alt="gambar 4">
        </div>
        <div class="navigation-auto">
            <div class="auto-btn1"></div>
            <div class="auto-btn2"></div>
            <div class="auto-btn3"></div>
            <div class="auto-btn4"></div>
        </div>
    </div>
    <div class="navigation-manual">
        <label for="radio1" class="manual-btn"></label>
        <label for="radio2" class="manual-btn"></label>
        <label for="radio3" class="manual-btn"></label>
        <label for="radio4" class="manual-btn"></label>
    </div>
</div>

<div class="sambutan">
    <h1>Selamat Datang Di Website RPL/PPLG</h1>
</div>

<div class="container">
    <div class="pelajaran">
        <h1>Bahasa pemrograman yang di gunakan</h1>
    </div>
    <div class="img">
        <div class="col-sm-4">
            <a href="#" class="thumbnail"><img src="{{ 'assets/img/html.png' }}" alt="HTML"></a>
        </div>
    </div>
</div>

<script type="text/javascript">
    var counter = 1;
    setInterval(function(){
        document.getElementById('radio' + counter).checked = true;
        counter++;
        if(counter > 4) {
            counter = 1;
        }
    }, 4000);
</script>
{{-- image slider end --}}
@endsection

<link rel="stylesheet" href="{{ 'assets/css/home.css' }}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">