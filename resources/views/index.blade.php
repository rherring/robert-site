<x-layout>
    <x-slot name="title">Welcome to {{ config('app.name')  }}</x-slot>

    <x-slot name="main">
        <!-- We need to include our modal using livewire, or our html markup will not be loaded -->
        @livewire('livewire-ui-modal')

        <x-nav />
        <div class="max-w-screen-lg mx-auto mb-6 lg:my-6 shadow">
            <div class="lg:grid grid-cols-3 text-gray-50 relative">
                <nav class="inside absolute transform -rotate-90 top-28 hidden lg:flex">
                    <div class="bg-gray-200 hover:bg-gray-400 border-r border-gray-100 ease-in-out transition-all duration-150"><a href="/download-resume" target="_blank" class="block"><span class="px-4 text-xl py-2 block text-gray-400 hover:text-gray-200 transition-all ease-in-out duration-300">resume</span></a></div>
                    <div class="bg-gray-200 hover:bg-gray-400 border-l border-gray-300 cursor-pointer ease-in-out transition-all duration-150" onclick="Livewire.emit('openModal', 'contact')"><span class="px-4 text-xl py-2 block text-gray-400 hover:text-gray-200 transition-all ease-in-out duration-300" style="font-family:exolight;">contact</span></div>
                </nav>
                <div class="col-span-2 bg-black bg-opacity-20 p-6 lg:p-12">
                    <div class="lg:hidden aspect-w-1 aspect-h-1 rounded-full">
                        <div class="self w-full rounded-full" style="background: url('{{ asset('/img/pixelrubble.jpg') }}') center center no-repeat; background-size: cover;"></div>
                    </div>
                    <div class="pt-6 lg:pt-0">
                        <h1 class="text-blue-400">Robert Herring</h1>
                        <h2 class="text-blue-400">Software Engineer</h2>
                        <p class="text-gray-400">My name is Robert Herring. I first used a computer in 1988, but I truly got serious about them when my dad brought home our first one in 1997. In September of ’97 I built my first of many fantastic websites. From there, I got into design. It was the marriage of design and code where I found my calling. The ability to code was fun, but making my projects look great and stand out in the crowd is the most rewarding.</p>
                        <div class="job">
                            <div class="header flex gap-2 items-center mb-3">
                                <span class="fa-stack fa-sm flex-none">
                                    <i class="fas fa-circle fa-stack-2x text-blue-400"></i>
                                    <i class="fa fa-user fa-stack-1x fa-inverse"></i>
                                </span><h3 class="text-blue-400">Job Experience</h3>
                                <hr class="flex-grow" />
                            </div>
                            <div class="experience">
                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Software Engineer:</h3><h4 class="flex-grow"><span class="uppercase">LoudDoor</span> in <span>Columbia</span>, 2021 - 2022</h4></div>
                                <p class="text-gray-400">As a software engineer, I helped developer several websites used to generate buzz around and to sell NFT's online. I was responsible for the front-end development, look, feel, and user experience, as well as setting up the database to capture the users information and movements on the sites. I also helped maintain several websites they used for other businesses they managed. The majority of the websites were Laravel or Vite sites, with one being a Shopify E-Commerce site.</p>

                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Full Stack Developer:</h3><h4 class="flex-grow"><span class="uppercase">Disciple Christian MC</span>, 2009 - 2021</h4></div>
                                <p class="text-gray-400">In 2009, I designed, developed, and maintained Disciple's first website. As a co-founder, I helped create the look and feel of the non-profit both online and in real life. I helped develop products and apparel to be sold both online and at in-person events. In October of 2016, I started designing and developing their current e-commerce platform that I launched on January 1, 2017. In March of 2021, I designed and developed a completely new (anti)social media platform from scratch using Laravel, Vue JS, Node, and CSS3 for the Christian organization so they can have a secure location online for communication. Since 2009, I've also helped with video and motion graphics production.</p>

                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Full Stack Designer:</h3><h4 class="flex-grow"><span class="uppercase">Diesel Laptops</span> in <span class="uppercase">Irmo</span>, 2018 - 2021</h4></div>
                                <p class="text-gray-400">Aided in the design and development of each of the three corporate websites, product packaging, conference booths, materials for conferences and sales reps, and produced and edited corporate videos.</p>

                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Marketing Specialist:</h3><h4 class="flex-grow"><span class="uppercase">IMCS</span> in <span class="uppercase">Irmo</span>, 2017 - 2018</h4></div>
                                <p class="text-gray-400">IMCS stnad for Integrated Micro-Chromatography Systems. Here, I maintained the corporate website, produced and edited corporate videos including a 360 video for VR, designed product packaging, conference booths, and print material for both conferences and sales reps.</p>

                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Lead Web Developer in Marketing:</h3><h4 class="flex-grow"><span class="uppercase">GIS</span> in <span class="uppercase">Chapin</span>, 2014 - 2017</h4></div>
                                <p class="text-gray-400">Designed and developed GIS‘s entire responsive website from the ground up. Worked with high-profile clients designing the interface for their onboarding portals and Filmed and produced several in-house videos.</p>

                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Lead Developer:</h3><h4 class="flex-grow"><span class="uppercase">The Para Firm</span> in <span class="uppercase">Columbia</span>, 2012 - 2013</h4></div>
                                <p class="text-gray-400">Developed high-end websites that include E-Commerce and Parallax style websites and developed an in-house iPad app using xCode to sell TPF‘s marketing solution.</p>

                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Freelance Web Dev / design:</h3><h4 class="flex-grow"><span class="uppercase">Lexington</span>, 2011 - 2012</h4></div>
                                <p class="text-gray-400">Developed interactive Flash websites, Website Mockups and Wireframes, Marketing Campaigns, Print Ads, Web Banners, and Motion Graphics.</p>

                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Art Director:</h3><h4 class="flex-grow"><span class="uppercase">Splash Omnimedia</span> in <span class="uppercase">Lexington</span>, 2008 - 2011</h4></div>
                                <p class="text-gray-400">Developed cutting-edge, standards-compliant websites, worked in print design, web design, email campaigns, trade show booth design, and branding. I created wireframes, mock-ups, prototypes, front-end code, and back-end code.</p>
                            </div>
                        </div>

                        <div class="education">
                            <div class="header flex gap-2 items-center mb-3">
                                <span class="fa-stack fa-sm">
                                    <i class="fas fa-circle fa-stack-2x text-blue-400"></i>
                                    <i class="fa fa-lightbulb-o fa-stack-1x fa-inverse"></i>
                                </span><h3 class="text-blue-400">Educations</h3>
                                <hr class="flex-grow" />
                            </div>
                            <div class="schools">
                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Full Sail University:</h3><h4 class="flex-grow"><span>Bachelor</span> of <span>Science</span> in <span>Digital Arts &amp; Design</span> in 2008</h4></div>
                                <p class="text-gray-400">The <span class="text-gray-300">Digital Arts &amp; Design</span> degree provided a complete design education, with industry-specific courses that teaches you how to communicate ideas and stories through different media, including <span class="text-gray-300">video</span>, <span class="text-gray-300">print</span>, <span class="text-gray-300">motion graphics</span>, and the <span class="text-gray-300">web</span>.</p>

                                <div class="header lg:flex gap-2 items-center"><h3 class="flex-none">Midlands Technical College:</h3><h4 class="flex-grow"><span>Associates</span> of <span>Arts</span> in 2003</h4></div>
                                <p class="text-gray-400">Developed high end websites that includes E-Commerce and Parallax websites, and developed an in-house iPad app, in xCode, used to sell TPF‘s marketing solution.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="bg-black bg-opacity-40 p-6 lg:p-12">
                    <div class="hidden lg:block aspect-w-1 aspect-h-1 rounded-full">
                        <div class="self w-full rounded-full" style="background: url('{{ asset('/img/pixelrubble-reverse.jpg') }}') center center no-repeat; background-size: cover;"></div>
                    </div>
                    <div class="sideInfo lg:pt-6 pb-4">
                        <div class="sideBarIcons">
                            <div class="flex gap-2"><span class="fa-stack fa-sm flex-none"><i class="fas fa-circle fa-stack-2x text-blue-400"></i><i class="fa fa-map-marker fa-stack-1x fa-inverse"></i></span><p class="flex-grow cursor-default text-white">Lexington, SC</p></div>
                            <div class="flex gap-2"><span class="fa-stack fa-sm flex-none"><i class="fas fa-circle fa-stack-2x text-blue-400"></i><i class="fa fa-mobile-phone fa-stack-1x fa-inverse"></i></span><p class="flex-grow cursor-default text-white">803.553.2043</p></div>
                            <div class="flex gap-2"><span class="fa-stack fa-sm flex-none"><i class="fas fa-circle fa-stack-2x text-blue-400"></i><i class="fa fa-envelope-o fa-stack-1x fa-inverse"></i></span><p class="flex-grow cursor-pointer cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150" onclick="Livewire.emit('openModal', 'contact')">info@robert-herring.com</p></div>
                            <div class="flex gap-2"><span class="fa-stack fa-sm flex-none"><i class="fas fa-circle fa-stack-2x text-blue-400"></i><i class="fa fa-laptop fa-stack-1x fa-inverse"></i></span><p class="flex-grow cursor-default text-white">www.robert-herring.com</p></div>
                            <div class="flex gap-2"><span class="fa-stack fa-sm flex-none"><i class="fas fa-circle fa-stack-2x text-blue-400"></i><i class="fab fa-youtube fa-stack-1x fa-inverse"></i></span><p class="flex-grow cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150" onclick="Livewire.emit('openModal', 'videos')">Video Work</p></div>
                            <!-- <div class="flex gap-2"><span class="fa-stack fa-sm flex-none"><i class="fas fa-circle fa-stack-2x text-blue-400"></i><i class="fa fa-twitter fa-stack-1x fa-inverse"></i></span><p class="flex-grow"><a href="https://twitter.com/FiSHGRAPHICS" target="_blank">@fishgraphics</a></p></div> -->
                            <div class="flex gap-2"><span class="fa-stack fa-sm flex-none"><i class="fas fa-circle fa-stack-2x text-blue-400"></i><i class="fa fa-instagram fa-stack-1x fa-inverse"></i></span><p class="flex-grow cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150" onclick="Livewire.emit('openModal', 'instagram')">FromTheRubble</p></div>
                            <div class="flex gap-2"><span class="fa-stack fa-sm flex-none"><i class="fas fa-circle fa-stack-2x text-blue-400"></i><i class="fab fa-github fa-stack-1x fa-inverse"></i></span><p class="flex-grow"><a href="https://github.com/rherring/robert-site#readme" target="_blank">This Laravel Build</a></p></div>
                        </div>
                    </div>
                    <div class="sideSkills">
                        <div class="flex gap-2 items-center pb-2">
                            <h3 class="text-blue-400">Skills</h3>
                            <hr class="flex-grow" />
                        </div>
                        <h4>Professional Skills</h4>
                        <p class="text-gray-400">Adobe Creative Cloud</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-11/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">HTML5/CSS3</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-11/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">PHP</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-11/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">Laravel Framework</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-10/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">Vue JS</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-9/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">Javascript/jQuery</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-11/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">Tailwind</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-11/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">Bootstrap</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-10/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">NodeJS</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-8/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">Angular JS</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-7/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <br />
                        <h4>Personal Skills</h4>
                        <p class="text-gray-400">Communication</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-9/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">Teamwork</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-9/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">Creativity</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-11/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                        <p class="text-gray-400">Managment</p>
                        <div class="flex items-center w-full -mt-4 mb-4">
                            <div class="skillLevel bg-blue-400 h-4 w-8/12"></div>
                            <div class="skillBar bg-gray-50 h-4 flex-grow"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="">
                    <div class="work lg:grid grid-cols-3 text-gray-50">
                        <div class="thePortfolio col-span-2 bg-black bg-opacity-20 px-6 lg:px-12 py-4 lg:py-0">
                            <div class="header flex gap-2 items-center mb-3">
                                <span class="fa-stack fa-sm">
                                    <i class="fas fa-circle fa-stack-2x text-blue-400"></i>
                                    <i class="fa fa-desktop fa-stack-1x fa-inverse"></i>
                                </span><h3 class="text-blue-400">Portfolio</h3>
                                <hr class="flex-grow" />
                            </div>
                        </div>
                        <div class="bg-black bg-opacity-40 px-12 hidden lg:block">
                            <div class="thePortfolio col-span-2">
                                <div class="header flex items-center mb-3">
                                    <h3>&nbsp;</h3>
                                    <hr class="flex-grow" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="divide-y-2 divide-gray-500">
                        <div class="work lg:grid grid-cols-3 text-gray-50" url="https://barefootparrots.com/">
                            <div class="col-span-2 bg-black bg-opacity-20 px-6 lg:px-12 py-6">
                                <div class="aspect-w-16 aspect-h-8"><a href="https://barefootparrots.com/" alt="Barefoot Parrots" target="_blank" class="w-full h-full block p-6" style="background: url('{{ asset('img/bp.png') }}') center center no-repeat; background-size: cover;"></a></div>
                            </div>
                            <div class="workInfo bg-black bg-opacity-20 lg:bg-opacity-40 px-6 lg:px-12 py-4">
                                <h5 class="text-blue-400">Barefoot Parrots</h5>
                                <h6>NFT, Crypto, Festival [2022]</h6>
                                <p class="text-gray-400">Barefoot Parrots is an NFT and Crypto funded festival that will be held every year.</p>
                                <p class="text-gray-400">I developed this site using the latest methods in Laravel, Vue, Tailwind, and PHP.</p>
                                <button class="text-gray-400 bg-blue-400 hover:bg-blue-500 w-full transition-all ease-in-out duration-300"><a href="https://www.diesellaptops.com/" alt="Diesel Laptops" target="_blank" class="block hover:text-white">View Site</a></button>
                            </div>
                        </div>

                        <div class="work lg:grid grid-cols-3 text-gray-50" url="https://www.diesellaptops.com/">
                            <div class="col-span-2 bg-black bg-opacity-20 px-6 lg:px-12 py-6">
                                <div class="aspect-w-16 aspect-h-8"><a href="https://www.diesellaptops.com/" alt="Diesel Laptops" target="_blank" class="w-full h-full block p-6" style="background: url('{{ asset('img/dl.png') }}') center center no-repeat; background-size: cover;"></a></div>
                            </div>
                            <div class="workInfo bg-black bg-opacity-20 lg:bg-opacity-40 px-6 lg:px-12 py-4">
                                <h5 class="text-blue-400">Diesel Laptops</h5>
                                <h6>E-Commerce Platform [2019]</h6>
                                <p class="text-gray-400">Diesel Laptops provides diagnostic equipment for the truck, construction, automotive, ag, and off-highway markets.</p>
                                <p class="text-gray-400">I helped design and develop this entire site using the latest methods in jQuery, HTML5, CSS3, PHP, and LIQUID for Shopify.</p>
                                <button class="text-gray-400 bg-blue-400 hover:bg-blue-500 w-full transition-all ease-in-out duration-300"><a href="https://www.diesellaptops.com/" alt="Diesel Laptops" target="_blank" class="block hover:text-white">View Site</a></button>
                            </div>
                        </div>

                        <div class="work lg:grid grid-cols-3 text-gray-50" url="https://training.diesellaptops.com/">
                            <div class="col-span-2 bg-black bg-opacity-40 lg:bg-opacity-20 px-6 lg:px-12 py-6 justify-items-center">
                                <div class="aspect-w-16 aspect-h-8"><a href="https://training.diesellaptops.com/" alt="Diesel Laptops" target="_blank" class="w-full h-full block p-6" style="background: url('{{ asset('img/dlt.png') }}') center center no-repeat; background-size: cover;"></a></div>
                            </div>
                            <div class="workInfo bg-black bg-opacity-40 px-6 lg:px-12 py-4">
                                <h5 class="text-blue-400">Diesel Laptops Training</h5>
                                <h6>E-Commerce Platform [2019]</h6>
                                <p class="text-gray-400">Diesel Laptops makes it their mission to provide high quality technician training for the diesel repair industries!</p>
                                <p class="text-gray-400">I helped design and develop this entire site using the latest methods in jQuery, HTML5, CSS3, PHP, and LIQUID for Shopify.</p>
                                <button class="text-gray-400 bg-blue-400 hover:bg-blue-500 w-full transition-all ease-in-out duration-300"><a href="https://training.diesellaptops.com/" alt="Diesel Laptops Training" target="_blank" class="block hover:text-white">View Site</a></button>
                            </div>
                        </div>

                        <div class="work lg:grid grid-cols-3 text-gray-50" url="https://marinediagnostictools.com/">
                            <div class="col-span-2 bg-black bg-opacity-20 px-6 lg:px-12 py-6">
                                <div class="aspect-w-16 aspect-h-8"><a href="https://marinediagnostictools.com/" alt="Diesel Laptops" target="_blank" class="w-full h-full block p-6" style="background: url('{{ asset('img/mdt.png') }}') center center no-repeat; background-size: cover;"></a></div>
                            </div>
                            <div class="workInfo bg-black bg-opacity-20 lg:bg-opacity-40 px-6 lg:px-12 py-4">
                                <h5 class="text-blue-400">Marine Diagnostic Tools</h5>
                                <h6>E-Commerce Platform [2019]</h6>
                                <p class="text-gray-400">Everything Diesel Laptops offers on land, Marine Diagnostic Tools will offer on water.</p>
                                <p class="text-gray-400">I helped design and develop this entire site using the latest methods in jQuery, HTML5, CSS3, PHP, and LIQUID for Shopify.</p>
                                <button class="text-gray-400 bg-blue-400 hover:bg-blue-500 w-full transition-all ease-in-out duration-300"><a href="https://marinediagnostictools.com/" alt="Marine Diagnostic Tools" target="_blank" class="block hover:text-white">View Site</a></button>
                            </div>
                        </div>

                        <div class="work lg:grid grid-cols-3 text-gray-50" url="http://www.disciplechristianmc.com/">
                            <div class="col-span-2 bg-black bg-opacity-40 lg:bg-opacity-20 px-6 lg:px-12 py-6">
                                <div class="aspect-w-16 aspect-h-8"><a href="http://www.disciplechristianmc.com/" alt="Diesel Laptops" target="_blank" class="w-full h-full block p-6" style="background: url('{{ asset('img/dcmc.png') }}') center center no-repeat; background-size: cover;"></a></div>
                            </div>
                            <div class="workInfo bg-black bg-opacity-40 px-6 lg:px-12 py-4">
                                <h5 class="text-blue-400">Disciple Christian MC</h5>
                                <h6>E-Commerce Platform [2017]</h6>
                                <p class="text-gray-400">Disciple Christian MC is the fastest growing, and largest christian motorcycle club globaly.</p>
                                <p class="text-gray-400">I completely designed and developed this entire site in just under a three months using the latest methods in jQuery, HTML5, CSS3, and Shopify as an ecommerce backbone.</p>
                                <button class="text-gray-400 bg-blue-400 hover:bg-blue-500 w-full transition-all ease-in-out duration-300"><a href="http://www.disciplechristianmc.com/" alt="Disciple Christian MC" target="_blank" class="block hover:text-white">View Site</a></button>
                            </div>
                        </div>

                        <div class="work lg:grid grid-cols-3 text-gray-50" url="#">
                            <div class="col-span-2 bg-black bg-opacity-20 px-6 lg:px-12 py-6">
                                <div class="aspect-w-16 aspect-h-8"><div class="w-full h-full block p-6" style="background: url('{{ asset('img/gis.png') }}') center center no-repeat; background-size: cover;"></div></div>
                            </div>
                            <div class="workInfo bg-black bg-opacity-20 lg:bg-opacity-40 px-6 lg:px-12 py-4">
                                <h5 class="text-blue-400">General Information Services</h5>
                                <h6>Corporate Website [2015]</h6>
                                <p class="text-gray-400">General Information Services is one of the largest background check companies in America. Using the latest methods in ASP, HTML5, CSS3, and jQuery, I was able to develop a state of the art, resposive website.</p>
                                <p class="text-gray-400">I completely designed and developed this entire site in just under a year.</p>
                                <!-- <button class="text-gray-400 bg-blue-400 hover:bg-blue-500 w-full transition-all ease-in-out duration-300"><a href="#" alt="General Information Services" target="_blank" class="block hover:text-white">View Site</a></button> -->
                            </div>
                        </div>

                        <div class="work lg:grid grid-cols-3 text-gray-50" url="#">
                            <div class="col-span-2 bg-black bg-opacity-40 lg:bg-opacity-20 px-6 lg:px-12 py-6">
                                <div class="aspect-w-16 aspect-h-8"><div class="w-full h-full block p-6" style="background: url('{{ asset('img/frontline.png') }}') center center no-repeat; background-size: cover;"></div></div>
                            </div>
                            <div class="workInfo bg-black bg-opacity-40 px-6 lg:px-12 py-4">
                                <h5 class="text-blue-400">Frontline Arsenal</h5>
                                <h6>E-Commerce Website [2013]</h6>
                                <p class="text-gray-400">Frontline Arsenal went from earning twenty thousand dollars a month in sales, to over one hundred thousand dollars in sales in a single month after we built their new site.</p>
                                <p class="text-gray-400">I helped design and completely developed this site in a three month span.</p>
                                <!-- <button class="text-gray-400 bg-blue-400 hover:bg-blue-500 w-full transition-all ease-in-out duration-300"><a href="http://frontlinearsenal.com/" alt="Frontline Arsenal" target="_blank" class="block hover:text-white">View Site</a></button> -->
                            </div>
                        </div>

                        <div class="work lg:grid grid-cols-3 text-gray-50">
                            <div class="col-span-2 bg-black bg-opacity-20 px-6 lg:px-12 py-6">
                                <div class="aspect-w-16 aspect-h-8"><div class="w-full h-full block p-6" style="background: url('{{ asset('img/lrg-sc.png') }}') center center no-repeat; background-size: cover;"></div></div>
                            </div>
                            <div class="workInfo bg-black bg-opacity-20 lg:bg-opacity-40 px-6 lg:px-12 py-4">
                                <h5 class="text-blue-400">Lexington Referral Group</h5>
                                <h6>Member‘s Website [2011]</h6>
                                <p class="text-gray-400">The Lexington Referral Group came to me in 2011 needing a way to explain who they are, what they do, display their members names and occupations, meeting times, and meeting location.</p>
                                <p class="text-gray-400">I designed and developed the entire website in three weeks.</p>
                                <!-- <button class="text-gray-400 bg-blue-400 hover:bg-blue-500 w-full transition-all ease-in-out duration-300"><a href="http://lrg.isbeingdesigned.com/" alt="Lexington Referral Group" target="_blank" class="block hover:text-white">View Site</a></button> -->
                            </div>
                        </div>

                        <div class="work lg:grid grid-cols-3 text-gray-50">
                            <div class="col-span-2 bg-black bg-opacity-40 lg:bg-opacity-20 px-6 lg:px-12 py-6">
                                <div class="aspect-w-16 aspect-h-8"><div class="w-full h-full block p-6" style="background: url('{{ asset('img/eb2.png') }}') center center no-repeat; background-size: cover;"></div></div>
                            </div>
                            <div class="workInfo bg-black bg-opacity-40 px-6 lg:px-12 py-4">
                                <h5 class="text-blue-400">Experienced Builders 2</h5>
                                <h6>Website [2010]</h6>
                                <p class="text-gray-400">Experienced Builders 2 came to us needing a new and fresh look for their company.</p>
                                <p class="text-gray-400">I designed and developed this entire website in two months and developed the flash piece in one week.</p>
                                <!-- <button class="text-gray-400 bg-blue-400 hover:bg-blue-500 w-full transition-all ease-in-out duration-300"><a href="http://eb2.isbeingdesigned.com/" alt="Experienced Builders 2" target="_blank" class="block hover:text-white">View Site</a></button> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </x-slot>

    <x-slot name="footer">
        <div class="footer max-w-screen-lg mx-auto">
            <p class="text-gray-400 text-center">{{ now()->year }} &copy; Copyright All Rights Reserved<br class="lg:hidden"/><span class="hidden lg:contents" style="font-family:exolight;"> &bull; </span><span class="cursor-default text-white" style="font-family:exolight;">803.553.2043</span> &bull; <span class="cursor-pointer text-white hover:text-blue-400 ease-in-out transition-all duration-150" onclick="Livewire.emit('openModal', 'contact')" style="font-family:exolight;">info@robert-herring.com</span></p>
        </div>
    </x-slot>

</x-layout>
