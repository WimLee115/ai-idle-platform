<p align="center">
  <img src="docs/assets/ai-idle-banner.svg" alt="AI-IDLE Banner" width="700" />
</p>

<h1 align="center">
  AI-IDLE
</h1>

<h3 align="center">
  Intelligent Industrieel IoT Energiemanagement Platform
</h3>

<p align="center">
  <em>Verminder industrieel energieverlies met 30% door real-time AI-monitoring, autonome agents, edge computing en slimme demand response.</em>
</p>

<p align="center">
  <a href="https://github.com/WimLee115/ai-idle/actions/workflows/ci.yml"><img alt="CI" src="https://img.shields.io/github/actions/workflow/status/WimLee115/ai-idle/ci.yml?branch=main&style=for-the-badge&logo=github&label=CI" /></a>
  <img alt="Versie" src="https://img.shields.io/badge/versie-1.7.0-0b7fdb?style=for-the-badge" />
  <img alt="Licentie" src="https://img.shields.io/badge/licentie-Proprietary-333?style=for-the-badge" />
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
  <a href="./README.md">English</a>&nbsp;&bull;&nbsp;
  <strong>Nederlands</strong>
</p>

---

## Het Probleem

> Industriele bedrijven verspillen **15-30% van hun energie** door machines die onnodig draaien, suboptimale schema's en nul inzicht in verbruikspatronen.

De meeste productielocaties vertrouwen nog op maandelijkse energierekeningen om verspilling op te sporen. Tegen de tijd dat de data beschikbaar is, is het geld al uitgegeven en de CO2 al uitgestoten.

---

## De Oplossing

**AI-IDLE** verbindt zich rechtstreeks met industriele apparatuur via **Shelly**, **Tasmota**, **Tuya** en **MQTT**-apparaten, verzamelt elke 10 seconden live vermogensdata, en gebruikt **autonome AI-agents**, **edge computing** en **demand response** om anomalieen te detecteren, kosten te optimaliseren en apparaatschema's te automatiseren.

| Traditionele Monitoring | AI-IDLE |
|------------------------|---------|
| Maandelijkse energierekening | Real-time data elke 10 seconden |
| Handmatige controlerondes | 4 autonome AI-agents die 24/7 monitoren |
| Spreadsheet-rapporten | Automatische PDF/Excel-rapporten met AI-inzichten |
| Reactief onderhoud | Voorspellend onderhoud + self-healing |
| Geen kostenoptimalisatie | ENTSO-E Day-Ahead prijzen + demand response |
| Alleen cloudverwerking | Edge computing met ONNX Runtime inference |

---

## Functionaliteiten

### Real-Time Monitoring & Bediening
- **Live dashboard** met vermogen, kosten en trenddata via WebSocket (Socket.IO)
- **Per-machine sparklines** voor directe visuele trendanalyse
- **TV-casting** op fabrieksvloerschermen via Chromecast/DLNA
- **Mobiel-eerste PWA** met offline ondersteuning en pushnotificaties

### Agentic AI Systeem
4 autonome agents die energiedata 24/7 monitoren, analyseren en acties ondernemen. Geen externe API-sleutels nodig.

| Agent | Mogelijkheden |
|-------|--------------|
| **Energie Agent** | Real-time vermogensmonitoring, idle-machinedetectie, afdelingsanalyse, apparaatbediening |
| **Kosten Agent** | EPEX/ENTSO-E prijstracking, kostenvoorspelling, budgetbewaking, besparingsmogelijkheden |
| **Anomalie Agent** | 4-laags anomaliedetectie, oorzaakanalyse, apparaatgezondheidsscore |
| **Onderhoud Agent** | Voorspellend onderhoud, achterstallige taken, apparatuuroverzicht |

### MQTT Broker & Protocoladapters `NIEUW in v1.5.0`
- **Embedded Aedes MQTT broker** voor lokale IoT-apparaatcommunicatie
- **Protocoladapters**: Modbus TCP, OPC-UA, BACnet voor industriele apparatuur
- **Externe MQTT-client** voor verbinding met cloud brokers
- **Apparaatadapter** die MQTT-berichten vertaalt naar het AI-IDLE datamodel

### Edge Computing `NIEUW in v1.5.0`
- **ONNX Runtime inference** op edge nodes voor anomaliedetectie met lage latency
- **Edge-cloud sync** met bidirectionele datasynchronisatie
- **OTA firmware-updates** met gefaseerde uitrolstrategieen (canary, rolling, blue-green)

### Demand Response `NIEUW in v1.5.0`
- **ENTSO-E Transparency Platform** integratie voor echte NL Day-Ahead prijzen
- **Prijssignaalreactor** die EPEX-spotprijzen monitort met instelbare drempels
- **Genetisch scheduler** voor multi-device schema-optimalisatie
- **Batterij-arbitrage** voor opslag laad/ontlaad-strategie
- **Constraint solver** voor operationele beperkingen
- Modi: simulatie, supervised (handmatige goedkeuring), autonoom

### Custom Apparaatprofielen `NIEUW in v1.7.0`
- **Door gebruiker gedefinieerde profielen** met aangepaste fasedefinities (vermogensbereik, duurbereik per fase)
- **Leer van machine** genereert automatisch profielen uit cyclushistorie (P5/P95 percentielen)
- **Profiel-editor** met drag-and-drop fasevolgorde en blokdiagram-preview
- Gekoppeld aan machines voor cyclusdetectie met aangepaste drempels

### Voorspellend Onderhoud Cyclusgezondheid `NIEUW in v1.7.0`
- **5-factor cyclusgezondheidsscore**: duur-drift, efficiency-degradatie, piekvermogentrend, fase-skip-ratio, cyclusaantal-anomalie
- **Per-machine gezondheidsrapporten** met gewogen totaalscore (0-100)
- Geïntegreerd in bestaande predictive maintenance engine met gewichtshernormalisatie

### Cyclus-Bewuste Schema-Optimalisatie `NIEUW in v1.7.0`
- **Cyclusduur-constraints**: scheduler garandeert aaneengesloten blokken gelijk aan apparaatcycluslengte
- **Inter-cyclus pauze** handhaving en max cycli per dag limieten
- **Automatische constraint-afleiding** uit cyclushistorie en custom profielen
- Verbeterd genetisch algoritme met cyclus-bewuste fitness penalties

### Verbeterde Rapportage-Engine `NIEUW in v1.7.0`
- **4 nieuwe rapporttypen**: Dagelijks, Cyclus, Onderhoud, Aangepast
- **Cyclusrapporten**: fase-breakdown, efficiency-trends, top-5 machines op cyclusaantal
- **Onderhoudsrapporten**: taakafronding, actieve schema's, achterstallige analyse
- **Excel-export** via ExcelJS met 5 werkbladen (Overzicht, Machines, Cycli, Anomalieën, Kosten)

### Mobiel Responsief Dashboard `NIEUW in v1.7.0`
- **Floating Action Button (FAB)** met snelle acties: scan apparaat, rapport genereren, agent chat
- **Compacte mobiele KPI-kaarten** met trendindicatoren (alleen zichtbaar op mobiel)
- **Swipeable tab-navigatie** met motion/react drag-gestures
- **Pull-to-refresh** gesture op dashboard
- **PWA-shortcuts** voor Dashboard, Scan en Rapporten

### Self-Healing `NIEUW in v1.5.0`
- **Playbook-gebaseerde remediatie** voor automatische incidentoplossing
- **Incidentdetectie** bij apparaatuitval en kritieke anomalieen
- **Automatisch herstel** met instelbare betrouwbaarheidsdrempels

### ML Sidecar (Python) `NIEUW in v1.5.0`
- **FastAPI-microservice** voor geavanceerde ML-workloads
- **ONNX-modelserving** met hot-reload
- **Federated learning** voor privacy-behoudende modeltraining
- **Explainability** (SHAP/LIME) voor modeltransparantie

### AI & Machine Learning
- **4-laags anomaliedetectie**: Statistisch (Z-score), ML (Isolation Forest, VAE), patroonherkenning, contextbewust
- **Apparaathandtekeningherkenning**: 18+ apparaattypen met cyclusdetectie
- **TensorFlow.js** voor GPU-versnelde server- en browser-side inference
- **Energievoorspellingen** per machine, afdeling en locatie

### Digital Twin
- **Interactieve 3D-fabrieksvloer** met live energiedata (Three.js + React Three Fiber)
- **2D layout-editor** met drag-and-drop zonebeheer
- **Kleurgecodeerde status**: actief (groen), idle (oranje), offline (grijs)

### Duurzaamheid & CO2
- **CO2-voetafdrukberekening** met Nederlandse/EU-grid emissiefactoren
- **Scope 1/2 emissietracking** met doelen
- **Gamificatie**: challenges, badges, ranglijsten

---

## Architectuur

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
     |  Zustand 5 . TQ 5   |   Socket.IO  |  Prisma 7 (97 modellen)    |
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
                 |  Aedes MQTT Broker + Protocoladapters (Modbus/OPC-UA/BACnet) |
                 +--------------------------------------------------------------+
                 |  Edge Computing (ONNX inference . Edge-Cloud Sync . OTA)     |
                 +--------------------------------------------------------------+
                 |  Demand Response (Prijssignalen . Genetisch Scheduler . DR)  |
                 +--------------------------------------------------------------+
                 |  Self-Healing Engine (Playbooks . Incidentdetectie)          |
                 +--------------------------------------------------------------+
                 |  4 AI Agents (Energie . Kosten . Anomalie . Onderhoud)       |
                 +--------------------------------------------------------------+

              Shelly (Gen1+Gen2+Gen3) . Tasmota . Tuya . MQTT . Modbus
```

## Technische Stack

| Laag | Technologie |
|------|-----------|
| **Frontend** | React 19, TypeScript 5.9 (strict), Vite 7, Tailwind CSS 4, Zustand 5, TanStack Query 5, Recharts 3, Three.js, TensorFlow.js 4, Motion 12, i18next (NL/EN) |
| **Backend** | Express 5, TypeScript 5.9 (strict), Prisma 7 (97 modellen), Apollo Server 5 (GraphQL), Socket.IO 4, BullMQ 5, Zod 4, Winston 3 |
| **ML Sidecar** | Python 3.12, FastAPI, ONNX Runtime, scikit-learn, SHAP, federated learning |
| **IoT/Edge** | Aedes MQTT broker, Modbus TCP, OPC-UA, BACnet protocoladapters, ONNX edge inference, OTA firmware manager |
| **Energie** | ENTSO-E Transparency Platform, EPEX Day-Ahead prijzen, genetisch scheduler, batterij-arbitrage, constraint solver |
| **AI/ML** | Rule-based agent engine, TensorFlow.js, Isolation Forest, VAE, apparaathandtekeningherkenning |
| **Database** | PostgreSQL 16 + TimescaleDB, Redis 7 |
| **CI/CD** | GitHub Actions, Docker Compose, Nginx reverse proxy |

### In Cijfers

```
 284.000+  regels code (TypeScript + Python)
 97        Prisma-databasemodellen
 171       backend servicemodules
 154       frontend componenten
 145       paginacomponenten
 58        API-routebestanden
 48        API-controllers
 23        middleware-modules
 17        Zustand stores
 21        AI-agenttools
 18        apparaatprofielen
 4         autonome AI-agents
 2         talen (NL/EN)
 830+      testbestanden
```

---

## Snel Starten

### Vereisten

| Tool | Versie |
|------|--------|
| Node.js | 24 LTS |
| PostgreSQL | 16+ met TimescaleDB |
| Redis | 7+ |
| Python | 3.12+ (voor ML sidecar) |
| Docker | 24+ (aanbevolen) |

### Docker (Productie)

```bash
git clone https://github.com/WimLee115/ai-idle.git
cd ai-idle
cp backend/.env.example backend/.env
# Bewerk .env: stel DB_PASSWORD, JWT_SECRET, ENCRYPTION_KEY, ENTSOE_API_TOKEN in

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

# Frontend (nieuw terminalvenster)
cd frontend
npm install
npm run dev                    # http://localhost:3000

# ML Sidecar (nieuw terminalvenster)
cd ml-sidecar
pip install -r requirements.txt
uvicorn src.main:app --port 8001
```

### Demand Response Inschakelen

```bash
# In backend/.env:
ENTSOE_API_TOKEN=jouw-token-van-transparency.entsoe.eu
DEMAND_RESPONSE_ENABLED=true
DEMAND_RESPONSE_MODE=simulation    # of supervised / autonomous
```

---

## Pilotprogramma

### Wij zoeken 2 pilotlocaties!

AI-IDLE zoekt **2 pilotpartners** in het **MKB metaal/productiesector**.

**Wat wij bieden (gratis):**
- Volledige platforminstallatie, setup en onboarding
- Direct contact met de ontwikkelaar voor maatwerk en support
- Alle updates en nieuwe features tijdens de pilot
- Uitgebreid evaluatierapport en optimalisatieadvies

**Wat de pilotpartner bijdraagt:**
- Een productieomgeving met minimaal 10 machines
- Bereidheid om feedback te geven
- Apparaatkosten (Shelly smart plugs, ca. EUR 15-25 per machine)

<p align="center">
  <a href="mailto:ai-idle@outlook.com"><img alt="Neem Contact Op" src="https://img.shields.io/badge/Interesse%3F_Neem_contact_op-ai--idle%40outlook.com-0b7fdb?style=for-the-badge&logo=mail.ru&logoColor=white" /></a>
</p>

---

## Steun Dit Project

<p align="center">
  <a href="https://github.com/WimLee115/ai-idle-platform/stargazers"><img alt="Ster" src="https://img.shields.io/badge/Geef_een_ster-%E2%AD%90-FFD700?style=for-the-badge" /></a>
  &nbsp;&nbsp;
  <a href="https://buymeacoffee.com/wimlee115"><img alt="Koop een Koffie" src="https://img.shields.io/badge/Koop_een_koffie-%E2%98%95-FF813F?style=for-the-badge&logo=buy-me-a-coffee&logoColor=white" /></a>
</p>

### Contact

- **E-mail**: [ai-idle@outlook.com](mailto:ai-idle@outlook.com)
- **Publieke repo**: [github.com/WimLee115/ai-idle-platform](https://github.com/WimLee115/ai-idle-platform)
- **Discussies**: [GitHub Discussions](https://github.com/WimLee115/ai-idle-platform/discussions)

---

## Licentie

Copyright (c) 2024-2026 AI-IDLE. Alle rechten voorbehouden.

Dit is proprietary software. Neem contact op via [ai-idle@outlook.com](mailto:ai-idle@outlook.com) voor licentie-informatie.

---

<p align="center">
  <sub>Gebouwd met toewijding in Nederland</sub>
  <br/>
  <sub>Industriele energieverspilling verleden tijd maken, machine voor machine.</sub>
</p>
