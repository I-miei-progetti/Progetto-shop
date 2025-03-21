<x-layout>
    <div class="container my-1 text-white mb-5 ">
        
        <div class="row justify-content-center">
            <div class="col-12 text-center my-5">
                <h4 class="display-4">Inviaci la tua candidatura</h4>
            </div>
            <div class="col-12 col-md-6 border shadow rounded blurred-bg">
                <form clas='m-5' method="POST" action="{{route('work.submit')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label mt-2" >Nome</label>
                        <input type="text" class="form-control"placeholder="es.Mario" name='name'>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Cognome</label>
                        <input type="text" class="form-control" placeholder="es.Rossi" name='surname'>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" >Inserisci la tua Email</label>
                        <input type="email" class="form-control" placeholder="es. mariorossi@e-mail.it" name='email'>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"placeholder= >Inserisci il tuo numero di Telefono</label>
                        <input type="phone" class="form-control" name='phone'>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Parlaci di te</label>
                        <textarea name="comment" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>
                   
                    <div class="mb-3">
                        <label class="form-label">Carica qui il tuo Curriculum</label>
                        <input type="file" class="form-control" name='cv'>
                    </div>
                    <div class="my-3-text-center justify-content-center mb-3">
                        <button type="submit" class="btn btnSearch">Invia</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</x-layout>
