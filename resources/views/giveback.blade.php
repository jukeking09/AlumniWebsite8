<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Give Back</title>
    <style>
        #sacseva-pic{}
    </style>
</head>
<body>
    @include('imports.headimport')
    <!-- Spinner -->
    @include('fragments.spinner')

    <!-- Topbar -->
    @include('fragments.topbar')

    <!-- Navbar -->
    @include('fragments.navbar')

    <div class="container py-2">
        <div class="card shadow-lg">
            <div class="card-header bg-primary text-center py-2">
                <h1 class="h4 text-white">Give Back</h1>
            </div>
            <div class="card-body">
                <h5 class="text-bold text-center py-3">If you like to reach out to your alma mater in our mission of Education and Service to the Needy, then read on:</h5>

                <div class="mb-4">
                    <h2 class="h5 text-primary">Evening College &ndash; For the Economically Weak</h2>
                    <p class="text-dark">
                        In keeping with the mission of St. Anthony&rsquo;s College of providing holistic education within the reach of all, the college runs an evening shift for Degree courses in:
                    </p>
                    <ul>
                        <li>BA with major in Philosophy and Khasi</li>
                        <li>BCom with Major in Management</li>
                    </ul>
                    <p class="text-dark">
                        This course is purely aimed at students who are economically weak and have a lower percentage in their class XII. The college provides them scholarships up to <strong>75%</strong> annually. The rest of the fee that such students pay is carried over to their next year if they meet the academic target assigned to them and secure class attendance of 85% and above.
                    </p>
                </div>

                <div class="mb-4">
                    <p class="text-dark">
                        This venture of the college is purely supported by the <strong>Alumni</strong>. The success stories are many from the evening shift. The evening course is another opportunity for many who thought that they had no more chances of education.
                    </p>
                </div>

                <div class="text-center">
                    <h3 class="h5 text-success">Join Us</h3>
                    <p class="text-dark">
                        So, if you as an Antonian like to bring education and support such deserving students, come join us. The little you give will mean much for the study of someone in need. Here is your chance!
                    </p>

                    <h4 class="anthonysbluetext">Bring Another Anthonian to the Light of Education</h4>
                    {{-- <a href="#" class="btn btn-success">Contribute Now</a> --}}
                    <figure class="text-center mt-3">
                        <img src="img/sacsaaqr.jpg" alt="SACSAA QR Code" class="img-fluid rounded">
                        {{-- <figcaption class="mt-2 text-danger small">
                            LEADS and PROTECTS
                        </figcaption> --}}
                    </figure>
                </div>
                <div class="mt-3">
                    <hr>
                    <h4 class="anthonysbluetext ms-3">SAC SEVA</h4>
                    <p>
                        <img src="img/sacseva-logo.jpg" alt="SACSEVA Logo" style="float:left;width:150px;height:auto;">
                        SAC-SEVA (St. Anthony’s College –SEVA), is an outreach initiative by the SACSOC 
                        (St. Anthony’s College Social Outreach Committee). This SEVA, as the word signifies is a 
                        selfless service of providing free food once in a week for the poor and needy in Government Civil Hospital, 
                        Shillong by the Anthonian family.
                    </p>
                    <p>
                        This is an initiative by the clubs of the college AYC(Anthonian Youth Club), NCC and 
                        ROVERS & RANGERS in collaboration with Value Education Department. The Govt. of Meghalaya 
                        has supported us by sanctioning us a vehicle for transporting of the provisions to the sick.
                    </p> 
                    <div>
                        <table>
                        <tr>
                            <td style="width:25%;"></td>
                            <td style="width:50%;" class="text-center">
                                <figure class=" mt-3">
                                    <img id="sacseva-pic" src="img/sacseva-pic.jpg" alt="SACSEVA Picture" class="img-fluid rounded mx-auto d-block" style="max-width:100%;height:auto;">
                                    {{-- <figcaption class="mt-2 text-danger small">
                                        LEADS and PROTECTS
                                    </figcaption> --}}
                                </figure>
                            </td>
                            <td style="width:25%;"></td>
                        </tr>
                    </table>
                    </div>
                    <h5 class="text-center anthonysbluetext">And if you like to give your little to feed an empty stomach … join us, Give your little</h5>
                    <figure class="text-center mt-3">
                        <img src="img/sacseva-qr.png" alt="SACSEVA QR Code" class="img-fluid rounded">
                        {{-- <figcaptioic.jpgn class="mt-2 text-danger small">
                            LEADS and PROTECTS
                        </figcaption> --}}
                    </figure>
                </div>
            </div>
        </div>
    </div>
    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>