@include('imports.headimport')
<style>
    #img-div{
        background-image: url('img/img_College.jpg'); 
        filter: brightness(0.5);
        background-repeat: no-repeat;
        background-size: 100% auto;
    }

    /* .carousel-item img{
        max-width: 500px; 
        min-width:500px; 
        height: 500px;
    } */

    .swiper-slide img{
        max-width: 500px; 
        min-width:500px; 
        height: 500px;
    }

    /* For screens with a maximum width of 800px */
    @media (max-width: 800px) {
        .swiper-slide img {
            max-width: 400px; /* Adjust the maximum width */
            min-width: 400px; /* Adjust the minimum width */
            height: 400px; /* Adjust the height to maintain proportions */
        }
    }

    /* For screens with a maximum width of 600px */
    @media (max-width: 600px) {
        .swiper-slide img {
            max-width: 300px; /* Further reduce the maximum width */
            min-width: 300px; /* Further reduce the minimum width */
            height: 300px; /* Reduce the height for smaller screens */
        }
    }

    /* For screens with a maximum width of 400px */
    @media (max-width: 400px) {
        .swiper-slide img {
            max-width: 100%; /* Make it fully responsive */
            min-width: auto; /* Remove fixed minimum width */
            height: auto; /* Allow proportional height adjustment */
        }
    }

    .swiper {
      width: 75%;
      height: 75%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      /* background: #444; */
      display: flex;
      justify-content: center;
      align-items: center;
    }
    
</style>
<body>
    <!-- Spinner -->
    @include('fragments.spinner')

    <!-- Topbar -->
    @include('fragments.topbar')

    <!-- Navbar -->
    @include('fragments.navbar')

    <!-- LARGE SCREENS -->
    <div class="d-none d-lg-block container-fluid p-0 mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="position-relative bg-dark text-white vh-100 d-flex">
        <!-- Background Image -->
        <div id="img-div" class="position-absolute top-0 start-0 w-100 h-100 bg-cover bg-center"></div>

        <!-- Left Section: Main Content -->
        <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center text-center position-relative">
            <h1 class="display-1 text-white text-uppercase mb-4">Anthonys is calling you</h1>
            @guest
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5 py-3">Join Us</a>
            @endguest
        </div>

        <!-- Right Section: Sticky Stats -->
        <div class="position-sticky mt-5 p-5 d-flex justify-content-center align-items-center text-center" style="right: 0; max-width: 150px; height:auto;">
            <div class="d-flex flex-column ms-auto">
                <!-- First Sticky Div -->
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="text-white">Members</h5><i class="bi bi-person mt-1"></i>
                    </div>
                    <div class="card-body bg-primary">
                       <span class="h4 text-white">{{ $userCount }}</span>
                    </div>
                </div>

                <!-- Second Sticky Div -->
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="text-white">Events</h5><i class="bi bi-calendar-event mt-1"></i>
                    </div>
                    <div class="card-body bg-primary">
                        <span class="h4 text-white"> {{ $eventCount }} </span>
                    </div>
                </div>

            </div>
        </div>
        
    </div>
</div>

<!-- MEDIUM SCREENS -->
    <div class="d-none d-md-block  d-lg-none container-fluid p-0 mb-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="position-relative bg-dark text-white vh-90 d-flex">
        <!-- Background Image -->
        <div id="img-div" class="position-absolute top-0 start-0 w-100 h-100 bg-cover bg-center"></div>

        <!-- Left Section: Main Content -->
        <div class="flex-grow-1 d-flex flex-column justify-content-center align-items-center text-center position-relative">
            <h1 class="display-1 text-white text-uppercase mb-4">Anthonys is calling you</h1>
            @guest
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5 py-3">Join Us</a>
            @endguest
        </div>

        <!-- Right Section: Sticky Stats -->
        <div class="position-sticky mt-5 p-5 d-flex justify-content-center align-items-top text-center" style="right: 0; max-width: 150px; height:auto;">
            <div class="d-flex flex-column ms-auto">
                <!-- First Sticky Div -->
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="text-white">Members</h5><i class="bi bi-person mt-1"></i>
                    </div>
                    <div class="card-body bg-primary">
                       <span class="h4 text-white">{{ $userCount }}</span>
                    </div>
                </div>
                <!-- Second Sticky Div -->
                <div class="card shadow-lg">
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="text-white">Events</h5><i class="bi bi-calendar-event mt-1"></i>
                    </div>
                    <div class="card-body bg-primary">
                        <span class="h4 text-white"> {{ $eventCount }} </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- SMALL SCREENS -->
    <div class="d-none d-sm-block d-md-none container-fluid p-0 mb-2 " >
        <div class="text-center">
            <h1 class="text-white text-uppercase mb-4">Anthonys SMALL is calling you</h1>
            @guest
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5 py-3">Join Us</a>
            @endguest
        </div>
    </div>


    <!-- About Section -->
    <section id="about" class="about section my-2">
      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>About Us<br></h2>
      </div><!-- End Section Title -->

      <div class="container">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <p>
                    The St. Anthony’s College Shillong Alumni Association (SACSAA), is made up of past pupils of the college who have voluntarily organized 
                    themselves into an association attached to St. Anthony’s College, Shillong. 
                    The association was officially born on 4th October 2005. The association has its own constitution that governs its functioning. 
                    The executive team along with the advisory members oversee the functioning of the association. 
                    The association is affiliated to the parent body of the Don Bosco Past Pupils Association. 
                </p>

                <p>The aims of the association are as follows:</p>
                <ul>
                    <li>To keep in touch with and animate all former students 
                        so as to help them live a value based education learned at this Don Bosco Institution. </li>
                    <li>Maintaining a close contact with the alma mater,  St. Anthony’s College by providing networking, 
                        collaboration in its growth and development</li>
                    <li>To keep alive the ties of fraternal Antonian family spirit with all the alumni, 
                        making the college a place of memory always</li>
                </ul>
          </div>
        </div>

        <div class="container my-5">
            <h2>Motto<br></h2>
            <h3 class="anthonysbluetext text-center">MAKING A DIFFERENCE</h3>
        </div>

        <div class="container my-5">
            <h3>Office Bearers:</h3>
            <table class="table table-striped">
                <thead>
                    <tr class="anthonysbluetext">
                    <th>Name</th>
                    <th>Designation</th>
                    </tr>
                </thead>
                <tbody class="text-dark">
                    <tr>
                        <td>Deep Gurung</td>
                        <td>President</td>
                    </tr>
                    <tr>
                        <td>Kesterlee L Syiemiong</td>
                        <td>Vice President (Senior)</td>
                    </tr>
                    <tr>
                        <td>Bankerlang Sohtun</td>
                        <td>Jr Vice President (GEX)</td>
                    </tr>
                    <tr>
                        <td>Vancouver Shullai</td>
                        <td>Secretary</td>
                    </tr>
                    <tr>
                        <td>Upasna Rai Khongsngi</td>
                        <td>Treasurer</td>
                    </tr>
                    <tr>
                        <td>Aman Kumar</td>
                        <td>Executive Member</td>
                    </tr>
                    <tr>
                        <td>Pius Bareh</td>
                        <td>Executive Member</td>
                    </tr>
                    <tr>
                        <td>Daryllstar Lyngdoh</td>
                        <td>Executive Member</td>
                    </tr>
                    <tr>
                        <td>Prinali Tanti</td>
                        <td>Executive Member</td>
                    </tr>
                    <tr>
                        <td>Michael R Syiemlieh</td>
                        <td>Executive Member</td>
                    </tr>
                    <tr>
                        <td>Fr Joby Joseph sdb</td>
                        <td>Delegate</td>
                    </tr>
                </tbody>
                </table>
            </div>
        
        
      <!-- End Section Title -->
    </section>
    <!-- /About Section -->
     
    <section id="college-profile">
        <h2 class="text-center">College Profile</h2>
        <div class="container my-5">
            <p>
                St. Anthony’s College, Shillong, is an educational institution belonging to and managed by the Salesians of Don Bosco. It is a 
                government-aided, multi-disciplinary (Arts, Commerce, 
                Business Administration, Performing Arts and Science), co-educational degree college affiliated to North Eastern Hill University. 
            </p>
            <p>
                It was first accredited by NAAC in September 2000 with the highest grade of FIVE STARS. In 2008 the college was re-accreditaed with 'A' 
                Grade (3.6/4 CGPA=90%) with the highest grade in the east and north East. The College was also 
                selected as a College with Potential for 
                The college has completed its fourth cycle of accreditation and was graded with B++ in 2022. 
            </p>
            <p>
                The Salesians of Don Bosco, an International Society founded by St John Bosco (1815-1888) in Italy, 
                has more than 17,000 members who are known as Salesians of Don Bosco. They are in present more than 134 countries,
                 and specialize in education and social service institutions for youth. Founded in 1934, 
                St Anthony’s College has the distinction being the first institution of higher learning established by the Salesians world-wide.
            </p>
            <p>
                Guided by the religious and educational philosophy of St John Bosco, St. Anthony’s College was founded with the 
                avowed mission of “bringing college education within reach of the common man and woman” 
                and has been in the vanguard of higher education in Northeast India. True to its motto, “Ever More and Better Ever”, 
                St. Anthony’s College has striven since its inception to turn the youth of Northeast India into leaders of the society -- politicians, 
                bureaucrats, scientists, doctors, judges, lawyers, engineers, and so on. An average, about 1200+ students graduate each year from the college.
                 It its over 90 years of its existence,
                 St Anthony’s College has provided education for about thousands of young women and men. They are the Alumni of St Anthony’s College.
            </p>
            <p>
                St Anthony’s College believes in life-oriented and value-based teaching, and nurtures a culture of solidarity. 
                The College has the vision of moulding intellectually competent, morally upright, socially committed and spiritually
                 inspired persons capable of building a more human social order within the context of the nation’s plurality of religions
                and diversity of cultures. 
                The Alumni of St Anthony’s College bear testimony to this endeavour, they live true to the motto of the unit as Make a Difference. 
            </p>
        </div>
    </section>
<div class="container">
     <!-- Carousel --><h2 class="text-center">Prominent Alumni</h2>
{{-- <div id="demo" class="carousel slide" data-bs-ride="carousel">
  <!-- The slideshow/carousel -->
  <div class="carousel-inner text-center">
    <div class="carousel-item active">
      <figure class="text-center">
            <img src="img/Prominent Alumni/pasangma.jpg" alt="(L) Shri. P A Sangma" class="img-fluid rounded">
            <figcaption class="mt-2 text-bold small">
                (L) Shri. P A Sangma, Former Lok Sabha Speaker, Chief Minister
             /figcaption>
       </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/djala.jpg" alt="(L) Arch Bishop Dominic Jala" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            (L) Arch Bishop Dominic Jala, former Arch Bishop of Shillong
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/cknongrum.jpg" alt="(L) Capt. Clifford K Nongrum" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            (L) Capt. Clifford K Nongrum, Maha Vir Chakra
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
         <figure class="text-center">
                        <img src="img/Prominent Alumni/manlun.jpg" alt="(L). Major David Manlun" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            (L). Major David Manlun, Kirti Chakra
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/Lumpem Vashum.jpeg" alt="Lumpem Vashum" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Lumpem Vashum, All India 53 Rank, IIS
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/ekmawlong.png" alt="(L) Shri. E K Mawlong" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            (L) Shri. E K Mawlong, Former Chief Minister of Meghalaya
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/serto.jpg" alt="Justice Songkhupchung Serto" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Justice Songkhupchung Serto, High Court Judge
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/Bhattacharyya.png" alt="Dr. Pushpak Bhattacharyya" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Dr. Pushpak Bhattacharyya, called as the Godfather of NLP in India
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/Nambie Jessica Marak.jpg" alt="Nambie Jessica Marak" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Nambie Jessica Marak, Runner-Up MasterChef India Season 8 
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/Fr Stephen Mavely.png" alt="Fr Stephen Mavely sdb" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Fr Stephen Mavely sdb, Ph D, Founding VC of Don Bosco University
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/Mooshahary.jpg" alt="Shri. R S Mooshahary" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Shri. R S Mooshahary, Former Governor of Meghalaya
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
         <figure class="text-center">
                        <img src="img/Prominent Alumni/Sturgeon.jpg" alt="Brig. William Sturgeon" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Brig. William Sturgeon
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/Sesino Yhoshu.jpg" alt="Sesino Yhoshu" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Sesino Yhoshu, Film Maker- National Award Winner
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/ddl.jpg" alt="Dr. D D Lapang" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Dr. D D Lapang, former Chief Minister of Meghalaya
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/mukul.webp" alt="Dr Mukul Sangma" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Dr Mukul Sangma, Former Cheif Minister of Meghalaya
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/rpdiengdoh.jpg" alt="(L) Shri. Raymond P Diengdoh" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            (L) Shri. Raymond P Diengdoh MPS, Ashok Chakra
                        </figcaption>
                    </figure>
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/RiahTaipodia.jpeg" alt="Riah Taipodia, International Film Award Winner" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Riah Taipodia, International Film Award Winner
                        </figcaption>
                    </figure>
      
    </div>
    <div class="carousel-item">
        <figure class="text-center">
                        <img src="img/Prominent Alumni/RidalangMaryTariang.HEIC" alt="Ridalang Mary Tariang, Entrepreneur, Co-founder, Hills festival Meghalaya" class="img-fluid rounded">
                        <figcaption class="mt-2 text-bold small">
                            Ridalang Mary Tariang, Entrepreneur, Co-founder, Hills festival Meghalaya
                        </figcaption>
                    </figure>
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev text-dark" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon text-dark">Previous</span>
  </button>
  <button class="carousel-control-next text-dark" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon text-dark">Next</span>
  </button>
</div> --}}
<!-- Swiper -->
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
        <!-- Make populate from db-->
      {{-- <div class="swiper-slide">
            <figure class="text-center">
            <img src="img/Prominent Alumni/pasangma.jpg" alt="(L) Shri. P A Sangma" class="img-fluid rounded">
            <figcaption class="mt-2 text-bold small">
                (L) Shri. P A Sangma, Former Lok Sabha Speaker, Chief Minister
             /figcaption>
       </figure>
    </div> --}}

    @foreach ($prominentalumni as $alumnus)
            <div class="swiper-slide">
                 <figure class="text-center">
                    <img src="{{ route('alumni_photos', basename($alumnus->photo)) }}"  alt="{{ $alumnus->alumniname }}" class="img-fluid rounded">
                    <figcaption class="mt-2 text-bold small">
                        {{ $alumnus->alumniname }}, {{ $alumnus->description }}
                    </figcaption>
            </figure>
            </div>
    @endforeach
    </div>
    <div class="swiper-button-next d-none d-lg-block"></div>
    <div class="swiper-button-prev d-none d-lg-block"></div>
    {{-- <div class="swiper-pagination"></div> --}}
    
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
        <!-- Link Swiper's CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            });
        </script>
  </div>
</div>
     {{-- <section id="events">
        <h2 class="text-center">Events/Updates</h2>
        <div class="container my-5">
            <h1>Placeholder here</h1>
        </div>
    </section> --}}

    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>