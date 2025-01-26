<div>


    <div
        class="h-[190vh] bg-gradient-to-b [background:linear-gradient(180deg,#FFF_1.91%,#FFFFFE_44.38%,#F4F8CE_65.53%,#7DA758_100%)] min-h-screen relative flex flex-col items-center">
        <p class="font-afacad font-bold text-[4vw] mt-[10vh] relative">For Your Information</p>
        <div class="w-[80vw] h-[40vh] gap-[5vw] mt-[10vh] flex flex-row">
            <div class="w-[24vw] h-[40vh] bg-[#112F15] pl-[3vw] pt-[4vh]">
                <p class="font-afacad text-[3vw] font-semibold relative text-white">Fruits</p>
                <p class="font-afacad text-[1.5vw] text-wrap w-[15vw] text-white">In FruitStats, every fruit is
                    standardized to
                    a serving size of 100 grams for accurate and consistent
                    calorie calculations.</p>
            </div>
            <div class="w-[24vw] h-[40vh] bg-[#728D5A] pl-[3vw] pt-[4vh]">
                <p class="font-afacad text-[3vw] font-semibold relative text-white">Sugar</p>
                <p class="font-afacad text-[1.5vw] text-wrap w-[18vw] text-white">every juice is standardized to include
                    10 grams of sugar, which provides around 40 calories, ensuring a consistent of sweeteners.</p>
            </div>
            <div class="w-[24vw] h-[40vh] bg-[#EBF1B1] pl-[3vw] pt-[4vh]">
                <p class="font-afacad text-[3vw] font-semibold relative text-black">Milk</p>
                <p class="font-afacad text-[1.5vw] text-wrap w-[17vw] text-black">Cow’s milk contains about 150-160
                    calories per 240 ml serving, making it a nutritious option for adding creaminess to your juice.</p>
            </div>
        </div>

        <img class="mt-[10vh]" src="{{ asset('images/fruitstats-count-calories.svg') }}"
            alt="FruitStats Count Calories">


        <div class="flex flex-row">
            <div class="w-[80vw] h-[60vh] mt-[10vh] gap-[0.25vw] relative flex flex-col">
                <div class="w-[35vw] h-[60vh] flex flex-row gap-[0.25vw]">
                    <div class="gap-[0.25vw] flex flex-col">
                        <button data-calories="52.1" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-1.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="68.1" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-4.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="47.1" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-7.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="59.8" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-10.svg') }}');"
                            onclick="addCalories(this)">
                        </button>
                    </div>


                    <div class="gap-[0.25vw] flex flex-col">
                        <button data-calories="50" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-2.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="88.7" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-5.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="160" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-8.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="33.7" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-11.svg') }}');"
                            onclick="addCalories(this)">
                        </button>
                    </div>


                    <div class="gap-[0.25vw] flex flex-col">
                        <button data-calories="30.4" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-3.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="60.9" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-6.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="32.5" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-9.svg') }}');"
                            onclick="addCalories(this)">
                        </button>

                        <button data-calories="66.9" class="hover:brightness-[80%] w-[8.5vw] h-[14.75vh] rounded-[1vw]"
                            style="background-image: url('{{ asset('images/fruitstats-12.svg') }}');"
                            onclick="addCalories(this)">
                        </button>
                    </div>


                    <div class="gap-[0.25vw] flex flex-col">
                        <button
                            class="bg-[#3C3B38] hover:brightness-[80%] w-[8.5vw] h-[29.5vh] rounded-[1vw] text-white text-[3vw] font-bold flex font-adlam justify-center items-center"
                            onclick="clearCalories()">CE</button>

                        <button
                            class="bg-[#3C3B38] hover:brightness-[80%] w-[8.5vw] h-[29.5vh] rounded-[1vw] text-white text-[6vw] font-bold flex font-adlam justify-center items-center">+</button>
                    </div>
                </div>


            </div>


            <div class="w-[35vw] relative h-[60vh] bg-[#3C3B38] ml-[-40vw] mt-[10vh] rounded-[1vw] flex">
                <div class="relative text-white font-bold text-[3vw] mt-[3vh] ml-[9.7vw] font-afacad">
                    Total Calories
                </div>
                <div class="w-[20vw] h-[10vh] relative mt-[26vh] ml-[-18vw] flex items-center justify-center">
                    <div class="text-white font-bold text-[5vw] font-afacad relative" id="totalCalories">0
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