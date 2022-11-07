<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All users') }}
        </h2>
    </x-slot>
    <div class="py-12">
        {{var_dump($bot)}}
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($user = Session::get('success'))
                        <div class="alert alert-success">
                            User {{ $user->name }} is created!
                        </div>
                    @endif
                    @if ($user = Session::get('delete.success'))
                        <div class="alert alert-success">
                            User {{ $user->name }} is deleted!
                        </div>
                    @endif
                    <a href="{{route('users.create')}}">Create</a>

                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="py-3 px-6">#</th>
                                        <th scope="col" class="py-3 px-6">Name</th>
                                        <th scope="col" class="py-3 px-6">Email</th>
                                        <th scope="col" class="py-3 px-6">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                                            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                                {{$user->id}}
                                            </th>
                                            <td class="py-4 px-6">
                                                {{$user->name}}
                                            </td>
                                            <td class="py-4 px-6">
                                                {{$user->email}}
                                            </td>
                                            <td class="py-4 px-6">
                                                <a class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
                                                   href="{{route('users.show',$user)}}">Show</a>
                                                <a class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:focus:ring-yellow-900"
                                                   href="{{route('users.edit',$user)}}">Edit</a>
                                            </td>

                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    <?php echo $users->render(); ?>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
