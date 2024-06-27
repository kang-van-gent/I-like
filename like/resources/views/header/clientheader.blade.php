<!--RD Navbar-->
<header class="section rd-navbar-wrap" data-preset='{"title":"Navbar Default","category":"header","reload":true,"id":"navbar-default"}'>
    <nav class="rd-navbar">
        <div class="navbar-container">
            <div class="navbar-cell">
                <div class="navbar-panel">
                    <button class="navbar-switch int-hamburger novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","isolate":"[data-multi-switch]"}'></button>
                    <div class="navbar-logo">
                        <a class="navbar-logo-link" href="index.html">
                            <img class="lazy-img navbar-logo-default" data-src="/images/logo-gainlike.png" alt="Gainlike" width="117" height="30">
                        </a>
                    </div>
                </div>
            </div>
            <div class="navbar-cell navbar-spacer"></div>
            <div class="navbar-cell navbar-sidebar">
                <ul class="navbar-navigation rd-navbar-nav">
                    <li class="navbar-navigation-root-item "><a class="navbar-navigation-root-link" href="/">หน้าหลัก</a></li>
                    <li class="navbar-navigation-root-item "><a class="navbar-navigation-root-link" href="/blogs">บทความ</a></li>
                    <div class="navbar-cell">
                        <div class="navbar-subpanel">
                            <div class="navbar-subpanel-item">
                                <button class="navbar-button navbar-info-button mdi-dots-vertical novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-info-active","isolate":"[data-multi-switch]"}'></button>
                                <div class="navbar-info">
                                    @if(Session::has('user'))
                                    <a class="btn btn-secondary navbar-action-button" href="/dashboard">
                                        <div class="icon-box-icon novi-icon int-user"></div>
                                    </a>
                                    @else
                                    <a class="btn btn-primary navbar-action-button" href="/login">
                                        <div class="icon-box-icon novi-icon mdi-login"> เข้าสู่ระบบ</div>
                                    </a>
                                    <a class="btn btn-secondary navbar-action-button" href="/register">
                                        <div class="icon-box-icon novi-icon mdi-account-plus"> สมัครสมาชิก</div>
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(Session::has('user'))
                    <li class="navbar-navigation-root-item"><a class="navbar-navigation-root-link" href="/logout">
                            <div class="icon-box-icon novi-icon mdi-login"> ออกจากระบบ</div>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>