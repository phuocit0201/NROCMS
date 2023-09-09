<!-- need to remove -->
<li class="nav-item">
    <a href="{{ route('home') }}" class="nav-link {{ Request::is('home') ? 'active' : '' }}">
        <i class="nav-icon fas fa-home"></i>
        <p>Bảng Điều Khiển</p>
    </a>
    <a href="{{ route('home') }}" class="nav-link">
        <i class="nav-icon fas fa-home"></i>
        <p>Bài Viết</p>
    </a>
</li>
