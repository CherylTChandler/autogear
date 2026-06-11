<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="AutoGear Pro – Your one-stop shop for premium car accessories. Shop phone mounts, dash cams, organizers, seat cushions, air fresheners, and cleaning kits." />
  <meta name="keywords" content="car accessories, phone mount, dash cam, car organizer, seat cushion, auto cleaning kit, air freshener" />
  <meta name="robots" content="index, follow" />
  <meta property="og:title" content="AutoGear Pro – Premium Car Accessories" />
  <meta property="og:description" content="Upgrade your drive with top-quality car accessories at AutoGear Pro." />
  <meta property="og:type" content="website" />
  <title>AutoGear Pro – Premium Car Accessories</title>

  <!-- Google Fonts: Bebas Neue (display) + DM Sans (body) -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,600;0,9..40,700;1,9..40,400&display=swap" rel="stylesheet" />

  <style>
    /* =============================================
       CSS CUSTOM PROPERTIES & RESET
    ============================================= */
    :root {
      --col-bg:        #0a0a0f;
      --col-surface:   #13131c;
      --col-card:      #1a1a27;
      --col-border:    #2a2a3d;
      --col-accent:    #f0a500;
      --col-accent2:   #e05c00;
      --col-text:      #e8e8f0;
      --col-muted:     #888899;
      --col-white:     #ffffff;
      --col-success:   #22c55e;
      --col-danger:    #ef4444;
      --font-display:  'Bebas Neue', sans-serif;
      --font-body:     'DM Sans', sans-serif;
      --radius-sm:     6px;
      --radius-md:     12px;
      --radius-lg:     20px;
      --shadow-card:   0 4px 24px rgba(0,0,0,.45);
      --shadow-glow:   0 0 24px rgba(240,165,0,.18);
      --transition:    .25s cubic-bezier(.4,0,.2,1);
      --max-w:         1280px;
    }

    *, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
    html { scroll-behavior: smooth; font-size: 16px; }
    body {
      font-family: var(--font-body);
      background: var(--col-bg);
      color: var(--col-text);
      line-height: 1.65;
      overflow-x: hidden;
    }
    img { display: block; max-width: 100%; }
    a { color: inherit; text-decoration: none; }
    ul { list-style: none; }
    button { cursor: pointer; font-family: var(--font-body); border: none; }
    input, textarea, select { font-family: var(--font-body); }

    /* =============================================
       UTILITIES
    ============================================= */
    .container { width: min(100%, var(--max-w)); margin-inline: auto; padding-inline: 1.5rem; }
    .sr-only { position: absolute; width:1px; height:1px; clip:rect(0,0,0,0); overflow:hidden; }
    .btn {
      display: inline-flex; align-items: center; gap: .5rem;
      padding: .7rem 1.6rem; border-radius: var(--radius-sm);
      font-weight: 600; font-size: .92rem; letter-spacing: .02em;
      transition: var(--transition); white-space: nowrap;
    }
    .btn-primary {
      background: var(--col-accent); color: #000;
    }
    .btn-primary:hover { background: #ffb820; transform: translateY(-2px); box-shadow: var(--shadow-glow); }
    .btn-outline {
      background: transparent; color: var(--col-accent);
      border: 2px solid var(--col-accent);
    }
    .btn-outline:hover { background: var(--col-accent); color: #000; transform: translateY(-2px); }
    .btn-ghost {
      background: rgba(255,255,255,.06); color: var(--col-text);
      border: 1px solid var(--col-border);
    }
    .btn-ghost:hover { background: rgba(255,255,255,.1); }
    .btn-danger { background: var(--col-danger); color: #fff; }
    .btn-danger:hover { background: #dc2626; }
    .section-label {
      font-family: var(--font-display);
      font-size: 2.4rem; letter-spacing: .04em; color: var(--col-accent);
      position: relative; display: inline-block;
    }
    .section-sub { color: var(--col-muted); font-size: .95rem; margin-top: .3rem; }
    .badge {
      display: inline-block; padding: .2rem .7rem;
      background: rgba(240,165,0,.15); color: var(--col-accent);
      border: 1px solid rgba(240,165,0,.3); border-radius: 999px;
      font-size: .75rem; font-weight: 600; letter-spacing: .06em; text-transform: uppercase;
    }
    .star { color: var(--col-accent); }
    .divider { height: 1px; background: var(--col-border); margin-block: 2rem; }

    /* Page sections hidden by default */
    .page-section { display: none; }
    .page-section.active { display: block; }

    /* =============================================
       HEADER / NAV
    ============================================= */
    #header {
      position: sticky; top: 0; z-index: 1000;
      background: rgba(10,10,15,.92);
      backdrop-filter: blur(16px);
      border-bottom: 1px solid var(--col-border);
    }
    .header-inner {
      display: flex; align-items: center; gap: 1.5rem;
      height: 68px;
    }
    .logo {
      font-family: var(--font-display);
      font-size: 1.8rem; letter-spacing: .06em;
      color: var(--col-white); flex-shrink: 0;
    }
    .logo span { color: var(--col-accent); }
    .nav-links {
      display: flex; gap: .2rem; align-items: center; flex: 1; justify-content: center;
    }
    .nav-links a {
      padding: .4rem .85rem; border-radius: var(--radius-sm);
      font-size: .9rem; font-weight: 500; color: var(--col-muted);
      transition: var(--transition);
    }
    .nav-links a:hover, .nav-links a.active { color: var(--col-white); background: rgba(255,255,255,.07); }
    .header-actions { display: flex; align-items: center; gap: .6rem; margin-left: auto; }
    .search-wrap {
      display: flex; align-items: center;
      background: var(--col-surface); border: 1px solid var(--col-border);
      border-radius: var(--radius-sm); overflow: hidden;
    }
    .search-wrap input {
      background: transparent; border: none; outline: none;
      color: var(--col-text); padding: .45rem .9rem; font-size: .88rem; width: 180px;
    }
    .search-wrap button {
      background: var(--col-accent); color: #000; padding: .45rem .75rem;
      font-size: .9rem; transition: var(--transition);
    }
    .search-wrap button:hover { background: #ffb820; }
    .cart-btn {
      position: relative; background: rgba(240,165,0,.12);
      border: 1px solid rgba(240,165,0,.3); color: var(--col-accent);
      padding: .5rem .9rem; border-radius: var(--radius-sm);
      font-size: .9rem; transition: var(--transition);
      display: flex; align-items: center; gap: .4rem;
    }
    .cart-btn:hover { background: rgba(240,165,0,.22); }
    .cart-count {
      position: absolute; top: -6px; right: -6px;
      background: var(--col-danger); color: #fff;
      font-size: .68rem; font-weight: 700;
      width: 18px; height: 18px; border-radius: 50%;
      display: flex; align-items: center; justify-content: center;
    }
    .hamburger {
      display: none; flex-direction: column; gap: 5px;
      background: none; padding: .4rem;
    }
    .hamburger span {
      display: block; width: 24px; height: 2px;
      background: var(--col-text); border-radius: 2px; transition: var(--transition);
    }
    .mobile-menu {
      display: none; position: fixed; inset: 0; z-index: 999;
      background: var(--col-bg); flex-direction: column;
      padding: 5rem 2rem 2rem;
    }
    .mobile-menu.open { display: flex; }
    .mobile-menu a {
      font-size: 1.4rem; font-family: var(--font-display);
      letter-spacing: .06em; padding: .7rem 0;
      border-bottom: 1px solid var(--col-border); color: var(--col-text);
    }
    .mobile-menu a:hover { color: var(--col-accent); }
    .mobile-close {
      position: absolute; top: 1.2rem; right: 1.5rem;
      background: none; color: var(--col-text); font-size: 1.5rem;
    }

    /* =============================================
       HERO
    ============================================= */
    #hero {
      position: relative; overflow: hidden;
      min-height: 88vh; display: flex; align-items: center;
      background: radial-gradient(ellipse 80% 60% at 60% 40%, rgba(240,165,0,.10) 0%, transparent 70%),
                  linear-gradient(160deg, #0a0a0f 0%, #12121e 100%);
    }
    .hero-grid {
      display: grid; grid-template-columns: 1fr 1fr;
      align-items: center; gap: 4rem; padding-block: 6rem;
    }
    .hero-eyebrow { margin-bottom: 1rem; }
    .hero-title {
      font-family: var(--font-display);
      font-size: clamp(3rem, 7vw, 6rem);
      line-height: .95; letter-spacing: .02em; color: var(--col-white);
      margin-bottom: 1.2rem;
    }
    .hero-title span { color: var(--col-accent); }
    .hero-desc { color: var(--col-muted); font-size: 1.05rem; max-width: 460px; margin-bottom: 2rem; }
    .hero-cta { display: flex; gap: 1rem; flex-wrap: wrap; }
    .hero-stats {
      display: flex; gap: 2.5rem; margin-top: 3rem;
      border-top: 1px solid var(--col-border); padding-top: 1.5rem;
    }
    .hero-stat-num {
      font-family: var(--font-display); font-size: 2rem; color: var(--col-accent); display: block;
    }
    .hero-stat-lbl { font-size: .8rem; color: var(--col-muted); text-transform: uppercase; letter-spacing: .08em; }
    .hero-visual {
      position: relative; display: flex; align-items: center; justify-content: center;
    }
    .hero-ring {
      width: 420px; height: 420px; border-radius: 50%;
      border: 1px solid rgba(240,165,0,.15);
      display: flex; align-items: center; justify-content: center;
      position: relative; animation: spin-slow 30s linear infinite;
    }
    .hero-ring::before {
      content: ''; position: absolute; inset: 24px; border-radius: 50%;
      border: 1px dashed rgba(240,165,0,.1);
    }
    @keyframes spin-slow { to { transform: rotate(360deg); } }
    .hero-icon-grid {
      position: absolute; display: grid; grid-template-columns: repeat(3,1fr); gap: 1rem;
      animation: spin-slow 30s linear infinite reverse;
    }
    .hero-icon {
      width: 64px; height: 64px; border-radius: var(--radius-md);
      background: var(--col-card); border: 1px solid var(--col-border);
      display: flex; align-items: center; justify-content: center;
      font-size: 1.6rem; transition: var(--transition);
    }
    .hero-icon:hover { border-color: var(--col-accent); box-shadow: var(--shadow-glow); }
    .hero-bg-lines {
      position: absolute; inset: 0; pointer-events: none; opacity: .04;
      background-image: repeating-linear-gradient(0deg, var(--col-accent) 0 1px, transparent 1px 60px),
                        repeating-linear-gradient(90deg, var(--col-accent) 0 1px, transparent 1px 60px);
    }

    /* =============================================
       PRODUCT CARDS & GRID
    ============================================= */
    .products-section { padding-block: 5rem; }
    .section-header { text-align: center; margin-bottom: 3rem; }
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(270px, 1fr));
      gap: 1.5rem;
    }
    .product-card {
      background: var(--col-card); border: 1px solid var(--col-border);
      border-radius: var(--radius-lg); overflow: hidden;
      transition: var(--transition); position: relative;
    }
    .product-card:hover {
      border-color: rgba(240,165,0,.4);
      transform: translateY(-4px);
      box-shadow: var(--shadow-card), var(--shadow-glow);
    }
    .product-img-wrap {
      position: relative; height: 200px; overflow: hidden;
      background: var(--col-surface);
    }
    .product-img-wrap img {
      width: 100%; height: 100%; object-fit: cover;
      transition: transform .4s ease;
    }
    .product-card:hover .product-img-wrap img { transform: scale(1.05); }
    .product-placeholder {
      width: 100%; height: 100%;
      display: flex; flex-direction: column;
      align-items: center; justify-content: center;
      background: linear-gradient(135deg, var(--col-surface), var(--col-card));
      color: var(--col-muted); gap: .5rem;
    }
    .product-placeholder .ph-icon { font-size: 3rem; }
    .product-placeholder .ph-label { font-size: .78rem; letter-spacing: .05em; text-transform: uppercase; }
    .product-badge {
      position: absolute; top: .75rem; left: .75rem;
    }
    .product-wishlist {
      position: absolute; top: .75rem; right: .75rem;
      width: 32px; height: 32px; border-radius: 50%;
      background: rgba(10,10,15,.7); color: var(--col-muted);
      display: flex; align-items: center; justify-content: center;
      font-size: .9rem; transition: var(--transition); backdrop-filter: blur(4px);
    }
    .product-wishlist:hover { color: var(--col-danger); background: rgba(239,68,68,.15); }
    .product-body { padding: 1.2rem; }
    .product-category { font-size: .75rem; color: var(--col-accent); text-transform: uppercase; letter-spacing: .08em; margin-bottom: .3rem; }
    .product-name { font-weight: 700; font-size: 1rem; margin-bottom: .4rem; line-height: 1.3; }
    .product-desc { font-size: .84rem; color: var(--col-muted); margin-bottom: .8rem; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; }
    .product-rating { display: flex; align-items: center; gap: .4rem; margin-bottom: .9rem; font-size: .84rem; }
    .product-rating .count { color: var(--col-muted); }
    .product-footer { display: flex; align-items: center; justify-content: space-between; gap: .5rem; }
    .product-price { font-family: var(--font-display); font-size: 1.5rem; color: var(--col-accent); letter-spacing: .04em; }
    .add-to-cart {
      background: var(--col-accent); color: #000;
      padding: .5rem 1rem; border-radius: var(--radius-sm);
      font-size: .85rem; font-weight: 700;
      transition: var(--transition);
    }
    .add-to-cart:hover { background: #ffb820; transform: translateY(-1px); }
    .add-to-cart.added { background: var(--col-success); color: #fff; }

    /* =============================================
       CART SIDEBAR
    ============================================= */
    .cart-overlay {
      position: fixed; inset: 0; background: rgba(0,0,0,.6);
      z-index: 2000; opacity: 0; pointer-events: none; transition: opacity .3s;
    }
    .cart-overlay.open { opacity: 1; pointer-events: all; }
    .cart-sidebar {
      position: fixed; top: 0; right: 0; height: 100vh; width: min(420px, 100vw);
      background: var(--col-surface); border-left: 1px solid var(--col-border);
      z-index: 2001; display: flex; flex-direction: column;
      transform: translateX(100%); transition: transform .35s cubic-bezier(.4,0,.2,1);
    }
    .cart-sidebar.open { transform: translateX(0); }
    .cart-header {
      display: flex; align-items: center; justify-content: space-between;
      padding: 1.25rem 1.5rem; border-bottom: 1px solid var(--col-border);
    }
    .cart-title { font-family: var(--font-display); font-size: 1.5rem; letter-spacing: .05em; }
    .cart-close { background: none; color: var(--col-muted); font-size: 1.3rem; padding: .3rem; transition: var(--transition); }
    .cart-close:hover { color: var(--col-text); }
    .cart-items { flex: 1; overflow-y: auto; padding: 1rem 1.5rem; display: flex; flex-direction: column; gap: 1rem; }
    .cart-empty { text-align: center; padding: 3rem 1rem; color: var(--col-muted); }
    .cart-empty .ce-icon { font-size: 3rem; margin-bottom: .5rem; }
    .cart-item {
      display: flex; gap: 1rem; align-items: flex-start;
      background: var(--col-card); border: 1px solid var(--col-border);
      border-radius: var(--radius-md); padding: .9rem;
    }
    .ci-img {
      width: 64px; height: 64px; flex-shrink: 0; border-radius: var(--radius-sm);
      object-fit: cover; background: var(--col-surface);
    }
    .ci-img-ph {
      width: 64px; height: 64px; flex-shrink: 0; border-radius: var(--radius-sm);
      background: var(--col-bg); display: flex; align-items: center; justify-content: center;
      font-size: 1.5rem; color: var(--col-muted);
    }
    .ci-info { flex: 1; }
    .ci-name { font-weight: 600; font-size: .9rem; margin-bottom: .2rem; }
    .ci-price { color: var(--col-accent); font-weight: 700; font-size: .9rem; }
    .ci-qty {
      display: flex; align-items: center; gap: .5rem; margin-top: .5rem;
    }
    .ci-qty button {
      width: 26px; height: 26px; border-radius: var(--radius-sm);
      background: var(--col-border); color: var(--col-text);
      display: flex; align-items: center; justify-content: center; font-size: .9rem; transition: var(--transition);
    }
    .ci-qty button:hover { background: var(--col-accent); color: #000; }
    .ci-qty span { font-weight: 600; min-width: 20px; text-align: center; }
    .ci-remove { background: none; color: var(--col-muted); font-size: .85rem; padding: .2rem; transition: var(--transition); }
    .ci-remove:hover { color: var(--col-danger); }
    .cart-footer { padding: 1.25rem 1.5rem; border-top: 1px solid var(--col-border); }
    .cart-subtotal { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem; font-size: 1rem; }
    .cart-subtotal strong { font-family: var(--font-display); font-size: 1.6rem; color: var(--col-accent); }

    /* =============================================
       CHECKOUT SECTION
    ============================================= */
    #checkout { padding-block: 5rem; }
    .checkout-grid { display: grid; grid-template-columns: 1fr 380px; gap: 2rem; }
    .checkout-form-card, .checkout-summary-card {
      background: var(--col-card); border: 1px solid var(--col-border);
      border-radius: var(--radius-lg); padding: 2rem;
    }
    .form-title { font-family: var(--font-display); font-size: 1.5rem; letter-spacing: .05em; margin-bottom: 1.5rem; }
    .form-group { margin-bottom: 1.2rem; }
    .form-group label { display: block; font-size: .85rem; font-weight: 600; margin-bottom: .4rem; color: var(--col-muted); }
    .form-group input, .form-group select, .form-group textarea {
      width: 100%; background: var(--col-surface); border: 1px solid var(--col-border);
      border-radius: var(--radius-sm); padding: .65rem .9rem;
      color: var(--col-text); font-size: .9rem; outline: none; transition: border-color .2s;
    }
    .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
      border-color: var(--col-accent);
    }
    .form-row { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; }
    .checkout-items { margin-bottom: 1.5rem; }
    .co-item { display: flex; gap: .8rem; align-items: center; padding: .7rem 0; border-bottom: 1px solid var(--col-border); }
    .co-item:last-child { border-bottom: none; }
    .co-thumb {
      width: 52px; height: 52px; border-radius: var(--radius-sm);
      object-fit: cover; background: var(--col-surface); flex-shrink: 0;
    }
    .co-thumb-ph {
      width: 52px; height: 52px; border-radius: var(--radius-sm);
      background: var(--col-bg); display: flex; align-items: center; justify-content: center;
      font-size: 1.2rem; color: var(--col-muted); flex-shrink: 0;
    }
    .co-info { flex: 1; }
    .co-name { font-size: .88rem; font-weight: 600; }
    .co-qty-price { font-size: .82rem; color: var(--col-muted); }
    .co-price { font-weight: 700; color: var(--col-accent); font-size: .9rem; }
    .summary-row { display: flex; justify-content: space-between; padding: .4rem 0; font-size: .9rem; color: var(--col-muted); }
    .summary-row.total { font-size: 1.1rem; font-weight: 700; color: var(--col-text); border-top: 1px solid var(--col-border); margin-top: .5rem; padding-top: .7rem; }
    .summary-row.total span:last-child { color: var(--col-accent); font-family: var(--font-display); font-size: 1.4rem; }

    /* =============================================
       ORDERS PAGE
    ============================================= */
    #orders { padding-block: 5rem; }
    .orders-empty { text-align: center; padding: 4rem 1rem; color: var(--col-muted); }
    .orders-empty .oe-icon { font-size: 4rem; margin-bottom: 1rem; }
    .order-card {
      background: var(--col-card); border: 1px solid var(--col-border);
      border-radius: var(--radius-lg); overflow: hidden; margin-bottom: 1.5rem;
    }
    .order-header {
      display: flex; flex-wrap: wrap; gap: 1rem; align-items: center; justify-content: space-between;
      padding: 1.2rem 1.5rem; background: var(--col-surface); border-bottom: 1px solid var(--col-border);
    }
    .order-id { font-family: var(--font-display); font-size: 1.1rem; letter-spacing: .05em; }
    .order-date { font-size: .82rem; color: var(--col-muted); }
    .order-status {
      padding: .25rem .8rem; border-radius: 999px; font-size: .75rem; font-weight: 600; text-transform: uppercase; letter-spacing: .06em;
    }
    .status-processing { background: rgba(240,165,0,.15); color: var(--col-accent); border: 1px solid rgba(240,165,0,.3); }
    .status-shipped { background: rgba(59,130,246,.15); color: #60a5fa; border: 1px solid rgba(59,130,246,.3); }
    .status-delivered { background: rgba(34,197,94,.15); color: var(--col-success); border: 1px solid rgba(34,197,94,.3); }
    .order-items-grid { display: flex; flex-wrap: wrap; gap: .8rem; padding: 1.2rem 1.5rem; }
    .order-item-thumb {
      width: 72px; height: 72px; border-radius: var(--radius-sm);
      object-fit: cover; border: 1px solid var(--col-border);
    }
    .order-item-ph {
      width: 72px; height: 72px; border-radius: var(--radius-sm);
      background: var(--col-surface); display: flex; align-items: center; justify-content: center;
      font-size: 1.5rem; border: 1px solid var(--col-border); color: var(--col-muted);
    }
    .order-footer { display: flex; justify-content: space-between; align-items: center; padding: .9rem 1.5rem; border-top: 1px solid var(--col-border); }
    .order-total { font-family: var(--font-display); font-size: 1.4rem; color: var(--col-accent); }

    /* =============================================
       TESTIMONIALS
    ============================================= */
    #testimonials { padding-block: 5rem; background: var(--col-surface); }
    .testimonials-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 1.5rem; margin-top: 2.5rem; }
    .testimonial-card {
      background: var(--col-card); border: 1px solid var(--col-border);
      border-radius: var(--radius-lg); padding: 1.5rem;
      transition: var(--transition);
    }
    .testimonial-card:hover { border-color: rgba(240,165,0,.3); transform: translateY(-3px); }
    .testimonial-stars { font-size: 1rem; margin-bottom: .8rem; }
    .testimonial-text { color: var(--col-muted); font-size: .92rem; line-height: 1.7; margin-bottom: 1rem; font-style: italic; }
    .testimonial-author { display: flex; align-items: center; gap: .75rem; }
    .testimonial-avatar {
      width: 40px; height: 40px; border-radius: 50%;
      background: linear-gradient(135deg, var(--col-accent), var(--col-accent2));
      display: flex; align-items: center; justify-content: center;
      font-weight: 700; font-size: .9rem; color: #000; flex-shrink: 0;
    }
    .testimonial-name { font-weight: 600; font-size: .9rem; }
    .testimonial-role { font-size: .78rem; color: var(--col-muted); }

    /* =============================================
       FAQ
    ============================================= */
    #faq { padding-block: 5rem; }
    .faq-list { max-width: 760px; margin: 2.5rem auto 0; }
    .faq-item { border: 1px solid var(--col-border); border-radius: var(--radius-md); margin-bottom: .75rem; overflow: hidden; }
    .faq-q {
      width: 100%; background: var(--col-card); color: var(--col-text);
      padding: 1.1rem 1.3rem; text-align: left; font-weight: 600; font-size: .95rem;
      display: flex; justify-content: space-between; align-items: center; gap: 1rem;
      transition: var(--transition);
    }
    .faq-q:hover { background: var(--col-surface); }
    .faq-q span { transition: transform .3s; }
    .faq-a { background: var(--col-surface); padding: 0 1.3rem; max-height: 0; overflow: hidden; transition: max-height .35s ease, padding .35s ease; color: var(--col-muted); font-size: .9rem; line-height: 1.7; }
    .faq-item.open .faq-a { max-height: 300px; padding: 1rem 1.3rem; }
    .faq-item.open .faq-q span { transform: rotate(180deg); }

    /* =============================================
       NEWSLETTER
    ============================================= */
    #newsletter {
      padding-block: 4rem;
      background: linear-gradient(135deg, rgba(240,165,0,.08), rgba(224,92,0,.05));
      border-top: 1px solid var(--col-border); border-bottom: 1px solid var(--col-border);
    }
    .newsletter-inner { text-align: center; max-width: 560px; margin-inline: auto; }
    .newsletter-title { font-family: var(--font-display); font-size: 2.2rem; letter-spacing: .04em; margin-bottom: .5rem; }
    .newsletter-sub { color: var(--col-muted); font-size: .95rem; margin-bottom: 1.5rem; }
    .newsletter-form { display: flex; gap: .75rem; max-width: 420px; margin-inline: auto; }
    .newsletter-form input {
      flex: 1; background: var(--col-card); border: 1px solid var(--col-border);
      border-radius: var(--radius-sm); padding: .7rem 1rem;
      color: var(--col-text); font-size: .9rem; outline: none;
    }
    .newsletter-form input:focus { border-color: var(--col-accent); }

    /* =============================================
       STATIC PAGES (About, Policy, etc.)
    ============================================= */
    .static-page { padding-block: 5rem; max-width: 820px; margin-inline: auto; }
    .static-page h1 { font-family: var(--font-display); font-size: 2.8rem; letter-spacing: .04em; color: var(--col-accent); margin-bottom: 1rem; }
    .static-page h2 { font-family: var(--font-display); font-size: 1.6rem; letter-spacing: .04em; margin-top: 2rem; margin-bottom: .6rem; }
    .static-page p { color: var(--col-muted); line-height: 1.8; margin-bottom: 1rem; }
    .static-page ul { padding-left: 1.5rem; color: var(--col-muted); line-height: 1.8; margin-bottom: 1rem; }
    .static-page ul li { list-style: disc; margin-bottom: .3rem; }

    /* Contact Form */
    .contact-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 3rem; align-items: start; }
    .contact-info-item { display: flex; gap: 1rem; margin-bottom: 1.5rem; }
    .contact-icon { font-size: 1.5rem; color: var(--col-accent); flex-shrink: 0; }
    .contact-form-card { background: var(--col-card); border: 1px solid var(--col-border); border-radius: var(--radius-lg); padding: 2rem; }

    /* =============================================
       SEARCH RESULTS
    ============================================= */
    #search-results { padding-block: 5rem; }
    .search-results-header { margin-bottom: 2rem; }

    /* =============================================
       TOAST NOTIFICATION
    ============================================= */
    .toast-container { position: fixed; bottom: 2rem; right: 2rem; z-index: 9999; display: flex; flex-direction: column; gap: .5rem; }
    .toast {
      background: var(--col-card); border: 1px solid var(--col-accent);
      color: var(--col-text); padding: .85rem 1.3rem; border-radius: var(--radius-md);
      font-size: .9rem; display: flex; align-items: center; gap: .6rem;
      box-shadow: var(--shadow-card); animation: slide-in .3s ease;
      max-width: 320px;
    }
    .toast.error { border-color: var(--col-danger); }
    .toast.success { border-color: var(--col-success); }
    @keyframes slide-in { from { transform: translateX(100%); opacity: 0; } to { transform: translateX(0); opacity: 1; } }
    @keyframes slide-out { to { transform: translateX(120%); opacity: 0; } }

    /* =============================================
       FOOTER
    ============================================= */
    #footer {
      background: var(--col-surface); border-top: 1px solid var(--col-border); padding-top: 4rem;
    }
    .footer-grid { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; gap: 2.5rem; margin-bottom: 3rem; }
    .footer-brand .logo { margin-bottom: .8rem; }
    .footer-brand p { color: var(--col-muted); font-size: .88rem; line-height: 1.7; max-width: 280px; }
    .footer-social { display: flex; gap: .6rem; margin-top: 1.2rem; }
    .social-btn {
      width: 36px; height: 36px; border-radius: var(--radius-sm);
      background: var(--col-card); border: 1px solid var(--col-border);
      display: flex; align-items: center; justify-content: center;
      color: var(--col-muted); font-size: .85rem; transition: var(--transition);
    }
    .social-btn:hover { background: var(--col-accent); color: #000; border-color: var(--col-accent); }
    .footer-col-title { font-weight: 700; font-size: .9rem; text-transform: uppercase; letter-spacing: .07em; margin-bottom: 1rem; color: var(--col-white); }
    .footer-links { display: flex; flex-direction: column; gap: .5rem; }
    .footer-links a { font-size: .88rem; color: var(--col-muted); transition: color .2s; }
    .footer-links a:hover { color: var(--col-accent); }
    .footer-bottom {
      border-top: 1px solid var(--col-border); padding-block: 1.5rem;
      display: flex; flex-wrap: wrap; gap: 1rem;
      justify-content: space-between; align-items: center; font-size: .8rem; color: var(--col-muted);
    }
    .footer-disclaimer {
      background: rgba(240,165,0,.04); border: 1px solid rgba(240,165,0,.1);
      border-radius: var(--radius-sm); padding: .8rem 1rem; margin-bottom: 1rem;
      font-size: .78rem; color: var(--col-muted); line-height: 1.6;
    }

    /* =============================================
       BACK TO TOP
    ============================================= */
    #back-to-top {
      position: fixed; bottom: 2rem; left: 2rem; z-index: 500;
      width: 44px; height: 44px; border-radius: 50%;
      background: var(--col-accent); color: #000;
      display: flex; align-items: center; justify-content: center; font-size: 1.1rem;
      opacity: 0; pointer-events: none; transition: var(--transition);
      box-shadow: 0 4px 16px rgba(240,165,0,.3);
    }
    #back-to-top.visible { opacity: 1; pointer-events: all; }
    #back-to-top:hover { transform: translateY(-3px); background: #ffb820; }

    /* =============================================
       ORDER CONFIRMATION MODAL
    ============================================= */
    .modal-overlay {
      position: fixed; inset: 0; background: rgba(0,0,0,.7); z-index: 3000;
      display: none; align-items: center; justify-content: center; padding: 1.5rem;
    }
    .modal-overlay.open { display: flex; }
    .modal-card {
      background: var(--col-card); border: 1px solid var(--col-border);
      border-radius: var(--radius-lg); padding: 2.5rem; max-width: 480px; width: 100%;
      text-align: center; position: relative;
    }
    .modal-icon { font-size: 3.5rem; margin-bottom: 1rem; }
    .modal-title { font-family: var(--font-display); font-size: 2rem; letter-spacing: .04em; margin-bottom: .5rem; }
    .modal-sub { color: var(--col-muted); font-size: .95rem; margin-bottom: 1.5rem; }
    .modal-order-id {
      background: var(--col-surface); border: 1px solid var(--col-border);
      border-radius: var(--radius-sm); padding: .6rem 1rem; font-size: .9rem;
      color: var(--col-accent); font-family: monospace; margin-bottom: 1.5rem; display: inline-block;
    }

    /* =============================================
       RESPONSIVE
    ============================================= */
    @media (max-width: 1024px) {
      .footer-grid { grid-template-columns: 1fr 1fr; }
      .checkout-grid { grid-template-columns: 1fr; }
      .hero-grid { grid-template-columns: 1fr; }
      .hero-visual { display: none; }
    }
    @media (max-width: 768px) {
      .nav-links { display: none; }
      .search-wrap { display: none; }
      .hamburger { display: flex; }
      .footer-grid { grid-template-columns: 1fr; }
      .contact-grid { grid-template-columns: 1fr; }
      .form-row { grid-template-columns: 1fr; }
      .hero-stats { gap: 1.5rem; }
      .newsletter-form { flex-direction: column; }
      .hero-cta { flex-direction: column; }
    }
    @media (max-width: 480px) {
      .products-grid { grid-template-columns: 1fr; }
    }

    /* =============================================
       ANIMATIONS
    ============================================= */
    @keyframes fade-up {
      from { opacity: 0; transform: translateY(28px); }
      to   { opacity: 1; transform: translateY(0); }
    }
    .fade-up { animation: fade-up .6s ease both; }
    .delay-1 { animation-delay: .1s; }
    .delay-2 { animation-delay: .2s; }
    .delay-3 { animation-delay: .3s; }

    /* Scroll reveal */
    .reveal { opacity: 0; transform: translateY(24px); transition: opacity .6s ease, transform .6s ease; }
    .reveal.visible { opacity: 1; transform: translateY(0); }

    /* Loading skeleton */
    .skeleton { background: linear-gradient(90deg, var(--col-card) 25%, var(--col-border) 50%, var(--col-card) 75%); background-size: 200% 100%; animation: shimmer 1.5s infinite; border-radius: var(--radius-sm); }
    @keyframes shimmer { to { background-position: -200% 0; } }

    /* Category filter pills */
    .filter-pills { display: flex; flex-wrap: wrap; gap: .5rem; margin-bottom: 2rem; justify-content: center; }
    .filter-pill {
      padding: .4rem 1.1rem; border-radius: 999px; border: 1px solid var(--col-border);
      background: var(--col-card); color: var(--col-muted); font-size: .82rem; font-weight: 600;
      cursor: pointer; transition: var(--transition);
    }
    .filter-pill:hover, .filter-pill.active { background: var(--col-accent); color: #000; border-color: var(--col-accent); }

    /* Feature strip */
    .features-strip { display: flex; flex-wrap: wrap; gap: 1px; background: var(--col-border); margin-block: 3rem; border-radius: var(--radius-md); overflow: hidden; }
    .feature-item { flex: 1; min-width: 160px; background: var(--col-card); padding: 1.5rem; display: flex; align-items: center; gap: 1rem; }
    .feature-icon { font-size: 1.8rem; }
    .feature-text strong { display: block; font-size: .9rem; margin-bottom: .2rem; }
    .feature-text span { font-size: .78rem; color: var(--col-muted); }
  </style>
</head>
<body>

<!-- =============================================
     PRODUCTS DATA — SINGLE SOURCE OF TRUTH
============================================= -->
<script>
  /**
   * AutoGear Pro — Product Catalog
   * All product cards, cart items, checkout items, and order history
   * are generated dynamically from this array.
   */
  const products = [
    {
      id: 1,
      name: "MagMount Pro 360°",
      category: "Phone Mounts",
      price: 29.99,
      image: "images/a.png", // Add Product Image URL Here: MagMount Pro 360°
      description: "Universal magnetic phone mount with 360° rotation, fits all dashboards and windshields. Strong magnet, one-hand operation.",
      rating: 4.7,
      reviews: 312,
      badge: "Best Seller",
      emoji: "📱"
    },
    {
      id: 2,
      name: "TrunkMaster Organizer",
      category: "Car Organizers",
      price: 44.99,
      image: "images/b.png", // Add Product Image URL Here: TrunkMaster Organizer
      description: "Collapsible trunk organizer with 6 compartments, non-slip base, and carry handles. Keeps your boot tidy at all times.",
      rating: 4.5,
      reviews: 189,
      badge: "Popular",
      emoji: "🧺"
    },
    {
      id: 3,
      name: "ComfortDrive Seat Cushion",
      category: "Seat Cushions",
      price: 54.99,
      image: "images/c.png", // Add Product Image URL Here: ComfortDrive Seat Cushion
      description: "Memory foam seat cushion with coccyx cutout and non-slip cover. Reduces fatigue on long drives and supports posture.",
      rating: 4.8,
      reviews: 421,
      badge: "Top Rated",
      emoji: "🪑"
    },
    {
      id: 4,
      name: "DashVision 4K Cam",
      category: "Dashboard Cameras",
      price: 119.99,
      image: "images/d.png", // Add Product Image URL Here: DashVision 4K Cam
      description: "4K ultra-HD dashcam with night vision, loop recording, G-sensor, and 150° wide-angle lens. Built-in GPS logging.",
      rating: 4.6,
      reviews: 267,
      badge: "New",
      emoji: "📹"
    },
    {
      id: 5,
      name: "AromaRide Air Freshener",
      category: "Air Fresheners",
      price: 14.99,
      image: "images/e.png", // Add Product Image URL Here: AromaRide Air Freshener
      description: "Long-lasting vent-clip air freshener with bamboo charcoal and natural essential oil blends. Eliminates odours naturally.",
      rating: 4.4,
      reviews: 98,
      badge: null,
      emoji: "🌿"
    },
    {
      id: 6,
      name: "ShineKit Pro Cleaning Set",
      category: "Cleaning Kits",
      price: 39.99,
      image: "images/f.png", // Add Product Image URL Here: ShineKit Pro Cleaning Set
      description: "Complete 8-piece car detailing kit with microfibre cloths, interior cleaner, glass spray, and foam applicator pads.",
      rating: 4.9,
      reviews: 503,
      badge: "Best Value",
      emoji: "✨"
    }
  ];

  /* ---- Cart State ---- */
  let cart = JSON.parse(localStorage.getItem('ag_cart') || '[]');
  let orders = JSON.parse(localStorage.getItem('ag_orders') || '[]');
  let currentPage = 'home';
  let activeFilter = 'All';
  let searchQuery = '';

  function saveCart() { localStorage.setItem('ag_cart', JSON.stringify(cart)); }
  function saveOrders() { localStorage.setItem('ag_orders', JSON.stringify(orders)); }

  /* ---- Helpers ---- */
  function getProduct(id) { return products.find(p => p.id === id); }
  function cartTotal() { return cart.reduce((s, i) => s + i.price * i.qty, 0); }
  function cartCount() { return cart.reduce((s, i) => s + i.qty, 0); }
  function renderStars(r) {
    const full = Math.floor(r), half = r % 1 >= 0.5;
    let s = '';
    for (let i = 0; i < full; i++) s += '★';
    if (half) s += '½';
    return s;
  }
  function formatPrice(p) { return '$' + p.toFixed(2); }
  function genOrderId() { return 'AG-' + Date.now().toString(36).toUpperCase(); }
  function formatDate(ts) { return new Date(ts).toLocaleDateString('en-US', { year:'numeric', month:'short', day:'numeric' }); }

  function productImageEl(product, w, h, cls) {
    if (product.image) {
      return `<img src="${product.image}" alt="${product.name}" class="${cls}" width="${w}" height="${h}" loading="lazy" />`;
    }
    return `<div class="${cls.includes('ci-') ? 'ci-img-ph' : cls.includes('co-') ? 'co-thumb-ph' : cls.includes('order-item') ? 'order-item-ph' : 'product-placeholder'}" aria-hidden="true">
      <span class="ph-icon">${product.emoji || '📦'}</span>
      ${cls.includes('product-placeholder') ? `<span class="ph-label">${product.category}</span>` : ''}
    </div>`;
  }
</script>

<!-- =============================================
     HEADER
============================================= -->
<header id="header" role="banner">
  <div class="container header-inner">
    <a href="#home" class="logo" onclick="navigateTo('home')" aria-label="AutoGear Pro Home">
      AUTO<span>GEAR</span> PRO
    </a>

    <nav class="nav-links" role="navigation" aria-label="Main navigation">
      <a href="#home" onclick="navigateTo('home')">Home</a>
      <a href="#shop" onclick="navigateTo('shop')">Shop</a>
      <a href="#orders" onclick="navigateTo('orders')">My Orders</a>
      <a href="#about" onclick="navigateTo('about')">About</a>
      <a href="#contact" onclick="navigateTo('contact')">Contact</a>
    </nav>

    <div class="header-actions">
      <div class="search-wrap" role="search">
        <input type="search" id="header-search" placeholder="Search accessories…" aria-label="Search products"
               onkeydown="if(event.key==='Enter') doSearch()" />
        <button onclick="doSearch()" aria-label="Search">🔍</button>
      </div>
      <button class="cart-btn" onclick="toggleCart()" aria-label="Open cart">
        🛒 Cart
        <span class="cart-count" id="cart-count" aria-live="polite">0</span>
      </button>
      <button class="hamburger" onclick="toggleMobileMenu()" aria-label="Open menu" aria-expanded="false" id="hamburger-btn">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<!-- Mobile Menu -->
<nav class="mobile-menu" id="mobile-menu" role="navigation" aria-label="Mobile navigation">
  <button class="mobile-close" onclick="toggleMobileMenu()" aria-label="Close menu">✕</button>
  <a href="#home" onclick="navigateTo('home');toggleMobileMenu()">Home</a>
  <a href="#shop" onclick="navigateTo('shop');toggleMobileMenu()">Shop</a>
  <a href="#orders" onclick="navigateTo('orders');toggleMobileMenu()">My Orders</a>
  <a href="#about" onclick="navigateTo('about');toggleMobileMenu()">About Us</a>
  <a href="#contact" onclick="navigateTo('contact');toggleMobileMenu()">Contact</a>
  <a href="#privacy" onclick="navigateTo('privacy');toggleMobileMenu()">Privacy Policy</a>
  <a href="#terms" onclick="navigateTo('terms');toggleMobileMenu()">Terms &amp; Conditions</a>
</nav>

<!-- =============================================
     CART SIDEBAR
============================================= -->
<div class="cart-overlay" id="cart-overlay" onclick="toggleCart()" aria-hidden="true"></div>
<aside class="cart-sidebar" id="cart-sidebar" role="complementary" aria-label="Shopping cart">
  <div class="cart-header">
    <h2 class="cart-title">Your Cart</h2>
    <button class="cart-close" onclick="toggleCart()" aria-label="Close cart">✕</button>
  </div>
  <div class="cart-items" id="cart-items-list" aria-live="polite"></div>
  <div class="cart-footer" id="cart-footer">
    <div class="cart-subtotal">
      <span>Subtotal</span>
      <strong id="cart-total-display">$0.00</strong>
    </div>
    <button class="btn btn-primary" style="width:100%;justify-content:center;margin-bottom:.6rem" onclick="toggleCart();navigateTo('checkout')">
      Proceed to Checkout →
    </button>
    <button class="btn btn-ghost" style="width:100%;justify-content:center" onclick="toggleCart()">
      Continue Shopping
    </button>
  </div>
</aside>

<!-- =============================================
     MAIN CONTENT — PAGE ROUTER
============================================= -->
<main id="main-content" role="main">

  <!-- ========== HOME PAGE ========== -->
  <section id="page-home" class="page-section active" aria-label="Home page">

    <!-- HERO -->
    <section id="hero" aria-label="Hero banner">
      <div class="hero-bg-lines" aria-hidden="true"></div>
      <div class="container">
        <div class="hero-grid">
          <div class="hero-content">
            <div class="hero-eyebrow fade-up">
              <span class="badge">🚗 Premium Car Accessories</span>
            </div>
            <h1 class="hero-title fade-up delay-1">
              UPGRADE<br/>YOUR <span>DRIVE</span>
            </h1>
            <p class="hero-desc fade-up delay-2">
              Discover handpicked, high-quality car accessories crafted for comfort, safety, and style. From dashcams to organizers — your car deserves the best.
            </p>
            <div class="hero-cta fade-up delay-3">
              <button class="btn btn-primary" onclick="navigateTo('shop')">Shop Now →</button>
              <button class="btn btn-outline" onclick="document.getElementById('featured').scrollIntoView({behavior:'smooth'})">Browse Products</button>
            </div>
            <div class="hero-stats fade-up delay-3">
              <div>
                <span class="hero-stat-num">6K+</span>
                <span class="hero-stat-lbl">Happy Drivers</span>
              </div>
              <div>
                <span class="hero-stat-num">4.8★</span>
                <span class="hero-stat-lbl">Avg Rating</span>
              </div>
              <div>
                <span class="hero-stat-num">Free</span>
                <span class="hero-stat-lbl">Returns</span>
              </div>
            </div>
          </div>
          <div class="hero-visual" aria-hidden="true">
            <div class="hero-ring">
              <div class="hero-icon-grid" id="hero-icon-grid"></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FEATURES STRIP -->
    <div class="container">
      <div class="features-strip reveal">
        <div class="feature-item">
          <span class="feature-icon">🚚</span>
          <div class="feature-text"><strong>Free Shipping</strong><span>On orders over $49</span></div>
        </div>
        <div class="feature-item">
          <span class="feature-icon">↩️</span>
          <div class="feature-text"><strong>30-Day Returns</strong><span>Hassle-free policy</span></div>
        </div>
        <div class="feature-item">
          <span class="feature-icon">🔒</span>
          <div class="feature-text"><strong>Secure Checkout</strong><span>256-bit encryption</span></div>
        </div>
        <div class="feature-item">
          <span class="feature-icon">🎧</span>
          <div class="feature-text"><strong>24/7 Support</strong><span>We're always here</span></div>
        </div>
      </div>
    </div>

    <!-- FEATURED PRODUCTS -->
    <section class="products-section" id="featured" aria-label="Featured products">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-label">Featured Products</h2>
          <p class="section-sub">Our most loved accessories, hand-picked for you</p>
        </div>
        <div class="products-grid" id="featured-grid"></div>
        <div style="text-align:center;margin-top:2.5rem;">
          <button class="btn btn-outline reveal" onclick="navigateTo('shop')">View All Products →</button>
        </div>
      </div>
    </section>

    <!-- TESTIMONIALS -->
    <section id="testimonials" aria-label="Customer testimonials">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-label">What Drivers Say</h2>
          <p class="section-sub">Real reviews from real customers</p>
        </div>
        <div class="testimonials-grid" id="testimonials-grid"></div>
      </div>
    </section>

    <!-- FAQ -->
    <section id="faq" aria-label="Frequently asked questions">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-label">FAQ</h2>
          <p class="section-sub">Got questions? We've got answers.</p>
        </div>
        <div class="faq-list" id="faq-list"></div>
      </div>
    </section>

    <!-- NEWSLETTER -->
    <section id="newsletter" aria-label="Newsletter signup">
      <div class="container">
        <div class="newsletter-inner reveal">
          <h2 class="newsletter-title">Stay in the Fast Lane</h2>
          <p class="newsletter-sub">Subscribe for exclusive deals, new arrivals, and driving tips delivered to your inbox.</p>
          <div class="newsletter-form">
            <input type="email" id="nl-email" placeholder="your@email.com" aria-label="Email address" />
            <button class="btn btn-primary" onclick="subscribeNewsletter()">Subscribe</button>
          </div>
        </div>
      </div>
    </section>

  </section><!-- /page-home -->

  <!-- ========== SHOP PAGE ========== -->
  <section id="page-shop" class="page-section" aria-label="Shop">
    <div class="products-section">
      <div class="container">
        <div class="section-header reveal">
          <h2 class="section-label">All Products</h2>
          <p class="section-sub">Browse our full range of premium car accessories</p>
        </div>
        <div class="filter-pills" id="shop-filters"></div>
        <div class="products-grid" id="shop-grid"></div>
      </div>
    </div>
  </section>

  <!-- ========== SEARCH RESULTS PAGE ========== -->
  <section id="page-search" class="page-section" aria-label="Search results">
    <section id="search-results">
      <div class="container">
        <div class="search-results-header reveal">
          <h2 class="section-label" id="search-heading">Results</h2>
          <p class="section-sub" id="search-sub"></p>
        </div>
        <div class="products-grid" id="search-grid"></div>
      </div>
    </section>
  </section>

  <!-- ========== CHECKOUT PAGE ========== -->
  <section id="page-checkout" class="page-section" aria-label="Checkout">
    <section id="checkout">
      <div class="container">
        <div class="section-header" style="text-align:left;margin-bottom:2rem">
          <h2 class="section-label">Checkout</h2>
          <p class="section-sub">Complete your order securely</p>
        </div>
        <div class="checkout-grid">
          <!-- Form -->
          <div class="checkout-form-card">
            <h3 class="form-title">Shipping Details</h3>
            <div class="form-row">
              <div class="form-group">
                <label for="co-first">First Name *</label>
                <input type="text" id="co-first" placeholder="John" required />
              </div>
              <div class="form-group">
                <label for="co-last">Last Name *</label>
                <input type="text" id="co-last" placeholder="Doe" required />
              </div>
            </div>
            <div class="form-group">
              <label for="co-email">Email Address *</label>
              <input type="email" id="co-email" placeholder="john@example.com" required />
            </div>
            <div class="form-group">
              <label for="co-phone">Phone Number</label>
              <input type="tel" id="co-phone" placeholder="+1 555 000 0000" />
            </div>
            <div class="form-group">
              <label for="co-address">Street Address *</label>
              <input type="text" id="co-address" placeholder="123 Main Street" required />
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="co-city">City *</label>
                <input type="text" id="co-city" placeholder="New York" required />
              </div>
              <div class="form-group">
                <label for="co-zip">ZIP / Postal Code *</label>
                <input type="text" id="co-zip" placeholder="10001" required />
              </div>
            </div>
            <div class="form-group">
              <label for="co-country">Country *</label>
              <select id="co-country">
                <option>United States</option>
                <option>Canada</option>
                <option>United Kingdom</option>
                <option>Australia</option>
                <option>India</option>
                <option>Other</option>
              </select>
            </div>
            <div class="divider"></div>
            <h3 class="form-title">Payment Details</h3>
            <div class="form-group">
              <label for="co-card">Card Number *</label>
              <input type="text" id="co-card" placeholder="1234 5678 9012 3456" maxlength="19" oninput="formatCard(this)" required />
            </div>
            <div class="form-row">
              <div class="form-group">
                <label for="co-exp">Expiry Date *</label>
                <input type="text" id="co-exp" placeholder="MM / YY" maxlength="7" required />
              </div>
              <div class="form-group">
                <label for="co-cvv">CVV *</label>
                <input type="text" id="co-cvv" placeholder="•••" maxlength="4" required />
              </div>
            </div>
            <button class="btn btn-primary" style="width:100%;justify-content:center;padding:.85rem" onclick="placeOrder()">
              🔒 Place Order Securely
            </button>
            <p style="font-size:.78rem;color:var(--col-muted);text-align:center;margin-top:.6rem">
              * This is a demo store. No real payment is processed.
            </p>
          </div>
          <!-- Summary -->
          <div>
            <div class="checkout-summary-card" id="checkout-summary">
              <h3 class="form-title">Order Summary</h3>
              <div class="checkout-items" id="co-items-list"></div>
              <div class="summary-row"><span>Subtotal</span><span id="co-subtotal">$0.00</span></div>
              <div class="summary-row"><span>Shipping</span><span id="co-shipping">Free</span></div>
              <div class="summary-row"><span>Tax (8%)</span><span id="co-tax">$0.00</span></div>
              <div class="summary-row total"><span>Total</span><span id="co-total">$0.00</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>

  <!-- ========== ORDERS PAGE ========== -->
  <section id="page-orders" class="page-section" aria-label="My orders">
    <section id="orders">
      <div class="container">
        <div class="section-header" style="text-align:left;margin-bottom:2rem">
          <h2 class="section-label">My Orders</h2>
          <p class="section-sub">Track and review your past purchases</p>
        </div>
        <div id="orders-list"></div>
      </div>
    </section>
  </section>

  <!-- ========== ABOUT PAGE ========== -->
  <section id="page-about" class="page-section" aria-label="About us">
    <div class="container">
      <div class="static-page">
        <h1>About AutoGear Pro</h1>
        <p>AutoGear Pro was founded by a passionate team of automotive enthusiasts who believed that upgrading your car shouldn't be complicated or expensive. We're on a mission to bring premium, thoughtfully designed car accessories to everyday drivers.</p>
        <h2>Our Mission</h2>
        <p>To make every drive safer, more comfortable, and more enjoyable by curating the finest car accessories from trusted manufacturers and delivering them directly to your doorstep.</p>
        <h2>Why Choose Us?</h2>
        <ul>
          <li>Rigorous product testing by our in-house automotive team</li>
          <li>Curated catalog — we only sell what we'd use ourselves</li>
          <li>Transparent pricing with no hidden fees</li>
          <li>30-day hassle-free return policy on all orders</li>
          <li>Dedicated customer support available 7 days a week</li>
        </ul>
        <h2>Our Values</h2>
        <p>Quality, transparency, and customer satisfaction are at the heart of everything we do. We source eco-friendly packaging, work with suppliers who meet ethical manufacturing standards, and continuously improve our service based on your feedback.</p>
        <h2>The Team</h2>
        <p>Our small but mighty team is based in Austin, Texas. We're car lovers, road-trip enthusiasts, and detail-obsessed product testers. When we're not shipping orders, we're probably on the highway testing our latest arrivals.</p>
        <div style="margin-top:2rem">
          <button class="btn btn-primary" onclick="navigateTo('shop')">Shop Our Products →</button>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT PAGE ========== -->
  <section id="page-contact" class="page-section" aria-label="Contact us">
    <div class="container">
      <div class="static-page" style="max-width:none">
        <h1>Contact Us</h1>
        <p>Have a question, feedback, or need help with your order? We'd love to hear from you.</p>
        <div class="contact-grid" style="margin-top:2.5rem">
          <div>
            <div class="contact-info-item">
              <span class="contact-icon">📍</span>
              <div><strong>Address</strong><br/><span style="color:var(--col-muted)">1200 AutoGear Blvd, Suite 400<br/>Austin, TX 78701, USA</span></div>
            </div>
            <div class="contact-info-item">
              <span class="contact-icon">📞</span>
              <div><strong>Phone</strong><br/><span style="color:var(--col-muted)">+1 (800) 555-GEAR (4327)</span></div>
            </div>
            <div class="contact-info-item">
              <span class="contact-icon">✉️</span>
              <div><strong>Email</strong><br/><span style="color:var(--col-muted)">support@autogearpro.example</span></div>
            </div>
            <div class="contact-info-item">
              <span class="contact-icon">🕐</span>
              <div><strong>Hours</strong><br/><span style="color:var(--col-muted)">Mon–Fri: 9am–6pm CST<br/>Sat: 10am–4pm CST</span></div>
            </div>
          </div>
          <div class="contact-form-card">
            <h3 class="form-title">Send a Message</h3>
            <div class="form-row">
              <div class="form-group"><label for="ct-name">Your Name</label><input type="text" id="ct-name" placeholder="Jane Smith" /></div>
              <div class="form-group"><label for="ct-email">Email Address</label><input type="email" id="ct-email" placeholder="jane@example.com" /></div>
            </div>
            <div class="form-group"><label for="ct-subject">Subject</label><input type="text" id="ct-subject" placeholder="Order inquiry, feedback…" /></div>
            <div class="form-group"><label for="ct-msg">Message</label><textarea id="ct-msg" rows="5" placeholder="How can we help?"></textarea></div>
            <button class="btn btn-primary" onclick="submitContact()">Send Message</button>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PRIVACY POLICY ========== -->
  <section id="page-privacy" class="page-section" aria-label="Privacy policy">
    <div class="container">
      <div class="static-page">
        <h1>Privacy Policy</h1>
        <p><em>Last updated: January 1, 2025</em></p>
        <p>AutoGear Pro ("we", "us", or "our") is committed to protecting your personal information. This Privacy Policy describes how we collect, use, and share information when you use our website.</p>
        <h2>Information We Collect</h2>
        <ul>
          <li><strong>Personal information</strong> you provide (name, email, address, payment details)</li>
          <li><strong>Usage data</strong> such as pages visited, time on site, and browser type</li>
          <li><strong>Cookies and tracking technologies</strong> used to improve your experience</li>
          <li><strong>Device information</strong> including IP address and operating system</li>
        </ul>
        <h2>How We Use Your Information</h2>
        <ul>
          <li>To process and fulfil your orders</li>
          <li>To communicate order updates and customer support</li>
          <li>To personalise your shopping experience</li>
          <li>To send promotional emails (with your consent)</li>
          <li>To comply with legal obligations</li>
        </ul>
        <h2>Third-Party Services and Advertising</h2>
        <p>We may partner with third-party advertising networks, including Google Ads and other ad platforms, to display relevant advertisements on our website. These services may use cookies, web beacons, and similar tracking technologies to show personalised ads based on your browsing activity across websites. These third parties have their own privacy policies governing their use of your data. You can opt out of personalised advertising through the Google Ad Settings page or the Network Advertising Initiative opt-out tool.</p>
        <h2>Data Security</h2>
        <p>We implement industry-standard security measures including SSL encryption to protect your data. However, no method of internet transmission is 100% secure.</p>
        <h2>Your Rights</h2>
        <p>You have the right to access, correct, or delete your personal information. Contact us at support@autogearpro.example to exercise these rights.</p>
        <h2>Contact</h2>
        <p>For privacy-related questions, email us at privacy@autogearpro.example.</p>
      </div>
    </div>
  </section>

  <!-- ========== TERMS & CONDITIONS ========== -->
  <section id="page-terms" class="page-section" aria-label="Terms and conditions">
    <div class="container">
      <div class="static-page">
        <h1>Terms &amp; Conditions</h1>
        <p><em>Last updated: January 1, 2025</em></p>
        <p>By accessing or using the AutoGear Pro website, you agree to be bound by these Terms and Conditions. Please read them carefully before making a purchase.</p>
        <h2>Use of the Website</h2>
        <p>You agree to use this website for lawful purposes only and in a manner that does not infringe the rights of others.</p>
        <h2>Orders and Payments</h2>
        <ul>
          <li>All prices are listed in USD and are subject to change without notice.</li>
          <li>Orders are subject to acceptance and product availability.</li>
          <li>We reserve the right to cancel any order at our discretion.</li>
          <li>Payment must be completed before order fulfilment begins.</li>
        </ul>
        <h2>Shipping</h2>
        <p>Free standard shipping is available on orders over $49. Delivery times are estimates and not guaranteed. We are not responsible for delays caused by carriers.</p>
        <h2>Returns and Refunds</h2>
        <p>Unused items in original packaging may be returned within 30 days of delivery. Refunds are issued to the original payment method within 5–7 business days after receipt of the returned item.</p>
        <h2>Intellectual Property</h2>
        <p>All content on this website, including logos, text, and images, is the property of AutoGear Pro and is protected by applicable intellectual property laws.</p>
        <h2>Limitation of Liability</h2>
        <p>AutoGear Pro shall not be liable for any indirect, incidental, or consequential damages arising from your use of our products or website.</p>
        <h2>Changes to Terms</h2>
        <p>We reserve the right to modify these terms at any time. Continued use of the site following changes constitutes acceptance of the new terms.</p>
      </div>
    </div>
  </section>

  <!-- ========== TERMS OF USE ========== -->
  <section id="page-terms-use" class="page-section" aria-label="Terms of use">
    <div class="container">
      <div class="static-page">
        <h1>Terms of Use</h1>
        <p><em>Last updated: January 1, 2025</em></p>
        <p>These Terms of Use govern your access to and use of the AutoGear Pro website and services. By using our site, you agree to these terms.</p>
        <h2>Acceptable Use</h2>
        <ul>
          <li>Do not attempt to gain unauthorised access to any part of the website.</li>
          <li>Do not submit false, misleading, or fraudulent information.</li>
          <li>Do not use automated tools to scrape, crawl, or harvest data from our site.</li>
          <li>Do not engage in any activity that interferes with the normal functioning of the site.</li>
        </ul>
        <h2>Account Responsibility</h2>
        <p>You are responsible for maintaining the confidentiality of your account credentials and for all activity that occurs under your account.</p>
        <h2>Third-Party Links</h2>
        <p>Our website may contain links to third-party websites. We are not responsible for the content or practices of these sites.</p>
        <h2>Disclaimer of Warranties</h2>
        <p>The website and its content are provided "as is" without warranties of any kind, express or implied. We do not warrant that the site will be uninterrupted or error-free.</p>
        <h2>Governing Law</h2>
        <p>These Terms of Use are governed by the laws of the State of Texas, USA, without regard to conflict of law principles.</p>
      </div>
    </div>
  </section>

</main><!-- /main-content -->

<!-- =============================================
     FOOTER
============================================= -->
<footer id="footer" role="contentinfo">
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <div class="logo">AUTO<span>GEAR</span> PRO</div>
        <p>Your one-stop destination for premium car accessories. We help drivers elevate every journey with products that combine performance and style.</p>
        <div class="footer-social" aria-label="Social media links">
          <a href="#" class="social-btn" aria-label="Facebook">f</a>
          <a href="#" class="social-btn" aria-label="Twitter">𝕏</a>
          <a href="#" class="social-btn" aria-label="Instagram">📸</a>
          <a href="#" class="social-btn" aria-label="YouTube">▶</a>
        </div>
      </div>
      <div>
        <h3 class="footer-col-title">Quick Links</h3>
        <div class="footer-links">
          <a href="#home" onclick="navigateTo('home')">Home</a>
          <a href="#shop" onclick="navigateTo('shop')">Shop</a>
          <a href="#orders" onclick="navigateTo('orders')">My Orders</a>
          <a href="#about" onclick="navigateTo('about')">About Us</a>
          <a href="#contact" onclick="navigateTo('contact')">Contact Us</a>
        </div>
      </div>
      <div>
        <h3 class="footer-col-title">Categories</h3>
        <div class="footer-links" id="footer-categories"></div>
      </div>
      <div>
        <h3 class="footer-col-title">Legal</h3>
        <div class="footer-links">
          <a href="#privacy" onclick="navigateTo('privacy')">Privacy Policy</a>
          <a href="#terms" onclick="navigateTo('terms')">Terms &amp; Conditions</a>
          <a href="#terms-use" onclick="navigateTo('terms-use')">Terms of Use</a>
        </div>
      </div>
    </div>

    <div class="footer-disclaimer" role="note">
      <strong>Advertisement Disclosure:</strong> AutoGear Pro may display third-party advertisements, including those served by Google Ads and other advertising partners. These ads help support the operation of this site at no extra cost to you. Advertisers may use cookies and similar technologies to serve personalised ads based on your browsing behaviour. AutoGear Pro does not endorse any specific advertiser or product featured in these advertisements. For more information, see our <a href="#privacy" onclick="navigateTo('privacy')" style="color:var(--col-accent)">Privacy Policy</a>.
    </div>

    <div class="footer-bottom">
      <p>© <span id="footer-year"></span> AutoGear Pro. All rights reserved. This is a demo store — no real transactions occur.</p>
      <p>Made with ❤️ for drivers everywhere</p>
    </div>
  </div>
</footer>

<!-- Back to Top -->
<button id="back-to-top" onclick="window.scrollTo({top:0,behavior:'smooth'})" aria-label="Back to top">↑</button>

<!-- Toast Container -->
<div class="toast-container" id="toast-container" aria-live="assertive" aria-atomic="true"></div>

<!-- Order Confirmation Modal -->
<div class="modal-overlay" id="order-modal" role="dialog" aria-modal="true" aria-labelledby="modal-title">
  <div class="modal-card">
    <div class="modal-icon">🎉</div>
    <h2 class="modal-title" id="modal-title">Order Placed!</h2>
    <p class="modal-sub">Thank you for your purchase. Your order has been confirmed and will be shipped within 1–3 business days.</p>
    <div class="modal-order-id" id="modal-order-id"></div>
    <div style="display:flex;gap:.8rem;justify-content:center;flex-wrap:wrap">
      <button class="btn btn-primary" onclick="closeModal();navigateTo('orders')">View My Orders</button>
      <button class="btn btn-ghost" onclick="closeModal();navigateTo('shop')">Continue Shopping</button>
    </div>
  </div>
</div>

<!-- =============================================
     JAVASCRIPT — APP LOGIC
============================================= -->
<script>
  /* =============================================
     PAGE NAVIGATION
  ============================================= */
  const pages = ['home','shop','search','checkout','orders','about','contact','privacy','terms','terms-use'];

  function navigateTo(page) {
    currentPage = page;
    pages.forEach(p => {
      const el = document.getElementById('page-' + p);
      if (el) el.classList.toggle('active', p === page);
    });
    // Update nav active state
    document.querySelectorAll('.nav-links a').forEach(a => {
      a.classList.toggle('active', a.getAttribute('href') === '#' + page);
    });
    window.scrollTo({ top: 0, behavior: 'smooth' });
    if (page === 'checkout') renderCheckout();
    if (page === 'orders') renderOrders();
    if (page === 'shop') renderShop();
  }

  /* =============================================
     TOAST NOTIFICATIONS
  ============================================= */
  function showToast(msg, type = 'info', duration = 3000) {
    const tc = document.getElementById('toast-container');
    const icons = { info: 'ℹ️', success: '✅', error: '❌' };
    const t = document.createElement('div');
    t.className = `toast ${type}`;
    t.innerHTML = `<span>${icons[type]}</span><span>${msg}</span>`;
    tc.appendChild(t);
    setTimeout(() => {
      t.style.animation = 'slide-out .3s ease forwards';
      setTimeout(() => t.remove(), 300);
    }, duration);
  }

  /* =============================================
     CART FUNCTIONS
  ============================================= */
  function toggleCart() {
    document.getElementById('cart-sidebar').classList.toggle('open');
    document.getElementById('cart-overlay').classList.toggle('open');
    renderCartSidebar();
  }

  function addToCart(productId) {
    const product = getProduct(productId);
    if (!product) return;
    const existing = cart.find(i => i.id === productId);
    if (existing) {
      existing.qty++;
    } else {
      cart.push({ id: product.id, name: product.name, price: product.price, emoji: product.emoji, image: product.image, qty: 1 });
    }
    saveCart();
    updateCartCount();
    renderCartSidebar();
    showToast(`"${product.name}" added to cart!`, 'success');
    // Visual feedback on button
    const btns = document.querySelectorAll(`[data-add="${productId}"]`);
    btns.forEach(b => {
      b.classList.add('added'); b.textContent = 'Added ✓';
      setTimeout(() => { b.classList.remove('added'); b.textContent = 'Add to Cart'; }, 1500);
    });
  }

  function removeFromCart(productId) {
    cart = cart.filter(i => i.id !== productId);
    saveCart(); updateCartCount(); renderCartSidebar();
  }

  function updateQty(productId, delta) {
    const item = cart.find(i => i.id === productId);
    if (!item) return;
    item.qty = Math.max(1, item.qty + delta);
    saveCart(); updateCartCount(); renderCartSidebar();
  }

  function updateCartCount() {
    const c = cartCount();
    const el = document.getElementById('cart-count');
    if (el) { el.textContent = c; el.style.display = c > 0 ? 'flex' : 'none'; }
  }

  function renderCartSidebar() {
    const list = document.getElementById('cart-items-list');
    const footer = document.getElementById('cart-footer');
    if (cart.length === 0) {
      list.innerHTML = `<div class="cart-empty"><div class="ce-icon">🛒</div><p>Your cart is empty.</p><button class="btn btn-outline" style="margin-top:1rem" onclick="toggleCart();navigateTo('shop')">Start Shopping</button></div>`;
      footer.style.display = 'none';
      return;
    }
    footer.style.display = 'block';
    list.innerHTML = cart.map(item => {
      const product = getProduct(item.id);
      const imgHtml = product && product.image
        ? `<img src="${product.image}" alt="${item.name}" class="ci-img" />`
        : `<div class="ci-img-ph">${item.emoji || '📦'}</div>`;
      return `
        <div class="cart-item" role="listitem">
          ${imgHtml}
          <div class="ci-info">
            <div class="ci-name">${item.name}</div>
            <div class="ci-price">${formatPrice(item.price)}</div>
            <div class="ci-qty">
              <button onclick="updateQty(${item.id}, -1)" aria-label="Decrease quantity">−</button>
              <span>${item.qty}</span>
              <button onclick="updateQty(${item.id}, 1)" aria-label="Increase quantity">+</button>
            </div>
          </div>
          <button class="ci-remove" onclick="removeFromCart(${item.id})" aria-label="Remove ${item.name}">✕</button>
        </div>`;
    }).join('');
    document.getElementById('cart-total-display').textContent = formatPrice(cartTotal());
  }

  /* =============================================
     PRODUCT CARD RENDERER
  ============================================= */
  function renderProductCard(product) {
    const imgHtml = product.image
      ? `<img src="${product.image}" alt="${product.name}" loading="lazy" style="width:100%;height:100%;object-fit:cover" />`
      : `<div class="product-placeholder"><span class="ph-icon">${product.emoji || '📦'}</span><span class="ph-label">${product.category}</span></div>`;

    const badgeHtml = product.badge
      ? `<span class="badge product-badge">${product.badge}</span>` : '';

    return `
      <article class="product-card reveal" aria-label="${product.name}">
        <div class="product-img-wrap">
          ${imgHtml}
          ${badgeHtml}
          <button class="product-wishlist" aria-label="Add to wishlist">♡</button>
        </div>
        <div class="product-body">
          <div class="product-category">${product.category}</div>
          <h3 class="product-name">${product.name}</h3>
          <p class="product-desc">${product.description}</p>
          <div class="product-rating" aria-label="${product.rating} out of 5 stars">
            <span class="star">${renderStars(product.rating)}</span>
            <span>${product.rating}</span>
            <span class="count">(${product.reviews} reviews)</span>
          </div>
          <div class="product-footer">
            <span class="product-price" aria-label="Price: ${formatPrice(product.price)}">${formatPrice(product.price)}</span>
            <button class="add-to-cart" data-add="${product.id}" onclick="addToCart(${product.id})" aria-label="Add ${product.name} to cart">Add to Cart</button>
          </div>
        </div>
      </article>`;
  }

  /* =============================================
     RENDER SECTIONS
  ============================================= */
  function renderFeatured() {
    const grid = document.getElementById('featured-grid');
    if (grid) grid.innerHTML = products.map(renderProductCard).join('');
  }

  function renderShop() {
    // Categories
    const categories = ['All', ...new Set(products.map(p => p.category))];
    const filters = document.getElementById('shop-filters');
    if (filters) {
      filters.innerHTML = categories.map(c =>
        `<button class="filter-pill ${c === activeFilter ? 'active' : ''}" onclick="filterShop('${c}')">${c}</button>`
      ).join('');
    }
    const filtered = activeFilter === 'All' ? products : products.filter(p => p.category === activeFilter);
    const grid = document.getElementById('shop-grid');
    if (grid) grid.innerHTML = filtered.length > 0
      ? filtered.map(renderProductCard).join('')
      : `<p style="color:var(--col-muted);grid-column:1/-1;text-align:center;padding:3rem">No products found in this category.</p>`;
    initReveal();
  }

  function filterShop(category) {
    activeFilter = category;
    renderShop();
  }

  function renderHeroIcons() {
    const grid = document.getElementById('hero-icon-grid');
    if (!grid) return;
    const icons = products.map(p => `<div class="hero-icon" aria-hidden="true">${p.emoji}</div>`).join('');
    grid.innerHTML = icons;
  }

  function renderFooterCategories() {
    const el = document.getElementById('footer-categories');
    if (!el) return;
    const cats = [...new Set(products.map(p => p.category))];
    el.innerHTML = cats.map(c => `<a href="#shop" onclick="activeFilter='${c}';navigateTo('shop')">${c}</a>`).join('');
  }

  /* =============================================
     CHECKOUT
  ============================================= */
  function renderCheckout() {
    const list = document.getElementById('co-items-list');
    if (!list) return;
    if (cart.length === 0) {
      list.innerHTML = `<p style="color:var(--col-muted);text-align:center;padding:1rem">Your cart is empty.</p>`;
      return;
    }
    list.innerHTML = cart.map(item => {
      const product = getProduct(item.id);
      const imgHtml = product && product.image
        ? `<img src="${product.image}" alt="${item.name}" class="co-thumb" />`
        : `<div class="co-thumb-ph">${item.emoji || '📦'}</div>`;
      return `
        <div class="co-item">
          ${imgHtml}
          <div class="co-info">
            <div class="co-name">${item.name}</div>
            <div class="co-qty-price">Qty: ${item.qty}</div>
          </div>
          <div class="co-price">${formatPrice(item.price * item.qty)}</div>
        </div>`;
    }).join('');

    const sub = cartTotal();
    const shipping = sub >= 49 ? 0 : 5.99;
    const tax = sub * 0.08;
    const total = sub + shipping + tax;

    document.getElementById('co-subtotal').textContent = formatPrice(sub);
    document.getElementById('co-shipping').textContent = shipping === 0 ? 'Free' : formatPrice(shipping);
    document.getElementById('co-tax').textContent = formatPrice(tax);
    document.getElementById('co-total').textContent = formatPrice(total);
  }

  function formatCard(input) {
    let v = input.value.replace(/\D/g, '').substring(0, 16);
    input.value = v.replace(/(.{4})/g, '$1 ').trim();
  }

  function placeOrder() {
    if (cart.length === 0) { showToast('Your cart is empty!', 'error'); return; }
    const fields = ['co-first','co-last','co-email','co-address','co-city','co-zip','co-card','co-exp','co-cvv'];
    for (const f of fields) {
      const el = document.getElementById(f);
      if (!el || !el.value.trim()) {
        showToast('Please fill in all required fields.', 'error');
        el && el.focus();
        return;
      }
    }
    const orderId = genOrderId();
    const sub = cartTotal();
    const shipping = sub >= 49 ? 0 : 5.99;
    const tax = sub * 0.08;
    const order = {
      id: orderId,
      date: Date.now(),
      items: [...cart],
      subtotal: sub,
      shipping,
      tax,
      total: sub + shipping + tax,
      status: 'processing',
      name: document.getElementById('co-first').value + ' ' + document.getElementById('co-last').value,
      email: document.getElementById('co-email').value
    };
    orders.unshift(order);
    saveOrders();
    cart = []; saveCart(); updateCartCount();
    // Show modal
    document.getElementById('modal-order-id').textContent = 'Order ID: ' + orderId;
    document.getElementById('order-modal').classList.add('open');
  }

  function closeModal() {
    document.getElementById('order-modal').classList.remove('open');
  }

  /* =============================================
     ORDERS PAGE
  ============================================= */
  function renderOrders() {
    const list = document.getElementById('orders-list');
    if (!list) return;
    if (orders.length === 0) {
      list.innerHTML = `<div class="orders-empty"><div class="oe-icon">📦</div><h3>No orders yet</h3><p>Once you place an order, it will appear here.</p><button class="btn btn-primary" style="margin-top:1.5rem" onclick="navigateTo('shop')">Start Shopping</button></div>`;
      return;
    }
    list.innerHTML = orders.map(order => {
      const statusClass = `status-${order.status}`;
      const thumbsHtml = order.items.map(item => {
        const product = getProduct(item.id);
        return product && product.image
          ? `<img src="${product.image}" alt="${item.name}" class="order-item-thumb" />`
          : `<div class="order-item-ph">${item.emoji || '📦'}</div>`;
      }).join('');
      return `
        <div class="order-card" role="article" aria-label="Order ${order.id}">
          <div class="order-header">
            <div>
              <div class="order-id">${order.id}</div>
              <div class="order-date">${formatDate(order.date)}</div>
            </div>
            <span class="order-status ${statusClass}">${order.status}</span>
          </div>
          <div class="order-items-grid">${thumbsHtml}</div>
          <div class="order-footer">
            <span>${order.items.reduce((s,i)=>s+i.qty,0)} item(s) · ${order.name}</span>
            <span class="order-total">${formatPrice(order.total)}</span>
          </div>
        </div>`;
    }).join('');
  }

  /* =============================================
     SEARCH
  ============================================= */
  function doSearch() {
    const q = document.getElementById('header-search').value.trim().toLowerCase();
    if (!q) return;
    searchQuery = q;
    const results = products.filter(p =>
      p.name.toLowerCase().includes(q) ||
      p.category.toLowerCase().includes(q) ||
      p.description.toLowerCase().includes(q)
    );
    document.getElementById('search-heading').textContent = `Results for "${q}"`;
    document.getElementById('search-sub').textContent = `${results.length} product(s) found`;
    const grid = document.getElementById('search-grid');
    grid.innerHTML = results.length > 0
      ? results.map(renderProductCard).join('')
      : `<div style="grid-column:1/-1;text-align:center;padding:3rem;color:var(--col-muted)">No products matched "${q}". <button class="btn btn-outline" style="margin-left:1rem" onclick="navigateTo('shop')">Browse All</button></div>`;
    navigateTo('search');
    initReveal();
  }

  /* =============================================
     TESTIMONIALS DATA & RENDER
  ============================================= */
  const testimonials = [
    { name: "Marcus J.", role: "Freelance Driver", rating: 5, text: "The DashVision 4K Cam is absolutely incredible. Crystal clear footage and the night vision is way better than I expected for the price. Setup took under 10 minutes.", initials: "MJ" },
    { name: "Priya S.", role: "Daily Commuter", rating: 5, text: "I bought the ComfortDrive seat cushion for long highway trips and my back pain has completely disappeared. Best car purchase I've ever made — hands down.", initials: "PS" },
    { name: "Tyler R.", role: "Road Trip Enthusiast", rating: 4, text: "The TrunkMaster Organizer keeps everything in order even on bumpy roads. Solid build quality and the price point is fair. Would recommend to every car owner.", initials: "TR" },
    { name: "Sofia L.", role: "Uber Driver", rating: 5, text: "The MagMount Pro holds my phone perfectly even over speed bumps. Finally found a mount that doesn't fall off every five minutes. My passengers love it too!", initials: "SL" },
    { name: "Dan K.", role: "Weekend Detailer", rating: 5, text: "ShineKit Pro is the real deal. My car looks showroom fresh after every weekend wash. The microfibre cloths alone are worth twice the price of the whole kit.", initials: "DK" },
    { name: "Anita W.", role: "School Run Parent", rating: 4, text: "The AromaRide Freshener smells natural and actually lasts — not the synthetic headache-inducing stuff. The bamboo charcoal also absorbs any lingering smell.", initials: "AW" }
  ];

  function renderTestimonials() {
    const grid = document.getElementById('testimonials-grid');
    if (!grid) return;
    grid.innerHTML = testimonials.map(t => `
      <div class="testimonial-card reveal">
        <div class="testimonial-stars">${'★'.repeat(t.rating)}${'☆'.repeat(5 - t.rating)}</div>
        <p class="testimonial-text">"${t.text}"</p>
        <div class="testimonial-author">
          <div class="testimonial-avatar">${t.initials}</div>
          <div>
            <div class="testimonial-name">${t.name}</div>
            <div class="testimonial-role">${t.role}</div>
          </div>
        </div>
      </div>`).join('');
  }

  /* =============================================
     FAQ DATA & RENDER
  ============================================= */
  const faqs = [
    { q: "How long does shipping take?", a: "Standard shipping typically takes 3–7 business days within the US. Express options are available at checkout. International orders may take 7–14 business days." },
    { q: "What is your return policy?", a: "We offer a 30-day hassle-free return policy. Items must be unused and in their original packaging. Simply contact our support team and we'll arrange a return label." },
    { q: "Are your products compatible with all car models?", a: "Most of our accessories are universal fit. Product descriptions clearly state any compatibility restrictions. If you're unsure, contact our support team with your car model." },
    { q: "Is my payment information secure?", a: "Absolutely. All transactions are processed with 256-bit SSL encryption. We never store full card details on our servers. This is a demo store — no real transactions occur." },
    { q: "Do you offer bulk or fleet discounts?", a: "Yes! We offer competitive discounts for bulk orders of 10+ units. Please contact our sales team at sales@autogearpro.example for a custom quote." },
    { q: "How do I track my order?", a: "Once your order ships, you'll receive a confirmation email with a tracking number. You can also view your order status in the My Orders section of our website." }
  ];

  function renderFAQ() {
    const list = document.getElementById('faq-list');
    if (!list) return;
    list.innerHTML = faqs.map((f, i) => `
      <div class="faq-item reveal" id="faq-${i}">
        <button class="faq-q" onclick="toggleFAQ(${i})" aria-expanded="false" aria-controls="faq-a-${i}">
          ${f.q} <span aria-hidden="true">▼</span>
        </button>
        <div class="faq-a" id="faq-a-${i}" role="region">${f.a}</div>
      </div>`).join('');
  }

  function toggleFAQ(i) {
    const item = document.getElementById('faq-' + i);
    const btn = item.querySelector('.faq-q');
    const isOpen = item.classList.toggle('open');
    btn.setAttribute('aria-expanded', isOpen);
  }

  /* =============================================
     NEWSLETTER
  ============================================= */
  function subscribeNewsletter() {
    const email = document.getElementById('nl-email').value.trim();
    if (!email || !email.includes('@')) { showToast('Please enter a valid email address.', 'error'); return; }
    showToast('🎉 Thanks for subscribing! Check your inbox soon.', 'success', 4000);
    document.getElementById('nl-email').value = '';
  }

  /* =============================================
     CONTACT FORM
  ============================================= */
  function submitContact() {
    const name = document.getElementById('ct-name').value.trim();
    const email = document.getElementById('ct-email').value.trim();
    const msg = document.getElementById('ct-msg').value.trim();
    if (!name || !email || !msg) { showToast('Please fill in all fields.', 'error'); return; }
    showToast('Message sent! We\'ll get back to you within 24 hours.', 'success', 4000);
    ['ct-name','ct-email','ct-subject','ct-msg'].forEach(id => { const el = document.getElementById(id); if(el) el.value = ''; });
  }

  /* =============================================
     MOBILE MENU
  ============================================= */
  function toggleMobileMenu() {
    const menu = document.getElementById('mobile-menu');
    const btn = document.getElementById('hamburger-btn');
    const isOpen = menu.classList.toggle('open');
    btn.setAttribute('aria-expanded', isOpen);
    document.body.style.overflow = isOpen ? 'hidden' : '';
  }

  /* =============================================
     SCROLL REVEAL
  ============================================= */
  function initReveal() {
    const els = document.querySelectorAll('.reveal:not(.visible)');
    const obs = new IntersectionObserver((entries) => {
      entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target); } });
    }, { threshold: 0.1 });
    els.forEach(el => obs.observe(el));
  }

  /* =============================================
     BACK TO TOP
  ============================================= */
  window.addEventListener('scroll', () => {
    const btn = document.getElementById('back-to-top');
    if (btn) btn.classList.toggle('visible', window.scrollY > 400);
  });

  /* =============================================
     WISHLIST TOGGLE (visual only)
  ============================================= */
  document.addEventListener('click', e => {
    if (e.target.classList.contains('product-wishlist')) {
      const btn = e.target;
      const liked = btn.textContent === '♥';
      btn.textContent = liked ? '♡' : '♥';
      btn.style.color = liked ? '' : 'var(--col-danger)';
    }
  });

  /* =============================================
     FOOTER YEAR
  ============================================= */
  const fyEl = document.getElementById('footer-year');
  if (fyEl) fyEl.textContent = new Date().getFullYear();

  /* =============================================
     INIT
  ============================================= */
  document.addEventListener('DOMContentLoaded', () => {
    renderFeatured();
    renderHeroIcons();
    renderTestimonials();
    renderFAQ();
    renderFooterCategories();
    updateCartCount();
    renderCartSidebar();
    initReveal();
  });

  // Also init reveal on scroll
  window.addEventListener('scroll', initReveal, { passive: true });
</script>
</body>
</html>
```
