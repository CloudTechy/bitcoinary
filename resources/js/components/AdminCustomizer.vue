<template>
	<div class="customizer d-none d-md-block"><a class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings spinner">
                    <circle cx="12" cy="12" r="3"></circle>
                    <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path>
                </svg></a>
            <div class="customizer-content ps">
                <!-- Customizer header -->
                <div class="customizer-header px-2 pt-1 pb-0 position-relative">
                    <h4 class="mb-0">Theme Customizer</h4>
                    <p class="m-0">Customize &amp; Preview in Real Time</p>
                    <a class="customizer-close" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                            <line x1="18" y1="6" x2="6" y2="18"></line>
                            <line x1="6" y1="6" x2="18" y2="18"></line>
                        </svg></a>
                </div>
                <hr>
                <!-- Styling & Text Direction -->
                <div class="customizer-styling-direction px-2">
                    <p class="fw-bold">Skin</p>
                    <div class="d-flex">
                        <div class="form-check me-1">
                            <input type="radio" id="skinlight" name="skinradio" class="form-check-input layout-name" checked="" data-layout="">
                            <label class="form-check-label" for="skinlight">Light</label>
                        </div>
                        <div class="form-check me-1">
                            <input type="radio" id="skinbordered" name="skinradio" class="form-check-input layout-name" data-layout="bordered-layout">
                            <label class="form-check-label" for="skinbordered">Bordered</label>
                        </div>
                        <div class="form-check me-1">
                            <input type="radio" id="skindark" name="skinradio" class="form-check-input layout-name" data-layout="dark-layout">
                            <label class="form-check-label" for="skindark">Dark</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="skinsemidark" name="skinradio" class="form-check-input layout-name" data-layout="semi-dark-layout">
                            <label class="form-check-label" for="skinsemidark">Semi Dark</label>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Menu -->
                <div class="customizer-menu px-2">
                    <div id="customizer-menu-collapsible" class="d-flex">
                        <p class="fw-bold me-auto m-0">Menu Collapsed</p>
                        <div class="form-check form-check-primary form-switch">
                            <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch">
                            <label class="form-check-label" for="collapse-sidebar-switch"></label>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Layout Width -->
                <div class="customizer-footer px-2">
                    <p class="fw-bold">Layout Width</p>
                    <div class="d-flex">
                        <div class="form-check me-1">
                            <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input" checked="">
                            <label class="form-check-label" for="layout-width-full">Full Width</label>
                        </div>
                        <div class="form-check me-1">
                            <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input">
                            <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Navbar -->
                <div class="customizer-navbar px-2">
                    <div id="customizer-navbar-colors">
                        <p class="fw-bold">Navbar Color</p>
                        <ul class="list-inline unstyled-list">
                            <li class="color-box bg-white border selected" data-navbar-default=""></li>
                            <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                            <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
                            <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                            <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                            <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                            <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                            <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                        </ul>
                    </div>
                    <p class="navbar-type-text fw-bold">Navbar Type</p>
                    <div class="d-flex">
                        <div class="form-check me-1">
                            <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked="">
                            <label class="form-check-label" for="nav-type-floating">Floating</label>
                        </div>
                        <div class="form-check me-1">
                            <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input">
                            <label class="form-check-label" for="nav-type-sticky">Sticky</label>
                        </div>
                        <div class="form-check me-1">
                            <input type="radio" id="nav-type-static" name="navType" class="form-check-input">
                            <label class="form-check-label" for="nav-type-static">Static</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input">
                            <label class="form-check-label" for="nav-type-hidden">Hidden</label>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Footer -->
                <div class="customizer-footer px-2">
                    <p class="fw-bold">Footer Type</p>
                    <div class="d-flex">
                        <div class="form-check me-1">
                            <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input">
                            <label class="form-check-label" for="footer-type-sticky">Sticky</label>
                        </div>
                        <div class="form-check me-1">
                            <input type="radio" id="footer-type-static" name="footerType" class="form-check-input" checked="">
                            <label class="form-check-label" for="footer-type-static">Static</label>
                        </div>
                        <div class="form-check me-1">
                            <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input">
                            <label class="form-check-label" for="footer-type-hidden">Hidden</label>
                        </div>
                    </div>
                </div>
                <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                    <div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div>
                </div>
                <div class="ps__rail-y" style="top: 0px; right: 0px;">
                    <div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div>
                </div>
            </div>
        </div>
</template>