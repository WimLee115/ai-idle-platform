/**
 * AI-IDLE Theme — Main JavaScript
 *
 * @package AI_IDLE
 */

(function () {
  'use strict';

  // ─── Sticky Navigation ───────────────────────────────────
  const nav = document.getElementById('mainNav');
  let lastScroll = 0;

  function handleNavScroll() {
    const currentScroll = window.scrollY;

    if (currentScroll > 80) {
      nav.classList.add('nav--scrolled');
    } else {
      nav.classList.remove('nav--scrolled');
    }

    // Hide nav on scroll down, show on scroll up
    if (currentScroll > lastScroll && currentScroll > 400) {
      nav.style.transform = 'translateY(-100%)';
    } else {
      nav.style.transform = 'translateY(0)';
    }
    lastScroll = currentScroll;
  }

  window.addEventListener('scroll', handleNavScroll, { passive: true });

  // ─── Mobile Menu Toggle ──────────────────────────────────
  const navToggle = document.getElementById('navToggle');
  const navLinks = document.getElementById('navLinks');

  if (navToggle && navLinks) {
    navToggle.addEventListener('click', function () {
      navToggle.classList.toggle('nav-toggle--active');
      navLinks.classList.toggle('nav-links--open');
      document.body.classList.toggle('menu-open');
    });

    // Close menu on link click
    navLinks.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () {
        navToggle.classList.remove('nav-toggle--active');
        navLinks.classList.remove('nav-links--open');
        document.body.classList.remove('menu-open');
      });
    });
  }

  // ─── Smooth Scroll ───────────────────────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
      var targetId = this.getAttribute('href');
      if (targetId === '#') return;

      var target = document.querySelector(targetId);
      if (target) {
        e.preventDefault();
        var navHeight = nav ? nav.offsetHeight : 0;
        var targetPosition = target.getBoundingClientRect().top + window.scrollY - navHeight - 20;

        window.scrollTo({
          top: targetPosition,
          behavior: 'smooth',
        });
      }
    });
  });

  // ─── Scroll Animations (Intersection Observer) ───────────
  function initScrollAnimations() {
    var animatedElements = document.querySelectorAll('[data-animate]');

    if (!('IntersectionObserver' in window)) {
      // Fallback: show everything
      animatedElements.forEach(function (el) {
        el.classList.add('animated');
      });
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('animated');
            observer.unobserve(entry.target);
          }
        });
      },
      {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px',
      }
    );

    animatedElements.forEach(function (el) {
      observer.observe(el);
    });
  }

  // ─── Counter Animation ───────────────────────────────────
  function initCounters() {
    var counters = document.querySelectorAll('[data-count]');

    if (!('IntersectionObserver' in window)) {
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            animateCounter(entry.target);
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.5 }
    );

    counters.forEach(function (counter) {
      observer.observe(counter);
    });
  }

  function animateCounter(element) {
    var target = parseInt(element.getAttribute('data-count'), 10);
    var suffix = element.textContent.replace(/[0-9]/g, '').trim();
    var duration = 2000;
    var start = 0;
    var startTime = null;

    function easeOutQuart(t) {
      return 1 - Math.pow(1 - t, 4);
    }

    function updateCounter(currentTime) {
      if (!startTime) startTime = currentTime;
      var elapsed = currentTime - startTime;
      var progress = Math.min(elapsed / duration, 1);

      var current = Math.floor(easeOutQuart(progress) * target);
      element.textContent = current.toLocaleString('nl-NL') + suffix;

      if (progress < 1) {
        requestAnimationFrame(updateCounter);
      } else {
        element.textContent = target.toLocaleString('nl-NL') + suffix;
      }
    }

    requestAnimationFrame(updateCounter);
  }

  // ─── Active Nav Link Highlighting ────────────────────────
  function initActiveNavLinks() {
    var sections = document.querySelectorAll('section[id]');
    var navAnchors = document.querySelectorAll('.nav-links a');

    if (!sections.length || !navAnchors.length) return;

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var id = entry.target.getAttribute('id');
            navAnchors.forEach(function (a) {
              a.classList.remove('nav-link--active');
              if (a.getAttribute('href') === '#' + id) {
                a.classList.add('nav-link--active');
              }
            });
          }
        });
      },
      {
        threshold: 0.3,
        rootMargin: '-80px 0px -50% 0px',
      }
    );

    sections.forEach(function (section) {
      observer.observe(section);
    });
  }

  // ─── Chat Demo Typing Effect ─────────────────────────────
  function initChatDemo() {
    var chatMessages = document.querySelectorAll('.chat-message');
    if (!chatMessages.length) return;

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            var chatWindow = entry.target;
            var messages = chatWindow.querySelectorAll('.chat-message');
            messages.forEach(function (msg, index) {
              msg.style.opacity = '0';
              msg.style.transform = 'translateY(20px)';
              setTimeout(function () {
                msg.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                msg.style.opacity = '1';
                msg.style.transform = 'translateY(0)';
              }, 400 * index);
            });
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.3 }
    );

    var chatWindow = document.querySelector('.chat-window');
    if (chatWindow) {
      observer.observe(chatWindow);
    }
  }

  // ─── Parallax Background ─────────────────────────────────
  function initParallax() {
    var heroGlows = document.querySelectorAll('.hero-glow');
    if (!heroGlows.length) return;

    window.addEventListener(
      'scroll',
      function () {
        var scrolled = window.scrollY;
        heroGlows.forEach(function (glow, i) {
          var speed = 0.3 + i * 0.1;
          glow.style.transform = 'translateY(' + scrolled * speed + 'px)';
        });
      },
      { passive: true }
    );
  }

  // ─── Initialize ──────────────────────────────────────────
  document.addEventListener('DOMContentLoaded', function () {
    initScrollAnimations();
    initCounters();
    initActiveNavLinks();
    initChatDemo();
    initParallax();
  });
})();
