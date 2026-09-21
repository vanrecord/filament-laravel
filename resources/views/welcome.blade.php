
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700" rel="stylesheet">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
    rel="stylesheet"
    >
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <style>
        body {
            font-family: 'Instrument Sans', sans-serif;
        }

        .profile-bg {
            background:
                radial-gradient(circle at 10% 20%, rgba(99, 102, 241, 0.12), transparent 30%),
                radial-gradient(circle at 90% 80%, rgba(168, 85, 247, 0.12), transparent 30%),
                #f8fafc;
        }

        .dark .profile-bg {
            background:
                radial-gradient(circle at 10% 20%, rgba(99, 102, 241, 0.15), transparent 30%),
                radial-gradient(circle at 90% 80%, rgba(168, 85, 247, 0.15), transparent 30%),
                #020617;
        }

        .glass {
            background: rgba(255, 255, 255, 0.85);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
        }

        .dark .glass {
            background: rgba(15, 23, 42, 0.88);
        }
    </style>
</head>


<body class="profile-bg min-h-screen text-slate-900 dark:text-white">

    <!-- Navigation -->
    <header class="absolute top-0 left-0 right-0 z-20">

        <div class="mx-auto flex max-w-6xl items-center justify-end px-6 py-6">

            @if (Route::has('login'))

                <nav class="flex items-center gap-3">

                    @auth

                        <a href="{{ url('/dashboard') }}"
                           class="rounded-xl border border-slate-200 bg-white px-5 py-2.5
                                  text-sm font-medium text-slate-700 shadow-sm
                                  transition hover:bg-slate-50
                                  dark:border-slate-700 dark:bg-slate-900
                                  dark:text-slate-200 dark:hover:bg-slate-800">
                            Dashboard
                        </a>

                    @else

                        <a href="{{ route('login') }}"
                           class="rounded-xl border border-slate-200 bg-white px-5 py-2.5
                                  text-sm font-medium text-slate-700 shadow-sm
                                  transition hover:bg-slate-50
                                  dark:border-slate-700 dark:bg-slate-900
                                  dark:text-slate-200 dark:hover:bg-slate-800">
                            Log in
                        </a>

                        @if (Route::has('register'))

                            <a href="{{ route('register') }}"
                               class="rounded-xl bg-slate-900 px-5 py-2.5
                                      text-sm font-medium text-white shadow-sm
                                      transition hover:bg-slate-700
                                      dark:bg-white dark:text-slate-900
                                      dark:hover:bg-slate-200">
                                Register
                            </a>

                        @endif

                    @endauth

                </nav>

            @endif

        </div>

    </header>


    <!-- Main -->
    <main class="flex min-h-screen items-center justify-center px-5 py-24">

        <div class="w-full max-w-5xl">

            <!-- Main Card -->
            <div class="glass overflow-hidden rounded-[2rem] border
                        border-white shadow-2xl shadow-slate-300/30
                        dark:border-slate-800 dark:shadow-black/30">


                <!-- Hero -->
                <div class="relative overflow-hidden
                            bg-gradient-to-br from-indigo-600
                            via-violet-600 to-purple-700
                            px-6 py-14 text-white
                            sm:px-10 sm:py-16 lg:px-16">


                    <!-- Decorative circles -->
                    <div class="absolute -right-20 -top-20 h-64 w-64
                                rounded-full bg-white/10"></div>

                    <div class="absolute -bottom-32 -left-20 h-80 w-80
                                rounded-full bg-white/5"></div>


                    <div class="relative">

                        <!-- Avatar -->
                        <div class="mb-7 flex h-24 w-24 items-center
                                    justify-center rounded-3xl
                                    bg-white/15 text-4xl font-bold
                                    shadow-xl ring-1 ring-white/30
                                    backdrop-blur">

                            <img src="https://res.cloudinary.com/iohcxvjz/image/upload/v1789979187/soma.jpg">

                        </div>


                        <p class="mb-2 text-sm font-semibold uppercase
                                  tracking-[0.25em] text-indigo-100">
                            Welcome
                        </p>


                        <h1 class="text-4xl font-bold tracking-tight
                                   sm:text-5xl lg:text-6xl">
                            Khorn Sovannsoma
                        </h1>


                        <p class="mt-5 max-w-xl text-base leading-7
                                  text-indigo-100 sm:text-lg">
                            Welcome to my personal profile.
                            This page contains some basic information
                            about me.
                        </p>

                    </div>

                </div>


                <!-- Information -->
                <div class="px-6 py-8 sm:px-10 sm:py-10 lg:px-16 lg:py-12">


                    <!-- Section title -->
                    <div class="mb-7">

                        <p class="text-sm font-semibold uppercase
                                  tracking-wider text-indigo-600
                                  dark:text-indigo-400">
                            Personal Information
                        </p>

                        <h2 class="mt-1 text-2xl font-bold
                                   text-slate-900 dark:text-white">
                            About Me
                        </h2>

                    </div>


                    <!-- Information Grid -->
                    <div class="grid gap-5 md:grid-cols-2">


                        <!-- Name -->
                        <div class="rounded-2xl border border-slate-200
                                    bg-slate-50 p-6
                                    dark:border-slate-700
                                    dark:bg-slate-800/50">

                            <div class="flex items-start gap-4">

                                <div class="flex h-12 w-12 shrink-0
                                            items-center justify-center
                                            rounded-xl bg-indigo-100
                                            text-indigo-600
                                            dark:bg-indigo-500/15
                                            dark:text-indigo-400">

                                    <svg class="h-6 w-6"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="1.8"
                                              d="M15.75 6a3.75 3.75 0 11-7.5 0
                                                 3.75 3.75 0 017.5 0z" />

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="1.8"
                                              d="M4.5 20.25a8.25 8.25 0
                                                 0115 0" />

                                    </svg>

                                </div>


                                <div>

                                    <p class="text-sm text-slate-500
                                              dark:text-slate-400">
                                        Full Name
                                    </p>

                                    <p class="mt-1 text-lg font-semibold
                                              text-slate-900
                                              dark:text-white">
                                        Khorn Sovannsoma
                                    </p>

                                </div>

                            </div>

                        </div>


                        <!-- Birthday -->
                        <div class="rounded-2xl border border-slate-200
                                    bg-slate-50 p-6
                                    dark:border-slate-700
                                    dark:bg-slate-800/50">

                            <div class="flex items-start gap-4">

                                <div class="flex h-12 w-12 shrink-0
                                            items-center justify-center
                                            rounded-xl bg-violet-100
                                            text-violet-600
                                            dark:bg-violet-500/15
                                            dark:text-violet-400">

                                    <svg class="h-6 w-6"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <rect x="3" y="4"
                                              width="18"
                                              height="17"
                                              rx="2"
                                              stroke-width="1.8"/>

                                        <path stroke-linecap="round"
                                              stroke-width="1.8"
                                              d="M8 2v4M16 2v4M3 10h18"/>

                                    </svg>

                                </div>


                                <div>

                                    <p class="text-sm text-slate-500
                                              dark:text-slate-400">
                                        Date of Birth
                                    </p>

                                    <p class="mt-1 text-lg font-semibold
                                              text-slate-900
                                              dark:text-white">
                                        September 6, 2026
                                    </p>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- Age -->
                    <div class="mt-5 overflow-hidden rounded-2xl
                                border border-indigo-100
                                bg-indigo-50
                                dark:border-indigo-900/50
                                dark:bg-indigo-950/30">

                        <div class="p-6 sm:p-8">

                            <div class="flex flex-col gap-6 sm:flex-row
                                        sm:items-center
                                        sm:justify-between">

                                <div>

                                    <p class="text-sm font-semibold
                                              uppercase tracking-wider
                                              text-indigo-600
                                              dark:text-indigo-400">
                                        Current Age
                                    </p>

                                    <div id="age"
                                         class="mt-2 text-3xl font-bold
                                                tracking-tight
                                                text-slate-900
                                                dark:text-white">
                                        Calculating...
                                    </div>

                                    <p id="birth-date-text"
                                       class="mt-2 text-sm text-slate-500
                                              dark:text-slate-400">
                                    </p>

                                </div>


                                <!-- Age Icon -->
                                <div class="flex h-20 w-20 shrink-0
                                            items-center justify-center
                                            rounded-2xl bg-indigo-600
                                            text-white shadow-lg">

                                    <svg class="h-10 w-10"
                                         fill="none"
                                         stroke="currentColor"
                                         viewBox="0 0 24 24">

                                        <path stroke-linecap="round"
                                              stroke-linejoin="round"
                                              stroke-width="1.5"
                                              d="M12 8v4l3 3"/>

                                        <circle cx="12"
                                                cy="12"
                                                r="9"
                                                stroke-width="1.5"/>

                                    </svg>

                                </div>

                            </div>

                        </div>

                    </div>


                    <!-- Today's Information -->
                    <div class="mt-5 grid gap-5 sm:grid-cols-2">


                        <!-- Today -->
                        <div class="rounded-2xl border border-slate-200
                                    p-5
                                    dark:border-slate-700">

                            <p class="text-sm text-slate-500
                                      dark:text-slate-400">
                                Today
                            </p>

                            <p id="today"
                               class="mt-1 text-lg font-semibold
                                      text-slate-900
                                      dark:text-white">
                            </p>

                        </div>


                        <!-- Next Birthday -->
                        <div class="rounded-2xl border border-slate-200
                                    p-5
                                    dark:border-slate-700">

                            <p class="text-sm text-slate-500
                                      dark:text-slate-400">
                                Next Birthday
                            </p>

                            <p id="next-birthday"
                               class="mt-1 text-lg font-semibold
                                      text-slate-900
                                      dark:text-white">
                            </p>

                        </div>

                    </div>


                    <!-- Footer -->
                    <div class="mt-10 border-t border-slate-200
                                pt-6 text-center
                                dark:border-slate-700">

                        <p class="text-sm text-slate-400">
                            © <span id="year"></span>
                            Khorn Sovannsoma
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </main>


    <script>

        /*
         |--------------------------------------------------------------------------
         | Personal Information
         |--------------------------------------------------------------------------
         */

        const dob = "2026-09-06";


        /*
         |--------------------------------------------------------------------------
         | Calculate Age
         |--------------------------------------------------------------------------
         */

        function calculateAge(dateString) {

            const birthDate = new Date(dateString + "T00:00:00");
            const today = new Date();

            let years =
                today.getFullYear() -
                birthDate.getFullYear();

            let months =
                today.getMonth() -
                birthDate.getMonth();

            let days =
                today.getDate() -
                birthDate.getDate();


            if (days < 0) {

                months--;

                const previousMonth =
                    new Date(
                        today.getFullYear(),
                        today.getMonth(),
                        0
                    );

                days += previousMonth.getDate();
            }


            if (months < 0) {

                years--;
                months += 12;
            }


            return {
                years,
                months,
                days
            };
        }


        /*
         |--------------------------------------------------------------------------
         | Display Age
         |--------------------------------------------------------------------------
         */

        function displayAge() {

            const age = calculateAge(dob);

            const parts = [];


            if (age.years > 0) {

                parts.push(
                    `${age.years} ${age.years === 1 ? 'year' : 'years'}`
                );

            }


            if (age.months > 0) {

                parts.push(
                    `${age.months} ${age.months === 1 ? 'month' : 'months'}`
                );

            }


            if (age.days > 0) {

                parts.push(
                    `${age.days} ${age.days === 1 ? 'day' : 'days'}`
                );

            }


            document.getElementById("age").textContent =
                parts.length
                    ? parts.join(", ")
                    : "0 days";
        }


        /*
         |--------------------------------------------------------------------------
         | Today's Date
         |--------------------------------------------------------------------------
         */

        function displayToday() {

            const today = new Date();

            document.getElementById("today").textContent =
                today.toLocaleDateString(
                    "en-US",
                    {
                        year: "numeric",
                        month: "long",
                        day: "numeric"
                    }
                );
        }


        /*
         |--------------------------------------------------------------------------
         | Next Birthday
         |--------------------------------------------------------------------------
         */

        function displayNextBirthday() {

            const birthDate =
                new Date(dob + "T00:00:00");

            const today = new Date();

            let nextBirthday =
                new Date(
                    today.getFullYear(),
                    birthDate.getMonth(),
                    birthDate.getDate()
                );


            if (nextBirthday < today) {

                nextBirthday =
                    new Date(
                        today.getFullYear() + 1,
                        birthDate.getMonth(),
                        birthDate.getDate()
                    );
            }


            const difference =
                nextBirthday.getTime() -
                today.getTime();


            const days =
                Math.ceil(
                    difference / (1000 * 60 * 60 * 24)
                );


            document.getElementById("next-birthday").textContent =
                `${nextBirthday.toLocaleDateString(
                    "en-US",
                    {
                        year: "numeric",
                        month: "long",
                        day: "numeric"
                    }
                )} (${days} days)`;
        }


        /*
         |--------------------------------------------------------------------------
         | Birth Date
         |--------------------------------------------------------------------------
         */

        function displayBirthDate() {

            const birthDate =
                new Date(dob + "T00:00:00");

            document.getElementById("birth-date-text").textContent =
                "Born on " +
                birthDate.toLocaleDateString(
                    "en-US",
                    {
                        year: "numeric",
                        month: "long",
                        day: "numeric"
                    }
                );
        }


        /*
         |--------------------------------------------------------------------------
         | Footer Year
         |--------------------------------------------------------------------------
         */

        document.getElementById("year").textContent =
            new Date().getFullYear();


        /*
         |--------------------------------------------------------------------------
         | Run
         |--------------------------------------------------------------------------
         */

        displayAge();
        displayToday();
        displayNextBirthday();
        displayBirthDate();

    </script>

</body>
</html>
