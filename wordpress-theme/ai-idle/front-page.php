<?php
/**
 * Front Page Template
 *
 * @package AI_IDLE
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero" id="hero">
    <div class="hero-bg">
        <div class="hero-grid"></div>
        <div class="hero-glow hero-glow--1"></div>
        <div class="hero-glow hero-glow--2"></div>
    </div>
    <div class="container">
        <div class="hero-content">
            <div class="hero-badges">
                <span class="badge badge--nl">Gemaakt in Nederland</span>
                <span class="badge badge--iot">Industrieel IoT</span>
                <span class="badge badge--ai">AI-Powered</span>
                <span class="badge badge--green">Groene Tech</span>
            </div>
            <h1 class="hero-title">
                <?php echo esc_html( get_theme_mod( 'hero_title', 'Stop met energie verspillen. Begin met besparen door AI.' ) ); ?>
            </h1>
            <p class="hero-subtitle">
                <?php echo esc_html( get_theme_mod( 'hero_subtitle', 'Het intelligente energiemanagementplatform dat industrieel energieverlies met 30% vermindert door real-time monitoring, autonome AI-agents en slimme automatisering.' ) ); ?>
            </p>
            <div class="hero-actions">
                <a href="#pilot" class="btn btn--primary btn--lg">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/></svg>
                    Word Pilotpartner
                </a>
                <a href="#features" class="btn btn--ghost btn--lg">
                    Ontdek Features
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="m6 9 6 6 6-6"/></svg>
                </a>
            </div>
            <div class="hero-stats">
                <div class="hero-stat">
                    <span class="hero-stat-number">30%</span>
                    <span class="hero-stat-label">Energiebesparing</span>
                </div>
                <div class="hero-stat-divider"></div>
                <div class="hero-stat">
                    <span class="hero-stat-number">10s</span>
                    <span class="hero-stat-label">Data-interval</span>
                </div>
                <div class="hero-stat-divider"></div>
                <div class="hero-stat">
                    <span class="hero-stat-number">4</span>
                    <span class="hero-stat-label">AI Agents</span>
                </div>
                <div class="hero-stat-divider"></div>
                <div class="hero-stat">
                    <span class="hero-stat-number">24/7</span>
                    <span class="hero-stat-label">Monitoring</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Problem Section -->
<section class="section section--problem" id="probleem">
    <div class="container">
        <div class="section-header" data-animate>
            <span class="section-label">Het Probleem</span>
            <h2 class="section-title">Productiebedrijven verspillen 15-30% van hun energie</h2>
            <p class="section-subtitle">Dat is geld en CO2 dat letterlijk uit het raam vliegt. Elke dag opnieuw.</p>
        </div>

        <div class="comparison-grid" data-animate>
            <div class="comparison-card comparison-card--without">
                <div class="comparison-card-header">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="m15 9-6 6M9 9l6 6"/></svg>
                    <h3>Zonder AI-IDLE</h3>
                </div>
                <ul class="comparison-list">
                    <li>Maandelijkse verrassingen op de energierekening</li>
                    <li>Handmatige controlerondes door de fabriek</li>
                    <li>Giswerk en spreadsheets</li>
                    <li>Reactief: repareren als het kapot is</li>
                    <li>2D-plattegronden op papier</li>
                    <li>Geen idee wat machines kosten per uur</li>
                </ul>
            </div>
            <div class="comparison-card comparison-card--with">
                <div class="comparison-card-header">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><path d="m9 11 3 3L22 4"/></svg>
                    <h3>Met AI-IDLE</h3>
                </div>
                <ul class="comparison-list">
                    <li>Real-time inzicht elke 10 seconden</li>
                    <li>AI die 24/7 autonoom monitort</li>
                    <li>Datagedreven beslissingen met AI-agents</li>
                    <li>Voorspellend onderhoud voor storingen</li>
                    <li>Interactieve 3D Digital Twin</li>
                    <li>EPEX-spotprijsintegratie per machine</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- How It Works -->
<section class="section section--how" id="oplossing">
    <div class="container">
        <div class="section-header" data-animate>
            <span class="section-label">Hoe Het Werkt</span>
            <h2 class="section-title">3 simpele stappen naar energiebesparing</h2>
            <p class="section-subtitle">Van installatie tot besparing in minder dan een dag.</p>
        </div>

        <div class="steps-grid" data-animate>
            <div class="step-card">
                <div class="step-number">1</div>
                <div class="step-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 2v6M12 22v-6M4.93 4.93l4.24 4.24M14.83 14.83l4.24 4.24M2 12h6M22 12h-6M4.93 19.07l4.24-4.24M14.83 9.17l4.24-4.24"/>
                    </svg>
                </div>
                <h3>Inpluggen</h3>
                <p>Verbind betaalbare smart plugs (Shelly, Tasmota, Tuya) met je machines. Vanaf ca. &euro;15 per apparaat. Geen complexe installatie nodig.</p>
            </div>

            <div class="step-connector">
                <svg width="48" height="24" viewBox="0 0 48 24" fill="none" stroke="var(--primary)" stroke-width="2">
                    <path d="M0 12h40M36 6l6 6-6 6" stroke-dasharray="4 4"/>
                </svg>
            </div>

            <div class="step-card">
                <div class="step-number">2</div>
                <div class="step-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 2a4 4 0 0 1 4 4c0 1.95-1.4 3.58-3.25 3.93L12 22"/>
                        <path d="M12 2a4 4 0 0 0-4 4c0 1.95 1.4 3.58 3.25 3.93"/>
                        <circle cx="12" cy="6" r="1" fill="currentColor"/>
                    </svg>
                </div>
                <h3>AI Monitort</h3>
                <p>AI-IDLE verzamelt elke 10 seconden vermogensdata, detecteert anomalieen, identificeert idle machines en voorspelt verbruik — volledig automatisch.</p>
            </div>

            <div class="step-connector">
                <svg width="48" height="24" viewBox="0 0 48 24" fill="none" stroke="var(--primary)" stroke-width="2">
                    <path d="M0 12h40M36 6l6 6-6 6" stroke-dasharray="4 4"/>
                </svg>
            </div>

            <div class="step-card">
                <div class="step-number">3</div>
                <div class="step-icon">
                    <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                        <circle cx="12" cy="12" r="4"/>
                    </svg>
                </div>
                <h3>Jij Bespaart</h3>
                <p>Ontvang actiegerichte inzichten, automatische rapporten en laat de AI-agents je energieverbruik optimaliseren terwijl jij je focust op productie.</p>
            </div>
        </div>

        <!-- Architecture Diagram -->
        <div class="architecture-diagram" data-animate>
            <div class="arch-column">
                <h4>Jouw Machines</h4>
                <div class="arch-items">
                    <div class="arch-item">Shelly Smart Plug</div>
                    <div class="arch-item">Tasmota Device</div>
                    <div class="arch-item">Tuya Smart Plug</div>
                    <div class="arch-item">MQTT Sensor</div>
                </div>
            </div>
            <div class="arch-arrows">
                <div class="arch-arrow"></div>
                <div class="arch-arrow"></div>
                <div class="arch-arrow"></div>
                <div class="arch-arrow"></div>
            </div>
            <div class="arch-column arch-column--center">
                <h4>AI-IDLE Platform</h4>
                <div class="arch-items">
                    <div class="arch-item arch-item--highlight">Real-time Analyse</div>
                    <div class="arch-item arch-item--highlight">AI-Agents</div>
                    <div class="arch-item arch-item--highlight">Slimme Actie</div>
                    <div class="arch-item arch-item--highlight">Auto-Rapport</div>
                </div>
            </div>
            <div class="arch-arrows">
                <div class="arch-arrow"></div>
            </div>
            <div class="arch-column">
                <h4>Jouw Besparing</h4>
                <div class="arch-items">
                    <div class="arch-item arch-item--green">Minder Energie</div>
                    <div class="arch-item arch-item--green">Lagere Kosten</div>
                    <div class="arch-item arch-item--green">Minder CO2</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="section section--features" id="features">
    <div class="container">
        <div class="section-header" data-animate>
            <span class="section-label">Features</span>
            <h2 class="section-title">Alles wat je nodig hebt voor intelligent energiebeheer</h2>
            <p class="section-subtitle">Van real-time monitoring tot voorspellend onderhoud — in een platform.</p>
        </div>

        <div class="features-grid" data-animate>
            <!-- Real-Time Monitoring -->
            <div class="feature-card">
                <div class="feature-icon feature-icon--blue">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
                    </svg>
                </div>
                <h3>Real-Time Monitoring</h3>
                <p>Live dashboard met vermogen, kosten en trenddata via WebSocket. Per-machine sparklines en instelbare widgets.</p>
                <ul class="feature-list">
                    <li>Data elke 10 seconden</li>
                    <li>Per-machine sparklines</li>
                    <li>Drag-and-drop widgets</li>
                    <li>TV casting voor fabrieken</li>
                </ul>
            </div>

            <!-- AI & Machine Learning -->
            <div class="feature-card">
                <div class="feature-icon feature-icon--purple">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2a4 4 0 0 1 4 4c0 1.95-1.4 3.58-3.25 3.93L12 22"/>
                        <path d="M12 2a4 4 0 0 0-4 4c0 1.95 1.4 3.58 3.25 3.93"/>
                    </svg>
                </div>
                <h3>AI &amp; Machine Learning</h3>
                <p>4-laags anomaliedetectie, apparaathandtekeningherkenning voor 18+ machinetypen en TensorFlow.js inferentie.</p>
                <ul class="feature-list">
                    <li>Statistisch + ML + Patroon + Context</li>
                    <li>18+ apparaatprofielen</li>
                    <li>Automatische cyclusdetectie</li>
                    <li>Energievoorspellingen</li>
                </ul>
            </div>

            <!-- 3D Digital Twin -->
            <div class="feature-card">
                <div class="feature-icon feature-icon--teal">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 3L2 8l10 5 10-5-10-5z"/>
                        <path d="M2 16l10 5 10-5"/>
                        <path d="M2 12l10 5 10-5"/>
                    </svg>
                </div>
                <h3>3D Digital Twin</h3>
                <p>Interactieve 3D-fabrieksvloer met live data per machine. Kleurgecodeerd: actief, idle, offline.</p>
                <ul class="feature-list">
                    <li>Three.js 3D visualisatie</li>
                    <li>2D drag-and-drop editor</li>
                    <li>Klik-om-te-inspecteren</li>
                    <li>Live statusweergave</li>
                </ul>
            </div>

            <!-- Apparaathandtekeningen -->
            <div class="feature-card">
                <div class="feature-icon feature-icon--orange">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <h3>Apparaat&shy;handtekeningen</h3>
                <p>Machine learning herkent automatisch 18+ machinetypen aan hun unieke vermogensprofiel — van CNC-machines tot compressoren.</p>
                <ul class="feature-list">
                    <li>18+ machineprofielen</li>
                    <li>Automatische herkenning</li>
                    <li>Adaptief leren</li>
                    <li>Faseclassificatie</li>
                </ul>
            </div>

            <!-- Rapportage -->
            <div class="feature-card">
                <div class="feature-icon feature-icon--red">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <path d="M14 2v6h6M16 13H8M16 17H8M10 9H8"/>
                    </svg>
                </div>
                <h3>Automatische Rapporten</h3>
                <p>PDF en Excel-rapporten worden automatisch gegenereerd — dagelijks, wekelijks en maandelijks. Inclusief EPEX-prijsdata.</p>
                <ul class="feature-list">
                    <li>PDF + Excel export</li>
                    <li>Dag/week/maand schema</li>
                    <li>Per-afdeling breakdown</li>
                    <li>EPEX-prijskoppeling</li>
                </ul>
            </div>

            <!-- Enterprise Features -->
            <div class="feature-card">
                <div class="feature-icon feature-icon--dark">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <h3>Enterprise Ready</h3>
                <p>Multi-tenant, rolgebaseerde toegang, MFA, AES-256-encryptie, API's (REST + GraphQL + WebSocket) en Slack/Teams-integraties.</p>
                <ul class="feature-list">
                    <li>RBAC + MFA/TOTP</li>
                    <li>7 rate limiters</li>
                    <li>Slack, Discord, Teams</li>
                    <li>Docker + horizontale schaling</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- AI Agents Section -->
<section class="section section--agents" id="agents">
    <div class="container">
        <div class="section-header" data-animate>
            <span class="section-label section-label--light">Autonome AI</span>
            <h2 class="section-title section-title--light">4 AI-agents die dag en nacht voor je werken</h2>
            <p class="section-subtitle section-subtitle--light">Stel vragen in gewoon Nederlands. De agents analyseren, rapporteren en ondernemen actie — 24/7.</p>
        </div>

        <div class="agents-grid" data-animate>
            <!-- Energy Agent -->
            <div class="agent-card">
                <div class="agent-icon agent-icon--energy">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <div class="agent-label">Energie Agent</div>
                <h3>Real-time verbruik monitoren</h3>
                <p>Monitort vermogensdata, detecteert idle machines, analyseert per afdeling en bedient apparaten op commando.</p>
                <div class="agent-tools">
                    <span class="agent-tool">get_current_power</span>
                    <span class="agent-tool">get_idle_machines</span>
                    <span class="agent-tool">get_device_status</span>
                    <span class="agent-tool">control_device</span>
                    <span class="agent-tool">get_energy_by_department</span>
                    <span class="agent-tool">get_schedules</span>
                </div>
                <div class="agent-example">
                    <span class="agent-example-label">Vraag:</span>
                    "Hoeveel energie verbruiken we nu?"
                </div>
            </div>

            <!-- Cost Agent -->
            <div class="agent-card">
                <div class="agent-icon agent-icon--cost">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="12" y1="1" x2="12" y2="23"/><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/>
                    </svg>
                </div>
                <div class="agent-label">Kosten Agent</div>
                <h3>Kosten voorspellen en optimaliseren</h3>
                <p>Volgt EPEX-spotprijzen, voorspelt kosten, bewaakt budgetten en identificeert besparingsmogelijkheden.</p>
                <div class="agent-tools">
                    <span class="agent-tool">get_epex_prices</span>
                    <span class="agent-tool">get_cost_forecast</span>
                    <span class="agent-tool">get_budget_status</span>
                    <span class="agent-tool">get_tariffs</span>
                    <span class="agent-tool">get_savings_opportunities</span>
                </div>
                <div class="agent-example">
                    <span class="agent-example-label">Vraag:</span>
                    "Wat zijn de stroomprijzen vandaag?"
                </div>
            </div>

            <!-- Anomaly Agent -->
            <div class="agent-card">
                <div class="agent-icon agent-icon--anomaly">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"/>
                        <line x1="12" y1="9" x2="12" y2="13"/><line x1="12" y1="17" x2="12.01" y2="17"/>
                    </svg>
                </div>
                <div class="agent-label">Anomalie Agent</div>
                <h3>Afwijkingen opsporen en verklaren</h3>
                <p>Triageert anomalieen, biedt oorzaakanalyse, scoort apparaatgezondheid en bevestigt meldingen.</p>
                <div class="agent-tools">
                    <span class="agent-tool">get_active_anomalies</span>
                    <span class="agent-tool">explain_anomaly</span>
                    <span class="agent-tool">get_anomaly_history</span>
                    <span class="agent-tool">acknowledge_anomaly</span>
                    <span class="agent-tool">get_device_health</span>
                </div>
                <div class="agent-example">
                    <span class="agent-example-label">Vraag:</span>
                    "Zijn er afwijkingen gedetecteerd?"
                </div>
            </div>

            <!-- Maintenance Agent -->
            <div class="agent-card">
                <div class="agent-icon agent-icon--maintenance">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.77-3.77a6 6 0 0 1-7.94 7.94l-6.91 6.91a2.12 2.12 0 0 1-3-3l6.91-6.91a6 6 0 0 1 7.94-7.94l-3.76 3.76z"/>
                    </svg>
                </div>
                <div class="agent-label">Onderhoud Agent</div>
                <h3>Voorspellend onderhoud plannen</h3>
                <p>Voorspelt onderhoudsbehoefte, signaleert achterstallige taken en bewaakt apparatuurstatus.</p>
                <div class="agent-tools">
                    <span class="agent-tool">get_maintenance_schedule</span>
                    <span class="agent-tool">get_overdue_maintenance</span>
                    <span class="agent-tool">create_maintenance_task</span>
                    <span class="agent-tool">get_equipment_health</span>
                </div>
                <div class="agent-example">
                    <span class="agent-example-label">Vraag:</span>
                    "Welke machines hebben onderhoud nodig?"
                </div>
            </div>
        </div>

        <div class="agents-chat-demo" data-animate>
            <div class="chat-window">
                <div class="chat-header">
                    <div class="chat-header-dot chat-header-dot--green"></div>
                    <span>AI-IDLE Chat — Nederlands &amp; Engels</span>
                </div>
                <div class="chat-messages">
                    <div class="chat-message chat-message--user">
                        <span>Hoeveel energie verbruiken we op dit moment?</span>
                    </div>
                    <div class="chat-message chat-message--agent">
                        <div class="chat-agent-badge">Energie Agent</div>
                        <span><strong>Huidig vermogen: 14.2 kW</strong><br>
                        Afdeling Productie: 8.4 kW (3 machines actief)<br>
                        Afdeling Magazijn: 3.1 kW (1 machine idle)<br>
                        <em>1 idle machine gevonden: Compressor-2 (Magazijn) — verspilling: &euro;2.40/dag</em></span>
                    </div>
                    <div class="chat-message chat-message--user">
                        <span>Zet die idle machine uit.</span>
                    </div>
                    <div class="chat-message chat-message--agent">
                        <div class="chat-agent-badge">Energie Agent</div>
                        <span>Compressor-2 is uitgeschakeld. Geschatte besparing: &euro;2.40/dag (&euro;876/jaar).</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sustainability Section -->
<section class="section section--sustainability" id="duurzaamheid">
    <div class="container">
        <div class="section-header" data-animate>
            <span class="section-label">Duurzaamheid</span>
            <h2 class="section-title">Elke kilowattuur telt</h2>
            <p class="section-subtitle">AI-IDLE helpt je niet alleen kosten besparen, maar ook je CO2-voetafdruk verkleinen.</p>
        </div>

        <div class="sustainability-grid" data-animate>
            <div class="sustainability-card">
                <div class="sustainability-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <circle cx="12" cy="12" r="10"/>
                        <path d="M8 14s1.5 2 4 2 4-2 4-2"/>
                        <line x1="9" y1="9" x2="9.01" y2="9"/>
                        <line x1="15" y1="9" x2="15.01" y2="9"/>
                    </svg>
                </div>
                <h3>CO2-Tracking</h3>
                <p>Real-time CO2-voetafdrukberekening met Nederlandse en EU-grid emissiefactoren. Scope 1/2 monitoring met doelen.</p>
            </div>

            <div class="sustainability-card">
                <div class="sustainability-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M6 9l6 6 6-6"/>
                        <path d="M21 3H3v18h18V3z"/>
                        <path d="M12 3v18"/>
                    </svg>
                </div>
                <h3>Emissie&shy;rapportage</h3>
                <p>Automatische emissierapporten met trend-over-tijd grafieken. Offsetbeheer en jaardoelen bijhouden.</p>
            </div>

            <div class="sustainability-card">
                <div class="sustainability-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                    </svg>
                </div>
                <h3>Gamificatie</h3>
                <p>Energiebesparingschallenges, achievement badges en teamranglijsten. Motiveer je team om energie te besparen.</p>
            </div>

            <div class="sustainability-card">
                <div class="sustainability-icon">
                    <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path d="M2 12C2 6.48 6.48 2 12 2s10 4.48 10 10-4.48 10-10 10S2 17.52 2 12z"/>
                        <path d="M12 6v6l4 2"/>
                    </svg>
                </div>
                <h3>EPEX Spotprijzen</h3>
                <p>Real-time EPEX-spotprijsintegratie. Verschuif energieverbruik automatisch naar goedkope uren. Load shifting door AI.</p>
            </div>
        </div>
    </div>
</section>

<!-- Numbers Section -->
<section class="section section--numbers" id="cijfers">
    <div class="container">
        <div class="section-header" data-animate>
            <span class="section-label section-label--light">In Cijfers</span>
            <h2 class="section-title section-title--light">De kracht achter AI-IDLE</h2>
        </div>

        <div class="numbers-grid" data-animate>
            <div class="number-card">
                <div class="number-value" data-count="243">243K+</div>
                <div class="number-label">Regels Code</div>
            </div>
            <div class="number-card">
                <div class="number-value" data-count="97">97</div>
                <div class="number-label">Database Modellen</div>
            </div>
            <div class="number-card">
                <div class="number-value" data-count="21">21</div>
                <div class="number-label">AI Agent Tools</div>
            </div>
            <div class="number-card">
                <div class="number-value" data-count="18">18</div>
                <div class="number-label">Apparaat&shy;profielen</div>
            </div>
            <div class="number-card">
                <div class="number-value" data-count="841">841+</div>
                <div class="number-label">Test Bestanden</div>
            </div>
            <div class="number-card">
                <div class="number-value" data-count="4">4</div>
                <div class="number-label">Autonome Agents</div>
            </div>
            <div class="number-card">
                <div class="number-value">10s</div>
                <div class="number-label">Data-interval</div>
            </div>
            <div class="number-card">
                <div class="number-value" data-count="2">2</div>
                <div class="number-label">Talen (NL/EN)</div>
            </div>
        </div>
    </div>
</section>

<!-- Tech Stack -->
<section class="section section--tech">
    <div class="container">
        <div class="section-header" data-animate>
            <span class="section-label">Technologie</span>
            <h2 class="section-title">Gebouwd met moderne technologie</h2>
        </div>

        <div class="tech-grid" data-animate>
            <div class="tech-item">
                <div class="tech-name">TypeScript</div>
                <div class="tech-desc">Strict mode, full-stack</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">React 19</div>
                <div class="tech-desc">Frontend framework</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">Express 5</div>
                <div class="tech-desc">Backend API</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">PostgreSQL</div>
                <div class="tech-desc">Database</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">Redis</div>
                <div class="tech-desc">Caching &amp; Queues</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">Prisma</div>
                <div class="tech-desc">ORM (97 modellen)</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">TensorFlow.js</div>
                <div class="tech-desc">ML Inference</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">Three.js</div>
                <div class="tech-desc">3D Digital Twin</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">Docker</div>
                <div class="tech-desc">Containerisatie</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">WebSocket</div>
                <div class="tech-desc">Real-time data</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">BullMQ</div>
                <div class="tech-desc">Job Queues</div>
            </div>
            <div class="tech-item">
                <div class="tech-name">Prometheus</div>
                <div class="tech-desc">Monitoring</div>
            </div>
        </div>
    </div>
</section>

<!-- Pilot Section -->
<section class="section section--pilot" id="pilot">
    <div class="container">
        <div class="pilot-content" data-animate>
            <div class="pilot-badge">Pilotprogramma</div>
            <h2 class="pilot-title">Wij zoeken 2 pilotpartners!</h2>
            <p class="pilot-subtitle">AI-IDLE zoekt actief <strong>2 pilotlocaties</strong> in het <strong>MKB metaal/productiesector</strong> om het platform te valideren in een echte productieomgeving.</p>

            <div class="pilot-grid">
                <div class="pilot-card pilot-card--get">
                    <h3>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20 6L9 17l-5-5"/></svg>
                        Wat je krijgt — volledig gratis
                    </h3>
                    <ul>
                        <li>Volledige AI-IDLE platforminstallatie en -configuratie</li>
                        <li>Complete setup en onboarding door de ontwikkelaar</li>
                        <li>Alle software-updates en nieuwe AI-features tijdens de pilot</li>
                        <li>Directe communicatielijn met het development team</li>
                        <li>Uitgebreid evaluatierapport en optimalisatieadvies na afloop</li>
                    </ul>
                </div>

                <div class="pilot-card pilot-card--give">
                    <h3>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="8.5" cy="7" r="4"/><line x1="20" y1="8" x2="20" y2="14"/><line x1="23" y1="11" x2="17" y2="11"/></svg>
                        Wat je bijdraagt
                    </h3>
                    <ul>
                        <li>Een productieomgeving met minimaal 10 machines</li>
                        <li>Bereidheid om feedback te geven en samen te werken</li>
                        <li>Alleen de apparaatkosten (Shelly smart plugs, ca. &euro;15-25 per machine)</li>
                    </ul>
                </div>
            </div>

            <div class="pilot-after">
                <h4>Na de pilot:</h4>
                <p>Een gedetailleerde review met bereikte energiebesparingen, ROI-analyse en optimalisatieaanbevelingen. Jouw eerlijke feedback helpt ons het beste energiemanagementplatform op de markt te bouwen.</p>
            </div>

            <div class="pilot-cta">
                <a href="mailto:<?php echo esc_attr( get_theme_mod( 'contact_email', 'ai-idle@outlook.com' ) ); ?>?subject=AI-IDLE%20Pilot%20Interesse" class="btn btn--primary btn--xl">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="4" width="20" height="16" rx="2"/><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"/></svg>
                    Interesse? Laten we praten
                </a>
                <p class="pilot-cta-sub">Vrijblijvend — laten we beginnen met een kennismaking.</p>
            </div>
        </div>
    </div>
</section>

<!-- Support Section -->
<section class="section section--support" id="steun">
    <div class="container">
        <div class="support-content" data-animate>
            <h2>Geloof je in het verminderen van industriele CO2-uitstoot?</h2>
            <p>AI-IDLE is gebouwd met een missie: <strong>maak industriele energieverspilling verleden tijd</strong>. Elke kilowattuur die wordt bespaard, betekent minder CO2 en een duurzamere industrie.</p>
            <div class="support-actions">
                <a href="<?php echo esc_url( get_theme_mod( 'github_url', 'https://github.com/WimLee115/ai-idle-platform' ) ); ?>" class="btn btn--github" target="_blank" rel="noopener noreferrer">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    Geef een ster op GitHub
                </a>
                <a href="<?php echo esc_url( get_theme_mod( 'buymeacoffee_url', 'https://buymeacoffee.com/wimlee115' ) ); ?>" class="btn btn--coffee" target="_blank" rel="noopener noreferrer">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"/><line x1="6" y1="1" x2="6" y2="4"/><line x1="10" y1="1" x2="10" y2="4"/><line x1="14" y1="1" x2="14" y2="4"/></svg>
                    Koop een koffie
                </a>
            </div>
            <p class="support-note">Een <strong>ster</strong> helpt ons meer productiebedrijven te bereiken. Een <strong>koffie</strong> houdt de engineering sessies draaiende.</p>
        </div>
    </div>
</section>

<?php get_footer(); ?>
