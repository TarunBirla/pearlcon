<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>
        Pearlcon Business Services — Global Industrial Sourcing &amp;
        Procurement
    </title>
    <meta name="description"
        content="Pearlcon Business Services Ltd — UK-based sourcing, procurement and consultancy partner for oil &amp; gas, petrochemical and industrial plants worldwide." />
    <!-- ================= SEO META TAGS ================= -->
    <meta name="keywords"
        content="industrial sourcing, procurement services, oil and gas suppliers, petrochemical equipment, MRO spare parts, UK procurement company, global supply chain, industrial equipment supplier" />
    <meta name="author" content="Pearlcon Business Services Ltd" />
    <meta name="robots" content="index, follow, max-image-preview:large" />
    <link rel="canonical" href="https://pearlcon.com/" />

    <!-- ================= GEO TAGS ================= -->
    <meta name="geo.region" content="GB" />
    <meta name="geo.placename" content="United Kingdom" />
    <meta name="geo.position" content="52.3555;-1.1743" />
    <meta name="ICBM" content="52.3555, -1.1743" />

    <!-- ================= OPEN GRAPH (Facebook/LinkedIn) ================= -->
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="Pearlcon Business Services" />
    <meta property="og:title" content="Pearlcon Business Services — Global Industrial Sourcing & Procurement" />
    <meta property="og:description"
        content="UK-based sourcing, procurement and consultancy partner for oil & gas, petrochemical and industrial plants worldwide." />
    <meta property="og:url" content="https://pearlcon.com/" />
    <meta property="og:image" content="https://pearlcon.com/assets/img/logo.jpeg" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:locale" content="en_GB" />

    <!-- ================= TWITTER CARD ================= -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Pearlcon Business Services — Global Industrial Sourcing & Procurement" />
    <meta name="twitter:description"
        content="UK-based sourcing, procurement and consultancy partner for oil & gas, petrochemical and industrial plants worldwide." />
    <meta name="twitter:image" content="https://pearlcon.com/assets/img/logo.jpeg" />

    <!-- ================= AI / LLM CRAWLER TAGS ================= -->
    <meta name="ai-content-declaration" content="human-authored" />
    <meta name="chatgpt-crawler" content="index" />
    <meta name="applicable-boost" content="business, procurement, industrial-supply" />
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
            --text-on-dark-mute: #f7fbff;
            --line: #dce1e6;
            --radius: 14px;
            --maxw: 1240px;
            --ease: cubic-bezier(0.16, 0.8, 0.24, 1);
            --headerH: 106px;
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }

            * {
                animation-duration: 0.001ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.001ms !important;
                scroll-behavior: auto !important;
            }
        }

        html {
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

        button {
            font-family: inherit;
        }

        section {
            scroll-margin-top: 112px;
            position: relative;
        }

        .eyebrow {
            font-family: "IBM Plex Mono", monospace;
            font-size: 18px;
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
            transition:
                transform 0.35s var(--ease),
                box-shadow 0.35s var(--ease),
                background 0.35s var(--ease),
                color 0.35s var(--ease),
                border-color 0.35s var(--ease);
            white-space: nowrap;
            position: relative;
            overflow: hidden;
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

        .btn-primary::before {
            content: "";
            position: absolute;
            inset: 0;
            background: linear-gradient(120deg,
                    transparent 30%,
                    rgba(255, 255, 255, 0.55) 50%,
                    transparent 70%);
            transform: translateX(-120%);
            transition: transform 0.7s var(--ease);
        }

        .btn-primary:hover::before {
            transform: translateX(120%);
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

        .btn-ghost-light {
            color: var(--text);
            border-color: var(--line);
        }

        .btn-ghost-light:hover {
            border-color: var(--text);
            transform: translateY(-2px);
        }

        .btn svg {
            width: 15px;
            height: 15px;
            transition: transform 0.3s var(--ease);
        }

        .btn:hover svg {
            transform: translateX(3px);
        }

        /* ---------- reveal ---------- */
        .r {
            opacity: 0;
            transform: translateY(28px);
            transition:
                opacity 0.9s var(--ease),
                transform 0.9s var(--ease);
        }

        .r.in {
            opacity: 1;
            transform: translateY(0);
        }

        .r-stagger>* {
            opacity: 0;
            transform: translateY(24px);
            transition:
                opacity 0.7s var(--ease),
                transform 0.7s var(--ease);
        }

        .r-stagger.in>* {
            opacity: 1;
            transform: translateY(0);
        }

        .r-stagger.in>*:nth-child(1) {
            transition-delay: 0.02s;
        }

        .r-stagger.in>*:nth-child(2) {
            transition-delay: 0.1s;
        }

        .r-stagger.in>*:nth-child(3) {
            transition-delay: 0.18s;
        }

        .r-stagger.in>*:nth-child(4) {
            transition-delay: 0.26s;
        }

        .r-stagger.in>*:nth-child(5) {
            transition-delay: 0.34s;
        }

        .r-stagger.in>*:nth-child(6) {
            transition-delay: 0.42s;
        }

        .r-stagger.in>*:nth-child(7) {
            transition-delay: 0.5s;
        }

        .r-stagger.in>*:nth-child(8) {
            transition-delay: 0.58s;
        }

        .r-stagger.in>*:nth-child(9) {
            transition-delay: 0.66s;
        }

        /* ---------- tilt ---------- */
        .tilt-group {
            perspective: 1200px;
        }

        .tilt {
            transform-style: preserve-3d;
            will-change: transform;
            transition:
                transform 0.5s var(--ease),
                box-shadow 0.5s var(--ease);
        }

        /* ================= HEADER (ifm-style two-tier) ================= */
        header#siteHeader {
            position: sticky;
            top: 0;
            z-index: 200;
        }

        .topbar {
            background: var(--ink);
            color: var(--white);
            overflow: hidden;
            max-height: 38px;
            transition:
                max-height 0.45s var(--ease),
                opacity 0.4s var(--ease);
        }

        header#siteHeader.condensed .topbar {
            max-height: 0;
            opacity: 0;
        }

        .topbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 38px;
            font-size: 15.5px;
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
            transition: color 0.25s;
        }

        .topbar-links a:hover {
            color: #fff;
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
            transition: box-shadow 0.4s var(--ease);
        }

        header#siteHeader.condensed .mainbar {
            box-shadow: 0 10px 30px -22px rgba(10, 22, 38, 0.35);
        }

        .mainbar-inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            height: 68px;
            transition: height 0.4s var(--ease);
        }

        header#siteHeader.condensed .mainbar-inner {
            height: 58px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 11px;
        }

        .brand-mark {
            width: 64px;
            height: 64px;
            border-radius: 9px;
            /* background:linear-gradient(135deg, var(--amber), var(--violet)); */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .brand-text {
            line-height: 1.1;
        }

        .brand-text strong {
            font-family: "Space Grotesk";
            font-weight: 700;
            font-size: 16.5px;
            color: var(--text);
            letter-spacing: 0.01em;
            display: block;
        }

        .brand-text span {
            font-family: "Space Grotesk", sans-serif;
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

        .primary-nav li {
            position: relative;
        }

        .primary-nav>ul>li>a,
        .nav-trigger {
            display: flex;
            align-items: center;
            gap: 6px;
            font-size: 14.5px;
            font-weight: 500;
            color: var(--text);
            padding: 12px 14px;
            border-radius: 8px;
            background: none;
            border: none;
            cursor: pointer;
            transition:
                color 0.25s,
                background 0.25s;
        }

        .primary-nav>ul>li>a:hover,
        .nav-trigger:hover {
            color: var(--amber);
            background: var(--surface);
        }

        .nav-trigger svg {
            width: 10px;
            height: 10px;
            stroke: currentColor;
            transition: transform 0.3s var(--ease);
        }

        li.has-mega:hover .nav-trigger svg,
        li.has-mega.open .nav-trigger svg {
            transform: rotate(180deg);
        }

        .mega-panel {
            position: absolute;
            top: calc(100% + 12px);
            left: 0;
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 16px;
            box-shadow: 0 30px 60px -20px rgba(10, 22, 38, 0.28);
            padding: 22px;
            opacity: 0;
            visibility: hidden;
            transform: translateY(8px);
            transition:
                opacity 0.3s var(--ease),
                transform 0.3s var(--ease),
                visibility 0.3s;
            z-index: 50;
        }

        li.has-mega:hover .mega-panel,
        li.has-mega.open .mega-panel {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .mega-grid {
            display: grid;
            grid-template-columns: repeat(2, 220px);
            gap: 4px;
        }

        .mega-link {
            display: flex;
            gap: 12px;
            align-items: flex-start;
            padding: 11px 12px;
            border-radius: 10px;
            transition: background 0.25s;
        }

        .mega-link:hover {
            background: var(--surface);
        }

        .mega-link .mi {
            width: 30px;
            height: 30px;
            border-radius: 8px;
            background: var(--surface-2);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
        }

        .mega-link .mi svg {
            width: 16px;
            height: 16px;
            stroke: var(--ink);
            fill: none;
            stroke-width: 1.5;
        }

        .mega-link h5 {
            font-size: 13.5px;
            font-weight: 600;
            color: var(--text);
        }

        .mega-link p {
            font-size: 11.5px;
            margin-top: 2px;
            color: var(--text-mute);
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
            color: var(--text);
            transition:
                background 0.25s,
                color 0.25s;
        }

        .mega-panel-simple a:hover {
            background: var(--surface);
            color: var(--amber);
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
            border: 1px solid var(--line);
            background: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition:
                border-color 0.3s,
                background 0.3s;
        }

        .icon-btn:hover {
            border-color: var(--amber);
            background: var(--surface);
        }

        .icon-btn svg {
            width: 16px;
            height: 16px;
            stroke: var(--text);
            fill: none;
            stroke-width: 1.8;
        }


        /* ================= HERO ================= */
        .hero {
            background: radial-gradient(120% 90% at 15% -10%,
                    #16283f 0%,
                    var(--ink) 55%,
                    #060d18 100%);
            color: var(--text-on-dark);
            padding: 104px 0 96px;
            position: relative;
            /* overflow: visible; */
            overflow: clip;
            isolation: isolate;
        }

        .hero-clip {
            position: absolute;
            inset: 0;
            overflow: hidden;
            z-index: -2;
        }

        .hero canvas {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
            opacity: 0.75;
        }

        .hero-clip::after {
            content: "";
            position: absolute;
            inset: 0;
            pointer-events: none;
            background: linear-gradient(180deg,
                    transparent 45%,
                    var(--ink) 100%);
        }

        .blob {
            position: absolute;
            border-radius: 50%;
            filter: blur(70px);
            z-index: -1;
            opacity: 0.55;
        }

        .blob-a {
            width: 420px;
            height: 420px;
            left: -140px;
            top: -80px;
            background: radial-gradient(circle,
                    rgba(91, 76, 159, 0.55),
                    transparent 70%);
            animation: driftA 22s ease-in-out infinite;
        }

        .blob-b {
            width: 380px;
            height: 380px;
            right: -120px;
            top: 60px;
            background: radial-gradient(circle,
                    rgba(233, 132, 35, 0.35),
                    transparent 70%);
            animation: driftB 26s ease-in-out infinite;
        }

        @keyframes driftA {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(40px, 30px);
            }
        }

        @keyframes driftB {

            0%,
            100% {
                transform: translate(0, 0);
            }

            50% {
                transform: translate(-30px, 40px);
            }
        }

        .hero-inner {
            max-width: var(--maxw);
            margin: 0 auto;
            padding: 0 32px;
            position: relative;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.05fr 0.95fr;
            gap: 40px;
            align-items: center;
        }

        .hero h1 {
            font-size: clamp(26px, 3vw, 52px);
            line-height: 1.06;
            font-weight: 700;
            color: #fff;
            margin-top: 22px;
        }

        .hero h1 .word {
            display: inline-block;
            overflow: hidden;
            vertical-align: top;
            padding-bottom: 0.08em;
            margin-bottom: -0.08em;
        }

        .hero h1 .word-inner {
            display: inline-block;
            transform: translateY(115%);
            animation: wordUp 0.85s var(--ease) forwards;
        }

        .hero h1 em {
            font-style: normal;
            color: var(--amber-2);
        }

        @keyframes wordUp {
            to {
                transform: translateY(0);
            }
        }

        .hero p.lead {
            margin-top: 24px;
            font-size: 17.5px;
            max-width: 500px;
            color: var(--text-on-dark-mute);
            line-height: 1.7;
            opacity: 0;
            animation: fadeUp 0.8s var(--ease) 0.7s forwards;
        }

        .hero-actions {
            display: flex;
            gap: 16px;
            margin-top: 36px;
            flex-wrap: wrap;
            opacity: 0;
            animation: fadeUp 0.8s var(--ease) 0.9s forwards;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(16px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* --- hero video teaser --- */
        .video-teaser {
            margin-top: 30px;
            display: inline-flex;
            align-items: center;
            gap: 14px;
            padding: 8px 22px 8px 8px;
            border-radius: 999px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.16);
            cursor: pointer;
            transition:
                background 0.3s,
                border-color 0.3s,
                transform 0.35s var(--ease);
            opacity: 0;
            animation: fadeUp 0.8s var(--ease) 1.05s forwards;
        }

        .video-teaser:hover {
            background: rgba(255, 255, 255, 0.11);
            border-color: rgba(255, 255, 255, 0.34);
            transform: translateY(-2px);
        }

        .vt-thumb {
            width: 46px;
            height: 46px;
            border-radius: 50%;
            flex-shrink: 0;
            position: relative;
            background: radial-gradient(circle at 35% 30%,
                    #ffb763,
                    var(--amber) 60%,
                    #c96a15 100%);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .vt-thumb svg {
            width: 14px;
            height: 14px;
            fill: #1a1005;
            margin-left: 2px;
        }

        .vt-thumb::after {
            content: "";
            position: absolute;
            inset: -5px;
            border-radius: 50%;
            border: 1px solid rgba(233, 132, 35, 0.5);
            animation: ping 2.6s cubic-bezier(0.2, 0.7, 0.3, 1) infinite;
        }

        .vt-text b {
            display: block;
            font-size: 14px;
            color: #fff;
            font-weight: 600;
        }

        .vt-text span {
            font-size: 11.5px;
            color: var(--text-on-dark-mute);
            font-family: "IBM Plex Mono";
        }

        /* --- video lightbox modal --- */
        .video-modal {
            position: fixed;
            inset: 0;
            z-index: 300;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: rgba(6, 13, 24, 0.88);
            backdrop-filter: blur(12px);
            opacity: 0;
            visibility: hidden;
            transition:
                opacity 0.35s var(--ease),
                visibility 0.35s;
        }

        .video-modal.open {
            opacity: 1;
            visibility: visible;
        }

        .video-modal-inner {
            position: relative;
            width: 100%;
            max-width: 960px;
            background: #000;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 40px 100px -20px rgba(0, 0, 0, 0.7);
            transform: scale(0.94);
            transition: transform 0.4s var(--ease);
        }

        .video-modal.open .video-modal-inner {
            transform: scale(1);
        }

        .video-modal video {
            width: 100%;
            display: block;
            aspect-ratio: 16/12;
            background: #000;
        }

        .video-modal-close {
            position: absolute;
            top: 14px;
            right: 14px;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.22);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 3;
        }

        .video-modal-close:hover {
            background: rgba(255, 255, 255, 0.22);
        }

        .video-modal-close svg {
            width: 16px;
            height: 16px;
            stroke: #fff;
        }

        .video-fallback {
            position: absolute;
            inset: 0;
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 14px;
            color: #fff;
            text-align: center;
            padding: 40px;
            background: linear-gradient(150deg, #101f35, #0a1626);
        }

        .video-fallback.show {
            display: flex;
        }

        .video-fallback .vf-icon {
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: rgba(233, 132, 35, 0.16);
            border: 1px solid rgba(233, 132, 35, 0.4);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .video-fallback .vf-icon svg {
            width: 22px;
            height: 22px;
            stroke: var(--amber-2);
        }

        .video-fallback .vf-title {
            font-family: "Space Grotesk";
            font-size: 19px;
            font-weight: 600;
        }

        .video-fallback p {
            max-width: 420px;
            font-size: 13.5px;
            color: var(--text-on-dark-mute);
        }

        .video-fallback code {
            background: rgba(255, 255, 255, 0.09);
            padding: 3px 8px;
            border-radius: 6px;
            font-family: "IBM Plex Mono";
            font-size: 12px;
            color: var(--amber-2);
        }

        /* --- hero graphic: orbit hub + floating cards --- */
        .hero-graphic {
            position: relative;
            width: 100%;
            max-width: 480px;
            aspect-ratio: 1/1;
            margin: 0 auto;
            opacity: 0;
            animation: fadeUp 1s var(--ease) 0.5s forwards;
        }

        .hg-layer {
            position: absolute;
            inset: 0;
        }

        .orbit-ring {
            position: absolute;
            top: 50%;
            left: 50%;
            border: 1px dashed rgba(255, 255, 255, 0.16);
            border-radius: 50%;
            transform: translate(-50%, -50%);
        }

        .orbit-ring.r1 {
            width: 92%;
            height: 92%;
        }

        .orbit-ring.r2 {
            width: 68%;
            height: 68%;
            border-style: solid;
            border-color: rgba(233, 132, 35, 0.18);
        }

        .orbit-ring.r3 {
            width: 42%;
            height: 42%;
            border-color: rgba(255, 255, 255, 0.1);
        }

        .spin-cw {
            animation: spinCW 46s linear infinite;
        }

        .spin-ccw {
            animation: spinCCW 34s linear infinite;
        }

        @keyframes spinCW {
            to {
                transform: translate(-50%, -50%) rotate(360deg);
            }
        }

        @keyframes spinCCW {
            to {
                transform: translate(-50%, -50%) rotate(-360deg);
            }
        }

        .orbit-node {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 44px;
            height: 44px;
            margin: -22px;
        }

        .orbit-node .node-inner {
            width: 44px;
            height: 44px;
            border-radius: 12px;
            background: rgba(16, 31, 53, 0.85);
            border: 1px solid rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(6px);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .orbit-node svg {
            width: 19px;
            height: 19px;
            stroke: var(--amber-2);
            fill: none;
            stroke-width: 1.6;
        }

        .hub-core {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 118px;
            height: 118px;
            border-radius: 50%;
            background: radial-gradient(circle at 35% 30%,
                    #ffb763,
                    var(--amber) 60%,
                    #c96a15 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            box-shadow:
                0 0 0 1px rgba(255, 255, 255, 0.18),
                0 30px 60px -20px rgba(233, 132, 35, 0.65);
            text-align: center;
            z-index: 3;
        }

        .hub-core span {
            font-family: "Space Grotesk";
            font-weight: 700;
            color: #1a1005;
            font-size: 13.5px;
            line-height: 1.15;
        }

        .hub-core small {
            font-family: "IBM Plex Mono";
            font-size: 8.5px;
            color: #4a2c05;
            letter-spacing: 0.08em;
            margin-top: 2px;
        }

        .hub-ping {
            position: absolute;
            top: 50%;
            left: 50%;
            width: 118px;
            height: 118px;
            margin: -59px;
            border-radius: 50%;
            border: 1.5px solid rgba(233, 132, 35, 0.5);
            animation: ping 2.6s cubic-bezier(0.2, 0.7, 0.3, 1) infinite;
        }

        @keyframes ping {
            0% {
                transform: scale(0.9);
                opacity: 0.7;
            }

            100% {
                transform: scale(1.7);
                opacity: 0;
            }
        }

        .float-card {
            position: absolute;
            background: rgba(16, 31, 53, 0.72);
            border: 1px solid rgba(255, 255, 255, 0.14);
            backdrop-filter: blur(10px);
            border-radius: 14px;
            padding: 12px 16px;
            box-shadow: 0 20px 40px -20px rgba(0, 0, 0, 0.6);
            animation: bob 5s ease-in-out infinite;
        }

        .float-card b {
            font-family: "IBM Plex Mono";
            font-size: 19px;
            color: #fff;
            display: block;
            font-weight: 600;
        }

        .float-card span {
            font-size: 10.5px;
            color: var(--text-on-dark-mute);
        }

        .fc-1 {
            top: 2%;
            left: -4%;
            animation-delay: 0s;
        }

        .fc-2 {
            bottom: 10%;
            right: -6%;
            animation-delay: 1.4s;
        }

        .fc-3 {
            bottom: -2%;
            left: 14%;
            animation-delay: 2.6s;
        }

        @keyframes bob {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        .scroll-cue {
            position: absolute;
            left: 32px;
            bottom: -46px;
            display: flex;
            align-items: center;
            gap: 10px;
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-on-dark-mute);
            z-index: 2;
        }

        .scroll-cue .line {
            width: 1px;
            height: 30px;
            background: linear-gradient(var(--amber), transparent);
            animation: scrollpulse 1.8s infinite;
        }

        @keyframes scrollpulse {
            0% {
                opacity: 0.2;
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0.2;
            }
        }

        /* ---------- TRUST STRIP ---------- */
        .trust {
            background: var(--ink-2);
            border-top: 1px solid rgba(255, 255, 255, 0.06);
        }

        .trust .wrap {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            padding: 30px 32px;
        }

        .trust .item {
            display: flex;
            align-items: center;
            gap: 14px;
            padding: 0 26px;
            border-left: 1px solid rgba(255, 255, 255, 0.09);
        }

        .trust .item:first-child {
            border-left: none;
            padding-left: 0;
        }

        .trust .icon-dot {
            width: 38px;
            height: 38px;
            border-radius: 10px;
            flex-shrink: 0;
            background: rgba(233, 132, 35, 0.12);
            border: 1px solid rgba(233, 132, 35, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .trust .icon-dot svg {
            width: 18px;
            height: 18px;
            stroke: var(--amber-2);
        }

        .trust b {
            font-family: "IBM Plex Mono";
            font-size: 21px;
            color: #fff;
            display: block;
            font-weight: 600;
        }

        .trust span {
            font-size: 12.5px;
            color: var(--text-on-dark-mute);
        }

        /* ---------- shared section chrome ---------- */
        .sec {
            padding: 40px 0;
        }

        .sec-head {
            max-width: 680px;
            margin-bottom: 56px;
        }

        .sec-head h2 {
            font-size: clamp(28px, 3.4vw, 42px);
            margin-top: 16px;
            font-weight: 600;
            line-height: 1.15;
        }

        .sec-head p {
            margin-top: 18px;
            font-size: 16px;
        }

        .sec.on-dark {
            background: var(--ink);
            color: var(--text-on-dark);
        }

        .sec.on-dark p {
            color: var(--text-on-dark-mute);
        }

        .sec.on-dark h2,
        .sec.on-dark h3,
        .sec.on-dark h4 {
            color: #fff;
        }

        .sec.alt {
            background: var(--white);
        }

        /* ---------- ABOUT (ifm-style) ---------- */
        .about-top {
            max-width: 800px;
            margin-bottom: 64px;
        }

        .about-statement {
            font-size: clamp(26px, 3.2vw, 38px);
            margin-top: 18px;
            font-weight: 600;
            line-height: 1.28;
            color: var(--text);
        }

        .about-statement .hl {
            color: var(--amber);
        }

        .about-main {
            display: grid;
            grid-template-columns: 0.95fr 1.05fr;
            gap: 64px;
            align-items: center;
            margin-bottom: 64px;
        }

        .about-visual {
            position: relative;
            aspect-ratio: 4/3.3;
            border-radius: 22px;
            overflow: hidden;
            background: linear-gradient(150deg, #101f35, #0a1626 70%);
            border: 1px solid var(--line);
        }

        .about-visual svg {
            position: absolute;
            inset: 0;
            width: 100%;
            height: 100%;
        }

        .about-visual .av-chip {
            position: absolute;
            left: 22px;
            bottom: 22px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.16);
            backdrop-filter: blur(8px);
            border-radius: 12px;
            padding: 12px 16px;
            color: #fff;
        }

        .about-visual .av-chip b {
            font-family: "IBM Plex Mono";
            font-size: 20px;
            display: block;
        }

        .about-visual .av-chip span {
            font-size: 10.5px;
            color: var(--text-on-dark-mute);
        }

        .about-copy p {
            font-size: 16.5px;
            color: var(--text);
            line-height: 1.75;
        }

        .about-stats-row {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 0;
            margin-top: 34px;
        }

        .about-stats-row .as {
            border-left: 1px solid var(--line);
            padding: 0 20px;
        }

        .about-stats-row .as:first-child {
            border-left: none;
            padding-left: 0;
        }

        .about-stats-row b {
            font-family: "IBM Plex Mono";
            font-size: 28px;
            font-weight: 600;
            color: var(--text);
            display: block;
        }

        .about-stats-row span {
            font-size: 12px;
            color: var(--text-mute);
        }

        .then-now {
            display: grid;
            grid-template-columns: 1fr auto 1fr;
            gap: 26px;
            align-items: center;
            margin-bottom: 64px;
        }

        .tn-card {
            background: var(--surface);
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 28px 30px;
        }

        .tn-card.now {
            background: #101f35;
            border-color: transparent;
        }

        .tn-label {
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--amber);
            font-weight: 700;
        }

        .tn-card.now .tn-label {
            color: var(--amber-2);
        }

        .tn-card h4 {
            font-size: 18px;
            margin-top: 10px;
            font-weight: 600;
        }

        .tn-card.now h4 {
            color: #fff;
        }

        .tn-card p {
            font-size: 13.5px;
            margin-top: 10px;
        }

        .tn-card.now p {
            color: var(--text-on-dark-mute);
        }

        .tn-arrow {
            font-family: "Space Grotesk";
            font-size: 26px;
            color: var(--amber);
        }

        .pillars {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .pillar {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 32px 28px;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0);
        }

        .pillar:hover {
            box-shadow: 0 30px 60px -30px rgba(19, 32, 47, 0.35);
            border-color: transparent;
        }

        .pillar .tag {
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--amber);
            font-weight: 600;
        }

        .pillar h4 {
            font-size: 19px;
            margin-top: 14px;
            font-weight: 600;
        }

        .pillar p {
            margin-top: 12px;
            font-size: 14.5px;
        }

        .value-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 16px;
        }

        .value-tags span {
            font-size: 12px;
            padding: 6px 12px;
            border-radius: 999px;
            background: var(--surface-2);
            color: var(--text-mute);
            font-weight: 500;
            transition:
                background 0.3s,
                color 0.3s;
        }

        .pillar:hover .value-tags span {
            background: #fbefe0;
            color: #8a4b10;
        }

        /* ---------- INDUSTRIES ---------- */
        .ind-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            background: var(--line);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            overflow: hidden;
        }

        .ind-card {
            background: var(--white);
            padding: 24px 20px;
            min-height: 200px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: background 0.4s var(--ease);
            position: relative;
            z-index: 1;
        }

        .ind-card:hover {
            background: #fbf4ec;
            z-index: 2;
        }

        .ind-card .n {
            font-family: "IBM Plex Mono";
            font-size: 11px;
            color: var(--text-mute);
            opacity: 0.6;
        }

        .ind-card .icn {
            width: 40px;
            height: 40px;
            margin: 14px 0 18px;
        }

        .ind-card .icn svg {
            width: 100%;
            height: 100%;
            stroke: var(--ink);
            stroke-width: 1.4;
            fill: none;
            transition: stroke 0.4s;
        }

        .ind-card:hover .icn svg {
            stroke: var(--amber);
        }

        .ind-card h4 {
            font-size: 16.5px;
            font-weight: 600;
        }

        .ind-card p {
            font-size: 13px;
            margin-top: 8px;
        }

        .ind-card .img-wrap {
            width: 100%;
            height: 180px;
            border-radius: 10px;
            overflow: hidden;
            margin: 14px 0 16px;
            background: var(--surface-2);
        }

        .ind-card .img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s var(--ease);
        }

        .ind-card:hover .img-wrap img {
            transform: scale(1.08);
        }

        /* ---------- WHY / CHALLENGES ---------- */
        .why-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 0;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            overflow: hidden;
        }

        .why-col {
            padding: 46px 42px;
        }

        .why-col.problems {
            background: var(--white);
            border-right: 1px solid var(--line);
        }

        .why-col.solutions {
            background: #101f35;
            color: var(--text-on-dark);
        }

        .why-col .tag {
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            font-weight: 600;
        }

        .why-col.problems .tag {
            color: #b14a18;
        }

        .why-col.solutions .tag {
            color: var(--amber-2);
        }

        .why-col h3 {
            font-size: 23px;
            margin-top: 14px;
            font-weight: 600;
        }

        .why-col.solutions h3 {
            color: #fff;
        }

        .why-list {
            margin-top: 26px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .why-list li {
            display: flex;
            gap: 14px;
            font-size: 14.5px;
            align-items: flex-start;
        }

        .why-col.problems .why-list li {
            color: var(--text-mute);
        }

        .why-col.solutions .why-list li {
            color: var(--text-on-dark-mute);
        }

        .why-list .bullet {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin-top: 7px;
            flex-shrink: 0;
        }

        .why-col.problems .bullet {
            background: #c25b22;
        }

        .why-col.solutions .bullet {
            background: var(--amber-2);
        }

        .why-stat {
            margin-top: 30px;
            padding: 18px 20px;
            border-radius: 10px;
            background: var(--surface-2);
            font-size: 13.5px;
            color: var(--text-mute);
        }

        .why-col.solutions .why-stat {
            background: rgba(255, 255, 255, 0.06);
            color: var(--text-on-dark-mute);
        }

        .why-stat b {
            color: var(--text);
            font-family: "IBM Plex Mono";
        }

        .why-col.solutions .why-stat b {
            color: #fff;
        }

        /* ---------- SIGNATURE: hub diagram ---------- */
        .hub-section {
            background: var(--surface);
        }

        .hub-wrap {
            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            gap: 60px;
            align-items: center;
        }

        .hub-copy h2 {
            font-size: clamp(28px, 3.2vw, 40px);
            font-weight: 600;
            line-height: 1.16;
            margin-top: 16px;
        }

        .hub-copy p {
            margin-top: 18px;
            font-size: 15.5px;
        }

        .hub-list {
            margin-top: 28px;
            display: flex;
            flex-direction: column;
            gap: 14px;
        }

        .hub-list li {
            display: flex;
            gap: 12px;
            font-size: 14.5px;
            color: var(--text);
            align-items: center;
        }

        .hub-list svg {
            width: 16px;
            height: 16px;
            stroke: var(--amber);
            flex-shrink: 0;
        }

        .hub-diagram {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: 20px;
            padding: 20px 10px;
            position: relative;
        }

        .hub-diagram .labels {
            display: flex;
            justify-content: space-between;
            padding: 0 34px;
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--text-mute);
            margin-bottom: 6px;
        }

        .hub-diagram .labels .before {
            color: #b14a18;
            font-weight: 600;


        }

        .hub-diagram .labels .after {
            color: var(--amber);
            font-weight: 600;

        }

        .pulse-line {
            stroke-dasharray: 6 6;
            animation: dashflow 1.6s linear infinite;
        }

        @keyframes dashflow {
            to {
                stroke-dashoffset: -24;
            }
        }

        /* ---------- PROCESS ---------- */
        .process-strip {
            position: relative;
            margin-top: 8px;
        }

        .process-track {
            position: relative;
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 0;
            padding-top: 8px;
        }

        .process-line {
            position: absolute;
            top: 29px;
            left: 0;
            right: 0;
            height: 2px;
            background: rgba(255, 255, 255, 0.12);
            z-index: 0;
        }

        .process-line-fill {
            position: absolute;
            top: 0;
            left: 0;
            height: 2px;
            width: 0;
            background: var(--amber);
            transition: width 1.6s var(--ease);
        }

        .process-step {
            position: relative;
            z-index: 1;
            padding-right: 18px;
        }

        .process-step .num {
            width: 58px;
            height: 58px;
            border-radius: 50%;
            background: var(--ink-2);
            border: 2px solid rgba(255, 255, 255, 0.16);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "IBM Plex Mono";
            font-weight: 600;
            color: var(--text-on-dark-mute);
            margin-bottom: 20px;
            transition:
                border-color 0.5s,
                color 0.5s,
                background 0.5s,
                transform 0.5s var(--ease);
            font-size: 15px;
        }

        .process-step.active .num {
            border-color: var(--amber);
            color: #fff;
            background: var(--amber);
            transform: scale(1.08);
            box-shadow: 0 0 0 8px rgba(233, 132, 35, 0.14);
        }

        .process-step h4 {
            font-size: 14.5px;
            font-weight: 600;
            line-height: 1.3;
        }

        .process-step p {
            font-size: 12.5px;
            margin-top: 8px;
        }

        /* ---------- PRODUCTS ---------- */
        .prod-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 22px;
        }

        .prod-card {
            background: var(--ink-2);
            border: 1px solid rgba(255, 255, 255, 0.07);
            border-radius: var(--radius);
            padding: 10px 28px;
            transition:
                border-color 0.4s,
                box-shadow 0.4s;
        }

        .prod-card:hover {
            border-color: rgba(233, 132, 35, 0.4);
            box-shadow: 0 30px 60px -30px rgba(0, 0, 0, 0.6);
        }

        .prod-card .img-wrap {
            width: 100%;
            height: 180px;
            border-radius: 10px;
            overflow: hidden;
            margin: 14px 0 16px;
            background: var(--surface-2);
        }

        .prod-card .img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.5s var(--ease);
        }

        .prod-card:hover .img-wrap img {
            transform: scale(1.08);
        }

        .prod-card h4 {
            font-size: 16.5px;
            color: #fff;
            font-weight: 600;
        }

        .prod-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 7px;
            margin-top: 16px;
        }

        .prod-tags span {
            font-size: 11.5px;
            padding: 5px 10px;
            border-radius: 6px;
            background: rgba(255, 255, 255, 0.05);
            color: var(--text-on-dark-mute);
            border: 1px solid rgba(255, 255, 255, 0.07);
        }

        /* ---------- BRANDS marquee ---------- */
        .brands-sec {
            padding: 40px 0;
            background: var(--white);
            border-top: 1px solid var(--line);
            border-bottom: 1px solid var(--line);
        }

        .brands-sec .eyebrow {
            margin-left: 32px;
        }

        .marquee {
            overflow: hidden;
            margin-top: 30px;
            -webkit-mask-image: linear-gradient(90deg,
                    transparent,
                    #000 6%,
                    #000 94%,
                    transparent);
            mask-image: linear-gradient(90deg,
                    transparent,
                    #000 6%,
                    #000 94%,
                    transparent);
        }

        .marquee-track {
            display: flex;
            width: max-content;
            animation: marquee 120s linear infinite;
        }

        .marquee:hover .marquee-track {
            animation-play-state: paused;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        .marquee-track span {
            font-family: "Space Grotesk";
            font-weight: 600;
            font-size: 20px;
            color: var(--text);
            padding: 0 34px;
            opacity: 1;
            white-space: nowrap;
            display: inline-flex;
            align-items: center;
            gap: 34px;
            transition: opacity 0.3s;
        }

        .marquee-track span img {
            width: 150px;
            height: 80px;
        }

        .marquee-track span:hover {
            opacity: 1;
            color: var(--amber);
        }

        .marquee-track span::after {
            content: "•";
            color: var(--amber);
            opacity: 0.8;
            font-size: 14px;
        }

        /* ---------- GLOBAL NETWORK ---------- */
        .globe-wrap {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 70px;
            align-items: center;
        }

        .globe-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 22px;
            margin-top: 36px;
        }

        .globe-stats .g {
            border-top: 1px solid rgba(255, 255, 255, 0.12);
            padding-top: 16px;
        }

        .globe-stats b {
            font-family: "IBM Plex Mono";
            font-size: 26px;
            color: #fff;
            display: block;
        }

        .globe-stats span {
            font-size: 12.5px;
            color: var(--text-on-dark-mute);
        }

        .globe-svg {
            width: 100%;
            height: auto;
        }

        .hub-pulse {
            animation: radiuspulse 2.6s ease-in-out infinite;
            transform-origin: center;
        }

        @keyframes radiuspulse {

            0%,
            100% {
                opacity: 0.35;
                transform: scale(1);
            }

            50% {
                opacity: 0;
                transform: scale(2.6);
            }
        }

        /* ---------- CLIENTS text wall ---------- */
        .clients-wall {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
        }

        .clients-wall span {
            font-family: "IBM Plex Mono";
            font-size: 13px;
            letter-spacing: 0.03em;
            padding: 12px 18px;
            border: 1px solid var(--line);
            border-radius: 9px;
            color: var(--text-mute);
            transition: all 0.3s var(--ease);
            background: var(--white);
        }

        .clients-wall span:hover {
            border-color: var(--amber);
            color: var(--text);
            transform: translateY(-3px);
        }

        /* ---------- CTA ---------- */
        .cta-sec {
            background: linear-gradient(120deg, #101f35, #0a1626 60%);
            border-radius: 24px;
            margin: 0 32px;
            padding: 74px 60px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 40px;
            max-width: calc(var(--maxw) - 64px);
            margin-left: auto;
            margin-right: auto;
            position: relative;
            overflow: hidden;
        }

        .cta-sec::before {
            content: "";
            position: absolute;
            right: -120px;
            top: -120px;
            width: 340px;
            height: 340px;
            border-radius: 50%;
            background: radial-gradient(circle,
                    rgba(233, 132, 35, 0.28),
                    transparent 70%);
            animation: driftB 20s ease-in-out infinite;
        }

        .cta-sec h2 {
            font-size: clamp(26px, 3vw, 38px);
            color: #fff;
            max-width: 520px;
            font-weight: 600;
            line-height: 1.2;
        }

        .cta-sec p {
            margin-top: 14px;
            color: var(--text-on-dark-mute);
            max-width: 460px;
            font-size: 15px;
        }

        .cta-actions {
            display: flex;
            gap: 16px;
            flex-shrink: 0;
            flex-wrap: wrap;
        }

        /* ---------- FOOTER ---------- */
        footer {
            background: var(--ink);
            color: var(--text-on-dark-mute);
            padding: 90px 0 30px;
        }

        .foot-grid {
            display: grid;
            grid-template-columns: 1.4fr 1fr 1fr 1fr;
            gap: 50px;
            padding-bottom: 60px;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .foot-brand p {
            margin-top: 18px;
            font-size: 14px;
            max-width: 280px;
            color: var(--text-on-dark-mute);
        }

        .foot-col h5 {
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: #fff;
            font-weight: 600;
            margin-bottom: 18px;
        }

        .foot-col ul {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .foot-col a,
        .foot-col li {
            font-size: 14px;
            color: var(--text-on-dark-mute);
            transition: color 0.3s;
        }

        .foot-col a:hover {
            color: #fff;
        }

        .foot-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 28px;
            font-size: 12.5px;
            flex-wrap: wrap;
            gap: 12px;
        }

        /* ---------- HERO VIDEO SLIDER ---------- */
        .hero-video-slider {
            position: relative;
            /* width: 100%; */
            max-width: 720px;
            margin: 0 auto;
            opacity: 0;
            animation: fadeUp 1s var(--ease) 0.5s forwards;
        }

        .hvs-container {
            position: relative;
            border-radius: 20px;
            overflow: hidden;
            background: rgba(16, 31, 53, 0.55);
            border: 1px solid rgba(255, 255, 255, 0.14);
            box-shadow: 0 40px 80px -30px rgba(0, 0, 0, 0.5);
        }

        .hvs-slides {
            display: flex;
            transition: transform 0.7s var(--ease);
        }

        .hvs-slide {
            width: 100%;
            position: relative;
            height: 500px;
            aspect-ratio: auto;
        }

        .hvs-video-wrap {
            position: relative;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .hvs-video {
            width: 100%;
            height: 100%;
            object-fit: contain;
            display: block;
            background: #000;
            transition: transform 0.8s var(--ease);
        }

        .hvs-slide:hover .hvs-video {
            transform: scale(1.04);
        }

        .hvs-play-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--amber), #c96a15);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 3;
            box-shadow: 0 8px 30px -8px rgba(233, 132, 35, 0.6);
            transition:
                transform 0.35s var(--ease),
                box-shadow 0.35s var(--ease);
        }

        .hvs-play-btn::after {
            content: "";
            position: absolute;
            inset: -8px;
            border-radius: 50%;
            border: 2px solid rgba(233, 132, 35, 0.4);
            animation: ping 2.6s cubic-bezier(0.2, 0.7, 0.3, 1) infinite;
        }

        .hvs-play-btn:hover {
            transform: translate(-50%, -50%) scale(1.1);
            box-shadow: 0 12px 40px -8px rgba(233, 132, 35, 0.8);
        }

        .hvs-play-btn svg {
            width: 22px;
            height: 22px;
            fill: #1a1005;
            margin-left: 3px;
        }

        .hvs-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 28px 24px 24px;
            background: linear-gradient(transparent, rgba(6, 13, 24, 0.92));
            z-index: 2;
            transition: opacity 0.4s;
        }

        .hvs-tag {
            font-family: "IBM Plex Mono";
            font-size: 10px;
            letter-spacing: 0.12em;
            text-transform: uppercase;
            color: var(--amber-2);
            font-weight: 600;
            display: inline-block;
            padding: 4px 10px;
            background: rgba(233, 132, 35, 0.12);
            border: 1px solid rgba(233, 132, 35, 0.25);
            border-radius: 6px;
            margin-bottom: 8px;
        }

        .hvs-overlay h2,
        .hvs-overlay h3,
        .hvs-overlay h4 {
            font-family: "Space Grotesk";
            font-size: 18px;
            font-weight: 600;
            color: #fff;
            line-height: 1.3;
        }

        .hvs-overlay p {
            font-size: 12px;
            color: var(--text-on-dark-mute);
            margin-top: 4px;
            font-family: "IBM Plex Mono";
        }

        .hvs-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 42px;
            height: 42px;
            border-radius: 50%;
            background: rgba(16, 31, 53, 0.75);
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(8px);
            cursor: pointer;
            z-index: 4;
            display: flex;
            align-items: center;
            justify-content: center;
            transition:
                background 0.3s,
                border-color 0.3s,
                transform 0.3s var(--ease);
        }

        .hvs-arrow:hover {
            background: rgba(233, 132, 35, 0.9);
            border-color: var(--amber);
            transform: translateY(-50%) scale(1.08);
        }

        .hvs-arrow:hover svg {
            stroke: #1a1005;
        }

        .hvs-arrow svg {
            width: 18px;
            height: 18px;
            stroke: #fff;
            transition: stroke 0.3s;
        }

        .hvs-prev {
            left: 14px;
        }

        .hvs-next {
            right: 14px;
        }

        .hvs-dots {
            position: absolute;
            bottom: 14px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 8px;
            z-index: 4;
        }

        .hvs-dot {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            border: none;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.25);
            transition:
                background 0.3s,
                transform 0.3s,
                width 0.3s;
        }

        .hvs-dot.active {
            background: var(--amber);
            width: 24px;
            border-radius: 4px;
        }

        .hvs-dot:hover {
            background: rgba(255, 255, 255, 0.5);
        }

        .hvs-counter {
            position: absolute;
            top: 14px;
            right: 14px;
            z-index: 4;
            font-family: "IBM Plex Mono";
            font-size: 11px;
            color: var(--text-on-dark-mute);
            background: rgba(16, 31, 53, 0.6);
            border: 1px solid rgba(255, 255, 255, 0.1);
            padding: 5px 10px;
            border-radius: 6px;
            backdrop-filter: blur(6px);
        }

        .hvs-slide:not(.active) .hvs-play-btn {
            opacity: 0;
            pointer-events: none;
        }

        .hvs-slide:not(.active) .hvs-overlay {
            opacity: 0;
        }

        /* ---------- VIDEO LIGHTBOX (updated for slider) ---------- */
        .video-modal {
            position: fixed;
            inset: 0;
            z-index: 300;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 24px;
            background: rgba(6, 13, 24, 0.92);
            backdrop-filter: blur(16px);
            opacity: 0;
            visibility: hidden;
            transition:
                opacity 0.4s var(--ease),
                visibility 0.4s;
        }

        .video-modal.open {
            opacity: 1;
            visibility: visible;
        }

        .video-modal-inner {
            position: relative;
            width: 100%;
            max-width: 1100px;
            background: #000;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 50px 120px -30px rgba(0, 0, 0, 0.8);
            transform: scale(0.92) translateY(20px);
            transition: transform 0.5s var(--ease);
        }

        .video-modal.open .video-modal-inner {
            transform: scale(1) translateY(0);
        }

        .video-modal video {
            width: 100%;
            display: block;
            aspect-ratio: 16/9;
            background: #000;
        }

        .video-modal-close {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            z-index: 3;
            transition:
                background 0.3s,
                transform 0.3s;
        }

        .video-modal-close:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(90deg);
        }

        .video-modal-close svg {
            width: 18px;
            height: 18px;
            stroke: #fff;
        }

        .video-fallback {
            position: absolute;
            inset: 0;
            display: none;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 16px;
            color: #fff;
            text-align: center;
            padding: 50px;
            background: linear-gradient(150deg, #101f35, #0a1626);
        }

        .video-fallback.show {
            display: flex;
        }

        .video-fallback .vf-icon {
            width: 64px;
            height: 64px;
            border-radius: 50%;
            background: rgba(233, 132, 35, 0.14);
            border: 1px solid rgba(233, 132, 35, 0.35);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .video-fallback .vf-icon svg {
            width: 24px;
            height: 24px;
            stroke: var(--amber-2);
        }

        .video-fallback .vf-title {
            font-family: "Space Grotesk";
            font-size: 22px;
            font-weight: 600;
        }

        .video-fallback p {
            max-width: 460px;
            font-size: 14px;
            color: var(--text-on-dark-mute);
        }

        .video-fallback code {
            background: rgba(255, 255, 255, 0.08);
            padding: 4px 10px;
            border-radius: 6px;
            font-family: "IBM Plex Mono";
            font-size: 12px;
            color: var(--amber-2);
        }

        /* ---------- responsive ---------- */
        @media (max-width: 980px) {
            .primary-nav {
                display: none;
            }

            .topbar-tag {
                display: none;
            }

            .hero-grid {
                grid-template-columns: 1fr;
            }

            .hero-graphic {
                max-width: 360px;
                margin-top: 20px;
            }

            .trust .wrap {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px 0;
            }

            .trust .item:nth-child(3) {
                border-left: none;
            }

            .about-main {
                grid-template-columns: 1fr;
                gap: 34px;
            }

            .then-now {
                grid-template-columns: 1fr;
            }

            .tn-arrow {
                display: none;
            }

            .pillars {
                grid-template-columns: 1fr;
            }

            .ind-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .why-grid {
                grid-template-columns: 1fr;
            }

            .why-col.problems {
                border-right: none;
                border-bottom: 1px solid var(--line);
            }

            .hub-wrap {
                grid-template-columns: 1fr;
            }

            .process-track {
                grid-template-columns: repeat(3, 1fr);
                row-gap: 36px;
            }

            .process-line,
            .process-line-fill {
                display: none;
            }

            .prod-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .globe-wrap {
                grid-template-columns: 1fr;
            }

            .cta-sec {
                flex-direction: column;
                align-items: flex-start;
                padding: 50px 34px;
            }

            .foot-grid {
                grid-template-columns: 1fr 1fr;
                row-gap: 40px;
            }
        }

        @media (max-width: 640px) {
            .burger {
                display: block;
            }

            .mainbar-inner {
                flex-wrap: nowrap;
            }

            .brand-mark {
                width: 44px;
                height: 44px;
            }

            .brand-text strong {
                font-size: 14px;
            }

            .brand-text span {
                font-size: 8px;
            }

            .nav-actions {
                gap: 6px;
            }

            .icon-btn {
                width: 34px;
                height: 34px;
            }

            .nav-actions .btn-sm {
                padding: 8px 12px;
                font-size: 12px;
            }

            .wrap {
                padding: 0 22px;
            }

            .hero-inner {
                padding: 0 22px;
            }

            .topbar-inner {
                justify-content: flex-end;
                flex-wrap: wrap;
                row-gap: 4px;
            }

            .topbar-links {
                flex-wrap: wrap;
                justify-content: flex-end;
                row-gap: 4px;
            }

            .float-card {
                padding: 9px 12px;
            }

            .float-card b {
                font-size: 15px;
            }

            .trust .wrap {
                grid-template-columns: 1fr 1fr;
                padding: 26px 22px;
            }

            .ind-grid {
                grid-template-columns: 1fr;
            }

            .about-stats-row {
                grid-template-columns: 1fr 1fr;
                row-gap: 18px;
            }

            .about-stats-row .as:nth-child(3) {
                border-left: none;
                padding-left: 0;
            }

            .process-track {
                grid-template-columns: 1fr 1fr;
            }

            .prod-grid {
                grid-template-columns: 1fr;
            }

            .foot-grid {
                grid-template-columns: 1fr;
                gap: 34px;
            }

            .sec {
                padding: 80px 0;
                max-width: 100%;
            }

            .hvs-container {
                border-radius: 14px;
            }

            .hvs-slide {
                height: auto;
                aspect-ratio: 4/5;
            }

            .hvs-overlay {
                padding: 20px 16px 18px;
            }

            .hvs-overlay h2,
            .hvs-overlay h3,
            .hvs-overlay h4 {
                font-size: 15px;
            }

            .hvs-tag {
                font-size: 9px;
                padding: 3px 8px;
            }

            .hvs-play-btn {
                width: 48px;
                height: 48px;
            }

            .hvs-play-btn svg {
                width: 16px;
                height: 16px;
            }

            .hvs-arrow {
                width: 32px;
                height: 32px;
            }

            .hvs-prev {
                left: 8px;
            }

            .hvs-next {
                right: 8px;
            }

            .hvs-counter {
                font-size: 10px;
                padding: 4px 8px;
            }
        }

        :focus-visible {
            outline: 2px solid var(--amber);
            outline-offset: 3px;
        }

        /* ---------- WHATSAPP FLOATING BUTTON ---------- */
        .whatsapp-float {
            position: fixed;
            right: 24px;
            bottom: 50px;
            width: 58px;
            height: 58px;
            background: #25D366;
            color: #fff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
        }

        .whatsapp-float:hover {
            background: #20ba5a;
            color: #fff;
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 12px 30px rgba(37, 211, 102, 0.4);
        }

        .whatsapp-float svg {
            width: 31px;
            height: 31px;
            fill: currentColor;
        }

        @media (max-width: 640px) {
            .whatsapp-float {
                right: 16px;
                bottom: 50px;
                width: 54px;
                height: 54px;
            }

            .whatsapp-float svg {
                width: 29px;
                height: 29px;
            }
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
          "alternateName": "Pearlcon",
          "url": "https://pearlcon.com/",
          "logo": {
            "@type": "ImageObject",
            "url": "https://pearlcon.com/assets/img/logo.jpeg",
            "caption": "Pearlcon Business Services Logo"
          },
          "image": "https://pearlcon.com/assets/img/logo.jpeg",
          "description": "UK-based sourcing, procurement and consultancy partner for oil & gas, petrochemical, industrial and process plants worldwide.",
          "telephone": "+447891363776",
          "email": "sales@pearlcon.com",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "38f, Chigwell Ln, Debden",
            "addressLocality": "Loughton",
            "postalCode": "IG10 3NY",
            "addressCountry": "GB"
          },
          "sameAs": [
            "https://www.linkedin.com/company/pearlcon-business-services-ltd/about/?viewAsMember=true",
            "https://www.pearlconrail.co.uk"
          ]
        },
        {
          "@type": "WebSite",
          "@id": "https://pearlcon.com/#website",
          "url": "https://pearlcon.com/",
          "name": "Pearlcon Business Services",
          "description": "Global Industrial Sourcing & Procurement Services",
          "publisher": {
            "@id": "https://pearlcon.com/#organization"
          },
          "inLanguage": "en-GB"
        },
        {
          "@type": "B2BBusiness",
          "@id": "https://pearlcon.com/#business",
          "name": "Pearlcon Business Services Ltd",
          "url": "https://pearlcon.com/",
          "telephone": "+447891363776",
          "email": "sales@pearlcon.com",
          "priceRange": "$$",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "38f, Chigwell Ln, Debden",
            "addressLocality": "Loughton",
            "postalCode": "IG10 3NY",
            "addressCountry": "GB"
          },
          "areaServed": "Worldwide",
          "knowsAbout": [
            "Industrial Equipment Sourcing",
            "Oil and Gas Spare Parts",
            "Petrochemical Procurement",
            "OEM Parts Supply Chain",
            "MRO Consultancy"
          ]
        }
      ]
    }
    </script>

</head>

<body>
    @include('partials.header')

    <section class="hero" id="top">
        <div class="hero-clip"><canvas id="netCanvas"></canvas></div>
        <div class="blob blob-a"></div>
        <div class="blob blob-b"></div>
        <div class="hero-inner">
            <div class="hero-grid">
                <div>
                    <div class="eyebrow r">
                        PEARLCON BUSINESS SERVICES · EST. 2009 & ISO 9001:2015 Certified
                    </div>
                    <h1>
                        <span class="word"><span class="word-inner" style="animation-delay: 0.05s">Global</span></span>
                        <span class="word"><span class="word-inner" style="animation-delay: 0.12s">Supply</span></span>
                        <span class="word"><span class="word-inner" style="animation-delay: 0.19s">&amp;</span></span>
                        <span class="word"><span class="word-inner"
                                style="animation-delay: 0.26s">Procurement</span></span>
                        <span class="word"><span class="word-inner"
                                style="animation-delay: 0.33s">Partner</span></span><br />
                        <span class="word"><span class="word-inner"
                                style="animation-delay: 0.42s"><em>|</em></span></span>
                        <span class="word"><span class="word-inner"
                                style="animation-delay: 0.48s">Industrial</span></span>
                        <span class="word"><span class="word-inner" style="animation-delay: 0.54s">Plants,</span></span>
                        <span class="word"><span class="word-inner"
                                style="animation-delay: 0.6s">Engineering</span></span>
                        <span class="word"><span class="word-inner" style="animation-delay: 0.66s">&amp;</span></span>
                        <span class="word"><span class="word-inner" style="animation-delay: 0.72s">MRO</span></span>
                        <span class="word"><span class="word-inner"
                                style="animation-delay: 0.78s"><em>|</em></span></span><br />
                        <span class="word"><span class="word-inner"
                                style="animation-delay: 0.86s">Equipment,</span></span>
                        <span class="word"><span class="word-inner" style="animation-delay: 0.92s">Spares</span></span>
                        <span class="word"><span class="word-inner" style="animation-delay: 0.98s">&amp;</span></span>
                        <span class="word"><span class="word-inner"
                                style="animation-delay: 1.04s">Technical</span></span>
                        <span class="word"><span class="word-inner"
                                style="animation-delay: 1.1s">Solutions</span></span>
                    </h1>
                    <p class="lead">
                        We source and deliver critical spare parts, industrial equipment, project requirements and engineered solutions for the Oil & Gas, Petrochemical, Process Plant, Engineering and Railway industries worldwide. With a vetted network of 5,000+ manufacturers and suppliers across the UK, US, Europe, China, Japan and Asia, we provide a single, reliable sourcing partner for complex procurement requirements
                    </p>
                    <div class="hero-actions">
                        <a href="/registration-request" class="btn btn-primary">Request a Quote
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14M13 6l6 6-6 6" />
                            </svg></a>
                        <a href="#why" class="btn btn-ghost-dark">Explore Solutions</a>
                    </div>
                </div>

                <div class="hero-video-slider" id="heroVideoSlider">
                    <div class="hvs-container">
                        <div class="hvs-slides" id="hvsSlides">
                            <div class="hvs-slide active" data-index="0">
                                <div class="hvs-video-wrap">
                                    <video class="hvs-video" muted loop playsinline poster="assets/img/">
                                        <source src="assets/pearlcon-delivery.mp4" type="video/mp4" />
                                    </video>
                                    <div class="hvs-play-btn" role="button" tabindex="0" aria-label="Play video">
                                        <svg viewBox="0 0 24 24" fill="currentColor">
                                            <path d="M8 5v14l11-7z" />
                                        </svg>
                                    </div>
                                    <div class="hvs-overlay">
                                        <span class="hvs-tag">Logistics</span>
                                        <h2>On-Time Delivery</h2>
                                        <p>1:55 · Shipping & tracking</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="scroll-cue"><span class="line"></span>Scroll</div>
    </section>
            <div class="video-fallback" id="videoFallback">
                <div class="vf-icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M6 4l14 8-14 8z" />
                    </svg>
                </div>
                <div class="vf-title">Video not connected yet</div>
                <p>
                    This player is fully wired up — add your finished video
                    as <code>assets/pearlcon-overview.mp4</code> (and
                    optionally <code>assets/pearlcon-overview.vtt</code> for
                    captions) and it will play here automatically.
                </p>
            </div>
        </div>
    </div>

    <section class="brands-sec" id="brands">
        <div class="wrap">
            <div class="eyebrow">Brands we supply</div>
            <div class="marquee">
                <div class="marquee-track" id="brandTrack">




                    <span>
                        <img src="{{ asset('assets/img/ara.jpg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/1.jpeg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/2.jpeg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/3.jpeg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/4.jpeg') }}" alt="ARA">
                    </span>

                    <span>
                        <img src="{{ asset('assets/img/5.jpg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/6.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/7.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/8.png') }}" alt="ARA">
                    </span>

                    <span>
                        <img src="{{ asset('assets/img/9.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/10.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/11.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/12.png') }}" alt="ARA">
                    </span>

                    <span>
                        <img src="{{ asset('assets/img/13.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/14.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/15.jpg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/16.png') }}" alt="ARA">
                    </span>

                    <span>
                        <img src="{{ asset('assets/img/17.jpg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/18.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/19.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/20.png') }}" alt="ARA">
                    </span>

                    <span>
                        <img src="{{ asset('assets/img/21.jpg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/22.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/23.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/24.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/25.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/26.jpg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/27.png') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/28.jpg') }}" alt="ARA">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/schenck-process-vector-logo.png') }}" alt="Schenck Process OEM Brand Partner">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/images.jpg') }}" alt="OEM Industrial Manufacturer Brand 1">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/images (1).jpg') }}" alt="OEM Industrial Manufacturer Brand 2">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/images (2).png') }}" alt="OEM Industrial Manufacturer Brand 3">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture1.PNG') }}" alt="OEM Industrial Equipment Brand 1">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture2.PNG') }}" alt="OEM Industrial Equipment Brand 2">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture4.PNG') }}" alt="OEM Industrial Equipment Brand 4">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture5.PNG') }}" alt="OEM Industrial Equipment Brand 5">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture6.PNG') }}" alt="OEM Industrial Equipment Brand 6">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture7.PNG') }}" alt="OEM Industrial Equipment Brand 7">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture8.PNG') }}" alt="OEM Industrial Equipment Brand 8">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture9.PNG') }}" alt="OEM Industrial Equipment Brand 9">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture10.PNG') }}" alt="OEM Industrial Equipment Brand 10">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture11.PNG') }}" alt="OEM Industrial Equipment Brand 11">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture12.PNG') }}" alt="OEM Industrial Equipment Brand 12">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture13.PNG') }}" alt="OEM Industrial Equipment Brand 13">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture14.PNG') }}" alt="OEM Industrial Equipment Brand 14">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture15.PNG') }}" alt="OEM Industrial Equipment Brand 15">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture16.PNG') }}" alt="OEM Industrial Equipment Brand 16">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture17.PNG') }}" alt="OEM Industrial Equipment Brand 17">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture18.PNG') }}" alt="OEM Industrial Equipment Brand 18">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture19.PNG') }}" alt="OEM Industrial Equipment Brand 19">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture20.PNG') }}" alt="OEM Industrial Equipment Brand 20">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture21.PNG') }}" alt="OEM Industrial Equipment Brand 21">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture22.PNG') }}" alt="OEM Industrial Equipment Brand 22">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture23.PNG') }}" alt="OEM Industrial Equipment Brand 23">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture24.PNG') }}" alt="OEM Industrial Equipment Brand 24">
                    </span>
                    <span>
                        <img src="{{ asset('assets/img/Capture25.PNG') }}" alt="OEM Industrial Equipment Brand 25">
                    </span>



                    <span>
                        <img src="{{ asset('assets/img/atec.jpg') }}" alt="ATEC">
                    </span>

                    <span>
                        <img src="{{ asset('assets/img/atlas.jpg') }}" alt="Atlas">
                    </span>

                    <span>
                        <img src="{{ asset('assets/img/baldon.jpg') }}" alt="Baldon">
                    </span>

                    <span>
                        <img src="{{ asset('assets/img/images (1).png') }}" alt="Bentley">
                    </span>







                    <span>
                        <img src="{{ asset('assets/img/emerson.jpg') }}" alt="Emerson">
                    </span>















                    <span>
                        <img src="{{ asset('assets/img/schenck.jpg') }}" alt="Schenck">
                    </span>





                    <span>
                        <img src="{{ asset('assets/img/images.png') }}" alt="Swagelok">
                    </span>



                    <span>
                        <img src="{{ asset('assets/img/westminster.jpg') }}" alt="Westminster">
                    </span>




                </div>
            </div>
            <div style="text-align: center; margin-top: 80px;">
                <a href="/brands" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 8px;">
                    View All Brands
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 16px; height: 16px;">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>

    <section class="trust">
        <div class="wrap">
            <div class="item">
                <div class="icon-dot">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="3" />
                        <path d="M8 12h8M8 8h8M8 16h5" />
                    </svg>
                </div>
                <div>
                    <b>2009</b><span>Founded to serve top industrial plants</span>
                </div>
            </div>
            <div class="item">
                <div class="icon-dot">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <circle cx="12" cy="12" r="9" />
                        <path d="M3 12h18M12 3a14 14 0 010 18 14 14 0 010-18z" />
                    </svg>
                </div>
                <div>
                    <b>5,000+</b><span>Manufacturers &amp; suppliers worldwide</span>
                </div>
            </div>
            <div class="item">
                <div class="icon-dot">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M4 21V9l8-6 8 6v12" />
                        <path d="M9 21v-6h6v6" />
                    </svg>
                </div>
                <div>
                    <b>50+</b><span>Plants supplied across the globe</span>
                </div>
            </div>
            <div class="item">
                <div class="icon-dot">
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <path d="M3 11l18-5v12L3 14z" />
                        <path d="M8 14v5l3-2" />
                    </svg>
                </div>
                <div>
                    <b>UK · US · EU · CN · JP</b><span>Buying offices</span>
                </div>
            </div>
            <div class="item">
                <img src="/assets/img/iso.jpeg" alt="ISO 9001 Certified Quality Procurement Partner">
                <div>
                    
                </div>
            </div>
        </div>
    </section>

    <section class="sec alt" id="clients">

        <div class="wrap">

            <div class="sec-head r">

                <div class="eyebrow">Trusted by</div>

                <h2>

                    Leading multinationals &amp; growing regional operators
                </h2>

                <p>

                    Our clients range from start-up plants to well-established organisations across 50+ locations
                    globally. Across the Middle East, Asia and Europe, we support leading industrial companies,
                    engineering firms, maintenance service providers and plant operators across critical sectors
                    including oil & gas, petrochemical, mining, manufacturing, defence, aerospace and railways

                </p>
            </div>



            <div class="marquee">

                <div class="marquee-track" id="brandTrack">

                    <span>

                        <img src="{{ asset('assets/client/client1.jpg') }}" alt="Pearlcon Industrial Client Logo 1">

                    </span>

                    <span>

                        <img src="{{ asset('assets/client/client2.jpg') }}" alt="Pearlcon Industrial Client Logo 2">

                    </span>

                    <span>

                        <img src="{{ asset('assets/client/client3.jpg') }}" alt="Pearlcon Industrial Client Logo 3">

                    </span>

                    <!--<span>-->

                    <!--    <img src="{{ asset('assets/client/client4.jpg') }}" alt="Pearlcon Industrial Client Logo 4">-->

                    <!--</span>-->

                    <!--<span>-->

                    <!--    <img src="{{ asset('assets/client/client5.jpg') }}" alt="Pearlcon Industrial Client Logo 5">-->

                    <!--</span>-->
                    <!--<span>-->

                    <!--    <img src="{{ asset('assets/client/client6.jpg') }}" alt="Pearlcon Industrial Client Logo 6">-->
                    <!--</span>-->

                    <span>

                        <img src="{{ asset('assets/client/client7.jpg') }}" alt="Pearlcon Industrial Client Logo 7">

                    </span>



                    <span>

                        <img src="{{ asset('assets/client/client9.jpg') }}" alt="Pearlcon Industrial Client Logo 9">

                    </span>

                    <span>

                        <img src="{{ asset('assets/client/client10.jpg') }}" alt="Pearlcon Industrial Client Logo 10">

                    </span>

                    <span>

                        <img src="{{ asset('assets/client/client11.jpg') }}" alt="Pearlcon Industrial Client Logo 11">
                    </span>

                    <span>

                        <img src="{{ asset('assets/client/client12.jpg') }}" alt="Pearlcon Industrial Client Logo 12">

                    </span>

                    <span>

                        <img src="{{ asset('assets/client/client13.jpg') }}" alt="Pearlcon Industrial Client Logo 13">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client14.jpg') }}" alt="Pearlcon Industrial Client Logo 14">
                    </span>

                    <span>

                        <img src="{{ asset('assets/client/client15.png') }}" alt="Pearlcon Industrial Client Logo 15">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client16.png') }}" alt="Pearlcon Industrial Client Logo 16">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client17.png') }}" alt="Pearlcon Industrial Client Logo 17">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client18.png') }}" alt="Pearlcon Industrial Client Logo 18">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client19.jpg') }}" alt="Pearlcon Industrial Client Logo 19">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client20.png') }}" alt="Pearlcon Industrial Client Logo 20">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client21.png') }}" alt="Pearlcon Industrial Client Logo 21">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client22.png') }}" alt="Pearlcon Industrial Client Logo 22">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client23.png') }}" alt="Pearlcon Industrial Client Logo 23">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client24.jpg') }}" alt="Pearlcon Industrial Client Logo 24">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client25.jpg') }}" alt="Pearlcon Industrial Client Logo 25">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client26.png') }}" alt="Pearlcon Industrial Client Logo 26">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client27.png') }}" alt="Pearlcon Industrial Client Logo 27">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client28.jpg') }}" alt="Pearlcon Industrial Client Logo 28">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client29.jpg') }}" alt="Pearlcon Industrial Client Logo 29">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client30.png') }}" alt="Pearlcon Industrial Client Logo 30">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client31.png') }}" alt="Pearlcon Industrial Client Logo 31">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client32.jpg') }}" alt="Pearlcon Industrial Client Logo 32">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client33.jpg') }}" alt="Pearlcon Industrial Client Logo 33">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client34.png') }}" alt="Pearlcon Industrial Client Logo 34">
                    </span>

                    <span>

                        <img src="{{ asset('assets/client/client34.png') }}" alt="Pearlcon Industrial Client Logo 34">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client35.jpg') }}" alt="Pearlcon Industrial Client Logo 35">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client36.png') }}" alt="Pearlcon Industrial Client Logo 36">
                    </span>
                    <span>

                        <img src="{{ asset('assets/client/client37.png') }}" alt="Pearlcon Industrial Client Logo 37">
                    </span>
                    



                </div>

            </div>

            <div style="text-align: center; margin-top: 80px;">
                <a href="/clients" class="btn btn-primary" style="display: inline-flex; align-items: center; gap: 8px;">
                    View All Clients
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" style="width: 16px; height: 16px;">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg>
                </a>
            </div>

        </div>

    </section>

    <section class="sec alt" id="about">
        <div class="wrap">
            <div class="about-top r">
                <div class="eyebrow">Who we are</div>
                <h2 class="about-statement">
                    A UK supply and sourcing partner built for industrial
                    complexity —
                    <span class="hl">one accountable team</span>, from
                    enquiry to delivery.
                </h2>
            </div>

            <div class="about-main">
                <div class="about-visual r">
                    <svg viewBox="0 0 460 380" preserveAspectRatio="xMidYMid slice">
                        <defs>
                            <radialGradient id="avGlow" cx="30%" cy="25%" r="70%">
                                <stop offset="0%" stop-color="#2A4568" />
                                <stop offset="100%" stop-color="#0A1626" />
                            </radialGradient>
                        </defs>
                        <rect width="460" height="380" fill="url(#avGlow)" />
                        <g stroke="rgba(255,255,255,.12)" fill="none">
                            <ellipse cx="230" cy="190" rx="150" ry="150" />
                            <ellipse cx="230" cy="190" rx="150" ry="52" />
                            <ellipse cx="230" cy="190" rx="60" ry="150" />
                        </g>
                        <g>
                            <circle cx="200" cy="130" r="5" fill="#E98423" />
                            <circle class="hub-pulse" cx="200" cy="130" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" />
                            <text x="210" y="126" font-size="10.5" fill="#DCE4EE" font-family="IBM Plex Mono">
                                UK
                            </text>
                        </g>
                        <g>
                            <circle cx="130" cy="165" r="5" fill="#E98423" />
                            <circle class="hub-pulse" cx="130" cy="165" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" style="animation-delay: 0.8s" />
                            <text x="95" y="155" font-size="10.5" fill="#DCE4EE" font-family="IBM Plex Mono">
                                US
                            </text>
                        </g>
                        <g>
                            <circle cx="310" cy="155" r="5" fill="#E98423" />
                            <circle class="hub-pulse" cx="310" cy="155" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" style="animation-delay: 1.6s" />
                            <text x="330" y="152" font-size="10.5" fill="#DCE4EE" font-family="IBM Plex Mono">
                                EU
                            </text>
                        </g>
                        <g>
                            <circle cx="330" cy="235" r="5" fill="#E98423" />

                            <circle class="hub-pulse" cx="330" cy="235" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" style="animation-delay: 2.4s" />

                            <text x="340" y="232" font-size="10.5" fill="#DCE4EE" font-family="IBM Plex Mono">
                                CN
                            </text>
                        </g>
                        <path d="M200 130 Q230 190 250 220" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <path d="M310 155 Q290 210 250 220" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <path d="M130 165 Q190 210 250 220" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <path d="M330 235 Q290 235 250 220" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <circle cx="250" cy="220" r="7" fill="#FFA94D" opacity=".9" />
                        <text x="240" y="248" text-anchor="middle" font-size="11" font-weight="700" fill="#FFFFFF"
                            font-family="IBM Plex Mono">
                            Pearlcon
                        </text>
                    </svg>
                    <div class="av-chip">
                        <b>Est. 2009</b><span>UK-based supply and sourcing &amp;
                            consultancy</span>
                    </div>
                </div>

                <div class="about-copy r">
                    <p>


                        Pearlcon Business Services Limited is a UK-based procurement, supply, sourcing and consulting
                        advisory company supporting organisations across critical industrial sectors globally.</br>

                        We combine extensive industry expertise, hands-on procurement experience and an outcome-oriented
                        approach to turn our clients’ business requirements and strategies into cost savings, reliable
                        supply and measurable operational value.</br>

                        Through our global network of manufacturers, suppliers and specialist partners, we source and
                        supply industrial equipment, MRO products, engineering components, spare parts and specialist
                        services from the UK, USA, Europe, China, Asia and the Far East.</br>

                        Our focus is simple: finding the right solution, from the right source, at the right value —
                        while reducing procurement complexity and supply-chain risk.
                    </p>
                    <div class="about-stats-row">
                        <div class="as">
                            <b data-count="5000" data-suffix="+">0</b><span>Manufacturers &amp; suppliers</span>
                        </div>
                        <div class="as">
                            <b data-count="50" data-suffix="+">0</b><span>Plants supplied worldwide</span>
                        </div>
                        <div class="as">
                            <b data-count="3">0</b><span>International buying offices</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="then-now r">
                <div class="tn-card then">
                    <span class="tn-label">2009 — Where we started</span>
                    <h3>A focused MRO specialist</h3>
                    <p>
                        Founded to serve the MRO and spare parts requirements of leading petrochemical, oil & gas and
                        industrial plants, Pearlcon began with a clear focus: helping critical operations source the
                        right parts, equipment and industrial supplies reliably and efficiently.
                    </p>
                </div>
                <div class="tn-arrow">→</div>
                <div class="tn-card now">
                    <span class="tn-label">Today — Where we are now</span>
                    <h3>A one-stop global partner</h3>
                    <p>
                        5,000+ manufacturers and suppliers. 50+ industrial clients and plants supported. Global sourcing
                        across the UK, USA, China, Europe and Asia.
                        </br>
                        One trusted partner. One point of contact. End-to-end procurement and supply.
                    </p>
                </div>
            </div>

            <div class="pillars r-stagger tilt-group">
                <div class="pillar tilt">
                    <div class="tag">Mission</div>
                    <h3>Simplifying Procurement. Strengthening Supply Chains.</h3>
                    <p>
                        To solve complex procurement and supply-chain challenges through one-stop sourcing, procurement
                        and supply solutions, combining global supplier access, technical expertise, competitive value
                        and reliable delivery with exceptional pre- and after-sales support.
                    </p>
                </div>
                <div class="pillar tilt">
                    <div class="tag">Vision</div>
                    <h3>The Trusted Global Procurement Partner</h3>
                    <p>
                        To become a leading global sourcing, supply and procurement consultancy for oil & gas,
                        petrochemical and industrial organisations — helping clients reduce costs, improve procurement
                        efficiency, strengthen supply-chain resilience and create lasting operational value.
                    </p>
                </div>
                <div class="pillar tilt">
                    <div class="tag">Values</div>
                    <h3>How we operate</h3>
                    <div class="value-tags">
                        <span>Integrity</span><span>Authenticity</span><span>Responsiveness</span><span>Timeliness</span><span>Professionalism</span><span>Consistency</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec" id="industries" style="background: var(--surface)">
        <div class="wrap">
            <div class="sec-head r">
                <div class="eyebrow">Industries we serve</div>
                <h2>
                    Deep experience across demanding, safety-critical
                    sectors
                </h2>
                <p>
                    From upstream oil &amp; gas to rail infrastructure, our
                    buying teams understand the technical specification and
                    compliance pressure that comes with each vertical.
                </p>
            </div>
            <!-- <div class="ind-grid r-stagger tilt-group">
                <div class="ind-card tilt">
                    <span class="n">01</span>
                    <div class="icn">
                        <svg viewBox="0 0 24 24">
                            <path d="M6 21V9l6-5 6 5v12" />
                            <path d="M12 21v-7" />
                            <circle cx="12" cy="10" r="1.4" fill="currentColor" stroke="none" />
                        </svg>
                    </div>
                    <h3>Oil, Gas &amp; Petrochemicals</h3>
                    <p>
                        Spare parts &amp; OEM supply and sourcing for
                        upstream, midstream and downstream operators.
                    </p>
                </div>
                <div class="ind-card tilt">
                    <span class="n">02</span>
                    <div class="icn">
                        <svg viewBox="0 0 24 24">
                            <path d="M3 17l5-9 4 6 3-4 6 7" />
                            <path d="M3 20h18" />
                        </svg>
                    </div>
                    <h3>Mining &amp; Drilling</h3>
                    <p>
                        Rotating equipment and drilling consumables for
                        demanding site conditions.
                    </p>
                </div>
                <div class="ind-card tilt">
                    <span class="n">03</span>
                    <div class="icn">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="8" />
                            <path d="M4 12h16M12 4c3 3 3 13 0 16M12 4c-3 3-3 13 0 16" />
                        </svg>
                    </div>
                    <h3>Industrial &amp; Process Plants</h3>
                    <p>
                        Tailored materials sourced to client drawings,
                        samples and specification.
                    </p>
                </div>
                <div class="ind-card tilt">
                    <span class="n">04</span>
                    <div class="icn">
                        <svg viewBox="0 0 24 24">
                            <rect x="3" y="10" width="18" height="8" rx="1" />
                            <circle cx="7.5" cy="18" r="1.6" />
                            <circle cx="16.5" cy="18" r="1.6" />
                            <path d="M3 10l3-6h6l3 6" />
                        </svg>
                    </div>
                    <h3>Railways</h3>
                    <p>
                        Rolling stock and infrastructure components sourced
                        through pearlconrail.co.uk.
                    </p>
                </div>
                <div class="ind-card tilt">
                    <span class="n">05</span>
                    <div class="icn">
                        <svg viewBox="0 0 24 24">
                            <path d="M12 3c3 4 5 7.5 5 10.5A5 5 0 017 13.5C7 10.5 9 7 12 3z" />
                        </svg>
                    </div>
                    <h3>Water &amp; Waste Water</h3>
                    <p>
                        Pumps, valves and treatment equipment for municipal
                        and industrial plants.
                    </p>
                </div>
                <div class="ind-card tilt">
                    <span class="n">06</span>
                    <div class="icn">
                        <svg viewBox="0 0 24 24">
                            <path d="M9 3h6M10 3v5l-5 9a2 2 0 002 3h10a2 2 0 002-3l-5-9V3" />
                            <path d="M8 15h8" />
                        </svg>
                    </div>
                    <h3>Chemicals &amp; Lubricants</h3>
                    <p>
                        Vetted vendor relationships across specialty and
                        bulk chemical supply.
                    </p>
                </div>
                <div class="ind-card tilt">
                    <span class="n">07</span>
                    <div class="icn">
                        <svg viewBox="0 0 24 24">
                            <rect x="4" y="4" width="7" height="7" rx="1" />
                            <rect x="13" y="4" width="7" height="7" rx="1" />
                            <rect x="4" y="13" width="7" height="7" rx="1" />
                            <rect x="13" y="13" width="7" height="7" rx="1" />
                        </svg>
                    </div>
                    <h3>Manufacturing Plants</h3>
                    <p>
                        Consumables and capital equipment for continuous
                        production lines.
                    </p>
                </div>
                <div class="ind-card tilt">
                    <span class="n">08</span>
                    <div class="icn">
                        <svg viewBox="0 0 24 24">
                            <path d="M9 3v4M15 3v4M4 8h16l-1.5 12a2 2 0 01-2 1.8H7.5a2 2 0 01-2-1.8L4 8z" />
                        </svg>
                    </div>
                    <h3>Lab &amp; Medical Equipment</h3>
                    <p>
                        Instrumentation and controlled sourcing for UK
                        medical device supply.
                    </p>
                </div>
                <div class="ind-card tilt">
                    <span class="n">09</span>
                    <div class="icn">
                        <svg viewBox="0 0 24 24">
                            <circle cx="12" cy="12" r="9" />
                            <path d="M3 12h18M12 3a14 14 0 010 18M8 7a12 12 0 000 10M16 7a12 12 0 010 10" />
                        </svg>
                    </div>
                    <h3>Low Cost Country supply and sourcing</h3>
                    <p>
                        Bridging Asia Pacific and Indian manufacturing
                        capacity into global supply.
                    </p>
                </div>
            </div> -->
            <div class="ind-grid r-stagger tilt-group">
                <div class="ind-card tilt">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/category/OilGasPetro.jpg') }}" alt="Oil, Gas & Petrochemicals"
                            loading="lazy" />
                    </div>
                    <h3>Oil, Gas &amp; Petrochemicals</h3>
                    <p>Spare parts &amp; OEM supply and sourcing for upstream, midstream and downstream operators.</p>
                </div>

                <div class="ind-card tilt">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/category/miningand-drilling.jpg') }}" alt="Mining & Drilling"
                            loading="lazy" />
                    </div>
                    <h3>Mining &amp; Drilling</h3>
                    <p>Rotating equipment and drilling consumables for demanding site conditions.</p>
                </div>

                <div class="ind-card tilt">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/category/cement.jpg') }}" alt="Industrial & Process Plants"
                            loading="lazy" />
                    </div>
                    <h3>Industrial &amp; Process Plants</h3>
                    <p>Tailored materials sourced to client drawings, samples and specification.</p>
                </div>

                <div class="ind-card tilt">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/category/images (2).jpg') }}" alt="Railways" loading="lazy" />
                    </div>
                    <h3>Railways</h3>
                    <p>Rolling stock and infrastructure components sourced through pearlconrail.co.uk.</p>
                </div>

                <div class="ind-card tilt">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/category/irrigation.jpg') }}" alt="Water & Waste Water"
                            loading="lazy" />
                    </div>
                    <h3>Water &amp; Waste Water</h3>
                    <p>Pumps, valves and treatment equipment for municipal and industrial plants.</p>
                </div>

                <div class="ind-card tilt">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/category/chemicals.jpg') }}" alt="Chemicals & Lubricants"
                            loading="lazy" />
                    </div>
                    <h3>Chemicals &amp; Lubricants</h3>
                    <p>Vetted vendor relationships across specialty and bulk chemical supply.</p>
                </div>

                <div class="ind-card tilt">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/category/download.jpg') }}" alt="Manufacturing Plants"
                            loading="lazy" />
                    </div>
                    <h3>Manufacturing Plants</h3>
                    <p>Consumables and capital equipment for continuous production lines.</p>
                </div>

                <div class="ind-card tilt">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/category/medical.jpg') }}" alt="Lab & Medical Equipment"
                            loading="lazy" />
                    </div>
                    <h3>Lab &amp; Medical Equipment</h3>
                    <p>Instrumentation and controlled sourcing for UK medical device supply.</p>
                </div>

                <div class="ind-card tilt">
                    <div class="img-wrap">
                        <img src="{{ asset('assets/category/handshake.jpg') }}"
                            alt="Low Cost Country supply and sourcing" loading="lazy" />
                    </div>
                    <h3>Low Cost Country supply and sourcing</h3>
                    <p>Bridging Asia Pacific and Indian manufacturing capacity into global supply.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sec alt" id="why">
        <div class="wrap">
            <div class="sec-head r">
                <div class="eyebrow">Why pearlcon</div>
                <h2>
                    We Deliver. We Don’t Just Promise.
                </h2>
                <p>
                    Procurement has a direct impact on cost, operational continuity, efficiency and profitability.
                    Pearlcon understands the strategic importance of procurement within your organisation and combines
                    global sourcing reach, technical expertise and hands-on execution to deliver measurable value — not
                    just recommendations
                </p>
            </div>
            <div class="why-grid r">
                <div class="why-col problems">
                    <div class="tag">The challenge</div>
                    <h3>80% of transactions, 20% of spend</h3>
                    <ul class="why-list">
                        <li>
                            <span class="bullet"></span>Delays: suppliers
                            fail to deliver on time
                        </li>
                        <li>
                            <span class="bullet"></span>One-off needs that
                            are hard to source
                        </li>
                        <li>
                            <span class="bullet"></span>Supply failure
                            across critical materials
                        </li>
                        <li>
                            <span class="bullet"></span>Too many suppliers
                            to manage individually
                        </li>
                        <li>
                            <span class="bullet"></span>Resources wasted
                            expediting low-value POs
                        </li>
                        <li>
                            <span class="bullet"></span>Complex, capital
                            equipment on short timeframes
                        </li>
                    </ul>
                    <div class="why-stat">
                        In a typical organisation, <b>80%</b> of procurement
                        transactions constitute less than <b>20%</b> of
                        spend — tying up valuable resources for negligible
                        return.
                    </div>
                </div>
                <div class="why-col solutions">
                    <div class="tag">The Pearlcon solution</div>
                    <h3>A dedicated, accountable team</h3>
                    <ul class="why-list">
                        <li>
                            <span class="bullet"></span>Purchasing gains
                            across operational spend
                        </li>
                        <li>
                            <span class="bullet"></span>A dedicated account
                            management team
                        </li>
                        <li>
                            <span class="bullet"></span>IT infrastructure
                            for real-time transaction data
                        </li>
                        <li>
                            <span class="bullet"></span>Qualified engineers
                            &amp; supply and sourcing specialists
                        </li>
                        <li>
                            <span class="bullet"></span>Quality control
                            engineers who inspect factories
                        </li>
                        <li>
                            <span class="bullet"></span>Dedicated shipping
                            &amp; logistics specialists
                        </li>
                    </ul>
                    <div class="why-stat">
                        We specialise in back-office procurement processes —
                        guaranteeing to save your <b>resources</b>,
                        <b>time</b> and <b>cost</b>.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec hub-section" id="advantage">
        <div class="wrap">
            <div class="hub-wrap">
                <div class="hub-copy r">
                    <div class="eyebrow">The pearlcon advantage</div>
                    <h2>
                        One Purchase Order. One Invoice. One Point of Contact.
                    </h2>
                    <p>
                        Instead of managing multiple manufacturers and suppliers individually, our clients can route
                        their procurement requirements through one trusted partner. Pearlcon manages the complexity of
                        the global supplier network — you focus on running your plant.
                    </p>
                    <ul class="hub-list">
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            Global sourcing reach without the complexity of managing multiple suppliers
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            Single-point accountability from enquiry through delivery and after-sales support
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            Continuous KPI reporting, including OTIF (On-Time, In-Full) performance
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            From everyday MRO consumables to critical spare parts and major capital equipment
                        </li>
                        <li>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 6L9 17l-5-5" />
                            </svg>
                            One procurement partner across multiple categories, manufacturers and markets
                        </li>
                    </ul>
                </div>
                <div class="hub-diagram r" id="hubDiagram">
                    <div class="labels">
                        <span class="before">Without Pearlcon</span><span class="after">With Pearlcon</span>
                    </div>
                    <svg viewBox="0 0 560 300" style="width: 100%; height: auto">
                        <g id="beforeGroup">
                            <circle cx="90" cy="150" r="20" fill="#F4F6F8" stroke="#C7CDD3" stroke-width="1.4" />
                            <text x="90" y="154" text-anchor="middle" font-size="10" fill="#5B6672">
                                Client
                            </text>
                            <g stroke="#D7BBA6" stroke-width="1.3" fill="none" opacity="0.9">
                                <line x1="108" y1="140" x2="185" y2="55" />
                                <line x1="108" y1="150" x2="185" y2="110" />
                                <line x1="108" y1="160" x2="185" y2="190" />
                                <line x1="108" y1="168" x2="185" y2="245" />
                            </g>
                            <g class="hub-node">
                                <circle cx="196" cy="52" r="15" fill="#fff" stroke="#C7CDD3" stroke-width="1.2" />
                                <text x="196" y="56" text-anchor="middle" font-size="8">
                                    Mfr A
                                </text>
                                <circle cx="196" cy="112" r="15" fill="#fff" stroke="#C7CDD3" stroke-width="1.2" />
                                <text x="196" y="116" text-anchor="middle" font-size="8">
                                    Mfr B
                                </text>
                                <circle cx="196" cy="192" r="15" fill="#fff" stroke="#C7CDD3" stroke-width="1.2" />
                                <text x="196" y="196" text-anchor="middle" font-size="8">
                                    Mfr C
                                </text>
                                <circle cx="196" cy="248" r="15" fill="#fff" stroke="#C7CDD3" stroke-width="1.2" />
                                <text x="196" y="252" text-anchor="middle" font-size="8">
                                    Mfr D
                                </text>
                            </g>
                        </g>
                        <line x1="272" y1="20" x2="272" y2="280" stroke="#E3E7EA" stroke-width="1" />
                        <g id="afterGroup">
                            <g stroke="#E9C39A" stroke-width="1.6" fill="none">
                                <line class="pulse-line" x1="358" y1="70" x2="420" y2="140" />
                                <line class="pulse-line" x1="358" y1="120" x2="420" y2="145" />
                                <line class="pulse-line" x1="358" y1="180" x2="420" y2="155" />
                                <line class="pulse-line" x1="358" y1="230" x2="420" y2="160" />
                            </g>
                            <circle cx="352" cy="70" r="15" fill="#fff" stroke="#E9C39A" stroke-width="1.2" />
                            <text x="352" y="74" text-anchor="middle" font-size="8" fill="#5B6672">
                                Mfr A
                            </text>
                            <circle cx="352" cy="120" r="15" fill="#fff" stroke="#E9C39A" stroke-width="1.2" />
                            <text x="352" y="124" text-anchor="middle" font-size="8" fill="#5B6672">
                                Mfr B
                            </text>
                            <circle cx="352" cy="180" r="15" fill="#fff" stroke="#E9C39A" stroke-width="1.2" />
                            <text x="352" y="184" text-anchor="middle" font-size="8" fill="#5B6672">
                                Mfr C
                            </text>
                            <circle cx="352" cy="230" r="15" fill="#fff" stroke="#E9C39A" stroke-width="1.2" />
                            <text x="352" y="234" text-anchor="middle" font-size="8" fill="#5B6672">
                                Mfr D
                            </text>
                            <circle cx="430" cy="150" r="24" fill="#E98423" />
                            <text x="430" y="154" text-anchor="middle" font-size="9" font-weight="700" fill="#fff">
                                PEARLCON
                            </text>
                            <line class="pulse-line" x1="454" y1="150" x2="500" y2="150" stroke="#E98423"
                                stroke-width="1.8" />
                            <circle cx="512" cy="150" r="18" fill="#101F35" />
                            <text x="512" y="154" text-anchor="middle" font-size="8.5" fill="#fff">
                                Client
                            </text>
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <section class="sec on-dark" id="process">
        <div class="wrap">
            <div class="sec-head r">
                <div class="eyebrow">How we work</div>
                <h2>From RFQ to Delivery — One Process, Full Visibility</h2>
                <p>
                    We manage every order end-to-end, coordinating sourcing, supplier communication, technical
                    requirements, documentation, inspection, logistics and delivery. With clear ownership and continuous
                    tracking throughout the process, our clients have one point of contact and complete visibility from
                    enquiry to delivery
                </p>
            </div>
            <div class="process-strip r">
                <div class="process-track" id="processTrack">
                    <div class="process-line"></div>
                    <div class="process-line-fill" id="processFill"></div>
                    <div class="process-step">
                        <div class="num">01</div>
                        <h3>Enquiry &amp; RFQ</h3>
                        <p>
                            Client specification, drawings and samples
                            reviewed by our engineers.
                        </p>
                    </div>
                    <div class="process-step">
                        <div class="num">02</div>
                        <h3>supply and sourcing &amp; Quotation</h3>
                        <p>
                            Matched against our 5,000+ supplier network for
                            the right OEM fit.
                        </p>
                    </div>
                    <div class="process-step">
                        <div class="num">03</div>
                        <h3>Purchase Order</h3>
                        <p>
                            A single PO and single invoice, however many
                            suppliers are involved.
                        </p>
                    </div>
                    <div class="process-step">
                        <div class="num">04</div>
                        <h3>Quality Control</h3>
                        <p>
                            Factory &amp; product inspection by our quality
                            control engineers.
                        </p>
                    </div>
                    <div class="process-step">
                        <div class="num">05</div>
                        <h3>Shipping &amp; Logistics</h3>
                        <p>
                            Coordination with freight forwarders, clearance
                            and documentation.
                        </p>
                    </div>
                    <div class="process-step">
                        <div class="num">06</div>
                        <h3>On-Time Delivery</h3>
                        <p>
                            Tracked to your site, chased for on-time,
                            in-full completion.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sec on-dark" id="products" style="padding-top: 0">
        <div class="wrap">
            <div class="sec-head r">
                <div class="eyebrow">Key products portfolio</div>
                <h2>Everyday consumables to capital equipment</h2>
                <p>
                    We supply spare parts for compressors, engines,
                    exchangers, pumps, drilling equipment, dryers and other
                    process &amp; rotating equipment.
                </p>
            </div>
            <div class="prod-grid r-stagger">
                <div class="prod-card">
                    <div class="icn">
                        <div class="img-wrap">
                            <img src="{{ asset('assets/sub/images.jpg') }}" alt="Oil, Gas & Petrochemicals"
                                loading="lazy" />
                        </div>
                    </div>
                    <h3>Valves &amp; Actuators</h3>
                    <div class="prod-tags">
                        <span>Control valves</span><span>Actuators</span><span>Switches</span><span>Couplings</span>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="icn">
                        <div class="img-wrap">
                            <img src="{{ asset('assets/sub/images1.jpg') }}" alt="Oil, Gas & Petrochemicals"
                                loading="lazy" />
                        </div>
                    </div>
                    <h3>Pumps &amp; Seals</h3>
                    <div class="prod-tags">
                        <span>Pumps</span><span>Seals</span><span>Bearings</span><span>Bushings</span>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="icn">
                        <div class="img-wrap">
                            <img src="{{ asset('assets/sub/images2.jpg') }}" alt="Oil, Gas & Petrochemicals"
                                loading="lazy" />
                        </div>
                    </div>
                    <h3>Instrumentation &amp; Metering</h3>
                    <div class="prod-tags">
                        <span>Analyzers</span><span>Gauges</span><span>Meters</span><span>Thermocouples</span>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="icn">
                        <div class="img-wrap">
                            <img src="{{ asset('assets/sub/images3.jpg') }}" alt="Oil, Gas & Petrochemicals"
                                loading="lazy" />
                        </div>
                    </div>
                    <h3>Piping, Flanges &amp; Fittings</h3>
                    <div class="prod-tags">
                        <span>Pipes</span><span>Tubing</span><span>Gaskets</span><span>Fittings</span>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="icn">
                        <div class="img-wrap">
                            <img src="{{ asset('assets/sub/images4.jpg') }}" alt="Oil, Gas & Petrochemicals"
                                loading="lazy" />
                        </div>
                    </div>
                    <h3>Wellhead &amp; Fire Safety</h3>
                    <div class="prod-tags">
                        <span>Wellhead control panels</span><span>Accessories</span><span>Fire fighting items</span>
                    </div>
                </div>
                <div class="prod-card">
                    <div class="icn">
                        <div class="img-wrap">
                            <img src="{{ asset('assets/sub/images5.jpg') }}" alt="Oil, Gas & Petrochemicals"
                                loading="lazy" />
                        </div>
                    </div>
                    <h3>Electrical Equipment</h3>
                    <div class="prod-tags">
                        <span>Detectors</span><span>Strainers</span><span>Electrical accessories</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="sec on-dark" id="global">
        <div class="wrap">
            <div class="globe-wrap">
                <div class="r">
                    <div class="eyebrow">
                        Global network &amp; operations
                    </div>
                    <h2 style="
                                font-size: clamp(26px, 3vw, 36px);
                                margin-top: 16px;
                                font-weight: 600;
                                line-height: 1.2;
                            ">
                        Global Reach. Local Buying Expertise.
                    </h2>
                    <p style="margin-top: 16px; font-size: 15.5px">

                        With buying offices across the UK, USA and China, supported by an extensive international
                        supplier network, Pearlcon can source across Europe, the UK, USA, China, Japan, Asia and
                        beyond.</br>
                        We combine local market knowledge, established supplier relationships and global procurement
                        reach to identify the right manufacturers, products and technical solutions for our clients —
                        wherever they are needed.
                    </p>
                    <div class="globe-stats">
                        <div class="g">
                            <b data-count="5000" data-suffix="+">0</b><span>Established supplier base worldwide</span>
                        </div>
                        <div class="g">
                            <b data-count="3">0</b><span>International buying offices</span>
                        </div>
                        <div class="g">
                            <b data-count="50" data-suffix="+">0</b><span>Plants across the Middle East &amp;
                                beyond</span>
                        </div>
                        <div class="g">
                            <b data-count="2009">0</b><span>Serving industrial clients since</span>
                        </div>
                    </div>
                </div>
                <!-- <div class="r">
                    <svg class="globe-svg" viewBox="0 0 460 380">
                        <g stroke="rgba(255,255,255,.14)" fill="none">
                            <ellipse cx="230" cy="190" rx="170" ry="170" />
                            <ellipse cx="230" cy="190" rx="170" ry="60" />
                            <ellipse cx="230" cy="190" rx="70" ry="170" />
                            <line x1="60" y1="190" x2="400" y2="190" />
                            <line x1="230" y1="20" x2="230" y2="360" />
                        </g>
                        <g>
                            <circle cx="205" cy="120" r="5" fill="#E98423" />
                            <circle class="hub-pulse" cx="205" cy="120" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" />
                            <text x="215" y="116" font-size="11" fill="#DCE4EE" font-family="IBM Plex Mono">
                                UK
                            </text>
                        </g>
                        <g>
                            <circle cx="110" cy="160" r="5" fill="#E98423" />
                            <circle class="hub-pulse" cx="110" cy="160" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" style="animation-delay: 0.8s" />
                            <text x="70" y="150" font-size="11" fill="#DCE4EE" font-family="IBM Plex Mono">
                                US
                            </text>
                        </g>
                        <g>
                            <circle cx="330" cy="150" r="5" fill="#E98423" />
                            <circle class="hub-pulse" cx="330" cy="150" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" style="animation-delay: 1.6s" />
                            <text x="340" y="146" font-size="11" fill="#DCE4EE" font-family="IBM Plex Mono">
                                CN
                            </text>
                        </g>
                        <circle cx="255" cy="205" r="4" fill="#FFA94D" opacity=".85" />
                        <text x="263" y="210" font-size="9.5" fill="#8B9AAE" font-family="IBM Plex Mono">
                            Middle East
                        </text>
                        <circle cx="345" cy="220" r="4" fill="#FFA94D" opacity=".85" />
                        <text x="353" y="224" font-size="9.5" fill="#8B9AAE" font-family="IBM Plex Mono">
                            Asia Pacific
                        </text>
                        <path d="M205 120 Q230 165 255 205" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <path d="M330 150 Q340 185 345 220" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <path d="M110 160 Q170 185 255 205" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                    </svg>
                </div> -->
                <div class="r">
                    <svg class="globe-svg" viewBox="0 0 460 380">
                        <g stroke="rgba(255,255,255,.14)" fill="none">
                            <ellipse cx="230" cy="190" rx="170" ry="170" />
                            <ellipse cx="230" cy="190" rx="170" ry="60" />
                            <ellipse cx="230" cy="190" rx="70" ry="170" />
                            <line x1="60" y1="190" x2="400" y2="190" />
                            <line x1="230" y1="20" x2="230" y2="360" />
                        </g>
                        <g>
                            <circle cx="205" cy="120" r="5" fill="#E98423" />
                            <circle class="hub-pulse" cx="205" cy="120" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" />
                            <text x="215" y="116" font-size="11" fill="#DCE4EE" font-family="IBM Plex Mono">
                                UK
                            </text>
                        </g>
                        <g>
                            <circle cx="110" cy="160" r="5" fill="#E98423" />
                            <circle class="hub-pulse" cx="110" cy="160" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" style="animation-delay: 0.8s" />
                            <text x="70" y="150" font-size="11" fill="#DCE4EE" font-family="IBM Plex Mono">
                                US
                            </text>
                        </g>
                        <g>
                            <circle cx="330" cy="150" r="5" fill="#E98423" />
                            <circle class="hub-pulse" cx="330" cy="150" r="5" fill="none" stroke="#E98423"
                                stroke-width="2" style="animation-delay: 1.6s" />
                            <text x="340" y="146" font-size="11" fill="#DCE4EE" font-family="IBM Plex Mono">
                                CN
                            </text>
                        </g>
                        <circle cx="255" cy="205" r="4" fill="#FFA94D" opacity=".85" />
                        <text x="263" y="210" font-size="9.5" fill="#8B9AAE" font-family="IBM Plex Mono">
                            Middle East
                        </text>
                        <circle cx="345" cy="220" r="4" fill="#FFA94D" opacity=".85" />
                        <text x="353" y="224" font-size="9.5" fill="#8B9AAE" font-family="IBM Plex Mono">
                            Asia Pacific
                        </text>
                        <circle cx="375" cy="110" r="4" fill="#FFA94D" opacity=".85" />
                        <text x="383" y="106" font-size="9.5" fill="#8B9AAE" font-family="IBM Plex Mono">
                            Japan
                        </text>
                        <circle cx="165" cy="255" r="4" fill="#FFA94D" opacity=".85" />
                        <text x="173" y="259" font-size="9.5" fill="#8B9AAE" font-family="IBM Plex Mono">
                            Asia
                        </text>
                        <path d="M205 120 Q230 165 255 205" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <path d="M330 150 Q340 185 345 220" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <path d="M110 160 Q170 185 255 205" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <path d="M330 150 Q355 130 375 110" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                        <path d="M110 160 Q140 210 165 255" stroke="#E98423" stroke-width="1.2" fill="none"
                            stroke-dasharray="4 5" opacity=".7" />
                    </svg>
                </div>
            </div>
        </div>
    </section>



    <section class="sec" id="contact">
        <div class="cta-sec r">
            <div>
                <h2>Need to Source, Supply or Ship? Let Pearlcon Handle It.</h2>
                <p>
                    Tell us what you need to buy, source, build or ship. We’ll manage the complexity, coordinate the
                    right suppliers and provide a clear quotation with one dedicated point of contact from enquiry
                    through to delivery.
                </p>
            </div>
            <div class="cta-actions">
                <a href="/contact" class="btn btn-primary">Contact US
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
                <a href="tel:+441234440530" class="btn btn-ghost-dark">Call +44 1234 440530</a>
                <a href="/registration-request" class="btn btn-primary">Request a Quote
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14M13 6l6 6-6 6" />
                    </svg></a>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script>
        (function () {
            var reduceMotion = window.matchMedia(
                "(prefers-reduced-motion: reduce)",
            ).matches;

            /* ---- hero video slider ---- */
            (function () {
                var slider = document.getElementById("heroVideoSlider");
                if (!slider) return;
                var slides = slider.querySelectorAll(".hvs-slide");
                var dots = slider.querySelectorAll(".hvs-dot");
                var prevBtn = document.getElementById("hvsPrev");
                var nextBtn = document.getElementById("hvsNext");
                var counter = document.getElementById("hvsCounter");
                var slidesContainer = document.getElementById("hvsSlides");
                var current = 0;
                var total = slides.length;
                var autoplayTimer = null;
                var autoplayDelay = 6000;

                function goTo(index) {
                    if (index < 0) index = total - 1;
                    if (index >= total) index = 0;
                    current = index;
                    slidesContainer.style.transform =
                        "translateX(" + -current * 100 + "%)";
                    slides.forEach(function (s, i) {
                        s.classList.toggle("active", i === current);
                    });
                    dots.forEach(function (d, i) {
                        d.classList.toggle("active", i === current);
                    });
                    if (counter)
                        counter.textContent =
                            String(current + 1).padStart(2, "0") +
                            " / " +
                            String(total).padStart(2, "0");
                    // Pause all videos, play current
                    slides.forEach(function (s) {
                        var v = s.querySelector("video");
                        if (v) {
                            v.pause();
                            v.currentTime = 0;
                        }
                    });
                    var curVideo = slides[current].querySelector("video");
                    if (curVideo) {
                        curVideo.play().catch(function () { });
                    }
                }

                function next() {
                    goTo(current + 1);
                }
                function prev() {
                    goTo(current - 1);
                }
                function startAutoplay() {
                    stopAutoplay();
                    autoplayTimer = setInterval(next, autoplayDelay);
                }
                function stopAutoplay() {
                    if (autoplayTimer) {
                        clearInterval(autoplayTimer);
                        autoplayTimer = null;
                    }
                }

                if (prevBtn)
                    prevBtn.addEventListener("click", function () {
                        prev();
                        stopAutoplay();
                        startAutoplay();
                    });
                if (nextBtn)
                    nextBtn.addEventListener("click", function () {
                        next();
                        stopAutoplay();
                        startAutoplay();
                    });
                dots.forEach(function (dot, i) {
                    dot.addEventListener("click", function () {
                        goTo(i);
                        stopAutoplay();
                        startAutoplay();
                    });
                });

                // Touch/swipe support
                var startX = 0,
                    isDragging = false;
                slidesContainer.addEventListener(
                    "touchstart",
                    function (e) {
                        startX = e.touches[0].clientX;
                        isDragging = true;
                        stopAutoplay();
                    },
                    { passive: true },
                );
                slidesContainer.addEventListener(
                    "touchend",
                    function (e) {
                        if (!isDragging) return;
                        var diff = startX - e.changedTouches[0].clientX;
                        if (Math.abs(diff) > 50) {
                            diff > 0 ? next() : prev();
                        }
                        isDragging = false;
                        startAutoplay();
                    },
                    { passive: true },
                );

                // Keyboard navigation
                slider.addEventListener("keydown", function (e) {
                    if (e.key === "ArrowLeft") {
                        prev();
                        stopAutoplay();
                        startAutoplay();
                    }
                    if (e.key === "ArrowRight") {
                        next();
                        stopAutoplay();
                        startAutoplay();
                    }
                });

                // Play button opens lightbox
                var videoModal = document.getElementById("videoModal");
                var videoModalClose =
                    document.getElementById("videoModalClose");
                var pearlconVideo =
                    document.getElementById("pearlconVideo");
                var videoFallback =
                    document.getElementById("videoFallback");

                function openLightbox(src) {
                    if (!videoModal) return;
                    videoModal.classList.add("open");
                    videoModal.setAttribute("aria-hidden", "false");
                    document.body.style.overflow = "hidden";

                    if (pearlconVideo) {
                        // Pehle fallback hide karo
                        if (videoFallback) videoFallback.classList.remove("show");
                        pearlconVideo.style.display = "block";

                        var source = pearlconVideo.querySelector("source");
                        if (source && src) {
                            source.src = src; // slider wali video ka src use karo
                        }
                        pearlconVideo.load(); // reload karo naye src ke saath

                        // Play karo - agar fail hua toh fallback dikhao
                        pearlconVideo.play().catch(function () {
                            if (videoFallback) videoFallback.classList.add("show");
                            pearlconVideo.style.display = "none";
                        });
                    }
                    if (videoModalClose) videoModalClose.focus();
                }
                function closeLightbox() {
                    if (!videoModal) return;
                    videoModal.classList.remove("open");
                    videoModal.setAttribute("aria-hidden", "true");
                    document.body.style.overflow = "";
                    if (pearlconVideo) {
                        pearlconVideo.pause();
                    }
                }

                slides.forEach(function (slide) {
                    var playBtn = slide.querySelector(".hvs-play-btn");
                    var video = slide.querySelector("video");
                    if (playBtn) {
                        // NAYA (sahi)
                        playBtn.addEventListener("click", function () {
                            var src = video ? video.querySelector("source") : null;
                            openLightbox(src ? src.src : null);
                            stopAutoplay(); // slider band karo jab modal khule
                        });
                    }
                });

                if (videoModalClose) {
                    videoModalClose.addEventListener(
                        "click",
                        closeLightbox,
                    );
                }
                if (videoModal) {
                    videoModal.addEventListener("click", function (e) {
                        if (e.target === videoModal) closeLightbox();
                    });
                }
                document.addEventListener("keydown", function (e) {
                    if (
                        e.key === "Escape" &&
                        videoModal &&
                        videoModal.classList.contains("open")
                    ) {
                        closeLightbox();
                    }
                });
                if (pearlconVideo) {
                    pearlconVideo.addEventListener(
                        "error",
                        function () {
                            if (videoFallback)
                                videoFallback.classList.add("show");
                            pearlconVideo.style.display = "none";
                        },
                        true,
                    );
                }

                // Start
                goTo(0);
                startAutoplay();

                // Pause when not visible
                var sio = new IntersectionObserver(
                    function (entries) {
                        entries.forEach(function (en) {
                            en.isIntersecting
                                ? startAutoplay()
                                : stopAutoplay();
                        });
                    },
                    { threshold: 0.3 },
                );
                sio.observe(slider);
            })();



            /* ---- mega menu: click/keyboard toggle (in addition to CSS hover) ---- */
            document.querySelectorAll("li.has-mega").forEach(function (li) {
                var trigger = li.querySelector(".nav-trigger");
                trigger.addEventListener("click", function (e) {
                    e.stopPropagation();
                    var isOpen = li.classList.contains("open");
                    document
                        .querySelectorAll("li.has-mega.open")
                        .forEach(function (o) {
                            o.classList.remove("open");
                            o.querySelector(".nav-trigger").setAttribute(
                                "aria-expanded",
                                "false",
                            );
                        });
                    if (!isOpen) {
                        li.classList.add("open");
                        trigger.setAttribute("aria-expanded", "true");
                    }
                });
            });
            document.addEventListener("click", function () {
                document
                    .querySelectorAll("li.has-mega.open")
                    .forEach(function (o) {
                        o.classList.remove("open");
                        o.querySelector(".nav-trigger").setAttribute(
                            "aria-expanded",
                            "false",
                        );
                    });
            });
            document.addEventListener("keydown", function (e) {
                if (e.key === "Escape") {
                    document
                        .querySelectorAll("li.has-mega.open")
                        .forEach(function (o) {
                            o.classList.remove("open");
                        });
                }
            });


            /* ---- scroll reveal ---- */
            var revealEls = document.querySelectorAll(".r, .r-stagger");
            if ("IntersectionObserver" in window) {
                var io = new IntersectionObserver(
                    function (entries) {
                        entries.forEach(function (en) {
                            if (en.isIntersecting) {
                                en.target.classList.add("in");
                                io.unobserve(en.target);
                            }
                        });
                    },
                    { threshold: 0.15, rootMargin: "0px 0px -60px 0px" },
                );
                revealEls.forEach(function (el) {
                    io.observe(el);
                });
            } else {
                revealEls.forEach(function (el) {
                    el.classList.add("in");
                });
            }

            /* ---- counters ---- */
            function animateCount(el) {
                var target = parseInt(el.getAttribute("data-count"), 10);
                var suffix = el.getAttribute("data-suffix") || "";
                if (reduceMotion) {
                    el.textContent = target.toLocaleString() + suffix;
                    return;
                }
                var duration = 1400,
                    startTime = null;
                function step(ts) {
                    if (!startTime) startTime = ts;
                    var progress = Math.min((ts - startTime) / duration, 1);
                    var eased = 1 - Math.pow(1 - progress, 3);
                    var val = Math.floor(eased * target);
                    el.textContent = val.toLocaleString() + suffix;
                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        el.textContent = target.toLocaleString() + suffix;
                    }
                }
                requestAnimationFrame(step);
            }
            var counters = document.querySelectorAll("[data-count]");
            if ("IntersectionObserver" in window) {
                var cio = new IntersectionObserver(
                    function (entries) {
                        entries.forEach(function (en) {
                            if (en.isIntersecting) {
                                animateCount(en.target);
                                cio.unobserve(en.target);
                            }
                        });
                    },
                    { threshold: 0.6 },
                );
                counters.forEach(function (c) {
                    cio.observe(c);
                });
            }

            /* ---- process fill + active step ---- */
            var track = document.getElementById("processTrack");
            var fill = document.getElementById("processFill");
            if (track) {
                var steps = track.querySelectorAll(".process-step");
                var pio = new IntersectionObserver(
                    function (entries) {
                        entries.forEach(function (en) {
                            if (en.isIntersecting) {
                                fill.style.width = "100%";
                                steps.forEach(function (s, i) {
                                    setTimeout(function () {
                                        s.classList.add("active");
                                    }, i * 220);
                                });
                                pio.unobserve(en.target);
                            }
                        });
                    },
                    { threshold: 0.35 },
                );
                pio.observe(track);
            }

            /* ---- brand marquee: duplicate for seamless loop ---- */
            var track2 = document.getElementById("brandTrack");
            if (track2) {
                track2.innerHTML += track2.innerHTML;
            }

            /* ---- tilt effect for cards ---- */
            if (
                !reduceMotion &&
                window.matchMedia("(hover:hover)").matches
            ) {
                document.querySelectorAll(".tilt").forEach(function (card) {
                    card.addEventListener("mousemove", function (e) {
                        var r = card.getBoundingClientRect();
                        var px = (e.clientX - r.left) / r.width - 0.5;
                        var py = (e.clientY - r.top) / r.height - 0.5;
                        card.style.transform =
                            "translateY(-6px) rotateX(" +
                            py * -7 +
                            "deg) rotateY(" +
                            px * 9 +
                            "deg)";
                    });
                    card.addEventListener("mouseleave", function () {
                        card.style.transform = "";
                    });
                });
            }

            /* ---- hero graphic mouse parallax ---- */
            var hg = document.getElementById("heroGraphic");
            if (
                hg &&
                !reduceMotion &&
                window.matchMedia("(hover:hover)").matches
            ) {
                var layers = hg.querySelectorAll("[data-depth]");
                var curX = 0,
                    curY = 0,
                    targetX = 0,
                    targetY = 0;
                hg.addEventListener("mousemove", function (e) {
                    var r = hg.getBoundingClientRect();
                    targetX = (e.clientX - r.left) / r.width - 0.5;
                    targetY = (e.clientY - r.top) / r.height - 0.5;
                });
                hg.addEventListener("mouseleave", function () {
                    targetX = 0;
                    targetY = 0;
                });
                function raf() {
                    curX += (targetX - curX) * 0.08;
                    curY += (targetY - curY) * 0.08;
                    layers.forEach(function (l) {
                        var depth =
                            parseFloat(l.getAttribute("data-depth")) || 10;
                        l.style.transform =
                            (l.classList.contains("hub-core")
                                ? "translate(-50%,-50%) "
                                : "") +
                            "translate(" +
                            curX * depth +
                            "px," +
                            curY * depth +
                            "px)";
                    });
                    requestAnimationFrame(raf);
                }
                raf();
            }

            /* ---- hero network canvas ---- */
            var canvas = document.getElementById("netCanvas");
            if (canvas && !reduceMotion) {
                var ctx = canvas.getContext("2d");
                var hero = canvas.closest(".hero");
                var W,
                    H,
                    nodes = [],
                    hubs = [],
                    flows = [];
                var DPR = Math.min(window.devicePixelRatio || 1, 2);

                function resize() {
                    W = hero.offsetWidth;
                    H = hero.offsetHeight;
                    canvas.width = W * DPR;
                    canvas.height = H * DPR;
                    canvas.style.width = W + "px";
                    canvas.style.height = H + "px";
                    ctx.setTransform(DPR, 0, 0, DPR, 0, 0);
                    buildNodes();
                }

                function buildNodes() {
                    nodes = [];
                    var count = Math.max(28, Math.floor((W * H) / 26000));
                    for (var i = 0; i < count; i++) {
                        nodes.push({
                            x: Math.random() * W,
                            y: Math.random() * H,
                            vx: (Math.random() - 0.5) * 0.18,
                            vy: (Math.random() - 0.5) * 0.18,
                            r: 1 + Math.random() * 1.6,
                        });
                    }
                    hubs = [
                        { x: W * 0.18, y: H * 0.28, r: 4.5 },
                        { x: W * 0.52, y: H * 0.16, r: 4.5 },
                        { x: W * 0.85, y: H * 0.5, r: 4.5 },
                    ];
                    flows = [];
                }

                function maybeSpawnFlow() {
                    if (Math.random() < 0.018 && nodes.length) {
                        var n =
                            nodes[Math.floor(Math.random() * nodes.length)];
                        var h =
                            hubs[Math.floor(Math.random() * hubs.length)];
                        flows.push({
                            x0: n.x,
                            y0: n.y,
                            x1: h.x,
                            y1: h.y,
                            t: 0,
                        });
                    }
                }

                function draw() {
                    ctx.clearRect(0, 0, W, H);
                    ctx.lineWidth = 1;
                    for (var i = 0; i < nodes.length; i++) {
                        for (var j = i + 1; j < nodes.length; j++) {
                            var a = nodes[i],
                                b = nodes[j];
                            var dx = a.x - b.x,
                                dy = a.y - b.y;
                            var d = Math.sqrt(dx * dx + dy * dy);
                            if (d < 110) {
                                ctx.strokeStyle =
                                    "rgba(139,154,174," +
                                    0.14 * (1 - d / 110) +
                                    ")";
                                ctx.beginPath();
                                ctx.moveTo(a.x, a.y);
                                ctx.lineTo(b.x, b.y);
                                ctx.stroke();
                            }
                        }
                    }
                    hubs.forEach(function (h) {
                        nodes.forEach(function (n) {
                            var dx = n.x - h.x,
                                dy = n.y - h.y;
                            var d = Math.sqrt(dx * dx + dy * dy);
                            if (d < 190) {
                                ctx.strokeStyle =
                                    "rgba(233,132,35," +
                                    0.09 * (1 - d / 190) +
                                    ")";
                                ctx.beginPath();
                                ctx.moveTo(n.x, n.y);
                                ctx.lineTo(h.x, h.y);
                                ctx.stroke();
                            }
                        });
                    });
                    nodes.forEach(function (n) {
                        n.x += n.vx;
                        n.y += n.vy;
                        if (n.x < 0 || n.x > W) n.vx *= -1;
                        if (n.y < 0 || n.y > H) n.vy *= -1;
                        ctx.beginPath();
                        ctx.fillStyle = "rgba(220,228,238,0.45)";
                        ctx.arc(n.x, n.y, n.r, 0, Math.PI * 2);
                        ctx.fill();
                    });
                    var pulse = 0.5 + 0.5 * Math.sin(Date.now() / 700);
                    hubs.forEach(function (h) {
                        ctx.beginPath();
                        ctx.fillStyle = "rgba(233,132,35,0.9)";
                        ctx.arc(h.x, h.y, h.r, 0, Math.PI * 2);
                        ctx.fill();
                        ctx.beginPath();
                        ctx.strokeStyle =
                            "rgba(233,132,35," + 0.5 * (1 - pulse) + ")";
                        ctx.lineWidth = 1.4;
                        ctx.arc(h.x, h.y, h.r + pulse * 10, 0, Math.PI * 2);
                        ctx.stroke();
                    });
                    maybeSpawnFlow();
                    flows = flows.filter(function (f) {
                        return f.t < 1;
                    });
                    flows.forEach(function (f) {
                        f.t += 0.012;
                        var x = f.x0 + (f.x1 - f.x0) * f.t;
                        var y = f.y0 + (f.y1 - f.y0) * f.t;
                        ctx.beginPath();
                        ctx.fillStyle = "rgba(255,169,77,0.9)";
                        ctx.arc(x, y, 1.8, 0, Math.PI * 2);
                        ctx.fill();
                    });
                    requestAnimationFrame(draw);
                }

                window.addEventListener("resize", resize, {
                    passive: true,
                });
                resize();
                requestAnimationFrame(draw);
            }
        })();
    </script>
    @include('partials.chatbot')
</body>

</html>