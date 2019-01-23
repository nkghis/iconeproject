

@can('delete_users')
    {!! Form::open( ['method' => 'delete', 'url' => route($entity.'.destroy', [str_singular($entity) => $id]), 'style' => 'display: inline', 'onSubmit' => 'return Confirmation("êtes vous sure de supprimer?")']) !!}
    <button type="submit" class="btn-delete btn btn-xs btn-danger">
        <i class="material-icons">delete_forever</i> Supprimer
    </button>
    {!! Form::close() !!}
@endcan

