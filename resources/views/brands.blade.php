<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Brands We Supply — Pearlcon Business Services</title>
    <meta name="description"
        content="Pearlcon Business Services Ltd — Global sourcing partner supplying 5,000+ OEM industrial brands, spare parts and process equipment." />
    <link rel="canonical" href="https://pearlcon.com/brands" />
    <meta property="og:title" content="Brands We Supply — Pearlcon Business Services" />
    <meta property="og:url" content="https://pearlcon.com/brands" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <style>
        :root {
            --ink: #0a1626;
            --ink-2: #101f35;
            --steel: #233247;
            --surface: #f4f6f8;
            --surface-2: #eaedf1;
            --white: #ffffff;
            --amber: #e98423;
            --amber-2: #ffa94d;
            --violet: #5b4c9f;
            --text: #13202f;
            --text-mute: #5b6672;
            --text-on-dark: #dce4ee;
            --text-on-dark-mute: #8b9aae;
            --line: #dce1e6;
            --radius: 14px;
            --maxw: 1240px;
            --ease: cubic-bezier(0.16, 0.8, 0.24, 1);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            overflow-x: hidden;
            width: 100%;
        }

        body {
            margin: 0;
            background: var(--surface);
            color: var(--text);
            font-family: "IBM Plex Sans", sans-serif;
            -webkit-font-smoothing: antialiased;
            overflow-x: hidden;
            width: 100%;
        }

        h1,
        h2,
        h3,
        h4 {
            font-family: "Space Grotesk", sans-serif;
            margin: 0;
            letter-spacing: -0.01em;
            color: var(--text);
        }

        p {
            margin: 0;
            color: var(--text-mute);
            line-height: 1.65;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        .eyebrow {
            font-family: "IBM Plex Mono", monospace;
            font-size: 12px;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: var(--amber);
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .eyebrow::before {
            content: "";
            width: 18px;
            height: 1px;
            background: var(--amber);
            display: inline-block;
        }

        .wrap {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 32px;
        }

        .btn {
            font-family: "IBM Plex Sans", sans-serif;
            font-weight: 600;
            font-size: 14.5px;
            padding: 14px 26px;
            border-radius: 999px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
            border: 1px solid transparent;
            transition: all 0.35s var(--ease);
            white-space: nowrap;
        }

        .btn-sm {
            padding: 10px 18px;
            font-size: 13.5px;
        }

        .btn-primary {
            background: var(--amber);
            color: #1a1005;
            box-shadow: 0 8px 24px -8px rgba(233, 132, 35, 0.55);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 14px 30px -8px rgba(233, 132, 35, 0.65);
        }

        .btn-ghost-dark {
            color: var(--text-on-dark);
            border-color: rgba(255, 255, 255, 0.22);
        }

        .btn-ghost-dark:hover {
            border-color: rgba(255, 255, 255, 0.55);
            transform: translateY(-2px);
        }

        /* HEADER */
        header#siteHeader {
            position: sticky;
            top: 0;
            z-index: 200;
        }

        .topbar {
            background: var(--ink);
            color: var(--white);
            max-height: 38px;
        }

        .topbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 38px;
            font-size: 15.5px;
        }

        .topbar-links {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .locale {
            display: flex;
            align-items: center;
            gap: 6px;
            padding-left: 20px;
            border-left: 1px solid rgba(255, 255, 255, 0.14);
            font-weight: 600;
            color: var(--text-on-dark);
        }

        .locale svg {
            width: 13px;
            height: 13px;
            stroke: var(--amber-2);
        }

        .mainbar {
            background: rgba(255, 255, 255, 0.98);
            border-bottom: 1px solid var(--line);
        }

        .mainbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 68px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .brand-mark {
            width: 64px;
            height: 64px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-text strong {
            font-family: "Space Grotesk";
            font-weight: 700;
            font-size: 16.5px;
            color: var(--text);
            display: block;
        }

        .brand-text span {
            font-size: 9.5px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-mute);
        }

        .primary-nav ul {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .primary-nav>ul>li>a {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 14.5px;
            font-weight: 500;
            color: var(--text);
            padding: 12px 14px;
            border-radius: 8px;
        }

        .primary-nav>ul>li>a:hover {
            color: var(--amber);
            background: var(--surface);
        }

        /* BRANDS HERO */
        .page-hero {
            background: radial-gradient(120% 90% at 15% -10%, #16283f 0%, var(--ink) 55%, #060d18 100%);
            color: var(--text-on-dark);
            padding: 64px 0 54px;
            text-align: center;
        }

        .page-hero h1 {
            font-size: 38px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 12px;
        }

        .page-hero p {
            color: var(--text-on-dark-mute);
            font-size: 16px;
            max-width: 680px;
            margin: 0 auto;
        }

        /* BRANDS GRID */
        .brands-section {
            padding: 60px 0 80px;
        }

        .brands-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(170px, 1fr));
            gap: 20px;
            margin-top: 36px;
        }

        .brand-card {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 20px 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 110px;
            transition: transform 0.3s var(--ease), box-shadow 0.3s var(--ease), border-color 0.3s var(--ease);
            box-shadow: 0 4px 12px rgba(10, 22, 38, 0.03);
        }

        .brand-card:hover {
            transform: translateY(-4px);
            border-color: rgba(233, 132, 35, 0.5);
            box-shadow: 0 12px 24px rgba(10, 22, 38, 0.08);
        }

        .brand-card img {
            max-height: 65px;
            max-width: 130px;
            object-fit: contain;
            filter: grayscale(10%);
            transition: filter 0.3s;
        }

        .brand-card:hover img {
            filter: grayscale(0%);
        }

        /* CTA SECTION */
        .cta-sec {
            background: linear-gradient(135deg, var(--ink), #16283f);
            color: var(--text-on-dark);
            border-radius: 20px;
            padding: 48px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 32px;
            margin-top: 40px;
        }

        .cta-sec h2 {
            color: #fff;
            font-size: 26px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .cta-sec p {
            color: var(--text-on-dark-mute);
            font-size: 15px;
            max-width: 600px;
        }

        @media (max-width: 850px) {
            .cta-sec {
                flex-direction: column;
                text-align: center;
            }

            .brands-grid {
                grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
                gap: 14px;
            }
        }

        /* FOOTER */
        footer {
            background: var(--ink);
            color: var(--text-on-dark-mute);
            padding: 60px 0 30px;
            font-size: 14px;
        }

        .foot-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1.5fr;
            gap: 40px;
            margin-bottom: 40px;
        }

        .foot-col h5 {
            color: #fff;
            font-size: 15px;
            margin-bottom: 16px;
        }

        .foot-col a:hover {
            color: #fff;
        }

        .foot-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 24px;
            display: flex;
            justify-content: space-between;
            font-size: 13px;
        }
    </style>

    <!-- ================= JSON-LD STRUCTURED DATA ================= -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "Organization",
          "@id": "https://pearlcon.com/#organization",
          "name": "Pearlcon Business Services Ltd",
          "url": "https://pearlcon.com/",
          "logo": "https://pearlcon.com/assets/img/logo.jpeg",
          "telephone": "+447891363776",
          "email": "sales@pearlcon.com"
        },
        {
          "@type": "WebPage",
          "@id": "https://pearlcon.com/brands#webpage",
          "url": "https://pearlcon.com/brands",
          "name": "OEM Brands We Supply — Pearlcon Business Services",
          "description": "Sourcing and supply of genuine parts, components and equipment from over 5,000+ OEM industrial manufacturers.",
          "isPartOf": {
            "@id": "https://pearlcon.com/#website"
          }
        }
      ]
    }
    </script>

</head>

<body>
    @include('partials.header')

    <div class="page-hero">
        <div class="wrap">
            <span class="eyebrow" style="color: var(--amber-2);">OEM &amp; Industrial Manufacturers</span>
            <h1>Brands We Supply</h1>
            <p>We source and deliver genuine parts, equipment, and components from over 5,000+ global manufacturers and
                original equipment suppliers worldwide.</p>
        </div>
    </div>

    <div class="brands-section">
        <div class="wrap">
            <div class="brands-grid">
                <div class="brand-card"><img src="{{ asset('assets/img/ara.jpg') }}" alt="ARA"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/1.jpeg') }}" alt="Brand 1"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/2.jpeg') }}" alt="Brand 2"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/3.jpeg') }}" alt="Brand 3"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/4.jpeg') }}" alt="Brand 4"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/schenck-process-vector-logo.png') }}"
                        alt="Schenck Process"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/images.jpg') }}" alt="Brand Image"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/images (1).jpg') }}" alt="Brand Image"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/images (2).png') }}" alt="Brand Image"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture1.PNG') }}" alt="Capture 1"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture2.PNG') }}" alt="Capture 2"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture4.PNG') }}" alt="Capture 4"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture5.PNG') }}" alt="Capture 5"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture6.PNG') }}" alt="Capture 6"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture7.PNG') }}" alt="Capture 7"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture8.PNG') }}" alt="Capture 8"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture9.PNG') }}" alt="Capture 9"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture10.PNG') }}" alt="Capture 10"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture11.PNG') }}" alt="Capture 11"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture12.PNG') }}" alt="Capture 12"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture13.PNG') }}" alt="Capture 13"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture14.PNG') }}" alt="Capture 14"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture15.PNG') }}" alt="Capture 15"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture16.PNG') }}" alt="Capture 16"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture17.PNG') }}" alt="Capture 17"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture18.PNG') }}" alt="Capture 18"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture19.PNG') }}" alt="Capture 19"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture20.PNG') }}" alt="Capture 20"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture21.PNG') }}" alt="Capture 21"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture22.PNG') }}" alt="Capture 22"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture23.PNG') }}" alt="Capture 23"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture24.PNG') }}" alt="Capture 24"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/Capture25.PNG') }}" alt="Capture 25"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/atec.jpg') }}" alt="ATEC"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/atlas.jpg') }}" alt="Atlas Copco"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/baldon.jpg') }}" alt="Baldon"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/images (1).png') }}" alt="Bentley"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/emerson.jpg') }}" alt="Emerson"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/schenck.jpg') }}" alt="Schenck"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/images.png') }}" alt="Swagelok"></div>
                <div class="brand-card"><img src="{{ asset('assets/img/westminster.jpg') }}" alt="Westminster"></div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/5.jpg') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/6.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/7.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/8.png') }}" alt="ARA">
                </div>

                <div class="brand-card">
                    <img src="{{ asset('assets/img/9.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/10.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/11.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/12.png') }}" alt="ARA">
                </div>

                <div class="brand-card">
                    <img src="{{ asset('assets/img/13.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/14.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/15.jpg') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/16.png') }}" alt="ARA">
                </div>

                <div class="brand-card">
                    <img src="{{ asset('assets/img/17.jpg') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/18.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/19.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/20.png') }}" alt="ARA">
                </div>

                <div class="brand-card">
                    <img src="{{ asset('assets/img/21.jpg') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/22.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/23.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/24.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/25.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/26.jpg') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/27.png') }}" alt="ARA">
                </div>
                <div class="brand-card">
                    <img src="{{ asset('assets/img/28.jpg') }}" alt="ARA">
                </div>
            </div>

            <div class="cta-sec">
                <div>
                    <h2>Looking for a specific Manufacturer or Part?</h2>
                    <p>Send us your product specification or part number. We source directly from authorized global
                        manufacturers with full technical documentation.</p>
                </div>
                <div>
                    <a href="/registration-request" class="btn btn-primary">
                        Request a Quote
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            style="width: 16px; height: 16px;">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

    @include('partials.footer')

    @include('partials.chatbot')
</body>

</html>