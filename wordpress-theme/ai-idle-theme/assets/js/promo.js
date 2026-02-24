/**
 * AI-IDLE HTML5 Animated Promo
 * 12 scenes, ~10 seconds each, ~2 minutes total
 * Pure Canvas + CSS keyframes, no external dependencies
 */

(function() {
  'use strict';

  var canvas = document.getElementById('promo-canvas');
  if (!canvas) return;

  var ctx = canvas.getContext('2d');
  var W = 960;
  var H = 540;
  canvas.width = W;
  canvas.height = H;

  var isPlaying = true;
  var startTime = 0;
  var currentScene = 0;
  var SCENE_DURATION = 10000; // 10 seconds per scene
  var TOTAL_SCENES = 12;
  var animFrame;

  // Colors
  var COLORS = {
    bg: '#0f172a',
    bgLight: '#1e293b',
    primary: '#3b82f6',
    primaryLight: '#60a5fa',
    accent: '#10b981',
    accentLight: '#34d399',
    purple: '#8b5cf6',
    red: '#ef4444',
    orange: '#f59e0b',
    text: '#f8fafc',
    textSecondary: '#94a3b8',
    textMuted: '#64748b',
  };

  // Particles
  var particles = [];
  for (var i = 0; i < 50; i++) {
    particles.push({
      x: Math.random() * W,
      y: Math.random() * H,
      vx: (Math.random() - 0.5) * 0.5,
      vy: (Math.random() - 0.5) * 0.5,
      r: Math.random() * 2 + 1,
      alpha: Math.random() * 0.5 + 0.1,
    });
  }

  function updateParticles() {
    particles.forEach(function(p) {
      p.x += p.vx;
      p.y += p.vy;
      if (p.x < 0) p.x = W;
      if (p.x > W) p.x = 0;
      if (p.y < 0) p.y = H;
      if (p.y > H) p.y = 0;
    });
  }

  function drawParticles(alpha) {
    particles.forEach(function(p) {
      ctx.beginPath();
      ctx.arc(p.x, p.y, p.r, 0, Math.PI * 2);
      ctx.fillStyle = 'rgba(59, 130, 246, ' + (p.alpha * (alpha || 1)) + ')';
      ctx.fill();
    });
  }

  function drawBg() {
    var g = ctx.createLinearGradient(0, 0, W, H);
    g.addColorStop(0, COLORS.bg);
    g.addColorStop(0.5, COLORS.bgLight);
    g.addColorStop(1, COLORS.bg);
    ctx.fillStyle = g;
    ctx.fillRect(0, 0, W, H);
  }

  function easeInOut(t) {
    return t < 0.5 ? 2 * t * t : -1 + (4 - 2 * t) * t;
  }

  function fadeAlpha(t) {
    // Fade in first 10%, fade out last 10%
    if (t < 0.1) return t / 0.1;
    if (t > 0.9) return (1 - t) / 0.1;
    return 1;
  }

  function drawText(text, x, y, size, color, align) {
    ctx.font = (size || 24) + 'px Inter, sans-serif';
    ctx.fillStyle = color || COLORS.text;
    ctx.textAlign = align || 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(text, x, y);
  }

  function drawBoldText(text, x, y, size, color, align) {
    ctx.font = 'bold ' + (size || 24) + 'px Inter, sans-serif';
    ctx.fillStyle = color || COLORS.text;
    ctx.textAlign = align || 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(text, x, y);
  }

  function drawGradientText(text, x, y, size) {
    ctx.font = 'bold ' + (size || 48) + 'px Inter, sans-serif';
    var g = ctx.createLinearGradient(x - 200, y, x + 200, y);
    g.addColorStop(0, COLORS.primary);
    g.addColorStop(1, COLORS.purple);
    ctx.fillStyle = g;
    ctx.textAlign = 'center';
    ctx.textBaseline = 'middle';
    ctx.fillText(text, x, y);
  }

  function drawGlassCard(x, y, w, h) {
    ctx.fillStyle = 'rgba(255, 255, 255, 0.05)';
    ctx.strokeStyle = 'rgba(255, 255, 255, 0.1)';
    ctx.lineWidth = 1;
    ctx.beginPath();
    var r = 12;
    ctx.moveTo(x + r, y);
    ctx.lineTo(x + w - r, y);
    ctx.arcTo(x + w, y, x + w, y + r, r);
    ctx.lineTo(x + w, y + h - r);
    ctx.arcTo(x + w, y + h, x + w - r, y + h, r);
    ctx.lineTo(x + r, y + h);
    ctx.arcTo(x, y + h, x, y + h - r, r);
    ctx.lineTo(x, y + r);
    ctx.arcTo(x, y, x + r, y, r);
    ctx.closePath();
    ctx.fill();
    ctx.stroke();
  }

  // === Scene 1: Logo Reveal + Particles ===
  function scene1(t) {
    var a = fadeAlpha(t);
    drawBg();
    drawParticles(a);

    var scale = easeInOut(Math.min(t * 3, 1));
    ctx.save();
    ctx.globalAlpha = a;
    ctx.translate(W / 2, H / 2 - 40);
    ctx.scale(scale, scale);
    drawGradientText('AI-IDLE', 0, 0, 72);
    ctx.restore();

    ctx.globalAlpha = a * Math.min(t * 2, 1);
    drawText('Intelligent Energy Management', W / 2, H / 2 + 50, 22, COLORS.textSecondary);
    drawText('v2.0', W / 2, H / 2 + 90, 16, COLORS.textMuted);
    ctx.globalAlpha = 1;
  }

  // === Scene 2: The Problem — machines running, money flying ===
  function scene2(t) {
    var a = fadeAlpha(t);
    drawBg();
    ctx.globalAlpha = a;

    drawBoldText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'The Problem' : 'Het Probleem', W / 2, 60, 36);

    // Factory silhouette
    ctx.fillStyle = COLORS.bgLight;
    ctx.fillRect(100, 180, 300, 200);
    ctx.fillRect(450, 200, 250, 180);
    ctx.fillRect(730, 220, 150, 160);

    // Machines with red glow (wasting energy)
    var machinePositions = [
      [160, 280], [260, 280], [360, 280],
      [510, 300], [610, 300],
      [780, 310]
    ];

    machinePositions.forEach(function(pos, i) {
      var pulse = Math.sin(t * 20 + i) * 0.3 + 0.7;
      ctx.fillStyle = 'rgba(239, 68, 68, ' + (pulse * 0.3) + ')';
      ctx.beginPath();
      ctx.arc(pos[0], pos[1], 30, 0, Math.PI * 2);
      ctx.fill();

      ctx.fillStyle = COLORS.red;
      ctx.fillRect(pos[0] - 15, pos[1] - 15, 30, 30);
    });

    // Money symbols flying up
    for (var i = 0; i < 8; i++) {
      var mx = 150 + i * 100;
      var my = 200 - ((t * 200 + i * 50) % 250);
      ctx.globalAlpha = a * (1 - (200 - my) / 250);
      drawText('\u20AC', mx, my, 20, COLORS.orange);
    }

    ctx.globalAlpha = a;
    drawText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'Machines run idle. Energy bills rise. Money wasted.'
      : 'Machines draaien onnodig. Energiekosten stijgen. Geld verspild.',
      W / 2, H - 60, 18, COLORS.textSecondary);
    ctx.globalAlpha = 1;
  }

  // === Scene 3: AI-IDLE Dashboard Appears ===
  function scene3(t) {
    var a = fadeAlpha(t);
    drawBg();
    ctx.globalAlpha = a;

    drawBoldText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'The Solution' : 'De Oplossing', W / 2, 50, 36);

    var cardY = 80 + (1 - easeInOut(Math.min(t * 2, 1))) * 100;

    // Dashboard frame
    drawGlassCard(80, cardY, W - 160, H - cardY - 60);

    // Sidebar
    ctx.fillStyle = 'rgba(255, 255, 255, 0.03)';
    ctx.fillRect(80, cardY, 180, H - cardY - 60);

    // Sidebar items
    var items = ['Dashboard', 'Machines', 'Analytics', 'AI Chat', 'Alerts'];
    items.forEach(function(item, i) {
      var isActive = i === 0;
      if (isActive) {
        ctx.fillStyle = 'rgba(59, 130, 246, 0.2)';
        ctx.fillRect(80, cardY + 50 + i * 40, 180, 35);
      }
      drawText(item, 170, cardY + 68 + i * 40, 13,
        isActive ? COLORS.primaryLight : COLORS.textMuted, 'center');
    });

    // Stat cards
    var stats = [
      { label: 'Power', value: '47.3 kW', color: COLORS.primary },
      { label: 'Saving', value: '23%', color: COLORS.accent },
      { label: 'Alerts', value: '2', color: COLORS.orange },
      { label: 'Machines', value: '24/30', color: COLORS.purple },
    ];

    stats.forEach(function(stat, i) {
      var sx = 290 + i * 160;
      drawGlassCard(sx, cardY + 30, 140, 70);
      drawText(stat.label, sx + 70, cardY + 55, 12, COLORS.textMuted);
      drawBoldText(stat.value, sx + 70, cardY + 78, 20, stat.color);
    });

    // Chart area
    drawGlassCard(290, cardY + 120, 630, 200);
    drawText('Energy Consumption — Real-time', 605, cardY + 145, 14, COLORS.textSecondary);

    // Draw a simple line chart
    ctx.beginPath();
    ctx.strokeStyle = COLORS.primary;
    ctx.lineWidth = 2;
    for (var i = 0; i < 60; i++) {
      var cx = 310 + i * 10;
      var cy = cardY + 260 - Math.sin(i * 0.2 + t * 10) * 30 - Math.random() * 5 - 20;
      if (i === 0) ctx.moveTo(cx, cy);
      else ctx.lineTo(cx, cy);
    }
    ctx.stroke();

    ctx.globalAlpha = 1;
  }

  // === Scene 4: Real-time Monitoring Graphs ===
  function scene4(t) {
    var a = fadeAlpha(t);
    drawBg();
    ctx.globalAlpha = a;

    drawBoldText('Real-time Monitoring', W / 2, 50, 36);

    // Multiple graphs
    var graphs = [
      { title: 'Production Hall A', x: 60, y: 100, w: 420, h: 180, color: COLORS.primary },
      { title: 'Production Hall B', x: 500, y: 100, w: 420, h: 180, color: COLORS.accent },
      { title: 'Office Building', x: 60, y: 310, w: 420, h: 180, color: COLORS.purple },
      { title: 'Warehouse', x: 500, y: 310, w: 420, h: 180, color: COLORS.orange },
    ];

    graphs.forEach(function(g) {
      drawGlassCard(g.x, g.y, g.w, g.h);
      drawText(g.title, g.x + g.w / 2, g.y + 25, 14, COLORS.textSecondary);

      // Animated sparkline
      ctx.beginPath();
      ctx.strokeStyle = g.color;
      ctx.lineWidth = 2;
      var points = 40;
      for (var i = 0; i < points; i++) {
        var px = g.x + 20 + (i / points) * (g.w - 40);
        var py = g.y + g.h / 2 + 20 + Math.sin(i * 0.3 + t * 8) * 30 + Math.sin(i * 0.7) * 15;
        if (i === 0) ctx.moveTo(px, py);
        else ctx.lineTo(px, py);
      }
      ctx.stroke();

      // Value
      var val = (40 + Math.sin(t * 5) * 10 + Math.random() * 2).toFixed(1);
      drawBoldText(val + ' kW', g.x + g.w - 60, g.y + 25, 16, g.color);
    });

    ctx.globalAlpha = 1;
  }

  // === Scene 5: AI Anomaly Detection ===
  function scene5(t) {
    var a = fadeAlpha(t);
    drawBg();
    ctx.globalAlpha = a;

    drawBoldText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'AI Anomaly Detection' : 'AI Anomalie Detectie', W / 2, 50, 36);

    // Graph with anomaly
    drawGlassCard(80, 100, W - 160, 300);

    ctx.beginPath();
    ctx.strokeStyle = COLORS.primary;
    ctx.lineWidth = 2;
    var anomalyX = 0;
    for (var i = 0; i < 80; i++) {
      var gx = 110 + i * 9.5;
      var gy = 280 - Math.sin(i * 0.15) * 40 - 20;

      // Create anomaly spike at ~60%
      if (i > 45 && i < 55) {
        gy -= (i > 48 && i < 52) ? 100 : 30;
        if (i === 50) anomalyX = gx;
      }

      if (i === 0) ctx.moveTo(gx, gy);
      else ctx.lineTo(gx, gy);
    }
    ctx.stroke();

    // Anomaly highlight
    if (anomalyX > 0 && t > 0.3) {
      var pulse = Math.sin(t * 15) * 0.3 + 0.7;
      ctx.beginPath();
      ctx.arc(anomalyX, 155, 25 + pulse * 10, 0, Math.PI * 2);
      ctx.strokeStyle = 'rgba(239, 68, 68, ' + pulse + ')';
      ctx.lineWidth = 2;
      ctx.stroke();

      drawBoldText('!', anomalyX, 155, 24, COLORS.red);
    }

    // 4 layers
    drawText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? '4-Layer Detection' : '4-Laags Detectie', W / 2, 440, 20, COLORS.textSecondary);

    var layers = [
      { name: typeof aiIdle !== 'undefined' && aiIdle.lang === 'en' ? 'Statistical' : 'Statistisch', color: COLORS.primary },
      { name: 'Machine Learning', color: COLORS.accent },
      { name: typeof aiIdle !== 'undefined' && aiIdle.lang === 'en' ? 'Pattern' : 'Patroon', color: COLORS.purple },
      { name: 'Context-aware', color: COLORS.orange },
    ];

    layers.forEach(function(l, i) {
      var lx = 140 + i * 200;
      var reveal = Math.max(0, Math.min(1, (t - 0.2 - i * 0.1) * 4));
      ctx.globalAlpha = a * reveal;
      drawGlassCard(lx - 70, 465, 140, 40);
      drawText(l.name, lx, 485, 13, l.color);
    });

    ctx.globalAlpha = 1;
  }

  // === Scene 6: Savings Graph + ROI Counter ===
  function scene6(t) {
    var a = fadeAlpha(t);
    drawBg();
    ctx.globalAlpha = a;

    drawBoldText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'Your Savings' : 'Uw Besparingen', W / 2, 50, 36);

    // Before/After bars
    var months = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'];
    var barW = 50;
    var barGap = 80;
    var startX = 180;

    months.forEach(function(m, i) {
      var reveal = Math.max(0, Math.min(1, (t - i * 0.05) * 3));
      var bx = startX + i * (barW * 2 + barGap);

      // Before bar (red)
      var beforeH = 200 * reveal;
      ctx.fillStyle = 'rgba(239, 68, 68, 0.4)';
      ctx.fillRect(bx, 380 - beforeH, barW, beforeH);

      // After bar (green, shorter)
      var afterH = beforeH * 0.75;
      ctx.fillStyle = 'rgba(16, 185, 129, 0.6)';
      ctx.fillRect(bx + barW + 5, 380 - afterH, barW, afterH);

      drawText(m, bx + barW + 2, 400, 12, COLORS.textMuted);
    });

    // Legend
    ctx.fillStyle = 'rgba(239, 68, 68, 0.4)';
    ctx.fillRect(200, 430, 15, 15);
    drawText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'Before' : 'Zonder AI-IDLE', 290, 438, 13, COLORS.textSecondary, 'center');

    ctx.fillStyle = 'rgba(16, 185, 129, 0.6)';
    ctx.fillRect(500, 430, 15, 15);
    drawText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'After' : 'Met AI-IDLE', 580, 438, 13, COLORS.textSecondary, 'center');

    // ROI counter
    var savingVal = Math.round(easeInOut(Math.min(t * 1.5, 1)) * 11412);
    drawGlassCard(W / 2 - 150, 460, 300, 60);
    drawBoldText('\u20AC' + savingVal.toLocaleString('nl-NL'),
      W / 2, 483, 28, COLORS.accent);
    drawText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? '/year savings' : '/jaar besparing', W / 2, 505, 13, COLORS.textSecondary);

    ctx.globalAlpha = 1;
  }

  // === Scene 7: Simple 3-Step Setup ===
  function scene7(t) {
    var a = fadeAlpha(t);
    drawBg();
    ctx.globalAlpha = a;

    drawBoldText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'Setup in 3 Steps' : 'Installatie in 3 Stappen', W / 2, 60, 36);

    var steps = [
      {
        num: '1',
        title: typeof aiIdle !== 'undefined' && aiIdle.lang === 'en' ? 'Install' : 'Installeer',
        desc: 'Docker + ./setup.sh',
        icon: '\u2699',
      },
      {
        num: '2',
        title: typeof aiIdle !== 'undefined' && aiIdle.lang === 'en' ? 'Connect' : 'Verbind',
        desc: typeof aiIdle !== 'undefined' && aiIdle.lang === 'en' ? 'Add smart plugs' : 'Voeg slimme stekkers toe',
        icon: '\u{1F50C}',
      },
      {
        num: '3',
        title: typeof aiIdle !== 'undefined' && aiIdle.lang === 'en' ? 'Save' : 'Bespaar',
        desc: typeof aiIdle !== 'undefined' && aiIdle.lang === 'en' ? 'AI starts optimizing' : 'AI start met optimaliseren',
        icon: '\u{1F4B0}',
      },
    ];

    steps.forEach(function(s, i) {
      var reveal = Math.max(0, Math.min(1, (t - 0.1 - i * 0.15) * 3));
      var sx = 120 + i * 280;
      ctx.globalAlpha = a * reveal;

      drawGlassCard(sx, 150, 240, 280);

      // Icon
      drawText(s.icon, sx + 120, 220, 48);

      // Number
      ctx.beginPath();
      ctx.arc(sx + 120, 290, 25, 0, Math.PI * 2);
      ctx.fillStyle = 'rgba(59, 130, 246, 0.3)';
      ctx.fill();
      drawBoldText(s.num, sx + 120, 290, 22, COLORS.primaryLight);

      // Title and desc
      drawBoldText(s.title, sx + 120, 340, 20);
      drawText(s.desc, sx + 120, 370, 14, COLORS.textSecondary);

      // Arrow between steps
      if (i < 2 && reveal > 0.8) {
        ctx.globalAlpha = a * 0.5;
        drawText('\u2192', sx + 260, 280, 30, COLORS.textMuted);
      }
    });

    ctx.globalAlpha = 1;
  }

  // === Scene 8: Pricing Tiers ===
  function scene8(t) {
    var a = fadeAlpha(t);
    drawBg();
    ctx.globalAlpha = a;

    drawBoldText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'Transparent Pricing' : 'Transparante Prijzen', W / 2, 50, 36);

    var tiers = [
      { name: 'Starter', price: '\u20AC99', period: '/mo', devices: '15', color: COLORS.primary },
      { name: 'Professional', price: '\u20AC299', period: '/mo', devices: '50', color: COLORS.accent, popular: true },
      { name: 'Enterprise', price: '\u20AC749', period: '/mo', devices: '\u221E', color: COLORS.purple },
    ];

    tiers.forEach(function(tier, i) {
      var reveal = Math.max(0, Math.min(1, (t - i * 0.1) * 3));
      var tx = 100 + i * 280;
      var ty = 100 + (1 - easeInOut(reveal)) * 50;
      ctx.globalAlpha = a * reveal;

      // Card
      var cardH = tier.popular ? 380 : 360;
      if (tier.popular) {
        ctx.strokeStyle = COLORS.accent;
        ctx.lineWidth = 2;
      }
      drawGlassCard(tx, ty, 240, cardH);

      if (tier.popular) {
        ctx.fillStyle = COLORS.accent;
        ctx.beginPath();
        var r = 10;
        ctx.moveTo(tx + 60 + r, ty - 10);
        ctx.lineTo(tx + 180 - r, ty - 10);
        ctx.arcTo(tx + 180, ty - 10, tx + 180, ty - 10 + r, r);
        ctx.lineTo(tx + 180, ty + 10);
        ctx.lineTo(tx + 60, ty + 10);
        ctx.lineTo(tx + 60, ty - 10 + r);
        ctx.arcTo(tx + 60, ty - 10, tx + 60 + r, ty - 10, r);
        ctx.fill();

        ctx.font = 'bold 11px Inter, sans-serif';
        ctx.fillStyle = '#fff';
        ctx.textAlign = 'center';
        ctx.fillText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
          ? 'MOST POPULAR' : 'MEEST GEKOZEN', tx + 120, ty + 3);
      }

      drawBoldText(tier.name, tx + 120, ty + 45, 22);
      drawBoldText(tier.price, tx + 120, ty + 100, 48, tier.color);
      drawText(tier.period, tx + 120, ty + 135, 16, COLORS.textMuted);
      drawText(tier.devices + ' ' + (typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
        ? 'devices' : 'apparaten'), tx + 120, ty + 170, 14, COLORS.textSecondary);
    });

    ctx.globalAlpha = a;
    drawText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'All prices excl. 21% VAT • 20% off yearly'
      : 'Alle prijzen excl. 21% BTW \u2022 20% korting bij jaarabonnement',
      W / 2, H - 30, 14, COLORS.textMuted);
    ctx.globalAlpha = 1;
  }

  // === Scene 9: Customer Testimonial ===
  function scene9(t) {
    var a = fadeAlpha(t);
    drawBg();
    drawParticles(a * 0.3);
    ctx.globalAlpha = a;

    drawGlassCard(W / 2 - 300, 120, 600, 300);

    drawText('\u201C', W / 2, 170, 60, COLORS.primary);

    var quote = typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? '"AI-IDLE paid for itself within the first month.'
      : '"AI-IDLE heeft zichzelf binnen de eerste maand terugverdiend.';
    var quote2 = typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'We save over \u20AC1,000 per month on energy costs."'
      : 'We besparen meer dan \u20AC1.000 per maand op energiekosten."';

    drawText(quote, W / 2, 240, 18, COLORS.text);
    drawText(quote2, W / 2, 270, 18, COLORS.text);

    drawText('- Johan de Vries', W / 2, 330, 16, COLORS.textSecondary);
    drawText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'Production Manager, MakerSpace BV' : 'Productiemanager, MakerSpace BV',
      W / 2, 355, 14, COLORS.textMuted);

    // Stars
    for (var i = 0; i < 5; i++) {
      drawText('\u2605', W / 2 - 50 + i * 25, 390, 20, COLORS.orange);
    }

    ctx.globalAlpha = 1;
  }

  // === Scene 10: Integrations ===
  function scene10(t) {
    var a = fadeAlpha(t);
    drawBg();
    ctx.globalAlpha = a;

    drawBoldText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'Integrations' : 'Integraties', W / 2, 50, 36);

    // Central node
    ctx.beginPath();
    ctx.arc(W / 2, H / 2, 50, 0, Math.PI * 2);
    var g = ctx.createRadialGradient(W / 2, H / 2, 0, W / 2, H / 2, 50);
    g.addColorStop(0, COLORS.primary);
    g.addColorStop(1, 'rgba(59, 130, 246, 0.3)');
    ctx.fillStyle = g;
    ctx.fill();
    drawBoldText('API', W / 2, H / 2, 20);

    // Orbiting nodes
    var integrations = [
      { name: 'REST API', angle: 0 },
      { name: 'Webhooks', angle: Math.PI * 0.33 },
      { name: 'Slack', angle: Math.PI * 0.67 },
      { name: 'Discord', angle: Math.PI },
      { name: 'MQTT', angle: Math.PI * 1.33 },
      { name: 'Email', angle: Math.PI * 1.67 },
    ];

    integrations.forEach(function(int, i) {
      var reveal = Math.max(0, Math.min(1, (t - 0.1 - i * 0.05) * 3));
      var r = 160;
      var angle = int.angle + t * 0.5;
      var ix = W / 2 + Math.cos(angle) * r;
      var iy = H / 2 + Math.sin(angle) * r;

      ctx.globalAlpha = a * reveal;

      // Connection line
      ctx.beginPath();
      ctx.moveTo(W / 2, H / 2);
      ctx.lineTo(ix, iy);
      ctx.strokeStyle = 'rgba(59, 130, 246, 0.2)';
      ctx.lineWidth = 1;
      ctx.stroke();

      // Node
      drawGlassCard(ix - 45, iy - 18, 90, 36);
      drawText(int.name, ix, iy, 12, COLORS.textSecondary);
    });

    ctx.globalAlpha = 1;
  }

  // === Scene 11: Roadmap Preview ===
  function scene11(t) {
    var a = fadeAlpha(t);
    drawBg();
    ctx.globalAlpha = a;

    drawBoldText('Roadmap 2026', W / 2, 50, 36);

    var quarters = [
      { q: 'Q1', title: 'Foundation', items: ['9 AI algorithms', 'Shelly/Tuya/Tasmota', 'Digital Twin'], done: true },
      { q: 'Q2', title: 'Intelligence', items: ['AI Chat 2.0', 'Predictive maintenance', 'EPEX integration'], done: false },
      { q: 'Q3', title: 'Integration', items: ['Modbus/BACnet', 'MQTT', 'Solar/PV'], done: false },
      { q: 'Q4', title: 'Scale', items: ['Multi-tenant', '3D Digital Twin', 'ISO 50001'], done: false },
    ];

    // Timeline line
    ctx.beginPath();
    ctx.moveTo(100, 160);
    ctx.lineTo(W - 100, 160);
    var lineG = ctx.createLinearGradient(100, 160, W - 100, 160);
    lineG.addColorStop(0, COLORS.accent);
    lineG.addColorStop(0.25, COLORS.primary);
    lineG.addColorStop(1, COLORS.purple);
    ctx.strokeStyle = lineG;
    ctx.lineWidth = 3;
    ctx.stroke();

    quarters.forEach(function(q, i) {
      var reveal = Math.max(0, Math.min(1, (t - 0.1 - i * 0.1) * 3));
      var qx = 160 + i * 200;
      ctx.globalAlpha = a * reveal;

      // Dot
      ctx.beginPath();
      ctx.arc(qx, 160, 8, 0, Math.PI * 2);
      ctx.fillStyle = q.done ? COLORS.accent : COLORS.primary;
      ctx.fill();

      // Label
      drawBoldText(q.q, qx, 130, 18, q.done ? COLORS.accent : COLORS.primaryLight);

      // Card
      drawGlassCard(qx - 80, 185, 160, 160);
      drawBoldText(q.title, qx, 210, 15);

      q.items.forEach(function(item, j) {
        drawText((q.done ? '\u2705 ' : '\u2022 ') + item, qx, 240 + j * 25, 11, COLORS.textSecondary);
      });
    });

    ctx.globalAlpha = 1;
  }

  // === Scene 12: CTA — Start Today ===
  function scene12(t) {
    var a = fadeAlpha(t);
    drawBg();
    drawParticles(a);
    ctx.globalAlpha = a;

    var scale = easeInOut(Math.min(t * 2, 1));
    ctx.save();
    ctx.translate(W / 2, 180);
    ctx.scale(scale, scale);
    drawGradientText('AI-IDLE', 0, 0, 64);
    ctx.restore();

    drawText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'Start saving today' : 'Start vandaag met besparen', W / 2, 260, 28, COLORS.text);

    // Pricing summary
    drawText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'From \u20AC99/month \u2022 14-day free trial \u2022 No credit card'
      : 'Vanaf \u20AC99/maand \u2022 14 dagen gratis \u2022 Geen creditcard',
      W / 2, 310, 18, COLORS.textSecondary);

    // CTA button visual
    var btnW = 280;
    var btnH = 56;
    var btnX = W / 2 - btnW / 2;
    var btnY = 360;
    var pulse = Math.sin(t * 8) * 3;

    var btnG = ctx.createLinearGradient(btnX, btnY, btnX + btnW, btnY);
    btnG.addColorStop(0, COLORS.primary);
    btnG.addColorStop(1, COLORS.purple);

    ctx.shadowColor = 'rgba(59, 130, 246, 0.4)';
    ctx.shadowBlur = 20 + pulse;
    ctx.fillStyle = btnG;
    ctx.beginPath();
    ctx.moveTo(btnX + 12, btnY);
    ctx.lineTo(btnX + btnW - 12, btnY);
    ctx.arcTo(btnX + btnW, btnY, btnX + btnW, btnY + 12, 12);
    ctx.lineTo(btnX + btnW, btnY + btnH - 12);
    ctx.arcTo(btnX + btnW, btnY + btnH, btnX + btnW - 12, btnY + btnH, 12);
    ctx.lineTo(btnX + 12, btnY + btnH);
    ctx.arcTo(btnX, btnY + btnH, btnX, btnY + btnH - 12, 12);
    ctx.lineTo(btnX, btnY + 12);
    ctx.arcTo(btnX, btnY, btnX + 12, btnY, 12);
    ctx.fill();
    ctx.shadowBlur = 0;

    drawBoldText(typeof aiIdle !== 'undefined' && aiIdle.lang === 'en'
      ? 'Start Free Trial' : 'Start Gratis Proefperiode',
      W / 2, btnY + btnH / 2, 18, '#fff');

    drawText('ai-idle@outlook.com', W / 2, 460, 16, COLORS.textMuted);

    ctx.globalAlpha = 1;
  }

  // === Scene dispatcher ===
  var scenes = [scene1, scene2, scene3, scene4, scene5, scene6, scene7, scene8, scene9, scene10, scene11, scene12];

  function render(timestamp) {
    if (!isPlaying) return;
    if (!startTime) startTime = timestamp;

    var elapsed = timestamp - startTime;
    currentScene = Math.floor(elapsed / SCENE_DURATION) % TOTAL_SCENES;
    var sceneTime = (elapsed % SCENE_DURATION) / SCENE_DURATION;

    updateParticles();

    var sceneFn = scenes[currentScene];
    if (sceneFn) {
      sceneFn(sceneTime);
    }

    // Scene indicator dots
    for (var i = 0; i < TOTAL_SCENES; i++) {
      ctx.beginPath();
      ctx.arc(W / 2 - (TOTAL_SCENES / 2 - i) * 16, H - 15, 3, 0, Math.PI * 2);
      ctx.fillStyle = i === currentScene ? COLORS.primary : 'rgba(255,255,255,0.2)';
      ctx.fill();
    }

    animFrame = requestAnimationFrame(render);
  }

  // === Controls ===
  var playBtn = document.getElementById('promo-play');
  var restartBtn = document.getElementById('promo-restart');

  if (playBtn) {
    playBtn.addEventListener('click', function() {
      isPlaying = !isPlaying;
      this.innerHTML = isPlaying ? '&#x23F8;' : '&#x25B6;';
      if (isPlaying) {
        startTime = 0;
        animFrame = requestAnimationFrame(render);
      } else {
        cancelAnimationFrame(animFrame);
      }
    });
  }

  if (restartBtn) {
    restartBtn.addEventListener('click', function() {
      startTime = 0;
      currentScene = 0;
      isPlaying = true;
      if (playBtn) playBtn.innerHTML = '&#x23F8;';
      cancelAnimationFrame(animFrame);
      animFrame = requestAnimationFrame(render);
    });
  }

  // Start animation
  animFrame = requestAnimationFrame(render);

  // Pause when not visible
  document.addEventListener('visibilitychange', function() {
    if (document.hidden) {
      isPlaying = false;
      cancelAnimationFrame(animFrame);
    } else {
      isPlaying = true;
      startTime = 0;
      animFrame = requestAnimationFrame(render);
    }
  });

})();
