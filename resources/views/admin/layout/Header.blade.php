<div id="navbar" class="navbar navbar-default ace-save-state">
    <div class="navbar-container ace-save-state" id="navbar-container">
        <button type="button" class="navbar-toggle menu-toggler pull-left" id="menu-toggler" data-target="#sidebar">
            <span class="sr-only">Toggle sidebar</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <div class="navbar-header pull-left">
            <a href="/" class="navbar-brand" style="margin-left: -2px;">
                <small>
                    <i class="fa fa-camera-retro"></i>
                    Bầu Trời Xanh
                </small>
            </a>
        </div>

        <div class="navbar-buttons navbar-header pull-right" role="navigation">
            <ul class="nav ace-nav">

                <li class="light-blue dropdown-modal">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="https://lh3.googleusercontent.com/fife/AAWUweVv0YHfxJoia1-BMWKhcCyPguqjBM3ngtNLeVmwoO1ThP4SQW0zjGetBFHVG9gf7KmBzqnyC5jlGHNkaL6XwuOSeY62Ow57Tc3yn5T1fjbCXzavAOQD2MIKEkxUwi77ozfJWzTjext0YsyDS7KZ0rDAGKDTfPQuQOMFmInyUgy-XV3BGOws-KL2by6eef8_0nFdwC2LlZ9om4EXCH8ahz_rJPmcmZtKguUX2BQDjvcnWPWt2M-nkSOHCnL5w3ZehgGNS0zRZIjXQ-8g8yq7SxTAZaRhyvpa9shIaat-Qx635STv6FIfsV4-maFlfaNBfr95J6YF2iqGO_3sxhICdi4Hs0LvztIQWAOXQPtvaoqwbxsoKhUEo2Sr6pjfeTx7NVAuTR-Rqo0CotSF-nSzLuEPgC1WZO5zy96AhpGUitrqrObgrvnzre1ZkavsFrROyQJ2p3CpBZyTYuxPGFKjsySGnMLZpgIFpX74SvXYFW_O0t2yifoze9HATHYkDeCZ3RlWzUSWEdMV-0sU-iWFH2wtxz_FObLzIt4KYeOWFa2JOqFAHf9GA6QVFWgB-vrLcb98CU7fg1usKbflWsaazT0hXoqRiESjfohkUJheft3ocXff_eL0lXATC5CwvslN8yWFtBxqx9AxigQ98FAHyYwfyQVMqEPrlP9SM7jYZNxATq5yrLu_55bka0jaY-LnmnFnjx294zIUmhGW6fjKptu21j2fnzvGUw=w2000-h3562-ft" alt="Jason's Photo" />
                        <span class="user-info">
                            @if(isset($users[0]->name))
                            <small>Chào, </small>{{$users[0]->name}}
                            @endif
                        </span>
                        <i class="ace-icon fa fa-caret-down"></i>
                    </a>

                    <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                        <li>
                            <a href="#"><i class="ace-icon fa fa-cog"></i> Cài đặt</a>
                        </li>
                        <li>
                            <a href="#"> <i class="ace-icon fa fa-user"></i> Thông tin cá nhân</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('getLogout') }}"><i class="ace-icon fa fa-power-off"></i> Đăng xuất</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>