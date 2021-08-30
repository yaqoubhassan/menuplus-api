<nav class="navbar navbar-expand-md navbar-dark bg-dark py-3">
    <div class="container-fluid">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                {{-- change this to the left arrow caret symbol --}}
                <a href="javascript:history.back()" class="nav-link text-light"><i class="fa fa-chevron-left"></i></a>
            </li>
        </ul>
        <div class="mx-auto order-0">
            {{-- The Page Title Goes Here --}}
            <span class="navbar-brand mx-auto" style="font-weight: bolder;">@yield('title')</span>
        </div>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
            </li>
        </ul>
    </div>
</nav>