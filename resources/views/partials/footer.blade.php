<style>
    :root {
        /* Easily change footer background and text colors here in the future */
        --footer-bg: #E98423;
        --footer-text: #ffffff;
        --footer-text-mute: rgba(255, 255, 255, 0.92);
        --footer-border: rgba(255, 255, 255, 0.25);
    }

    footer {
        background: var(--footer-bg) !important;
        color: var(--footer-text) !important;
        padding: 60px 0 30px;
        font-size: 14px;
    }

    footer .foot-brand p,
    footer .foot-col ul li,
    footer .foot-bottom span {
        color: var(--footer-text-mute) !important;
    }

    footer .foot-col h5,
    footer .foot-brand strong {
        color: #ffffff !important;
    }

    footer a {
        color: #ffffff !important;
        transition: opacity 0.2s;
    }

    footer a:hover {
        color: #ffffff !important;
        opacity: 0.85;
    }

    footer .foot-bottom {
        border-top: 1px solid var(--footer-border) !important;
    }

    .rail-link-highlight {
        display: inline-flex !important;
        align-items: center !important;
        gap: 6px !important;
        font-weight: 700 !important;
        font-size: 15px !important;
        text-decoration: underline !important;
        background: rgba(0, 0, 0, 0.18) !important;
        color: #ffffff !important;
        padding: 6px 12px !important;
        border-radius: 6px !important;
        border: 1px solid rgba(255, 255, 255, 0.35) !important;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.12) !important;
        transition: all 0.25s ease !important;
    }

    .rail-link-highlight:hover {
        background: rgba(0, 0, 0, 0.32) !important;
        transform: translateY(-1px) !important;
        color: #ffffff !important;
        text-decoration: underline !important;
    }
</style>

<footer>
    <div class="wrap">
        <div class="foot-grid">
            <div class="foot-brand">
                <a href="/" class="brand">
                    <span class="brand-mark">
                        <img src="/assets/img/logo.jpeg" alt="Pearlcon Logo" />
                    </span>
                    <span class="brand-text"><strong style="color: #fff">PEARLCON</strong><span style="color: #fff">Your supply and sourcing Partner</span></span>
                </a>
                <p>
                    Pearlcon Business Services Ltd — UK-based supply and sourcing, procurement and consultancy for industrial, oil &amp; gas and petrochemical plants worldwide.
                </p>
            </div>
            <div class="foot-col">
                <h5>Navigate</h5>
                <ul>
                    <li><a href="/#industries">Industries</a></li>
                    <li><a href="/#why">Solutions</a></li>
                    <li><a href="/#process">Process</a></li>
                    <li><a href="/our-products">Products</a></li>
                    <li><a href="/brands">Brands</a></li>
                    <li><a href="/clients">Clients</a></li>
                </ul>
            </div>
            <div class="foot-col">
                <h5>Company</h5>
                <ul>
                    <li><a href="/#about">About</a></li>
                    <li><a href="/#global">Global network</a></li>
                    <li><a href="/clients">Clients</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="foot-col">
                <h5>Contact</h5>
                <ul>
                    <li>38f, Chigwell Ln, Debden, Loughton IG10 3NY, United Kingdom</li>
                    <li><a href="mailto:sales@pearlcon.com">sales@pearlcon.com</a></li>
                    <li><a href="tel:+441234440530">+44 1234 440530</a></li>
                    <li style="margin-top: 6px; margin-bottom: 6px;">
                        <a href="https://www.pearlconrail.co.uk" target="_blank" rel="noopener" class="rail-link-highlight">
                            Https://www.pearlconrail.co.uk
                        </a>
                    </li>
                    <li>
                        <a href="https://www.linkedin.com/company/pearlcon-business-services-ltd/about/?viewAsMember=true" target="_blank" rel="noopener" aria-label="LinkedIn" style="display:inline-flex;align-items:center;gap:8px;">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.368-1.85 3.598 0 4.268 2.368 4.268 5.452v6.289zM5.337 7.433a2.062 2.062 0 1 1 0-4.124 2.062 2.062 0 0 1 0 4.124zM7.114 20.452H3.558V9h3.556v11.452z" />
                            </svg>
                            Click for LinkedIn
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="foot-bottom">
            <span>© {{ date('Y') }} Pearlcon Business Services Ltd. All rights reserved.</span>
            <span>United Kingdom</span>
        </div>
    </div>
</footer>
