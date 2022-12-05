<x-admin-layout>
    @can('admin.permissions.index')
    <div class=" container py-12">
        <div class=" max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">
            @if (session('info'))
                <div class="alert alert-danger">
                    {{ session('info') }}
                </div>
            @endif
            <div class="card bg-white p-4 rounded-lg shadowlg ">
                <div class="card-body">
                    {!! Form::model($permission, ['route' => ['admin.permissions.update', $permission], 'method' => 'put']) !!}

                    @include('admin.permissions.partials.form')

                    {!! Form::submit('Actualizar Permission', ['class' => 'btn btn-sm text-white bg-greenLim-800 hover:bg-greenLim-500 rounded p-2']) !!}
                 
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
    @endcan
    <div class=" container py-12">

        <div class="card bg-white p-4 rounded-lg shadowlg ">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                        {{ __('You do not have permissions for this view.') }}
                    </h2>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
