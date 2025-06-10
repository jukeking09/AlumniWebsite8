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
        div.scroll-container img {
            max-width: 400px; /* Adjust the maximum width */
            min-width: 400px; /* Adjust the minimum width */
            height: 400px; /* Adjust the height to maintain proportions */
        }
    }

    /* For screens with a maximum width of 600px */
    @media (max-width: 600px) {
        div.scroll-container img {
            max-width: 300px; /* Further reduce the maximum width */
            min-width: 300px; /* Further reduce the minimum width */
            height: 300px; /* Reduce the height for smaller screens */
        }
    }

    /* For screens with a maximum width of 400px */
    @media (max-width: 400px) {
        div.scroll-container img {
            max-width: 150x; /* Further reduce the maximum width */
            min-width: 150x; /* Further reduce the minimum width */
            height: 150x;
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

    div.scroll-container {
    background-color: white;
    overflow: hidden; /* Hide the scrollbar */
    white-space: nowrap;
    padding: 10px;
    display: flex;
    align-items: center;
    cursor: pointer;
    }

    div.scroll-container img {
    padding: 10px;
    }

 div.scroll-container img{
        max-width: 500px; 
        min-width:500px; 
        height: 500px;
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
            <h1 class="display-4 text-white text-uppercase mb-4 ps-5">St. Anthony's is calling you</h1>
            <h3 class="text-white mb-4 ps-5"><em style="font-family: Tahoma">Bring Alive Memories</em></h3>
            @guest
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5 py-3 my-5">Join</a>
            @endguest
            <h1 class="display-4 text-white text-uppercase mb-4 mt-5 ps-5">To Make A Difference</h1>
        </div>

        <!-- Right Section: Sticky Stats -->
        <div class="position-sticky mt-5 p-5 d-flex justify-content-center align-items-center text-center" style="right: 0; max-width: 150px; height:auto;">
            <div class="d-flex flex-column ms-auto">
                <!-- First Sticky Div -->
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="text-white">Members</h5><i class="bi bi-person mt-1"></i><i class="bi bi-person mt-1"></i><i class="bi bi-person mt-1"></i>
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
            <h1 class="display-6 text-white text-uppercase mb-2 ps-5">St. Anthony's is calling you</h1>
            <h3 class="text-white mb-4 ps-5"><em style="font-family: Tahoma">Bring Alive Memories</em></h3>
            @guest
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5 py-3 my-3">Join</a>
            @endguest
            <h1 class="display-6 text-white text-uppercase mb-4 mt-2 ps-5">To Make A Difference</h1>
        </div>

        <!-- Right Section: Sticky Stats -->
        <div class="position-sticky mt-5 p-5 d-flex justify-content-center align-items-top text-center" style="right: 0; max-width: 150px; height:auto;">
            <div class="d-flex flex-column ms-auto">
                <!-- First Sticky Div -->
                <div class="card shadow-lg mb-4">
                    <div class="card-header bg-primary text-white text-center">
                        <h5 class="text-white">Members</h5><i class="bi bi-person mt-1"></i><i class="bi bi-person mt-1"></i><i class="bi bi-person mt-1"></i>
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
            <h1 class="text-white text-uppercase mb-4">Anthonys is calling you</h1>
            @guest
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg px-5 py-3">Join Us</a>
            @endguest
        </div>
    </div>


    <!-- About Section -->
    <section id="about" class="about section my-2">
      <!-- Section Title -->
      <div class="container section-title mt-5" data-aos="fade-up">
        <h2>About Us<br></h2>
      </div><!-- End Section Title -->

      <div class="container">
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                <p>
                    The St. Anthony’s College Shillong Alumni Association (SACSAA), is made up of past pupils of the college who have voluntarily organized 
                    themselves into an association attached to St. Anthony’s College, Shillong. 
                    The association was officially established on 4th October 2005. The association has its own constitution that governs its functioning. 
                    The executive team along with the advisory members oversee the functioning of the association. 
                    The association is affiliated to the parent body of the Don Bosco Past Pupils Association. 
                </p>

                <p>The aims of the association are as follows:</p>
                <ul>
                    <li>To keep in touch with and animate all former students 
                        so as to help them live a value based education learned at this Don Bosco Institution. </li>
                    <li>Maintaining a close contact with the alma mater,  St. Anthony’s College by providing networking, 
                        collaboration in its growth and development.</li>
                    <li>To keep alive the ties of fraternal Anthonian family spirit with all the alumni, 
                        making the college a place of memory always.</li>
                </ul>
          </div>
        </div>

        <div class="container my-5">
            <h2 class="text-center">Motto<br></h2>
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
     <h2 class="text-center">Prominent Alumni</h2>
     <div class="scroll-container" id="scrollContainer">
         @foreach ($prominentalumni as $alumnus)
            <div class="">
                 <figure class="text-center">
                    <img src="{{ route('alumni_photos', basename($alumnus->photo)) }}"  alt="{{ $alumnus->alumniname }}" class="img-fluid rounded">
                    <figcaption class="mt-2 text-bold small">
                        {{ $alumnus->alumniname }}, {{ $alumnus->description }}
                    </figcaption>
            </figure>
            </div>
    @endforeach
    </div>
    <script>
const scrollContainer = document.getElementById("scrollContainer");

let scrollAmount = 0;
let scrollStep = 0.2; // Default speed of scrolling
let scrollDelay = 20; // Delay in milliseconds
let isHovered = false;

// Auto scrolling logic
function autoScroll() {
  if (!isHovered) {
    scrollAmount += scrollStep;
    scrollContainer.scrollLeft = scrollAmount;

    // Reset scroll if end reached
    if (scrollAmount >= scrollContainer.scrollWidth - scrollContainer.clientWidth) {
      scrollAmount = 0;
    }
  }
  requestAnimationFrame(autoScroll);
}

// Adjust scrolling speed dynamically
scrollContainer.addEventListener("wheel", (event) => {
  event.preventDefault();
  const delta = Math.sign(event.deltaY);
  scrollContainer.scrollLeft += delta * (scrollStep * 10); // Increase speed on manual scroll
});

// Hover event listeners
scrollContainer.addEventListener("mouseenter", () => {
  isHovered = true;
  scrollStep = 5; // Increase speed on hover
});

scrollContainer.addEventListener("mouseleave", () => {
  isHovered = false;
  scrollStep = 0.2; // Reset speed on mouse leave
});

// Start the scrolling
autoScroll();
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