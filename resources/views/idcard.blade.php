<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>A4 Quadrant Layout</title>
    <style>
        @page {
            size: A3;
            margin: 0; /* Remove any default margins */
        }

        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .a4-container {
            position: relative;
            width: 180mm; /* A4 width */
            height: 240mm; /* A4 height */
            box-sizing: border-box;
            border: 1px solid black;
            overflow: hidden; /* Prevent content overflow */
        }

        /* Quadrant lines */
        .vertical-line {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 50%;
            border-left: 2px dotted black;
        }

        .horizontal-line {
            position: absolute;
            left: 0;
            right: 0;
            top: 50%;
            border-top: 1px dotted black;
        }

        /* Quadrants */
        .quadrant {
            position: absolute;
            width: 50%;
            height: 50%;
            box-sizing: border-box;
            overflow: hidden;
        }

        .quadrant.q1 {background-color: #f0f8ff; 
           width: 50%;
           height: 50%;}
        .quadrant.q2 { top: 0; right: 0; }
        .quadrant.q3 { bottom: 0; left: 0; }
        .quadrant.q4 { bottom: 0; right: 0; }

        /* Styling for front and back divs */
        .front, .back {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            font-size: 16px;
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;
        }

        .front {
        margin-left: 20px;
        margin-top: -15px;
        background-color: #f0f8ff;
        transform: rotate(270deg); Rotate the content
        transform-origin: center center; /* Rotate around the center */
        width: 130%!important; 
        /* height: 100%!important; Ensure it spans the full height of the quadrant */
        display: flex; /* For centering content */
        justify-content: center;
        align-items: center;
        box-sizing: border-box; /* Include padding and border in dimensions */
        }

        .back {
          z-index: 999;
            background-color: #f0f8ff;
            transform: rotate(90deg); Rotate the content
            transform-origin: center center; /* Rotate around the center */
            width: 210%!important;
            height: 160%!important;
            display: flex; /* For centering content */
            justify-content: center;
            align-items: flex-end;
            box-sizing: border-box; /* Include padding and border in dimensions */
        }

        .back section{
            padding-top: 300px; 
            padding-right: 250px;
            padding-bottom: 200px;
        }

        .instructions{
            background-color: white;
        }
        .instructions h3{
          text-align: center;
        }
        #header {
            display: flex;
            justify-content: center;
            font-size: 14px;
        }

        
        .firstline {
            display: flex;
            justify-content: space-between;
            font-size: 6px;
            margin-bottom: 2px;
        }

        #bottommain{
            margin-top:1rem;
        }
        table {
        width: 100%; /* Make the table span full width */
        border-collapse: collapse; /* Remove gaps between cells */
            }
            td {
                vertical-align: middle; /* Align cell content vertically */
            }
            .seal-cell {
                text-align: right; /* Align content in this cell to the right */
            }
            .photo-cell {
                text-align: right; /* Align content in this cell to the right */
            }
            img {
                width: 30px; /* Maintain consistent image width */
            }
            .photo-cell img {
                width: 30px;
            } 
            body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .my-5 {
            margin-top: 1rem;
            margin-bottom: 1rem;
        }
        #header {
            margin-bottom: 4px;
        }
        .motto-table {
            width: 100%;
            border-collapse: collapse;
        }
        .motto-content {
            text-align: center;
        }
        #left-image-cell {
            vertical-align: text-top;
            text-align: center;
            /* padding-right: 35px; */
        }
        #right-image-cell {
            vertical-align: text-top;
            text-align: center;
            /* padding-left: 15px; */
        }
        #left-image {
            width: 40px;
        }
        #right-image {
            width: 50px;
        }
        #frontmain {
            padding: 0;
            margin: 0;
            text-align: center;
        }
        .firstline {
            display: flex;
            justify-content: space-between;
            font-size: 2px;
        }
        .my-3 {
            margin-top: 3px;
            margin-bottom: 3px;
        }
        #bottommain table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }
        #bottommain td {
            vertical-align: middle;
        }
        .seal-cell {
            text-align: right;
        }
        .photo-cell {
            text-align: right;
        }
        .photo-cell img {
            width: 40px;
        }
        
        img {
            max-width: 100%;
            height: auto;
        }
        .userphoto{
            width: 80px!important;
            height: 80px!important;
        }
        .seal-img{
            width: 60px!important;
            height: 60px!important;
        }
        .text-center {
            text-align: center;
        }
        .text-left{
          text-align: left;
        }
        
    </style>
</head>
<body>
    <div class="a4-container">
        <div class="vertical-line"></div>
        <div class="horizontal-line"></div>

        <!-- Quadrants -->
        <div class="quadrant q1">
            <div class="front">
                {{-- <h3>Front Page Content</h3>
                <p>This content is in quadrant 3.</p> --}}
                <div class="my-5" id="frontpage">
            <div id="header">
                <table class="" style="width: 100%; border-collapse: collapse; margin: 0; padding: 0; ">
    <tr>
        <!-- Left Image -->
        <td rowspan="5" id="left-image-cell" style="padding: 0; margin-left: 20px;width: 3%;">
            <img src="./img/leadsandprotects.png" alt="Don Bosco" id="left-image">
        </td>
        <!-- First Heading -->
        <td style="text-align: center; padding: 0; margin: 0;width: 15%;">
            <h4 style="margin: 0; padding: 0;">ST. ANTHONY’S COLLEGE SHILLONG ALUMNI ASSOCIATION</h4>
        </td>
        <!-- Right Image -->
        <td rowspan="5" id="right-image-cell" style="padding: 0; margin-right: 20px;width: 3%;">
            <img id="right-image" src="./img/sacsaa.png" alt="Don Bosco">
        </td>
    </tr>
    <tr>
        <!-- Second Heading -->
        <td style="text-align: center; padding: 0; margin: 0;width: 15%;">
            <h5 style="margin: 0; padding-top: 5px;">(Affiliated to the Association of the Past Pupils of Don Bosco)</h5>
        </td>
    </tr>
    <tr>
        <!-- Third Heading -->
        <td style="text-align: center; padding: 0; margin: 0;width: 15%;">
            <h5 style="margin: 0; padding-top: 5px;">St. Anthony’s College, Shillong</h5>
        </td>
    </tr>
    <tr>
        <!-- Fourth Heading -->
        <td style="text-align: center; padding: 0; margin: 0;width: 15%;">
            <h5 style="margin: 0; padding-top: 5px;">793 001 – Meghalaya, India</h5>
        </td>
    </tr>
</table>
  </div>
            <div id="frontmain">
                <h5>LIFETIME MEMBERSHIP CARD</h5>
                <div class="details-table">
    <table style="width: 100%; border-collapse: collapse; margin: 0; padding: 0;">
        <!-- Row 1: Name and ID -->
        <tr>
            <td style="text-align: left; padding-left: 20px; margin: 0; width: 50%;">
                <h6 style="margin: 0; padding-left: 10px;">Name: {{ $user->first_name }}  {{ $user->last_name }}</h6>
            </td>
            <td style="text-align: right; padding-right: 20px; margin: 0; width: 50%;">
                <h6 style="margin: 0; padding-right: 20px;">ID NO: {{ $user->custom_id }}</h6>
            </td>
        </tr>
        
        <!-- Row 2: Department -->
        <tr>
            <td colspan="2" style="text-align: left; padding-left: 20px; margin: 0;">
                <h6 style="margin: 0; padding-left: 10px;">Department: {{ $user->department->department_name }}</h6>
            </td>
        </tr>

        <!-- Row 3: Year of Passing -->
        <tr>
            <td colspan="2" style="text-align: left; padding-left: 20px; margin: 0;">
                <h6 style="margin: 0; padding-left: 10px;">Year Of Passing: {{$user->year_of_passing}}</h6>
            </td>
        </tr>
    </table>
</div>
                <div id="bottommain">
                    <table style="width: 100%; border-collapse: collapse; margin: 0; padding: 0;">
                        <tr>
                            <td style="text-align: left; padding-left: 40px; margin: 0; width: 33%;"><img src="./img/SignaturePRES.png" alt="President Signature"></td>
                            <td style="text-align: left; padding: 0; margin: 0; width: 33%;" rowspan="6" class="seal-cell">
                                <img src="./img/seal.png" class="seal-img" alt="Seal">
                            </td>
                            <td style="text-align: center; padding: 0; margin: 0; width: 33%;"rowspan="6" class="photo-cell">
                                  @if ($profilePicturePath && file_exists($profilePicturePath))
                                    <img class="userphoto" src="file://{{ $profilePicturePath }}" alt="User Photo">
                                @else
                                    <p>No photo available</p>
                                 @endif 
                            </td>
                        </tr>
                        <tr>
                            <td style="padding: 0; margin: 0; width: 50%;"></td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 20px; margin: 0; width: 50%;"><h6 style="margin: 0; padding-left: 10px;">President</h6></td>
                        </tr>
                        <tr>
                            <td style="text-align: left; padding-left: 20px; margin: 0; width: 50%;"><h6 style="margin: 0; padding-left: 10px;">SACSAA</h6></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
            </div>
        </div>
        <div class="quadrant q2">
            <div class="back">
              <section>
                <br><br><br><br><br><br><br><br>
                <h5>Address:{{$user->address}}</h5>
                {{-- <h5>Address:dasdasdasdasdasd</h5>
                <h5>Address:dasdasdasdasdasd</h5>
                <h5>Address:dasdasdasdasdasd</h5>
                <h5>Address:dasdasdasdasdasd</h5> --}}
              </section>
            </div>
        </div>
        <div class="quadrant q3">
            {{-- <div class="instructions">
                <h3>Instructions</h3>
                <ol>
                    <ul>Fold in Half</ul>
                    <ul>Then Again</ul>
                    <ul>Gluestick</ul>
                    <ul>Tada</ul>
                </ol>
            </div> --}}
        </div>
        <div class="quadrant q4">
        </div>
    </div>
</body>
</html>
