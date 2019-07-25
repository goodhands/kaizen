<nav class="px-primary flex items-center flex-row justify-between h-16 bg-black w-full">
    <div class="brand w-1/12 text-white">
        <a href="{{ url('/') }}" class="brand-item">
            Skleptos
        </a>
    </div>
    <div class="menu w-full h-full flex flex-row justify-between items-center text-sm">
        <div class="nav-menu text-primary flex justify-between w-1/6">
            <a href="{{ url('/explore') }}">Explore</a>
            <a href="{{ url('/discover') }}">Discover</a>
            <a href="#" class="relative">Projects</a>
            <a href="#" class="relative">Teams <span class="nav-info">coming soon!</span></a>
        </div>
        <nav-control></nav-control>
    </div>
</nav>