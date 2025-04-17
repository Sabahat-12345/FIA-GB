<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anti Human Trafficking and Smuggling Wing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
        }
        .section-title {
            font-weight: bold;
            text-align: center;
            margin: 30px 0;
        }
        .card {
            height: 100%;
            transition: transform 0.3s;
            margin-bottom: 20px;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .card-title {
            font-weight: bold;
            text-align: center;
            font-size: 1.2rem; /* Reduced font size */
        }
        .achievements-card {
            border-radius: 10px;
        }
        .btn-more {
            background-color: #3a3f85;
            color: white;
        }
        .header-title {
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            margin: 30px 0;
        }
        .primary-functions-card .card-body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center; /* Centering the text */
        }
        .primary-functions-card .card-title {
            font-size: 1.1rem;
            font-weight: normal;
        }
        @media (max-width: 768px) {
            .header-title {
                font-size: 1.5rem;
            }
            .card-title {
                font-size: 1rem; /* Further reduce font size on smaller screens */
            }
        }
        .btn-more:hover {
    background-color: #2a2f65; /* Darker shade on hover */
    color: #ffffff; /* Keeps text white */
}

        .card {
            height: 100%;
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .crime-web-diagram {
            max-width: 100%;
            height: auto;
        }
        .main-title {
            font-weight: bold;
            text-align: center;
            margin: 30px 0;
        }
        .info-section {
            margin-bottom: 30px;
        }
        .link-offices-btn {
            background-color: #3d4e81;
            color: white;
            border: none;
            border-radius: 20px;
            padding: 5px 15px;
        }
        #crimeWebDiagram {
            max-width: 500px;
            margin: 0 auto;
            display: block;
        }
        .section-border {
    border: 2px solid #ccc; /* Adjust color and thickness as needed */
    border-radius: 10px; /* Optional, for rounded corners */
    padding: 20px; /* Optional, for internal spacing */
}
    </style>
</head>
<body>
    @include('partial.header_section')
    {{-- @include('partial.navbar') --}}
    <div class="container py-4">
        <!-- Header -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="header-title text-start">ANTI HUMAN TRAFFICKING AND SMUGGLING WING</h1>
            </div>
        </div>
        
        <!-- Description -->
      <!-- Description -->
<div class="row mb-5">
    <div class="col-lg-8">
        <p class="text-start">
            The Anti Human Trafficking and Smuggling Wing (AHS) deals with organized crimes like human trafficking. 
            This wing is headed by a senior police officer as Additional Director General at the HQ who is responsible for 
            assisting the Director General and coordinating operations of the zonal directors.
        </p>
    </div>
</div>
        
        <!-- Achievements and Main Content -->
        <!-- Primary Functions + Achievements Row -->
<div class="row mb-5">
    <!-- Primary Functions Left Column -->
    <div class="col-lg-7">
        <h2 class="section-title  text-center">PRIMARY FUNCTIONS</h2>
        <div class="row">
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card primary-functions-card" data-bs-toggle="modal" data-bs-target="#ahsDirectorateModal" style="cursor: pointer;">
                    <div class="card-body">
                        <h3 class="card-title">AHS DIRECTORATE</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card primary-functions-card" data-bs-toggle="modal" data-bs-target="#functionsAHSModal" style="cursor: pointer;">
                    <div class="card-body">
                        <h3 class="card-title">FUNCTIONS OF AHS</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card primary-functions-card" data-bs-toggle="modal" data-bs-target="#applicableLawsModal" style="cursor: pointer;">
                    <div class="card-body">
                        <h3 class="card-title">APPLICABLE LAWS</h3>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 mb-4">
                <div class="card primary-functions-card" data-bs-toggle="modal" data-bs-target="#measuresModal" style="cursor: pointer;">
                    <div class="card-body">
                        <h3 class="card-title">MEASURES TO COMBAT HUMAN TRAFFICKING/SMUGGLING</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Achievements Right Column -->
    <div class="col-lg-5">
        <div class="card achievements-card h-100">
            <div class="card-body ">
                <h2 class="card-title mb-4 mt-4">OUR ACHIEVEMENTS</h2>
                <ul>
                    <li>Drafting of rules for Prevention of Trafficking in Persons Act, 2018 and Prevention of Smuggling of Migrants Act, 2018</li>
                    <li>National Action Plan, 2025 on Human Trafficking/Migrants Smuggling was framed with the collaboration of UNODC</li>
                </ul>
                <div class="text-center mt-3">
                    <button class="btn btn-more rounded-pill" data-bs-toggle="modal" data-bs-target="#achievementsModal">Click to read more</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-border">
<div class="container py-4">
    <h1 class="main-title">TRANSNATIONAL CRIME WEB</h1>
    
    <!-- Main description -->
    <div class="row info-section">
        <div class="col-12">
            <div class="card border-0">
                <div class="card-body">
                    <p class="card-text">
                        Human Trafficking/ Migrant smuggling is an international crime which is multi-dimensional in nature. In order to eliminate or curb this international crime web, a consolidated and well-coordinated effort is required. This perpetual crime web needs to be monitored and unearth through joint efforts starting from the origin of the victim through its transit route to the end of his final journey. So, it will be fruitless and a futile attempt if a coordination gap exists between the departments within a country or internationally agencies. Therefore, following departments play their respective roles with well-developed coordination and cooperation.
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Crime Web Diagram -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <svg id="crimeWebDiagram" viewBox="0 0 600 400" xmlns="http://www.w3.org/2000/svg">
                <!-- Central Node -->
                <circle cx="300" cy="200" r="70" fill="#8CC152" />
                <text x="300" y="190" text-anchor="middle" fill="white" font-weight="bold">HUMAN</text>
                <text x="300" y="210" text-anchor="middle" fill="white" font-weight="bold">TRAFFICKING</text>
                
                <!-- Top Middle Node -->
                <rect x="240" y="60" width="120" height="60" fill="#556FB5" rx="5" ry="5" />
                <text x="300" y="85" text-anchor="middle" fill="white" font-size="12" font-weight="bold">FORGED</text>
                <text x="300" y="105" text-anchor="middle" fill="white" font-size="12" font-weight="bold">DOCUMENTATION</text>
                <path d="M300,120 L300,130 L300,140" stroke="#556FB5" stroke-width="3" fill="none" />
                <path d="M300,140 L300,130 L290,130 L300,140 L310,130 L300,130" fill="#556FB5" />
                
                <!-- Top Left Node -->
                <rect x="100" y="120" width="120" height="60" fill="#9B59B6" rx="5" ry="5" />
                <text x="160" y="150" text-anchor="middle" fill="white" font-size="12" font-weight="bold">ANTI-HUMAN</text>
                <text x="160" y="170" text-anchor="middle" fill="white" font-size="12" font-weight="bold">SMUGGLING</text>
                <path d="M220,150 L230,150 L240,160 L270,170" stroke="#9B59B6" stroke-width="3" fill="none" />
                <path d="M270,170 L260,165 L255,175 L270,170" fill="#9B59B6" />
                
                <!-- Top Right Node -->
                <rect x="420" y="120" width="120" height="60" fill="#E9573F" rx="5" ry="5" />
                <text x="480" y="150" text-anchor="middle" fill="white" font-size="12" font-weight="bold">ANTI-MONEY</text>
                <text x="480" y="170" text-anchor="middle" fill="white" font-size="12" font-weight="bold">LAUNDERING</text>
                <path d="M420,150 L410,150 L390,160 L370,170" stroke="#E9573F" stroke-width="3" fill="none" />
                <path d="M370,170 L380,165 L385,175 L370,170" fill="#E9573F" />
                
                <!-- Bottom Left Node -->
                <rect x="100" y="240" width="120" height="60" fill="#9B59B6" rx="5" ry="5" />
                <text x="160" y="270" text-anchor="middle" fill="white" font-size="12" font-weight="bold">INTERPOL</text>
                <path d="M220,270 L240,270 L270,230" stroke="#9B59B6" stroke-width="3" fill="none" />
                <path d="M270,230 L260,235 L265,245 L270,230" fill="#9B59B6" />
                
                <!-- Bottom Right Node -->
                <rect x="420" y="240" width="120" height="60" fill="#3BAFDA" rx="5" ry="5" />
                <text x="480" y="270" text-anchor="middle" fill="white" font-size="12" font-weight="bold">CYBER CRIME</text>
                <text x="480" y="290" text-anchor="middle" fill="white" font-size="12" font-weight="bold">CELL</text>
                <path d="M420,270 L400,270 L370,230" stroke="#3BAFDA" stroke-width="3" fill="none" />
                <path d="M370,230 L380,235 L375,245 L370,230" fill="#3BAFDA" />
                
                <!-- Bottom Node -->
                <rect x="240" y="300" width="120" height="60" fill="#8067B7" rx="5" ry="5" />
                <text x="300" y="330" text-anchor="middle" fill="white" font-size="12" font-weight="bold">LINK OFFICES</text>
                <path d="M300,300 L300,290 L300,270" stroke="#8067B7" stroke-width="3" fill="none" />
                <path d="M300,270 L295,280 L305,280 L300,270" fill="#8067B7" />
            </svg>
        </div>
    </div>
    
    <!-- Information Cards -->
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        <!-- Forged Documentation Card -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title mb-0">FORGED DOCUMENTATION</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        The Human traffickers / smugglers mostly use forged documents to travel abroad.So, concerned departments are being involved and taken into loop to adopt measures to avoid forgery of documents and solid evidence collection.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Cyber Crime Cell Card -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title mb-0">CYBER CRIME CELL</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        In Human Trafficking / Smuggling, Internet is used as mode of communication so Cyber Crime Cell intercepts the communication of Human Traffickers / Smugglers and takes action against them.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Interpol Card -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title mb-0">INTERPOL</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        Interpol issues Red notices against proclaimed offenders of human trafficking and Smuggling.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- AHTC Card -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title mb-0">ANTI-HUMAN SMUGGLERS / TRAFFICKING CIRCLE (AHTC)</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        AHTCs offices are equipped with the sole responsibility to curb the menace of Human smuggling and Human trafficking. AHTCs have been established being an operational unit on ground. They collect intelligence, conduct raids, investigate the cases and get them prosecuted in their respective courts. Each AHTC is headed by an officer of Deputy Director (BS-18).
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Anti-Money Laundering Card -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title mb-0">ANTI-MONEY LAUNDERING CELL</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">
                        In Human Trafficking payments are mostly made through illegal channels i.e. Hundi/Hawala. SoIINs Circle monitors illegal money transfers and suspected accounts.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Link Offices Card -->
        <div class="col">
            <div class="card h-100 shadow-sm">
                <div class="card-header bg-dark text-white">
                    <h5 class="card-title mb-0">LINK OFFICES</h5>
                </div>
                <div class="card-body">
                    <ol>
                        <li>Muscat (Oman)</li>
                        <li>Tehran (Iran)</li>
                        <li>Athens (Greece)</li>
                    </ol>
                    <div class="text-center mt-3">
                        <button class="link-offices-btn" data-bs-toggle="modal" data-bs-target="#linkOfficesModal">Functions of Link Offices</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>



<!--AHS DIRECTORATE Modal -->
<div class="modal fade" id="ahsDirectorateModal" tabindex="-1" aria-labelledby="ahsDirectorateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ahsDirectorateLabel">AHS Directorate</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
         <ul>
            <li> Virtually every country in the world is affected by these crimes. The challenge for all countries, rich and poor, is to target the criminals who exploit desperate people and to protect and assist victims of trafficking and smuggled migrants, many of whom endure unimaginable hardships in their bid for a better life.</li>
           
        <li>        Being Human trafficking and Human smuggling is fastest growing international crime, so there was a dire need of an Establishment/ Directorate in FIA which acts as liaison office between the field offices of FIA in Pakistan and foreign link offices working on Human trafficking/Smuggling and the FIA HQs Islamabad and MOI.</li>
        
    
        
        <li>  Furthermore, this Directorate also interacts with national and international organizations directly or through MOI and MOFA.</li>
          
         
        <li>  For the said purpose, a separate Anti Human Smuggling Directorate had been established in September 2007, headed by Director BPS-20.</li>
          
         
        <li>   Anti Human Smuggling (AHS) is a directorate working under the Addl. D.G Immigration. The AHS Wing, in coordination with all the Zones of FIA monitors the activities of Human Smugglers/ Agents throughout Pakistan.</li>
         
       
          <li> Therefore, specialized teams have been formed in order to arrest the absconders of human smugglers / traffickers in their concerned Zones / Anti Human Trafficking Cells (AHTCs).</li>   
   
       <li>    The field units submit regular monthly and daily reports of the human smugglers to AHS Directorate based on which an annual booklet of Most Wanted Human Traffickers/ smugglers is compiled and the names of the smugglers are placed on Black List so that they are apprehended at immigration entry and exit points.</li>
        
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal for FUNCTIONS OF AHS -->
<div class="modal fade" id="functionsAHSModal" tabindex="-1" aria-labelledby="functionsAHSLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="functionsAHSLabel">Functions of AHS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
          <ul>
            <li>Functional oversight of enquiries, investigations and prosecutions of immigration, human trafficking and migrant smuggling (HTMS) crimes at AHTCs</li>
            <li>Dissemination of SOPs, policies and guidelines on HTMS to AHTCs</li>
            <li>Coordination, correspondence and interaction with national and international organizations, diplomatic missions, and other stakeholders directly or through MOI and MOFA</li>
            <li>Publication of Annual Red Book of most wanted human traffickers/ smugglers (MWTs) by AHS, on the basis of reports on HTMS, furnished by the AHTCs</li>
            <li>Preparation of briefs for National Assembly/ Senate questions related to AHT/AMS</li>
            <li>Collection, consolidation and collation of data from provincial police, border security forces, law enforcement agencies (LEAs) and human rights, women welfare, labour welfare, child protection departments for: MOI, Federal Government, Parliament</li>
            <li>Advice to government on HTMS legislation</li>
            <li>Bridge between DG office & Zonal offices on complaints related to AHT/AMS</li>
            <li>Capacity building of Officers of FIA on Human Trafficking and Migrant Smuggling</li>
            <li>Coordinate capacity building of stakeholders on Trafficking in Persons related issues</li>
            <li>Coordinate with UNODC, IOM, ICMPD and other organizations AHS related activities (National Action Plan 2021-25 Human Trafficking and Migrant Smuggling)</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal for APPLICABLE LAWS -->
<div class="modal fade" id="applicableLawsModal" tabindex="-1" aria-labelledby="applicableLawsLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="applicableLawsLabel">Applicable Laws</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
          <ul>
            <li>The Passport Act, 1974</li>
            <li>The Emigration Ordinance, 1979</li>
            <li>Prevention of Smuggling of Migrants Act, 2018</li>
            <li>Prevention of Trafficking in Persons Act, 2018</li>
            <li>The Foreigner’s Act, 1946</li>
            <li>The Exit from Pakistan Control Ordinance, 1981 and Rules, 2010</li>
            <li>The Extradition Act, 1972</li>
            <li>NADRA Ordinance, 2000</li>
            <li>Passport & Visa Manual, 2006</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal for MEASURES TO COMBAT HUMAN TRAFFICKING/SMUGGLING -->
<div class="modal fade" id="measuresModal" tabindex="-1" aria-labelledby="measuresModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="measuresModalLabel">Measures to Combat Human Trafficking/Smuggling</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
          <ul>
            <li>Establishment of Integrated Border Management System (IBMS) at all FIA Immigration Check posts.</li>
            <li>Issuance of CNIC, NICOP, POC, and FRC by NADRA.</li>
            <li>Issuance of Machine Readable Passports (MRPs).</li>
            <li>Capacity Building of Immigration Staff.</li>
            <li>Publication of Red Book of Most Wanted Human Traffickers/Smugglers annually.</li>
            <li>Case Management System (CMS) for computerized crime data.</li>
            <li>Interception of Fake/ Forged/ Tampered travel documents.</li>
            <li>Exit Control List (ECL) enforcement.</li>
            <li>Passport Control/Black-listing of lost or stolen passports.</li>
            <li>Issuance of Red Warrants through INTERPOL.</li>
            <li>Deployment of Forgery Detection Machines at airports.</li>
            <li>Use of human intelligence and offloading based on screening.</li>
            <li>24/7 FIA Helpline for complaints and support.</li>
            <li>Establishment of FIA Liaison offices in Oman, Spain, UK, Turkey, Malaysia, and Iran.</li>
            <li>Formation of Inter-Agency Task Force (IATF) for intelligence sharing and joint operations.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal for OUR ACHIEVEMENTS -->
<div class="modal fade" id="achievementsModal" tabindex="-1" aria-labelledby="achievementsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="achievementsModalLabel">Our Achievements</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-start">
          <ul>
            <li>Drafting of rules for Prevention of Trafficking in Persons Act, 2018 and Prevention of Smuggling of Migrants Act, 2018.</li>
            <li>National Action Plan, 2025 on Human Trafficking/Migrants Smuggling was framed with the collaboration of UNODC.</li>
            <li>Translation of Trafficking in Persons Acts, 2018 and Smuggling of Migrant Acts, 2018 in Urdu by UNODC.</li>
            <li>Trafficking and Smuggling victims assistance focused training by UNODC and IOM.</li>
            <li>Establishing Link offices in Oman, Greece and Iran.</li>
            <li>Publication of Most Wanted Human Traffickers/ Smugglers (MWTs) of Red Book.</li>
            <li>MoU with Akhuwat (NGO) for victim assistance.</li>
          </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  
<!-- Modal -->
<div class="modal fade" id="linkOfficesModal" tabindex="-1" aria-labelledby="linkOfficesModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="linkOfficesModalLabel">Functions of Link Offices</h5>
                <!-- Close button -->
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Heading and List of Functions -->
                <ul>
                    <li>Recording the statement of Illegal Emigrants to pinpoint the Agents/Human Traffickers/Smugglers and facilitators</li>
                    <li>Assistance to victims of Trafficking and Smuggling</li>
                    <li> Liaison with local police</li>
                </ul>
             
              
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
        </div>
    </div>
</div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
