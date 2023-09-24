@if(Session::has('message'))
    <div class="w-100 alert alert-success m-3" style="position: fixed;" role="alert">
        <h4 class="alert-heading">Email Enviado!</h4>
        <p>{{Session::get('message')}}</p>
        <hr>
        <p class="mb-0">A equipe BlogText agradece!</p>
    </div>
@endif

@if($errors->any())
    <div class="alert alert-danger m-3" role="alert">
        <h4 class="alert-heading">Erro ao enviar!</h4>
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        <hr>
        <p class="mb-0">Verifique o(s) dado(s), e tente novamente!</p>
    </div>
@endif