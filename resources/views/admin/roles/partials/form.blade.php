<div class="">
      <div class="mb-2">                                    
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'w-full rounded-md','placeholder'=>'Introduzca su nuevo rol']) !!}
            @error('name')
                  <small class=" text-red-700">{{$message}}</small>
            @enderror
      </div>
      
                             
</div>

<div class="">
      <div class="mb-2">
            <h2 class="h3 mb-2">Lista de Permisos</h2>

            @foreach ($permissions as $permission)
                <div>
                  <label>
                        {!! Form::checkbox('permissions[]', $permission->id, null, ['class'=>'mr-1']) !!}
                        {{$permission->description}}
                  </label>
                </div>

            @endforeach
      </div>
</div>