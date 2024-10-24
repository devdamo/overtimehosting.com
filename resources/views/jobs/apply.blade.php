@extends('layouts.wrapper')

@section('content')

    @include('layouts.navigation')

    <section class="bg-white dark:bg-zinc-900">
        <div class="bg-[url('https://flowbite.s3.amazonaws.com/blocks/marketing-ui/contact/laptop-human.jpg')] bg-no-repeat bg-cover bg-center bg-zinc-700 bg-blend-multiply">
            <div class="px-4 lg:pt-24 pt-8 pb-72 lg:pb-80 mx-auto max-w-screen-sm text-center lg:px-6 ">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-white">Apply for {{ $jobListing->title }}</h2>
                <p class="mb-16 font-light text-zinc-400 sm:text-xl">We use an agile approach to test assumptions and connect with the needs of your audience early and often.</p>
            </div>
        </div>

        @if(session('success'))
            <div class="bg-green-500 text-white p-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-green-500 text-white p-4 rounded">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="py-16 px-4 mx-auto -mt-96 max-w-screen-xl sm:py-24 lg:px-6 ">
            <form action="#" class="grid grid-cols-1 gap-8 p-6 mx-auto mb-16 max-w-screen-md bg-white rounded-lg border border-zinc-200 shadow-sm lg:mb-28 dark:bg-zinc-800 dark:border-zinc-700 sm:grid-cols-2">
                <div>
                    <label for="first-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">First Name</label>
                    <input type="text" id="first-name" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Bonnie" required>
                </div>
                <div>
                    <label for="last-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">Last Name</label>
                    <input type="text" id="last-name" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Green" required>
                </div>
                <div>
                    <label for="email" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">Your email</label>
                    <input type="email" id="email" class="shadow-sm bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="name@overtimehosting.com" required>
                </div>
                <div>
                    <label for="phone-number" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">Phone Number</label>
                    <input type="number" id="phone-number" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="+12 345 6789" required>
                </div>
                <div>
                    <label for="first-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">City</label>
                    <input type="text" id="first-name" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Bonnie" required>
                </div>
                <div>
                    <label for="first-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">Country</label>
                    <input type="text" id="first-name" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Bonnie" required>
                </div>
                <div>
                    <label for="dropzone-file" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-white">Product Images</label>
                    <div class="flex justify-center items-center w-full">
                        <label for="dropzone-file" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light">
                            <div class="flex flex-col justify-center items-center">
                                <p class="text-sm text-zinc-500 dark:text-zinc-400"><span class="font-semibold">Click to upload</span></p>
                            </div>
                            <input id="dropzone-file" type="file" class="hidden">
                        </label>
                    </div>
                </div>
                <div>
                    <label for="user-permissions" class="inline-flex items-center mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                        User Permissions
                        <button type="button" data-tooltip-target="tooltip-dark" data-tooltip-style="dark" class="ml-1">
                            <svg aria-hidden="true" class="w-4 h-4 text-zinc-400 hover:text-zinc-900 dark:text-zinc-500 dark:hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Show information</span>
                        </button>
                        <div id="tooltip-dark" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 max-w-sm text-xs font-normal text-white bg-zinc-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-zinc-700">
                            User permissions, part of the overall user management process, are access granted to users to specific resources such as files, applications, networks, or devices.
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </label>
                    <select id="user-permissions" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected="">Operational</option>
                        <option value="NO">Non Operational</option>
                    </select>
                </div>
                <div>
                    <label for="user-permissions" class="inline-flex items-center mb-2 text-sm font-medium text-zinc-900 dark:text-white">
                        User Permissions
                        <button type="button" data-tooltip-target="tooltip-dark" data-tooltip-style="dark" class="ml-1">
                            <svg aria-hidden="true" class="w-4 h-4 text-zinc-400 hover:text-zinc-900 dark:text-zinc-500 dark:hover:text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path></svg>
                            <span class="sr-only">Show information</span>
                        </button>
                        <div id="tooltip-dark" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 max-w-sm text-xs font-normal text-white bg-zinc-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-zinc-700">
                            User permissions, part of the overall user management process, are access granted to users to specific resources such as files, applications, networks, or devices.
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </label>
                    <select id="user-permissions" class="bg-zinc-50 border border-zinc-300 text-zinc-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected="">Operational</option>
                        <option value="NO">Non Operational</option>
                    </select>
                </div>
                <div>
                    <label for="first-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">Portfolio URL</label>
                    <input type="text" id="first-name" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Bonnie" required>
                </div>
                <div>
                    <label for="first-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">LinkedIn Profile</label>
                    <input type="text" id="first-name" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Bonnie" required>
                </div>
                <div>
                    <label for="first-name" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-300">How did you hear about this job?</label>
                    <input type="text" id="first-name" class="block p-3 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg border border-zinc-300 shadow-sm focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" placeholder="Bonnie" required>
                </div>
                <div class="sm:col-span-2">
                    <label for="message" class="block mb-2 text-sm font-medium text-zinc-900 dark:text-zinc-400">Your message</label>
                    <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-zinc-900 bg-zinc-50 rounded-lg shadow-sm border border-zinc-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-zinc-700 dark:border-zinc-600 dark:placeholder-zinc-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Leave a comment..."></textarea>
                    <p class="mt-4 text-sm text-zinc-500">By submitting this form you agree to our <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">terms and conditions</a> and our <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">privacy policy</a> which explains how we may collect, use and disclose your personal information including to third parties.</p>
                </div>
                <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-blue-700 sm:w-fit hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Send message</button>
            </form>
        </div>
    </section>





























    <div class="container">
        <h1>Apply for {{ $jobListing->title }}</h1>

        <!-- Success message -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <form action="{{ route('jobs.apply.store', $jobListing->id) }}" method="POST" enctype="multipart/form-data">
            @csrf

            <!-- First Name -->
            <div class="form-group">
                <label for="first_name">First Name</label>
                <input type="text" name="first_name" class="form-control" required>
            </div>

            <!-- Last Name -->
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input type="text" name="last_name" class="form-control" required>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" class="form-control" required>
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" class="form-control" required>
            </div>

            <!-- Location (City and Country) -->
            <div class="form-group">
                <label for="location_city">City</label>
                <input type="text" name="location_city" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="location_country">Country</label>
                <input type="text" name="location_country" class="form-control" required>
            </div>

            <!-- CV Upload -->
            <div class="form-group">
                <label for="cv">Upload CV (PDF, DOC, DOCX)</label>
                <input type="file" name="cv" class="form-control" accept=".pdf,.doc,.docx" required>
            </div>

            <!-- Work Authorization in UK -->
            <div class="form-group">
                <label for="work_authorization_uk">Are you allowed to work in the UK?</label>
                <select name="work_authorization_uk" class="form-control" required>
                    <option value="">Select</option>
                    <option value="yes">yes</option>
                    <option value="no">no</option>
                </select>
            </div>

            <!-- Located in UK -->
            <div class="form-group">
                <label for="located_in_uk">Are you currently located in the UK?</label>
                <select name="located_in_uk" class="form-control" required>
                    <option value="">Select</option>
                    <option value="yes">yes</option>
                    <option value="no">no</option>
                </select>
            </div>

            <!-- Optional Portfolio URL -->
            <div class="form-group">
                <label for="portfolio_url">Portfolio URL (Optional)</label>
                <input type="url" name="portfolio_url" class="form-control">
            </div>

            <!-- LinkedIn Profile -->
            <div class="form-group">
                <label for="linkedin_profile">LinkedIn Profile</label>
                <input type="url" name="linkedin_profile" class="form-control">
            </div>

            <!-- How Did You Hear About This Job -->
            <div class="form-group">
                <label for="referral_source">How did you hear about this job?</label>
                <input type="text" name="referral_source" class="form-control">
            </div>

            <!-- Education Section (Multiple) -->
            <div class="education-section">
                <h3>Education</h3>
                <div id="education-fields">
                    <div class="education-group">
                        <div class="form-group">
                            <label for="school[]">School</label>
                            <input type="text" name="school[]" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="degree[]">Degree</label>
                            <input type="text" name="degree[]" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="discipline[]">Discipline</label>
                            <input type="text" name="discipline[]" class="form-control" required>
                        </div>
                    </div>
                </div>
                <button type="button" id="add-education" class="btn btn-secondary">Add More Education</button>
            </div>

            <!-- Additional Information -->
            <div class="form-group">
                <label for="additional_info">Additional Information</label>
                <textarea name="additional_info" class="form-control" rows="5"></textarea>
            </div>

            <button type="submit" class="btn btn-blue">Submit Application</button>
        </form>
    </div>

    <x-footer/>

    <!-- Add JavaScript to dynamically add more education fields -->
    <script>
        document.getElementById('add-education').addEventListener('click', function() {
            const educationSection = document.getElementById('education-fields');
            const newEducationGroup = document.createElement('div');
            newEducationGroup.classList.add('education-group');
            newEducationGroup.innerHTML = `
                <div class="form-group">
                    <label for="school[]">School</label>
                    <input type="text" name="school[]" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="degree[]">Degree</label>
                    <input type="text" name="degree[]" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="discipline[]">Discipline</label>
                    <input type="text" name="discipline[]" class="form-control" required>
                </div>
            `;
            educationSection.appendChild(newEducationGroup);
        });
    </script>

@endsection
