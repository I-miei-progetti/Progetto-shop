<div class="container">

    <div class="container my-5 pt-5">
        <div class="row justify-content-center">
            <h3 class="text-center my-3 text-light mb-2">Componentistica </h3>
            <div class="col-12 col-md-6 border shadow rounded mt-2 blurred-bg">

                {{-- modificare la rotta --}}
                <form >


                    <div class="mb-3 text-white mt-2">
                        <label class="form-label">Nome</label>
                        {{-- wire:model serve per comunicare con l'attributo dichiarato in ComponentForm --}}
                        <input type="text" class="form-control" wire:model="name"
                            placeholder="es.Turbina Garrett GTX3076R" name="name">
                            
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label">Categoria</label>
                        <input type="text" class="form-control" wire:model="category" placeholder="es.Motore"
                            name="category">
                            
                    </div>


                    <div class="mb-3 text-white">
                        <label type="number">UPC</label>
                        <input type="number" name="year" class="form-control" wire:model.blur="upc" step="1" placeholder="Es. 123456789" name="upc">
                          
                            <p class="copyright">{{ $upc }}</p>
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label">Prezzo</label>
                        <input type="number" class="form-control" wire:model="price" placeholder="€" name="price">
                    
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label">Marca</label>
                        <input type="text" class="form-control" wire:model="brand" placeholder="es.Brembo"
                            name="brand">
                     
                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label">Destrizione</label>
                        <textarea class="form-control" wire:model="description" id="" cols="30" rows="10" name="description"></textarea>
                       

                    </div>

                    <div class="mb-3 text-white">
                        <label class="form-label ">Foto dell'articolo</label>
                        <input type="file" class="form-control" wire:model="img" placeholder=".img .jpeg"
                            name="img">

                    </div>


                    <button type="submit" class="btn btn-outline-success btnSearch m-2">Carica</button>
                </form>
            </div>
        </div>
    </div>





</div>
