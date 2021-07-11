<aside class="app-side" id="app-side">
    <!-- BEGIN .side-content -->
    <div class="side-content ">
        <!-- BEGIN .user-profile -->
        <div class="user-profile">
            <img src="{{ asset('users') }}/{{ auth()->user()->image }}" class="profile-thumb" alt="User Thumb">
            <h6 class="profile-name">{{ auth()->user()->name }}</h6>
        </div>
        <!-- END .user-profile -->
        <!-- BEGIN .side-nav -->
        <nav class="side-nav">
            <!-- BEGIN: side-nav-content -->
            <ul class="unifyMenu" id="unifyMenu">
                <li class="menu-header">
                    -- Main
                </li>
                <li>
                    <a href="{{ url('/') }}">
                        <span class="has-icon">
                            <i class="icon-layers3"></i>
                        </span>
                        <span class="nav-title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/alternative') }}">
                        <span class="has-icon">
                            <i class="icon-picture"></i>
                        </span>
                        <span class="nav-title">Alternatif</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/ranking') }}">
                        <span class="has-icon">
                            <i class="icon-bookmarks"></i>
                        </span>
                        <span class="nav-title">Ranking</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/feedback') }}">
                        <span class="has-icon">
                            <i class="icon-happy"></i>
                        </span>
                        <span class="nav-title">Feedback</span>
                    </a>
                </li>                
                <li class="menu-header">
                    -- General Setting
                </li>
                <li>
                    <a href="{{ url('admin/criteria') }}">
                        <span class="has-icon">
                            <i class="icon-document3"></i>
                        </span>
                        <span class="nav-title">Kriteria</span>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/type') }}">
                        <span class="has-icon">
                            <i class="icon-expand"></i>
                        </span>
                        <span class="nav-title">Jenis Alternatif</span>
                    </a>
                </li>
                <li class="menu-header">
                    -- Frontend Setting
                </li>
                <li>
                    <a href="{{ url('admin/slider') }}">
                        <span class="has-icon">
                            <i class="icon-bookmarks"></i>
                        </span>
                        <span class="nav-title">Gambar Slider</span>
                    </a>
                </li>
            </ul>
            <!-- END: side-nav-content -->
        </nav>
        <!-- END: .side-nav -->
    </div>
    <!-- END: .side-content -->
</aside>