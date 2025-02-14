<footer class="bg-gradient-to-t from-purple-700 via-purple-600 to-purple-500 text-yellow-300 uppercase font-mono font-semibold border-t-4 border-yellow-300">
    <div class="w-full block md:flex items-center md:justify-around py-8 mx-auto ">
        <!-- FOOTER MENU -->
        <div class="w-full md:my-auto mb-4">
            <ul class="text-center text-base uppercase list-none">
                <li class="mx-1 my-1">
                    <a href="{{ route('home') }}" class="text-yellow-200 hover:text-yellow-300 @if (request()->routeIs('home')) text-yellow-300 @endif">{{ __('Home') }}</a>
                </li>
                <li class="mx-1 my-1">
                    <a href="{{ route('about') }}" class="text-yellow-200 hover:text-yellow-300 @if (request()->routeIs('about')) text-yellow-300 @endif">{{ __('About Us') }}</a>
                </li>
                <li class="mx-1 my-1">
                    <a href="{{ route('events') }}" class="text-yellow-200 hover:text-yellow-300 @if (request()->routeIs('events')) text-yellow-300 @endif">{{ __('Events') }}</a>
                </li>
                <li class="mx-1 my-1">
                    <a href="{{ route('gallery') }}" class="text-yellow-200 hover:text-yellow-300 @if (request()->routeIs('gallery')) text-yellow-300 @endif">{{ __('Gallery') }}</a>
                </li>
                <li class="mx-1 my-1">
                    <a href="{{ route('articles') }}" class="text-yellow-200 hover:text-yellow-300 @if (request()->routeIs('articles')) text-yellow-300 @endif">{{ __('Articles') }}</a>
                </li>
                <li class="mx-1 my-1">
                    <a href="{{ route('guestbook') }}" class="text-yellow-200 hover:text-yellow-300 @if (request()->routeIs('guestbook')) text-yellow-300 @endif">{{ __('Guestbook') }}</a>
                </li>
                <li class="mx-1 my-1">
                    <a href="{{ route('contact') }}" class="text-yellow-200 hover:text-yellow-300 @if (request()->routeIs('contact')) text-yellow-300 @endif">{{ __('Contact') }}</a>
                </li>
            </ul>
            <ul class="text-center text-base uppercase list-none hidden" id="backnav">
                @if (Route::has('login'))
                @auth
                <li class="mx-1 my-1">
                    <a href="{{ route('backoffice.index') }}" class="text-yellow-200 block hover:text-yellow-300">{{ __('Backoffice') }}</a>
                </li>
                @else
                <li class="mx-1 my-1">
                    <a href="{{ route('login') }}" class="text-yellow-200 block hover:text-yellow-300">{{ __('Log in') }}</a>
                </li>
                <!-- @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}" class="text-gray-700">{{ __('Register') }}</a>
                    </li>
                    @endif -->
                @endauth
                @endif
            </ul>
        </div>
        <!-- LOGO -->
        <div class="w-full flex justify-center align-center">
            <img class="rounded-full h-40" src="/images/FeriaLogoGeel.png" alt="logo">
        </div>
        <!-- SOCIAL MEDIA LINKS -->
        <div class="w-full flex flex-col align-center justify-center">
            <a href="https://www.facebook.com/FeriadArt" target="_blank" class="flex justify-center my-2">
                <span class="text-md text-yellow-300">{{ __('Check out our Facebook') }}</span>
                <svg width="24" height="24" stroke="" fill="#FFE202" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" class="mx-2" viewBox="0 0 24 24">
                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                </svg>
            </a>
            <a href="https://www.instagram.com/feriadart" target="_blank" class="flex justify-center my-2">
                <span class="text-md text-yellow-300 ">{{ __('Follow us on Instagram') }}</span>
                <svg width="24" height="24" stroke="" fill="#FFE202" stroke-linecap="round" stroke-linejoin="round" stroke-width="5" class="mx-2" viewBox="0 0 256 256">
                    <path d="M127.999746,23.06353 C162.177385,23.06353 166.225393,23.1936027 179.722476,23.8094161 C192.20235,24.3789926 198.979853,26.4642218 203.490736,28.2166477 C209.464938,30.5386501 213.729395,33.3128586 218.208268,37.7917319 C222.687141,42.2706052 225.46135,46.5350617 227.782844,52.5092638 C229.535778,57.0201472 231.621007,63.7976504 232.190584,76.277016 C232.806397,89.7746075 232.93647,93.8226147 232.93647,128.000254 C232.93647,162.177893 232.806397,166.225901 232.190584,179.722984 C231.621007,192.202858 229.535778,198.980361 227.782844,203.491244 C225.46135,209.465446 222.687141,213.729903 218.208268,218.208776 C213.729395,222.687649 209.464938,225.461858 203.490736,227.783352 C198.979853,229.536286 192.20235,231.621516 179.722476,232.191092 C166.227425,232.806905 162.179418,232.936978 127.999746,232.936978 C93.8200742,232.936978 89.772067,232.806905 76.277016,232.191092 C63.7971424,231.621516 57.0196391,229.536286 52.5092638,227.783352 C46.5345536,225.461858 42.2700971,222.687649 37.7912238,218.208776 C33.3123505,213.729903 30.538142,209.465446 28.2166477,203.491244 C26.4637138,198.980361 24.3784845,192.202858 23.808908,179.723492 C23.1930946,166.225901 23.0630219,162.177893 23.0630219,128.000254 C23.0630219,93.8226147 23.1930946,89.7746075 23.808908,76.2775241 C24.3784845,63.7976504 26.4637138,57.0201472 28.2166477,52.5092638 C30.538142,46.5350617 33.3123505,42.2706052 37.7912238,37.7917319 C42.2700971,33.3128586 46.5345536,30.5386501 52.5092638,28.2166477 C57.0196391,26.4642218 63.7971424,24.3789926 76.2765079,23.8094161 C89.7740994,23.1936027 93.8221066,23.06353 127.999746,23.06353 M127.999746,0 C93.2367791,0 88.8783247,0.147348072 75.2257637,0.770274749 C61.601148,1.39218523 52.2968794,3.55566141 44.1546281,6.72008828 C35.7374966,9.99121548 28.5992446,14.3679613 21.4833489,21.483857 C14.3674532,28.5997527 9.99070739,35.7380046 6.71958019,44.1551362 C3.55515331,52.2973875 1.39167714,61.6016561 0.769766653,75.2262718 C0.146839975,88.8783247 0,93.2372872 0,128.000254 C0,162.763221 0.146839975,167.122183 0.769766653,180.774236 C1.39167714,194.398852 3.55515331,203.703121 6.71958019,211.845372 C9.99070739,220.261995 14.3674532,227.400755 21.4833489,234.516651 C28.5992446,241.632547 35.7374966,246.009293 44.1546281,249.28042 C52.2968794,252.444847 61.601148,254.608323 75.2257637,255.230233 C88.8783247,255.85316 93.2367791,256 127.999746,256 C162.762713,256 167.121675,255.85316 180.773728,255.230233 C194.398344,254.608323 203.702613,252.444847 211.844864,249.28042 C220.261995,246.009293 227.400247,241.632547 234.516143,234.516651 C241.632039,227.400755 246.008785,220.262503 249.279912,211.845372 C252.444339,203.703121 254.607815,194.398852 255.229725,180.774236 C255.852652,167.122183 256,162.763221 256,128.000254 C256,93.2372872 255.852652,88.8783247 255.229725,75.2262718 C254.607815,61.6016561 252.444339,52.2973875 249.279912,44.1551362 C246.008785,35.7380046 241.632039,28.5997527 234.516143,21.483857 C227.400247,14.3679613 220.261995,9.99121548 211.844864,6.72008828 C203.702613,3.55566141 194.398344,1.39218523 180.773728,0.770274749 C167.121675,0.147348072 162.762713,0 127.999746,0 Z M127.999746,62.2703115 C91.698262,62.2703115 62.2698034,91.69877 62.2698034,128.000254 C62.2698034,164.301738 91.698262,193.730197 127.999746,193.730197 C164.30123,193.730197 193.729689,164.301738 193.729689,128.000254 C193.729689,91.69877 164.30123,62.2703115 127.999746,62.2703115 Z M127.999746,170.667175 C104.435741,170.667175 85.3328252,151.564259 85.3328252,128.000254 C85.3328252,104.436249 104.435741,85.3333333 127.999746,85.3333333 C151.563751,85.3333333 170.666667,104.436249 170.666667,128.000254 C170.666667,151.564259 151.563751,170.667175 127.999746,170.667175 Z M211.686338,59.6734287 C211.686338,68.1566129 204.809755,75.0337031 196.326571,75.0337031 C187.843387,75.0337031 180.966297,68.1566129 180.966297,59.6734287 C180.966297,51.1902445 187.843387,44.3136624 196.326571,44.3136624 C204.809755,44.3136624 211.686338,51.1902445 211.686338,59.6734287 Z"></path>
                </svg>
            </a>
        </div>
    </div>
    <!-- FOOTER COPYRIGHT AND EXTRA INFO -->
    <div class="bg-gradient-to-b from-yellow-100 to-white flex border-t-4 border-yellow-300 items-center justify-center p-4">
        <!-- SECRET BACKOFFICE ICON -->
        <div class="px-auto my-auto">
            <svg id="secret" width="20.000000pt" height="20.000000pt" viewBox="0 0 30.000000 30.000000" preserveAspectRatio="xMidYMid meet">
                <g transform="translate(0.000000,30.000000) scale(0.100000,-0.100000)" fill="#6838FE" stroke="none">
                    <path d="M55 270 c-8 -12 23 -65 33 -56 3 4 0 12 -6 18 -7 7 -12 16 -12 22 0
                    5 7 1 15 -10 8 -10 15 -14 15 -8 0 18 -37 47 -45 34z" />
                    <path d="M125 246 c-15 -14 -24 -30 -20 -36 4 -7 -2 -14 -14 -17 -12 -3 -21
                    -12 -21 -19 0 -17 -11 -20 100 20 52 18 96 39 98 46 3 9 -3 11 -19 7 -14 -3
                    -32 0 -43 9 -28 20 -51 17 -81 -10z" />
                    <path d="M165 176 c-75 -26 -85 -33 -85 -54 0 -9 -9 -28 -20 -42 -36 -46 -29
                    -50 85 -50 88 0 105 2 105 15 0 9 -13 24 -30 33 -36 21 -37 24 -5 56 25 25 32
                    51 18 59 -5 2 -35 -5 -68 -17z m5 -51 c-10 -12 -10 -21 -2 -40 11 -25 11 -25
                    -34 -25 -40 0 -45 2 -39 18 4 9 9 24 12 33 3 9 19 21 36 26 38 12 44 9 27 -12z" />
                </g>
            </svg>
        </div>
        <!-- ASBL Info -->
        <div class="ml-2">
            <p class="text-center text-purple-700 mx-auto">Feria d'Art ASBL - TVA N° BE 0753.565.581 - Rue Washington 208, 1050 Bruxelles &copy; 2021</p>
        </div>
    </div>
</footer>

<script>
    const secretButton = document.querySelector('#secret');
    const backNav = document.querySelector('#backnav');

    function toggleSVG() {
        backNav.classList.toggle('hidden');
        backNav.classList.toggle('visible');
    }
    secretButton.addEventListener('click', toggleSVG);
</script>