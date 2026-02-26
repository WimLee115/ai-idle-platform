<p align="center">
  <img src="docs/assets/ai-idle-banner.svg" alt="AI-IDLE Banner" width="700" />
</p>

<h1 align="center">
  AI-IDLE
</h1>

<h3 align="center">
  Intelligent Industrial IoT Energy Management Platform
</h3>

<p align="center">
  <em>Reduce industrial energy waste by up to 30% through real-time AI monitoring, autonomous agents, edge computing, and smart demand response.</em>
</p>

<p align="center">
  <a href="https://github.com/WimLee115/ai-idle/actions/workflows/ci.yml"><img alt="CI" src="https://img.shields.io/github/actions/workflow/status/WimLee115/ai-idle/ci.yml?branch=main&style=for-the-badge&logo=github&label=CI" /></a>
  <img alt="Version" src="https://img.shields.io/badge/version-1.7.0-0b7fdb?style=for-the-badge" />
  <img alt="License" src="https://img.shields.io/badge/license-Proprietary-333?style=for-the-badge" />
</p>

<p align="center">
  <img alt="TypeScript" src="https://img.shields.io/badge/TypeScript-strict-3178C6?style=flat-square&logo=typescript&logoColor=white" />
  <img alt="React" src="https://img.shields.io/badge/React-19-61DAFB?style=flat-square&logo=react&logoColor=black" />
  <img alt="Express" src="https://img.shields.io/badge/Express-5-000?style=flat-square&logo=express&logoColor=white" />
  <img alt="Node" src="https://img.shields.io/badge/Node.js-24_LTS-339933?style=flat-square&logo=node.js&logoColor=white" />
  <img alt="PostgreSQL" src="https://img.shields.io/badge/PostgreSQL-16-4169E1?style=flat-square&logo=postgresql&logoColor=white" />
  <img alt="Redis" src="https://img.shields.io/badge/Redis-7-DC382D?style=flat-square&logo=redis&logoColor=white" />
  <img alt="Prisma" src="https://img.shields.io/badge/Prisma-7-2D3748?style=flat-square&logo=prisma&logoColor=white" />
  <img alt="Python" src="https://img.shields.io/badge/Python-3.12-3776AB?style=flat-square&logo=python&logoColor=white" />
  <img alt="ONNX" src="https://img.shields.io/badge/ONNX-Runtime-7B68EE?style=flat-square" />
  <img alt="MQTT" src="https://img.shields.io/badge/MQTT-Aedes-660066?style=flat-square" />
  <img alt="Docker" src="https://img.shields.io/badge/Docker-ready-2496ED?style=flat-square&logo=docker&logoColor=white" />
</p>

<p align="center">
  <a href="#the-problem">Problem</a>&nbsp;&bull;&nbsp;
  <a href="#the-solution">Solution</a>&nbsp;&bull;&nbsp;
  <a href="#features">Features</a>&nbsp;&bull;&nbsp;
  <a href="#architecture">Architecture</a>&nbsp;&bull;&nbsp;
  <a href="#quick-start">Quick Start</a>&nbsp;&bull;&nbsp;
  <a href="#pilot-program">Pilot</a>&nbsp;&bull;&nbsp;
  <a href="#support-this-project">Support</a>
</p>

<p align="center">
  <a href="./README.nl.md">Nederlands</a>&nbsp;&bull;&nbsp;
  <strong>English</strong>
</p>

---

## The Problem

> Manufacturing companies waste **15-30% of energy** through machines running idle, suboptimal schedules, and zero visibility into consumption patterns.

Most industrial sites still rely on monthly utility bills to identify waste. By the time the data arrives, the money is already spent and the CO2 is already emitted.

---

## The Solution

**AI-IDLE** connects directly to industrial equipment through **Shelly**, **Tasmota**, **Tuya**, and **MQTT** devices, collects live power data every 10 seconds, and uses **autonomous AI agents**, **edge computing**, and **demand response** to detect anomalies, optimize costs, and automate device scheduling.

| Traditional Monitoring | AI-IDLE |
|----------------------|---------|
| Monthly energy bills | Real-time data every 10 seconds |
| Manual walkthroughs | 4 autonomous AI agents monitoring 24/7 |
| Spreadsheet reports | Automated PDF/Excel reports with AI insights |
| Reactive maintenance | Predictive maintenance + self-healing |
| No cost optimization | ENTSO-E Day-Ahead pricing + demand response |
| Cloud-only processing | Edge computing with ONNX Runtime inference |

---

## Features

### Real-Time Monitoring & Control
- **Live dashboard** with power, cost, and trend data via WebSocket (Socket.IO)
- **Per-machine sparklines** for instant visual trend analysis
- **TV casting** on factory floor screens via Chromecast/DLNA
- **Mobile-first PWA** with offline support and push notifications

### Agentic AI System
4 autonomous agents that monitor, analyze, and act on energy data around the clock. No external API keys required.

| Agent | Capabilities |
|-------|-------------|
| **Energy Agent** | Real-time power monitoring, idle machine detection, department analysis, device control |
| **Cost Agent** | EPEX/ENTSO-E price tracking, cost forecasting, budget monitoring, savings opportunities |
| **Anomaly Agent** | 4-layer anomaly detection, root cause analysis, device health scoring |
| **Maintenance Agent** | Predictive maintenance, overdue task detection, equipment health overview |

### MQTT Broker & Protocol Adapters `NEW in v1.5.0`
- **Embedded Aedes MQTT broker** for local IoT device communication
- **Protocol adapters**: Modbus TCP, OPC-UA, BACnet for industrial equipment
- **External MQTT client** for connecting to cloud brokers
- **Device adapter** translating MQTT messages to AI-IDLE data model

### Edge Computing `NEW in v1.5.0`
- **ONNX Runtime inference** on edge nodes for low-latency anomaly detection
- **Edge-cloud sync** with bidirectional data synchronization
- **OTA firmware updates** with staged rollout strategies (canary, rolling, blue-green)

### Demand Response `NEW in v1.5.0`
- **ENTSO-E Transparency Platform** integration for real NL Day-Ahead prices
- **Price signal reactor** monitoring EPEX spot prices with configurable thresholds
- **Genetic scheduler** for multi-device schedule optimization
- **Battery arbitrage** service for storage charge/discharge strategy
- **Constraint solver** for operational constraint satisfaction
- Modes: simulation, supervised (manual approve), autonomous

### Custom Appliance Profiles `NEW in v1.7.0`
- **User-defined profiles** with custom phase definitions (power range, duration range per phase)
- **Learn from machine** auto-generates profiles from cycle history (P5/P95 percentiles)
- **Profile editor** with drag-and-drop phase ordering and block diagram preview
- Linked to machines for cycle detection with custom thresholds

### Predictive Maintenance Cycle Health `NEW in v1.7.0`
- **5-factor cycle health scoring**: duration drift, efficiency degradation, peak power trend, phase skip rate, cycle count anomaly
- **Per-machine health reports** with weighted overall score (0-100)
- Integrated into existing predictive maintenance engine with weight renormalization

### Cycle-Aware Schedule Optimization `NEW in v1.7.0`
- **Cycle duration constraints**: scheduler ensures contiguous blocks match appliance cycle length
- **Inter-cycle pause** enforcement and max cycles per day limits
- **Automatic constraint derivation** from cycle history and custom profiles
- Enhanced genetic algorithm fitness with cycle-aware penalties

### Enhanced Reporting Engine `NEW in v1.7.0`
- **4 new report types**: Daily, Cycle, Maintenance, Custom
- **Cycle reports**: phase breakdown, efficiency trends, top-5 machines by cycle count
- **Maintenance reports**: task completion rate, active schedules, overdue analysis
- **Excel export** via ExcelJS with 5 worksheets (Overview, Machines, Cycles, Anomalies, Costs)

### Mobile Responsive Dashboard `NEW in v1.7.0`
- **Floating Action Button (FAB)** with quick actions: scan device, generate report, agent chat
- **Compact mobile KPI cards** with trend indicators (visible on mobile only)
- **Swipeable tab navigation** using motion/react drag gestures
- **Pull-to-refresh** gesture on dashboard
- **PWA shortcuts** for Dashboard, Scan, and Reports

### Self-Healing `NEW in v1.5.0`
- **Playbook-based remediation** for automatic incident resolution
- **Incident detection** from device offline events and critical anomalies
- **Auto-recovery** with configurable confidence thresholds

### ML Sidecar (Python) `NEW in v1.5.0`
- **FastAPI microservice** for advanced ML workloads
- **ONNX model serving** with hot-reload
- **Federated learning** for privacy-preserving model training
- **Explainability** (SHAP/LIME) for model transparency

### AI & Machine Learning
- **4-layer anomaly detection**: Statistical (Z-score), ML (Isolation Forest, VAE), pattern-based, context-aware
- **Appliance Signature Recognition**: 18+ appliance types with cycle detection
- **TensorFlow.js** for GPU-accelerated server-side and browser-side inference
- **Energy predictions** per machine, department, and site

### Digital Twin
- **Interactive 3D factory floor** with live energy data (Three.js + React Three Fiber)
- **2D layout editor** with drag-and-drop zone management
- **Color-coded status**: active (green), idle (amber), offline (gray)

### Sustainability & CO2
- **Carbon footprint calculation** with Dutch/EU grid emission factors
- **Scope 1/2 emissions tracking** with targets
- **Gamification**: challenges, badges, leaderboards

---

## Architecture

```
                       +---------------------------+
                       |    Nginx (SSL / LB)        |
                       +-------------+-------------+
                                     |
                +--------------------+--------------------+
                |                                         |
     +----------v----------+               +--------------v--------------+
     |  React 19 Frontend   |               |  Express 5 API             |
     |  Vite 7 . TW 4    |<------------>|  Node.js 24 LTS            |
     |  Zustand 5 . TQ 5   |   Socket.IO  |  Prisma 7 (97 models)      |
     |  Three.js . TF.js   |              |  BullMQ 5 . Apollo GQL 5   |
     +-----------+----------+              +--------------+--------------+
                                                          |
                            +-----------------------------+-------------------+
                            |                             |                   |
                 +----------v--------+         +----------v--------+         |
                 |  PostgreSQL 16     |         |  Redis 7           |         |
                 |  + TimescaleDB    |         |  Cache . PubSub    |         |
                 +-------------------+         +--------------------+         |
                                                                              |
                 +------------------------------------------------------------v-+
                 |  ML Sidecar (Python 3.12 / FastAPI)                          |
                 |  ONNX Runtime . Federated Learning . SHAP/LIME              |
                 +--------------------------------------------------------------+
                 |  Aedes MQTT Broker + Protocol Adapters (Modbus/OPC-UA/BACnet)|
                 +--------------------------------------------------------------+
                 |  Edge Computing (ONNX inference . Edge-Cloud Sync . OTA)     |
                 +--------------------------------------------------------------+
                 |  Demand Response (Price Signals . Genetic Scheduler . DR)    |
                 +--------------------------------------------------------------+
                 |  Self-Healing Engine (Playbooks . Incident Detection)        |
                 +--------------------------------------------------------------+
                 |  4 AI Agents (Energy . Cost . Anomaly . Maintenance)         |
                 +--------------------------------------------------------------+

              Shelly (Gen1+Gen2+Gen3) . Tasmota . Tuya . MQTT . Modbus
```

## Tech Stack

| Layer | Technology |
|-------|-----------|
| **Frontend** | React 19, TypeScript 5.9 (strict), Vite 7, Tailwind CSS 4, Zustand 5, TanStack Query 5, Recharts 3, Three.js, TensorFlow.js 4, Motion 12, i18next (NL/EN) |
| **Backend** | Express 5, TypeScript 5.9 (strict), Prisma 7 (97 models), Apollo Server 5 (GraphQL), Socket.IO 4, BullMQ 5, Zod 4, Winston 3 |
| **ML Sidecar** | Python 3.12, FastAPI, ONNX Runtime, scikit-learn, SHAP, federated learning |
| **IoT/Edge** | Aedes MQTT broker, Modbus TCP, OPC-UA, BACnet protocol adapters, ONNX edge inference, OTA firmware manager |
| **Energy** | ENTSO-E Transparency Platform, EPEX Day-Ahead pricing, genetic scheduler, battery arbitrage, constraint solver |
| **AI/ML** | Rule-based agent engine, TensorFlow.js, Isolation Forest, VAE, appliance signature recognition |
| **Database** | PostgreSQL 16 + TimescaleDB, Redis 7 |
| **CI/CD** | GitHub Actions, Docker Compose, Nginx reverse proxy |

### By the Numbers

```
 284,000+  lines of code (TypeScript + Python)
 97        Prisma database models
 171       backend service modules
 154       frontend components
 145       page components
 58        API route files
 48        API controllers
 23        middleware modules
 17        Zustand stores
 21        AI agent tools
 18        appliance profiles
 4         autonomous AI agents
 2         languages (NL/EN)
 830+      test files
```

---

## Quick Start

### Requirements

| Tool | Version |
|------|---------|
| Node.js | 24 LTS |
| PostgreSQL | 16+ with TimescaleDB |
| Redis | 7+ |
| Python | 3.12+ (for ML sidecar) |
| Docker | 24+ (recommended) |

### Docker (Production)

```bash
git clone https://github.com/WimLee115/ai-idle.git
cd ai-idle
cp backend/.env.example backend/.env
# Edit .env: set DB_PASSWORD, JWT_SECRET, ENCRYPTION_KEY, ENTSOE_API_TOKEN

docker compose up -d
```

### Development

```bash
# Backend
cd backend
cp .env.example .env
npm install
npx prisma generate --config prisma/prisma.config.ts
npx prisma migrate deploy --config prisma/prisma.config.ts
npm run dev                    # http://localhost:5000

# Frontend (new terminal)
cd frontend
npm install
npm run dev                    # http://localhost:3000

# ML Sidecar (new terminal)
cd ml-sidecar
pip install -r requirements.txt
uvicorn src.main:app --port 8001
```

### Enable Demand Response

```bash
# In backend/.env:
ENTSOE_API_TOKEN=your-token-from-transparency.entsoe.eu
DEMAND_RESPONSE_ENABLED=true
DEMAND_RESPONSE_MODE=simulation    # or supervised / autonomous
```

---

## Pilot Program

### We are looking for 2 pilot locations!

AI-IDLE is seeking **2 pilot partners** in the **SME metal/manufacturing** sector.

**What we offer (free):**
- Full platform installation, setup, and onboarding
- Direct access to the developer for customization and support
- All updates and new features during the pilot
- Comprehensive review and optimization report

**What the pilot partner provides:**
- A production environment with at least 10 machines
- Willingness to provide feedback
- Device costs (Shelly smart plugs, ~EUR 15-25 per machine)

<p align="center">
  <a href="mailto:ai-idle@outlook.com"><img alt="Contact Us" src="https://img.shields.io/badge/Interested%3F_Contact_us-ai--idle%40outlook.com-0b7fdb?style=for-the-badge&logo=mail.ru&logoColor=white" /></a>
</p>

---

## Support This Project

<p align="center">
  <a href="https://github.com/WimLee115/ai-idle-platform/stargazers"><img alt="Star" src="https://img.shields.io/badge/Star_this_project-%E2%AD%90-FFD700?style=for-the-badge" /></a>
  &nbsp;&nbsp;
  <a href="https://buymeacoffee.com/wimlee115"><img alt="Buy Me A Coffee" src="https://img.shields.io/badge/Buy_me_a_coffee-%E2%98%95-FF813F?style=for-the-badge&logo=buy-me-a-coffee&logoColor=white" /></a>
</p>

### Contact

- **Email**: [ai-idle@outlook.com](mailto:ai-idle@outlook.com)
- **Public repo**: [github.com/WimLee115/ai-idle-platform](https://github.com/WimLee115/ai-idle-platform)
- **Discussions**: [GitHub Discussions](https://github.com/WimLee115/ai-idle-platform/discussions)

---

## License

Copyright (c) 2024-2026 AI-IDLE. All rights reserved.

This is proprietary software. Contact [ai-idle@outlook.com](mailto:ai-idle@outlook.com) for licensing information.

---

<p align="center">
  <sub>Built with dedication in the Netherlands</sub>
  <br/>
  <sub>Making industrial energy waste a thing of the past, one machine at a time.</sub>
</p>
