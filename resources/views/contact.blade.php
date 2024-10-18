<x-app-layout>

    <x-slot name="header">
        {{ __('home') }}
    </x-slot>

    <div class="mx-auto my-32 max-w-7xl">
        <div class="grid grid-cols-2 gap-5">
            <div class="flex flex-col gap-4 p-3">
                <h1 class="text-5xl font-bold tracking-widest"><b>GET IN TOUCH <br> WITH US</b></h1>
                <p class="text-base tracking-wide">Jika anda memiliki kritik dan saran terhadap kami, silahkan hubungi
                    kami pada nomer atau email yang tertera dibawah ini.</p>
                <div class="mt-5 space-y-5">
                    <div class="flex items-center gap-5">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADEAAAAxCAYAAABznEEcAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFGUlEQVR4nNVZXWgcVRS+sdUmc85mbWOtaLEa0+6es0mqRkQFG0VBVBAR4w8qwTQ5dzcSi099M3nMQ1+0UIgiaFFEiqgoWkSrLVJRi9VWtMVQf1Gx4l/9aWtb5czcSXbj7mY32dmdfHDZnZm7s/PNvd+553zXmAhh0zhsCX/QT7PQID3mdMuwxTL+awmP+58MW/S8WQhYz63LLOMbwYPjq3Z1y3mW4QU9FoZd93fgchNnWEqstgSfOQKPjBpzmrvUZAnGLOMpSzA5SJAxcUQ2491gCX4RxqPCXn/RPmm4Sxj/sgy/Zzlxi4kThFGE8B/LcFgI15Xrm00nrhDC7y3jCWHcaBqNPjZnCMMT/nwn/GiYmldV8jtfJ4TvO+E/89BK02IaAVmDZ1mGtwMCsE16jFfN7/tXmWYhfNpFrt3rO2GFqSckBV3C8IUT6niegKtFk04pYTxpCb/Jpb0eUw9IOnGzMPxmGf+2DPfU4p6W8XZL8Ic2yeBtJkJMvTVh/FY6Wy6r5c1txlsrjF+Go6v/V8v7m5EOs0QYt7oF691h9s4x0elsZ/A/+Fy1OiuJgVTLuULwnrvxs1FHkpEOs8QSPuki117h5vPndcNB9i62hF+5IR6r+RCXgSXY4Aue8TvLrZfP9SZ3WMI/heCIEN5qGoAh8m60DL9qFpAl776qBaxvXwi/zpJ3iWkgsmnotAyHKg7n93avAEvwvFvA3sl2w9kmBnggnWizhDvcwvjKSMey1qIdB7taVgrjHtfxcU0pTIww2msWC+FmlyHvs6nkBQUdJJ240q/A4pKUzZJsBoUWHB5KY6876fWrcKZyIM1I494ItrmQH6T90+XjAm2Ex03+CWU4RHB93Ju4kQibT0II3xLG/e77ZhWRiSFGe81iS/iom0r79bmnSTBuHeblKAwvuuPXc13JpSZGGEi1JYTgZTeFXpP2pUlhfKqAxIyCXqfW59KJaRMDSKb1IiH4NDQg+oxZ5J8vQcKHZbhb6wUh+FkIrmvoik14tWX40RIey1JiIP9aWRKKoUziKl071AAQggdNA2AZhzT6CMNPNgPXzLw+K4m8VfzDYB7CRL0cvD5jFmmeFAp4cE3ywmL9KiKhqLfgB4oIuFTfiknUU/BSQsC1IhG54LNlBFxTElEJ3s4i4JqTUKjQZlvhtXjJdUK3Je8m/SxWzOSn11JGwJGQCAWoBUoo+P61yTPzS1thOFCQlzEcEII7wz7aX38XFjoDqbZEtc8wbxLToRA3TT8krpuKZIFp/LBzwkfdsQaGl1y/gCThptkEHCmJECpE50zoWz+lleHM0KjHej647v/nyUoFHDkJ9YWEcLubFoc0VS7XX6+7wl9Ha3ulTnpUJNQVEd0wcU7ERKXzWp09tyKf8G0hxo1zMaXnH50I33TpyKRk4FozBwThOtgeE3VXUolU5CT0bbka90hgx8OE2jxmHtB9CutGRbfCdFQqFXrVJIa5tSM0ey3jJ3O2FstYpuKSTTWtLSPXjIS/IAWW/lF/X45gXE3fWhIIoVmy7z4SHvMNDILxcv5XRSR0R8gSfuAiyceS9i419bIuye3pMe4rtRdSlkTBG9EdIYKxejuCo74pABsCU7v4DChJwtn5e13c353LIJkGQvz0PHA1/DIgb4v5fyR082SuUaIOaJoZFYNirZDEHmXpcpkdua5ku4khcl3J9il3nGAy1GuBA6hFiRA8pkzj2kSfT4unQgcQDjbEQ61Zg4P/AYXrxKhsdIirAAAAAElFTkSuQmCC">
                        <div class="inline">
                            <p class="tracking-wide text-black/70">Bussiness</p>
                            <p class="text-lg font-bold tracking-wide text-black">kenesfood@gmail.com</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAAEVUlEQVR4nO1ZW2hcZRCeeCO7MyexltKixUJJ3DOzmypGBS94eRFFVFCLikKx3czsbhCNlwdR6ItQFQVvIF6gwSoKalXEILUUfaooVikI1geVQL3gBbXWXtRW/j3/aU6O2WyE7uYX8sGyDzNn+f8zt2++BVjAArqDWikqKeNGZfrWBHep4B0A0AOh4+ZVS9EYNxjTARM6nP2o4P0QMkzoOmWaTA5Lfxvj08bRYE2iq0zoL2M62JC+AQgNa0uLIxV848jbZvpwpFw4O+ujgs95+8sQGHqMaZtPkR9VSNcDHJN3qg4VlqvQHyZ0SCuFsyAUaBxd4VNmt0rvqbP6Cj7oo7AVQoExPewPdU873/pQ/yJl/Ll54XLxUggBxvRIkvd421z8laO7fcR2zJRqXYfGVG0eiPGtufiPLYdC2qlqMd4A8411FVzabJFC+24dOKlvLs+YkCWXpncgBJjge0kd4I1z8i/T+f4Cn0IIUMFRX8jvtvUdhqIJvu8v/BSEgDWn959ojL+7Hu840CyuPenAc23XpR+EAnO0IZnCj7fy0TJd4wfer1qhGEJCvYKrXASMaW9Distm8lHGN33qjEGIUMHNPj0ebWH/wtmrjGUIEVrCoSYLFdo3E61Qxs+aFwyJC+VhTC/6PN88g218tggFARssnGKCv7mDjnDx8qzNUexkT6CDynQhhAoVvNNH4av8dG5ua0m3+s5dFkLE+ovgOLfU+IOOZ22rAY5VoS2+G33gBhuECK1Q7BcYR/Suz9pG42ixCX7p6+FtHYbjIURYTA1/gT0mJNNsHA0q0/eegmwKglrPBGV6wdfD5+7NT7PFxTPdVPaReGm1wAkQGtSRN6ZP/CW2O9llml3oAhP8xUdiIsiaWFsqnJzmvD/ktJyvSvGMZldK7B83uHdFq99qSHGZMj7jqLjbJ1x9dSX9sjmvQs/nVbpqHJ2WUg0T/EHLeEmLxrD734IZ7ejKjl2Pi8PpkHOXyEeiScuFJvyy86cxPTlSjs5zRDHZpbH5rFugNI7OdRJOup6makfHaYqV8eKpg9BEviZcOjgJ0nOqaW/aEvHgtWydrFkBvcbFu4zxJ+9zyIlnHVUAXSSm0gm357tTpkM5NW+n62DK+IqWoyvbLFUPpLPH05X7OiYou5qYKmzcdbQotiVc7FkvNLgXNAod7U5pi2XcczRlFmO62qfUTugkkiWfNmWE4fG5yjOzoT7Uv9I3g0noBpSp7tZR36G+zlPx/wpL0shFdiN0C07ROMJik9p4fbah1gomfef4veNAG5WkQ1RccCzDkfab0GOthII8XBs2po98y90A8wVX4M1hl84Dpr3K9EQ7OSYjW07mZ8y8wLVXZXzVD6jD/nurCd6UL3aXbulAq5XpWggJtRgrTor0u0XKgfY7VVxjvN2Y7jWhb9LagVChKxf1+461LR1WOWK3pSFLCP4PuGWAlhjTuuRPFnxIpXjZfJ9pAQuAwPEPv0bkH9uIV2QAAAAASUVORK5CYII=">
                        <div class="block">
                            <p class="tracking-wide text-black/70">Phone Number</p>
                            <p class="text-lg font-bold tracking-wide text-black">+62 878-1112-1888</p>
                        </div>
                    </div>
                </div>
                <div class="p-3 mt-10" style=";" data-aos="fade-down" data-aos-once="true" data-aos-delay="200">
                    <div class="mapouter">
                        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0"
                                scrolling="no" marginheight="0" marginwidth="0"
                                src="https://maps.google.com/maps?width=726&height=500&hl=en&q=Kenes bakery&t=&z=11&ie=UTF8&iwloc=B&output=embed"></iframe><a
                                href="https://fridaynightfunkin.lol/">fnf</a></div>
                        <style>
                            .mapouter {
                                position: relative;
                                text-align: right;
                                width: 100%;
                                height: 100%;
                            }

                            .gmap_canvas {
                                overflow: hidden;
                                background: none !important;
                                width: 100%;
                                height: 500px;
                            }

                            .gmap_iframe {
                                height: 500px !important;
                            }
                        </style>
                    </div>
                </div>
            </div>
            <div class="max-h-full border-2 rounded-lg border-neutral-500 form">
                <div class="px-5 py-12 space-y-14">
                    <h1 class="text-2xl font-bold tracking-wide">Send Your Comments...</h1>
                    <form action="" class="flex flex-col gap-8">
                        <div>
                            <label class="text-gray-800 dark:text-gray-200" for="fullname">Full Name</label>
                            <input id="fullname" type="name"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border-2 border-gray-400 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-800 dark:text-gray-200" for="email">Email Address</label>
                            <input id="email" type="email"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border-2 border-gray-400 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-800 dark:text-gray-200" for="subject">Subject</label>
                            <input id="subject" type="text"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border-2 border-gray-400 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
                        </div>
                        <div>
                            <label class="text-gray-800 dark:text-gray-200" for="message">Message</label>
                            <textarea id="message"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border-2 border-gray-400 rounded-md h-52 dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring"></textarea>
                        </div>

                        <div class="flex justify-center mt-6">
                            <button
                                class="w-full px-8 py-4 leading-5 text-white transition-colors duration-300 transform bg-csorange rounded-md hover:bg-[#FF7A00] focus:outline-none focus:bg-gray-600">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
