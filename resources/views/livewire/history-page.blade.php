{{-- <div>

    <img class="ml-[25vw] w-[50vw]" src="{{ asset('images/cart-tagline.svg') }}" alt="Cart Tagline">
    <p
        class="ml-[20vw] rounded-[0.7vw] bg-[radial-gradient(87.89%47.34%_at_66.62%_61.78%,#B1D93A_0%,_#86B215_65%)] w-[60vw] h-[5vh] font-afacad text-white font-bold text-[1.5vw] flex items-center justify-center">
        History</p>

    <div class="relative h-[70vh] mt-[-10vh] ml-[10vw] justify-center flex flex-col">
        <div
            class="w-[80vw] bg-[#FFE9D8] pl-[3vw] h-[18vh] mt-[7vh] relative rounded-[2vw] shadow-2xl flex items-center">
            <img src="{{ asset('images/history-botol-1.svg') }}" alt="History Botol 1">
            <p class="font-afacad font-bold text-[3vw] text-black relative ml-[5vw]">12 Desember 2024</p>
            <p class="font-afacad text-[2vw] text-black relative ml-[23vw]">Code : 1234567899</p>
        </div>


        <div
            class="w-[80vw] bg-[#FFE9D8] pl-[3vw] h-[18vh] mt-[7vh] relative rounded-[2vw] shadow-2xl flex items-center">
            <img src="{{ asset('images/history-botol-2.svg') }}" alt="History Botol 2">
            <p class="font-afacad font-bold text-[3vw] text-black relative ml-[5vw]">10 Desember 2024</p>
            <p class="font-afacad text-[2vw] text-black relative ml-[23vw]">Code : 1234567899</p>
        </div>
    </div>

</div> --}}


<div class="w-full max-w-[85rem] h-[70vh] lg:h-[90vh] py-10 px-4 sm:px-6 lg:px-8 mx-auto">
    <h1 class="text-4xl font-bold text-slate-500">My Orders</h1>
    <div class="flex flex-col bg-white p-5 rounded mt-4 shadow-lg">
        <div class="-m-1.5 overflow-x-auto">
            <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="overflow-hidden">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead>
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Order</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Date</th>
                                <th scope="col"
                                    class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Order
                                    Amount</th>
                                <th scope="col"
                                    class="px-6 py-3 text-end text-xs font-medium text-gray-500 uppercase">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                                <tr wire:key='{{ $order->id }}' class="odd:bg-white even:bg-gray-100">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                                        {{ $order->id }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ $order->created_at->format('d-m-Y') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                                        {{ Number::currency($order->grand_total, 'IDR') }}</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium">
                                        <a wire:navigate href="history/{{ $order->id }}"
                                            class="bg-slate-600 text-white py-2 px-4 rounded-md hover:bg-slate-500">View
                                            Details</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $orders->links() }}
        </div>
    </div>
</div>