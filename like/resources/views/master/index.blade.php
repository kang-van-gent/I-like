@extends('client')
@section('contents')
<!--RD Navbar-->
<header class="section rd-navbar-wrap" data-preset='{"title":"Navbar Consulting","category":"header","reload":true,"id":"navbar-consulting"}'>
    <nav class="rd-navbar navbar-consulting">
        <div class="navbar-container">
            <div class="navbar-cell navbar-sidebar">
                <ul class="navbar-navigation rd-navbar-nav">
                    <li class="navbar-navigation-root-item active"><a class="navbar-navigation-root-link" href="index.html">Home</a>

                    </li>
                </ul>
            </div>

            <div class="navbar-cell">
                <div class="navbar-subpanel">
                    <div class="navbar-subpanel-item">
                        <button class="navbar-button navbar-info-button mdi-dots-vertical novi-icon" data-multi-switch='{"targets":".rd-navbar","scope":".rd-navbar","class":"navbar-info-active","isolate":"[data-multi-switch]"}'></button>
                        <div class="navbar-info"><a class="navbar-info-link" href="tel:#"><img class="lazy-img navbar-logo-default" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/logo-default-114x27.svg" alt="Intense" width="114" height="27"><img class="lazy-img navbar-logo-inverse" src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-src="images/logo-inverse-114x27.svg" alt="Intense" width="114" height="27"></a>
                            <button class="btn btn-secondary navbar-action-button">Log out</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>


@endsection