<!DOCTYPE html> <html lang="en"> <head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"
    integrity="sha384-3LK/3kTpDE/Pkp8gTNp2gR/2gOiwQ6QaO7Td0zV76UFJVhqLl4Vl3KL1We6q6wR9"
    crossorigin="anonymous"></script>
<link rel="stylesheet" href="{{asset('css/main.css')}}">
<link href="{{asset('css/tailwind.css')}}" rel="stylesheet">
</head>

<body>
    <div class="body-font fixed top-0 z-50 w-full bg-black text-white">
        <div class="flex flex-col flex-wrap items-center p-5 px-16 md:flex-row">
            <a class="title-font mb-4 flex items-center text-2xl font-bold uppercase md:mb-0" style="color: #e50914">
                BuggyFlix
            </a>
            <ul class="ml-12 hidden w-1/2 flex-row space-x-3 text-sm lg:flex">
                <a class="" href="{{ route('buggyflix.index')}}">Home</a>
                <a class="" href="{{ route('buggyflix.person')}}">Acteur</a>
                <li>Films</li>
                <li>Latest</li>
                <li>My List</li>
                <li>Watch Again</li>
            </ul>
            </nav>
        </div>
    </div>
    @yield('contenu')
    <footer class="mx-auto max-w-screen-lg py-8 text-sm" style="color: #7c7c7c">
        <div class="my-4 ml-6 flex space-x-6" style="color: #808080">
        </div>

        <div class="flex justify-between">
            <div class="mx-6 space-y-3">
                <div>Audio and Subtitles</div>
                <div>Media centre</div>
                <div>Privacy</div>
                <div>Contact Us</div>
            </div>
            <div class="mx-6 space-y-3">
                <div>Audio Description</div>
                <div>Investor Relations</div>
                <div>Legal Notices</div>
            </div>
            <div class="mx-6 space-y-3">
                <div>Help Centre</div>
                <div>Jobs</div>
                <div>Cookie Preferences</div>
            </div>
            <div class="mx-6 space-y-3">
                <div>Gift Cards</div>
                <div>Terms of Use</div>
                <div>Corporate Information</div>
            </div>
        </div>
    </footer>
</body>

</html>