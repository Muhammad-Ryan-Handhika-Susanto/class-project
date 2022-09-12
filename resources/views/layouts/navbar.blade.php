{{-- Navbar Start --}}
<nav>
    <div class="navbar">PPLG_WEB</div>
    <input type="checkbox" name="" id="click">
    <label for="click" class="menu-btn">
        <i class="fas fa-bars"></i>
    </label>
    <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Teachers</a></li>
        <li><a href="#">Memories</a></li>
        <li><a href="#">Achievements</a></li>
        <li><a href="#">Informations</a></li>
    </ul>
</nav>
<div style="margin-bottom: 70px;">
    .
</div>
{{-- Navbar End --}}

{{-- Content Start --}}
@yield('content')
{{-- Content End --}}

{{-- Link Start --}}
<link rel="stylesheet" href="{{ 'assets/css/navbar.css' }}">
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
{{-- Link End --}}
