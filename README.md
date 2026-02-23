<p align="center">
  <img src="docs/assets/ai-idle-banner.svg" alt="AI-IDLE Banner" width="600" />
</p>

<h1 align="center">AI-IDLE</h1>
<h3 align="center">Intelligent Industrial IoT Energy Management Platform</h3>

<p align="center">
  <em>Reduce energy waste in manufacturing through real-time AI monitoring and smart automation.</em><br/>
  <em>Verminder energieverspilling in de industrie door real-time AI-monitoring en slimme automatisering.</em>
</p>

<br/>

<p align="center">
  <img alt="Version" src="https://img.shields.io/badge/version-1.0.1-0b7fdb?style=for-the-badge" />
  <img alt="Node" src="https://img.shields.io/badge/node-22_LTS-339933?style=for-the-badge&logo=node.js&logoColor=white" />
  <img alt="TypeScript" src="https://img.shields.io/badge/TypeScript-strict-3178C6?style=for-the-badge&logo=typescript&logoColor=white" />
  <img alt="React" src="https://img.shields.io/badge/React-19-61DAFB?style=for-the-badge&logo=react&logoColor=black" />
  <img alt="Express" src="https://img.shields.io/badge/Express-5-000?style=for-the-badge&logo=express&logoColor=white" />
  <img alt="PostgreSQL" src="https://img.shields.io/badge/PostgreSQL-16-4169E1?style=for-the-badge&logo=postgresql&logoColor=white" />
  <img alt="License" src="https://img.shields.io/badge/license-Proprietary-333?style=for-the-badge" />
</p>

<p align="center">
  <a href="#-the-problem--het-probleem">Problem</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;
  <a href="#-solution--oplossing">Solution</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;
  <a href="#-features">Features</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;
  <a href="#-architecture--architectuur">Architecture</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;
  <a href="#-tech-stack">Tech Stack</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;
  <a href="#-pilot-program--pilotprogramma">Pilot</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;
  <a href="#-community">Community</a>
</p>

---

<br/>

## The Problem / Het Probleem

<table>
<tr>
<td width="50%">

### EN

Manufacturing companies waste an average of **15–30% of energy** through machines running idle, suboptimal schedules, and a lack of visibility into consumption patterns.

Most industrial sites still rely on monthly utility bills and manual walkthroughs to identify waste. By the time the data arrives, the money is already spent.

**There has to be a better way.**

</td>
<td width="50%">

### NL

Industriele bedrijven verspillen gemiddeld **15–30% energie** door machines die onnodig draaien, suboptimale schema's en gebrek aan inzicht in verbruikspatronen.

De meeste productielocaties vertrouwen nog steeds op maandelijkse energierekeningen en handmatige rondes om verspilling op te sporen. Tegen de tijd dat de data er is, is het geld al uitgegeven.

**Dat moet beter kunnen.**

</td>
</tr>
</table>

<br/>

---

<br/>

## Solution / Oplossing

<p align="center">
  <img src="docs/assets/screenshots/dashboard-overview.png" alt="AI-IDLE Dashboard" width="800" />
  <br/><sub>Real-time energy dashboard with live power data, anomaly detection, and cost analysis</sub>
  <br/><sub><em>Real-time energiedashboard met live vermogensdata, anomalie-detectie en kostenanalyse</em></sub>
</p>

<br/>

**AI-IDLE** connects directly to industrial equipment through **Shelly**, **Tasmota**, and **Tuya** smart plugs, collects live power data every second, and uses AI to detect anomalies, predict consumption, and automate device scheduling — so you save energy without losing productivity.

**AI-IDLE** verbindt zich rechtstreeks met industriele apparatuur via **Shelly**, **Tasmota** en **Tuya** smart plugs, verzamelt live vermogensdata per seconde, en gebruikt AI om anomalieen te detecteren, verbruik te voorspellen en apparaatschema's te automatiseren — zodat je energie bespaart zonder productiviteit te verliezen.

<br/>

---

<br/>

## Features

<table>
<tr>
<td width="60%">

### Real-time Monitoring & Control
- **Live dashboard** — power, cost, and trend data updated every second
- **Per-machine sparklines** for instant visual trend analysis
- **Drag-and-drop widgets** — customize your dashboard layout
- **TV casting** — display dashboards on factory floor screens via Chromecast
- **Mobile-first navigation** with dedicated alert tabs
- **Remote control** — switch devices on/off from anywhere

</td>
<td width="40%">

<img src="docs/assets/screenshots/energy-monitoring.png" alt="Energy Monitoring" width="380" />

</td>
</tr>
</table>

<table>
<tr>
<td width="40%">

<img src="docs/assets/screenshots/ai-anomaly-detection.png" alt="AI Anomaly Detection" width="380" />

</td>
<td width="60%">

### AI & Machine Learning
- **Anomaly detection** with statistical Z-score and adaptive thresholds
- **Energy predictions** per machine, department, and site
- **AI Chat Assistant** — ask questions about your energy data in natural language
- **ML Dashboard** with model performance metrics and retraining controls
- **Multi-provider AI**: OpenAI GPT, Anthropic Claude, Grok, local agents

</td>
</tr>
</table>

<table>
<tr>
<td width="60%">

### Digital Twin — 3D Factory Visualization
- **Interactive 3D factory floor** with live energy data per machine
- **Color-coded status** — active (green), idle (amber), offline (gray)
- **Click-to-inspect** — click any machine for detailed metrics
- Built with **Three.js** and **React Three Fiber**

</td>
<td width="40%">

<img src="docs/assets/screenshots/digital-twin-3d.png" alt="Digital Twin 3D" width="380" />

</td>
</tr>
</table>

<br/>

### Full Feature Overview

| Category | Features |
|----------|----------|
| **Device Management** | Auto-discovery (WiFi, mDNS, Bluetooth), Shelly Gen1+Gen2, Tasmota, Tuya, MQTT, remote control, cron scheduling |
| **Reporting** | Automated PDF/Excel reports (daily, weekly, monthly), EPEX spot pricing integration, per-department budgets |
| **CO2 Tracking** | Carbon footprint calculation, offset management, emissions-over-time charts |
| **Gamification** | Energy savings challenges, achievement badges, team leaderboards |
| **Multi-tenant** | Full tenant isolation, RBAC (Developer/Admin/Manager/Viewer), MFA (TOTP), API key management |
| **Integrations** | Alerts via Email, Webhook, Slack, Discord, SMS. Prometheus metrics. GraphQL + REST + WebSocket APIs |
| **Security** | Helmet headers, CSRF protection, rate limiting, input sanitization, memory-only tokens, audit logging, correlation IDs |
| **Automation** | Auto-pilot mode, condition-based triggers, smart scheduling with energy price awareness |

<br/>

---

<br/>

## Architecture / Architectuur

```
                         ┌─────────────────────┐
                         │   Nginx (SSL / LB)   │
                         └──────────┬──────────┘
                                    │
                ┌───────────────────┼───────────────────┐
                │                                       │
     ┌──────────▼──────────┐              ┌─────────────▼─────────────┐
     │   React 19 Frontend  │              │   Express 5 API (x N)    │
     │   Vite 7 · TW3       │◄────────────►│   Node.js 22 LTS         │
     │   Zustand · TanStack  │  WebSocket   │   Prisma 7 (93 models)   │
     └──────────────────────┘  Socket.IO    └─────────────┬─────────────┘
                                                          │
                                   ┌──────────────────────┼──────────────┐
                                   │                      │              │
                        ┌──────────▼──────┐    ┌──────────▼──────┐      │
                        │  PostgreSQL 16   │    │   Redis 7       │      │
                        │  + TimescaleDB   │    │   Cache · PubSub│      │
                        └─────────────────┘    └─────────────────┘      │
                                                                         │
                        ┌────────────────────────────────────────────────▼┐
                        │  BullMQ Workers                                 │
                        │  Data Collection · Predictions · Reports        │
                        ├─────────────────────────────────────────────────┤
                        │  Prometheus · Grafana · Alertmanager            │
                        └─────────────────────────────────────────────────┘

                   Shelly (Gen1+Gen2) · Tasmota · Tuya · MQTT Devices
```

<br/>

---

<br/>

## Tech Stack

| Layer | Technology |
|-------|-----------|
| **Frontend** | React 19, TypeScript (strict), Vite 7, Tailwind CSS 3, Zustand 5, TanStack Query 5, Recharts 3, Three.js, Motion 12, i18next (NL/EN) |
| **Backend** | Express 5, TypeScript (strict), Prisma 7 ORM (93 models), Apollo Server 5 (GraphQL), Socket.IO 4, BullMQ 5, Winston structured logging |
| **Database** | PostgreSQL 16 + TimescaleDB extension, Redis 7 (cache + pub/sub + rate limiting) |
| **AI/ML** | OpenAI GPT, Anthropic Claude, Grok, statistical anomaly detection (Z-score), time-series predictions |
| **Monitoring** | Prometheus metrics, Grafana dashboards, Alertmanager (20+ alert rules), correlation ID tracing |
| **CI/CD** | GitHub Actions (lint, test, build, security scan, Docker build, Playwright E2E) |
| **Deployment** | Docker Compose, Nginx reverse proxy, dumb-init, non-root containers, horizontal scaling |

### By the Numbers

| Metric | Value |
|--------|-------|
| Lines of code | 100,000+ |
| Prisma models | 93 |
| Backend tests | 5,500+ |
| Frontend components | 189 |
| API routes | 42 |
| Services | 90+ |
| Zustand stores | 16 |
| E2E specs | 14 |

<br/>

---

<br/>

## API Overview

AI-IDLE exposes three API layers for maximum integration flexibility:

| Layer | Endpoint | Use Case |
|-------|----------|----------|
| **REST** | `/api/v1/*` | Standard CRUD, device control, reports |
| **GraphQL** | `/api/graphql` | Flexible data queries with field selection |
| **WebSocket** | Socket.IO | Real-time device updates, dashboard streaming |

<details>
<summary><strong>REST Example</strong></summary>

```bash
# Authenticate
curl -X POST https://your-instance/api/v1/auth/login \
  -H "Content-Type: application/json" \
  -d '{"email":"user@company.com","password":"password"}'

# Get dashboard overview
curl https://your-instance/api/v1/dashboard/overview \
  -H "Authorization: Bearer <token>"

# Control a device
curl -X POST https://your-instance/api/v1/devices/abc123/control \
  -H "Authorization: Bearer <token>" \
  -d '{"action":"turn_off"}'
```

</details>

<details>
<summary><strong>GraphQL Example</strong></summary>

```graphql
query {
  devices {
    id
    name
    status
    machine {
      name
      department { name }
    }
    readings(limit: 10) {
      power
      energy
      timestamp
    }
  }
}
```

</details>

<details>
<summary><strong>WebSocket Example</strong></summary>

```javascript
import { io } from 'socket.io-client';
const socket = io('https://your-instance');

socket.on('device:update', (data) => {
  console.log(`${data.deviceId}: ${data.power}W`);
});

socket.on('dashboard:update', (overview) => {
  console.log(`Total power: ${overview.totalPower}W`);
});
```

</details>

<br/>

---

<br/>

## Pilot Program / Pilotprogramma

<table>
<tr>
<td width="50%">

### EN — Interested in AI-IDLE for your business?

We are looking for **pilot partners** in the manufacturing and industrial sector to validate and co-develop the platform.

**What we offer:**
- Fully configured platform tailored to your environment
- Direct access to the development team
- Influence on the product roadmap and priorities
- Early access to new AI-powered features

**What we're looking for:**
- SME manufacturers, logistics, or warehousing companies
- At least 10 machines or devices to monitor
- Willingness to provide feedback and collaborate

</td>
<td width="50%">

### NL — Interesse in AI-IDLE voor jouw bedrijf?

Wij zoeken **pilotpartners** in de industrie en productiesector om het platform samen te valideren en door te ontwikkelen.

**Wat wij bieden:**
- Volledig geconfigureerd platform op maat voor jouw omgeving
- Direct contact met het development team
- Invloed op de roadmap en prioriteiten
- Vroege toegang tot nieuwe AI-features

**Wat wij zoeken:**
- MKB-bedrijven in productie, logistiek of warehousing
- Minimaal 10 machines of apparaten om te monitoren
- Bereidheid om feedback te geven en samen te werken

</td>
</tr>
</table>

<p align="center">
  <br/>
  <a href="mailto:ai-idle@outlook.com"><img alt="Contact Us" src="https://img.shields.io/badge/Contact_us-info%40ai--idle.nl-0b7fdb?style=for-the-badge&logo=mail.ru&logoColor=white" /></a>
  <br/><br/>
  <sub>No commitment required — let's start with a conversation.</sub><br/>
  <sub><em>Vrijblijvend — laten we beginnen met een kennismaking.</em></sub>
</p>

<br/>

---

<br/>

## Community

### Share Your Ideas / Deel je Ideeen

We believe the best industrial energy solutions are built together. This repository is the public home of AI-IDLE — a place to:

- **Discuss features** and share ideas in [Discussions](https://github.com/WimLee115/ai-idle-platform/discussions)
- **Report issues** or suggest improvements via [Issues](https://github.com/WimLee115/ai-idle-platform/issues)
- **Follow our progress** and see what's coming next

Wij geloven dat de beste industriele energieoplossingen samen worden gebouwd. Deze repository is het publieke thuis van AI-IDLE — een plek om:

- **Features te bespreken** en ideeen te delen in [Discussions](https://github.com/WimLee115/ai-idle-platform/discussions)
- **Problemen te melden** of verbeteringen voor te stellen via [Issues](https://github.com/WimLee115/ai-idle-platform/issues)
- **Onze voortgang te volgen** en te zien wat er komt

<br/>

### Support This Project / Steun dit Project

If you believe in reducing industrial energy waste through AI — show your support:

<p align="center">
  <a href="https://github.com/WimLee115/ai-idle-platform/stargazers"><img alt="Star this repo" src="https://img.shields.io/badge/Star_this_project-%E2%AD%90-FFD700?style=for-the-badge" /></a>
  &nbsp;&nbsp;&nbsp;
  <a href="https://buymeacoffee.com/wimlee115"><img alt="Buy Me A Coffee" src="https://img.shields.io/badge/Buy_me_a_coffee-%E2%98%95-FF813F?style=for-the-badge&logo=buy-me-a-coffee&logoColor=white" /></a>
</p>

<p align="center">
  A <strong>star</strong> helps us gain visibility and reach more industrial companies.<br/>
  A <strong>coffee</strong> keeps the late-night engineering sessions going.<br/><br/>
  <em>Een <strong>ster</strong> helpt ons zichtbaarheid te krijgen en meer industriele bedrijven te bereiken.</em><br/>
  <em>Een <strong>koffie</strong> houdt de late-night engineering sessies draaiende.</em>
</p>

<br/>

---

<br/>

## Roadmap

| Quarter | Focus |
|---------|-------|
| **Q1 2026** | Platform v1.0 — Core monitoring, anomaly detection, reporting |
| **Q2 2026** | Digital Twin 2.0 — Enhanced 3D visualization, predictive maintenance |
| **Q3 2026** | Edge Computing — On-premise AI inference, reduced latency |
| **Q4 2026** | Industry Integrations — OPC-UA, Modbus, SCADA connectivity |
| **2027** | Multi-site Management — Central dashboard for enterprise deployments |

<br/>

---

<br/>

## Security

AI-IDLE is built with security as a first-class concern:

- **Helmet** security headers (CSP, HSTS, X-Frame-Options)
- **CORS** with strict origin validation
- **Rate limiting** per IP and per user (role-based multipliers)
- **CSRF** protection via double-submit cookie pattern
- **Input sanitization** against XSS and injection attacks
- **Memory-only token storage** (no localStorage for auth tokens)
- **bcrypt** password hashing with configurable rounds
- **MFA/TOTP** optional per user with QR setup
- **Audit logging** for all state-changing operations
- **Correlation IDs** for full request tracing
- **Graceful shutdown** with connection draining

Found a security issue? Please email [ai-idle@outlook.com](mailto:ai-idle@outlook.com) directly.

<br/>

---

<br/>

## License / Licentie

Copyright (c) 2024–2026 AI-IDLE. All rights reserved.

This is proprietary software. Use, copying, or distribution without written permission is not permitted. Contact [ai-idle@outlook.com](mailto:ai-idle@outlook.com) for licensing information.

<sub>Dit is proprietary software. Gebruik, kopieren of distributie zonder schriftelijke toestemming is niet toegestaan. Neem contact op via [ai-idle@outlook.com](mailto:ai-idle@outlook.com) voor licentie-informatie.</sub>

<br/>

---

<p align="center">
  <sub>Built with dedication in the Netherlands</sub><br/>
  <sub><em>Gebouwd met toewijding in Nederland</em></sub>
  <br/><br/>
  <a href="https://github.com/WimLee115/ai-idle-platform">GitHub</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;
  <a href="https://github.com/WimLee115/ai-idle-platform/discussions">Discussions</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;
  <a href="mailto:ai-idle@outlook.com">Contact</a>&nbsp;&nbsp;&bull;&nbsp;&nbsp;
  <a href="https://buymeacoffee.com/wimlee115">Support</a>
</p>
