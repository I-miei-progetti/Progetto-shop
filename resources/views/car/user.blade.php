<x-layout>

    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-12 my-5 text-center">
                <h4 class="display-3 text-light">Le tue auto</h4>
            </div>
            @if ($cars)
                @foreach ($cars as $car)
                    <div class="col-12 col-md-3 d-flex justify-content-center my-3">
                        <x-card :car="$car" />
                    </div>
                @endforeach
            @else
            <div class="col-12 col-md-6 my-5 d-flx justify-content-center">
                <h4>Non hai ancora caricato auto</h4>
            </div>
            @endif

        </div>
    </div>

</x-layout>
