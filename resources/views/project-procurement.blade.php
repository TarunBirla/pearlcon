<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Project Procurement &amp; Supply Chain Solutions — Pearlcon Business Services</title>
    <meta name="description"
        content="Pearlcon Business Services provides end-to-end project procurement, engineered equipment packages and global supply chain solutions for upstream oil &amp; gas, EPC contractors, and industrial projects worldwide." />
    <link rel="canonical" href="https://pearlcon.com/project-procurement" />
    <meta property="og:title" content="Project Procurement &amp; Supply Chain Solutions — Pearlcon Business Services" />
    <meta property="og:description"
        content="Reliable Procurement for Complex Industrial and Energy Projects. One Purchase Order. One Invoice. One Point of Contact." />
    <meta property="og:url" content="https://pearlcon.com/project-procurement" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://pearlcon.com/assets/img/logo.jpeg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=IBM+Plex+Sans:wght@400;500;600;700&family=IBM+Plex+Mono:wght@400;500;600&display=swap"
        rel="stylesheet" />
    <link rel="icon" type="image/jpeg" href="{{ asset('assets/img/logo.jpeg') }}">

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
            font-size: 13px;
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

        .btn-outline-dark {
            border-color: rgba(255, 255, 255, 0.25);
            color: var(--white);
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(8px);
        }

        .btn-outline-dark:hover {
            background: rgba(255, 255, 255, 0.15);
            border-color: rgba(255, 255, 255, 0.4);
            transform: translateY(-2px);
        }

        /* Hero */
        .page-hero {
            background: linear-gradient(135deg, var(--ink) 0%, var(--steel) 100%);
            padding: 140px 0 80px 0;
            color: var(--white);
            position: relative;
            overflow: hidden;
        }

        .page-hero::before {
            content: "";
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 80% 20%, rgba(233, 132, 35, 0.18) 0%, transparent 60%);
            pointer-events: none;
        }

        .hero-inner {
            position: relative;
            z-index: 1;
            max-width: 920px;
        }

        .page-hero h1 {
            color: var(--white);
            font-size: clamp(34px, 5vw, 54px);
            line-height: 1.15;
            margin: 16px 0 20px 0;
            font-weight: 700;
        }

        .page-hero .subtitle {
            font-size: clamp(18px, 2.2vw, 22px);
            color: var(--amber-2);
            font-weight: 500;
            margin-bottom: 22px;
            line-height: 1.4;
        }

        .page-hero p.lead {
            font-size: 16.5px;
            line-height: 1.7;
            color: var(--text-on-dark);
            margin-bottom: 28px;
        }

        .motto-banner {
            display: inline-flex;
            align-items: center;
            background: rgba(233, 132, 35, 0.12);
            border: 1px solid rgba(233, 132, 35, 0.35);
            padding: 10px 20px;
            border-radius: 8px;
            color: var(--amber-2);
            font-family: "IBM Plex Mono", monospace;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.05em;
            margin-bottom: 34px;
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            flex-wrap: wrap;
        }

        /* Generic Section Headings */
        .sec {
            padding: 90px 0;
        }

        .sec-alt {
            background: var(--white);
        }

        .sec-head {
            max-width: 820px;
            margin-bottom: 50px;
        }

        .sec-head h2 {
            font-size: clamp(28px, 3.8vw, 40px);
            line-height: 1.22;
            margin: 12px 0 16px 0;
        }

        .sec-head p {
            font-size: 16.5px;
            line-height: 1.68;
        }

        /* Capabilities Grid */
        .cap-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 28px;
        }

        .cap-card {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 38px 32px;
            transition: transform 0.3s var(--ease), box-shadow 0.3s var(--ease);
            display: flex;
            flex-direction: column;
        }

        .sec-alt .cap-card {
            background: var(--surface);
        }

        .cap-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 16px 36px -12px rgba(10, 22, 38, 0.08);
            border-color: rgba(233, 132, 35, 0.4);
        }

        .cap-num {
            font-family: "IBM Plex Mono", monospace;
            font-size: 14px;
            color: var(--amber);
            font-weight: 600;
            margin-bottom: 12px;
        }

        .cap-card h3 {
            font-size: 22px;
            margin-bottom: 16px;
            color: var(--ink);
        }

        .cap-desc {
            font-size: 15px;
            color: var(--text-mute);
            margin-bottom: 22px;
            line-height: 1.6;
        }

        .cap-list {
            margin-top: auto;
            border-top: 1px solid var(--line);
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .cap-list li {
            font-size: 14.5px;
            color: var(--text);
            display: flex;
            align-items: flex-start;
            gap: 10px;
            line-height: 1.5;
        }

        .cap-list li svg {
            width: 17px;
            height: 17px;
            color: var(--amber);
            flex-shrink: 0;
            margin-top: 3px;
        }

        /* Process Steps */
        .sec-dark {
            background: var(--ink-2);
            color: var(--text-on-dark);
            position: relative;
        }

        .sec-dark .sec-head h2 {
            color: var(--white);
        }

        .sec-dark .sec-head p {
            color: var(--text-on-dark-mute);
        }

        .process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 22px;
            margin-top: 40px;
        }

        .proc-card {
            background: rgba(255, 255, 255, 0.04);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            padding: 28px 24px;
            position: relative;
            transition: all 0.3s var(--ease);
        }

        .proc-card:hover {
            background: rgba(255, 255, 255, 0.07);
            border-color: rgba(233, 132, 35, 0.4);
            transform: translateY(-3px);
        }

        .proc-num {
            font-family: "Space Grotesk", sans-serif;
            font-size: 28px;
            font-weight: 700;
            color: var(--amber);
            margin-bottom: 12px;
        }

        .proc-card h3 {
            font-size: 18px;
            color: var(--white);
            margin-bottom: 12px;
        }

        .proc-card p {
            font-size: 14.5px;
            color: var(--text-on-dark-mute);
            line-height: 1.6;
        }

        /* Sectors Grid */
        .sectors-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(260px, 1fr));
            gap: 18px;
        }

        .sector-item {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 12px;
            padding: 20px 22px;
            display: flex;
            align-items: center;
            gap: 14px;
            font-size: 15px;
            font-weight: 600;
            color: var(--ink);
            transition: all 0.25s var(--ease);
        }

        .sector-item:hover {
            border-color: var(--amber);
            transform: translateY(-2px);
            box-shadow: 0 10px 24px -10px rgba(0, 0, 0, 0.08);
        }

        .sector-icon {
            width: 36px;
            height: 36px;
            border-radius: 8px;
            background: rgba(233, 132, 35, 0.12);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--amber);
            flex-shrink: 0;
        }

        .sector-icon svg {
            width: 20px;
            height: 20px;
        }

        /* Why Partner With Pearlcon Grid */
        .why-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
        }

        .why-card {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 14px;
            padding: 30px 26px;
            transition: all 0.3s var(--ease);
        }

        .why-card:hover {
            border-color: rgba(233, 132, 35, 0.5);
            box-shadow: 0 12px 28px -10px rgba(10, 22, 38, 0.06);
            transform: translateY(-3px);
        }

        .why-card h3 {
            font-size: 18px;
            margin-bottom: 10px;
            color: var(--ink);
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .why-card h3::before {
            content: "";
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: var(--amber);
            display: inline-block;
        }

        .why-card p {
            font-size: 14.5px;
            line-height: 1.65;
            color: var(--text-mute);
        }

        /* Experience Box */
        .exp-box {
            background: linear-gradient(135deg, var(--ink) 0%, var(--steel) 100%);
            border-radius: 20px;
            padding: 60px 50px;
            color: var(--white);
            margin-top: 40px;
            position: relative;
            overflow: hidden;
        }

        .exp-box::after {
            content: "2009";
            position: absolute;
            right: 40px;
            bottom: -20px;
            font-family: "Space Grotesk", sans-serif;
            font-size: 160px;
            font-weight: 800;
            color: rgba(255, 255, 255, 0.04);
            pointer-events: none;
            line-height: 1;
        }

        .exp-box h2 {
            color: var(--white);
            font-size: clamp(26px, 3.5vw, 36px);
            margin-bottom: 18px;
        }

        .exp-box p {
            color: var(--text-on-dark);
            font-size: 16px;
            line-height: 1.7;
            max-width: 820px;
            margin-bottom: 16px;
        }

        /* Bottom CTA Banner */
        .cta-banner {
            background: linear-gradient(135deg, #101f35 0%, #172a45 100%);
            border: 1px solid rgba(233, 132, 35, 0.3);
            border-radius: 20px;
            padding: 60px 48px;
            color: var(--white);
            text-align: center;
            margin: 30px 0 80px 0;
            position: relative;
            box-shadow: 0 20px 40px -15px rgba(10, 22, 38, 0.15);
        }

        .cta-banner h2 {
            color: var(--white);
            font-size: clamp(28px, 4vw, 42px);
            margin-bottom: 16px;
        }

        .cta-banner p.cta-sub {
            color: var(--text-on-dark);
            font-size: 17px;
            max-width: 720px;
            margin: 0 auto 30px auto;
            line-height: 1.6;
        }

        .cta-motto {
            font-family: "IBM Plex Mono", monospace;
            color: var(--amber-2);
            font-weight: 600;
            font-size: 15px;
            margin-bottom: 32px;
            letter-spacing: 0.05em;
        }

        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .cap-grid {
                grid-template-columns: 1fr;
            }
            .exp-box {
                padding: 40px 30px;
            }
            .cta-banner {
                padding: 45px 25px;
            }
        }

        @media (max-width: 600px) {
            .wrap {
                padding: 0 20px;
            }
            .page-hero {
                padding: 120px 0 60px 0;
            }
            .sec {
                padding: 60px 0;
            }
            .motto-banner {
                font-size: 12px;
                padding: 8px 14px;
            }
        }
    </style>

    <!-- Schema.org JSON-LD -->
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
          "telephone": "+441234440530",
          "email": "sales@pearlcon.com"
        },
        {
          "@type": "Service",
          "@id": "https://pearlcon.com/project-procurement#service",
          "url": "https://pearlcon.com/project-procurement",
          "name": "Project Procurement & Supply Chain Solutions",
          "provider": {
            "@id": "https://pearlcon.com/#organization"
          },
          "description": "Reliable Procurement for Complex Industrial and Energy Projects. Sourcing, engineering coordination, expediting, and logistics.",
          "areaServed": "Global"
        }
      ]
    }
    </script>
</head>

<body>
    @include('partials.header')

    <!-- HERO SECTION -->
    <section class="page-hero">
        <div class="wrap">
            <div class="hero-inner">
                <span class="eyebrow" style="color: var(--amber-2);">Industrial Sourcing &amp; Procurement</span>
                <h1>Project Procurement &amp; Supply Chain Solutions</h1>
                <div class="subtitle">Reliable Procurement for Complex Industrial and Energy Projects</div>
                <p class="lead">
                    <strong>Your trusted partner for project procurement, engineered equipment and global sourcing.</strong><br>
                    Pearlcon Business Services provides end-to-end project procurement and supply-chain solutions for upstream oil and gas operators, EPC contractors, engineering companies and industrial project developers.
                </p>
                <div class="motto-banner">
                    One Purchase Order. One Invoice. One Point of Contact.
                </div>
                <div class="hero-actions">
                    <a href="/contact" class="btn btn-primary">
                        Discuss Your Project
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 16px; height: 16px;">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>
                    <a href="/registration-request" class="btn btn-outline-dark">
                        Submit an RFQ
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- OVERVIEW / INTRO BANNER -->
    <section class="sec sec-alt">
        <div class="wrap">
            <div class="sec-head">
                <div class="eyebrow">End-to-End Coordination</div>
                <h2>From Engineering to Site Handover</h2>
                <p>
                    We support projects from engineering and procurement through manufacturing, quality assurance, logistics and delivery, connecting customers with a global network of OEMs, approved manufacturers and specialist suppliers.
                </p>
                <p style="margin-top: 12px;">
                    From critical equipment and engineered packages to mechanical, electrical, instrumentation and control components, we help simplify procurement, manage supplier performance and deliver the right products to the right place, on time and to specification.
                </p>
            </div>

            <!-- CAPABILITIES SECTION -->
            <div class="sec-head" style="margin-bottom: 30px;">
                <div class="eyebrow">Core Capabilities</div>
                <h2>Project Procurement Capabilities</h2>
                <p>Pearlcon provides flexible procurement support tailored to project requirements, technical specifications, delivery schedules and commercial objectives.</p>
            </div>

            <div class="cap-grid">
                <!-- 1. Upstream Oil & Gas Procurement -->
                <div class="cap-card">
                    <div class="cap-num">01 / CAPABILITY</div>
                    <h3>1. Upstream Oil &amp; Gas Procurement</h3>
                    <p class="cap-desc">
                        We support procurement requirements across upstream oil and gas developments, including exploration, drilling, well services, production facilities and field development projects.
                    </p>
                    <ul class="cap-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Drilling equipment, components and consumables</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Wellhead, well-control and production equipment</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Valves, actuators, fittings, flanges and piping components</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Pumps, compressors, motors and rotating equipment</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Pressure vessels, heat exchangers and process equipment</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Electrical equipment, switchgear, motors and power distribution</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Instrumentation, control systems, transmitters and analysers</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Industrial automation, PLCs and control-panel components</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Mechanical seals, bearings, gearboxes and critical spares</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Safety equipment and selected fire-and-gas systems</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Skid-mounted packages and engineered equipment (per project specs)</span>
                        </li>
                    </ul>
                </div>

                <!-- 2. EPC & Engineering Project Procurement -->
                <div class="cap-card">
                    <div class="cap-num">02 / CAPABILITY</div>
                    <h3>2. EPC &amp; Engineering Project Procurement</h3>
                    <p class="cap-desc">
                        We work with engineering, procurement and construction (EPC) contractors, project management companies and engineering consultancies to support procurement across multiple disciplines.
                    </p>
                    <ul class="cap-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Equipment procurement against technical specifications, BOMs and material requisitions</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Global manufacturer and supplier identification</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>RFQ preparation, enquiry management and commercial bid comparison</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Technical and commercial offer coordination</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>OEM liaison and alternative product sourcing, subject to customer approval</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Purchase order placement and supplier coordination</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Manufacturing follow-up and delivery expediting</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Inspection, documentation and quality coordination</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Consolidation of multi-vendor orders where practical</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>International shipping and delivery coordination</span>
                        </li>
                    </ul>
                </div>

                <!-- 3. Engineered Equipment & Package Sourcing -->
                <div class="cap-card">
                    <div class="cap-num">03 / CAPABILITY</div>
                    <h3>3. Engineered Equipment &amp; Package Sourcing</h3>
                    <p class="cap-desc">
                        Complex projects often require equipment from multiple manufacturers, with specific technical, certification and documentation requirements. Pearlcon helps customers identify and source equipment and engineered packages across mechanical, electrical, instrumentation and process disciplines.
                    </p>
                    <ul class="cap-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Specification and datasheet review</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Manufacturer capability assessment</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>OEM and authorised-channel engagement where available</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Technical clarification and deviation coordination</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Documentation and certification requirement review</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Factory inspection and testing coordination, where required</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Packing, shipping and delivery documentation</span>
                        </li>
                    </ul>
                </div>

                <!-- 4. Global Sourcing & OEM Network -->
                <div class="cap-card">
                    <div class="cap-num">04 / CAPABILITY</div>
                    <h3>4. Global Sourcing &amp; OEM Network</h3>
                    <p class="cap-desc">
                        Our international sourcing network connects customers with manufacturers and suppliers across the UK, Europe, the USA, China, Japan and other Asian markets. With access to 5,000+ manufacturers and established OEM relationships, we support standard, specialist and difficult-to-source equipment.
                    </p>
                    <ul class="cap-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Identify potential manufacturers for project-specific requirements</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Source obsolete, discontinued and hard-to-find components</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Explore technically acceptable alternatives</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Consolidate requirements across multiple suppliers</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Compare commercial offers, lead times and delivery options</span>
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg>
                            <span>Coordinate overseas suppliers and export documentation</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- 7-STEP PROCUREMENT PROCESS (DARK SECTION) -->
    <section class="sec sec-dark">
        <div class="wrap">
            <div class="sec-head">
                <div class="eyebrow" style="color: var(--amber-2);">Our Workflow</div>
                <h2>Our Project Procurement Process</h2>
                <p>From enquiry to delivery, we coordinate the critical stages of procurement.</p>
            </div>

            <div class="process-grid">
                <div class="proc-card">
                    <div class="proc-num">01</div>
                    <h3>Requirement Assessment</h3>
                    <p>Review material requisitions, BOQs, technical specifications, datasheets, drawings, delivery schedules and project documentation.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-num">02</div>
                    <h3>Global Sourcing &amp; RFQ Management</h3>
                    <p>Identify suitable OEMs and suppliers, issue enquiries, clarify technical requirements and obtain competitive quotations.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-num">03</div>
                    <h3>Technical &amp; Commercial Evaluation</h3>
                    <p>Coordinate technical compliance reviews, commercial comparisons, delivery assessments and clarification of deviations.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-num">04</div>
                    <h3>Order Placement &amp; Supplier Coordination</h3>
                    <p>Manage purchase orders, order acknowledgements, supplier communication and agreed delivery milestones.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-num">05</div>
                    <h3>Expediting &amp; Quality Coordination</h3>
                    <p>Monitor manufacturing progress, follow up on critical milestones and coordinate inspections, testing and quality documentation where required.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-num">06</div>
                    <h3>Logistics &amp; Project Delivery</h3>
                    <p>Coordinate packing, shipping documentation, freight arrangements and delivery to the agreed destination in line with the PO and applicable Incoterms.</p>
                </div>
                <div class="proc-card">
                    <div class="proc-num">07</div>
                    <h3>Documentation &amp; Close-Out</h3>
                    <p>Coordinate the agreed certificates, inspection reports, manuals, warranty information and other project documentation required for handover.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTORS WE SERVE -->
    <section class="sec">
        <div class="wrap">
            <div class="sec-head">
                <div class="eyebrow">Industry Verticals</div>
                <h2>Supporting Projects Across the Energy &amp; Industrial Sectors</h2>
                <p>Pearlcon's procurement capabilities extend across a range of industries and project environments, tailored to the equipment, documentation, delivery and supplier requirements of each sector.</p>
            </div>

            <div class="sectors-grid">
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <span>Upstream oil and gas exploration and production</span>
                </div>
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/></svg>
                    </div>
                    <span>Drilling and well services</span>
                </div>
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>
                    </div>
                    <span>Onshore and offshore production facilities</span>
                </div>
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3h6M10 3v5l-5 9a2 2 0 002 3h10a2 2 0 002-3l-5-9V3"/></svg>
                    </div>
                    <span>Oil &amp; gas processing and petrochemical projects</span>
                </div>
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 14.899A7 7 0 1 1 15.71 8h1.79a4.5 4.5 0 0 1 2.5 8.242"/><path d="M12 12v9"/></svg>
                    </div>
                    <span>Refineries and gas-processing facilities</span>
                </div>
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    </div>
                    <span>Power generation and energy infrastructure</span>
                </div>
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"/></svg>
                    </div>
                    <span>Water treatment and industrial utilities</span>
                </div>
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/></svg>
                    </div>
                    <span>Mining, minerals processing and heavy industry</span>
                </div>
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="7" width="20" height="14" rx="2" ry="2"/><path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/></svg>
                    </div>
                    <span>Manufacturing and industrial plant development</span>
                </div>
                <div class="sector-item">
                    <div class="sector-icon">
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="4" y="3" width="16" height="16" rx="2"/><path d="M4 11h16M12 3v8M8 19l-2 3M16 19l2 3"/></svg>
                    </div>
                    <span>Rail, transport and associated infrastructure</span>
                </div>
            </div>
        </div>
    </section>

    <!-- WHY PARTNER WITH PEARLCON -->
    <section class="sec sec-alt">
        <div class="wrap">
            <div class="sec-head">
                <div class="eyebrow">Strategic Value</div>
                <h2>Why Partner with Pearlcon?</h2>
                <p>We combine commercial discipline, engineering understanding and global supply networks to provide predictable outcomes for complex project environments.</p>
            </div>

            <div class="why-cards">
                <div class="why-card">
                    <h3>A Single Procurement Partner</h3>
                    <p>Simplify multi-vendor procurement through one coordinated point of contact for sourcing, purchasing and supply-chain activities.</p>
                </div>
                <div class="why-card">
                    <h3>Global Sourcing Reach</h3>
                    <p>Access a broad international network of manufacturers and suppliers to support competitive sourcing and specialist procurement requirements.</p>
                </div>
                <div class="why-card">
                    <h3>Technical &amp; Commercial Coordination</h3>
                    <p>Bring procurement, engineering requirements, supplier communication and commercial evaluation together in one coordinated process.</p>
                </div>
                <div class="why-card">
                    <h3>Project-Focused Expediting</h3>
                    <p>Maintain visibility of order progress, manufacturing milestones, outstanding documentation and delivery commitments.</p>
                </div>
                <div class="why-card">
                    <h3>Quality &amp; Compliance Focus</h3>
                    <p>Coordinate supplier documentation, inspections and quality requirements in line with the purchase order, customer specifications and applicable project standards.</p>
                </div>
                <div class="why-card">
                    <h3>Flexible Procurement Support</h3>
                    <p>Engage Pearlcon for individual RFQs, specific equipment packages, multi-discipline procurement requirements or ongoing project supply support.</p>
                </div>
                <div class="why-card">
                    <h3>International Supply-Chain Coordination</h3>
                    <p>Benefit from our UK and Middle East presence and international supplier network to support procurement and delivery requirements across multiple markets.</p>
                </div>
            </div>

            <!-- EXPERIENCE SECTION -->
            <div class="exp-box">
                <div class="eyebrow" style="color: var(--amber-2);">Established in 2009</div>
                <h2>Experience That Supports Industrial Procurement</h2>
                <p>
                    Established in 2009, Pearlcon Business Services combines industrial supply expertise with global sourcing and procurement coordination.
                </p>
                <p>
                    Our experience spans mechanical, electrical and instrumentation products, critical spares, engineered equipment and industrial supply requirements for customers operating across international markets.
                </p>
                <p>
                    We understand that successful project procurement is about more than price. It requires technical alignment, dependable suppliers, clear communication, delivery visibility and disciplined follow-up. Our objective is to help customers reduce procurement complexity, improve supply-chain coordination and keep projects moving.
                </p>
            </div>

            <!-- BOTTOM CTA BANNER -->
            <div class="cta-banner">
                <div class="eyebrow" style="color: var(--amber-2); margin-bottom: 12px;">Get In Touch</div>
                <h2>Let's Discuss Your Next Project</h2>
                <p class="cta-sub">
                    Whether you are an upstream operator, EPC contractor, engineering consultant or industrial project developer, Pearlcon can support your procurement requirements with tailored sourcing and supply-chain solutions. Share your material requisitions, BOQ, equipment specifications or RFQ with our team.
                </p>
                <div class="cta-motto">
                    Pearlcon Business Services Ltd &bull; UK &amp; Middle East &bull; One Purchase Order. One Invoice. One Point of Contact.
                </div>
                <div class="cta-buttons">
                    <a href="/registration-request" class="btn btn-primary">
                        Submit Your RFQ
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 16px; height: 16px;">
                            <path d="M5 12h14M13 6l6 6-6 6" />
                        </svg>
                    </a>
                    <a href="/contact" class="btn btn-outline-dark">
                        Contact Our Project Procurement Team
                    </a>
                </div>
            </div>

        </div>
    </section>

    @include('partials.footer')
    @include('partials.chatbot')
</body>

</html>
