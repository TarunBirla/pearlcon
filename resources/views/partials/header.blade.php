<style>
/* Header & Mobile Navbar Core Styles */
#siteHeader {
    position: sticky;
    top: 0;
    z-index: 1000;
    width: 100%;
}

.topbar {
    background: #0a1626;
    color: #ffffff;
    overflow: hidden;
    max-height: 38px;
    transition: max-height 0.45s cubic-bezier(0.16, 0.8, 0.24, 1), opacity 0.4s cubic-bezier(0.16, 0.8, 0.24, 1);
}

#siteHeader.condensed .topbar {
    max-height: 0;
    opacity: 0;
}

.topbar-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 38px;
    font-size: 14px;
}

.topbar-tag {
    font-weight: 500;
    letter-spacing: 0.01em;
}

.topbar-links {
    display: flex;
    align-items: center;
    gap: 22px;
}

.topbar-links a {
    color: #dce4ee;
    transition: color 0.25s;
    text-decoration: none;
}

.topbar-links a:hover {
    color: #ffffff;
}

.locale {
    display: flex;
    align-items: center;
    gap: 6px;
    padding-left: 20px;
    border-left: 1px solid rgba(255, 255, 255, 0.14);
    font-weight: 600;
    color: #dce4ee;
}

.locale svg {
    width: 13px;
    height: 13px;
    stroke: #ffa94d;
}

.mainbar {
    background: rgba(255, 255, 255, 0.98);
    border-bottom: 1px solid #dce1e6;
    transition: box-shadow 0.4s cubic-bezier(0.16, 0.8, 0.24, 1);
    position: relative;
    z-index: 1001;
}

#siteHeader.condensed .mainbar {
    box-shadow: 0 10px 30px -22px rgba(10, 22, 38, 0.35);
}

.mainbar-inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 68px;
    transition: height 0.4s cubic-bezier(0.16, 0.8, 0.24, 1);
}

#siteHeader.condensed .mainbar-inner {
    height: 58px;
}

.brand {
    display: flex;
    align-items: center;
    gap: 11px;
    text-decoration: none;
}

.brand-mark {
    width: 52px;
    height: 52px;
    border-radius: 9px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    flex-shrink: 0;
}

.brand-mark img {
    max-width: 100%;
    max-height: 100%;
    object-fit: contain;
}

.brand-text {
    line-height: 1.15;
}

.brand-text strong {
    font-family: "Space Grotesk", sans-serif;
    font-weight: 700;
    font-size: 16.5px;
    color: #13202f;
    letter-spacing: 0.01em;
    display: block;
}

.brand-text span {
    font-family: "Space Grotesk", sans-serif;
    font-size: 9.5px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #5b6672;
    display: block;
}

.primary-nav ul {
    display: flex;
    align-items: center;
    gap: 6px;
    list-style: none;
    margin: 0;
    padding: 0;
}

.primary-nav li {
    position: relative;
}

.primary-nav > ul > li > a,
.nav-trigger {
    display: flex;
    align-items: center;
    gap: 6px;
    font-size: 14.5px;
    font-weight: 500;
    color: #13202f;
    padding: 10px 14px;
    border-radius: 8px;
    background: none;
    border: none;
    cursor: pointer;
    text-decoration: none;
    transition: color 0.25s, background 0.25s;
}

.primary-nav > ul > li > a:hover,
.nav-trigger:hover {
    color: #e98423;
    background: #f4f6f8;
}

.nav-trigger svg {
    width: 10px;
    height: 10px;
    stroke: currentColor;
    transition: transform 0.3s cubic-bezier(0.16, 0.8, 0.24, 1);
}

li.has-mega:hover .nav-trigger svg,
li.has-mega.open .nav-trigger svg {
    transform: rotate(180deg);
}

.mega-panel {
    position: absolute;
    top: calc(100% + 12px);
    left: 0;
    background: #ffffff;
    border: 1px solid #dce1e6;
    border-radius: 16px;
    box-shadow: 0 30px 60px -20px rgba(10, 22, 38, 0.28);
    padding: 22px;
    opacity: 0;
    visibility: hidden;
    transform: translateY(8px);
    transition: opacity 0.3s cubic-bezier(0.16, 0.8, 0.24, 1), transform 0.3s cubic-bezier(0.16, 0.8, 0.24, 1), visibility 0.3s;
    z-index: 50;
}

li.has-mega:hover .mega-panel,
li.has-mega.open .mega-panel {
    opacity: 1;
    visibility: visible;
    transform: translateY(0);
}

.mega-panel-simple {
    padding: 12px;
    min-width: 200px;
}

.mega-panel-simple a {
    display: block;
    padding: 10px 12px;
    border-radius: 9px;
    font-size: 14px;
    color: #13202f;
    text-decoration: none;
    transition: background 0.25s, color 0.25s;
}

.mega-panel-simple a:hover {
    background: #f4f6f8;
    color: #e98423;
}

.nav-actions {
    display: flex;
    align-items: center;
    gap: 10px;
}

.icon-btn {
    width: 38px;
    height: 38px;
    border-radius: 50%;
    border: 1px solid #dce1e6;
    background: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: border-color 0.3s, background 0.3s;
}

.icon-btn:hover {
    border-color: #e98423;
    background: #f4f6f8;
}

.icon-btn svg {
    width: 16px;
    height: 16px;
    stroke: #13202f;
    fill: none;
    stroke-width: 1.8;
}

/* Burger Button */
.burger {
    display: none;
    width: 40px;
    height: 40px;
    position: relative;
    cursor: pointer;
    background: none;
    border: none;
    padding: 0;
    margin: 0;
    margin-top: 3px;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    gap: 5px;
    z-index: 100001 !important;
    -webkit-tap-highlight-color: transparent;
    touch-action: manipulation;
}

.burger span {
    display: block;
    width: 22px;
    height: 2px;
    background: #13202f;
    border-radius: 2px;
    transition: transform 0.3s cubic-bezier(0.16, 0.8, 0.24, 1), opacity 0.3s ease, background-color 0.3s ease;
}

.burger.open span:nth-child(1) {
    transform: translateY(7px) rotate(45deg);
}

.burger.open span:nth-child(2) {
    opacity: 0;
}

.burger.open span:nth-child(3) {
    transform: translateY(-7px) rotate(-45deg);
}

/* Mobile Menu Overlay */
.mobile-menu {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    z-index: 99999 !important;
    background: #0a1626 !important;
    padding: 20px 24px 40px !important;
    display: flex !important;
    flex-direction: column !important;
    gap: 6px !important;
    transform: translateY(-100%) !important;
    opacity: 0 !important;
    visibility: hidden !important;
    pointer-events: none !important;
    transition: transform 0.35s cubic-bezier(0.16, 0.8, 0.24, 1), opacity 0.35s ease, visibility 0.35s !important;
    overflow-y: auto !important;
    -webkit-overflow-scrolling: touch !important;
}

.mobile-menu.open {
    transform: translateY(0) !important;
    opacity: 1 !important;
    visibility: visible !important;
    pointer-events: auto !important;
}

.mm-top-bar {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding-bottom: 16px;
    margin-bottom: 12px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.12);
}

.mm-brand-text {
    font-family: "Space Grotesk", sans-serif;
    font-weight: 700;
    font-size: 18px;
    color: #ffffff;
    letter-spacing: 0.04em;
}

.mm-close-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.12);
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: center;
    cursor: pointer;
    transition: background 0.25s, transform 0.25s;
    touch-action: manipulation;
    -webkit-tap-highlight-color: transparent;
}

.mm-close-btn:hover,
.mm-close-btn:focus {
    background: rgba(255, 255, 255, 0.28);
    transform: scale(1.05);
}

.mm-close-btn svg {
    width: 20px;
    height: 20px;
    stroke: #ffffff;
}

.mobile-menu a.mm-nav-link {
    font-size: 18px;
    font-family: "Space Grotesk", sans-serif;
    color: #dce4ee;
    font-weight: 500;
    padding: 14px 8px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    cursor: pointer;
    text-decoration: none;
    transition: color 0.25s, padding-left 0.25s;
    display: block;
}

.mobile-menu a.mm-nav-link:hover,
.mobile-menu a.mm-nav-link:focus {
    color: #ffa94d;
    padding-left: 14px;
}

.mobile-menu .mm-cta {
    margin-top: 16px;
    text-align: center;
    border-bottom: none;
    font-size: 16px;
    padding: 14px 24px;
}

/* Responsive Media Queries */
@media (max-width: 980px) {
    .primary-nav {
        display: none !important;
    }

    .topbar-tag {
        display: none !important;
    }

    .burger {
        display: flex !important;
    }
}

@media (max-width: 640px) {
    .mainbar-inner {
        padding: 0 16px;
    }

    .brand-mark {
        width: 42px;
        height: 42px;
    }

    .brand-text strong {
        font-size: 14px;
    }

    .brand-text span {
        font-size: 8px;
    }

    .nav-actions {
        gap: 8px;
    }
}

@media (max-width: 420px) {
    .brand-text span {
        display: none;
    }

    .nav-actions .btn-sm {
        font-size: 11.5px;
        padding: 7px 10px;
    }
}
</style>

<header id="siteHeader">
    <div class="topbar">
        <div class="wrap topbar-inner">
            <span class="topbar-tag">Supplying Industrial &amp; Process Equipment Worldwide</span>
            <div class="topbar-links">
                <a href="tel:+441234440530">+44 1234 440530</a>
                <a href="mailto:sales@pearlcon.com">sales@pearlcon.com</a>
                <span class="locale">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="9" />
                        <path d="M3 12h18M12 3a14 14 0 010 18M12 3a14 14 0 000 18" />
                    </svg>UK
                </span>
            </div>
        </div>
    </div>
    <div class="mainbar" id="mainbar">
        <div class="wrap mainbar-inner">
            <a href="/" class="brand">
                <span class="brand-mark">
                    <img src="/assets/img/logo.jpeg" alt="Pearlcon Logo" />
                </span>
                <span class="brand-text"><strong>PEARLCON</strong><span>Your supply and sourcing Partner</span></span>
            </a>
            <nav class="primary-nav">
                <ul>
                    <li><a href="/#industries">Industries</a></li>
                    <li><a href="/#why">Solutions</a></li>
                    <li><a href="/our-products">Products</a></li>
                    <li><a href="/#process">Process</a></li>
                    <li><a href="/brands">Brands</a></li>
                    <li><a href="/clients">Clients</a></li>
                    <li class="has-mega">
                        <button class="nav-trigger" aria-expanded="false" type="button">
                            Company
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                                <path d="M6 9l6 6 6-6" />
                            </svg>
                        </button>
                        <div class="mega-panel mega-panel-simple">
                            <a href="/#about">About Us</a>
                            <a href="/#global">Global Network</a>
                            <a href="/clients">Our Clients</a>
                            <a href="/contact">Contact</a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="nav-actions">
                <button class="icon-btn" aria-label="Search" type="button">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="11" cy="11" r="7" />
                        <path d="M21 21l-4.3-4.3" />
                    </svg>
                </button>
                <a href="/registration-request" class="btn btn-primary btn-sm">Request a Quote</a>
                <button class="burger" id="burger" aria-label="Open menu" aria-expanded="false" type="button">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </div>
    </div>
</header>

<div class="mobile-menu" id="mobileMenu">
    <div class="mm-top-bar">
        <span class="mm-brand-text">PEARLCON Navigation</span>
        <button class="mm-close-btn" id="mmCloseBtn" aria-label="Close menu" type="button">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                <path d="M18 6L6 18M6 6l12 12" />
            </svg>
        </button>
    </div>
    <a href="/#industries" class="mm-nav-link">Industries</a>
    <a href="/#why" class="mm-nav-link">Solutions</a>
    <a href="/our-products" class="mm-nav-link">Products</a>
    <a href="/#process" class="mm-nav-link">Process</a>
    <a href="/brands" class="mm-nav-link">Brands</a>
    <a href="/clients" class="mm-nav-link">Clients</a>
    <a href="/#about" class="mm-nav-link">About Us</a>
    <a href="/#global" class="mm-nav-link">Global Network</a>
    <a href="/contact" class="mm-nav-link">Contact</a>
    <a href="/registration-request" class="btn btn-primary mm-cta">Request a Quote</a>
</div>

<script>
(function () {
    var header = document.getElementById("siteHeader");
    var burger = document.getElementById("burger");
    var mobileMenu = document.getElementById("mobileMenu");
    var mmCloseBtn = document.getElementById("mmCloseBtn");

    if (header) {
        window.addEventListener("scroll", function () {
            if (window.scrollY > 100) {
                header.classList.add("condensed");
            } else if (window.scrollY < 30) {
                header.classList.remove("condensed");
            }
        }, { passive: true });
    }

    if (mobileMenu) {
        function toggleMenu(show) {
            var isOpen = typeof show === "boolean" ? show : !mobileMenu.classList.contains("open");
            if (isOpen) {
                if (burger) {
                    burger.classList.add("open");
                    burger.setAttribute("aria-expanded", "true");
                }
                mobileMenu.classList.add("open");
                document.body.style.overflow = "hidden";
            } else {
                if (burger) {
                    burger.classList.remove("open");
                    burger.setAttribute("aria-expanded", "false");
                }
                mobileMenu.classList.remove("open");
                document.body.style.overflow = "";
            }
        }

        if (burger) {
            burger.addEventListener("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                toggleMenu();
            });
        }

        if (mmCloseBtn) {
            mmCloseBtn.addEventListener("click", function (e) {
                e.preventDefault();
                e.stopPropagation();
                toggleMenu(false);
            });
        }

        // Close mobile menu when clicking any menu link
        var menuLinks = mobileMenu.querySelectorAll("a");
        for (var i = 0; i < menuLinks.length; i++) {
            menuLinks[i].addEventListener("click", function () {
                toggleMenu(false);
            });
        }

        // Close on ESC key
        document.addEventListener("keydown", function (e) {
            if (e.key === "Escape" && mobileMenu.classList.contains("open")) {
                toggleMenu(false);
            }
        });

        // Close when window resized past 980px
        window.addEventListener("resize", function () {
            if (window.innerWidth > 980 && mobileMenu.classList.contains("open")) {
                toggleMenu(false);
            }
        });
    }
})();
</script>
