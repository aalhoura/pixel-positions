<x-layout>
    <div class="space-y-10">

        {{-- Header and Search Bar --}}

        <section class="text-center pt-6">
            <h1 class="text-4xl font-bold">Let's Find You A Great Job</h1>
            <div class="inline-block mt-6 w-full max-w-3xl p-1.5 rounded-2xl backdrop-blur-[1px]">
                <form action="">
                    <input type="text" placeholder="Search for jobs"
                        class="w-full px-5 py-4 bg-white/5 text-white rounded-xl">
                </form>
            </div>
        </section>

        {{-- Featured Jobs --}}

        <section class="pt-5">
            <x-section-heading>Featured Jobs</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-6 mt-6">
                @foreach ($featuredJobs as $job)
                    <x-job-card :$job />
                @endforeach
            </div>
        </section>

        {{-- Tags --}}

        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6 space-x-1">
                @foreach ($tags as $tag)
                    <x-tag :tag="$tag" />
                @endforeach
            </div>
        </section>

        {{-- Recent Jobs --}}

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-6">
                @foreach ($jobs as $job)
                    <x-job-card-wide :$job />
                @endforeach
            </div>
        </section>
    </div>
</x-layout>