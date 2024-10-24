<x-app-layout>
        <div class="relative mt-6 justify-center item mx-auto border-zinc-800 dark:border-zinc-800 bg-zinc-800 border-[14px] rounded-[2.5rem] h-[700px] w-[1300px]">
            <div class="h-[32px] w-[3px] bg-zinc-800 dark:bg-zinc-800 absolute -start-[17px] top-[72px] rounded-s-lg"></div>
            <div class="h-[46px] w-[3px] bg-zinc-800 dark:bg-zinc-800 absolute -start-[17px] top-[124px] rounded-s-lg"></div>
            <div class="h-[46px] w-[3px] bg-zinc-800 dark:bg-zinc-800 absolute -start-[17px] top-[178px] rounded-s-lg"></div>
            <div class="h-[64px] w-[3px] bg-zinc-800 dark:bg-zinc-800 absolute -end-[17px] top-[142px] rounded-e-lg"></div>
            <div class="rounded-[2rem] overflow-hidden w-[1272px] h-[672px] bg-white dark:bg-zinc-800 p-4 overflow-y-auto">
                <h2 class="text-lg font-bold">{{ $application->first_name }} {{ $application->last_name }}</h2>
                <p>Email: {{ $application->email }}</p>
                <p>Phone: {{ $application->phone }}</p>
                <p>Location: {{ $application->location_city }}, {{ $application->location_country }}</p>

                <h3 class="font-semibold mt-4">Job Title:</h3>
                <p>{{ $application->jobListing->title }}</p>

                <h3 class="font-semibold mt-4">Portfolio URL:</h3>
                <p><a href="{{ $application->portfolio_url }}" target="_blank">{{ $application->portfolio_url }}</a></p>

                <h3 class="font-semibold mt-4">Additional Info:</h3>
                <p>{{ $application->additional_info }}</p>

                <h3 class="font-semibold mt-4">LinkedIn Profile:</h3>
                <p><a href="{{ $application->linkedin_profile }}" target="_blank">{{ $application->linkedin_profile }}</a></p>

                <h3 class="font-semibold mt-4">Work Authorization in UK:</h3>
                <p>{{ $application->work_authorization_uk ? 'Yes' : 'No' }}</p>

                <h3 class="font-semibold mt-4">Located in UK:</h3>
                <p>{{ $application->located_in_uk ? 'Yes' : 'No' }}</p>

                <h3 class="font-semibold mt-4">Education:</h3>
                @if(!empty($application->education))
                    @foreach($application->education as $education)
                        <div class="mt-2">
                            <p>School: {{ $education['school'] }}</p>
                            <p>Degree: {{ $education['degree'] }}</p>
                            <p>Discipline: {{ $education['discipline'] }}</p>
                        </div>
                    @endforeach
                @else
                    <p>N/A</p>
                @endif

                <h3 class="font-semibold mt-4">CV:</h3>
                @if ($application->cv_path)
                    <a href="{{ asset('storage/' . $application->cv_path) }}" target="_blank">View CV</a>
                @else
                    <p>N/A</p>
                @endif
            </div>
        </div>
</x-app-layout>
