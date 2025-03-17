

  <x-layout>
    <div class="container my-1">
        <div class="row justify-content-center">
           <h2 class="text-center my-5 text-light">Recenzioni dei nostri clienti</h2>
          
          
          <form  method="POST" action="{{route('review.store')}}">
            @csrf
              <div class="mb-3">
                  <label class="form-label text-light">Nome Utente</label>
                  <input type="text" class="form-control" name="name">
              </div>
          
              <div class="mb-3">
                  <label class="form-label text-light">Recensione</label>
                  <textarea name="comment" cols="20" rows="5" class="form-control"></textarea>
              </div>
          
              <!-- Sezione Valutazione a Stelle -->
              <div class="mb-3">
                  <label class="form-label text-light">Valutazione</label>
                  <div class="star-rating">
                      <input type="radio" id="star5" name="rating" value="5">
                      <label for="star5"><i class="fas fa-star"></i></label>
          
                      <input type="radio" id="star4" name="rating" value="4">
                      <label for="star4"><i class="fas fa-star"></i></label>
          
                      <input type="radio" id="star3" name="rating" value="3">
                      <label for="star3"><i class="fas fa-star"></i></label>
          
                      <input type="radio" id="star2" name="rating" value="2">
                      <label for="star2"><i class="fas fa-star"></i></label>
          
                      <input type="radio" id="star1" name="rating" value="1">
                      <label for="star1"><i class="fas fa-star"></i></label>
                  </div>
              </div>
          
              <button type="submit" class="btn btnSearch">Invia Recensione</button>
          </form>
          
          @foreach ($reviews as $review)
          <div class="col-12 col-md-3 d-flex justify-content-center mb-5">
              <div class="border shadow rounded">
                  <div class="m-5">
                      <p class="text-light">Nome: {{$review->name}} </p>
                      <p class="text-light">Commento: {{$review->comment}} </p>
                      <p class="text-light">Voto:  
                          @for ($i = 1; $i <= 5; $i++)
                              @if ($i <= $review->rating)
                                  <i class="fas fa-star text-warning"></i> <!-- Stella piena -->
                              @else
                                  <i class="far fa-star text-warning"></i> <!-- Stella vuota -->
                              @endif
                          @endfor
                      </p>
                  </div>
              </div>
          </div>
      @endforeach
      
        </div>
    </div>
    
    </x-layout>