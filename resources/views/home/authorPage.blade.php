<x-layouts.main>
    <x-slot:title>
        Author
        </x-slot>
    <x-layouts.nav></x-layouts.nav>
    <div class="container authorPage">
        <link rel="stylesheet" href="{{ asset('css/authorPage.css') }}">
        <h1>AUTHOR</h1>
        <h2>Marjona Urinboyeva</h2>
        <p class="p">"Let's make this world beautiful at least one million people together."</p>
        <h3  class="aboutTitle">About me</h3>
        <div class="message">
            <p class="honestMeUzb p">“Assalomu alaykum, friends! Welcome to my world. Here, I am on a mission to spread positivity and personal growth through my writings. As an IELTS instructor, finance enthusiast, and psychology aficionado, I bring a unique perspective to the topics I explore.
                My goal is to inspire and empower readers, guiding them on their journeys of self-discovery and language mastery. Whether you're curious about human nature, seeking personal development such as lifelong learning, discipline, persistence, IELTS writing, or simply have a passion for literature, you'll find something to scratch your interest on this site. By the way, for the people who have interest in my life, I will also share some personal stories that brought me here today!”</p>
            <p class="honestMe p">“Honest Me!!! I am not the one who is a great or billionaire. I am not a filmmaker, nor a singer/dancer. BTW, I am not the boss of any corporation. Who I am then? Ready to explore: the favorite daughter of a supportive family, a believed leader of some/many, quite religious, highly persuasive, and a boss of her own life. Explorist of the experiences of others with strong observation skills. The preferred type of public behavior is introvert. Loves exploring different businesses, but is NOT INVOLVED in everyone’s business.
                Now great news…!!! I have something, mystery that can make you curious. Do you wanna know the secrets and mysteries of life that made people successful? We will explore it together! Taadamm! So boring…, right? Yeah! Quite dumped! But deep down, as you follow my posts, you will find many written pages that assist you in bombarding your self-consciousness and the nature of others. I hope you will interpret those findings into your own life and make them useful."
                "My teachers… During my apprenticeship, whenever I tell them about my plans, they always question, how useful that works for others. I did writing for three years, but I had to give up all three years of effort, cause I found nothing useful more than just written stories influenced by emotions. But today, after two years of not taking a pen to a hand, finally I am able to turn my ability and effort into something really useful to others. From now on, I will post useful and highly efficient tactics, and experiences that can find its proof in your life. They are deep thoughts, so read them with your deep kind heart.
                Thank you…,"</p>
            <div style="display: flex; justify-content: center">
                <a href="https://www.linkedin.com/in/marjona-urinboeva-0bb67326b/" style="margin-right: 15px; color: #007bff;" target="_blank"><i class="fab fa-linkedin"></i> LinkedIn</a>

                <a href="mailto:Marjona.bahromovna@gmail.com" style="color: #007bff;" target="_blank"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a>
            </div>
            <div class="education" >
                <h2 style="display: flex; margin-top: 100px; margin-bottom: -10px; justify-content: center">Education</h2>
                <div style="display:flex; justify-content: center; gap: 50px; margin-top: 50px">
                    <img style="width: 400px; height: 250px; border-radius: 20px;" src='{{asset('images/wiut.jpg')}}'>
                    <div style="width: 400px">
                        <p>
                            Westminster International University in Tashkent (WIUT)
                            Do you wanna know more about WIUT, and my study. Okay, let’s go:
                        </p>
                        <ul>
                            <li>Finance: Yeah</li>
                            <li>Investment: Yeah</li>
                            <li>Uniform: Nope</li>
                            <li>Flexible schedule: Yeah</li>
                            <li>Factual learning: Nope</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <div class="credentialsSection">
            <div class="quote">
                <img src="{{ asset('images/aboutPage/img_10.png') }}" alt="quote">
                <h4>Status quo: “Be water, my friend!”-Bruce Lee</h4>
            </div>
            <div class="activities" style="margin-top: 100px">
                <div>
                    <img src="{{ asset('images/aboutPage/img_6.png') }}" alt="act">
                    <img src="{{ asset('images/aboutPage/img_7.png') }}" alt="act">
                    <img src="{{ asset('images/aboutPage/img_8.png') }}" alt="act">
                    <img src="{{ asset('images/aboutPage/img_9.png') }}" alt="act">
                </div>
            </div>
        </div>
    </div>


    <x-layouts.footer></x-layouts.footer>
</x-layouts.main>
