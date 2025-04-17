<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cyber Crime Wing</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .main-title {
            font-weight: bold;
            text-align: center;
            margin: 30px 0;
            font-size: 2rem;
        }
        .intro-text {
            text-align: center;
            margin-bottom: 20px;
            max-width: 1000px;
            margin-left: auto;
            margin-right: auto;
        }
        .card {
            height: 100%;
            border-radius: 10px;
            transition: transform 0.3s;
        }
        .blue-button {
            background-color: #2d3291;
            color: white;
            border: none;
            border-radius: 25px;
            padding: 8px 16px;
            text-align: center;
            display: inline-block;
            font-size: 14px;
            margin: 15px 0;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .blue-button:hover {
            background-color: #1e2170;
        }
        .rtl-text {
            direction: rtl;
            text-align: right;
            font-family: 'Noto Nastaliq Urdu', serif;
        }

        .section-title {
      text-align: center;
      font-weight: bold;
      margin: 40px 0 10px;
      font-size: 2rem;
    }

    .sub-title {
      text-align: center;
      max-width: 800px;
      margin: 0 auto 30px;
      font-size: 1rem;
    }

    .crime-card {
      border: 1px solid #ddd;
      padding: 20px;
      border-radius: 8px;
      background-color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      height: 100%;
    }

    .blue-button {
      background-color: #2d3291;
      color: white;
      border: none;
      border-radius: 25px;
      padding: 8px 16px;
      font-size: 14px;
      cursor: pointer;
      transition: background-color 0.3s;
      display: block;
      width: fit-content;
    }

    .blue-button:hover {
      background-color: #1e2170;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .blue-button {
        padding: 6px 12px;
        font-size: 13px;
      }

      .crime-card {
        padding: 15px;
      }
    }

    @media (max-width: 576px) {
      .blue-button {
        padding: 5px 10px;
        font-size: 12px;
      }

      .section-title {
        font-size: 1.5rem;
      }
    }

    .header {
            background-color: #f8f9fa;
            padding: 20px 0;
            margin-bottom: 30px;
            border-bottom: 1px solid #dee2e6;
        }
        /* .zone-section {
            margin-bottom: 30px;
        } */
        /* .zone-title {
            font-weight: bold;
            color: #0d6efd;
            margin-bottom: 15px;
        } */
        /* .zone-items {
            padding-left: 20px;
        } */
        /* .zone-items li {
            margin-bottom: 5px;
        } */
        .description {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
            margin-top: 30px;
        }
        @media (max-width: 768px) {
            .header h1 {
                font-size: 1.8rem;
            }
        }
    </style>
</head>
<body>
    <div class="container py-4">
        <h1 class="main-title">CYBER CRIME WING</h1>
        
       <!-- Description (Left) and Achievements (Right) Side by Side -->
<div class="row mb-4">
    <!-- Left Side: Description -->
   <!-- Left Side: Description Card -->
<div class="col-md-6">
    <div class="card shadow-sm h-100">
        <div class="card-body">
            <h4 class="card-title text-center mb-3">ABOUT CCW</h4>
            <p class="intro-text text-md-start text-center">
                Cybercrime Wing (CCW), of Federal Investigation Agency, is guided by laws under prevention of Electronic 
                Crimes ACT (PECA) 2016, which deals with the growing threats of cybercrimes. Inception of this Hi-Tech 
                crime fighting unit transpired in 2007 to identify and curb the phenomenon of technological abuse in society. 
                It is the only unit of its kind in Pakistan which directly receives complaints and take legal measures against 
                cyber criminals.
            </p>
            <p class="intro-text text-md-start text-center">
                CCW has expertise in Digital Forensics, Technical Investigation, Information System Security Audits, Penetration Testing and 
                Trainings. The unit since its inception has been involved in capacity building of different government departments.
            </p>
            <div class="text-md-start text-center">
               <button class="blue-button" data-bs-toggle="modal" data-bs-target="#contactModal">Click here for contact details</button>

            </div>
        </div>
    </div>
</div>

    <!-- Right Side: Our Achievements Card -->
    <div class="col-md-6">
        <div class="card shadow-sm h-100">
            <div class="card-body">
                <h4 class="card-title text-center mb-3">OUR ACHIEVEMENTS</h4>
                <ul>
                    <li>Gang involved in selling call record details and hacking emails of Police Officers busted.</li>
                    <li>Gang using silicon thumbs for SIM activation busted in Gujranwala.</li>
                    <li class="rtl-text">بچوں کی ذاتی اور غیر اخلاقی تصاویر بنائے اور نشر کرنے والے ملزمان ویکشن سمیت گرفتار</li>
                </ul>
                <div class="text-center">
                  <button class="blue-button" data-bs-toggle="modal" data-bs-target="#achievementsModal">Click to read more</button>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container my-5">
    <div class="border rounded p-4 shadow-sm">
      <h2 class="section-title">CYBER CRIME CATEGORIES</h2>
      <p class="sub-title">
        With the aim to achieve excellence by promoting culture of merit, enforcing technology-based law, and extending continuous professional services, following are some of the major Cybercrimes catered by CCW:
      </p>
  
      <div class="text-center mb-4">
        <img src="{{asset('asset/ccw.jpg')}}" alt="Major Cyber Crimes" class="img-fluid" style="max-width: 300px;">
      </div>
  
      <div class="row">
        <!-- Repeat this block for each category -->
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">CYBER FINANCIAL FRAUDS</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#cyberFraudModal">
                Click to read more
              </button>
          </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">HACKING</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#hackingModal">
                Click to read more
              </button>
          </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">CYBER HARASSMENT</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#cyberHarassmentModal">
                Click to read more
              </button>
          </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">CYBER BULLYING</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#cyberBullyingModal">
                Click to read more
              </button>
          </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">CYBER STALKING</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#cyberStalkingModal">
                Click to read more
              </button>
          </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">CHILD PORNOGRAPHY</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#childPornographyModal">
                Click to read more
              </button>
          </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">DATA THEFT</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#dataTheftModal">
                Click to read more
              </button>
          </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">IDENTITY THEFT</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#identityTheftModal">
                Click to read more
              </button>
              
          </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">INTELLECTUAL PROPERTY RIGHTS</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#iprModal">
                Click to read more
              </button>
          </div>
        </div>
  
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="crime-card">
            <h6 class="text-center mb-3">DENIAL OF SERVICE ATTACK</h6>
            <button type="button" class="blue-button mt-auto mx-auto" data-bs-toggle="modal" data-bs-target="#dosModal">
                Click to read more
              </button>
          </div>
        </div>
        <!-- End cards -->
      </div>
    </div>
  </div>


  <div class="container my-5">
    <div class="border rounded p-4 shadow-sm">

  <div class="header">
    <div class="container">
        <h1 class="text-center">ORGANIZATION STRUCTURE OF CCW HQS</h1>
    </div>
</div>


   
    <div class="row mt-4">
        <div class="col-12">
            <p>Cybercrime Wing, under the overall supervision of Director General FIA, is headed by an Additional Director General (ADG) who is assisted by Director Administration and Director Operations. Operationally, the Cybercrime Wing is organized into six Zones and fifteen Cybercrime Reporting Centers (CCRCs) as illustrated below:</p>
        </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <img src="{{asset('asset/ccw_organo.jpg')}}" alt="Organization Structure of CCW HQS" class="img-fluid">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12 description">
            <p>Zone is an administrative unit with a specific number of CCRCs falling under its domain. Each zone works under the supervisor of an Additional Director who supervises the working of CCRCs, forensic labs and legal branch. Each circle or CCRC is heady by a Deputy Director, who ensures that the CCRC operates as per policy, rules and SOPs of FIA and the goals of the organization are being met in the next efficient manner under his/her jurisdiction. Each CCRC in-charge is assisted by a team of investigators, prosecutors, cybercrime analysts, law officers, forensic experts and other support staff.</p>
        </div>
    </div>

</div>
</div>



<!-- Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="contactModalLabel">CYBER CRIME REGIONAL OFFICES</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul><li>For any help related to cybercrime, dial cyber helpline 1991 on work days (Monday - Friday) 9:00 AM to 4:00 PM</li>
 <li>  Online complaints may be lodged through email at <strong>helpdesk@nr3c.gov.pk</strong></li>
     <li>    Complaints may also be lodged by visiting any of the following Cybercrime Reporting Centers:    </li>
       </ul>

        <div class="row row-cols-1 row-cols-md-3 g-4">
          
          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">CYBER CRIME HQ</h6>
            <p><strong>Address:</strong> National Police Foundation Building, Sector H-11/1, Islamabad<br>
            <strong>Phone:</strong> 1991</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">RAWALPINDI</h6>
            <p><strong>Address:</strong> House No. 162, Phase 7 Bahria Town, Rawalpindi<br>
            <strong>Phone:</strong> 051 5133304</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">PESHAWAR</h6>
            <p><strong>Address:</strong> LakarMandi Flats, Peshawar<br>
            <strong>Phone:</strong> 091 9218154</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">ABBOTTABAD</h6>
            <p><strong>Address:</strong> House No. 5, Street No. 11, Mureeabad Colony, Mandian, Near Radio Pakistan, Abbottabad<br>
            <strong>Phone:</strong> 0992 3830414</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">FAISALABAD</h6>
            <p><strong>Address:</strong> 243-C, Town Street No. 2, East Canal Road, Near Gatti Textile, Faisalabad<br>
            <strong>Phone:</strong> 041 9330050</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">DERA ISMAIL KHAN</h6>
            <p><strong>Address:</strong> HQ Office, 25-A Model Town, Near Gomal University, Dera Ismail Khan<br>
            <strong>Phone:</strong> 0966 7150437</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">GILGIT</h6>
            <p><strong>Address:</strong> CID Headquarters, Near COP Complex, Chinar Bagh, Gilgit<br>
            <strong>Phone:</strong> 05811 920301</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">MULTAN</h6>
            <p><strong>Address:</strong> House No. 6, Street No. 1, Bosan Town, Multan<br>
            <strong>Phone:</strong> 061 9330051</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">KARACHI</h6>
            <p><strong>Address:</strong> SRE Building, Shahrah-e-Faisal, Karachi<br>
            <strong>Phone:</strong> 021 99249652</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">GUJRANWALA</h6>
            <p><strong>Address:</strong> Shaheen Plaza, Satellite Town, Gujranwala<br>
            <strong>Phone:</strong> 055 9201024</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">LAHORE</h6>
            <p><strong>Address:</strong> House # 26, Block A-1, Township, Lahore (Near Expo Centre, Main Boulevard)<br>
            <strong>Phone:</strong> 042 99333627</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">SUKKUR</h6>
            <p><strong>Address:</strong> House No. A-126, Khwaja Ghulam Qadir Road, Sukkur<br>
            <strong>Phone:</strong> 071 9310409</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">GWADAR</h6>
            <p><strong>Address:</strong> Plot # 13-A, Block-4, New Town, Gwadar<br>
            <strong>Phone:</strong> 086 9201053</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">ISLAMABAD</h6>
            <p><strong>Address:</strong> Street 139, G-13/4, Islamabad<br>
            <strong>Phone:</strong> 051 9334627</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">QUETTA</h6>
            <p><strong>Address:</strong> Kassi Road, No. 108, Near Balochistan Law College, Quetta<br>
            <strong>Phone:</strong> 081 9201266</p></div></div>

          <div class="col"><div class="border p-3 h-100 rounded">
            <h6 class="fw-bold">HYDERABAD</h6>
            <p><strong>Address:</strong> Plot A-100, Site Area, Near Custom House, Hyderabad<br>
            <strong>Phone:</strong> 022 9203010</p></div></div>

        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="blue-button" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="achievementsModal" tabindex="-1" aria-labelledby="achievementsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="achievementsModalLabel">Our Achievements</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <ul><li>       Gang involved in selling call record details and hacking email accounts of Police Officers busted.</li></ul>
     
        </li>
          <li class="list-group-item">
            <ul><li>   Gang involved in activation of illegal SIMs by using silicon thumbs busted in Gujranwala Circle of Cybercrime.</li></ul>
         
          </li>
          <li class="list-group-item rtl-text">
            <ul><li>  ربچوں کی نازیبا اور غیر اخلاقی تصاویر بنانے اور نشر کرنے والے ملزمان ویڈیوز سمیت گرفتا</li></ul>
          
          </li>
          <li class="list-group-item rtl-text">
            <ul><li>  بول نیوز اور دیگر انعامی سکیمز کے نام پر لوگوں سے لاکھوں روپے لوٹنے والا ملزمان سرگودھا سے گرفتار۔</li></ul>
        
          </li>
          <li class="list-group-item rtl-text">
            <ul><li>   سوشل میڈیا کے ذریعے خاتون کی تصویریں ، ویڈیوز شئیر کر کے بلیک میل کرنے والے ملزم کو 7 سال کی سزا۔</li></ul>
         
          </li>
          <li class="list-group-item rtl-text">
            <ul><li> فیس بک کے ذریعے آن لائن موبائل فروخت کرنے کے فراڈ میں ملوث ملزمان گرفتار</li></ul>
          
          </li>
        </ul>
      </div>
      <div class="modal-footer">
        <button type="button" class="blue-button" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<!-- Hacking Modal -->
<div class="modal fade" id="hackingModal" tabindex="-1" aria-labelledby="hackingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="hackingModalLabel">HACKING</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
     <ul>
        <li>    Trying to get into computer systems in order to steal, corrupt, or illegitimately view data. Hacking comes from the term “hacker”, who is an expert in computer programming languages and systems.</li>
  
        
      
         <li> Hacking, in this sense, means using unusually complex and clever methods to make computers do things. For some time, however, the popular press has used the word “hacker” and “hacking” in a negative way to refer to individuals who try to get into computer systems in order to steal, corrupt, or illegitimately view data.</li>
           
      
         <li>    Hackers themselves maintain that the proper term for such individuals is “cracker”, and that their activities should be called cracking. However, in order to be consistent with the most common usage of the word, we use “hacking” here to refer to unauthorized access.</li>
        
        </ul>
          
        </div>
        <div class="modal-footer">
            <button type="button" class="blue-button" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  
 <!-- Cyber Financial Frauds Modal -->
<div class="modal fade" id="cyberFraudModal" tabindex="-1" aria-labelledby="cyberFraudModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="cyberFraudModalLabel">CYBER FINANCIAL FRAUDS</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <ul><li>   Cyber Financial Frauds refer to criminal activities carried out using digital means with the intent to illegally gain access to or steal financial resources. These include a variety of scams and fraudulent schemes that target individuals, businesses, and institutions through the internet.</li>
         
         <li>
            Common examples include phishing emails, fake investment schemes, online banking frauds, credit card data theft, mobile wallet scams, fake job offers requiring fee payments, and social engineering tactics aimed at extracting personal banking information.</li>
         
      
        <li>  Victims are often tricked into revealing sensitive financial data, transferring money unknowingly to fraudsters, or clicking malicious links. The FIA Cyber Crime Wing works diligently to investigate such crimes and assist victims in recovering losses and prosecuting offenders.</li>
          

   <li class="fw-bold">      Citizens are advised to never share OTPs, passwords, or banking details with unknown persons and to report any suspicious financial activities immediately to the FIA.</li>    
      
      
        </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="blue-button" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  
  <!-- Cyber Harassment Modal -->
<div class="modal fade" id="cyberHarassmentModal" tabindex="-1" aria-labelledby="cyberHarassmentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="cyberHarassmentModalLabel">CYBER HARASSMENT</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <ul><li>  Cyber Harassment refers to the use of electronic communication platforms to harass, threaten, stalk, or intimidate individuals, particularly through repeated or unwanted contact. This includes the sending of obscene messages, defamatory content, threats, or spreading personal or private information with the intention of causing emotional distress.</li>
          
        <li>  Victims of cyber harassment often face psychological trauma, anxiety, fear, and social distress. Common platforms used for harassment include social media, messaging apps, email, and forums. Harassers may impersonate someone, leak private photos or messages, or continuously spam the victim online.</li>
       
          
          <li>       The FIA Cyber Crime Wing takes cyber harassment seriously and provides support to victims through legal action and investigation. Under the Prevention of Electronic Crimes Act (PECA), cyber harassment is a punishable offense in Pakistan.</li>
     
         <li  class="fw-bold">        If you are a victim of cyber harassment, collect evidence (screenshots, messages, links), avoid engaging with the harasser, and immediately report the incident to the FIA Cyber Crime Wing.</li>
       
    
        </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="blue-button" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  

  <!-- Cyber Bullying Modal -->
<div class="modal fade" id="cyberBullyingModal" tabindex="-1" aria-labelledby="cyberBullyingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="cyberBullyingModalLabel">CYBER BULLYING</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
       <ul><li>   Cyber stalking (also called cyber harassment) is when someone uses the Internet to threaten or make unwanted advances towards someone else. This sort of harassment can cause physical, emotional, and psychological damage to the victim.</li>
         
         <li>    Children are particularly vulnerable because of their trusting nature and may unknowingly give away personal information. This information can later be used against them for stalking or bullying purposes.</li>
        <li>  NR3C (National Response Centre for Cyber Crime) officials strongly advise that no personal or sensitive information should be shared over the internet unless the recipient is a fully trusted individual.</li>
          
       <li class="fw-bold">   If you or someone you know is experiencing cyber bullying, report the matter immediately to the FIA Cyber Crime Wing to ensure your safety and privacy.</li>
       
         
        </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="blue-button" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  
  <!-- Cyber Stalking Modal -->
<div class="modal fade" id="cyberStalkingModal" tabindex="-1" aria-labelledby="cyberStalkingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="cyberStalkingModalLabel">CYBER STALKING</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
       <ul><li>      Cyber stalking (also called cyber harassment) is when someone uses the Internet to threaten or make unwanted advances towards someone else.</li>
      
         <li>      This sort of harassment can cause physical, emotional, and psychological damage to the victim. It can include repeated emails, social media messages, or online tracking that causes fear or discomfort.</li>
      
         <li>       Children are particularly vulnerable because of their trusting nature. They may unknowingly engage with strangers or share personal information, which can later be used to harass or manipulate them online.</li>
     
         <li class="fw-bold"> Victims of cyber stalking are encouraged to save evidence and immediately report the matter to FIA’s Cyber Crime Wing for prompt action.</li>
     
        </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="blue-button" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  
  <!-- Child Pornography Modal -->
<div class="modal fade" id="childPornographyModal" tabindex="-1" aria-labelledby="childPornographyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="childPornographyModalLabel">CHILD PORNOGRAPHY</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
       <ul><li>  The evolution of the internet has made children a viable victim of cyber crime. With more homes having access to the internet, children increasingly use online services and are exposed to the risks of exploitation by predators.</li>
          
         <li>          The easy access to pornographic content online lowers the inhibition of children. Pedophiles often lure children by distributing pornographic material, attempting to meet them for sexual activities, and collecting explicit photographs or videos. </li>
  
         <li>   Pedophiles commonly try to contact children in chat rooms, posing as teenagers, to befriend them and gain their trust. This makes children vulnerable to serious exploitation.</li>
        <li>   Each year, countless children worldwide fall prey to sexual predators. The recording of sexual abuse, once made and shared on the internet, becomes permanent. These children live daily with the trauma, knowing that their suffering is shared by countless strangers.</li>
         
    <li class="fw-bold"> The National Response Centre for Cyber Crime (NR3C) has zero tolerance for pedophiles and is dedicated to making cyberspace a safe environment for children.</li>
      
           
        </ul>
        </div>
        <div class="modal-footer">
            <button type="button" class="blue-button" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  

  <!-- Data Theft Modal -->
<div class="modal fade" id="dataTheftModal" tabindex="-1" aria-labelledby="dataTheftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="dataTheftModalLabel">DATA THEFT</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
      <ul><li>    Data theft is the act of stealing computer-based information from an unknowing victim with the intent of compromising privacy or obtaining confidential information. This is a growing problem for individuals and corporations alike.</li><li>  The following categories are most common in data theft cases:</li></ul>
        
       
    
          
        
          <ul>
            <li><strong>E-commerce:</strong> When you sell or buy items online, ensuring your data is safe from prying eyes is essential. Carelessness can lead to leaking private account information.</li>
            <li><strong>Password Cracking:</strong> Intruders can access your machine and steal valuable data if your system isn’t properly password-protected or the password is weak and easily decoded.</li>
            <li><strong>Eavesdropping:</strong> If data is transmitted over insecure lines without encryption, it can be wiretapped. This means sensitive information such as passwords and private details could be stolen by the eavesdropper.</li>
            <li><strong>Laptop Theft:</strong> Increasingly, incidents of laptop theft occur, where valuable information stored on the laptop is sold to competitors. Failure to encrypt data on laptops can lead to significant losses for firms.</li>
          </ul>
          <ul><li class="fw-bold">   The growing threat of data theft highlights the importance of securing personal and corporate data, especially when storing or transmitting sensitive information online.</li></ul>
         
        </div>
        <div class="modal-footer">
            <button type="button" class="blue-button" data-bs-dismiss="modal">Close</button>
          </div>
      </div>
    </div>
  </div>
  
  <div class="modal fade" id="identityTheftModal" tabindex="-1" aria-labelledby="identityTheftModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content ">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="identityTheftModalLabel">IDENTITY THEFT</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-justify">
         <ul><li>   Identity theft refers to a crime where an individual maliciously obtains and uses another individual’s personal/sensitive information to commit frauds/scams by using the stolen identity. Mostly this crime is committed for economic gain.</li>
         
         <li> The cyber criminal gains access to an individual’s information by stealing e-mail details, stored information on computer databases, or by eavesdropping over the networks to get hold of transactions.</li>
           
         <li>  Identity thefts include but are not limited to: shoulder surfing, dumpster diving, spamming, spoofing, phishing, and skimming. NR3C has successfully investigated numerous cases of identity theft.</li>
          
        </ul>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="iprModal" tabindex="-1" aria-labelledby="iprModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="iprModalLabel">INTELLECTUAL PROPERTY RIGHTS</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-justify">
         <ul><li>   Intellectual property rights is concerned with any act that allows access to patent, trade secrets, customer data, sales trends, and any confidential information.</li></ul>
         
      
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="dosModal" tabindex="-1" aria-labelledby="dosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="dosModalLabel">DENIAL OF SERVICE ATTACK</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body text-justify">
         <ul><li> A Denial-of-Service (DoS) attack is mounted with the objective of causing a negative impact on the performance of a computer or network. It is also known as a network saturation attack or bandwidth consumption attack. Attackers perform DoS attacks by sending a large number of protocol packets to the network.</li></ul>
           
       
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