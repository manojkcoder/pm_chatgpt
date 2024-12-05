<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Account') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto py-4 px-6">
            <div class="bg-white overflow-hidden shadow-sm rounded p-6">
                <div class="flex-1">
                    <div class="responsive-table">
                        <table class="table-auto w-full dataTable">
                            <tbody>
                                <tr>
                                    <td class="px-4 py-2">Name:</td>
                                    <td class="px-4 py-2">{{ $company->name }}</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2">Domain:</td>
                                    <td class="px-4 py-2">{{ $company->domain }}</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2">Country:</td>
                                    <td class="px-4 py-2">{{ $company->country }}</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2">Revenue in Mio. Euro:</td>
                                    <td class="px-4 py-2">{{ $company->revenue }}</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2">WZ Code:</td>
                                    <td class="px-4 py-2">{{ $company->wz_code }}</td>
                                </tr>
                                <tr>
                                    <td class="px-4 py-2">Headcount:</td>
                                    <td class="px-4 py-2">{{ $company->headcount }}</td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="flex justify-between mt-4">
                            <h2 class="font-semibold text-xl text-gray-800 leading-tight mt-4">Add Contact</h2>
                        </div>
                        <form method="POST" action="{{ route('createContact', $company->id) }}">
                            @csrf
                            <table class="table-auto w-full table-2" id="myTable">
                                <thead>
                                    <tr>
                                        <td class="py-2">First Name</td>
                                        <td class="py-2"><input type="text" name="first_name" value="{{ $contact->first_name }}" class="block mt-1 w-full"></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2">Last Name</td>
                                        <td class="py-2"><input type="text" name="last_name" value="{{ $contact->last_name }}" class="block mt-1 w-full"></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2">Email</td>
                                        <td class="py-2"><input type="text" name="email" value="{{ $contact->email }}" class="block mt-1 w-full"></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2">Phone</td>
                                        <td class="py-2"><input type="text" name="phone" value="{{ $contact->phone }}" class="block mt-1 w-full"></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2">Position</td>
                                        <td class="py-2"><input type="text" name="position" value="{{ $contact->position }}" class="block mt-1 w-full"></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2">LinkedIn</td>
                                        <td class="py-2"><input type="text" name="linkedin" value="{{ $contact->linkedin }}" class="block mt-1 w-full"></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2">URL</td>
                                        <td class="py-2"><input type="text" name="url" value="{{ $contact->url }}" class="block mt-1 w-full"></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2">Notes</td>
                                        <td class="py-2"><textarea name="notes" class="block mt-1 w-full">{{ $contact->notes }}</textarea></td>
                                    </tr>
                                    <tr>
                                        <td class="py-2">Extra</td>
                                        <td class="py-2"><textarea name="extra" class="block mt-1 w-full">{{ $contact->extra }}</textarea></td>
                
                                    <tr>
                                        <td colspan="2">
                                            <a href="{{ route('viewCompany', $company->id) }}" class="btn-bg-primary text-white  py-2 px-4 mr-2 mt-2">Cancel</a>
                                            <button class="btn-bg-secondary text-white  py-2 px-4 mt-2">Save</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<style>
.btn-bg-secondary {
	line-height: normal;
}
@media(max-width:640px){
.table-2 tr {
display: flex;
flex-direction: column;
gap: 0px;
margin: 12px 0px;
}
.table-2 tr td {
padding: 0px;
}
}
</style>    

</x-app-layout>