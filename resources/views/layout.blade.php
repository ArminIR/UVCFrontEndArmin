<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>home</title>
</head>

<body background="/image/grijzeachtergrond.jpg" id="achtergrondHome">
<div class="sidenav">
    <ul>
        <li><a href="/" class="{{ Request::path() === '/' ? 'active' : ''}}">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024">
                        <path fill="currentColor"
                              d="M946.5 505L560.1 118.8l-25.9-25.9a31.5 31.5 0 0 0-44.4 0L77.5 505a63.9 63.9 0 0 0-18.8 46c.4 35.2 29.7 63.3 64.9 63.3h42.5V940h691.8V614.3h43.4c17.1 0 33.2-6.7 45.3-18.8a63.6 63.6 0 0 0 18.7-45.3c0-17-6.7-33.1-18.8-45.2zM568 868H456V664h112v204zm217.9-325.7V868H632V640c0-22.1-17.9-40-40-40H432c-22.1 0-40 17.9-40 40v228H238.1V542.3h-96l370-369.7l23.1 23.1L882 542.3h-96.1z" />
                    </svg>
                    <div class="tool">home</div>
            </a></li>
        <li><a href="/profile" class="{{ Request::path() === 'profile' ? 'active' : ''}}">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                            <path d="M12 2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2Z" />
                            <path d="M4.271 18.346S6.5 15.5 12 15.5s7.73 2.846 7.73 2.846M12 12a3 3 0 1 0 0-6a3 3 0 0 0 0 6Z" />
                        </g>
                    </svg>
                    <div class="tool">profile</div>
            </a></li>
        <li><a href="/dashboard" class="{{ Request::path() === 'dashboard' ? 'active' : ''}}">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <rect width="8" height="20" x="2" y="2" rx="2" />
                            <rect width="8" height="8" x="14" y="2" rx="2" />
                            <rect width="8" height="8" x="14" y="14" rx="2" />
                        </g>
                    </svg>
                    <div class="tool">dashboard</div>
            </a></li>
        <li><a href="{{route('faqs.index')}}" class="{{ Request::path() === 'faqs' ? 'active' : ''}}">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 26 26">
                        <path fill="currentColor"
                              d="M13 0c-1.7 0-3 1.3-3 3v6c0 1.7 1.3 3 3 3h6l4 4v-4c1.7 0 3-1.3 3-3V3c0-1.7-1.3-3-3-3H13zm4.188 3h1.718l1.688 6h-1.5l-.407-1.5h-1.5L16.813 9H15.5l1.688-6zM18 4c-.1.4-.212.888-.313 1.188l-.28 1.312h1.187l-.282-1.313C18.113 4.888 18 4.4 18 4zM3 10c-1.7 0-3 1.3-3 3v6c0 1.7 1.3 3 3 3v4l4-4h6c1.7 0 3-1.3 3-3v-6h-3c-1.9 0-3.406-1.3-3.906-3H3zm4.594 2.906c1.7 0 2.5 1.4 2.5 3c0 1.4-.481 2.288-1.281 2.688c.4.2.874.306 1.374.406l-.374 1c-.7-.2-1.426-.512-2.126-.813c-.1-.1-.275-.093-.375-.093C6.112 18.994 5 18 5 16c0-1.7.994-3.094 2.594-3.094zm0 1.094c-.8 0-1.188.9-1.188 2c0 1.2.388 2 1.188 2c.8 0 1.218-.9 1.218-2s-.418-2-1.218-2z" />
                    </svg>
                    <div class="tool">FAQ</div>
            </a></li>
        <li><a href="{{route('blogs.index')}}" class="{{ Request::path() === 'blogs' ? 'active' : ''}}">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20">
                        <path fill="currentColor"
                              d="m16.89 1.2l1.41 1.41c.39.39.39 1.02 0 1.41L14 8.33V18H3V3h10.67l1.8-1.8c.4-.39 1.03-.4 1.42 0zm-5.66 8.48l5.37-5.36l-1.42-1.42l-5.36 5.37l-.71 2.12z" />
                    </svg>
                    <div class="tool">blog</div>
            </a></li>
        <li><a
                href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/NL/5.-Onderwijs-examenregelingen/Onderwijs-en-examenregeling/OER-HZ-Bacheloropleiding-voltijd-2022-2023-DEF-13-juni.pdf">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor"
                              d="M24 30H8a2.002 2.002 0 0 1-2-2V4a2.002 2.002 0 0 1 2-2h16a2.002 2.002 0 0 1 2 2v16.618l-5-2.5l-5 2.5V4H8v24h16v-4h2v4a2.003 2.003 0 0 1-2 2Zm-3-14.118l3 1.5V4h-6v13.382Z" />
                    </svg>
                    <div class="tool">CER</div>
            </a></li>
        <li><a
                href="https://hz.nl/uploads/documents/1.4-Over-de-HZ/1.4.3.-Regelingen-en-documenten/OERS/2022-2023/IR-CER-HZ-B-HBO-ICT-full-time-2022-2023-DEF.pdf">
                <div class="tooltip">IR<div class="tool">IR</div>
            </a></li>
        <li><a href="https://learn.hz.nl/my/">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M21 10a16.84 16.84 0 0 0-9 3.244A16.84 16.84 0 0 0 3 10v2.96a2.004 2.004 0 0 0-2 2.007v1.004c0 1.109 2 2.208 2 2.208v2.007a14.868 14.868 0 0 1 7.417 2.55A15.09 15.09 0 0 1 12 24a15.09 15.09 0 0 1 1.583-1.264A14.868 14.868 0 0 1 21 20.186v-2.208a2.004 2.004 0 0 0 2-2.007v-1.004a2.004 2.004 0 0 0-2-2.007Zm-9 11.422a16.841 16.841 0 0 0-7-2.996v-6.15a14.8 14.8 0 0 1 5.417 2.282A15.09 15.09 0 0 1 12 15.822a15.09 15.09 0 0 1 1.583-1.264A14.8 14.8 0 0 1 19 12.275v6.151a16.841 16.841 0 0 0-7 2.996ZM11 8h2v1h-2zm0-4h2v1h-2z" />
                        <path fill="currentColor"
                              d="M11 10h2v1h-2zM9 5a1 1 0 0 0 1-1a.983.983 0 0 0-.99-.99A.995.995 0 1 0 9 5Z" />
                        <circle cx="15" cy="4" r="1" fill="currentColor" />
                        <path fill="currentColor"
                              d="M16 8H8a3.003 3.003 0 0 1-3-3V3a3.003 3.003 0 0 1 3-3h8a3.003 3.003 0 0 1 3 3v2a3.003 3.003 0 0 1-3 3ZM8 2a1.001 1.001 0 0 0-1 1v2a1.001 1.001 0 0 0 1 1h8a1.001 1.001 0 0 0 1-1V3a1.001 1.001 0 0 0-1-1Z" />
                    </svg>
                    <div class="tool">HZ learn</div>
            </a></li>
        <li><a
                href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256">
                        <path fill="currentColor"
                              d="M74 112a8 8 0 0 1 0-16h36a8 8 0 0 1 0 16h-10v40a8 8 0 0 1-16 0v-40Zm158-19.3V152a40 40 0 0 1-36.6 39.8a64 64 0 0 1-118.7.2H40a16 16 0 0 1-16-16V80a16 16 0 0 1 16-16h56.8a42.6 42.6 0 0 1-.8-8a40 40 0 0 1 72.6-23.2A34 34 0 0 1 220 62a33.5 33.5 0 0 1-5.2 18h4.5A12.7 12.7 0 0 1 232 92.7Zm-56.9-45a37.7 37.7 0 0 1 .9 8.3a39.2 39.2 0 0 1-4 17.3A18 18 0 1 0 186 44a17.7 17.7 0 0 0-10.9 3.7ZM113.4 64H144a15.9 15.9 0 0 1 11.9 5.4A24.3 24.3 0 0 0 160 56a24 24 0 0 0-48 0a24.5 24.5 0 0 0 1.4 8ZM40 176h104V80H40Zm144-8V96h-24v80a16 16 0 0 1-16 16H94.4a48.5 48.5 0 0 0 41.6 24a48 48 0 0 0 48-48Zm32-72h-16v72a49.2 49.2 0 0 1-.4 6.7A24 24 0 0 0 216 152Z" />
                    </svg>
                    <div class="tool">Teams</div>
            </a></li>
        <li><a href="https://learn.hz.nl/course/view.php?id=21135#section-1">
                <div class="tooltip"><img src="./image/Screenshot 2022-09-12 120355.jpg">
                    <div class="tool">MyHZ</div>
            </a></li>
        <li><a href="https://github.com/HZ-HBO-ICT">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48">
                        <g fill-rule="evenodd" clip-rule="evenodd">
                            <path
                                d="M24 4C12.9543 4 4 12.9543 4 24C4 35.0457 12.9543 44 24 44C35.0457 44 44 35.0457 44 24C44 12.9543 35.0457 4 24 4ZM0 24C0 10.7452 10.7452 0 24 0C37.2548 0 48 10.7452 48 24C48 37.2548 37.2548 48 24 48C10.7452 48 0 37.2548 0 24Z" />
                            <path
                                d="M19.1833 45.4716C18.9898 45.2219 18.9898 42.9973 19.1833 38.798C17.1114 38.8696 15.8024 38.7258 15.2563 38.3667C14.437 37.828 13.6169 36.1667 12.8891 34.9959C12.1614 33.8251 10.5463 33.64 9.89405 33.3783C9.24182 33.1165 9.07809 32.0496 11.6913 32.8565C14.3044 33.6634 14.4319 35.8607 15.2563 36.3745C16.0806 36.8883 18.0515 36.6635 18.9448 36.2519C19.8382 35.8403 19.7724 34.3078 19.9317 33.7007C20.1331 33.134 19.4233 33.0083 19.4077 33.0037C18.5355 33.0037 13.9539 32.0073 12.6955 27.5706C11.437 23.134 13.0581 20.2341 13.9229 18.9875C14.4995 18.1564 14.4485 16.3852 13.7699 13.6737C16.2335 13.3589 18.1347 14.1343 19.4734 16.0001C19.4747 16.0108 21.2285 14.9572 24.0003 14.9572C26.772 14.9572 27.7553 15.8154 28.5142 16.0001C29.2731 16.1848 29.88 12.7341 34.5668 13.6737C33.5883 15.5969 32.7689 18.0001 33.3943 18.9875C34.0198 19.9749 36.4745 23.1147 34.9666 27.5706C33.9614 30.5413 31.9853 32.3523 29.0384 33.0037C28.7005 33.1115 28.5315 33.2855 28.5315 33.5255C28.5315 33.8856 28.9884 33.9249 29.6465 35.6117C30.0853 36.7362 30.117 39.948 29.7416 45.247C28.7906 45.4891 28.0508 45.6516 27.5221 45.7347C26.5847 45.882 25.5669 45.9646 24.5669 45.9965C23.5669 46.0284 23.2196 46.0248 21.837 45.8961C20.9154 45.8103 20.0308 45.6688 19.1833 45.4716Z" />
                        </g>
                    </svg>
                    <div class="tool">Github</div>
            </a></li>
        <li><a href="https://twitter.com/ArminIR_">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-dasharray="62" stroke-dashoffset="62"
                              stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M19.8906 7.34375C19.7969 7.67188 19.4001 8.50548 18.7219 9.29669C18.2698 17.9717 9.84907 20.7974 4.08456 17.8869C3.29335 16.8414 6.93856 17.2653 8.26666 15.259C3.23684 12.6876 3.63244 5.82103 4.64971 6.1036C7.02333 9.29669 10.8381 9.57926 11.4597 9.29669C11.4597 8.562 11.1489 6.97958 12.8726 5.65148C13.8616 4.94505 15.9297 4.3125 17.8047 6.34375C18.125 6.55469 18.5859 6.64844 19.2734 6.49219C19.6797 6.28125 20.2262 6.427 19.9453 7.15625">
                            <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="62;0" />
                        </path>
                    </svg>
                    <div class="tool">Twitter</div>
            </a></li>
        <li><a href="https://www.instagram.com/arminelshout_/">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path stroke-dasharray="66" stroke-dashoffset="66"
                                  d="M12 3H8C5.23858 3 3 5.23858 3 8V16C3 18.7614 5.23858 21 8 21H16C18.7614 21 21 18.7614 21 16V8C21 5.23858 18.7614 3 16 3z">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="66;132" />
                            </path>
                            <path stroke-dasharray="26" stroke-dashoffset="26"
                                  d="M12 8C14.20914 8 16 9.79086 16 12C16 14.20914 14.20914 16 12 16C9.79086 16 8 14.2091 8 12C8 9.79086 9.79086 8 12 8">
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.4s" values="26;0" />
                            </path>
                        </g>
                        <circle cx="17" cy="7" r="1.5" fill="currentColor" fill-opacity="0">
                            <animate fill="freeze" attributeName="fill-opacity" begin="1.1s" dur="0.4s" values="0;1" />
                        </circle>
                    </svg>
                    <div class="tool">Instagram</div>
            </a></li>
        <li><a href="https://discordapp.com/users/Armin#2385/">
                <div class="tooltip"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em"
                                          preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
                        <g fill="currentColor" fill-opacity="0">
                            <circle cx="9" cy="12" r="1.5">
                                <animate fill="freeze" attributeName="fill-opacity" begin="1.2s" dur="0.4s" values="0;1" />
                            </circle>
                            <circle cx="15" cy="12" r="1.5">
                                <animate fill="freeze" attributeName="fill-opacity" begin="1.4s" dur="0.4s" values="0;1" />
                            </circle>
                        </g>
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                            <path stroke-dasharray="30" stroke-dashoffset="30"
                                  d="M15.5 17.5L16.5 19.5C16.5 19.5 20.671 18.172 22 16C22 15 22.53 7.853 19 5.5C17.5 4.5 15 4 15 4L14 6H12M8.52799 17.5L7.52799 19.5C7.52799 19.5 3.35699 18.172 2.02799 16C2.02799 15 1.49799 7.853 5.02799 5.5C6.52799 4.5 9.02799 4 9.02799 4L10.028 6H12.028">
                                <animate fill="freeze" attributeName="stroke-dashoffset" dur="0.6s" values="30;60" />
                            </path>
                            <path stroke-dasharray="16" stroke-dashoffset="16" d="M5.5 16C10.5 18.5 13.5 18.5 18.5 16">
                                <animate fill="freeze" attributeName="stroke-dashoffset" begin="0.7s" dur="0.4s" values="16;0" />
                            </path>
                        </g>
                    </svg>
                    <div class="tool">Discord</div>
            </a></li>
    </ul>
</div>
@yield ('content')
<link rel="stylesheet" href="/css/styling.css">
<link rel="stylesheet" href="/css/svg.css">
<link rel="stylesheet" href="/css/kleur.css">
</body>

</html>
