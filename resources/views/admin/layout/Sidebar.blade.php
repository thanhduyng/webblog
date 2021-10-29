<!-- /.sidebar-shortcuts -->
<div class="sidebar-shortcuts" id="sidebar-shortcuts">
    <div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
        <button class="btn btn-success"><i class="ace-icon fa fa-signal"></i> </button>
        <button class="btn btn-info"><i class="ace-icon fa fa-pencil"></i></button>
        <button class="btn btn-warning"><i class="ace-icon fa fa-users"></i></button>
        <button class="btn btn-danger"><i class="ace-icon fa fa-cogs"></i></button>
    </div>

    <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
        <span class="btn btn-success"></span>
        <span class="btn btn-info"></span>
        <span class="btn btn-warning"></span>
        <span class="btn btn-danger"></span>
    </div>
</div>
<!-- /.sidebar-shortcuts -->

<ul class="nav nav-list">
    <li class="">
        <a href="/thanhnguyenduyy">
            <i class="menu-icon fa fa-tachometer"></i>
            <span class="menu-text"> Bảng điều khiển </span>
        </a>
        <b class="arrow"></b>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-picture-o"></i>
            <span class="menu-text"> Slide </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfSlide')}}">
                    <i class="menu-icon fa fa-caret-right"></i>Danh sách Slide
                </a>
            </li>
            <li class="">
                <a href="{{route('CreateSlide')}}">
                    <i class="menu-icon fa fa-caret-right"></i>Thêm/Cập nhập  Slide
                </a>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-pencil-square-o"></i>
            <span class="menu-text"> Về tôi </span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>

        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfAbout')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Danh sách về tôi
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('CreateAbout')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                   Thêm/Cập nhập về tôi
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-list-alt"></i>
            <span class="menu-text"> Danh mục bài viết</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfNewCategory')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                   Danh sách danh mục bài viết
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('CreateNewCategory')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm/Cập nhập danh mục bài viết
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>

    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-newspaper-o"></i>
            <span class="menu-text"> Bài viết</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfNew')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                   Danh sách bài viết
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('CreateNew')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm/Cập nhập bài viết
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
    <li class="">
        <a href="#" class="dropdown-toggle">
            <i class="menu-icon fa fa-user"></i>
            <span class="menu-text"> Người quản trị</span>
            <b class="arrow fa fa-angle-down"></b>
        </a>
        <b class="arrow"></b>
        <ul class="submenu">
            <li class="">
                <a href="{{route('ListOfUser')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                   Danh sách người quản trị
                </a>
                <b class="arrow"></b>
            </li>

            <li class="">
                <a href="{{route('CreateUser')}}">
                    <i class="menu-icon fa fa-caret-right"></i>
                    Thêm/Cập nhập người quản trị
                </a>
                <b class="arrow"></b>
            </li>
        </ul>
    </li>
</ul>
</div>