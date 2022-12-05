<div class="">
    <div class="mb-2">
        {!! Form::label('description', 'Descripción') !!}
        {!! Form::text('description', null,['class' => 'w-full rounded-md',
            'placeholder' => 'Introduzca nombre descripción (ej: Ver listado usuarios)',
        ]) !!}
        @error('description')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror

        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'w-full rounded-md',
            'placeholder' => 'Introduzca ruta permiso (ej: admin.users.index)',
        ]) !!}
        @error('name')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>


</div>





