@extends('layouts.wrapper')
@section('title', 'Cookie Notice')
@section('content')

@include('layouts.navigation')

<section class="border-b border-zinc-100 bg-zinc-50 dark:bg-zinc-800 dark:border-zinc-700">
    <div class="max-w-screen-xl px-4 py-6 mx-auto">
        <nav class="flex" aria-label="Breadcrumb">
            <ol class="inline-flex items-center space-x-2 md:space-x-4">
                <li class="inline-flex items-center">
                    <a href="/"
                       class="inline-flex items-center text-sm font-medium text-zinc-700 hover:text-blue-600 dark:text-zinc-400 dark:hover:text-white">
                        <svg aria-hidden="true" class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z">
                            </path>
                        </svg>
                        Home
                    </a>
                </li>

                <li aria-current="page">
                    <div class="flex items-center">
                        <svg aria-hidden="true" class="w-5 h-5 text-zinc-400" fill="currentColor" viewBox="0 0 20 20"
                             xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                  d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                  clip-rule="evenodd"></path>
                        </svg>
                        <span class="ml-2 text-sm font-medium text-zinc-500 md:ml-4 dark:text-zinc-400">
              Cookie Notice
            </span>
                    </div>
                </li>
            </ol>
        </nav>

        <h1 class="mt-4 text-2xl font-bold text-zinc-900 dark:text-white">
            Last updated April 23, 2024
        </h1>
    </div>
</section>

<section class="bg-white dark:bg-zinc-900">
    <div class="max-w-screen-xl px-4 py-8 mx-auto sm:pb-16">
        <div class="flex flex-col gap-12 lg:flex-row lg:items-start xl:gap-20">
            <div class="w-full lg:max-w-xs lg:sticky lg:top-20">
                <div class="border border-zinc-200 rounded-lg bg-zinc-50 dark:bg-zinc-800 dark:border-zinc-700">
                    <div class="p-6 space-y-6 lg:p-8">
                        <h2 class="text-base font-bold text-zinc-900 uppercase dark:text-white">
                            PAGE CONTENTS
                        </h2>

                        <ul class="space-y-4">
                            <li>
                                <a href="#1" title="" class="text-base font-medium text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                                    COOKIE POLICY
                                </a>
                            </li>

                            <li>
                                <a href="#2" title="" class="text-base font-medium text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                                    What are cookies?
                                </a>
                            </li>

                            <li>
                                <a href="#3" title="" class="text-base font-medium text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                                    Why do we use cookies?
                                </a>
                            </li>

                            <li>
                                <a href="#4" title="" class="text-base font-medium text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                                    How can I control cookies?
                                </a>
                            </li>

                            <li>
                                <a href="#5" title="" class="text-base font-medium text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                                    What about other tracking technologies, like web beacons?
                                </a>
                            </li>

                            <li>
                                <a href="#6" title="" class="text-base font-medium text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                                    Do you use Flash cookies or Local Shared Objects?
                                </a>
                            </li>

                            <li>
                                <a href="#7" title="" class="text-base font-medium text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                                    Do you serve targeted advertising?
                                </a>
                            </li>

                            <li>
                                <a href="#8" title="" class="text-base font-medium text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                                    How often will you update this Cookie Policy?
                                </a>
                            </li>

                            <li>
                                <a href="#9" title="" class="text-base font-medium text-zinc-500 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-white">
                                    Where can I get further information?
                                </a>
                            </li>
                        </ul>

                        <a href="#" title="" class="w-full text-white items-center justify-center inline-flex bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Got a question? Contact us.
                        </a>
                    </div>
                </div>
            </div>

            <div class="flex-1 min-w-0">

                <h3 id="1" class="mt-8 text-2xl font-bold text-zinc-900 dark:text-white">
                    COOKIE POLICY
                </h3>
                <p class="mt-6 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    Last updated April 23, 2024
                </p>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    This Cookie Policy explains how OverTimeHosting ("Company," "we," "us," and "our") uses cookies and similar technologies to recognize you when you visit our website at https://overtimehosting.com ("Website"). It explains what these technologies are and why we use them, as well as your rights to control our use of them.
                </p>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    In some cases we may use cookies to collect personal information, or that becomes personal information if we combine it with other information.
                </p>

                <h3 id="2" class="mt-8 text-2xl font-bold text-zinc-900 dark:text-white">
                    What are cookies?
                </h3>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    Cookies are small data files that are placed on your computer or mobile device when you visit a website. Cookies are widely used by website owners in order to make their websites work, or to work more efficiently, as well as to provide reporting information.
                </p>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    Cookies set by the website owner (in this case, OverTimeHosting) are called "first-party cookies." Cookies set by parties other than the website owner are called "third-party cookies." Third-party cookies enable third-party features or functionality to be provided on or through the website (e.g., advertising, interactive content, and analytics). The parties that set these third-party cookies can recognize your computer both when it visits the website in question and also when it visits certain other websites.
                </p>

                <h3 id="3" class="mt-8 text-2xl font-bold text-zinc-900 dark:text-white">
                    Why do we use cookies?
                </h3>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    We use first- and third-party cookies for several reasons. Some cookies are required for technical reasons in order for our Website to operate, and we refer to these as "essential" or "strictly necessary" cookies. Other cookies also enable us to track and target the interests of our users to enhance the experience on our Online Properties. Third parties serve cookies through our Website for advertising, analytics, and other purposes. This is described in more detail below.
                </p>

                <h3 id="4" class="mt-8 text-2xl font-bold text-zinc-900 dark:text-white">
                    How can I control cookies?
                </h3>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    You have the right to decide whether to accept or reject cookies. You can exercise your cookie rights by setting your preferences in the Cookie Consent Manager. The Cookie Consent Manager allows you to select which categories of cookies you accept or reject. Essential cookies cannot be rejected as they are strictly necessary to provide you with services.
                </p>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    The Cookie Consent Manager can be found in the notification banner and on our website. If you choose to reject cookies, you may still use our website though your access to some functionality and areas of our website may be restricted. You may also set or amend your web browser controls to accept or refuse cookies.
                </p>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    The specific types of first- and third-party cookies served through our Website and the purposes they perform are described in the table below (please note that the specific cookies served may vary depending on the specific Online Properties you visit)
                </p>

                <h4 id="4.5" class="mt-4 text-xl font-bold text-zinc-500 dark:text-zinc-400">
                    How can I control cookies on my browser?
                </h4>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    As the means by which you can refuse cookies through your web browser controls vary from browser to browser, you should visit your browser's help menu for more information. The following is information about how to manage cookies on the most popular browsers:
                </p>
                <ol
                    class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400 space-y-2.5 list-[lower-alpha] list-outside pl-5">
                    <li>
                        <span class="font-semibold text-zinc-900 dark:text-white">Chrome</span>
                    </li>

                    <li>
                        <span class="font-semibold text-zinc-900 dark:text-white">Firefox</span>
                    </li>

                    <li>
                        <span class="font-semibold text-zinc-900 dark:text-white">Safari</span>
                    </li>

                    <li>
                        <span class="font-semibold text-zinc-900 dark:text-white">Edge</span>
                    </li>

                    <li>
                        <span class="font-semibold text-zinc-900 dark:text-white">Opera</span>
                    </li>
                </ol>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    In addition, most advertising networks offer you a way to opt out of targeted advertising. If you would like to find out more information, please visit:
                </p>
                <ol
                    class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400 space-y-2.5 list-[lower-alpha] list-outside pl-5">
                    <li>
                        <span class="font-semibold text-zinc-900 dark:text-white">Digital Advertising Alliance</span>
                    </li>

                    <li>
                        <span class="font-semibold text-zinc-900 dark:text-white">Digital Advertising Alliance of Canada</span>
                    </li>

                    <li>
                        <span class="font-semibold text-zinc-900 dark:text-white">European Interactive Digital Advertising Alliance</span>
                    </li>
                </ol>

                <h3 id="5" class="mt-8 text-2xl font-bold text-zinc-900 dark:text-white">
                    What about other tracking technologies, like web beacons?
                </h3>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    Cookies are not the only way to recognize or track visitors to a website. We may use other, similar technologies from time to time, like web beacons (sometimes called "tracking pixels" or "clear gifs"). These are tiny graphics files that contain a unique identifier that enables us to recognize when someone has visited our Website or opened an email including them. This allows us, for example, to monitor the traffic patterns of users from one page within a website to another, to deliver or communicate with cookies, to understand whether you have come to the website from an online advertisement displayed on a third-party website, to improve site performance, and to measure the success of email marketing campaigns. In many instances, these technologies are reliant on cookies to function properly, and so declining cookies will impair their functioning.
                </p>

                <h3 id="6" class="mt-8 text-2xl font-bold text-zinc-900 dark:text-white">
                    Do you use Flash cookies or Local Shared Objects?
                </h3>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    Websites may also use so-called "Flash Cookies" (also known as Local Shared Objects or "LSOs") to, among other things, collect and store information about your use of our services, fraud prevention, and for other site operations.
                </p>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    If you do not want Flash Cookies stored on your computer, you can adjust the settings of your Flash player to block Flash Cookies storage using the tools contained in the Website Storage Settings Panel. You can also control Flash Cookies by going to the Global Storage Settings Panel and following the instructions (which may include instructions that explain, for example, how to delete existing Flash Cookies (referred to "information" on the Macromedia site), how to prevent Flash LSOs from being placed on your computer without your being asked, and (for Flash Player 8 and later) how to block Flash Cookies that are not being delivered by the operator of the page you are on at the time).
                </p>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    Please note that setting the Flash Player to restrict or limit acceptance of Flash Cookies may reduce or impede the functionality of some Flash applications, including, potentially, Flash applications used in connection with our services or online content.
                </p>

                <h3 id="7" class="mt-8 text-2xl font-bold text-zinc-900 dark:text-white">
                    Do you serve targeted advertising?
                </h3>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    Third parties may serve cookies on your computer or mobile device to serve advertising through our Website. These companies may use information about your visits to this and other websites in order to provide relevant advertisements about goods and services that you may be interested in. They may also employ technology that is used to measure the effectiveness of advertisements. They can accomplish this by using cookies or web beacons to collect information about your visits to this and other sites in order to provide relevant advertisements about goods and services of potential interest to you. The information collected through this process does not enable us or them to identify your name, contact details, or other details that directly identify you unless you choose to provide these.
                </p>

                <h3 id="8" class="mt-8 text-2xl font-bold text-zinc-900 dark:text-white">
                    How often will you update this Cookie Policy?
                </h3>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    We may update this Cookie Policy from time to time in order to reflect, for example, changes to the cookies we use or for other operational, legal, or regulatory reasons. Please therefore revisit this Cookie Policy regularly to stay informed about our use of cookies and related technologies.
                </p>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    The date at the top of this Cookie Policy indicates when it was last updated.
                </p>

                <h3 id="9" class="mt-8 text-2xl font-bold text-zinc-900 dark:text-white">
                    Where can I get further information?
                </h3>
                <p class="mt-4 text-base font-normal text-zinc-500 dark:text-zinc-400">
                    If you have any questions about our use of cookies or other technologies, please email us at contact@overtimehosting.com or by post to:
                </p>
                <div class="p-6 mt-6 rounded-lg bg-gray-50 dark:bg-zinc-800">
                    <ol class="text-base font-normal text-zinc-500 dark:text-zinc-400 space-y-2.5 pl-5">
                        <li>
                            <span class="font-semibold text-zinc-900 dark:text-white">OverTimeHosting</span>
                        </li>
                        <li>
                            <span class="font-semibold text-zinc-900 dark:text-white">Northampton</span>
                        </li>
                        <li>
                            <span class="font-semibold text-zinc-900 dark:text-white">United Kingdom</span>
                        </li>
                        <li>
                            <span class="font-semibold text-zinc-900 dark:text-white">Email: contact@overtimehosting.com</span>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Footer -->
    <x-footer/>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@endsection
