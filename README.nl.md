<img src="https://capsule-render.vercel.app/api?type=venom&color=0b7fdb&height=300&section=header&text=AI-IDLE&fontSize=90&fontColor=ffffff&animation=twinkling&fontAlignY=35&desc=%E2%9A%A1%20Intelligent%20Industrieel%20IoT%20Energiemanagement%20Platform&descSize=18&descAlignY=55&descColor=58a6ff" width="100%" />

<div align="center">

  <img src="https://readme-typing-svg.demolab.com?font=JetBrains+Mono&weight=600&size=28&duration=3000&pause=1000&color=0B7FDB&center=true&vCenter=true&multiline=true&repeat=true&width=750&height=100&lines=%E2%9A%A1+Stop+industri%C3%ABle+energieverspilling+met+AI;4+Autonome+Agents+%E2%80%A2+284.000%2B+regels+code;Real-time+monitoring+elke+10+seconden+%E2%80%A2+24%2F7;MQTT+%E2%80%A2+Edge+Computing+%E2%80%A2+Demand+Response+%E2%80%A2+ML" alt="Typing SVG" />

</div>

<br/>

<p align="center">
  <img alt="Versie" src="https://img.shields.io/badge/v1.5.0-0b7fdb?style=for-the-badge" />
  <a href="https://ai-idle.nl"><img alt="Website" src="https://img.shields.io/badge/ai--idle.nl-%F0%9F%8C%90-0d6efd?style=for-the-badge" /></a>
  <img alt="Licentie" src="https://img.shields.io/badge/licentie-Proprietary-333?style=for-the-badge" />
  <a href="https://github.com/WimLee115/ai-idle-platform/stargazers"><img alt="Sterren" src="https://img.shields.io/github/stars/WimLee115/ai-idle-platform?style=for-the-badge&color=FFD700" /></a>
  <a href="mailto:ai-idle@outlook.com?subject=AI-IDLE%20Pilot%20Interesse"><img alt="Pilot" src="https://img.shields.io/badge/Word_Pilot_Partner-%F0%9F%93%A7-FF6B35?style=for-the-badge" /></a>
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
  <a href="#-het-probleem">Probleem</a>&nbsp;&bull;&nbsp;
  <a href="#-de-oplossing">Oplossing</a>&nbsp;&bull;&nbsp;
  <a href="#-functies">Functies</a>&nbsp;&bull;&nbsp;
  <a href="#-architectuur">Architectuur</a>&nbsp;&bull;&nbsp;
  <a href="#-tech-stack">Tech Stack</a>&nbsp;&bull;&nbsp;
  <a href="#-snel-starten">Snel Starten</a>&nbsp;&bull;&nbsp;
  <a href="#-pilotprogramma">Pilot</a>&nbsp;&bull;&nbsp;
  <a href="#-ondersteuning">Support</a>
</p>

<p align="center">
  <strong>Nederlands</strong>&nbsp;&bull;&nbsp;
  <a href="./README.md">English</a>
</p>

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Het Probleem

<table>
<tr>
<td width="50%" valign="top">

### Zonder AI-IDLE

```
 Maandelijkse verrassingsrekening  $$$
 Handmatige rondjes op de vloer   ~~~
 Gokken met spreadsheets          ???
 Reactief onderhoud                !!!
 Geen inzicht per machine          ...
 Statische 2D plattegronden       [ ]
 Nul kostenoptimalisatie           ---
 Alleen cloud-verwerking           @@@
```

</td>
<td width="50%" valign="top">

### Met AI-IDLE

```
 Real-time data elke 10 seconden   >>>
 4 AI-agents monitoren 24/7        [*]
 Datagedreven AI-beslissingen       !!!
 Voorspellend onderhoud             >>>
 Kosten per machine bijgehouden     $$$
 Interactieve 3D Digital Twin       [#]
 ENTSO-E spotprijzen load-shifting  <<<
 Edge computing met ONNX            ^^^
```

</td>
</tr>
</table>

> *Fabrieken verspillen **15-30% van hun energie** aan idle machines, slechte planning en nul zicht op verbruikspatronen. Tegen de tijd dat de maandrekening binnenkomt, is het geld al uitgegeven en de CO2 al uitgestoten.*

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## De Oplossing

<div align="center">

```
Jouw Machines               AI-IDLE Platform                 Jij
┌─────────────┐            ┌────────────────────┐           ┌──────────────┐
│  Shelly     │            │                    │           │              │
│  Tasmota    │──────────> │   4 AI-Agents      │           │  Bespaar tot │
│  Tuya       │   10s data │   Edge Computing   │────────>  │  30% Energie │
│  MQTT       │            │   Demand Response  │  inzicht  │  30% Geld    │
│  Modbus     │            │   Self-Healing     │           │  30% CO2     │
│  OPC-UA     │            │   ML Sidecar       │           │              │
└─────────────┘            └────────────────────┘           └──────────────┘
  EUR 15-25/plug              284.000+ regels code            Nul verspilling
  Geen downtime               97 databasemodellen             Volledige controle
```

</div>

<p align="center">
  <img alt="Stap 1" src="https://img.shields.io/badge/1-Inpluggen-0b7fdb?style=for-the-badge" />
  <img alt="Stap 2" src="https://img.shields.io/badge/2-AI_Monitort_&_Leert-7C3AED?style=for-the-badge" />
  <img alt="Stap 3" src="https://img.shields.io/badge/3-Jij_Bespaart_Automatisch-4CAF50?style=for-the-badge" />
</p>

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Functies

### Agentisch AI-Systeem

<table>
<tr>
<td width="50%" valign="top">

#### Energy Agent
<img src="https://img.shields.io/badge/5_tools-Realtime_Analyse-0b7fdb?style=flat-square" />

Real-time vermogensmonitoring, idle-machinedetectie, afdelingsniveau-analyse en geautomatiseerde apparaatbesturing. Vangt verspilling op het moment dat het gebeurt.

</td>
<td width="50%" valign="top">

#### Cost Agent
<img src="https://img.shields.io/badge/5_tools-Kostenoptimalisatie-4CAF50?style=flat-square" />

EPEX/ENTSO-E prijstracking, kostenvoorspelling, budgetbewaking en identificatie van besparingsmogelijkheden. Verschuift belasting automatisch naar de goedkoopste uren.

</td>
</tr>
<tr>
<td width="50%" valign="top">

#### Anomaly Agent
<img src="https://img.shields.io/badge/5_tools-Dreigingsdetectie-DC382D?style=flat-square" />

4-laags anomaliedetectie (statistisch, ML, patroongebaseerd, contextbewust), oorzaakanalyse en apparaatgezondheidsscore. Vangt problemen voordat ze storingen worden.

</td>
<td width="50%" valign="top">

#### Maintenance Agent
<img src="https://img.shields.io/badge/5_tools-Voorspellend_Onderhoud-FF6B35?style=flat-square" />

Voorspellende onderhoudsplanning, achterstallige taakdetectie, overzicht apparaatgezondheid en onderhoudskostentracking. Voorkomt downtime voordat het optreedt.

</td>
</tr>
</table>

<p align="center">
  <em>Alle 4 agents coordineren via een <strong>orchestrator</strong> — stel vragen in natuurlijke taal (Nederlands of Engels) en krijg datagedreven antwoorden met 20 gespecialiseerde tools.</em>
</p>

---

### MQTT Broker & Protocol Adapters

<p align="center">
  <img alt="MQTT" src="https://img.shields.io/badge/Aedes-MQTT_Broker-660066?style=for-the-badge" />
  <img alt="Modbus" src="https://img.shields.io/badge/Modbus-TCP-0b7fdb?style=for-the-badge" />
  <img alt="OPC-UA" src="https://img.shields.io/badge/OPC--UA-Industrieel-333?style=for-the-badge" />
  <img alt="BACnet" src="https://img.shields.io/badge/BACnet-Gebouw-4CAF50?style=for-the-badge" />
</p>

- **Ingebedde Aedes MQTT broker** voor lokale IoT-apparaatcommunicatie
- **Protocol adapters**: Modbus TCP, OPC-UA, BACnet voor industrieel materieel
- **Externe MQTT client** voor verbinding met cloud brokers
- **Device adapter** vertaalt MQTT-berichten naar AI-IDLE datamodel

---

### Edge Computing

<p align="center">
  <img alt="ONNX" src="https://img.shields.io/badge/ONNX-Edge_Inference-7B68EE?style=for-the-badge" />
  <img alt="Sync" src="https://img.shields.io/badge/Edge--Cloud-Sync-0b7fdb?style=for-the-badge" />
  <img alt="OTA" src="https://img.shields.io/badge/OTA-Firmware_Updates-FF6B35?style=for-the-badge" />
</p>

- **ONNX Runtime inference** op edge nodes voor lage-latentie anomaliedetectie
- **Edge-cloud sync** met bidirectionele datasynchronisatie
- **OTA firmware-updates** met gefaseerde uitrolstrategieen (canary, rolling, blue-green)

---

### Demand Response & Energiemarkten

<p align="center">
  <img alt="ENTSO-E" src="https://img.shields.io/badge/ENTSO--E-Day--Ahead_Prijzen-0b7fdb?style=for-the-badge" />
  <img alt="EPEX" src="https://img.shields.io/badge/EPEX-Spotmarkt-FF6B35?style=for-the-badge" />
  <img alt="Genetisch" src="https://img.shields.io/badge/Genetische-Scheduler-7C3AED?style=for-the-badge" />
</p>

- **ENTSO-E Transparency Platform** integratie voor echte NL Day-Ahead prijzen
- **Prijssignaalreactor** die EPEX spotprijzen monitort met configureerbare drempels
- **Genetische scheduler** voor multi-device planning-optimalisatie
- **Batterij-arbitrage** service voor opslag laad/ontlaadstrategie
- **Constraint solver** voor operationele beperkingsvoldoening
- Modi: `simulatie` | `begeleid` (handmatig goedkeuren) | `autonoom`

---

### Self-Healing Engine

- **Playbook-gebaseerde remediatie** voor automatische incidentoplossing
- **Incidentdetectie** bij apparaat-offline-events en kritieke anomalieen
- **Auto-recovery** met configureerbare betrouwbaarheidsdrempels

### ML Sidecar (Python)

- **FastAPI microservice** voor geavanceerde ML-workloads
- **ONNX model serving** met hot-reload
- **Federated learning** voor privacy-bewarend modeltraining
- **Uitlegbaarheid** (SHAP/LIME) voor modeltransparantie

### 3D Digital Twin

- **Interactieve 3D fabrieksvloer** met live energiedata (Three.js + React Three Fiber)
- **Energiestroomverbindingen** — 5 types: energie, data, pijp, transportband, kabel
- **Camerapresets** — Vogelvlucht, voor, zij, volgen, walkthrough
- **KPI-overlay** — Real-time vermogen, kosten, efficientie, alerts
- **Heatmap-modus** — Visualiseer stroomverdeling over je vloer
- **Layout-editor** — Drag-and-drop met ongedaan maken/opnieuw, sneltoetsen, snapgidsen

### Meer

| Functie | Beschrijving |
|---|---|
| **Real-time Dashboard** | WebSocket live updates, sparklines, aanpasbare widgets, TV-castmodus |
| **118+ Apparaatprofielen** | Automatische herkenning voor metaalbewerking, houtbewerking, voeding, kunststof, lassen, textiel, HVAC en meer |
| **4-Laags Anomaliedetectie** | Statistisch (Z-score), ML (Isolation Forest, VAE), patroongebaseerd, contextbewust |
| **CO2 & Duurzaamheid** | Real-time koolstoftracking, gamificatie-uitdagingen, CSRD-klare rapporten |
| **Audit Dashboard** | Compliancetracking, industriebenchmarking, AI-analytics over tijd |
| **Mobiele PWA** | Offline-ondersteuning, pushmeldingen, responsief ontwerp |
| **Enterprise-ready** | Multi-tenant, MFA, RBAC, REST + GraphQL API's |
| **Offline Demo** | USB-stick inzetbare demo voor klantpresentaties (Windows/Mac/Linux) |

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Architectuur

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
 │  Demand Response (ENTSO-E Prijzen + Genetische Scheduler + Batterij DR) │
 ├─────────────────────────────────────────────────────────────────────────┤
 │  Self-Healing Engine (Playbooks + Incidentdetectie + Auto-Recovery)     │
 ├─────────────────────────────────────────────────────────────────────────┤
 │  4 AI-Agents (Energy + Cost + Anomaly + Maintenance) — 20 Tools        │
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
<summary><b>Volledig overzicht</b></summary>
<br/>

| Domein | Technologieen |
|--------|---------------|
| **Frontend** | React 19, TypeScript 5.8 (strict), Vite 7, Tailwind CSS 3.4, Zustand 5, TanStack Query 5, Three.js, TensorFlow.js 4, Recharts 3, Motion 12, i18next (NL/EN) |
| **Backend** | Express 5, TypeScript 5.8 (strict), Prisma 7 (97 modellen), Apollo Server 5 (GraphQL), Socket.IO 4, BullMQ 5, Zod 4, Winston 3 |
| **ML Sidecar** | Python 3.12, FastAPI, ONNX Runtime, scikit-learn, SHAP, federated learning |
| **IoT/Edge** | Aedes MQTT broker, Modbus TCP, OPC-UA, BACnet, ONNX edge inference, OTA firmware manager |
| **Energie** | ENTSO-E Transparency Platform, EPEX Day-Ahead prijzen, genetische scheduler, batterij-arbitrage, constraint solver |
| **AI/ML** | Rule-based agent engine (20 tools), TensorFlow.js, Isolation Forest, VAE, apparaathandtekeningherkenning (118+ types) |
| **Database** | PostgreSQL 16 + TimescaleDB, Redis 7 |
| **Beveiliging** | JWT + refresh tokens, bcrypt, MFA (TOTP), RBAC, rate limiting, inputsanering, CORS, Helmet |
| **Monitoring** | Prometheus, Grafana, Alertmanager (20+ regels) |
| **CI/CD** | GitHub Actions, Docker Compose, Nginx reverse proxy |

</details>

---

### In Cijfers

<table>
<tr>
<td align="center"><h2>284K+</h2><sub>Regels Code</sub></td>
<td align="center"><h2>97</h2><sub>Databasemodellen</sub></td>
<td align="center"><h2>171</h2><sub>Backend Services</sub></td>
<td align="center"><h2>4</h2><sub>AI-Agents</sub></td>
</tr>
<tr>
<td align="center"><h2>20</h2><sub>Agent Tools</sub></td>
<td align="center"><h2>118+</h2><sub>Apparaatprofielen</sub></td>
<td align="center"><h2>58</h2><sub>API Routes</sub></td>
<td align="center"><h2>145</h2><sub>Frontend Pagina's</sub></td>
</tr>
<tr>
<td align="center"><h2>830+</h2><sub>Testbestanden</sub></td>
<td align="center"><h2>10s</h2><sub>Data-interval</sub></td>
<td align="center"><h2>2</h2><sub>Talen (NL/EN)</sub></td>
<td align="center"><h2>1</h2><sub>Solo Engineer</sub></td>
</tr>
</table>

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Snel Starten

### Vereisten

| Tool | Versie |
|------|--------|
| Node.js | 22 LTS |
| PostgreSQL | 16+ met TimescaleDB |
| Redis | 7+ |
| Python | 3.12+ (voor ML sidecar) |
| Docker | 24+ (aanbevolen) |

### Docker (Productie)

```bash
git clone https://github.com/WimLee115/ai-idle.git
cd ai-idle
cp backend/.env.example backend/.env
# Pas .env aan: stel DB_PASSWORD, JWT_SECRET, ENCRYPTION_KEY, ENTSOE_API_TOKEN in

docker compose up -d
```

### Ontwikkeling

```bash
# Backend
cd backend && cp .env.example .env
npm install
npx prisma generate --config prisma/prisma.config.ts
npx prisma migrate deploy --config prisma/prisma.config.ts
npm run dev                    # http://localhost:5000

# Frontend (nieuw terminalvenster)
cd frontend && npm install
npm run dev                    # http://localhost:3000

# ML Sidecar (nieuw terminalvenster)
cd ml-sidecar
pip install -r requirements.txt
uvicorn src.main:app --port 8001
```

### Demand Response Activeren

```bash
# In backend/.env:
ENTSOE_API_TOKEN=jouw-token-van-transparency.entsoe.eu
DEMAND_RESPONSE_ENABLED=true
DEMAND_RESPONSE_MODE=simulation    # of supervised / autonomous
```

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Pilotprogramma

<div align="center">

### We zoeken 2 pilotlocaties!

</div>

<table>
<tr>
<td width="50%" valign="top">

### Wat wij bieden (gratis)

- Volledige platforminstallatie & onboarding
- Directe toegang tot de developer
- Alle updates & nieuwe features tijdens pilot
- Uitgebreid beoordelings- & optimalisatierapport
- Persoonlijke support & directe invloed op roadmap

</td>
<td width="50%" valign="top">

### Wat jij levert

- Productieomgeving met min. 10 machines
- Bereidheid om feedback te geven
- Alleen hardwarekosten (Shelly smart plugs, ~EUR 15-25 per machine)
- **Geen verplichtingen** — start met een vrijblijvend gesprek

</td>
</tr>
</table>

<p align="center">
  <br/>
  <a href="mailto:ai-idle@outlook.com?subject=AI-IDLE%20Pilot%20Interesse&body=Bedrijf:%0ANaam:%0AAantal%20machines:%0ABeschrijf%20kort%20je%20energie-uitdagingen:"><img alt="Contact" src="https://img.shields.io/badge/Interesse%3F_Laten_we_praten-ai--idle%40outlook.com-0b7fdb?style=for-the-badge&logo=mail.ru&logoColor=white" /></a>
</p>

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

---

## Ondersteuning

<p align="center">
  <a href="https://buymeacoffee.com/wimlee115"><img src="https://img.buymeacoffee.com/button-api/?text=Koop een koffie&emoji=%E2%98%95&slug=wimlee115&button_colour=0b7fdb&font_colour=ffffff&font_family=JetBrains+Mono&outline_colour=ffffff&coffee_colour=FF6B35" alt="Buy Me A Coffee" /></a>
</p>

<p align="center">
  <a href="mailto:ai-idle@outlook.com"><img alt="E-mail" src="https://img.shields.io/badge/ai--idle%40outlook.com-%F0%9F%93%A7-0b7fdb?style=for-the-badge" /></a>
  &nbsp;&nbsp;
  <a href="https://ai-idle.nl"><img alt="Website" src="https://img.shields.io/badge/ai--idle.nl-%F0%9F%8C%90-333?style=for-the-badge" /></a>
  &nbsp;&nbsp;
  <a href="https://github.com/WimLee115/ai-idle-platform/discussions"><img alt="Discussies" src="https://img.shields.io/badge/Discussies-%F0%9F%92%AC-7C3AED?style=for-the-badge&logo=github" /></a>
  &nbsp;&nbsp;
  <a href="https://github.com/WimLee115/ai-idle-platform/stargazers"><img alt="Ster" src="https://img.shields.io/badge/Geef_een_ster-%E2%AD%90-FFD700?style=for-the-badge" /></a>
</p>

---

## Licentie

Copyright (c) 2024-2026 AI-IDLE. Alle rechten voorbehouden.

Dit is proprietary software. Neem contact op via [ai-idle@outlook.com](mailto:ai-idle@outlook.com) voor licentie-informatie.

<img src="https://i.imgur.com/dBaSKWF.gif" height="20" width="100%">

<p align="center">
  <img alt="Gemaakt in NL" src="https://img.shields.io/badge/%F0%9F%87%B3%F0%9F%87%B1_Gebouwd_in-Nederland-FF6B35?style=for-the-badge" />
  <img alt="Solo" src="https://img.shields.io/badge/%F0%9F%94%A5_Solo-Engineer-FF4500?style=for-the-badge" />
  <img alt="Groen" src="https://img.shields.io/badge/%F0%9F%8C%B1_Groene-Technologie-4CAF50?style=for-the-badge" />
</p>

<p align="center">
  <sub><b>Solo engineer. Full-stack bouwer. Industriele energieverspilling tot het verleden maken.</b></sub>
</p>

<img src="https://capsule-render.vercel.app/api?type=waving&color=0b7fdb&height=120&section=footer" width="100%" />
