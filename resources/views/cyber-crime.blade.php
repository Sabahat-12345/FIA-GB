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
    </style>
</head>
<body>
    <div class="container py-4">
        <h1 class="main-title">CYBER CRIME WING</h1>
        
       <!-- Description (Left) and Achievements (Right) Side by Side -->
<div class="row mb-4">
    <!-- Left Side: Description -->
    <div class="col-md-6">
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
            <button class="blue-button">Click here for contact details</button>
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
                    <button class="blue-button">Click to read more</button>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>