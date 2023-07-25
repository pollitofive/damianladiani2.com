<header id="site_header" class="header mobile-menu-hide" style="padding-top: 35px">
    <livewire:header-content />
    <livewire:main-menu />
    <livewire:social-links />
    <div class="header-buttons">
        <livewire:select-language />
        <a href="{{ route('download',session()->get('locale')) }}" target="_blank" class="btn btn-primary">Download CV</a>
    </div>

    <div class="copyrights">© {{ date('Y') }} All rights reserved.</div>
</header>
<!-- Mobile Navigation -->
<div class="menu-toggle">
    <span></span>
    <span></span>
    <span></span>
</div>
<!-- End Mobile Navigation -->

<!-- Arrows Nav -->
<div class="lmpixels-arrows-nav">
    <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
    <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
</div>
<!-- End Arrows Nav -->
