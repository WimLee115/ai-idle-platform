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
  <em>Verminder industrieel energieverlies tot 30% door real-time AI-monitoring, autonome agents, edge computing, carbon compliance en slimme vraagrespons.</em>
</p>

<p align="center">
  <a href="https://github.com/WimLee115/ai-idle/actions/workflows/ci.yml"><img alt="CI" src="https://img.shields.io/github/actions/workflow/status/WimLee115/ai-idle/ci.yml?branch=main&style=for-the-badge&logo=github&label=CI" /></a>
  <img alt="Version" src="https://img.shields.io/badge/versie-1.8.0-0b7fdb?style=for-the-badge" />
  <img alt="License" src="https://img.shields.io/badge/licentie-Eigendom-333?style=for-the-badge" />
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
  <img alt="ISO 50001" src="https://img.shields.io/badge/ISO_50001-ready-16a34a?style=flat-square" />
</p>

<p align="center">
  <strong>Nederlands</strong>&nbsp;&bull;&nbsp;
  <a href="./README.md">English</a>
</p>

---

## Het Probleem

> Productiebedrijven verspillen **15-30% energie** door machines die stationair draaien, suboptimale planning en nul zichtbaarheid in verbruikspatronen.

De meeste industriele locaties vertrouwen nog steeds op maandelijkse energierekeningen om verspilling te ontdekken. Tegen de tijd dat de data binnenkomt, is het geld al uitgegeven en de CO2 al uitgestoten. Met toenemende EU-regelgeving rond CO2-rapportage en ISO 50001-vereisten hebben bedrijven meer nodig dan alleen monitoring &mdash; ze hebben een compleet compliance-platform nodig.

---

## De Oplossing

**AI-IDLE** maakt rechtstreeks verbinding met industriele apparatuur via **Shelly**, **Tasmota**, **Tuya** en **MQTT**-apparaten, verzamelt elke 10 seconden live vermogensdata, en gebruikt **autonome AI-agents**, **edge computing**, **vraagrespons** en **carbon compliance tracking** om afwijkingen te detecteren, kosten te optimaliseren, uitstoot te verminderen en regelgeving na te leven.

| Traditionele Monitoring | AI-IDLE |
|----------------------|---------|
| Maandelijkse energierekening | Real-time data elke 10 seconden |
| Handmatige rondgangen | 4 autonome AI-agents 24/7 actief |
| Spreadsheet-rapporten | Geautomatiseerde PDF/Excel-rapporten met AI-inzichten |
| Reactief onderhoud | Voorspellend onderhoud + zelfherstellend |
| Geen kostenoptimalisatie | ENTSO-E Day-Ahead prijzen + vraagrespons |
| Alleen cloudverwerking | Edge computing met ONNX Runtime inferentie |
| Geen uitstootregistratie | Volledige Scope 1/2/3 carbon compliance met ISO 50001 |

---

## Functionaliteiten

### Real-Time Monitoring & Besturing
- **Live dashboard** met vermogen, kosten en trenddata via WebSocket (Socket.IO)
- **Per-machine sparklines** voor directe visuele trendanalyse
- **TV-casting** op fabrieksschermen via Chromecast/DLNA
- **Mobile-first PWA** met offline-ondersteuning en push-notificaties

### Agentisch AI-Systeem
4 autonome agents die 24/7 energiedata monitoren, analyseren en ernaar handelen. Geen externe API-keys vereist.

| Agent | Mogelijkheden |
|-------|-------------|
| **Energie Agent** | Real-time vermogensmonitoring, stilstaande machines detectie, afdelingsanalyse, apparaatbesturing |
| **Kosten Agent** | EPEX/ENTSO-E prijsvolging, kostenprognose, budgetbewaking, besparingsmogelijkheden |
| **Anomalie Agent** | 4-laags anomaliedetectie, oorzaakanalyse, apparaatgezondheidsscore |
| **Onderhoud Agent** | Voorspellend onderhoud, achterstallige taken, apparatuurgezondheidoverzicht |

### Carbon Compliance & Uitstootregistratie `NIEUW in v1.8.0`

Een uitgebreid koolstofmanagementsysteem voor het monitoren, rapporteren en verminderen van industriele CO2-uitstoot.

- **Real-time CO2 Dashboard** met geanimeerde meters voor totale uitstoot, compensaties en netto-uitstoot
- **Duurzaamheidsscore** (0-100) met kleurgecodeerde status en trendanalyse
- **Scope 1/2/3 Emissieregistratie** met zowel marktgebaseerde als locatiegebaseerde Scope 2
- **Multi-land Emissiefactoren** met 2024-data (NL 0,336 - DE 0,364 - FR 0,056 - EU gem. 0,251 kg CO2/kWh)
- **Afdelings- & Machineoverzicht** met per-bron uitstootbijdragen
- **Milieu-impactkaarten** die uitstoot vertalen naar tastbare equivalenten (bomen, auto-km, vluchten)
- **Carbon Offset Beheer** met certificaattracking, verificatieworkflow en providerbeheer
- **Geautomatiseerde Compliance Rapporten** (Dagelijks/Wekelijks/Maandelijks/Jaarlijks/Custom) met PDF/Excel export

### ISO 50001 Energiemanagement `NIEUW in v1.8.0`

Volledige ondersteuning voor ISO 50001:2018 energiemanagementsysteemvereisten.

- **Clausegewijze checklist** voor alle ISO 50001-vereisten
- **Bewijsverzameling** en documentatie per vereiste
- **Verantwoordelijke toewijzing** met deadlines en prioriteitsniveaus
- **Periodieke energiebeoordelingen** met baselinevergelijkingen en EnPI-resultaten
- **Verbeteractietracking** met bevindingendocumentatie
- **Beoordelings-/goedkeuringsworkflow** (Concept &rarr; In Beoordeling &rarr; Afgerond)

### Reductiedoelen & Emissietargets `NIEUW in v1.8.0`

- **Basisjaar vergelijkingen** met doeljaar reductiepercentages
- **Scope-specifieke doelen** (Scope 1, 2, 3 individueel configureerbaar)
- **Methodologietracking** (SBTi, intern, regelgevend)
- **Voortgangsvisualisatie** met trendanalyse ten opzichte van reductiedoelen

### MQTT Broker & Protocoladapters `v1.5.0`
- **Ingebouwde Aedes MQTT-broker** voor lokale IoT-communicatie
- **Protocoladapters**: Modbus TCP, OPC-UA, BACnet voor industriele apparatuur
- **Externe MQTT-client** voor verbinding met cloudbrokers
- **Apparaatadapter** voor vertaling van MQTT-berichten naar AI-IDLE datamodel

### Edge Computing `v1.5.0`
- **ONNX Runtime inferentie** op edge-nodes voor lage-latentie anomaliedetectie
- **Edge-cloud synchronisatie** met bidirectionele datasync
- **OTA firmware-updates** met gefaseerde uitrolstrategieen (canary, rolling, blue-green)

### Vraagrespons `v1.5.0`
- **ENTSO-E Transparency Platform** integratie voor echte NL Day-Ahead prijzen
- **Prijssignaalreactor** die EPEX-spotprijzen bewaakt met configureerbare drempels
- **Genetische planner** voor multi-apparaat planningsoptimalisatie
- **Batterij-arbitrage** service voor opslag laad-/ontlaadstrategie
- **Constraint solver** voor operationele beperkingen
- Modi: simulatie, begeleid (handmatige goedkeuring), autonoom

### Aangepaste Apparaatprofielen `v1.7.0`
- **Gebruikergedefinieerde profielen** met aangepaste fasedefinities (vermogensbereik, duurbereik per fase)
- **Leer van machine** genereert automatisch profielen uit cyclusgeschiedenis (P5/P95 percentielen)
- **Profieleditor** met drag-and-drop faseordening en blokdiagramvoorbeeld
- Gekoppeld aan machines voor cyclusdetectie met aangepaste drempels

### Voorspellend Onderhoud Cyclusgezondheid `v1.7.0`
- **5-factor cyclusgezondheidsscore**: duurdrift, efficientievermindering, piekvermogenstrend, faseoverslag, cyclusaantalanomalie
- **Per-machine gezondheidsrapporten** met gewogen totaalscore (0-100)
- Geintegreerd in bestaande voorspellende onderhoudsengine

### Cyclusbewuste Planningsoptimalisatie `v1.7.0`
- **Cyclusduur beperkingen**: planner garandeert aaneengesloten blokken die overeenkomen met cycluslengte
- **Inter-cycluspauze** handhaving en max cycli per dag limieten
- **Automatische afleiding** van beperkingen uit cyclusgeschiedenis en profielen
- Verbeterd genetisch algoritme met cyclusbewuste penalties

### Uitgebreide Rapportage Engine `v1.7.0`
- **4 nieuwe rapporttypes**: Dagelijks, Cyclus, Onderhoud, Aangepast
- **Cyclusrapporten**: fase-uitsplitsing, efficientietrends, top-5 machines op cyclusaantal
- **Onderhoudsrapporten**: taakvoltooiingspercentage, actieve schema's, achterstandsanalyse
- **Excel-export** via ExcelJS met 5 werkbladen (Overzicht, Machines, Cycli, Anomalieen, Kosten)

### Mobiel Responsief Dashboard `v1.7.0`
- **Floating Action Button (FAB)** met snelacties: apparaat scannen, rapport genereren, agent chat
- **Compacte mobiele KPI-kaarten** met trendindicatoren
- **Swipeable tabnavigatie** met motion/react drag-gebaren
- **Pull-to-refresh** gebaar op dashboard
- **PWA-snelkoppelingen** voor Dashboard, Scan en Rapporten

### Zelfherstellend `v1.5.0`
- **Playbook-gebaseerde herstelacties** voor automatische incidentoplossing
- **Incidentdetectie** uit device-offline events en kritieke anomalieen
- **Auto-recovery** met configureerbare betrouwbaarheidsdrempels

### ML Sidecar (Python) `v1.5.0`
- **FastAPI-microservice** voor geavanceerde ML-workloads
- **ONNX-model serving** met hot-reload
- **Gefedereerd leren** voor privacybeschermende modeltraining
- **Uitlegbaarheid** (SHAP/LIME) voor modeltransparantie

### AI & Machine Learning
- **4-laags anomaliedetectie**: Statistisch (Z-score), ML (Isolation Forest, VAE), patroongebaseerd, contextbewust
- **Apparaat Signatuurherkenning**: 18+ apparaattypes met cyclusdetectie
- **TensorFlow.js** voor GPU-versnelde server- en browserinferentie
- **Energievoorspellingen** per machine, afdeling en locatie

### Digital Twin
- **Interactieve 3D-fabrieksvloer** met live energiedata (Three.js + React Three Fiber)
- **2D-indelingseditor** met drag-and-drop zonebeheer
- **Kleurgecodeerde status**: actief (groen), stationair (amber), offline (grijs)

### Duurzaamheid & CO2
- **CO2-voetafdrukberekening** met Nederlandse/EU grid-emissiefactoren
- **Scope 1/2/3 uitstootregistratie** met ISO 50001 compliance
- **Gamificatie**: uitdagingen, badges, ranglijsten

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
     |  Zustand 5 . TQ 5   |   Socket.IO  |  Prisma 7 (108 modellen)   |
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
                 |  ONNX Runtime . Gefedereerd Leren . SHAP/LIME               |
                 +--------------------------------------------------------------+
                 |  Aedes MQTT Broker + Protocoladapters (Modbus/OPC-UA/BACnet) |
                 +--------------------------------------------------------------+
                 |  Edge Computing (ONNX inferentie . Edge-Cloud Sync . OTA)    |
                 +--------------------------------------------------------------+
                 |  Vraagrespons (Prijssignalen . Genetische Planner . DR)      |
                 +--------------------------------------------------------------+
                 |  Carbon Compliance (Scope 1/2/3 . ISO 50001 . Offsets)      |
                 +--------------------------------------------------------------+
                 |  Zelfherstellende Engine (Playbooks . Incidentdetectie)      |
                 +--------------------------------------------------------------+
                 |  4 AI Agents (Energie . Kosten . Anomalie . Onderhoud)       |
                 +--------------------------------------------------------------+

              Shelly (Gen1+Gen2+Gen3) . Tasmota . Tuya . MQTT . Modbus
```

## Tech Stack

| Laag | Technologie |
|------|-----------|
| **Frontend** | React 19, TypeScript 5.9 (strict), Vite 7, Tailwind CSS 4, Zustand 5, TanStack Query 5, Recharts 3, Three.js, TensorFlow.js 4, Motion 12, i18next (NL/EN) |
| **Backend** | Express 5, TypeScript 5.9 (strict), Prisma 7 (108 modellen), Apollo Server 5 (GraphQL), Socket.IO 4, BullMQ 5, Zod 4, Winston 3 |
| **ML Sidecar** | Python 3.12, FastAPI, ONNX Runtime, scikit-learn, SHAP, gefedereerd leren |
| **IoT/Edge** | Aedes MQTT-broker, Modbus TCP, OPC-UA, BACnet protocoladapters, ONNX edge inferentie, OTA firmware manager |
| **Energie** | ENTSO-E Transparency Platform, EPEX Day-Ahead prijzen, genetische planner, batterij-arbitrage, constraint solver |
| **Carbon** | Scope 1/2/3 emissies, multi-land emissiefactoren, ISO 50001 compliance, carbon offset verificatie |
| **AI/ML** | Regelgebaseerde agent engine, TensorFlow.js, Isolation Forest, VAE, apparaat signatuurherkenning |
| **Database** | PostgreSQL 16 + TimescaleDB, Redis 7 |
| **CI/CD** | GitHub Actions, Docker Compose, Nginx reverse proxy |

### In Cijfers

```
 287.000+  regels code (TypeScript + Python)
 108       Prisma databasemodellen
 118       backend service modules
 161       frontend componenten
 146       pagina componenten
 58        API routebestanden
 49        API controllers
 23        middleware modules
 47        aangepaste React hooks
 16        Zustand stores
 21        AI agent tools
 18        apparaatprofielen
 4         autonome AI-agents
 9         carbon compliance modellen
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

### Ontwikkeling

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

### Vraagrespons Activeren

```bash
# In backend/.env:
ENTSOE_API_TOKEN=jouw-token-van-transparency.entsoe.eu
DEMAND_RESPONSE_ENABLED=true
DEMAND_RESPONSE_MODE=simulation    # of supervised / autonomous
```

---

## Versiegeschiedenis

| Versie | Hoogtepunten |
|--------|-------------|
| **v1.8.0** | Carbon compliance & uitstootregistratie, ISO 50001 ondersteuning, Scope 1/2/3 boekhouden, carbon offset beheer, multi-land emissiefactoren, nul lint warnings |
| **v1.7.0** | Aangepaste apparaatprofielen, cyclusgezondheid, cyclusbewuste planning, uitgebreide rapportage, mobiel responsief dashboard |
| **v1.5.0** | MQTT-broker, edge computing, vraagrespons, zelfherstellend, ML sidecar |
| **v1.2.1** | Agentisch AI-systeem met 4 autonome agents, zwevende agent chat |
| **v1.0.1** | Node 22, Express 5, React 19, Motion 12 upgrades |

---

## Pilotprogramma

### Wij zoeken 2 pilotlocaties!

AI-IDLE zoekt **2 pilotpartners** in de **MKB metaal-/maakindustrie**.

**Wat wij bieden (gratis):**
- Volledige platforminstallatie, configuratie en onboarding
- Direct contact met de ontwikkelaar voor maatwerk en ondersteuning
- Alle updates en nieuwe functies tijdens de pilot
- Uitgebreid evaluatie- en optimalisatierapport

**Wat de pilotpartner biedt:**
- Een productieomgeving met minimaal 10 machines
- Bereidheid om feedback te geven
- Apparaatkosten (Shelly slimme stekkers, ~EUR 15-25 per machine)

<p align="center">
  <a href="mailto:ai-idle@outlook.com"><img alt="Contact" src="https://img.shields.io/badge/Interesse%3F_Neem_contact_op-ai--idle%40outlook.com-0b7fdb?style=for-the-badge&logo=mail.ru&logoColor=white" /></a>
</p>

---

## Steun Dit Project

<p align="center">
  <a href="https://github.com/WimLee115/ai-idle-platform/stargazers"><img alt="Ster" src="https://img.shields.io/badge/Geef_een_ster-%E2%AD%90-FFD700?style=for-the-badge" /></a>
  &nbsp;&nbsp;
  <a href="https://buymeacoffee.com/wimlee115"><img alt="Koop een koffie" src="https://img.shields.io/badge/Koop_een_koffie-%E2%98%95-FF813F?style=for-the-badge&logo=buy-me-a-coffee&logoColor=white" /></a>
</p>

### Contact

- **Email**: [ai-idle@outlook.com](mailto:ai-idle@outlook.com)
- **Publieke repo**: [github.com/WimLee115/ai-idle-platform](https://github.com/WimLee115/ai-idle-platform)
- **Discussies**: [GitHub Discussions](https://github.com/WimLee115/ai-idle-platform/discussions)

---

## Licentie

Copyright (c) 2024-2026 AI-IDLE. Alle rechten voorbehouden.

Dit is eigendomssoftware. Neem contact op met [ai-idle@outlook.com](mailto:ai-idle@outlook.com) voor licentie-informatie.

---

<p align="center">
  <sub>Met toewijding gebouwd in Nederland</sub>
  <br/>
  <sub>Industrieel energieverlies tot het verleden maken, machine voor machine.</sub>
</p>
