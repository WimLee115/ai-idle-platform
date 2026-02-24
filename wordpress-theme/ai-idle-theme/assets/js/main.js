/**
 * AI-IDLE Theme — Main JavaScript
 * Smooth scroll, animations, language switching, pricing toggle, ROI calculator
 */

(function() {
  'use strict';

  // === Mobile Menu ===
  var hamburger = document.getElementById('hamburger');
  var navMenu = document.getElementById('nav-menu');

  if (hamburger && navMenu) {
    hamburger.addEventListener('click', function() {
      navMenu.classList.toggle('open');
    });

    // Close on link click
    navMenu.querySelectorAll('a').forEach(function(link) {
      link.addEventListener('click', function() {
        navMenu.classList.remove('open');
      });
    });
  }

  // === Header scroll effect ===
  var header = document.getElementById('site-header');
  if (header) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  }

  // === Smooth scroll for anchor links ===
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // === Scroll animations (Intersection Observer) ===
  var animateElements = document.querySelectorAll('.animate-in');
  if (animateElements.length > 0 && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.animationPlayState = 'running';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1 });

    animateElements.forEach(function(el) {
      el.style.opacity = '0';
      observer.observe(el);
    });
  }

  // === Language switcher (cookie) ===
  var langLinks = document.querySelectorAll('.lang-switch');
  langLinks.forEach(function(link) {
    link.addEventListener('click', function(e) {
      var url = new URL(this.href);
      var lang = url.searchParams.get('lang');
      if (lang) {
        document.cookie = 'ai_idle_lang=' + lang + ';path=/;max-age=31536000;SameSite=Lax';
      }
    });
  });

  // === Pricing Toggle ===
  var pricingToggle = document.getElementById('pricing-toggle');
  if (pricingToggle) {
    var isYearly = false;
    var monthlyLabel = document.querySelector('[data-period="monthly"]');
    var yearlyLabel = document.querySelector('[data-period="yearly"]');

    pricingToggle.addEventListener('click', function() {
      isYearly = !isYearly;
      this.classList.toggle('yearly', isYearly);

      if (monthlyLabel) monthlyLabel.classList.toggle('active', !isYearly);
      if (yearlyLabel) yearlyLabel.classList.toggle('active', isYearly);

      // Update all pricing displays
      document.querySelectorAll('.pricing-price').forEach(function(priceEl) {
        var monthly = priceEl.getAttribute('data-monthly');
        var yearly = priceEl.getAttribute('data-yearly');
        if (monthly && yearly) {
          var value = isYearly ? yearly : monthly;
          var period = isYearly
            ? (typeof aiIdle !== 'undefined' ? aiIdle.i18n['pricing.year'] || '/jaar' : '/jaar')
            : (typeof aiIdle !== 'undefined' ? aiIdle.i18n['pricing.month'] || '/maand' : '/maand');

          // Format number with dots for thousands
          var formatted = Number(value).toLocaleString('nl-NL');
          priceEl.innerHTML = '<span class="currency">&euro;</span>' + formatted + '<span class="period">' + period + '</span>';
        }
      });
    });
  }

  // === ROI Calculator ===
  var roiCost = document.getElementById('roi-energy-cost');
  var roiMachines = document.getElementById('roi-machines');
  var roiSavingsPct = document.getElementById('roi-savings-pct');
  var roiSavingsLabel = document.getElementById('roi-savings-label');
  var roiMonthlySaving = document.getElementById('roi-monthly-saving');
  var roiYearlySaving = document.getElementById('roi-yearly-saving');
  var roiPayback = document.getElementById('roi-payback');

  function calculateROI() {
    if (!roiCost || !roiMachines || !roiSavingsPct) return;

    var cost = parseInt(roiCost.value) || 0;
    var machines = parseInt(roiMachines.value) || 0;
    var pct = parseInt(roiSavingsPct.value) || 0;

    if (roiSavingsLabel) roiSavingsLabel.textContent = pct + '%';

    // Determine tier based on machine count
    var licenseCost;
    if (machines <= 15) {
      licenseCost = 99;
    } else if (machines <= 50) {
      licenseCost = 299;
    } else {
      licenseCost = 749;
    }

    var grossSaving = cost * (pct / 100);
    var netSaving = grossSaving - licenseCost;
    var yearlySaving = netSaving * 12;

    if (roiMonthlySaving) {
      roiMonthlySaving.textContent = '\u20AC' + Math.round(Math.max(0, netSaving)).toLocaleString('nl-NL');
    }
    if (roiYearlySaving) {
      roiYearlySaving.textContent = '\u20AC' + Math.round(Math.max(0, yearlySaving)).toLocaleString('nl-NL');
    }
    if (roiPayback) {
      if (netSaving > 0) {
        var months = Math.ceil(licenseCost / grossSaving);
        var lang = (typeof aiIdle !== 'undefined') ? aiIdle.lang : 'nl';
        roiPayback.textContent = '< ' + months + (lang === 'nl' ? ' maand' : ' month');
      } else {
        roiPayback.textContent = '-';
      }
    }
  }

  if (roiCost) roiCost.addEventListener('input', calculateROI);
  if (roiMachines) roiMachines.addEventListener('input', calculateROI);
  if (roiSavingsPct) roiSavingsPct.addEventListener('input', calculateROI);

  // Initial calculation
  calculateROI();

})();
