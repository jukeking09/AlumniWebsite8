<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Constitution</title>
    <style>
        li{
            margin-top:5px;
        }
        table a{
          color: blue!important;
        }
        table {
            width: 100%;
            border-collapse: collapse; /* Removes space between table borders */
            }

            .contenttable td {
            padding: 5px; /* Adds some padding for readability */
            vertical-align: top; /* Aligns content to the top of the cell */
            }

            .contenttable td:first-child {
            text-align: left; /* Aligns the first column's text to the left */
            width: 50%; /* Ensures enough space for the first column */
            }

            .contenttable td:last-child {
            text-align: right; /* Aligns the second column's text to the right */
            }

            /* Table Styles */
.motto-table {
    width: 100%;
    border-collapse: collapse; /* Removes gaps between table borders */
}

/* Cell Styles */
.motto-table td {
    padding: 10px; /* Adds space around content for readability */
    vertical-align: top; /* Aligns content to the top of the cell */
}

/* Title Cell */
.motto-title {
    text-align: right; /* Aligns text to the left */
    font-size: 24px; /* Increases font size for emphasis */
    font-weight: bold; /* Makes the text bold */
    width: 50%; /* Ensures the first column takes 50% of the width */
}

/* Content Cell */
.motto-content {
    text-align: right; /* Aligns the motto content to the left */
    font-size: 16px; /* Regular font size for the motto */
    line-height: 1.5; /* Improves readability by increasing line height */
}

/* Image Cell */
.motto-image {
    vertical-align: left; /* Centers the image vertically */
}

.motto-image img {
    max-width: 100%; /* Ensures the image scales properly */
    height: auto; /* Maintains the image's aspect ratio */
}

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
    
    <div class="container col-md-10">
        <div class="" id="page1">
            <hr>
            <h1 class="anthonysbluetext text-center">INDIAN NATIONAL FEDERATION 
                OF THE PAST PUPILS OF DON BOSCO 
            </h1>
        
            <br>
            <div class="col mx-auto my-3" data-aos="fade-down">
                <figure class="text-center">
                    <img src="img/leadsandprotects.jpg" alt="Leads And Protects" class="img-fluid rounded" style="max-width: 300px; height: auto;">
                    <figcaption class="mt-2 text-danger small">
                        LEADS and PROTECTS
                    </figcaption>
                </figure>
            </div>
            <br>
            <br>
            <div>
                <h4 class="fw-bold text-center">ASSOCIATION OF THE PAST PUPILS OF DON BOSCO </h4>
                <h5 class="text-center">Under the Commission for Salesian Family </h5>
                <h5 class="text-center">St. John Paul II Province – Shillong (INS) </h5>
                <h5 class="text-center">31st January 2024</h5>
            </div>
            <br>
            <br>
            <p>
                <span class="text-danger">Note: </span>  On 11th  May 2024, the Annual General Meeting of SACSAA (St. Anthony’s College Shillong Alumni Association) unanimously 
                approved the resolution to affiliate itself to the Provincial Federation of the Association of the Past Pupils of Don Bosco, 
                St. John Paul II Province-Shillong and adopted the constitution of this parent association.
            </p>
            <hr>
        </div>

        <!-- Page 2 -->
        <div class="my-5" id="page2">
            <h1 class="anthonysbluetext text-center">CONTENTS 
            </h1>
            <table class="contenttable">
                <thead class="text-dark">
                    <tr>
                      <td>Preface</td>
                      <td><a href="#page3">Page 3</a></td>
                    </tr>
                    <tr>
                      <td>Mission</td>
                      <td><a href="#page4">Page 4</a></td>
                    </tr>
                    <tr>
                      <td>Vision</td>
                      <td><a href="#page5">Page 5</a></td>
                    </tr>
                    <tr>
                      <td>Values</td>
                      <td><a href="#page6">Page 6</a></td>
                    </tr>
                    <tr>
                      <td>Prayer and promise</td>
                      <td><a href="#page7">Page 7</a></td>
                    </tr>
                    <tr>
                      <td>Motto</td>
                      <td><a href="#page8">Page 8</a></td>
                    </tr>
                    <tr>
                      <td>The Statutes</td>
                      <td></td>
                    </tr>
                    {{-- <tr>
                      <td>Introduction</td>
                      <td><a href="#page3">Page 3</a></td>
                    </tr> --}}
                    <tr>
                      <td>Article 1: Name and Identity of the Association of Past Pupils of Don Bosco</td>
                      <td><a href="#page9">Page 9</a></td>
                    </tr>
                    <tr>
                      <td>Article 2: The Unit</td>
                      <td><a href="#page10">Page 10</a></td>
                    </tr>
                    <tr>
                      <td>Article 3: Aims of the association</td>
                      <td><a href="#page11">Page 11</a></td>
                    </tr>
                    <tr>
                      <td>Article 4: Enrolment and Membership</td>
                      <td><a href="#page12">Page 12</a></td>
                    </tr>
                    <tr>
                      <td>Article 5: Membership subscription</td>
                      <td><a href="#page13">Page 13</a></td>
                    </tr>
                    <tr>
                      <td>Article 6: Rights of members</td>
                      <td><a href="#page14">Page 14</a></td>
                    </tr>
                    <tr>
                      <td>Article 7: Activities</td>
                      <td><a href="#page15">Page 15</a></td>
                    </tr>
                    <tr>
                      <td>Article 8: Tasks of the unit</td>
                      <td><a href="#page16">Page 16</a></td>
                    </tr>
                    <tr>
                      <td>Article 9: Annual General Assembly (AGA)</td>
                      <td><a href="#page17">Page 17</a></td>
                    </tr>
                    <tr>
                      <td>Article 10: Tasks of the Annual General Assembly</td>
                      <td><a href="#page18">Page 18</a></td>
                    </tr>
                    <tr>
                      <td>Article 11: The Unit Executive Committee</td>
                      <td><a href="#page19">Page 19</a></td>
                    </tr>
                    <tr>
                      <td>Article 12: The Unit Delegate</td>
                      <td><a href="#page20">Page 20</a></td>
                    </tr>
                    <tr>
                      <td>Article 13: The Unit President</td>
                      <td><a href="#page21">Page 21</a></td>
                    </tr>
                    <tr>
                      <td>Article 14: The Unit Vice President</td>
                      <td><a href="#page22">Page 22</a></td>
                    </tr>
                    <tr>
                      <td>Article 15: The Unit Vice President (GEX)</td>
                      <td><a href="#page23">Page 23</a></td>
                    </tr>
                    <tr>
                      <td>Article 16: The Unit Secretary</td>
                      <td><a href="#page24">Page 24</a></td>
                    </tr>
                    <tr>
                      <td>Article 17: The Unit Treasurer</td>
                      <td><a href="#page25">Page 25</a></td>
                    </tr>
                    <tr>
                      <td>Article 18: The unit Executive Members</td>
                      <td><a href="#page26">Page 26</a></td>
                    </tr>
                    <tr>
                      <td>Article 19: Election rules</td>
                      <td><a href="#page27">Page 27</a></td>
                    </tr>
                    <tr>
                      <td>Article 20: Election Commission</td>
                      <td><a href="#page28">Page 28</a></td>
                    </tr>
                    <tr>
                      <td>Article 21: Election Procedure</td>
                      <td><a href="#page29">Page 29</a></td>
                    </tr>
                    <tr>
                      <td>Article 22: Duration of Office</td>
                      <td><a href="#page3-">Page 3-</a></td>
                    </tr>
                    <tr>
                      <td>Article 23: Vacancies</td>
                      <td><a href="#page31">Page 31</a></td>
                    </tr>
                    <tr>
                      <td>Article 24: Incompatibility</td>
                      <td><a href="#page32">Page 32</a></td>
                    </tr>
                    <tr>
                      <td>Article 25: Disciplinary Action</td>
                      <td><a href="#page33">Page 33</a></td>
                    </tr>
                    <tr>
                      <td>Article 26: Young Past Pupils (GEX)</td>
                      <td><a href="#page34">Page 34</a></td>
                    </tr>
                    <tr>
                      <td>Article 27: Secretariat of the Unit</td>
                      <td><a href="#page35">Page 35</a></td>
                    </tr>
                    <tr>
                      <td>Article 28: News Letter, Website, and Electronic Media</td>
                      <td><a href="#page36">Page 36</a></td>
                    </tr>
                    <tr>
                      <td>Article 29: Unit Banner and Badge</td>
                      <td><a href="#page37">Page 37</a></td>
                    </tr>
                    <tr>
                      <td>Article 30: Motto of the Association of the Past Pupils of Don Bosco</td>
                      <td><a href="#page38">Page 38</a></td>
                    </tr>
                    <tr>
                      <td>Article 31: Identity Card</td>
                      <td><a href="#page39">Page 39</a></td>
                    </tr>
                    <tr>
                      <td>Article 32: Finances</td>
                      <td><a href="#page40">Page 40</a></td>
                    </tr>
                    <tr>
                      <td>Article 33: Authentic Text</td>
                      <td><a href="#page41">Page 41</a></td>
                    </tr>
                    <tr>
                      <td>Article 34: Relationship with the Salesian Congregation</td>
                      <td><a href="#page42">Page 42</a></td>
                    </tr>
                    <tr>
                      <td>Article 35: Interpretation of the Statutes</td>
                      <td><a href="#page43">Page 43</a></td>
                    </tr>
                    <tr>
                      <td>Article 36: Amendments</td>
                      <td><a href="#page44">Page 44</a></td>
                    </tr>
                    <tr>
                      <td>Article 37: Best Practices</td>
                      <td><a href="#page46">Page 45</a></td>
                    </tr>
                    <tr>
                      <td>Article 38: Days of Celebration</td>
                      <td><a href="#page47">Page 46</a></td>
                    </tr>
                    <tr>
                      <td>Conclusion</td>
                      <td><a href="#page48">Page 47</a></td>
                    </tr>
                </thead>
                </table>
        </div>
        <hr>

        <!-- 3rd Page -->
        <div class="my-5" id="page3">
            <h4 class="anthonysbluetext">Introduction</h4>
            <br>
            <p>
                The Association of the Past Pupils of Don Bosco is a World Wide organization of the Past Pupils of the Salesians of Don Bosco.
                 The movement springs from the interest and affection which binds the Past pupils to Don Bosco and to the Salesian Family. 
                 Through the association, the members wish to maintain and develop the insights and inspiration received at the School of Don Bosco. 
                Past Pupils belong to the Salesian Family by reason of that special bond forged by their being educated and nurtured in a Don Bosco Institution.
            </p>

            <h4 class="anthonysbluetext">Preface </h4>
            <br>
            <p>
                The Past Pupils and Friends of Don Bosco are persons who because they attended an oratory, a School,
                 a College or another Salesian Presence, received a preparation for life, based on the Principles of Don Bosco’s 
                 Educational method, the Preventive System: Reason, Religion and Loving Kindness. Enriched by the Christian formation 
                 and the Charisma of Don Bosco. 
                Past Pupils and Friends are witnesses in their daily life through their apostolic engagement.  
            </p>
            <p>
                Based on the education and formation in the Salesian way of life, 
                the aim of every Past Pupil and Friend of Don Bosco is to live the life of 
                ‘honest citizens and good human beings.’ The Organization aims to help and assist Past Pupils and Friends to be the ‘salt 
                of the earth and the light of the world’. The scope of Don Bosco’s education is not just to grow up as a single tree, but 
                a wood where each tree supports the other and bears good fruits for the benefit of all. Don Bosco Past Pupil’s attachment 
                is not just to institutions where they studied and the persons whom they met but are captivated by the Spirit and the Mission
                 of Don Bosco. The education received cannot remain a mere memory; one has to turn it into a force that draws the Past Pupil 
                 along with it, to influence the world, transforming it and making it more human.  
            </p>
            <ul>
                <li class="my-2"> I got admission in a Don Bosco institution and therefore I am a past pupil of Don Bosco (a fact of life).</li>
                <li class="my-2"> I joined Don Bosco slowly I got attracted to Don Bosco and today as a Past Pupil, 
                    I feel I was privileged to be there (Grace)
                </li>
                <li class="my-2">I Chose Don Bosco and I feel called to live by the values that I learnt (choice)</li>
                <li class="my-2">Don Bosco taught me so many values for life and today I not only want to live by these values but
                     to inflame the hearts of many others by these values, even being specific projects (Life Project).
                </li>
                <li class="my-2">Our identity is from Don Bosco. The identity differentiates the Past Pupil from others by the vision 
                    of reality (outlook towards life).
                </li>
                <li class="my-2">We live a God cantered and a value based life. We live as integral personalities, with joy and
                     optimism and as honest citizens.
                </li>
                <li class="my-2">Through the association the members wish to maintain and develop the insight and inspiration
                     received at any setting of Don Bosco. The movement springs from the interest and affection which binds 
                     the past pupils to Don Bosco and to the Salesian Family.
                </li>
                <li class="my-2">Don Bosco Past Pupil finds joy in helping people especially the young who are poor and abandoned.</li>
                <li class="my-2">Don Bosco Past Pupil strives to keep alive the values he has imbibed. Hence enters 
                    into networking with all those who can bring about positive change.
                </li>
                <li class="my-2">Association of the Past Pupils of Don Bosco is not a business organization. 
                    It is not a corporate body. It is a voluntary organization and the members strive towards empowerment.
                     We don’t look for monetary benefits.
                </li>
                <li class="my-2">We keep in contact with young people who are concluding their education in Salesian 
                    settings so as to invite them to become actively involved in the association. This will
                     make them feel they are always Past Pupils of Don Bosco and it will offer them the opportunity 
                     for their continuing formation, and an effective group for their social involvement.
                </li>
            </ul>
            <br>
             <p>Local units are to be strengthened in number and quality. The association gains its energy from the local units. 
                The Delegate accompanies them with perseverance and dedication following an appropriate formation programme.
            </p>

            <p>I am happy to present the revised statute which is the guiding light and a cornerstone foundation upon which
                 the conduct and intactness of this whole association rests. I humbly acknowledge my deep sense of gratitude
                  to every member of this wonderful movement and the entire Salesian Family for all their efforts, guidance 
                  and support. I am sure these statutes will enable, empower, and encourage the Association of the Past Pupils
                   of Don Bosco at the Unit level in living the true purpose and carrying the charism of Saint John Bosco through 
                   the cracks and roots of our society.
            </p>

            <p><strong>Fr. Joseph Anikuzhikattil SDB<br>
            Provincial Delegate (INS)<br>
            Shillong: 31st January 2024</strong></p>
            <hr>
        </div>
        <!-- 4th page -->
        <div class="my-5" id="page4">
            <h4 class="anthonysbluetext">MISSION</h4>
            <br>
            <p>Put our knowledge and competencies, as lay professionals, at the service of our members, 
                the Salesian Family and Society, by fulfilling the motto: “Honest Citizens and Good human beings”.
            </p>

            <p>A Don Bosco Past Pupil carries out his/her mission with:</p>
            <ul>
                <li>professional competence (rise above),</li>
                <li>moral conscience (choose with responsibility), and</li>
                <li>social commitment (common good).</li>
            </ul>

            <p>He/she:</p>
            <ul>
                <li>plans formation and educational experience,</li>
                <li>promotes the educative system of Don Bosco, and</li>
                <li>promotes human dignity, respect for life and justice.</li>
            </ul>

            <p>He/she:</p>
            <ul>
                <li>promotes values of the family,</li>
                <li>the sacredness of life, and</li>
                <li>equality of rights and duties.</li>
            </ul>

            <p>He/she:</p>
            <ul>
                <li>practices the educational method of Don Bosco,</li>
                <li>respects the inclinations and aspirations of children.</li>
            </ul>

            <p>He/she:</p>
            <ul>
                <li>accompanies young people in their scholastic and professional choices, their culture and work,</li>
                <li>socio-political preparation,</li>
                <li>social communications, and</li>
                <li>healthy use of free time.</li>
            </ul>

            <p>He/she:</p>
            <ul>
                <li>encourages volunteerism among its younger members,</li>
                <li>follows up the young people right from the first time they begin to attend a Salesian setting, making the existence of the Association, and</li>
                <li>works together with the Salesian Family.</li>
            </ul>
            <hr>
        </div>
        <!-- 5th page -->
        <div class="my-5" id="page5">
            <h4 class="anthonysbluetext">VISION</h4>
            <br>
            <p>Work to help Past Pupils of Don Bosco become “Salt of the earth and light of the world.” Don Bosco Past Pupils are 
                part of the living fabric of the society and are called on to be the defenders of these values. “Salt of the earth
                 and light of the world” as lay people   guided by a clear conscience, doing your work with thoroughly professional 
                 competence and expressing your openness to today’s world through practical social involvement.
            </p>
            <h5 class="anthonysbluetext">Solidarity</h5>
                <p>The past Pupils have clear ideas about the Don Bosco enterprise:</p>
                <ul>
                    <li>its scope,</li>
                    <li>its spirit,</li>
                    <li>its pedagogical method.</li>
                </ul>
                
                <p>It is important that all engaged in the enterprise feel committed to certain important values, like for instance:</p>
                <ul>
                    <li>working for the poor,</li>
                    <li>relating to the students with reason, religion and loving kindness.</li>
                </ul>

                <h5 class="anthonysbluetext">Fraternity</h5>
                <p>The primary reference as the successor of Don Bosco is:</p>
                <ul>
                    <li>The Rector Major assisted by delegate at world confederation level,</li>
                    <li>the Provincial assisted by delegate in the province, and</li>
                    <li>the Rector, or his delegate in the local unit.</li>
                </ul>

                <h5 class="anthonysbluetext">Communion</h5>
                <p>Get to know Salesian Spirituality at its depth by:</p>
                <ul>
                    <li><h5>Spiritual formation:</h5></li>
                    <ul>
                        <li>growing in intimate union with Jesus by making use of the spiritual help available, especially by an active participation in the Liturgy.</li>
                    </ul>

                    <li><h5>Doctrinal Formation:</h5></li>
                    <ul>
                        <li>not simply by a better understanding and a good formation of conscience, but also an ability to give an account of one’s faith and moral values.</li>
                    </ul>

                    <li><h5>Human Formation:</h5></li>
                    <ul>
                        <li>development of their own character, the ability to relate well with others and speak persuasively, if they are to have an impact on society.</li>
                    </ul>
                <ul>
            <hr>
        </div>
        <!-- 6th page -->
        <div class="my-5" id="page6">
            <h4 class="anthonysbluetext">VALUES</h4>
            <p>The Past Pupils Movement is built upon the common values. Defending and promoting these values is non-negotiable for the Past Pupil. They are indeed the guarantee of a truly human life for all, specifically to the values of life, freedom, and truth.</p>

            <h5 class="anthonysbluetext">✫ Life</h5>
            <p>Help young people find meaning in life and commit to looking after quality of life especially that of the poorest and needy.</p>

            <h5 class="anthonysbluetext">✫ Freedom</h5>
            <p>Especially when young people, although appearing democratic, seem to act more and more self-sufficient, endangering the common commitment to build a better world where freedom is guaranteed for all.</p>

            <h5 class="anthonysbluetext">✫ Truth</h5>
            <p>Not only scientific, but also the emotional and spiritual truth. There are problems of relativism leading to nihilism and the breakdown of society. Truth is still truth even if no one believes it. A lie is still a lie, even if everyone believes it.</p>

            <p>We support and guide our members in fulfilling these values in their daily life with professional competence, moral conscience, and social commitment, promoting the common good as stated in the Social Teaching of the Church.</p>
            <hr>
        </div>
        <!-- 7th page -->
        <div class="my-5" id="page7">
            <h4 class="anthonysbluetext">PRAYER AND PROMISE</h4>
            <p>O GOD, We the Past Pupils of Don Bosco, THANK you for the invaluable gift of the Salesian education we 
                have received, and ASK you with confidence, to give us the strength and courage, to live as God cantered 
                human beings, and morally upright citizens.
            </p>

            <p>HELP us nurture the virtues of faith, hope and charity and foster a spirit of unity, amongst all the members of our association.</p>

            <p>WE AFFIRM OUR COMMITMENT to fight against injustice and indifference, 
                while defending at all costs, the values inspired by Don Bosco’s teachings, especially with regard to the upliftment of the
                marginalized youth in society.
            </p>

            <p>WE WILL STRIVE, like our founder, to be agents of positive transformation in the world. We implore you to watch over the 
                Past Pupils, the Salesian Family and all our dear ones.
            </p>
            <hr>
        </div>

        <!-- 8th page -->
        <div class="my-5" id="page8">
            <table class="motto-table">
                <!-- First Row -->
                <tr>
                    <td class="anthonysbluetext motto-title">
                        MOTTO
                    </td>
                    <td rowspan="2" class="motto-image">
                        <img src="./img/donbosco.png" alt="Don Bosco">
                    </td>
                </tr>
                <!-- Second Row -->
                <tr>
                    <td class="motto-content">
                        KNOW, LOVE, HELP ONE ANOTHER AND KEEP UNITED
                    </td>
                </tr>
            </table>
            <hr>
        </div>

         <!-- 9th page -->
        <div class="my-5" id="page9">
            <div>
                <h4 class="anthonysbluetext text-center">Article 1</h4>
                <h4 class="anthonysbluetext text-center">NAME AND IDENTITY OF THE ASSOCIATION</h4>
                <br>
                <p>The Association is known as “Association of the Past Pupils of Don Bosco, SACSAA (St. Anthony’s College, Shillong Alumni Association) Unit.</p>
                <ol>
                    <li>Members of the Association are persons who have attended St. Anthony’s College, Shillong and thus received a preparation for life 
                        based on the principles of Don Bosco’s educational system, commonly known as the Preventive System.
                    </li>
                    <li>The education received creates in them bonds of filial loyalty and gratitude and a readiness to witness to the values of Don 
                        Bosco’s educational system as well as a capacity for service.
                    </li>
                    <li>The Past Pupils are inspired by gratitude to participate in Don Bosco’s Mission and educational project in the world, 
                        in ways that are consonant with their state in life.
                    </li>
                    <li>To take part in the Association of Past Pupils of Don Bosco, a Past Pupil has to register himself/herself 
                        in the unit and accept to abide by the rules and regulations of the Association of the Past Pupils of Don Bosco in India.
                    </li>
                </ol>
                </div>
            <hr>
        </div>

        <!-- 10th page -->
        <div class="my-5" id="page10">
            <div>
                <h4 class="anthonysbluetext text-center">Article 2</h4>
                <h4 class="anthonysbluetext text-center">THE UNIT</h4>
                <ol>
                    <li>
                    The unit of the Past Pupils of Don Bosco, SACSAA unit, is made up of Past Pupils who, aware of the commitments contained in the Statutes and Regulations of the Association of Past Pupils of Don Bosco, at Unit, Province, National, and World levels, have voluntarily organized themselves into an association attached to St. Anthony’s College, Shillong which is a Don Bosco Institution.
                    </li>
                    <li>
                    This unit is formally constituted through a decision of the Rector and his Council of St. Anthony’s College, Shillong to which it is attached. It has a Salesian Delegate appointed by the Rector of the institution or preferably the Rector is the Unit Delegate of the Past Pupils Association.
                    <p class="mt-2"><i><strong>Note:</strong> Here the word “Institution” implies a Salesian higher educational establishment where young people receive formation and training.</i></p>
                    </li>
                    <li>
                    To the House Council belongs the power to dissolve the unit on the recommendation of the Unit Delegate. However, such a step should be taken by intimating the Provincial Executive Committee of the Past Pupils. In the event of such a step being taken, the House Council appoints an Ad Hoc Unit Executive Committee to function till the next meeting of the Annual General Assembly (AGA) or till such period as it deems fit. The ad hoc committee will, however, remain in office only till the expiry of the term to which the dissolved committee was elected.
                    </li>
                    <li>
                    The following procedure is adopted for the election of the Executive Committee of the unit:
                    <ol>
                        <li>
                        The General Assembly is called by the Delegate to elect the Office bearers and Executive Committee members and to fix the membership fee.
                        </li>
                        <li>
                        The General Assembly elects, from among themselves, the office bearers (President, Vice President Senior, Vice President GEX, Secretary, Treasurer, and Committee members) by separate voting for each post. To be elected, a candidate needs to obtain a simple majority. In case of a deadlock, the matter shall be decided by the casting vote of the Unit Delegate.
                        </li>
                        <li>
                        After the elections, the members register themselves and pay the membership fees.
                        </li>
                    </ol>
                    </li>
                    <li>
                    The unit shall pay to the provincial Federation an annual affiliation fee, the quantity of which is determined by the Provincial Council of the Past Pupils.
                    </li>
                </ol>
                </div>
            <hr>
        </div>

        <!-- 11th page -->
        <div class="my-5" id="page11">
            <div>
              <h4 class="anthonysbluetext text-center">Article 3</h4>
              <h4 class="anthonysbluetext text-center">AIMS OF THE ASSOCIATION</h4>
              <ol>
                <li>The general aims of the association are:</li>
                <ol type="i">
                  <li>
                    To keep in touch with, unite and animate all former beneficiaries of Don Bosco Education so as to help them to preserve, develop, and live the values of Don Bosco’s education they have received.
                  </li>
                  <li>
                    To spread the spirit of Don Bosco and to involve themselves in Don Bosco’s mission to the youth of today.
                  </li>
                  <li>
                    To uphold and promote the values and the rights of the human person and the family.
                  </li>
                  <li>
                    To work towards building up a social and political order based on justice, peace, and harmony.
                  </li>
                </ol>
                <li>
                  Saint Anthony’s Unit aims at serving all former pupils, irrespective of whether they are registered or not. Every past pupil tries to keep alive the ties of fraternal friendship initiated by Don Bosco and continued through his Salesians.
                </li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- 12th page -->
        <div class="my-5" id="page12">
            <div>
              <h4 class="anthonysbluetext text-center">Article 4</h4>
              <h4 class="anthonysbluetext text-center">ENROLMENT AND MEMBERSHIP</h4>
              <ol type="a">
                <li>
                  To become a member of the unit, a past pupil should have frequented St. Anthony’s College for a period of time sufficient to enable him/her to know Don Bosco and assimilate the spirit of Don Bosco to some extent.
                </li>
                <li>
                  He/She has to submit a written application for membership to the unit Secretary, together with the membership subscription. If the Executive Committee finds the application in order, the applicant is enrolled.
                </li>
                <li>
                  To take membership in the SACSAA unit, one need not have frequented St. Anthony’s College, Shillong. It is sufficient that he/she has frequented a Don Bosco Institution anywhere in the world.
                </li>
                <li>
                  Past Pupils who have passed through more than one Don Bosco Institution take membership from the unit of their choice. In case of transfer of residence or if a Past Pupil so desires, he/she may take membership from the SACSAA unit, if it is more convenient to him/her, after intimating the unit of origin.
                </li>
                <li>
                  There is only one type of membership called Life Membership. While enrolling in the SACSAA Unit, it is the right of the individual to choose; it cannot be imposed on them by the unit. Life members shall receive a Life Membership Card for the National Federation. All elected executive committee members must be life members. A membership fee of Rs. 300 grants one life-term membership to the SACSAA unit.
                </li>
                <li>
                  When an individual ceases to be a member of a local unit through voluntary resignation or an act of dismissal by competent authority, the member also loses his/her membership/office (if any) in the provincial, as well as National Federations and the World Confederation.
                </li>
                <li>
                  Any faculty teaching in the college or a support staff working on a permanent basis naturally becomes a member of the SACSAA unit. However, a membership fee for a life term may be paid for the sake of the organization.
                </li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- 13th page -->
        <div class="my-5" id="page13">
            <div>
              <h4 class="anthonysbluetext text-center">Article 5</h4>
              <h4 class="anthonysbluetext text-center">MEMBERSHIP SUBSCRIPTION</h4>
              <ol type="a">
                <li>
                  Saint Anthony’s College unit fixes the subscription amount for both Annual and Life membership. However, for every life membership subscription collected, the unit shall pass on to the Provincial Federation the cost of the Life Membership Card + 25% of the subscription amount, while the Provincial Federation shall, in turn, pass on to the National Federation the cost of the Card + 25% of the 25% it receives from the unit.
                </li>
                <li>
                  Members who transfer from one unit to another shall pay to the new unit its membership subscription – annual or life. However, life members who transfer from one unit to another within the same province need to pay only the unit’s share of the subscription (i.e., 75%). If the transfer is to a unit in a different province, the unit’s share and the Provincial Federation’s share should be paid (i.e., 75% + 18.75%). When a life member changes province and desires a new Life Membership Card, the cost of the Card has to be paid anew.
                </li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- 14th page -->
        <div class="my-5"id="page14">
            <div>
              <h4 class="anthonysbluetext text-center">Article 6</h4>
              <h4 class="anthonysbluetext text-center">RIGHTS OF MEMBERS</h4>
              <p>Registered members have the right to:</p>
              <ol type="a">
                <li>
                  Vote during meetings and elections in Saint Anthony’s unit subject to Art 19e and provided he/she paid the membership subscription.
                </li>
                <li>
                  Contest elections, subject to Art 19d.
                </li>
                <li>
                  Register themselves on the official database of the Association and receive the official news organ and other communications.
                </li>
                <li>
                  Enjoy other facilities as granted by Saint Anthony’s College unit.
                </li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- 15th page -->
        <div class="my-5"id="page15">
            <div>
              <h4 class="anthonysbluetext text-center"> Article 7</h4>
              <h4 class="anthonysbluetext text-center ">ACTIVITIES</h4>
              <p>
                Any activity of the unit is valid if it corresponds to the aims of the association and is in harmony with the Spirit of Don Bosco. 
                Saint Anthony’s College Unit encourages its members to be active as a group and as individuals in any work or project that promotes the aims of the Association.
              </p>
            </div>
            <hr>
        </div>

        <!-- 16th page -->
        <div class="my-5" id="page16">
            <div>
              <h4 class="anthonysbluetext text-center ">Article 8</h4>
              <h4 class="anthonysbluetext text-center ">TASKS OF THE UNIT</h4>
              <ol type="a">
                <li>To hold the Annual General Assembly (AGA).</li>
                <li>
                  To hold periodic programmes for the on-going formation of the Past Pupils so that they, as individuals and groups, grow in their awareness of the obligations of being Past Pupils of Don Bosco.
                  <ol type="i">
                    <li>Initiate research and study of the situation of the youth of the locality, especially of those who are marginalized or neglected, in view of addressing their most urgent needs.</li>
                    <li>Organizing programmes for developing leadership qualities in the Past Pupils so that they become community leaders and agents of peace and harmony in society, promoters of justice, and defenders of human rights.</li>
                    <li>Organizing educational, social, cultural, and spiritual activities for themselves and for the young people of the society.</li>
                    <li>Organizing programmes to develop in young people the sense of responsibility and concern for society.</li>
                    <li>Studying the statutes, and implementing the resolutions and directives of the Provincial Federation.</li>
                  </ol>
                </li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- 17th page -->
        <div class="my-5" id="page17">
            <h4 class="anthonysbluetext text-center">Article 9</h4>
            <h4 class="anthonysbluetext text-center">ANNUAL GENERAL ASSEMBLY (AGA)</h4>
            <p>
              The Annual General Assembly (AGA) is the fraternal gathering of the Past Pupils of the unit and is held once a year, to which all Past Pupils are invited.
            </p>
            <hr>
        </div>

        <!-- 18th page -->
        <div class="my-5" id="page18">
            <h4 class="anthonysbluetext text-center">Article 10</h4>
            <h4 class="anthonysbluetext text-center">TASKS OF THE ANNUAL GENERAL ASSEMBLY</h4>
            <ol type="a">
              <li>To draw up strategies to strengthen the Past Pupils movement.</li>
              <li>To approve the last Annual General Assembly minutes and the statement of accounts.</li>
              <li>To elect the unit executive committee members of SACSAA.</li>
              <li>To fix membership subscription on the suggestion of the unit executive committee.</li>
            </ol>
            <hr>
        </div>

        <!-- 19th page -->
        <div class="my-5" id="page19">
            <div>
              <h4 class="anthonysbluetext text-center">Article 11</h4>
              <h4 class="anthonysbluetext text-center">THE UNIT EXECUTIVE COMMITTEE</h4>
              <ol type="a">
                <li>
                  The unit executive committee is the executive organ of St. Anthony’s College, Shillong unit of the Association of the Past Pupils of Don Bosco. It consists of the Delegate, President, Vice-President (Senior), Vice President (GEX), Secretary, Treasurer, and a minimum of Five Executive Committee Members.
                </li>
                <li>
                  The unit executive committee, on recommendation from the Unit President or Unit Delegate, may co-opt other Past Pupils. However, the number of co-opted members must be one less than the elected members. Co-opted members have no right to vote.
                </li>
                <li>The Quorum is one third of the elected members.</li>
                <li>The unit executive committee meets once in two months, and whenever the Unit President or the Unit Delegate deems it necessary.</li>
                <li>It helps the Unit President to prepare the agenda for the meetings.</li>
                <li>
                  To foster the growth of the unit and create better relationships among the Past Pupils, the bi-monthly meetings of the unit Executive Committee may be followed by an informal meeting with all the Past Pupils who are able to attend.
                </li>
                <li>To fix the membership subscription and get it approved in the Annual General Assembly.</li>
                <li>To plan and evaluate the Annual Program.</li>
                <li>To draw up strategies to strengthen the Past Pupils movement.</li>
                <li>To pass resolutions on the activities of the unit.</li>
                <li>To decide a suitable date, as per the recommendation from the Unit President, to hold the unit elections.</li>
                <li>
                  In consultation with the Unit Delegate, it finalizes the nominations of the candidates who wish to contest the Provincial elections as per the criteria set by the Provincial Election Commission, which are then forwarded to the Provincial Election Commission by the Unit President.
                </li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- 20th page -->
        <div class="my-5" id="page20">
            <div>
              <h4 class="anthonysbluetext text-center">Article 12</h4>
              <h4 class="anthonysbluetext text-center">THE UNIT DELEGATE</h4>
              <ol type="a">
                <li>
                  The Delegate of St. Anthony’s College, Shillong unit is not an elected member. He is appointed by the Rector of the house. He takes the place of Don Bosco, as a spiritual animator and guide. Wherever the Delegate is not the Rector of the House, he acts as his representative.
                </li>
                <li>
                  He is directly responsible for the ongoing formation, including the spiritual animation of the Past Pupils.
                </li>
                <li>
                  He carries out his work of animation through his interventions during the meetings and gatherings, through his communications, personal contacts, visits, etc.
                </li>
                <li>
                  If he is not himself the Rector, he takes care to brief the Rector and the House Council regularly regarding the plans and activities of the unit.
                </li>
                <li>He keeps the House Council informed about the state of affairs of the unit.</li>
                <li>
                  He maintains timely communication with the Provincial Delegate and keeps him informed about the happenings of the unit.
                </li>
                <li>
                  He ensures that the unit faithfully adheres to the Statutes, rules, and regulations of the organization and that everything is done in the true spirit of Don Bosco. If, in the opinion of the Delegate, the unit is functioning in a manner contrary to the principles and spirit of Don Bosco, he may recommend to the Council of the Salesian Institution (House Council) the dissolution of the Unit Executive Committee and appoint an ad hoc Executive Committee till fresh elections are held.
                </li>
                <li>
                  As an animator and guide, he is present at all meetings and gatherings. Whenever he is unable to attend, he keeps himself informed of what takes place at the meetings.
                </li>
                <li>
                  As a member of the Unit Executive Committee, he takes full part in all its deliberations, decisions, and activities. His presence at meetings of the Provincial Federation Council is vital.
                </li>
                <li>He acts as a link between the Past Pupils and the Salesian Community.</li>
                <li>He is a compulsory signatory to all financial transactions of the unit.</li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- 21st page -->
        <div class="my-5" id="page21">
            <div>
              <h4 class="anthonysbluetext text-center">Article 13</h4>
              <h4 class="anthonysbluetext text-center">THE UNIT PRESIDENT</h4>
              <ol type="a">
                <li>
                  He represents the SACSAA unit in its dealings with the Salesian Congregation, the Provincial Executive Committee, the Civil authorities, and others.
                </li>
                <li>
                  In agreement with the Unit Delegate, he convenes and prepares the agenda of the Annual General Assembly, the Unit Executive Committee meetings, and all other meetings of the unit and presides over them.
                </li>
                <li>
                  He communicates to the members the decisions of the Provincial Council and ensures the execution of those decisions which have a bearing on the unit.
                </li>
                <li>
                  He keeps the Unit Delegate informed of the state of affairs of the unit and what happens in meetings which the Delegate is unable to attend.
                </li>
                <li>
                  He ensures that the unit is represented at all Provincial Council meetings and other gatherings where the unit is invited to participate.
                </li>
                <li>
                  He ensures that all Unit Executive Committee members carry out their duties diligently and in keeping with the rules and regulations of the Association.
                </li>
                <li>
                  After every major activity, he conducts an evaluation of it. Once every four months, he makes an assessment of the overall performance of the unit, paying particular attention to life membership, finances, formation, payment of annual Provincial Federation affiliation charges, and execution of deliberations carried out.
                </li>
                <li>
                  Whenever important functions are held at the unit level, the President shall extend invitations to the Provincial Federation Council and to the neighboring units.
                </li>
                <li>
                  He ensures to invite the Provincial President for his Annual Visitation to the unit.
                </li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- 22nd page -->
        <div class="my-5" id="page22">
            <div>
            <h4 class="anthonysbluetext text-center">Article 14</h4>
            <h4 class="anthonysbluetext text-center">THE UNIT VICE PRESIDENT (SENIOR)</h4>
            <ol type="a">
              <li>He takes the place of the president in his absence.</li>
              <li>He is present at all SACSAA unit Executive Committee meetings and assists the President in his duties.</li>
            </ol>
          </div>
            <hr>
        </div>

        <!-- Page 23 -->
        <div class="my-5" id="page23">
            <h4 class="anthonysbluetext text-center">Article 15</h4>
            <h4 class="anthonysbluetext text-center">THE UNIT VICE PRESIDENT (GEX)</h4>
            <ol type="a">
              <li>He shall not be more than 35 years at the time of his election.</li>
              <li>He takes part in all unit Executive Committee meetings. He takes care of the young Past Pupils and is responsible for their recruitment and formation.</li>
              <li>He, along with the unit president and unit delegate, ensures that at least twice a year animation programs are organized for the young Past Pupils.</li>
              <li>He assists in the updating of the unit Website and other social media platforms.</li>
              <li>He assists in organizing sports, educational, cultural and social programs with special attention to the needs of the youth.</li>
            </ol>
            <hr>
        </div>

        <!-- Page 24 -->
        <div class="my-5" id="page24">
            <div>
              <h4 class="anthonysbluetext text-center">Article 16</h4>
              <h4 class="anthonysbluetext text-center">THE UNIT SECRETARY</h4>
              <ol type="a">
                <li>He prepares and keeps up to date the list of the Life members and the List of all the Past Pupils of the institution.</li>
                <li>He sends out notices for meetings of the unit Executive Committee and of the Annual General Assembly.</li>
                <li>He attends to the correspondence of the unit.</li>
                <li>He draws up the minutes of the meetings of the unit Executive committee and of the annual General assembly.</li>
                <li>He presents to the provincial Council the unit’s Annual report and statements of Accounts.</li>
                <li>He is responsible for giving updates to the Provincial Federation for updating the Provincial and National Website.</li>
                <li>He prepares and presents the relevant documents during the annual visitation of the Provincial President.</li>
                <li>He prepares the chronicles and statistics by collecting necessary information, documents, photos and presents it to the Unit Executive Committee during its meetings.</li>
                <li>He looks after and preserves the archives of the unit, taking special care to file all correspondence and keep them up to date.</li>
                <li>He prepares and sends to the provincial secretariat the reports and documentation regarding the Principal activities of the SACSAA Unit.</li>
                <li>He keeps the president informed of all happenings in the unit and ensures that no decision is made or any correspondence goes out of the office without the president’s knowledge and consent.</li>
                <li>On the completion of his tenure, he hands over all the files (minutes books, attendance register, life membership file, unit reports file, correspondence file, Disciplinary action taken file – if any, rubber stamps, flags, log in credentials of the Unit Website, Website domain provider, email id’s and social media platforms) and documentation regarding the unit to the incoming Secretary in the presence of the Unit Delegate.</li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- Page 25 -->
        <div class="my-5" id="page25">
            <div>
              <h4 class="anthonysbluetext text-center">Article 17</h4>
              <h4 class="anthonysbluetext text-center">THE UNIT TREASURER</h4>
              <ol type="a">
                <li>He prepares and keeps up to date the inventory of goods owned or used by the SACSAA Unit of the Association of the Past Pupils of Don Bosco.</li>
                <li>He receives subscriptions, contributions and any other income and accounts for the same.</li>
                <li>He prepares the internally audited Statement of Accounts of the Unit and presents it at the Annual General Assembly for approval and also gives it to the Unit Secretary for presentation at the Provincial Council meetings.</li>
                <li>He prepares and presents the relevant documents during the annual visitation of the provincial President along with the Provincial Executive Committee.</li>
                <li>He maintains the registers and books of accounts and carries out the administrative acts of the unit.</li>
                <li>He deposits the money of the unit in a Bank account in the name of the unit, which is to be operated by two signatories out of three (Delegate, President, Treasurer). The delegate must be the compulsory signatory to all financial transactions of the Unit.</li>
                <li>He passes on to the provincial Federation the amount fixed as annual affiliation fees.</li>
                <li>He hands over the balance Sheet of the audited account to the Provincial Executive committee.</li>
                <li>On Completion of his tenure, he hands over to the incoming treasurer all registers, receipt books, cash, bank passbooks, cheque books, vouchers, fixed deposit receipts and documents relating to finance in the presence of the Unit Delegate.</li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- Page 26 -->
        <div class="my-5" id="page26">
            <div>
              <h4 class="anthonysbluetext text-center">Article 18</h4>
              <h4 class="anthonysbluetext text-center">UNIT EXECUTIVE COMMITTEE MEMBERS</h4>
              <ol type="a">
                <li>The SACSAA unit Executive Committee Members take part in the Unit Executive Committee meetings with full and equal rights as the Office bearers.</li>
                <li>Co-opted Executive Committee members will not have the right to vote.</li>
                <li>Elected or co-opted members of the unit Executive Committee who do not have at least 40 percent attendance at the convened meetings in a year are disqualified to stand for elections again for the next one (1) term. However, those who fall short of the 40 percent attendance in any year may be considered eligible by the Election Commission, if they have an aggregate of at least 50 percent attendance in a four-year term.</li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- Page 27 -->
        <div class="my-5" id="page27">
              <div>
                <h4 class="anthonysbluetext text-center">Article 19</h4>
                <h4 class="anthonysbluetext text-center">ELECTION RULES</h4>
                <ol type="a">
                  <li>Elections are held once in four years.</li>
                  <li>Based on their experience, the unit Executive Committee fixes the number of members required for the unit executive committee. This is to be done at the unit Executive Committee meeting held three months prior to the meeting in which the elections actually take place.</li>
                  <li>Nominations in the format approved by the Election commission attested by two registered members of the unit should be submitted to the Unit Delegate in hard copy at least twenty one days in advance prior to the date of election.</li>
                  <li>Eligibility to contest:
                    <ol type="i">
                      <li>The right to contest the election for the Unit Executive Committee is the privilege of the registered Life members and who are present during the elections.</li>
                      <li>The candidate must be a registered member of the unit at least 12 months prior to the date of election.</li>
                      <li>To file nomination for an Office bearer’s post the candidate must be below the age of 65 years as on the date of election.</li>
                      <li>The candidates nominated for election should be registered in their local units, active, enthusiastic and, if elected, available and willing to spare time and energy for the unit in the true spirit of Don Bosco.</li>
                    </ol>
                  </li>
                  <li>Eligibility for Voting:
                    <ol type="i">
                      <li>Members registered less than twelve months before the election shall not have the right to vote, but may be present at the meeting.</li>
                      <li>A member must have at least 40 percent attendance for the meetings, or a member must have participated in at least 40 percent of the activities conducted in the current tenure of the Unit Executive Committee.</li>
                    </ol>
                  </li>
                  <li>Whether a member qualifies to vote or stand for an election is decided by the Election Commission (EC). The decision of the Election Commission in this regard is final and cannot be questioned.</li>
                  <li>The voting is done for each post separately by secret ballot. To be elected, a candidate needs to obtain simple majority. In case of a deadlock, the matter shall be decided by the casting vote of the unit delegate.</li>
                </ol>
              </div>
            <hr>
        </div>

        <!-- Page 28 -->
        <div class="my-5" id="page28">
            <div>
              <h4 class="anthonysbluetext text-center">Article 20</h4>
              <h4 class="anthonysbluetext text-center">ELECTION COMMISSION (EC)</h4>
              <ol type="a">
                <li>The election commission consists of:
                  <ol type="i">
                    <li>The Unit Delegate.</li>
                    <li>The outgoing unit Executive Committee appoints a registered life member of the Association of the Past Pupils of Don Bosco, of integrity and repute or the outgoing President if he is himself not a candidate for election.</li>
                    <li>An independent person who is not in the Association of Past Pupils of Don Bosco.</li>
                  </ol>
                </li>
                <li>The independent member is named by the outgoing unit Executive Committee. It is convenient to choose someone close to the place where the election is going to be held.</li>
                <li>The registered life member of the Association of the Past Pupils of Don Bosco, of integrity and repute or the outgoing President if appointed by the outgoing Unit Executive Committee will preside over the Election Commission. For clarity sake, the Unit Delegate and the independent person who is not in the Association of Past Pupils of Don Bosco cannot preside over the Election Commission.</li>
                <li>The provincial delegate is member of the Election Commission as a witness and a guardian of Charisma and as a member may provide advice to the Election commission.</li>
                <li>The Election Commission is the final authority in all matters related to the elections.</li>
                <li>The Election Commission has the right to reject a member’s nomination if, in its opinion, the member is found not eligible to be a candidate. The decision of the Election Commission taken in this regard will be final and shall not be questioned.</li>
                <li>The Election Commission will ascertain whether the members filing nominations are registered, active and enthusiastic and if elected, will be available and willing to spare time and energy for the unit in the true spirit of Don Bosco.</li>
                <li>The Election Commission shall record and file all correspondence and the minutes of all the proceedings of the election.</li>
                <li>Before the election, the Election Commission shall brief the members about the procedure.</li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- Page 29 -->
        <div class="my-5" id="page29">
            <div>
              <h4 class="anthonysbluetext text-center">Article 21</h4>
              <h4 class="anthonysbluetext text-center">ELECTION PROCEDURE</h4>
              <ol type="a">
                <li>Three months before the expiry of the Unit Executive Committee’s term, the unit President, in consultation with the Unit Executive Committee, decides on the date of the election for the next unit Executive Committee. Notice of election is given and nomination forms are circulated at least 45 days in advance by the President and a copy sent to the Provincial President.</li>
                <li>As per Art 21 (a) the unit meeting is called which has the task of electing the new Unit Executive Committee.</li>
                <li>An Election Commission (EC) is then formed by the unit Executive Committee as stipulated in Arts. 20(a), (b) and (c) above.</li>
                <li>Nominations stipulated in Art. 19c and 19d above are presented to the Election Commission at least twenty-one days in advance of the date of election.</li>
                <li>Before the election, the election Commission verifies if the nominations are in order as per Art 19c, and 19d above, and confirms the candidates willing acceptance of the nomination.</li>
                <li>The election commission then conducts the elections as per art 19g above.</li>
                <li>After the election, the election Commission signs off and hands over the election files and related documents/ report to the incoming unit President.</li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- Page 30 -->
        <div class="my-5" id="page30">
              <div>
                <h4 class="anthonysbluetext text-center">Article 22</h4>
                <h4 class="anthonysbluetext text-center">DURATION OF OFFICE</h4>
                <ol type="a">
                  <li>The Unit President holds office for a period of four years and may be re-elected to the same office for a second term consecutively. Anyone who has been elected for two terms as unit president shall not be eligible for that post again; however, he may be elected any other office without limit.</li>
                  <li>The other members of the Unit Executive Committee are also elected for a term of four years. They may be re-elected to the same offices for consecutive terms without limit or may be re-elected to any other office.</li>
                </ol>
              </div>
            <hr>
        </div>

        <!-- Page 31 -->
        <div class="my-5" id="page31">
            <div>
              <h4 class="anthonysbluetext text-center">Article 23</h4>
              <h4 class="anthonysbluetext text-center">VACANCIES</h4>
              <p>
                When the post of an office bearer becomes vacant due to any reason, the Unit Executive Committee will appoint an elected unit Executive Committee member to that post who shall hold office only till the completion of the mandate of the member who has ceased to hold office.
              </p>
            </div>
            <hr>
        </div>

        <!-- Page 32 -->
        <div class="my-5" id="page32">
            <div>
              <h4 class="anthonysbluetext text-center">Article 24</h4>
              <h4 class="anthonysbluetext text-center">INCOMPATIBILITY</h4>
              <p>
                The office of the President and other members of the Unit Executive Committee are incompatible with offices of public character carrying grave responsibilities of a political nature or are associated with office of profit or conflict of interest directly or indirectly with SACSAA (for clarity’s sake a person working on a salary in St. Anthony’s College, Shillong will not be considered as office of profit unless there is a conflict of interest).
              </p>
            </div>
            <hr>
        </div>

        <!-- Page 33 -->
        <div class="my-5" id="page33">
            <div>
              <h4 class="anthonysbluetext text-center">Article 25</h4>
              <h4 class="anthonysbluetext text-center">DISCIPLINARY ACTION DISCIPLINARY RULES AND PENALTIES</h4>
              <ol type="a">
                <li>
                  Membership of the Association can cease through personal choice of the past pupil, or due to a considered decision of respective presidencies at all levels.  
                  After having proof of unbecoming conduct which is not in line with statutory rules and regulations, or that, is causing injurious damage to the organization or community life, or due to other serious reasons, the respective unit president can decide with the consent of two thirds of the elected Executive committee members only 
                  <ol type="i">
                    <li>A motion of no-confidence and a request for resignation.</li>
                    <li>The dismissal from office (in case of an official).</li>
                    <li>The expulsion of the Past Pupil from the Association.</li>
                  </ol>
                </li>
                <li>
                  In case of dismissal from office or expulsion of the Past Pupil from the Association, it is important to grant the “accused member” the right of explanation, whether written or oral prior to the voting.
                </li>
                <li>
                  The decisions of the foregoing section may be appealed against by approaching an immediately higher structure (Provincial Federation) within 30 days of the action.
                </li>
                <li>
                  In addition:
                  <ol type="i">
                    <li>
                      If in the considered opinion of the unit executive Committee, a past pupil is found guilty of serious unbecoming behaviour or any action that is harmful to the association, the elected Executive Committee may decide with a two thirds majority vote, to take any suitable action against the member, including his/her removal from office or dismissal from the association.
                    </li>
                    <li>
                      The decision regarding the disciplinary action should be conveyed to the member in writing or e-mail. Information regarding the disciplinary action taken should be forwarded to the provincial Executive Committee and the National Executive Committee.
                    </li>
                    <li>
                      In exceptional cases, if the unit Executive Committee fails to take action against an erring member, any registered life member may bring up a motion during the General Assembly for disciplinary action against the member in question.  If in the considered opinion of the annual General Assembly, the member is found guilty of serious unbecoming behaviour or any action that is harmful to the association, the General Assembly may decide, with a two-third majority vote, to take any suitable action against the member, including his/her removal from office or dismissal from the association itself. The decision of the Assembly in this regard is conveyed to the member in writing or e-mail. Information regarding the action taken is also forwarded to the Provincial Executive committee and the national Executive Committee.
                    </li>
                    <li>
                      A member who is removed from an office or membership as per Art.  25d (i) and (ii) shall hold office in the unit, provincial, or National Federations till the completion of the term to which he/she was originally elected. A member dismissed from the association at any level (unit, province or national) shall not be reinstated without the approval of the national Executive Committee.
                    </li>
                    <li>
                      An appeal to the immediate superior body (provincial Executive Committee) against any of the decisions mentioned in the preceding paragraphs is allowed within 30 days of receipt of notice of the action.
                    </li>
                  </ol>
                </li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- Page 34 -->
        <div class="my-5" id="page34">
            <h4 class="anthonysbluetext text-center">Article 26</h4>
              <h4 class="anthonysbluetext text-center">YOUNG PAST PUPILS (GEX)</h4>
              <ol type="a">
                <li>
                  The association has, among its most important duties, in keeping with the specific mission of the Salesian Congregation the care of youth. The care of youth must be done with proper adaptation.
                  <ol type="i">
                    <li>For the young persons who are about to leave St. Anthony’s College, Shillong and</li>
                    <li>for the young persons who have become past pupils, by enhancing the value of their presence in the association.</li>
                  </ol>
                </li>
                <li>
                  Keeping in mind the special needs of the groups mentioned above, the Vice President (GEX), with the collaboration of the Unit Executive Committee, shall organize suitable programmes for them from time to time. To make these programmes effective, the Unit Vice President (GEX) may network with the provincial Vice President (GEX).
                </li>
              </ol>
            <hr>
        </div>

        <!-- Page 35 -->
        <div class="my-5" id="page35">
              <h4 class="anthonysbluetext text-center">Article 27</h4>
              <h4 class="anthonysbluetext text-center">SECRETARIAT OF THE UNIT</h4>
              <p>
                The unit shall have its office at St. Anthony’s College, Shillong where it has been formally established. The institution places at its disposal a place suitable for its meetings and organization.
              </p>
            <hr>
        </div>

        <!-- Page 36 -->
        <div class="my-5" id="page36">
            <h4 class="anthonysbluetext text-center">Article 28</h4>
            <h4 class="anthonysbluetext text-center">NEWSLETTER, WEBSITE AND ELECTRONIC MEDIA</h4>
            <p>
              The unit is expected to circulate a newsletter/ e newsletter at least once in six (6) months. It is also expected to develop and maintain the website, linked to the Provincial and National Federation website, with the latest information, news and happenings.
            </p>
            <hr>
        </div>

        <!-- Page 37 -->
        <div class="my-5" id="page37">
            <div>
              <h4 class="anthonysbluetext text-center">Article 29</h4>
              <h4 class="anthonysbluetext text-center">UNIT BANNER AND BADGE</h4>
              <ol type="a">
                <li>
                  Every Unit shall have a banner of its own with the face of Don Bosco printed on the banner. It shall be exhibited on occasions of Solemn celebrations and meetings. The unit banner needs the approval of the Provincial Executive Committee.
                </li>
                <li>
                  The badge is the same for the entire World Confederation. Its use is optional but highly recommended because it is an external sign of unity among the Past Pupils. On the badge around the figure of Don Bosco, are the words “Leads and Protects”, indicating the role that Don Bosco plays in the life of every Past Pupil.
                </li>
              </ol>
            </div>
            <hr>
        </div>

        <!-- Page 38 -->
        <div class="my-5" id="page38">
              <h4 class="anthonysbluetext text-center">Article 30</h4>
              <h4 class="anthonysbluetext text-center">MOTTO OF THE ASSOCIATION OF PAST PUPILS</h4>
              <p>
                The motto of the Association of the Past Pupils of Don Bosco shall be as given to us by our Father Don Bosco: “Know, love, Help one another and Keep united.”
              </p>
            <hr>
        </div>

        <!-- Page 39 -->
        <div class="my-5" id="page39">
            <h4 class="anthonysbluetext text-center">Article 31</h4>
  <h4 class="anthonysbluetext text-center">IDENTITY CARD</h4>
  <p>
    The unit president/ secretary on behalf of the Unit member will apply to the Provincial Federation President for life Membership Cards which will be obtained from the National Federation in accordance with the procedure laid down for obtaining the same.
  </p>
            <hr>
        </div>

        <!-- Page 40 -->
        <div class="my-5" id="page40">
            <h4 class="anthonysbluetext text-center">Article 32</h4>
  <h4 class="anthonysbluetext text-center">FINANCES</h4>
  <p>
    The unit is financially supported by the membership subscriptions, contributions and money raised through various other means. Each unit has to contribute towards the support of the Provincial and National Federation.
  </p>
            <hr>
        </div>

        <!-- Page 41 -->
        <div class="my-5" id="page41">
            <h4 class="anthonysbluetext text-center">Article 33</h4>
  <h4 class="anthonysbluetext text-center">AUTHENTIC TEXT</h4>
  <p>
    The authentic text of the statutes is the one approved by the National Council of the Association of the Past Pupils of Don Bosco – Indian National Federation.
  </p>
            <hr>
        </div>

        <!-- Page 42 -->
        <div class="my-5" id="page42">
            <div>
  <h4 class="anthonysbluetext text-center">Article 34</h4>
  <h4 class="anthonysbluetext text-center">RELATIONSHIP WITH THE SALESIAN CONGREGATION</h4>
  <ol>
    <li>
      The members of the Association see in the Rector Major the image of Don Bosco and they accept him as their guide; they look to the Salesians for an ongoing clear cut and adequate spiritual guidance. They share in the mission of the Salesian Congregation and pledge themselves to be signs and bearers of God’s love to all, especially the young and to the poor.
    </li>
    <li>
      The SACSAA unit acknowledges the Provincial and the Rector as the representatives of the Rector Major and the Salesian Congregation. They are, by right, members of the unit Executive Committee but, as a rule, they exercise that responsibility through a Salesian appointed to act as their delegate.
    </li>
    <li>
      The basic working principle of the Association is that all deliberations and decisions are made with the concurrence of the Salesians according to the family Spirit of the educative Pastoral Community, which is characteristic of the Association.
    </li>
    <li>
      Salesian Animation
      <ol type="i">
        <li>
          The world Confederation recognizes demands and considers the commitment of the Salesian Congregation in the role as animator of the Past Pupils of Don Bosco with the task of maintaining unity of spirit, stimulating dialogue, encouraging brotherly collaboration and promoting an enduring spiritual formation.
        </li>
        <li>This animation also involves the Past Pupils (male and female)</li>
        <li>Autonomy in communion</li>
        <li>
          The lay character, the secular nature and the autonomy of the SACSAA Unit, does not hinder the perpetual union with the Salesian Society of St. Francis De Sales and the other groups of the Salesian Family, but rather serves as a mutual enrichment and for an improved functioning of the movement.
        </li>
      </ol>
    </li>
  </ol>
</div>
            <hr>
        </div>

        <!-- Page 43 -->
        <div class="my-5" id="page43">
          <h4 class="anthonysbluetext text-center">Article 35</h4>
  <h4 class="anthonysbluetext text-center">INTERPRETATION OF THE STATUTES</h4>
  <p>
    The day to day interpretation and application of these statutes and regulations is left to the Executive Committee of the Provincial Federation. In case of any disagreement, the final authority for the authentic interpretation will be the National Delegate of the Association of the Past Pupils of Don Bosco – Indian National Federation.
  </p>
            <hr>
        </div>

        <!-- Page 44 -->
        <div class="my-5" id="page44">
          <h4 class="anthonysbluetext text-center">Article 36</h4>
  <h4 class="anthonysbluetext text-center">AMENDMENTS</h4>
  <p>
    Any amendment to these statutes needs the approval of the National Council of the Association of Past Pupils of Don Bosco Indian National Federation with more than half the members present and voting in favour.
  </p>
            <hr>
        </div>

        <!-- Page 45 -->
        {{-- <div class="my-5" id="page45">
          <h4 class="anthonysbluetext text-center">Article 37</h4>
  <h4 class="anthonysbluetext text-center">BEST PRACTICES</h4>
  <p>
    To strengthen the Association, the SACSAA Unit Delegate and Unit President communicates/attends to correspondence with the unit members as and when required. All elected members of the World Presidency, the National Executive Committee, and the Provincial Executive Committee must be considered as special invitees and can attend all official meetings and programs of the Unit.
  </p>
            <hr>
        </div> --}}

        <!-- Page 46 -->
        <div class="my-5" id="page46">
          <h4 class="anthonysbluetext text-center">Article 37</h4>
  <h4 class="anthonysbluetext text-center">BEST PRACTICES</h4>
  <p>
    To strengthen the Association, the SACSAA Unit Delegate and Unit President communicates/attends to correspondence with the unit members as and when required. All elected members of the World Presidency, the National Executive Committee, and the Provincial Executive Committee must be considered as special invitees and can attend all official meetings and programs of the Unit.
  </p>
            <hr>
        </div>

        <!-- Page 47 -->
        <div class="my-5" id="page47">
          <div>
  <h4 class="anthonysbluetext text-center">Article 38</h4>
  <h4 class="anthonysbluetext text-center">DAYS OF CELEBRATION</h4>
  <p>The following Annual Feast days are celebrated:</p>
  <ul>
    <li>31st January – Feast of St. John Bosco</li>
    <li>24th May – Feast of Mary Help of Christians</li>
    <li>24th June – World Feast of the Past Pupils in commemoration of Don Bosco’s name feast day and the birth of the Past Pupils Movement.</li>
    <li>16th August – Birthday of Don Bosco</li>
    <li>5th October – Feast of Blessed Alberto Marvelli</li>
    <li>5th December – Feast of Blessed Filippo Rinaldi</li>
    <li>8th December – Feast of the Immaculate Conception and Commemoration of the beginning of the Salesian Family.</li>
  </ul>
  <p>
    The Past Pupils of Don Bosco also participate in the Salesian Family celebrations organized at National, Provincial and Unit levels.
  </p>
</div>

            <hr>
        </div>

        <!-- Page 48 -->
        <div class="my-5" id="page48">
            <h4 class="anthonysbluetext text-center">CONCLUSION</h4>
  <p>
    First approved by the National Council of the Indian National Federation of the Past Pupils of Don Bosco during the meeting at Guwahati on 28th August 2004.
  </p>
  <p>
    Further amendments approved by the National Council at Kohima in June 2008 and at Tura in November 2009, at Guwahati on 27th October 2017. The current amendments passed by the National Council at Shillong on 12th October 2022 and approved by the World Confederation on 27th March 2023.
  </p>
  <br />
<table>
  <tr>
    <td>SD/-</td>
    <td>SD/-</td>
  </tr>
  <tr>
    <td>Mr. Kegan Gala</td>
    <td>Fr. Joseph Manippadam SDB </td>
  </tr>
  <tr>
    <td>National President</td>
    <td>National Delegate</td>
  </tr>
</table>
            <hr>
        </div>
    </div>

    @include('fragments.footer')
    @include('imports.footimport')
</body>
</html>