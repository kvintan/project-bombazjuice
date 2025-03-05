<div>
    <div class="relative w-full overflow-x-hidden">
        <img class="relative w-[120vw] lg:w-full" src="{{ asset('images/fruitstats-background.svg') }}"
            alt="FruitStats Background">
    </div>

    <div
        class="h-[165vh] sm:h-[120vh] overflow-hidden sm:overflow-hidden lg:overflow-hidden lg:h-[190vh] bg-gradient-to-b [background:linear-gradient(180deg,#FFF_1.91%,#FFFFFE_44.38%,#F4F8CE_65.53%,#7DA758_100%)] min-h-screen relative flex flex-col items-center">
        <p class="font-afacad font-bold text-[8vw] mt-[2vh] lg:text-[4vw] lg:mt-[10vh] relative">For Your Information
        </p>
        <div
            class="flex-col w-[50vw] gap-[1vh] sm:ml-[-30vw] lg:w-[80vw] lg:h-[40vh] lg:gap-[5vw] lg:mt-[10vh] lg:ml-[0vw] flex sm:flex-row lg:flex-row">
            <div
                class="p-[8vw] mt-[1vh] sm:w-[30vw] sm:h-[25vh] sm:p-[5.5vw] lg:w-[24vw] lg:h-[40vh] bg-[#112F15] lg:mt-[0vh] lg:p-[0vh] lg:pl-[3vw] lg:pt-[4vh]">
                <p class="font-afacad text-[6vw] sm:text-[4vw] lg:text-[3vw] font-semibold relative text-white">Fruits
                </p>
                <p
                    class="font-afacad text-[3vw] sm:w-[15vw] sm:text-[1.7vw] lg:text-[1.5vw] text-wrap lg:w-[15vw] text-white">
                    In
                    FruitStats, every
                    fruit is
                    standardized to
                    a serving size of 100 grams for accurate and consistent
                    calorie calculations.</p>
            </div>
            <div
                class="p-[8vw] mt-[1vh] sm:w-[30vw] sm:h-[25vh] sm:p-[5.5vw] lg:w-[24vw] lg:h-[40vh] bg-[#728D5A] lg:mt-[0vh] lg:p-[0vh] lg:pl-[3vw] lg:pt-[4vh]">
                <p class="font-afacad text-[6vw] sm:text-[4vw] lg:text-[3vw] font-semibold relative text-white">Sugar
                </p>
                <p
                    class="font-afacad text-[3vw] sm:w-[15vw] sm:text-[1.7vw] lg:text-[1.5vw] text-wrap lg:w-[18vw] text-white">
                    every
                    juice is
                    standardized to
                    include
                    10 grams of sugar, which provides around 40 calories, ensuring a consistent of sweeteners.</p>
            </div>
            <div
                class="p-[8vw] mt-[1vh] sm:w-[30vw] sm:h-[25vh] sm:p-[5.5vw] lg:w-[24vw] lg:h-[40vh] bg-[#EBF1B1] lg:mt-[0vh] lg:p-[0vh] lg:pl-[3vw] lg:pt-[4vh]">
                <p class="font-afacad text-[6vw] sm:text-[4vw] lg:text-[3vw] font-semibold relative text-black">Milk</p>
                <p
                    class="font-afacad text-[3vw] sm:w-[15vw] sm:text-[1.7vw] lg:text-[1.5vw] text-wrap lg:w-[17vw] text-black">
                    Cow’s
                    milk contains
                    about
                    150-160
                    calories per 240 ml serving, making it a nutritious option for adding creaminess to your juice.</p>
            </div>
        </div>

        <img class="mt-[6vh] scale-[80%] sm:mt-[10] sm:mb-[-7vh] lg:mb-[0vh] lg:scale-[100%] lg:mt-[10vh]"
            src="{{ asset('images/fruitstats-count-calories.svg') }}" alt="FruitStats Count Calories">


        <div class="flex flex-row ml-[130vw] mt-[2vh] lg:flex-row">
            <div
                class="w-[60vw] h-[40vh] mt-[20vh] sm:ml-[60vw] sm:mt-[35.5vh] lg:ml-[-87vw] lg:w-[80vw] lg:h-[100vh] lg:mt-[30vh] gap-[0.25vw] relative flex lg:flex-col">
                <div
                    class="w-[35vw] h-[120vh] mt-[-20vh] ml-[-100vw] scale-[50%] lg:scale-[100%] sm:scale-[70%] sm:ml-[-100vw] lg:ml-[0vw] flex flex-row sm:gap-[0.5vw] gap-[0.25vw]">
                    <div class="gap-[1vw] lg:gap-[0.25vw] flex flex-col lg:ml-[-15vw]">
                        <button data-calories="52.1"
                            class="hover:brightness-[80] w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-100vw] sm:mt-[-30vh] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-1.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="68.1"
                            class="hover:brightness-[80%] w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-100vw] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-4.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="47.1"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-100vw] lg:mt-[0vh] lg:ml-[0vw] lg:visible lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-7.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="59.8"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-100vw] lg:mt-[0vh] lg:ml-[0vw] lg:visible lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-10.svg') }}');"
                            onclick="addCalories(this)">
                        </button>
                    </div>


                    <div class="gap-[1vw] lg:gap-[0.25vw] flex flex-col">
                        <button data-calories="50"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-84vw] lg:scale-[100%] sm:mt-[-30vh] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-2.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="88.7"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-84vw] lg:scale-[100%] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-5.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="160"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-84vw] lg:scale-[100%] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-8.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="33.7"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-84vw] lg:scale-[100%] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-11.svg') }}');"
                            onclick="addCalories(this)">
                        </button>
                    </div>


                    <div class="gap-[1vw] lg:gap-[0.25vw] flex flex-col">
                        <button data-calories="30.4"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:mt-[-30vh] sm:ml-[-68vw] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-3.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="60.9"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-68vw] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-6.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="32.5"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-68vw] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-9.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="66.9"
                            class="hover:brightness-[80%]  w-[30vw] h-[14vh] sm:w-[16vw] sm:h-[11vh] sm:ml-[-68vw] lg:mt-[0vh] lg:ml-[0vw] lg:w-[8.5vw] lg:h-[16vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-12.svg') }}');"
                            onclick="addCalories(this)">
                        </button>
                    </div>


                    <div class="gap-[0.25vw] flex flex-col">
                        <button
                            class="bg-[#3C3B38] hover:brightness-[80%] sm:visible lg:visible w-[20vw] rounded-[2vw] h-[29vh] mt-[0vh] ml-[1vw] sm:w-[12vw] sm:text-[6vw] sm:mt-[-30vh] sm:h-[23vh] sm:rounded-[2vw] sm:ml-[-52vw] lg:w-[8.5vw] lg:h-[32vh] lg:mt-[0vh] lg:rounded-[1vw] lg:ml-[0vw] text-white lg:text-[3vw] font-bold flex font-adlam justify-center items-center"
                            onclick="clearCalories()">CE</button>
                        <button
                            class="bg-[#3C3B38] hover:brightness-[80%] sm:visible lg:visible w-[20vw] rounded-[2vw] h-[29vh] ml-[1vw] sm:w-[12vw] sm:h-[23vh] sm:text-[6vw] sm:ml-[-52vw] sm:rounded-[2vw] lg:w-[8.5vw] lg:h-[32vh] lg:ml-[0vw] lg:rounded-[1vw] text-white lg:text-[6vw] font-bold flex font-adlam justify-center items-center">+</button>
                    </div>
                </div>


            </div>


            <div
                class="w-[70vw] h-[20vh] visible mt-[vh] ml-[-160vw] sm:visible sm:w-[30vw] sm:ml-[-175vw] sm:rounded-[2vw] sm:h-[31vh] sm:mt-[13vh] lg:visible lg:w-[35vw] relative lg:h-[65vh] bg-[#3C3B38] lg:ml-[-55vw] lg:mt-[10vh] lg:rounded-[1vw] flex">
                <div
                    class="relative text-white font-bold ml-[26vw] sm:text-[3vw] sm:ml-[7vw] lg:text-[3vw] lg:mt-[3vh] lg:ml-[9.7vw] font-afacad">
                    Total Calories
                </div>
                <div
                    class="ml-[-10vw] sm:text-[6vw] sm:ml-[-9vw] lg:w-[20vw] lg:h-[10vh] relative lg:mt-[26vh] lg:ml-[-18vw] flex items-center justify-center">
                    <div class="text-white font-bold lg:text-[5vw] font-afacad relative" id="totalCalories">0
                    </div>
                </div>
            </div>


        </div>
    </div>

    <script>
        let totalCalories = 0;

        function addCalories(element) {
            const calories = parseFloat(element.getAttribute('data-calories'));
            totalCalories += calories;
            document.getElementById('totalCalories').textContent = totalCalories.toFixed(2);
        }

        function clearCalories() {
            totalCalories = 0;
            document.getElementById('totalCalories').textContent = totalCalories;
        }
    </script>

</div>