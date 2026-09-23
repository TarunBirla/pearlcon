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
        <link rel="canonical" href="https://pearlcon.com/our-products" />
<meta property="og:title" content="Our Products — Pearlcon Business Services" />
<meta property="og:url" content="https://pearlcon.com/our-products" />
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
               .pi-group h3, .pi-group h5,
        .pi-group .pi-group-title {
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-mute);
            font-weight: 600;
            padding: 4px 10px 12px;
        }

        .pi-tabs {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .pi-tab {
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: 11px 12px;
            border-radius: 99px;
            font-size: 13.8px;
            font-weight: 500;
            color: var(--text);
            cursor: pointer;
            transition: 0.25s;
            border-left: 3px solid transparent;
        }

        .pi-tab:hover {
            background: var(--surface);
        }

        .pi-tab.active {
            background: #fbefe0;
            color: #8a4b10;
            border-left-color: var(--amber);
            font-weight: 600;
        }

        .pi-downloads {
            background: var(--ink-2);
            border-radius: var(--radius);
            padding: 18px;
        }

        .pi-downloads h3, .pi-downloads h5,
        .pi-downloads .pi-group-title {
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--amber-2);
            font-weight: 600;
            padding: 4px 4px 12px;
        }
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
            overflow: visible;
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
            font-size: clamp(36px, 5vw, 62px);
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
            aspect-ratio: 16/9;
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

        .video-fallback h4 {
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
            margin-top: 64px;
        }

        .trust .wrap {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
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
            padding: 118px 0;
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
            padding: 34px 30px;
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
        }

        .hub-diagram .labels .after {
            color: var(--amber);
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
            padding: 30px 28px;
            transition:
                border-color 0.4s,
                box-shadow 0.4s;
        }

        .prod-card:hover {
            border-color: rgba(233, 132, 35, 0.4);
            box-shadow: 0 30px 60px -30px rgba(0, 0, 0, 0.6);
        }

        .prod-card .icn {
            width: 34px;
            height: 34px;
            margin-bottom: 18px;
        }

        .prod-card .icn svg {
            width: 100%;
            height: 100%;
            stroke: var(--amber-2);
            fill: none;
            stroke-width: 1.4;
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
            padding: 70px 0;
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
            animation: marquee 42s linear infinite;
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
            opacity: 0.55;
            white-space: nowrap;
            display: inline-flex;
            align-items: center;
            gap: 34px;
            transition: opacity 0.3s;
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
            margin-top: 110px;
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
            width: 100%;
            max-width: 520px;
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
            min-width: 100%;
            position: relative;
            aspect-ratio: 16/10;
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
            object-fit: cover;
            display: block;
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

        .video-fallback h4 {
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
            }

            .cta-sec {
                margin: 0 16px;
            }
        }

        @media (max-width: 980px) {
            .hero-video-slider {
                max-width: 100%;
                margin-top: 30px;
            }

            .hvs-container {
                border-radius: 16px;
            }

            .hvs-overlay h4 {
                font-size: 16px;
            }

            .hvs-play-btn {
                width: 54px;
                height: 54px;
            }

            .hvs-play-btn svg {
                width: 18px;
                height: 18px;
            }

            .hvs-arrow {
                width: 36px;
                height: 36px;
            }

            .hvs-arrow svg {
                width: 15px;
                height: 15px;
            }
        }

        @media (max-width: 640px) {
            .hero-video-slider {
                max-width: 100%;
            }

            .hvs-container {
                border-radius: 14px;
            }

            .hvs-slide {
                aspect-ratio: 16/11;
            }

            .hvs-overlay {
                padding: 20px 16px 18px;
            }

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

        /* ---- PRODUCTS & INDUSTRIES TABS ---- */
        .pi-hero {
            background: radial-gradient(120% 90% at 15% -10%,
                    #16283f 0%,
                    var(--ink) 55%,
                    #060d18 100%);
            color: var(--text-on-dark);
            padding: 64px 0 54px;
        }

        .pi-hero h1 {
            color: #fff;
            font-size: clamp(28px, 4vw, 44px);
            font-weight: 700;
            margin-top: 14px;
        }

        .pi-hero p {
            margin-top: 14px;
            max-width: 560px;
            color: var(--text-on-dark-mute);
            font-size: 15.5px;
        }

        .pi-crumb {
            font-family: "IBM Plex Mono";
            font-size: 12px;
            color: var(--text-on-dark-mute);
        }

        .pi-crumb b {
            color: var(--amber-2);
            font-weight: 600;
        }

        .pi-section {
            padding: 64px 0 120px;
        }

        .pi-layout {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 32px;
            align-items: start;
        }

        .pi-sidebar {
            position: sticky;
            top: 88px;
            display: flex;
            flex-direction: column;
            gap: 26px;
        }

        .pi-group {
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 18px;
        }

        .pi-group h5 {
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--text-mute);
            font-weight: 600;
            padding: 4px 10px 12px;
        }

        .pi-tabs {
            display: flex;
            flex-direction: column;
            gap: 3px;
        }

        .pi-tab {
            width: 100%;
            text-align: left;
            background: none;
            border: none;
            padding: 11px 12px;
            border-radius: 9px;
            font-size: 13.8px;
            font-weight: 500;
            color: var(--text);
            cursor: pointer;
            transition: 0.25s;
            border-left: 3px solid transparent;
        }

        .pi-tab:hover {
            background: var(--surface);
        }

        .pi-tab.active {
            background: #fbefe0;
            color: #8a4b10;
            border-left-color: var(--amber);
            font-weight: 600;
        }

        .pi-downloads {
            background: var(--ink-2);
            border-radius: var(--radius);
            padding: 18px;
        }

        .pi-downloads h5 {
            font-family: "IBM Plex Mono";
            font-size: 11px;
            letter-spacing: 0.1em;
            text-transform: uppercase;
            color: var(--amber-2);
            font-weight: 600;
            padding: 4px 4px 12px;
        }

        .pi-downloads a {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 13.5px;
            color: var(--text-on-dark-mute);
            padding: 9px 6px;
            border-radius: 8px;
            transition: 0.25s;
        }

        .pi-downloads a:hover {
            color: #fff;
            background: rgba(255, 255, 255, 0.06);
        }

        .pi-downloads svg {
            width: 14px;
            height: 14px;
            stroke: var(--amber-2);
            flex-shrink: 0;
        }

        .pi-content {
            min-width: 0;
        }

        .pi-panel {
            display: none;
            background: var(--white);
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 38px 40px;
        }

        .pi-panel.active {
            display: block;
            animation: fadeIn 0.45s var(--ease);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .pi-panel .eyebrow {
            margin-bottom: 14px;
        }

        .pi-panel h2 {
            font-size: 26px;
            font-weight: 600;
            margin-bottom: 16px;
        }

        .pi-panel>p {
            font-size: 15px;
            max-width: 760px;
        }

        .pi-why {
            margin-top: 26px;
        }

        .pi-why h3,
        .pi-why h4 {
            font-size: 15px;
            font-weight: 600;
            color: var(--text);
            margin-bottom: 14px;
        }

        .pi-why ul {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .pi-why li {
            display: flex;
            gap: 10px;
            font-size: 14px;
            color: var(--text-mute);
        }

        .pi-why li b {
            color: var(--text);
            font-weight: 600;
        }

        .pi-why .dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--amber);
            margin-top: 7px;
            flex-shrink: 0;
        }

        .pi-products-title {
            margin-top: 30px;
            font-size: 12px;
            font-family: "IBM Plex Mono";
            letter-spacing: 0.08em;
            text-transform: uppercase;
            color: var(--text-mute);
            font-weight: 600;
        }

        .pi-chip-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 14px;
        }

        .pi-chip-grid span {
            font-size: 12.5px;
            padding: 7px 13px;
            border-radius: 999px;
            background: var(--surface-2);
            color: var(--text-mute);
            font-weight: 500;
            transition: 0.25s;
        }

        .pi-chip-grid span:hover {
            background: #fbefe0;
            color: #8a4b10;
        }

        .pi-footnote {
            margin-top: 28px;
            padding: 16px 18px;
            border-radius: 10px;
            background: var(--surface-2);
            font-size: 13px;
            color: var(--text-mute);
            font-style: italic;
        }

        .pi-prod-groups {
            display: flex;
            flex-direction: column;
            gap: 34px;
        }

        .pi-prod-group h3,
        .pi-prod-group h4 {
            font-size: 16.5px;
            font-weight: 600;
            color: var(--text);
            border-bottom: 2px solid var(--amber);
            display: inline-block;
            padding-bottom: 6px;
            margin-bottom: 16px;
        }

        .pi-item-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 6px 24px;
        }

        .pi-item-grid a {
            font-size: 13.5px;
            color: var(--text-mute);
            padding: 6px 0;
            transition: 0.2s;
            border-bottom: 1px dashed transparent;
        }

        .pi-item-grid a:hover {
            color: var(--amber);
            border-color: var(--amber);
        }

        @media (max-width: 900px) {
            .pi-layout {
                grid-template-columns: 1fr;
            }

            .pi-sidebar {
                position: relative;
                top: 0;
            }

            .pi-item-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .pi-panel {
                padding: 28px 22px;
            }
        }

        @media (max-width: 560px) {
            .pi-item-grid {
                grid-template-columns: 1fr;
            }
        }

        /* ================= SOURCING SECTION ================= */
        .sourcing-section {
            background: #fff;
        }

        .sourcing-container {
            max-width: 1240px;
            margin: 0 auto;
            padding: 0 32px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            align-items: center;
        }

        /* Image */
        .sourcing-image {
            width: 100%;
            height: 400px;
            border-radius: 22px;
            overflow: hidden;
            background: #101f35;
        }

        .sourcing-image img {
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
            transition: transform 0.6s ease;
        }

        .sourcing-image:hover img {
            transform: scale(1.04);
        }

        /* Content */
        .sourcing-content {
            max-width: 570px;
        }

        .sourcing-label {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-family: "IBM Plex Mono", monospace;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: 0.14em;
            text-transform: uppercase;
            color: #e98423;
            margin-bottom: 18px;
        }

        .sourcing-label::before {
            content: "";
            width: 20px;
            height: 1px;
            background: #e98423;
        }

        .sourcing-content h2 {
            margin: 0;
            font-family: "Space Grotesk", sans-serif;
            font-size: clamp(30px, 3.4vw, 46px);
            line-height: 1.12;
            font-weight: 600;
            letter-spacing: -0.02em;
            color: #0a1626;
        }

        .sourcing-content p {
            margin-top: 24px;
            max-width: 540px;
            font-family: "IBM Plex Sans", sans-serif;
            font-size: 16px;
            line-height: 1.75;
            color: #5b6672;
        }

        /* Tablet */
        @media (max-width: 900px) {
            .sourcing-container {
                grid-template-columns: 1fr;
                gap: 45px;
            }

            .sourcing-content {
                max-width: 100%;
            }

            .sourcing-image {
                height: 400px;
            }
        }

        /* Mobile */
        @media (max-width: 640px) {
            .sourcing-section {
                padding: 60px 0;
            }

            .sourcing-container {
                padding: 0 20px;
                gap: 32px;
            }

            .sourcing-image {
                height: 300px;
                border-radius: 16px;
            }

            .sourcing-content h2 {
                font-size: 30px;
            }

            .sourcing-content p {
                font-size: 15px;
                margin-top: 18px;
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
          "url": "https://pearlcon.com/",
          "logo": "https://pearlcon.com/assets/img/logo.jpeg",
          "telephone": "+447891363776",
          "email": "sales@pearlcon.com"
        },
        {
          "@type": "WebPage",
          "@id": "https://pearlcon.com/our-products#webpage",
          "url": "https://pearlcon.com/our-products",
          "name": "Industrial Products Portfolio — Pearlcon Business Services",
          "description": "Explore our industrial products portfolio including valves, pumps, instrumentation, piping, and electrical equipment.",
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



    <section class="pi-section">
        <div class="wrap">
            <div class="pi-layout">
                <!-- SIDEBAR -->
                <aside class="pi-sidebar">
                    <div class="pi-group">
                        <div class="pi-group-title">Industries</div>
                        <ul class="pi-tabs">
                            <li>
                                <button class="pi-tab" data-target="ind-oilgas"
                                    data-hash="oil,oilgas,oil-gas,oil-gas-petrochemicals">
                                    Oil, Gas &amp; Petrochemicals
                                </button>
                            </li>
                            <li>
                                <button class="pi-tab" data-target="ind-aerospace"
                                    data-hash="aerospace,aviation,aerospace-aviation">
                                    Aerospace &amp; Aviation
                                </button>
                            </li>
                            <li>
                                <button class="pi-tab" data-target="ind-chemicals"
                                    data-hash="chemicals,lubricants,chemicals-lubricants">
                                    Chemicals &amp; Lubricants
                                </button>
                            </li>
                            <li>
                                <button class="pi-tab" data-target="ind-security"
                                    data-hash="security,counter-terrorism">
                                    Security &amp; Counter Terrorism
                                </button>
                            </li>
                            <li>
                                <button class="pi-tab" data-target="ind-industrial"
                                    data-hash="industrial,industrial-plants">
                                    Industrial Plants
                                </button>
                            </li>
                            <li>
                                <button class="pi-tab" data-target="ind-mining"
                                    data-hash="mining,drilling,mining-drilling">
                                    Mining &amp; Drilling
                                </button>
                            </li>
                            <li>
                                <button class="pi-tab" data-target="ind-water"
                                    data-hash="water,irrigation,water-irrigation">
                                    Water &amp; Irrigation
                                </button>
                            </li>
                            <li>
                                <button class="pi-tab" data-target="ind-lowcost"
                                    data-hash="lowcost,low-cost-country-sourcing,lcc">
                                    Low Cost Country Sourcing
                                </button>
                            </li>
                            <li>
                                <button class="pi-tab" data-target="ind-lab" data-hash="lab,lab-equipment">
                                    Aviation and Defence
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="pi-group">
                        <div class="pi-group-title">Products</div>
                        <ul class="pi-tabs">
                            <li>
                                <button class="pi-tab active" data-target="prod-all"
                                    data-hash="products,all,all-products,catalogue">
                                    All Product Categories
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="pi-downloads">
                        <div class="pi-group-title">Downloads</div>
                        <a href="assets/Pearlcon-Profile-2013-pdf.pdf" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 3v12m0 0l-4-4m4 4l4-4M4 21h16" />
                            </svg>
                            Pearlcon Brochure
                        </a>
                        <a href="assets/Products-Portfolio-OandG.pdf" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 3v12m0 0l-4-4m4 4l4-4M4 21h16" />
                            </svg>
                            Products Portfolio O&amp;G
                        </a>
                        <a href="assets/ISO-9001-Certificate.pdf" target="_blank" rel="noopener">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M12 3v12m0 0l-4-4m4 4l4-4M4 21h16" />
                            </svg>
                            An ISO Certified Company
                        </a>
                    </div>
                </aside>

                <!-- CONTENT -->
                <div class="pi-content">
                    <!-- INDUSTRY: Oil, Gas & Petrochemicals -->
                    <div class="pi-panel" id="ind-oilgas">
                        <div class="eyebrow">
                            Oil, Gas &amp; Petrochemicals
                        </div>

                        <section class="sourcing-section">
                            <div class="sourcing-container"> <!-- Image Side -->
                                <!-- Content Side -->
                                <div class="sourcing-content">
                                    <h2> Sourcing &amp; supply for the oil, gas and petrochemical industry </h2>
                                    <p> Pearlcon Business Services Limited is a UK-based sourcing, supplying,
                                        procurement and consultancy company specialised in supplying and sourcing
                                        equipment, materials and OEM spare parts to the oil, gas and petrochemical
                                        industry worldwide. </p>
                                </div>
                                <div class="sourcing-image"> <img src="{{ asset('assets/category/OilGasPetro.jpg') }}"
                                        alt="Oil, gas and petrochemical industry"> </div>
                            </div>
                        </section>
                        <div class="pi-why">
                            <h3>
                                Why choose Pearlcon for your Oil, Gas &amp;
                                Petrochemical needs:
                            </h3>
                            <ul>
                                <li>
                                    <span class="dot"></span><b>Simplicity</b> — a single purchase
                                    order, a single invoice, a single point
                                    of contact.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Global reach</b> — access to
                                    international suppliers without risk,
                                    with better technology, value and
                                    availability.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Maximum efficiency</b> — goods
                                    delivered "on time in full", with
                                    continuous KPI measurement via regular
                                    structured reports.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Comprehensive range</b> — a complete
                                    range of products, from everyday
                                    consumables to large capital equipment.
                                </li>
                            </ul>
                        </div>
                        <div class="pi-products-title">
                            Some products available for this industry
                        </div>
                        <div class="pi-chip-grid">
                            <span>Actuators</span><span>Bearings</span><span>Blowers &amp;
                                Fans</span><span>Bushings</span><span>Cathodic Protection</span><span>Equipment
                                Couplings</span><span>Detectors</span><span>Filters</span><span>Fittings</span><span>Flanges</span><span>Gaskets</span><span>Gauges</span><span>Hoses</span><span>Instrumentation</span><span>Meters</span><span>Motors</span><span>Pipes</span><span>Pumps</span><span>Seals</span><span>Strainers</span><span>Switches</span><span>Thermocouples</span><span>Tubing</span><span>Valves</span>
                        </div>
                        <div class="pi-footnote">
                            We combine our comprehensive expertise,
                            experience and outcome-oriented approach to
                            support our clients in achieving their
                            procurement objectives.
                        </div>
                    </div>

                    <!-- INDUSTRY: Aerospace -->
                    <div class="pi-panel" id="ind-aerospace">
                        <div class="eyebrow">Aerospace &amp; Aviation</div>
                        <section class="sourcing-section">
                            <div class="sourcing-container"> <!-- Image Side -->
                                <!-- Content Side -->
                                <div class="sourcing-content">
                                    <h2>
                                        Sourcing &amp; supply for the aerospace &amp;
                                        aviation sector
                                    </h2>
                                    <p>
                                        Pearlcon supports aviation and MRO operators
                                        with traceable, certified components and
                                        consumables sourced through a vetted global
                                        supplier network.
                                    </p>
                                </div>
                                <div class="sourcing-image"> <img
                                        src="{{ asset('assets/category/Aerospace-Aviation.jpg') }}"
                                        alt="Oil, gas and petrochemical industry"> </div>
                            </div>
                        </section>
                        <div class="pi-why">
                            <h3>
                                Why choose Pearlcon for your Aerospace &amp;
                                Aviation needs:
                            </h3>
                            <ul>
                                <li>
                                    <span class="dot"></span><b>Traceability</b> — full
                                    documentation and certification on every
                                    part supplied.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Global reach</b> — access to OEM and
                                    approved-distributor stock without
                                    individual supplier risk.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Maximum efficiency</b> —
                                    on-time-in-full delivery with continuous
                                    KPI reporting.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Comprehensive range</b> — from
                                    consumables to ground support and
                                    capital equipment.
                                </li>
                            </ul>
                        </div>
                        <div class="pi-products-title">
                            Some products available for this industry
                        </div>
                        <div class="pi-chip-grid">
                            <span>Ground Support
                                Equipment</span><span>Fasteners</span><span>Sealants</span><span>Hydraulic
                                Components</span><span>Avionics
                                Accessories</span><span>Cabling</span><span>Instrumentation</span><span>Tooling</span>
                        </div>
                        <div class="pi-footnote">
                            We combine our comprehensive expertise,
                            experience and outcome-oriented approach to
                            support our clients in achieving their
                            procurement objectives.
                        </div>
                    </div>

                    <!-- INDUSTRY: Chemicals -->
                    <div class="pi-panel" id="ind-chemicals">
                        <div class="eyebrow">
                            Chemicals &amp; Lubricants
                        </div>
                        <section class="sourcing-section">
                            <div class="sourcing-container"> <!-- Image Side -->
                                <!-- Content Side -->
                                <div class="sourcing-content">
                                    <h2>
                                        Sourcing &amp; supply for chemicals &amp;
                                        lubricants
                                    </h2>
                                    <p>
                                        We maintain vetted vendor relationships across
                                        specialty and bulk chemical supply, helping
                                        plants secure reliable, compliant stock at the
                                        right value.
                                    </p>
                                </div>
                                <div class="sourcing-image"> <img src="{{ asset('assets/category/chemicals.jpg') }}"
                                        alt="Oil, gas and petrochemical industry"> </div>
                            </div>
                        </section>
                        <div class="pi-why">
                            <h3>
                                Why choose Pearlcon for your Chemicals &amp;
                                Lubricants needs:
                            </h3>
                            <ul>
                                <li>
                                    <span class="dot"></span><b>Simplicity</b> — a single purchase
                                    order, a single invoice, a single point
                                    of contact.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Global reach</b> — international
                                    suppliers with quality and compliance
                                    oversight.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Maximum efficiency</b> —
                                    on-time-in-full delivery with continuous
                                    KPI reporting.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Comprehensive range</b> — from
                                    everyday consumables to bulk chemical
                                    supply.
                                </li>
                            </ul>
                        </div>
                        <div class="pi-products-title">
                            Some products available for this industry
                        </div>
                        <div class="pi-chip-grid">
                            <span>Industrial Lubricants</span><span>Specialty
                                Chemicals</span><span>Solvents</span><span>Corrosion Inhibitors</span><span>Cleaning
                                Agents</span><span>Bulk Storage Solutions</span>
                        </div>
                        <div class="pi-footnote">
                            We combine our comprehensive expertise,
                            experience and outcome-oriented approach to
                            support our clients in achieving their
                            procurement objectives.
                        </div>
                    </div>

                    <!-- INDUSTRY: Security -->
                    <div class="pi-panel" id="ind-security">
                        <div class="eyebrow">
                            Security &amp; Counter Terrorism
                        </div>
                        <section class="sourcing-section">
                            <div class="sourcing-container"> <!-- Image Side -->
                                <!-- Content Side -->
                                <div class="sourcing-content">
                                    <h2>
                                        Sourcing &amp; supply for security &amp; counter
                                        terrorism
                                    </h2>
                                    <p>
                                        Pearlcon supplies critical security
                                        infrastructure and screening equipment to
                                        plants, sites and public-facing facilities that
                                        require the highest levels of protection.
                                    </p>
                                </div>
                                <div class="sourcing-image"> <img src="{{ asset('assets/category/security.jpg') }}"
                                        alt="Oil, gas and petrochemical industry"> </div>
                            </div>
                        </section>
                        <div class="pi-why">
                            <h3>
                                Why choose Pearlcon for your Security &amp;
                                Counter Terrorism needs:
                            </h3>
                            <ul>
                                <li>
                                    <span class="dot"></span><b>Simplicity</b> — a single purchase
                                    order, a single invoice, a single point
                                    of contact.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Global reach</b> — access to leading
                                    security technology manufacturers.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Maximum efficiency</b> —
                                    on-time-in-full delivery with continuous
                                    KPI reporting.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Comprehensive range</b> — from
                                    detection equipment to full site
                                    security systems.
                                </li>
                            </ul>
                        </div>
                        <div class="pi-products-title">
                            Some products available for this industry
                        </div>
                        <div class="pi-chip-grid">
                            <span>CCTV Surveillance</span><span>Access Control
                                Equipment</span><span>Detectors</span><span>X-Ray Scanners</span><span>Metal
                                Scanners</span><span>Digital Wireless Monitoring</span><span>Fire Alarm
                                Systems</span><span>Night Vision Equipment</span>
                        </div>
                        <div class="pi-footnote">
                            We combine our comprehensive expertise,
                            experience and outcome-oriented approach to
                            support our clients in achieving their
                            procurement objectives.
                        </div>
                    </div>

                    <!-- INDUSTRY: Industrial Plants -->
                    <div class="pi-panel" id="ind-industrial">
                        <div class="eyebrow">Industrial Plants</div>
                        <section class="sourcing-section">
                            <div class="sourcing-container"> <!-- Image Side -->
                                <!-- Content Side -->
                                <div class="sourcing-content">
                                    <h2>
                                        Sourcing &amp; supply for industrial &amp;
                                        process plants
                                    </h2>
                                    <p>
                                        Materials are sourced to client drawings,
                                        samples and specification, tailored to the
                                        exacting demands of continuous production
                                        environments.
                                    </p>
                                </div>
                                <div class="sourcing-image"> <img src="{{ asset('assets/category/cement.jpg') }}"
                                        alt="Oil, gas and petrochemical industry"> </div>
                            </div>
                        </section>
                        <div class="pi-why">
                            <h3>
                                Why choose Pearlcon for your Industrial
                                Plant needs:
                            </h3>
                            <ul>
                                <li>
                                    <span class="dot"></span><b>Simplicity</b> — a single purchase
                                    order, a single invoice, a single point
                                    of contact.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Global reach</b> — access to
                                    international suppliers without risk.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Maximum efficiency</b> —
                                    on-time-in-full delivery with continuous
                                    KPI reporting.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Comprehensive range</b> — from
                                    everyday consumables to large capital
                                    equipment.
                                </li>
                            </ul>
                        </div>
                        <div class="pi-products-title">
                            Some products available for this industry
                        </div>
                        <div class="pi-chip-grid">
                            <span>Process Equipment</span><span>Rotating
                                Machinery</span><span>Instrumentation</span><span>Control Systems</span><span>Spare
                                Parts</span><span>Capital Equipment</span>
                        </div>
                        <div class="pi-footnote">
                            We combine our comprehensive expertise,
                            experience and outcome-oriented approach to
                            support our clients in achieving their
                            procurement objectives.
                        </div>
                    </div>

                    <!-- INDUSTRY: Mining -->
                    <div class="pi-panel" id="ind-mining">
                        <div class="eyebrow">Mining &amp; Drilling</div>
                        <section class="sourcing-section">
                            <div class="sourcing-container"> <!-- Image Side -->
                                <!-- Content Side -->
                                <div class="sourcing-content">
                                    <h2>
                                        Sourcing &amp; supply for mining &amp; drilling
                                    </h2>
                                    <p>
                                        We supply rotating equipment and drilling
                                        consumables built for demanding site conditions
                                        across mining and drilling operations worldwide.
                                    </p>
                                </div>
                                <div class="sourcing-image"> <img
                                        src="{{ asset('assets/category/miningand-drilling.jpg') }}"
                                        alt="Oil, gas and petrochemical industry"> </div>
                            </div>
                        </section>
                        <div class="pi-why">
                            <h3>
                                Why choose Pearlcon for your Mining &amp;
                                Drilling needs:
                            </h3>
                            <ul>
                                <li>
                                    <span class="dot"></span><b>Simplicity</b> — a single purchase
                                    order, a single invoice, a single point
                                    of contact.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Global reach</b> — access to
                                    international suppliers without risk.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Maximum efficiency</b> —
                                    on-time-in-full delivery with continuous
                                    KPI reporting.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Comprehensive range</b> — from
                                    consumables to heavy capital equipment.
                                </li>
                            </ul>
                        </div>
                        <div class="pi-products-title">
                            Some products available for this industry
                        </div>
                        <div class="pi-chip-grid">
                            <span>Drilling Consumables</span><span>Rotating Equipment</span><span>Bits &amp;
                                Tooling</span><span>Wear Parts</span><span>Conveyor Components</span><span>Safety
                                Equipment</span>
                        </div>
                        <div class="pi-footnote">
                            We combine our comprehensive expertise,
                            experience and outcome-oriented approach to
                            support our clients in achieving their
                            procurement objectives.
                        </div>
                    </div>

                    <!-- INDUSTRY: Water -->
                    <div class="pi-panel" id="ind-water">
                        <div class="eyebrow">Water &amp; Irrigation</div>
                        <section class="sourcing-section">
                            <div class="sourcing-container"> <!-- Image Side -->
                                <!-- Content Side -->
                                <div class="sourcing-content">
                                    <h2>
                                        Sourcing &amp; supply for water &amp; irrigation
                                    </h2>
                                    <p>
                                        We supply pumps, valves and treatment equipment
                                        for municipal and industrial water and
                                        irrigation projects worldwide.
                                    </p>
                                </div>
                                <div class="sourcing-image"> <img src="{{ asset('assets/category/irrigation.jpg') }}"
                                        alt="Oil, gas and petrochemical industry"> </div>
                            </div>
                        </section>
                        <div class="pi-why">
                            <h3>
                                Why choose Pearlcon for your Water &amp;
                                Irrigation needs:
                            </h3>
                            <ul>
                                <li>
                                    <span class="dot"></span><b>Simplicity</b> — a single purchase
                                    order, a single invoice, a single point
                                    of contact.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Global reach</b> — access to
                                    international suppliers without risk.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Maximum efficiency</b> —
                                    on-time-in-full delivery with continuous
                                    KPI reporting.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Comprehensive range</b> — from
                                    consumables to full treatment plant
                                    equipment.
                                </li>
                            </ul>
                        </div>
                        <div class="pi-products-title">
                            Some products available for this industry
                        </div>
                        <div class="pi-chip-grid">
                            <span>Pumps</span><span>Valves</span><span>Treatment
                                Systems</span><span>Piping</span><span>Meters</span><span>Irrigation Controls</span>
                        </div>
                        <div class="pi-footnote">
                            We combine our comprehensive expertise,
                            experience and outcome-oriented approach to
                            support our clients in achieving their
                            procurement objectives.
                        </div>
                    </div>

                    <!-- INDUSTRY: Low Cost Country Sourcing -->
                    <div class="pi-panel" id="ind-lowcost">
                        <div class="eyebrow">Low Cost Country Sourcing</div>
                        <section class="sourcing-section">
                            <div class="sourcing-container"> <!-- Image Side -->
                                <!-- Content Side -->
                                <div class="sourcing-content">
                                    <h2>
                                        Bridging Asia Pacific &amp; Indian manufacturing
                                        capacity
                                    </h2>
                                    <p>
                                        We connect our clients to Asia Pacific and
                                        Indian manufacturing capacity, helping bring
                                        competitive, quality-controlled production into
                                        the global supply chain.
                                    </p>
                                </div>
                                <div class="sourcing-image"> <img src="{{ asset('assets/category/handshake.jpg') }}"
                                        alt="Oil, gas and petrochemical industry"> </div>
                            </div>
                        </section>
                        <div class="pi-why">
                            <h3>
                                Why choose Pearlcon for Low Cost Country
                                Sourcing:
                            </h3>
                            <ul>
                                <li>
                                    <span class="dot"></span><b>Simplicity</b> — a single purchase
                                    order, a single invoice, a single point
                                    of contact.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Global reach</b> — access to
                                    international suppliers without risk.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Maximum efficiency</b> —
                                    on-time-in-full delivery with continuous
                                    KPI reporting.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Quality control</b> — factory and
                                    product inspection by our own engineers.
                                </li>
                            </ul>
                        </div>
                        <div class="pi-products-title">
                            Some products available through this route
                        </div>
                        <div class="pi-chip-grid">
                            <span>Custom Fabrication</span><span>Bulk Consumables</span><span>Capital
                                Equipment</span><span>OEM Components</span>
                        </div>
                        <div class="pi-footnote">
                            We combine our comprehensive expertise,
                            experience and outcome-oriented approach to
                            support our clients in achieving their
                            procurement objectives.
                        </div>
                    </div>

                    <!-- INDUSTRY: Lab Equipment -->
                    <div class="pi-panel" id="ind-lab">
                        <div class="eyebrow">Aviation and Defence</div>
                        <section class="sourcing-section">
                            <div class="sourcing-container"> <!-- Image Side -->
                                <!-- Content Side -->
                                <div class="sourcing-content">
                                    <h2>
                                        Sourcing &amp; supply for laboratory &amp;
                                        medical equipment
                                    </h2>
                                    <p>
                                        We provide instrumentation and controlled
                                        sourcing to support UK and international
                                        laboratory and medical device supply
                                        requirements.
                                    </p>
                                </div>
                                <div class="sourcing-image"> <img src="{{ asset('assets/category/medical.jpg') }}"
                                        alt="Oil, gas and petrochemical industry"> </div>
                            </div>
                        </section>
                        <div class="pi-why">
                            <h3>
                                Why choose Pearlcon for your Lab Equipment
                                needs:
                            </h3>
                            <ul>
                                <li>
                                    <span class="dot"></span><b>Simplicity</b> — a single purchase
                                    order, a single invoice, a single point
                                    of contact.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Global reach</b> — access to
                                    international suppliers without risk.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Maximum efficiency</b> —
                                    on-time-in-full delivery with continuous
                                    KPI reporting.
                                </li>
                                <li>
                                    <span class="dot"></span><b>Comprehensive range</b> — from
                                    consumables to precision
                                    instrumentation.
                                </li>
                            </ul>
                        </div>
                        <div class="pi-products-title">
                            Some products available for this industry
                        </div>
                        <div class="pi-chip-grid">
                            <span>Analytical Instruments</span><span>Lab Consumables</span><span>Calibration
                                Equipment</span><span>Medical Devices</span>
                        </div>
                        <div class="pi-footnote">
                            We combine our comprehensive expertise,
                            experience and outcome-oriented approach to
                            support our clients in achieving their
                            procurement objectives.
                        </div>
                    </div>

                    <!-- PRODUCTS: All categories -->
                    <div class="pi-panel active" id="prod-all">
                        <div class="eyebrow">Product Catalogue</div>
                        <h2>All product categories</h2>
                        <p>
                            A full breakdown of the product families we
                            regularly source and supply. Get in touch for a
                            specific part number, drawing or specification.
                        </p>

                        <div class="pi-prod-groups" style="margin-top: 30px">
                            <div class="pi-prod-group">
                                <h3>Heat Exchangers Parts</h3>
                                <div class="pi-item-grid">
                                    <a href="#">Heat Exchanger, Air Cooled</a>
                                    <a href="#">Heat Exchanger, Compact</a>
                                    <a href="#">Heat Exchanger, Cryogenic</a>
                                    <a href="#">Heat Exchanger, Shell &amp; Tube</a>
                                    <a href="#">Heat Exchanger, Special Tubular</a>
                                    <a href="#">Heat Exchanger Components</a>
                                </div>
                            </div>

                            <div class="pi-prod-group">
                                <h3>HVAC Equipment</h3>
                                <div class="pi-item-grid">
                                    <a href="#">Air Conditioner Accessories</a>
                                    <a href="#">Air Conditioning Unit</a>
                                    <a href="#">Air Handling System</a>
                                    <a href="#">Chiller, Water</a>
                                    <a href="#">Coil, Heating and Cooling</a>
                                    <a href="#">Condensing Unit</a>
                                    <a href="#">Control System</a>
                                    <a href="#">Cooler, Evaporative</a>
                                    <a href="#">Dehumidifier</a>
                                    <a href="#">Diffuser</a>
                                    <a href="#">Heater, Air HVAC</a>
                                    <a href="#">Heater, Feedwater HVAC</a>
                                    <a href="#">Heater, Steam HVAC</a>
                                    <a href="#">Heat Exchanger, HVAC</a>
                                    <a href="#">Humidifier</a>
                                </div>
                            </div>

                            <div class="pi-prod-group">
                                <h3>Valves &amp; Valve Parts</h3>
                                <div class="pi-item-grid">
                                    <a href="#">Valve, Ball, Alloy</a>
                                    <a href="#">Valve, Ball, Carbon Steel</a>
                                    <a href="#">Valve, Ball, Other</a>
                                    <a href="#">Valve, Bleed, Alloy</a>
                                    <a href="#">Valve, Bleed, Carbon Steel</a>
                                    <a href="#">Valve, Bleed, Other</a>
                                    <a href="#">Valve, Butterfly, Alloy</a>
                                    <a href="#">Valve, Butterfly, Carbon Steel</a>
                                    <a href="#">Valve, Butterfly, Other</a>
                                    <a href="#">Valve, Check, Alloy</a>
                                    <a href="#">Valve, Check, Carbon Steel</a>
                                    <a href="#">Valve, Check, Other</a>
                                    <a href="#">Valve, Gate, Alloy</a>
                                    <a href="#">Valve, Gate, Carbon Steel</a>
                                    <a href="#">Valve, Gate, Other</a>
                                    <a href="#">Valve, Globe, Alloy</a>
                                    <a href="#">Valve, Globe, Carbon Steel</a>
                                    <a href="#">Valve, Globe, Other</a>
                                    <a href="#">Valve, Knife Gate, Alloy</a>
                                    <a href="#">Valve, Knife Gate, Carbon Steel</a>
                                    <a href="#">Valve, Knife Gate, Other</a>
                                    <a href="#">Valve, Other, Carbon Steel</a>
                                    <a href="#">Valve, Plug, Alloy</a>
                                    <a href="#">Valve, Plug, Carbon Steel</a>
                                    <a href="#">Valve, Plug, Other</a>
                                    <a href="#">Valve Parts &amp; Accessories</a>
                                </div>
                            </div>

                            <div class="pi-prod-group">
                                <h3>Security</h3>
                                <div class="pi-item-grid">
                                    <a href="#">CCTV Surveillance</a>
                                    <a href="#">Access Control Equipment</a>
                                    <a href="#">Digital Video Recorders</a>
                                    <a href="#">Cameras and Controllers</a>
                                    <a href="#">Building Management Systems</a>
                                    <a href="#">Fire Alarm Systems</a>
                                    <a href="#">Detectors</a>
                                    <a href="#">Radio Communication Equipment</a>
                                    <a href="#">Night Vision Equipment</a>
                                    <a href="#">X-Ray Scanners</a>
                                    <a href="#">Anti-Riot Equipment</a>
                                    <a href="#">Tactical Security Equipment</a>
                                    <a href="#">Metal Scanners</a>
                                    <a href="#">Luggage Inspection Equipment</a>
                                    <a href="#">Walk Through Metal Detectors</a>
                                    <a href="#">Digital Wireless Monitoring
                                        Equipment</a>
                                    <a href="#">Security Barriers</a>
                                </div>
                            </div>

                            <div class="pi-prod-group">
                                <h3>Pumps &amp; Seals</h3>
                                <div class="pi-item-grid">
                                    <a href="#">Pumps</a>
                                    <a href="#">Seals</a>
                                    <a href="#">Bearings</a>
                                    <a href="#">Bushings</a>
                                </div>
                            </div>

                            <div class="pi-prod-group">
                                <h3>Instrumentation &amp; Metering</h3>
                                <div class="pi-item-grid">
                                    <a href="#">Analyzers</a>
                                    <a href="#">Gauges</a>
                                    <a href="#">Meters</a>
                                    <a href="#">Thermocouples</a>
                                </div>
                            </div>

                            <div class="pi-prod-group">
                                <h3>Piping, Flanges &amp; Fittings</h3>
                                <div class="pi-item-grid">
                                    <a href="#">Pipes</a>
                                    <a href="#">Tubing</a>
                                    <a href="#">Gaskets</a>
                                    <a href="#">Fittings</a>
                                </div>
                            </div>

                            <div class="pi-prod-group">
                                <h3>Wellhead &amp; Fire Safety</h3>
                                <div class="pi-item-grid">
                                    <a href="#">Wellhead Control Panels</a>
                                    <a href="#">Accessories</a>
                                    <a href="#">Fire Fighting Items</a>
                                </div>
                            </div>

                            <div class="pi-prod-group">
                                <h3>Electrical Equipment</h3>
                                <div class="pi-item-grid">
                                    <a href="#">Detectors</a>
                                    <a href="#">Strainers</a>
                                    <a href="#">Electrical Accessories</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <script>
        // tab switching for Products & Industries, with hash routing
        (function () {
            var tabs = Array.prototype.slice.call(
                document.querySelectorAll(".pi-tab"),
            );
            var panels = Array.prototype.slice.call(
                document.querySelectorAll(".pi-panel"),
            );
            var DEFAULT_TARGET = "prod-all";

            function activate(targetId, opts) {
                opts = opts || {};
                var matchedTab = null;
                tabs.forEach(function (t) {
                    var isMatch = t.getAttribute("data-target") === targetId;
                    t.classList.toggle("active", isMatch);
                    if (isMatch) matchedTab = t;
                });
                panels.forEach(function (p) {
                    p.classList.toggle("active", p.id === targetId);
                });
                if (opts.scroll && matchedTab) {
                    document
                        .querySelector(".pi-layout")
                        .scrollIntoView({ behavior: "smooth", block: "start" });
                }
                return !!matchedTab;
            }

            function findTargetForHash(rawHash) {
                var hash = (rawHash || "")
                    .replace(/^#/, "")
                    .trim()
                    .toLowerCase();
                if (!hash) return null;
                // direct match on panel id, e.g. #ind-oilgas
                if (document.getElementById(hash)) return hash;
                // alias match via data-hash="oil,oilgas,..."
                for (var i = 0; i < tabs.length; i++) {
                    var aliases = (
                        tabs[i].getAttribute("data-hash") || ""
                    )
                        .split(",")
                        .map(function (s) {
                            return s.trim().toLowerCase();
                        });
                    if (aliases.indexOf(hash) !== -1) {
                        return tabs[i].getAttribute("data-target");
                    }
                }
                return null;
            }

            function syncFromHash(scroll) {
                var target = findTargetForHash(window.location.hash);
                if (target) {
                    activate(target, { scroll: !!scroll });
                } else if (!window.location.hash) {
                    activate(DEFAULT_TARGET);
                }
            }

            tabs.forEach(function (tab) {
                tab.addEventListener("click", function () {
                    var targetId = tab.getAttribute("data-target");
                    activate(targetId, { scroll: true });
                    var aliases = (
                        tab.getAttribute("data-hash") || ""
                    ).split(",");
                    var primaryAlias = (aliases[0] || targetId).trim();
                    if (
                        "history" in window &&
                        "replaceState" in window.history
                    ) {
                        window.history.replaceState(
                            null,
                            "",
                            "#" + primaryAlias,
                        );
                    } else {
                        window.location.hash = primaryAlias;
                    }
                });
            });

            // on initial load: honour an incoming hash (e.g. arriving from
            // Home via https://pearlcon.com/our-products/#oil), otherwise
            // keep "All Product Categories" active by default
            syncFromHash(true);

            // if the hash changes while already on this page
            window.addEventListener("hashchange", function () {
                syncFromHash(true);
            });
        })();
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

                function openLightbox(src, title) {
                    if (!videoModal) return;
                    videoModal.classList.add("open");
                    videoModal.setAttribute("aria-hidden", "false");
                    document.body.style.overflow = "hidden";
                    if (pearlconVideo) {
                        var source = pearlconVideo.querySelector("source");
                        if (source && src) {
                            source.src = src;
                            pearlconVideo.load();
                        }
                        pearlconVideo.play().catch(function () { });
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
                        playBtn.addEventListener("click", function () {
                            var src = video
                                ? video.querySelector("source")
                                : null;
                            openLightbox(src ? src.src : null);
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