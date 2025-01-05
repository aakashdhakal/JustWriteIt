<x-head title="Discover" />
<x-navbar />
<main class="min-h-[100vh]">
    <section id="searchSection" class="bg-[#EDF2F4] w-full">
        <div class="flex flex-col items-center justify-center h-[30vh] gap-8">
            <h1 class="text-4xl font-bold primary-text">Discover New Stories</h1>
            <form action="/search" method="GET" class="flex gap-4 w-full items-center justify-center">
                <input type="text" name="query" id="search" placeholder="Search for posts , writers..."
                    class="py-2 px-4 w-[30%] border-2 rounded-lg outline-none text-base font-Poppins">
                <button type="submit" class="primary-btn">Search</button>
            </form>
        </div>
    </section>
    <section id="featuredPost" class="p-8 w-full flex items-center justify-center h-[50vh] gap-16 border-b-2">
        <div class="flex flex-col gap-4 w-[35%]">
            <!-- tag or category -->
            <span class="text-l primary-text font-bold font-Poppins">{{$posts[1]->category}}</span>
            <!-- date -->
            <a href="/post/{{$posts[1]->slug_url}}" class="text-l font-Poppins hover:underline">
                <h1 class="text-4xl font-bold font-Montserrat leading-snug">{{$posts[1]->title}}</h1>
            </a>
            <div class="flex gap-3 items-center text-gray-500 ">
                <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="author"
                    class="w-12 h-12 object-cover rounded-full border-2 border-[var(--primary-color)] p-1">
                <p class="text-base font-Poppins">{{$posts[1]->author->firstname . " " . $posts[1]->author->lastname }}
                </p>
                <div class="flex gap-1 items-center">
                    <iconify-icon icon="mdi:dot" width="2em" height="2em"></iconify-icon>
                    <span class="text-l text-gray-500 font-Poppins">{{$posts[1]->created_at->format('M d, Y')}}</span>
                </div>

            </div>
            <!-- <button class=" tertiary-btn underline">Read More</button> -->
        </div>
        <div class="w-[35%]">
            <img src="https://www.weetechsolution.com/wp-content/uploads/2021/05/What-is-Scala-Programming-Language-Used-For.jpg"
                alt="featured post" class="w-full h-full object-cover rounded-lg">
        </div>
    </section>
    <section id="latestPosts" class="p-8 w-full  h-[50vh] gap-16 border-b-2">
        <div class="flex flex-col gap-4 w-[35%]">
            <h2 class="text-3xl font-bold primary-text">Latest Posts</h2>
        </div>
    </section>
</main>
<x-footer />