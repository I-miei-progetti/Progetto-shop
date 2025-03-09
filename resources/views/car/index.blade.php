
<x-layout>

<div class="container my-3">
    <div class="row justify-content-center">
        <div class="col-12 my-5 text-center">
            <h4 class="display-3 text-light">Auto in Vendita</h4>
        </div>
        @foreach ($cars as $car)
            <div class="col-12 col-md-3 d-flex justify-content-center my-3">
               <x-card 
               :car="$car"
               />
            </div>

        @endforeach
    </div>
</div>

</x-layout>
