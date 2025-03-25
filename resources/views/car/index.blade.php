<x-layout>

    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 my-5 text-center">
                <h4 class="display-3 text-light">Auto in Vendita</h4>
            </div>
            @foreach ($cars as $car)
                <div class="col-12 col-md-3 d-flex justify-content-center my-3">
                    <x-card :car="$car" />
                </div>
            @endforeach
        </div>
        <div class="row mt-3">
            {{-- questo lo si fa per ridimensionare i bottoni ma lo si può fare anche in AppServiceProvider come nel video del 17/3 dal h1.10.00 --}}
            <div class="col-12 d-flex justify-content-center"> 
                <div class="custom-pagination">
                    {{ $cars->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
        {{-- <div class="d-flex justify-content-center ">
        <nav>
            {{ $orders->links('pagination::bootstrap-4'<--si usa questo per ridimensionare le frecce
        </nav>
    </div> --}}
    </div>

</x-layout>
