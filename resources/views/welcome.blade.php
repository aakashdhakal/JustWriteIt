<x-head title="JustWriteIt" />

<body class="bg-[#EDF2F4]">
    <!-- <header class="text-black p-4 h-20">
        <div class="flex justify-between items-center h-full">
            <a href="/" class="h-full">
                <img src="/public/logo-side-text.svg" class="w-52 h-full object-cover" alt="Logo">
            </a>
            <ul class="flex gap-8 text-l">
                <li><a href="/discover">Discover</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/contact">Contact</a></li>
            </ul>
            <nav>
                <a href="/login" class="mr-4 primary-btn">Login</a>
                <a href="/register" class="secondary-btn">Register</a>
            </nav>
        </div>
    </header> -->
    <x-navbar />
    <main>
        <section id="hero" class="p-8 w-full flex items-center justify-around gap-8 border-2">
            <div class="flex flex-col w-1/2 gap-8">
                <h1 class="text-6xl font-bold primary-text leading-[5rem]">Write Your Thoughts, Share your Stories</h1>
                <p class="text-xl leading-10">
                    Just Write It is a platform where you can share your thoughts, stories, and ideas with the world.
                    Get
                    started today!
                </p>
                <a href="/register" class="primary-btn w-max text-lg">Get Started</a>
            </div>
            <div class="w-[35%]">
                <img src="/public/hero.png" class="w-full" alt="Hero Image">
            </div>
        </section>

        <section id="features" class="p-12 w-full flex flex-col items-center gap-12 ">
            <h2 class="text-4xl font-bold primary-text">Our Amazing Features</h2>
            <div class="flex gap-12">
                <div
                    class="w-1/3 p-8 bg-white shadow-xl rounded-xl flex flex-col items-center text-center transform transition duration-500 hover:scale-105">
                    <iconify-icon icon="hugeicons:quill-write-01" width="4rem" height="4rem"
                        class="text-[var(--primary-color)]"></iconify-icon>
                    <h3 class="text-3xl font-bold mt-6">Express Yourself</h3>
                    <p class="text-lg mt-4">Craft and share your unique stories with our intuitive blog editor.</p>
                </div>
                <div
                    class="w-1/3 p-8 bg-white shadow-xl rounded-xl flex flex-col items-center text-center transform transition duration-500 hover:scale-105">
                    <iconify-icon icon="icon-park-outline:read-book" width="4rem" height="4rem"
                        class="text-[var(--primary-color)]"></iconify-icon>
                    <h3 class="text-3xl font-bold mt-6">Explore Content</h3>
                    <p class="text-lg mt-4">Dive into a world of diverse blogs and discover new perspectives.</p>
                </div>
                <div
                    class="w-1/3 p-8 bg-white shadow-xl rounded-xl flex flex-col items-center text-center transform transition duration-500 hover:scale-105">
                    <iconify-icon icon="heroicons-outline:share" width="4rem" height="4rem"
                        class="text-[var(--primary-color)]"></iconify-icon>
                    <h3 class="text-3xl font-bold mt-6">Engage & Connect</h3>
                    <p class="text-lg mt-4">Join the conversation by commenting and sharing your favorite posts.</p>
                </div>
            </div>
        </section>
        <section id="pricing" class="p-12 w-full flex flex-col items-center gap-12 ">
            <h2 class="text-4xl font-bold primary-text">Our Pricing</h2>
            <div class="w-1/2 p-8 bg-white shadow-xl rounded-xl flex flex-col items-center text-center">
                <iconify-icon icon="mdi:currency-usd-off" width="4rem" height="4rem"
                    class="text-[var(--primary-color)]"></iconify-icon>
                <h3 class="text-3xl font-bold mt-6">Free Forever</h3>
                <p class="text-lg mt-4">Yes, you read that right! Enjoy all our features without spending a dime. No
                    hidden fees, no credit card required. Just pure, unadulterated awesomeness.</p>
                <p class="text-lg mt-4">Because the best things in life are free, like hugs, sunsets, and our platform.
                </p>
                <a href="/register" class="primary-btn w-max text-lg mt-6">Get Started for Free</a>
            </div>
        </section>
        <section id="cta"
            class="p-8 w-full flex flex-col items-center justify-center gap-8 bg-gray-200 bg-[linear-gradient(270deg,rgba(0,0,0,0.7)_0%,rgba(0,0,0,0.7)_100%),url('https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D')] bg-center bg-cover h-[50vh]">
            <h2 class="text-4xl font-bold text-white">Join Our Community</h2>
            <a href="/register" class="primary-btn text-lg">Start writing stories</a>
        </section>
    </main>

</body>

</html>