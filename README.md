<img src="https://capsule-render.vercel.app/api?type=venom&color=0b7fdb&height=300&section=header&text=AI-IDLE&fontSize=90&fontColor=ffffff&animation=twinkling&fontAlignY=35&desc=%E2%9A%A1%20Intelligent%20Industrial%20IoT%20Energy%20Management%20Platform&descSize=18&descAlignY=55&descColor=58a6ff" width="100%" />

<div align="center">

  <img src="https://readme-typing-svg.demolab.com?font=JetBrains+Mono&weight=600&size=28&duration=3000&pause=1000&color=0B7FDB&center=true&vCenter=true&multiline=true&repeat=true&width=750&height=100&lines=%E2%9A%A1+Stop+industrial+energy+waste+with+AI;4+Autonomous+Agents+%E2%80%A2+284%2C000%2B+lines+of+code;Real-time+monitoring+every+10+seconds+%E2%80%A2+24%2F7;MQTT+%E2%80%A2+Edge+Computing+%E2%80%A2+Demand+Response+%E2%80%A2+ML" alt="Typing SVG" />

</div>

<br/>

<p align="center">
  <img alt="Version" src="https://img.shields.io/badge/v1.5.0-0b7fdb?style=for-the-badge" />
  <a href="https://ai-idle.nl"><img alt="Website" src="https://img.shields.io/badge/ai--idle.nl-%F0%9F%8C%90-0d6efd?style=for-the-badge" /></a>
  <img alt="License" src="https://img.shields.io/badge/license-Proprietary-333?style=for-the-badge" />
  <a href="https://github.com/WimLee115/ai-idle-platform/stargazers"><img alt="Stars" src="https://img.shields.io/github/stars/WimLee115/ai-idle-platform?style=for-the-badge&color=FFD700" /></a>
  <a href="mailto:ai-idle@outlook.com?subject=AI-IDLE%20Pilot%20Interest"><img alt="Pilot" src="https://img.shields.io/badge/Start_Pilot_Now-%F0%9F%93%A7-FF6B35?style=for-the-badge" /></a>
</p>

<p align="center">
  <img alt="TypeScript" src="https://img.shields.io/badge/TypeScript-strict-3178C6?style=flat-square&logo=typescript&logoColor=white" />
  <img alt="React" src="https://img.shields.io/badge/React-19-61DAFB?style=flat-square&logo=react&logoColor=black" />
  <img alt="Express" src="https://img.shields.io/badge/Express-5-000?style=flat-square&logo=express&logoColor=white" />
  <img alt="Node" src="https://img.shields.io/badge/Node.js-22_LTS-339933?style=flat-square&logo=node.js&logoColor=white" />
  <img alt="PostgreSQL" src="https://img.shields.io/badge/PostgreSQL-16-4169E1?style=flat-square&logo=postgresql&logoColor=white" />
  <img alt="Redis" src="https://img.shields.io/badge/Redis-7-DC382D?style=flat-square&logo=redis&logoColor=white" />
  <img alt="Prisma" src="https://img.shields.io/badge/Prisma-7-2D3748?style=flat-square&logo=prisma&logoColor=white" />
  <img alt="Python" src="https://img.shields.io/badge/Python-3.12-3776AB?style=flat-square&logo=python&logoColor=white" />
  <img alt="ONNX" src="https://img.shields.io/badge/ONNX-Runtime-7B68EE?style=flat-square" />
  <img alt="MQTT" src="https://img.shields.io/badge/MQTT-Aedes-660066?style=flat-square" />
  <img alt="Docker" src="https://img.shields.io/badge/Docker-ready-2496ED?style=flat-square&logo=docker&logoColor=white" />
  <img alt="TensorFlow" src="https://img.shields.io/badge/TensorFlow.js-4-FF6F00?style=flat-square&logo=tensorflow&logoColor=white" />
</p>

<p align="center">
  <a href="#-the-problem">Problem</a>&nbsp;&bull;&nbsp;
  <a href="#-the-solution">Solution</a>&nbsp;&bull;&nbsp;
  <a href="#-features">Features</a>&nbsp;&bull;&nbsp;
  <a href="#-architecture">Architecture</a>&nbsp;&bull;&nbsp;
  <a href="#-tech-stack">Tech Stack</a>&nbsp;&bull;&nbsp;
  <a href="#-quick-start">Quick Start</a>&nbsp;&bull;&nbsp;
  <a href="#-pilot-program">Pilot</a>&nbsp;&bull;&nbsp;
  <a href="#-support">Support</a>
</p>

<p align="center">
  <a href="./README.nl.md"><strong>Nederlands</strong></a>&nbsp;&bull;&nbsp;
  <strong>English</strong>
</p>

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## The Problem

<table>
<tr>
<td width="50%" valign="top">

### Without AI-IDLE

```
 Monthly surprise bills          $$$
 Manual floor walks              ~~~
 Spreadsheet guesswork           ???
 Reactive maintenance            !!!
 No per-machine insight          ...
 Static 2D floor plans           [ ]
 Zero cost optimization          ---
 Cloud-only processing           @@@
```

</td>
<td width="50%" valign="top">

### With AI-IDLE

```
 Real-time data every 10s        >>>
 4 AI agents monitoring 24/7     [*]
 Data-driven AI decisions        !!!
 Predictive maintenance          >>>
 Per-machine cost tracking       $$$
 Interactive 3D Digital Twin     [#]
 ENTSO-E spot price shifting     <<<
 Edge computing with ONNX        ^^^
```

</td>
</tr>
</table>

> *Manufacturing companies waste **15-30% of energy** through machines running idle, suboptimal schedules, and zero visibility into consumption patterns. By the time the monthly bill arrives, the money is already spent and the CO2 is already emitted.*

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## The Solution

<div align="center">

```
Your Machines               AI-IDLE Platform                 You
┌─────────────┐            ┌────────────────────┐           ┌──────────────┐
│  Shelly     │            │                    │           │              │
│  Tasmota    │──────────> │   4 AI Agents      │           │  Save up to  │
│  Tuya       │   10s data │   Edge Computing   │────────>  │  30% Energy  │
│  MQTT       │            │   Demand Response  │  insights │  30% Money   │
│  Modbus     │            │   Self-Healing     │           │  30% CO2     │
│  OPC-UA     │            │   ML Sidecar       │           │              │
└─────────────┘            └────────────────────┘           └──────────────┘
  EUR 15-25/plug              284,000+ lines of code           Zero waste
  Zero downtime               97 database models               Full control
```

</div>

<p align="center">
  <img alt="Step 1" src="https://img.shields.io/badge/1-Plug_In-0b7fdb?style=for-the-badge" />
  <img alt="Step 2" src="https://img.shields.io/badge/2-AI_Monitors_&_Learns-7C3AED?style=for-the-badge" />
  <img alt="Step 3" src="https://img.shields.io/badge/3-You_Save_Automatically-4CAF50?style=for-the-badge" />
</p>

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Features

### Agentic AI System

<table>
<tr>
<td width="50%" valign="top">

#### Energy Agent
<img src="https://img.shields.io/badge/5_tools-Real--time_Analysis-0b7fdb?style=flat-square" />

Real-time power monitoring, idle machine detection, department-level analysis, and automated device control. Catches waste the moment it happens.

</td>
<td width="50%" valign="top">

#### Cost Agent
<img src="https://img.shields.io/badge/5_tools-Cost_Optimization-4CAF50?style=flat-square" />

EPEX/ENTSO-E price tracking, cost forecasting, budget monitoring, and savings opportunity identification. Shifts loads to cheapest hours automatically.

</td>
</tr>
<tr>
<td width="50%" valign="top">

#### Anomaly Agent
<img src="https://img.shields.io/badge/5_tools-Threat_Detection-DC382D?style=flat-square" />

4-layer anomaly detection (statistical, ML, pattern-based, context-aware), root cause analysis, and device health scoring. Catches problems before they become failures.

</td>
<td width="50%" valign="top">

#### Maintenance Agent
<img src="https://img.shields.io/badge/5_tools-Predictive_Care-FF6B35?style=flat-square" />

Predictive maintenance scheduling, overdue task detection, equipment health overview, and maintenance cost tracking. Prevents downtime before it happens.

</td>
</tr>
</table>

<p align="center">
  <em>All 4 agents coordinate through an <strong>orchestrator</strong> — ask questions in natural language (Dutch or English) and get data-driven answers with 20 specialized tools.</em>
</p>

---

### MQTT Broker & Protocol Adapters

<p align="center">
  <img alt="MQTT" src="https://img.shields.io/badge/Aedes-MQTT_Broker-660066?style=for-the-badge" />
  <img alt="Modbus" src="https://img.shields.io/badge/Modbus-TCP-0b7fdb?style=for-the-badge" />
  <img alt="OPC-UA" src="https://img.shields.io/badge/OPC--UA-Industrial-333?style=for-the-badge" />
  <img alt="BACnet" src="https://img.shields.io/badge/BACnet-Building-4CAF50?style=for-the-badge" />
</p>

- **Embedded Aedes MQTT broker** for local IoT device communication
- **Protocol adapters**: Modbus TCP, OPC-UA, BACnet for industrial equipment
- **External MQTT client** for connecting to cloud brokers
- **Device adapter** translating MQTT messages to AI-IDLE data model

---

### Edge Computing

<p align="center">
  <img alt="ONNX" src="https://img.shields.io/badge/ONNX-Edge_Inference-7B68EE?style=for-the-badge" />
  <img alt="Sync" src="https://img.shields.io/badge/Edge--Cloud-Sync-0b7fdb?style=for-the-badge" />
  <img alt="OTA" src="https://img.shields.io/badge/OTA-Firmware_Updates-FF6B35?style=for-the-badge" />
</p>

- **ONNX Runtime inference** on edge nodes for low-latency anomaly detection
- **Edge-cloud sync** with bidirectional data synchronization
- **OTA firmware updates** with staged rollout strategies (canary, rolling, blue-green)

---

### Demand Response & Energy Markets

<p align="center">
  <img alt="ENTSO-E" src="https://img.shields.io/badge/ENTSO--E-Day--Ahead_Prices-0b7fdb?style=for-the-badge" />
  <img alt="EPEX" src="https://img.shields.io/badge/EPEX-Spot_Market-FF6B35?style=for-the-badge" />
  <img alt="Genetic" src="https://img.shields.io/badge/Genetic-Scheduler-7C3AED?style=for-the-badge" />
</p>

- **ENTSO-E Transparency Platform** integration for real NL Day-Ahead prices
- **Price signal reactor** monitoring EPEX spot prices with configurable thresholds
- **Genetic scheduler** for multi-device schedule optimization
- **Battery arbitrage** service for storage charge/discharge strategy
- **Constraint solver** for operational constraint satisfaction
- Modes: `simulation` | `supervised` (manual approve) | `autonomous`

---

### Self-Healing Engine

- **Playbook-based remediation** for automatic incident resolution
- **Incident detection** from device offline events and critical anomalies
- **Auto-recovery** with configurable confidence thresholds

### ML Sidecar (Python)

- **FastAPI microservice** for advanced ML workloads
- **ONNX model serving** with hot-reload
- **Federated learning** for privacy-preserving model training
- **Explainability** (SHAP/LIME) for model transparency

### 3D Digital Twin

- **Interactive 3D factory floor** with live energy data (Three.js + React Three Fiber)
- **Energy flow connections** — 5 types: energy, data, pipe, conveyor, cable
- **Camera presets** — Bird-eye, front, side, follow, walkthrough
- **KPI overlay** — Real-time power, cost, efficiency, alerts
- **Heatmap mode** — Visualize power distribution across your floor
- **Layout editor** — Drag-and-drop with undo/redo, keyboard shortcuts, snap guides

### More

| Feature | Description |
|---|---|
| **Real-time Dashboard** | WebSocket live updates, sparklines, customizable widgets, TV-cast mode |
| **118+ Appliance Profiles** | Auto-recognition for metalworking, woodworking, food, plastics, welding, textile, HVAC, and more |
| **4-Layer Anomaly Detection** | Statistical (Z-score), ML (Isolation Forest, VAE), pattern-based, context-aware |
| **CO2 & Sustainability** | Real-time carbon tracking, gamification challenges, CSRD-ready reports |
| **Audit Dashboard** | Compliance tracking, industry benchmarking, AI analytics over time |
| **Mobile PWA** | Offline support, push notifications, responsive design |
| **Enterprise-ready** | Multi-tenant, MFA, RBAC, REST + GraphQL APIs |
| **Offline Demo** | USB-stick deployable demo for client presentations (Windows/Mac/Linux) |

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Architecture

```
                          ┌──────────────────────────────────┐
                          │      Nginx (SSL / Load Balancer)  │
                          └────────────────┬─────────────────┘
                                           │
                  ┌────────────────────────┼────────────────────────┐
                  │                        │                        │
     ┌────────────▼────────────┐ ┌────────▼────────────┐ ┌────────▼────────────┐
     │   React 19 Frontend     │ │  Express 5 API       │ │  ML Sidecar         │
     │                         │ │                      │ │  Python 3.12        │
     │   Vite 7 + TW 3.4      │ │  Node.js 22 LTS     │ │  FastAPI            │
     │   Zustand 5 + TQ 5     │ │  Prisma 7 (97)      │ │  ONNX Runtime       │
     │   Three.js + TF.js     │ │  BullMQ 5 + GQL 5   │ │  SHAP / LIME        │
     │   Motion 12 + i18next  │ │  Socket.IO 4         │ │  Federated Learning │
     └───────────┬─────────────┘ └────────┬────────────┘ └─────────────────────┘
                 │    Socket.IO           │
                 └────────────────────────┤
                                          │
          ┌───────────────────────────────┼───────────────────────────────┐
          │                               │                               │
 ┌────────▼──────────┐        ┌──────────▼──────────┐                    │
 │  PostgreSQL 16    │        │  Redis 7             │                    │
 │  + TimescaleDB    │        │  Cache + PubSub      │                    │
 └───────────────────┘        └─────────────────────┘                    │
                                                                          │
 ┌────────────────────────────────────────────────────────────────────────▼─┐
 │  Aedes MQTT Broker + Protocol Adapters (Modbus / OPC-UA / BACnet)       │
 ├─────────────────────────────────────────────────────────────────────────┤
 │  Edge Computing (ONNX inference + Edge-Cloud Sync + OTA Firmware)       │
 ├─────────────────────────────────────────────────────────────────────────┤
 │  Demand Response (ENTSO-E Prices + Genetic Scheduler + Battery DR)      │
 ├─────────────────────────────────────────────────────────────────────────┤
 │  Self-Healing Engine (Playbooks + Incident Detection + Auto-Recovery)   │
 ├─────────────────────────────────────────────────────────────────────────┤
 │  4 AI Agents (Energy + Cost + Anomaly + Maintenance) — 20 Tools        │
 └─────────────────────────────────────────────────────────────────────────┘

               Shelly (Gen1-3) + Tasmota + Tuya + MQTT + Modbus + OPC-UA
```

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Tech Stack

<p align="center">
  <img src="https://skillicons.dev/icons?i=ts,react,nodejs,express,postgres,redis,python,docker,prisma,tailwind,vite,threejs,tensorflow,graphql,nginx,bash&perline=8" alt="Tech Stack" />
</p>

<details>
<summary><b>Full breakdown</b></summary>
<br/>

| Domain | Technologies |
|--------|-------------|
| **Frontend** | React 19, TypeScript 5.8 (strict), Vite 7, Tailwind CSS 3.4, Zustand 5, TanStack Query 5, Three.js, TensorFlow.js 4, Recharts 3, Motion 12, i18next (NL/EN) |
| **Backend** | Express 5, TypeScript 5.8 (strict), Prisma 7 (97 models), Apollo Server 5 (GraphQL), Socket.IO 4, BullMQ 5, Zod 4, Winston 3 |
| **ML Sidecar** | Python 3.12, FastAPI, ONNX Runtime, scikit-learn, SHAP, federated learning |
| **IoT/Edge** | Aedes MQTT broker, Modbus TCP, OPC-UA, BACnet, ONNX edge inference, OTA firmware manager |
| **Energy** | ENTSO-E Transparency Platform, EPEX Day-Ahead pricing, genetic scheduler, battery arbitrage, constraint solver |
| **AI/ML** | Rule-based agent engine (20 tools), TensorFlow.js, Isolation Forest, VAE, appliance signature recognition (118+ types) |
| **Database** | PostgreSQL 16 + TimescaleDB, Redis 7 |
| **Security** | JWT + refresh tokens, bcrypt, MFA (TOTP), RBAC, rate limiting, input sanitization, CORS, Helmet |
| **Monitoring** | Prometheus, Grafana, Alertmanager (20+ rules) |
| **CI/CD** | GitHub Actions, Docker Compose, Nginx reverse proxy |

</details>

---

### By the Numbers

<table>
<tr>
<td align="center"><h2>284K+</h2><sub>Lines of Code</sub></td>
<td align="center"><h2>97</h2><sub>Database Models</sub></td>
<td align="center"><h2>171</h2><sub>Backend Services</sub></td>
<td align="center"><h2>4</h2><sub>AI Agents</sub></td>
</tr>
<tr>
<td align="center"><h2>20</h2><sub>Agent Tools</sub></td>
<td align="center"><h2>118+</h2><sub>Appliance Profiles</sub></td>
<td align="center"><h2>58</h2><sub>API Routes</sub></td>
<td align="center"><h2>145</h2><sub>Frontend Pages</sub></td>
</tr>
<tr>
<td align="center"><h2>830+</h2><sub>Test Files</sub></td>
<td align="center"><h2>10s</h2><sub>Data Interval</sub></td>
<td align="center"><h2>2</h2><sub>Languages (NL/EN)</sub></td>
<td align="center"><h2>1</h2><sub>Solo Engineer</sub></td>
</tr>
</table>

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Quick Start

### Requirements

| Tool | Version |
|------|---------|
| Node.js | 22 LTS |
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
cd backend && cp .env.example .env
npm install
npx prisma generate --config prisma/prisma.config.ts
npx prisma migrate deploy --config prisma/prisma.config.ts
npm run dev                    # http://localhost:5000

# Frontend (new terminal)
cd frontend && npm install
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

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Pilot Program

<div align="center">

### We are looking for 2 pilot locations!

</div>

<table>
<tr>
<td width="50%" valign="top">

### What we offer (free)

- Full platform installation & onboarding
- Direct access to the developer
- All updates & new features during pilot
- Comprehensive review & optimization report
- Personal support & direct roadmap influence

</td>
<td width="50%" valign="top">

### What you provide

- Production environment with min. 10 machines
- Willingness to provide feedback
- Hardware costs only (Shelly smart plugs, ~EUR 15-25 per machine)
- **No obligations** — start with a free conversation

</td>
</tr>
</table>

<p align="center">
  <br/>
  <a href="mailto:ai-idle@outlook.com?subject=AI-IDLE%20Pilot%20Interest&body=Company:%0AName:%0ANumber%20of%20machines:%0ABriefly%20describe%20your%20energy%20challenges:"><img alt="Contact" src="https://img.shields.io/badge/Interested%3F_Let's_talk-ai--idle%40outlook.com-0b7fdb?style=for-the-badge&logo=mail.ru&logoColor=white" /></a>
</p>

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Support

<p align="center">
  <a href="https://buymeacoffee.com/wimlee115"><img src="https://img.buymeacoffee.com/button-api/?text=Buy me a coffee&emoji=%E2%98%95&slug=wimlee115&button_colour=0b7fdb&font_colour=ffffff&font_family=JetBrains+Mono&outline_colour=ffffff&coffee_colour=FF6B35" alt="Buy Me A Coffee" /></a>
</p>

<p align="center">
  <a href="mailto:ai-idle@outlook.com"><img alt="Email" src="https://img.shields.io/badge/ai--idle%40outlook.com-%F0%9F%93%A7-0b7fdb?style=for-the-badge" /></a>
  &nbsp;&nbsp;
  <a href="https://ai-idle.nl"><img alt="Website" src="https://img.shields.io/badge/ai--idle.nl-%F0%9F%8C%90-333?style=for-the-badge" /></a>
  &nbsp;&nbsp;
  <a href="https://github.com/WimLee115/ai-idle-platform/discussions"><img alt="Discussions" src="https://img.shields.io/badge/Discussions-%F0%9F%92%AC-7C3AED?style=for-the-badge&logo=github" /></a>
  &nbsp;&nbsp;
  <a href="https://github.com/WimLee115/ai-idle-platform/stargazers"><img alt="Star" src="https://img.shields.io/badge/Star_this_project-%E2%AD%90-FFD700?style=for-the-badge" /></a>
</p>

---

## License

Copyright (c) 2024-2026 AI-IDLE. All rights reserved.

This is proprietary software. Contact [ai-idle@outlook.com](mailto:ai-idle@outlook.com) for licensing information.

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

<p align="center">
  <img alt="Made in NL" src="https://img.shields.io/badge/%F0%9F%87%B3%F0%9F%87%B1_Built_in-The_Netherlands-FF6B35?style=for-the-badge" />
  <img alt="Solo" src="https://img.shields.io/badge/%F0%9F%94%A5_Solo-Engineer-FF4500?style=for-the-badge" />
  <img alt="Green" src="https://img.shields.io/badge/%F0%9F%8C%B1_Green-Tech-4CAF50?style=for-the-badge" />
</p>

<p align="center">
  <sub><b>Solo engineer. Full-stack builder. Making industrial energy waste a thing of the past.</b></sub>
</p>

<img src="https://capsule-render.vercel.app/api?type=waving&color=0b7fdb&height=120&section=footer" width="100%" />
