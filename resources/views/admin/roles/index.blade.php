<x-admin-layout>
    @can('admin.roles.index')
    <div class=" container py-12">

        <div class="card bg-white p-4 rounded-lg shadowlg ">
            <div class="card-body">
                <div class="flex items-center mb-4">
                    <h2 class="font-semibold text-xl text-gray-600 leading-tight">
                        {{ __('List Roles') }}
                    </h2>

                    <form action="{{ route('admin.roles.create') }}" method="get" class="ml-auto">
                        <x-button-enlace color="green">{{ __('Add Role') }}</x-button-enlace>
                    </form>
                </div>

                <x-table-responsive>

                    @if ($roles->count())
                        <table class="min-w-full divide-y divide-gray-200">

                            <thead class="bg-gray-50">
                                <th scope="col"
                                    class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Id') }}
                                </th>
                                <th scope="col"
                                    class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Role') }}
                                </th>
                                <th colspan="2"
                                    class=" px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    {{ __('Actions') }}
                                </th>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">

                                @foreach ($roles as $rol)
                                    <tr>
                                        <td class="text-left px-6 py-4 whitespace-nowrap">

                                            <div class="text-sm font-medium text-gray-900">
                                                {{ $rol->id }}
                                            </div>

                                        </td>
                                        <td class="text-left px-6 py-4 whitespace-nowrap">
                                            
                                          <div class="text-sm font-medium text-gray-900">
                                                {{ __($rol->name) }}
                                            </div>

                                        </td>
                                        <td width="10px" class=" px-6 py-4 whitespace-nowrap">
                                           
                                          <form action="{{route('admin.roles.edit',$rol)}}">
                                                <x-button type="submit"
                                                    class="btn btn-sm text-white bg-trueGray-700 hover:bg-trueGray-500">
                                                    {{ __('Edit') }}</x-button>
                                           
                                          </form>
                                           
                                        </td>
                                        <td width="10px" class="px-6 py-4 whitespace-nowrap">
                                          {!! Form::open( ['route' => ['admin.roles.destroy', $rol], 'method' => 'delete'])!!}
                                            
                                                <x-button type="submit"
                                                    class="btn btn-sm text-white bg-red-800 hover:bg-red-500">
                                                    {{ __('Delete') }}</x-button>
                                            
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    @else
                        <div class="px-6 py-4">
                            <p>{{ __('There are no records with that search') }}</p>
                        </div>
                    @endif


                </x-table-responsive>
            </div>
        </div>

    </div>
   @else
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
    @endcan
</x-admin-layout>
