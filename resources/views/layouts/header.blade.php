@if(Session::has('message'))
    <div class="w-100 alert alert-success mt-3 mr-3 ml-3" style="max-width: 500px;position: fixed; left: 50%;
    transform: translate(-50%, 0);" role="alert">
        <h4 class="alert-heading">{{Session::get('title')}}</h4>
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