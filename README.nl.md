<p align="center">
  <img src="docs/assets/ai-idle-banner.svg" alt="AI-IDLE" width="600" />
</p>

<h1 align="center">AI-IDLE</h1>

<h3 align="center">
  Stop met energie verspillen. Begin met besparen door AI.
</h3>

<p align="center">
  <em>Het intelligente energiemanagementplatform dat industrieel energieverlies met 30% vermindert<br/>door real-time monitoring, autonome AI-agents en slimme automatisering.</em>
</p>

<p align="center">
  <img alt="Versie" src="https://img.shields.io/badge/v1.2.1-0b7fdb?style=for-the-badge" />
  <img alt="Made in NL" src="https://img.shields.io/badge/Gemaakt_in-Nederland-FF6B35?style=for-the-badge" />
  <img alt="IoT" src="https://img.shields.io/badge/Industrieel-IoT-0b7fdb?style=for-the-badge" />
  <img alt="AI" src="https://img.shields.io/badge/AI-Powered-7C3AED?style=for-the-badge" />
  <img alt="Green" src="https://img.shields.io/badge/Groene-Technologie-4CAF50?style=for-the-badge" />
</p>

<p align="center">
  <a href="./PUBLIC_README.md">English</a>&nbsp;&bull;&nbsp;
  <strong>Nederlands</strong>
</p>

---

<br/>

<p align="center">
  <img src="docs/assets/screenshots/dashboard-overview.png" alt="AI-IDLE Dashboard" width="800" />
</p>

<br/>

## Waarom AI-IDLE

Productiebedrijven verspillen gemiddeld **15-30% van hun energie** — dat is geld en CO2 dat letterlijk uit het raam vliegt.

De oorzaak? Machines die 's nachts onnodig draaien. Geen inzicht in het werkelijke verbruik. Energierekeningen die te laat komen om nog actie op te ondernemen. Handmatige rondes die missen wat het menselijk oog niet ziet.

**AI-IDLE lost dit op.** Definitief.

| Zonder AI-IDLE | Met AI-IDLE |
|---------------|-------------|
| Maandelijkse verrassingen op de energierekening | Real-time inzicht elke 10 seconden |
| Handmatige controlerondes | AI die 24/7 autonoom monitort |
| Giswerk en spreadsheets | Datagedreven beslissingen met AI-agents |
| Reactief "repareren als het kapot is" | Voorspellend onderhoud voor storingen |
| 2D-plattegronden op papier | Interactieve 3D Digital Twin |
| Geen idee wat wat kost | EPEX-spotprijsintegratie per machine |

---

## Hoe Het Werkt

```
    Je Machines            AI-IDLE Platform           Jij
    ┌─────────┐           ┌──────────────┐          ┌─────────┐
    │ Machine │──Shelly──►│  Real-time    │          │ Bespaar │
    │ Machine │──Tasmota─►│  AI-Analyse   │──────────► Energie │
    │ Machine │──Tuya────►│  Slimme Actie │          │  Geld   │
    │ Machine │──MQTT────►│  Auto-Rapport │          │  CO2    │
    └─────────┘           └──────────────┘          └─────────┘
```

**3 simpele stappen:**

1. **Inpluggen** — Verbind betaalbare smart plugs (Shelly, Tasmota, Tuya) met je machines. Vanaf ca. EUR 15 per apparaat.

2. **AI monitort** — AI-IDLE verzamelt elke 10 seconden vermogensdata, detecteert anomalieen, identificeert idle machines, voorspelt verbruik en vindt besparingen — volledig automatisch.

3. **Jij bespaart** — Ontvang actiegerichte inzichten, automatische rapporten en laat de AI-agents je energieverbruik optimaliseren terwijl jij je focust op productie.

---

## Functionaliteiten

### Autonome AI-Agents

4 gespecialiseerde AI-agents werken dag en nacht aan je energiedata:

- **Energie Agent** — Monitort real-time verbruik, detecteert idle machines, analyseert per afdeling
- **Kosten Agent** — Volgt EPEX-spotprijzen, voorspelt kosten, identificeert besparingsmogelijkheden
- **Anomalie Agent** — Triageert anomalieen, biedt oorzaakanalyse, scoort apparaatgezondheid
- **Onderhoud Agent** — Voorspelt onderhoudsbehoefte, signaleert achterstallige taken, bewaakt apparatuur

Bereikbaar via de sidebar en een zwevende chatknop op elke pagina. Stel vragen in gewoon Nederlands of Engels: *"Hoeveel energie verbruiken we nu?"* of *"Zijn er anomalieen?"*

### Real-Time Monitoring

- Live dashboard met vermogen, kosten en trenddata via WebSocket
- Per-machine sparklines en instelbare widgetindeling
- Apparaten op afstand bedienen, waar je ook bent
- Mobiel-eerste PWA met offline ondersteuning en pushnotificaties
- TV casting voor fabrieksvloerdisplays

### AI & Machine Learning

- 4-laags anomaliedetectie (statistisch, ML, patroonherkenning, contextbewust)
- Apparaathandtekeningherkenning voor 18+ machinetypen
- TensorFlow.js voor on-device en server-side inferentie
- Automatische cyclusdetectie en energievoorspellingen
- Natuurlijke taal AI-agent chat (Nederlands + Engels)

### 3D Digital Twin

- Interactieve 3D-fabrieksvloer met live data per machine
- Drag-and-drop 2D layout-editor
- Kleurgecodeerde statusvisualisatie (actief/idle/offline)
- Klik-om-te-inspecteren voor gedetailleerde metingen

### Duurzaamheid & CO2

- CO2-voetafdruktracking met Nederlandse/EU-emissiefactoren
- Scope 1/2 emissietracking met doelstellingen
- Gamificatie met challenges, badges en teamranglijsten
- Offsetbeheer en emissierapportage

### Klaar voor de Onderneming

- Multi-tenant met volledige data-isolatie
- Rolgebaseerde toegang (Developer/Admin/Manager/Viewer)
- MFA/TOTP-authenticatie
- 7 rate limiters, AES-256-encryptie, auditlogging
- REST + GraphQL + WebSocket API's
- Integraties: Slack, Discord, Teams, e-mail, Webhook, SMS
- Automatische PDF/Excel-rapporten (dag/week/maand)
- Prometheus + Grafana monitoring
- Docker-deployment met horizontale schaalbaarheid

---

## De Cijfers

<table>
<tr>
<td align="center"><h2>243K+</h2><sub>Regels Code</sub></td>
<td align="center"><h2>97</h2><sub>Databasemodellen</sub></td>
<td align="center"><h2>21</h2><sub>AI-Agenttools</sub></td>
<td align="center"><h2>18</h2><sub>Apparaatprofielen</sub></td>
</tr>
<tr>
<td align="center"><h2>841+</h2><sub>Testbestanden</sub></td>
<td align="center"><h2>4</h2><sub>Autonome Agents</sub></td>
<td align="center"><h2>10s</h2><sub>Data-interval</sub></td>
<td align="center"><h2>2</h2><sub>Talen (NL/EN)</sub></td>
</tr>
</table>

---

## Pilotprogramma

<table>
<tr>
<td>

### Wij zoeken 2 pilotpartners!

AI-IDLE zoekt actief **2 pilotlocaties** in het **MKB metaal/productiesector** om het platform te valideren in een echte productieomgeving.

#### Wat je krijgt — volledig gratis:
- Volledige AI-IDLE platforminstallatie en -configuratie
- Complete setup en onboarding door de ontwikkelaar
- Alle software-updates en nieuwe AI-features tijdens de pilot
- Directe communicatielijn met het development team
- **Directe invloed op de product-roadmap** — jouw feature requests krijgen prioriteit
- Eerste toegang tot nieuwe functies voor de algemene release
- Uitgebreid evaluatierapport en optimalisatieadvies na afloop

#### Wat je bijdraagt:
- Een productieomgeving met minimaal 5 machines
- Bereidheid om feedback te geven en samen te werken
- Alleen de apparaatkosten (Shelly smart plugs, ca. EUR 15-25 per machine)

#### Na de pilot:
Een gedetailleerde review met bereikte energiebesparingen, ROI-analyse en optimalisatieaanbevelingen. Jouw eerlijke feedback helpt ons het beste energiemanagementplatform op de markt te bouwen.

</td>
</tr>
</table>

<p align="center">
  <br/>
  <a href="mailto:ai-idle@outlook.com"><img alt="Contact" src="https://img.shields.io/badge/Interesse%3F_Laten_we_praten-ai--idle%40outlook.com-0b7fdb?style=for-the-badge&logo=mail.ru&logoColor=white" /></a>
  <br/><br/>
  <sub>Vrijblijvend — laten we beginnen met een kennismaking.</sub>
</p>

---

## Steun Ons

AI-IDLE is gebouwd met een missie: **maak industriele energieverspilling verleden tijd**.

Elke kilowattuur die wordt bespaard, betekent minder CO2, lagere kosten en een duurzamere industrie. Geloof je in die missie? Dan kun je helpen:

<p align="center">
  <a href="https://github.com/WimLee115/ai-idle-platform/stargazers"><img alt="Ster" src="https://img.shields.io/badge/Geef_een_ster-%E2%AD%90-FFD700?style=for-the-badge" /></a>
  &nbsp;&nbsp;
  <a href="https://buymeacoffee.com/wimlee115"><img alt="Koffie" src="https://img.shields.io/badge/Koop_een_koffie-%E2%98%95-FF813F?style=for-the-badge&logo=buy-me-a-coffee&logoColor=white" /></a>
</p>

<p align="center">
  Een <strong>ster</strong> helpt ons meer productiebedrijven te bereiken die elke dag energie verspillen.<br/>
  Een <strong>koffie</strong> houdt de late-night engineering sessies draaiende.
</p>

---

## Contact

| | |
|-|-|
| **E-mail** | [ai-idle@outlook.com](mailto:ai-idle@outlook.com) |
| **Pilot-aanvragen** | [ai-idle@outlook.com](mailto:ai-idle@outlook.com) |
| **Discussies** | [GitHub Discussions](https://github.com/WimLee115/ai-idle-platform/discussions) |
| **Issues** | [GitHub Issues](https://github.com/WimLee115/ai-idle-platform/issues) |

---

## Licentie

Copyright (c) 2024-2026 AI-IDLE. Alle rechten voorbehouden.

AI-IDLE is proprietary software. Neem contact op via [ai-idle@outlook.com](mailto:ai-idle@outlook.com) voor licentie- en partnerschapsmogelijkheden.

---

<p align="center">
  <sub>Gebouwd met toewijding in Nederland</sub><br/>
  <sub>Industriele energieverspilling verleden tijd maken, machine voor machine.</sub>
  <br/><br/>
  <a href="mailto:ai-idle@outlook.com">Contact</a>&nbsp;&bull;&nbsp;
  <a href="https://buymeacoffee.com/wimlee115">Steun Ons</a>&nbsp;&bull;&nbsp;
  <a href="https://github.com/WimLee115/ai-idle-platform/discussions">Community</a>
</p>
