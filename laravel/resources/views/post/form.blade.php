<div class="content">
    <form action="/post/save" method="post">
        
        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
        <input type="hidden" name="id" value="{{$post->id_post}}">
        <div class="form-group">
            <label for="exampleInputPassword1">Post</label>
            <textarea name="ds_post" class="form-control" rows="3" placeholder="">{{$post->ds_post}}</textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Categoria</label>
            <select name='id_categoria' class="form-control">
                <option value="">Selecione</option>
                @foreach($categorias as $categoria)
                    <option value="{{ $categoria->id_categoria }}">{{ $categoria->nm_categoria }}</option>
                @endforeach
            </select>
        </div>

        <p class="text-right">
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-primary" href="/post" role="button">Voltar</a>
        </p>
    </form>
</div>