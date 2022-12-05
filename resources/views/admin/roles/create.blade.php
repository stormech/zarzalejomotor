<x-admin-layout>
    @can('admin.roles.index')
    <div class=" container py-12">
        <div class=" max-w-2xl mx-auto px-4 sm:px-6 lg:px-8 py-12 text-gray-700">

            <div class="card bg-white p-4 rounded-lg shadowlg ">
                <div class="card-body">

                    {!! Form::open(['route' => 'admin.roles.store']) !!}
                    
                    @include('admin.roles.partials.form')

                    <div class="flex justify-end">
                        <x-button class="btn btn-sm text-white bg-greenLim-800 hover:bg-greenLim-500" type="submit">
                            {{ __('Add Role') }}
                        </x-button>
                    </div>
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
