<x-layout>
    <div class="container my-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 border shadow rounded m-2">
                <form>
                    <div class="mb-3 text-white">
                      <label for="exampleInputEmail1" class="form-label">Marca</label>
                      <input type="text" class="form-control" id="exampleInputEmail1">
                    </div>
                
                    <div class="mb-3 text-white">
                        <label for="exampleInputEmail1" class="form-label">Modello</label>
                        <input type="text" class="form-control" id="exampleInputEmail1">
                      </div>
                
                      <div class="mb-3 text-white">
                        <label type="number">Anno di immatricolazione</label>
                        <input type="number" name="year" class="form-control" min="1900" max="2100" step="1" placeholder="Es. 2005" required>
                      </div>
                
                      <div class="mb-3 text-white">
                        <label for="exampleInputEmail1" class="form-label">Inserisci qui un'immagine</label>
                        <input type="text" class="form-control" id="exampleInputEmail1">
                      </div>
                    
                   
                    <button type="submit" class="btn btn-outline-success btnSearch m-2">Carica</button>
                  </form>
            </div>
        </div>
    </div>

</x-layout>
