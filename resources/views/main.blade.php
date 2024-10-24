@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

    @include('layouts.hero')

    @include('categories.index')

    <section class="bg-white dark:bg-zinc-900">
        <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
            <div class="mx-auto max-w-screen-lg text-center">
                <h2 class="mb-2 text-4xl tracking-tight font-extrabold text-zinc-900 dark:text-white">Frequently asked questions</h2>
                <p class="mb-8 text-zinc-500 lg:text-lg dark:text-zinc-400">Ask us anything about our brand and products, and get factual responses.</p>
            </div>

            <div class="grid pt-8 text-left border-t border-zinc-200 dark:border-zinc-700 sm:gap-8 lg:gap-16 sm:grid-cols-2 lg:grid-cols-3">
                <div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            What services does your company provide?
                        </h3>
                        <p class="text-zinc-500 dark:text-zinc-400">Our company, OvertimeHosting, provides web hosting services with a focus on game servers. We offer four different subscription plans, each with varying levels of resources to suit your needs. Our services are compatible with games that can be hosted on Pterodactyl.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            How can I sign up for your web hosting services?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">To sign up for our web hosting services, you can visit our website and choose the subscription plan that best fits your needs. You will then be guided through the registration process.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            Do you offer any free trial or demo for your hosting plans?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">Currently, we do not offer a free trial or demo for our hosting plans. However, our first month subscription is only £1.20, which then transitions to a £1 per month fee. This allows you to try our services at a reduced rate.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            What types of games can be hosted on your servers?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">We support a variety of games that are compatible with Pterodactyl. However, please note that we currently do not provide hosting for FiveM servers or other games requiring licensing. For a full list of supported games, you can visit our website or contact our customer service team.</p>
                    </div>
                </div>
                <div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            What are the server specifications for game hosting?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">Our servers primarily consist of the Ryzen 7 Pro 3700. In our U.S. locations, we often utilize the Ryzen 9 Pro 3500, although it's not used for all servers there. We also employ servers from Shadow Hosting, which essentially means we're using 2x Intel(R) Xeon(R) CPU E5-2680 v4 @ 2.40GHz (56 cores).</p>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">The majority of our servers are equipped with 64GB DDR4 RAM.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            Do you provide customer support for server issues?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">Yes, we provide customer support for server issues. Our dedicated support team is available 24/7 to assist you with any issues you may encounter. You can reach out to us via our support ticket system on our website.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            How can I upgrade or downgrade my hosting plan?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">You can easily upgrade or downgrade your hosting plan through your account on our website. Once logged in, navigate to your services, select the plan you wish to change, and choose the upgrade or downgrade option. The changes will take effect at the start of your next billing cycle.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            What security measures are in place to protect my website and game servers?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">We take security very seriously. All our servers come with DDoS protection and we use firewalls to protect your website and game servers. We also provide regular backups to ensure your data is safe. Additionally, we monitor our systems 24/7 for any unusual activity.</p>
                    </div>
                </div>
                <div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            What payment methods do you accept?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">We accept a variety of payment methods for your convenience. These include major credit and debit cards (Visa, MasterCard, American Express), PayPal, and bank transfers.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            How can I cancel my hosting service?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">To cancel your hosting service, you need to log into your account on our website. Navigate to the 'Services' section and select the service you wish to cancel. Click on 'Request Cancellation' and follow the prompts. Please note that you must cancel at least 48 hours before your next billing cycle to avoid being charged for the next month.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            Is there a money-back guarantee if I am not satisfied with the service?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">Yes, we offer a 30-day money-back guarantee. If you are not satisfied with our service within the first 30 days, you can request a full refund. Please note that this does not apply to domain name registrations and certain other services.</p>
                    </div>
                    <div class="mb-10">
                        <h3 class="mb-4 text-lg font-medium text-zinc-900 dark:text-white">
                            Can I transfer my existing website or game server to your hosting service?
                        </h3>
                        <p class="mb-4 text-zinc-500 dark:text-zinc-400">Yes, you can transfer your existing website or game server to our hosting service. We offer a free migration service for new customers. Our technical team will handle the entire migration process to ensure a smooth transition. Please note that we only host games compatible with Pterodactyl and currently do not provide hosting for FiveM servers or other games requiring licensing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Footer -->
    <x-footer/>

    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Sidebar Toggle Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const nav = document.querySelector('[data-sticky="true"]');

            // Check if the element exists
            if (nav) {
                window.addEventListener('scroll', function() {
                    // If the page is scrolled to the top
                    if (window.scrollY === 0) {
                        nav.setAttribute('data-sticky', 'false');
                    } else {
                        nav.setAttribute('data-sticky', 'true');
                    }
                });
            }
        });
    </script>


    <!-- Sidebar Toggle Script -->
    <script>
        document.getElementById('sidebarToggle').addEventListener('click', function () {
            var sidebar = document.getElementById('sidebar');
            if (sidebar.classList.contains('-translate-x-full')) {
                sidebar.classList.remove('-translate-x-full');
            } else {
                sidebar.classList.add('-translate-x-full');
            }
        });
    </script>

    <script>
        const pricingTabEls = [
            {
                id: 'starter',
                triggerEl: document.querySelector('#starter-tab'),
                targetEl: document.querySelector('#starter-content'),
                pricingEl: document.querySelector('#starter-plan')
            },
            {
                id: 'standard',
                triggerEl: document.querySelector('#standard-tab'),
                targetEl: document.querySelector('#standard-content'),
                pricingEl: document.querySelector('#standard-plan')
            },
            {
                id: 'premium',
                triggerEl: document.querySelector('#premium-tab'),
                targetEl: document.querySelector('#premium-content'),
                pricingEl: document.querySelector('#premium-plan')
            },
            {
                id: 'enterprise',
                triggerEl: document.querySelector('#enterprise-tab'),
                targetEl: document.querySelector('#enterprise-content'),
                pricingEl: document.querySelector('#enterprise-plan')
            }
        ];

        const options = {
            defaultTabId: 'standard',
            activeClasses: 'text-gray-900 bg-gray-100 dark:bg-gray-600 dark:text-white',
            inactiveClasses: 'bg-white hover:text-gray-700 hover:bg-gray-50 dark:hover:text-white dark:bg-gray-700 dark:hover:bg-gray-600',
            onShow(context) {
                const activeTab = context.getActiveTab();
                pricingTabEls.map(function(el) {
                    el.pricingEl.classList.add('hidden')
                })
                activeTab.pricingEl.classList.remove('hidden');
            }
        }

        const pricingTabs = new Tabs(pricingTabEls, options);
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

@endsection
