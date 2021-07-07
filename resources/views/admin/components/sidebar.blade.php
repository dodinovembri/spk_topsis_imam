<aside class="app-side" id="app-side">
    <!-- BEGIN .side-content -->
    <div class="side-content ">
        <!-- BEGIN .user-profile -->
        <div class="user-profile">
            <img src="{{ asset('users') }}/{{ auth()->user()->image }}" class="profile-thumb" alt="User Thumb">
            <h6 class="profile-name">{{ auth()->user()->name }}</h6>
            <ul class="profile-actions">
                <li>
                    <a href="#">
                        <i class="icon-social-skype"></i>
                        <span class="count-label red"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-social-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="login.html">
                        <i class="icon-export"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END .user-profile -->
        <!-- BEGIN .side-nav -->
        <nav class="side-nav">
            <!-- BEGIN: side-nav-content -->
            <ul class="unifyMenu" id="unifyMenu">
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
                    <a href="{{ url('admin/criteria') }}">
                        <span class="has-icon">
                            <i class="icon-document3"></i>
                        </span>
                        <span class="nav-title">Kriteria</span>
                    </a>
                </li>
            </ul>
            <!-- END: side-nav-content -->
        </nav>
        <!-- END: .side-nav -->
    </div>
    <!-- END: .side-content -->
</aside>