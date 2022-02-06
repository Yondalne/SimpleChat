<div class="flex-auto px-4 lg:px-10 py-10 pt-10">
    <form>
        <div class="relative w-full mb-3">
            <label
                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                    for="grid-password">
                Name
            </label>
            <input
                    type="email"
                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    placeholder="name"
                    style="transition: all 0.15s ease 0s;"/>
        </div>
        <div class="relative w-full mb-3">
            <label
                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                    for="grid-password">
                First name
            </label>
            <input
                    type="email"
                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    placeholder="first name"
                    style="transition: all 0.15s ease 0s;"/>
        </div>

        <div class="relative w-full mb-3">
            <label
                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                    for="grid-password">
                Email
            </label>
            <input
                    type="email"
                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    placeholder="Email"
                    style="transition: all 0.15s ease 0s;"/>
        </div>

        <div class="relative w-full mb-3">
            <label
                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                    for="grid-password">
                Password
            </label>
            <input
                    type="password"
                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    placeholder="Password"
                    style="transition: all 0.15s ease 0s;"/>
        </div>

        <div class="relative w-full mb-3">
            <label
                    class="block uppercase text-gray-700 text-xs font-bold mb-2"
                    for="grid-password">
                Confirm Password
            </label>
            <input
                    type="password"
                    class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                    placeholder=""
                    style="transition: all 0.15s ease 0s;"/>
        </div>

        <div class="text-center mt-6">
            <button
                class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full"
                type="button"
                style="transition: all 0.15s ease 0s;">

                Sign Up
            </button>
        </div>
    </form>
    <div class="flex flex-wrap mt-6 font-medium">
        <div class="text-right">
            <a href="#" wire:click='$emitUp("changeRoute", "/")' class="text-gray-50">
                <small>Already have an account ? Sign in</small>
            </a>
        </div>
    </div>
</div>
